<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use RedBeanPHP\R;

set_time_limit(0);
ini_set("memory_limit", "2048M");
//ignore_user_abort(true);

class TaxonomyImportCSV extends Taxonomy // TEMPORARY: used to import taxonomy data from a CSV with the following columns: Level 0,Level 1,Level 2,Level 3,Level 4,Level 5,Level 6,UN0,UN1,UN2,UN3,Google,eBay,NICE
{

    /**
    * @Route("/import/csv/{limit_depth}", name="timport")
    */
    public function import($limit_depth = 1) // better to run through command line
    {
        $fn = "/custom/tags.csv"; // input file name
        //		$this->skip_until_after_tags = ["Youth"=>"Baseball Socks"];
        $this->tree_depth = 6;
        $this->limit_depth = $limit_depth;
        $this->max_cols = min($this->limit_depth, $this->tree_depth);
        $t_i = 20;

        $hasHeader = true; // input file has header, we will skip first line

        $path = $this->get('kernel')->getProjectDir();

        $r = array();

        if (($handle = fopen($path.$fn, "r")) !== false) {
            while (($parts = fgetcsv($handle, 0, ",")) !== false) {
                if (!$header and $hasHeader) {
                    $header = $parts;
                } else {
                    $minfo = [];
                    $minfo = array_combine($header, $parts);
                    $minfo = array_slice($minfo, $this->tree_depth); // meta cols in CSV after the tree
                    $minfo = array_filter($minfo); // remove empty

                    $parts = array_slice($parts, 0, $this->tree_depth); // get whole tree
                    $parts = array_filter($parts); // remove empty
                    $line_depth = count($parts); // this line defines which depth?

                    $parts = array_slice($parts, 0, $this->max_cols); // go to max depth
                    //					$parts = array_filter($parts); // remove empty

                    //					var_dump($line_depth, $this->limit_depth, $this->max_cols, $parts, $minfo);

                    $cur_item = trim(array_pop($parts)); // last col


                    // Build parent structure
                    // Might be slow for really deep and large structures
                    $parent_ar = &$r;
                    foreach ($parts as $part) { // columns

                        $part = trim($part);

                        if (!isset($parent_ar[$part])) {
                            $parent_ar[$part] = array();
                        } elseif (!is_array($parent_ar[$part])) {
                            $parent_ar[$part] = array();
                        }

                        $parent_ar = &$parent_ar[$part];
                    }


                    // Add the final part to the structure
                    if (empty($parent_ar[$cur_item]) || empty($parent_ar[$cur_item]['meta'])) {
                        $m_item = [];
                        $m_item['parents']['parent'] = end($parts);
                        $m_item['parents']['grandparent'] = $parts[count($parts)-2];

                        if ($line_depth == $this->limit_depth) {
                            $m_item['meta'] = $minfo;
                        }
                        //						$parent_ar[$cur_item] = $minfo;

                        if (is_array($parent_ar[$cur_item])) {
                            $parent_ar[$cur_item] = array_merge($parent_ar[$cur_item], $m_item);
                        } else {
                            $parent_ar[$cur_item] = $m_item;
                        }

                        //						if($line_depth==$this->limit_depth) $tag_id = $this->import_tag_add($cur_item, $minfo);

                        $t_i++;
                    }
                }
            }
        }

        echo '<pre>'; print_r($r); exit();

        // $this->import_iterate($r); // UNCOMMENT TO ACTUALLY RUN THE IMPORT


        exit();
    }

    public function import_iterate($tree, $line_depth=1)
    {
        foreach ($tree as $key => $item) {
            if ($key=='parents' || $key =='meta') {
                continue;
            }

            //			$item_out = new StdClass;
            //	    	$item_out->name = $key;

            //			if(is_array($item) && isset($item['parent'])){
            if ($line_depth == $this->limit_depth) {
                if ($this->skip_until_after_tags) {
                    if (in_array($key, $this->skip_until_after_tags) && isset($this->skip_until_after_tags[$item['parents']['parent']])) {
                        $this->skip_tag_found = true;
                        continue;
                    } elseif (!$this->skip_tag_found) {
                        continue;
                    }
                }

                $tag_id = $this->import_tag_add($key, $item);
            }
            //	    	elseif($line_depth < $this->limit_depth && is_array($item))
            elseif (is_array($item)) {
                $this->import_iterate($item, $line_depth+1);
            }
        }

        //	    return $items_out;
    }


    public function import_tag_add($tag, $minfo)
    {
        $m_src = $minfo['meta'];

        if ($m_src) {
            if ($m_src['UN3']) {
                $m_set['Code']['UN'] = $m_src['UN3'];
            } elseif ($m_src['UN2']) {
                $m_set['Code']['UN'] = $m_src['UN2'];
            } elseif ($m_src['UN1']) {
                $m_set['Code']['UN'] = $m_src['UN1'];
            } elseif ($m_src['UN0']) {
                $m_set['Code']['UN'] = $m_src['UN0'];
            }

            if ($m_src['NICE']) {
                $m_set['Code']['WIPO'] = $m_src['NICE'];
            }
            if ($m_src['eBay']) {
                $m_set['Code']['eBay'] = $m_src['eBay'];
            }
            if ($m_src['Google']) {
                $m_set['Code']['Google'] = $m_src['Google'];
            }
        }

        $parent = $minfo['parents']['parent'];
        $grandparent = $minfo['parents']['grandparent'];

        echo "\n\n$grandparent\t\t\t\t$parent\t\t\t\t$tag\n";
        //		print_r($m_set);
        unset($this->item);

        $tag_id = $this->tag_add($tag, $parent, $grandparent, $m_set);
        if (!$tag_id) {
            exit("\nCould not create tag '$tag' !");
        }
        echo $tag_id;

        return $tage_id;
    }
}
