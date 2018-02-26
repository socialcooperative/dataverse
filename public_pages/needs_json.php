<?php
set_time_limit(0);

$file_top2 = "../custom/needs_top2.json";
$file_top3 = "../custom/needs_top3.json";
$file_top4 = "../custom/needs_top3.json";
$file_full = "../custom/needs_full.json";

header('Content-Type: application/json');

if($_GET['item']){ // filter

//	!search_and_ouput_json($file_top3) &&
	if(!$_GET['parent'] && search_and_ouput_json($file_top4)) exit();
	elseif(!search_and_ouput_json($file_full)) echo '{}';

//	var_dump($match_at_level_X);


} else { // original raw json

	// header("Location: /taxonomy/json?for=d3");
	readfile($file_top2);

//	$json = file_get_contents($file);
//	$json_a = json_decode($json, true);
//	output_json($json_a);
}

function search_and_ouput_json($file) {
	$json = file_get_contents($file);
//	print_r($json); exit();

	$json_a = json_decode($json, true);
//	print_r($json_a); exit();

	$json_a = search_in_array($_GET['item'], $json_a);
//	print_r($filtered);

	if($json_a){
		$output_json = (object) $json_a;
		$output_json->name = $_GET['item'];
		output_json($output_json);
		return true;
	}
}

function search_in_array($needle, $haystack) {
    global $match_at_level_X;
    $path = array();

    $preserve_keys = array_flip(['name']);

    $it = new RecursiveIteratorIterator(
        new ParentIterator(new RecursiveArrayIterator($haystack)),
        RecursiveIteratorIterator::SELF_FIRST
    );

//	if(!$_REQUEST['parent']) $it->setMaxDepth(2); // max depth


    foreach ($it as $key => $value) {

		$num_levels = $it->getDepth() - 1;

        if ($value['name'] == $needle) { // found our needle
//print_r($key);
//print_r($value);

		$parent_val = false;
		if($_REQUEST['parent']){
		    $parent = $it->getSubIterator($num_levels-1);
		    if($parent) $parent_val = $parent->current()['name'];
//		    exit($_REQUEST['parent']. " $num_levels $parent $parent_val");
			if($parent_val && $_REQUEST['parent'] !=$parent_val) continue; // not right tree, skip
		}

            $path = $value;
            $match_at_level_X = $num_levels;

//            if($num_levels >0){ // not a top level cat, so we want to tree that above it
            if(!count($path['children'])){ // no children, show upper tree instead

	            for ($i = $num_levels; $i >= 0; $i--) { // go up the tree

	            	$tkey = $it->getSubIterator($i)->key();
	                $vals = $it->getSubIterator($i)->current();

//					echo "\n------\ni  $i / $num_levels    ";
	//				echo "\npath      ";
	//				print_r($path);
	//				echo "\ntkey      ";
	//				print_r($tkey);
//					echo "\nvals      ";
//					print_r($vals);

					if($i !=$num_levels){ // merge all parents

						if($i < 4){ // remove extraneous children of topmost parents
							$vals = array_intersect_key($vals, $preserve_keys);
						}

						$vals = array_merge_recursive($vals, $path);
					}
	//				print_r($tkey);
	//              print_r($vals);

	                if($tkey=='children') $path = array($tkey => $vals );
	                else $path = [$vals];

	            } // going up levels

	            break;

	        } // if not top level
	        else { // top level

//	        	exit(10);
	        }
	    } // match
    } // RecursiveIteratorIterator

	if(!count($path)) return false; // no match

    return $path; // return tree
}

function reindex_for_json($array){ // make sure we use arrays for children instead of objects
    $return = [];

    foreach ($array as $key => $value) {

        $is_a = is_array($value);

        if ($key=='children' || !$is_a) {
            $return[$key] = $is_a ? reindex_for_json($value) : $value;
        } else {
            $return[] = $is_a ? reindex_for_json($value) : $value;
        }
    }
    return $return;
}

function output_json($output) {
	//	echo print_r($output);
//	$output = reindex_for_json($output);
	//	echo print_r($output);
	if(is_array($output) && count($output)==1) $output = current($output);
	echo json_encode($output);
}
