<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use RedBeanPHP\R;

use \Wikibase\DataModel\Services\Lookup\EntityRetrievingTermLookup;

set_time_limit(0);
ini_set("memory_limit", "2048M");
//ignore_user_abort(true);

class TaxonomyImportWikibase extends Taxonomy
// TEMPORARY: used to import taxonomy data from a wikibase site like wikidata.org
// it is recommend to run via command line: php bin/console import:wiki --no-debug
{

    /**
    * @Route("/import/wikibase/{item_id}", name="wikimport")
    */
    public function import($item_id = 'Q1694') // better to run through command line
    {
        global $bv;

        // $item_ids = ['Q1694','Q1696','Q1695','Q1700','Q1701','Q1699', 'Q1698', 'Q1697']; // all

        $this->top_link_to_tag_id = 2; // the top parent tag to add tags under

        $this->skip_until_item = false;
        $this->skip_until_item = ["Q3144"=> 69472]; // wikid=>tag_id optional use to skip saving until a certain point
        $this->skip_until_after_item = true; // whether to also skip the given item

        $api_url = ($_GET && $_GET['api_url'] ? $_GET['api_url'] : 'https://wiki.haha.academy/api.php');

        // Wikibase API Setup

        $api = new \Mediawiki\Api\MediawikiApi($api_url);

        // $api->login(new ApiUser('username', 'password')); // if authentication is needed

        // Create our Factory, All services should be used through this!
        // You will need to add more or different datavalues here.
        // In the future Wikidata / Wikibase defaults will be provided in seperate a library.
        $dataValueClasses = array(
          'unknown' => '\DataValues\UnknownValue',
          'string' => '\DataValues\StringValue',
          'boolean' => '\DataValues\BooleanValue',
          'number' => '\DataValues\NumberValue',
          'globecoordinate' => '\DataValues\Geo\Values\GlobeCoordinateValue',
          'monolingualtext' => '\DataValues\MonolingualTextValue',
          'multilingualtext' => '\DataValues\MultilingualTextValue',
          'quantity' => '\DataValues\QuantityValue',
          'time' => '\DataValues\TimeValue',
          'wikibase-entityid' => '\Wikibase\DataModel\Entity\EntityIdValue',
      );
        $bv->wbFactory = new \Wikibase\Api\WikibaseFactory(
          $api,
          new \DataValues\Deserializers\DataValueDeserializer($dataValueClasses),
          new \DataValues\Serializers\DataValueSerializer()
      );


        //  lookup an item and all it's children and relationships:

        $bv->ids_already_followed = [];

        $bv->itemLookup = $bv->wbFactory->newItemLookup();
        $bv->termLookup = $bv->wbFactory->newTermLookup();
        // $bv->termLookup = getEntityRetrievingTermLookup
        // $entityRedirectLookup = $bv->wbFactory->newEntityRedirectLookup();

        $out = $this->wiki_item_get($item_id);

        echo print_r($out); // display for debugging

        exit();
    }

    public function wiki_item_get($item_id, $recurse = 1, $previous_tag_id = false, $previous_as = 'parent')
    { // set $recurse=false to only get the element (not the statements)
        global $bv;

        try {
            $wb_item_id = new \Wikibase\DataModel\Entity\ItemId($item_id); // eg: Q1694

            $item = $bv->itemLookup->getItemForId($wb_item_id);

            // print_r($item);

            if ($item) {
                $item_out = new class {
                };
                $entry=[];
                $tag_id=false;

                $entry['wikid'] = $item_out->id = trim($item_id);

                $this->import_log($wb_item_id, $recurse);

                $enLabel = $bv->termLookup->getLabel($wb_item_id, 'en');
                if ($enLabel) {
                    $this->import_log($enLabel, $recurse);
                    $entry['name'] = trim($enLabel);
                } else {
                    exit(" ERROR!! NO LABEL ");
                }

                $enDescription = $bv->termLookup->getDescription($wb_item_id, 'en');
                if ($enDescription) {
                    $this->import_log('Desc: '.$enDescription, $recurse);
                    $entry['description'] = trim($enDescription);
                }

                // print_r($item);
                // $redirectSources = $entityRedirectLookup->getRedirectIds($wb_item_id);

                if ($previous_as == 'related') {
                    // this was a 'related' item (rather than sub-theme)
                    // TODO: save ref in DB, for later cleanup

                    if ($previous_tag_id) {
                        $this->import_log("Saving as related item to tag ID: $previous_tag_id", $recurse);

                        $wikirelation = R::dispense('wikirelation');
                        $wikirelation->import($entry);
                        $wikirelation->tag_id = $previous_tag_id;
                        R::store($wikirelation);

                        $this->import_log("Saved as wikirelation ID: ".$wikirelation->id, $recurse);
                    } else {
                        $this->import_log("ERROR: No tag ID for the relation!", $recurse);
                    }
                } else {
                    // this is a sub-theme

                    if ($this->skip_until_item) {
                        if (isset($this->skip_until_item[$item_out->id])) {
                            if ($this->skip_until_after_item) {
                                $tag_id = $this->skip_until_item[$item_out->id];
                            } else {
                                $previous_tag_id = $this->skip_until_item[$item_out->id];
                            }

                            $this->skip_until_item = false; // stop skipping
                        }
                    } elseif (!$previous_tag_id) {
                        $previous_tag_id = $this->top_link_to_tag_id;
                    }

                    if ($previous_tag_id) {
                        $entry['parent_tag_id'] = $previous_tag_id;

                        // save tag in DB
                        $item_out->tag_id = $tag_id = $this->wb_add_tag($entry, $recurse);
                    } else {
                        $this->import_log("WARN: No previous tag ID for the parent, so could not save tag!", $recurse);
                    }

                    if ($recurse && !in_array($item_id, $bv->ids_already_followed)) { // follow down the tree

                        $bv->ids_already_followed[] = $item_id;

                        $statementList = $item->getStatements();

                        foreach ($statementList as $statement) {
                            // print_r($statement);
                            $snack= $statement->getMainSnak();
                            // print_r($snack);
                            $property= $snack->getPropertyId();
                            $this->import_log($property.' (property)', $recurse);

                            if ($property !='P11') { // P11 on the HAHA wiki means "Subtheme of" - ignore
                                $sub_item= $snack->getDataValue();
                                // print_r($sub_item);

                                $sub_item_id = (string) $sub_item->getEntityId();

                                $this->import_log($sub_item_id.' (item referenced)', $recurse+1);

                                if ($property=='P15') {
                                    // P15 means 'Related to' - don't follow further, but save as reference

                                    $this->import_log('Related to...', $recurse+1);

                                    $item_out->children[] = $this->wiki_item_get($sub_item_id, $recurse+1, $tag_id, 'related');
                                } elseif ($property=='P10' || $property=='P6') {
                                    // Sub-theme, follow away!

                                    $this->import_log('Sub theme...', $recurse+1);

                                    $item_out->children[] = $this->wiki_item_get($sub_item_id, $recurse+1, $tag_id);
                                } else {
                                    exit("\r ERROR: Unknown property!");
                                }
                            }
                        }
                    }
                }
                return $item_out;
            }
        } catch (DeserializationException $ex) {
            echo ' DeserializationException!! ';
        } catch (UnresolvedEntityRedirectException $ex) {
            echo ' UnresolvedEntityRedirectException!! ';
        } catch (PropertyDataTypeLookupException $ex) {
            echo ' PropertyDataTypeLookupException!! ';
        } catch (OutOfBoundsException $ex) {
            echo ' OutOfBoundsException!! ';
        } catch (Exception $ex) {
            echo " Exception!! ";
        }
    }


    public function import_log($s, $recurse=0)
    {
        echo "
";
        for ($i=0; $i < $recurse; $i++) {
            echo "	";
        }
        echo $s;
        echo "
";
    }

    public function wb_add_tag($entry, $recurse=0, $mock_run = false)
    {
        $tag = trim($entry['name']);

        if (!$tag) {
            exit("ERROR: Empty tag!");
        }

        $m_set = [];

        if (isset($entry['wikid'])) {
            $m_set['Code']['HAWB'] = $entry['wikid'];
        }
        if (isset($entry['description']) && $entry['description'] !=$tag) {
            $m_set['Description'][null] = trim($entry['description']);
        }

        if (isset($entry['parent_tag_id']) && $entry['parent_tag_id']) {
            $parent = $entry['parent_tag_id'];
        } else {
            $parent = $this->top_link_to_tag_id;
        }

        // var_dump($tag, $parent, $m_set);

        if ($mock_run) { // for testing

            if (!isset($this->mock_id)) {
                $this->mock_id=1;
            } else {
                $this->mock_id++;
            }

            $tag_id = $this->mock_id;
        } else {
            unset($this->item); // needed to avoid overide

            $tag_id = $this->tag_add($tag, $parent, false, $m_set);

            if (!$tag_id) {
                var_dump($tag, $parent, $m_set);
                exit("\nCould not create tag '$tag' !");
            }
        }

        $this->import_log("Added tag ID: $tag_id (under parent tag: $parent)", $recurse);

        return $tag_id;
    }
}
