<?php
include_once('../custom/secrets.php');
global $bv;

$return['results'] = array();
$term   = $_GET['q']; 
$i = 0;

if ($term && ($file = fopen(__DIR__.'/../custom/tags.tsv', 'r')) !== FALSE) {
    while (($row = fgetcsv($file, 5000, "\t")) !== FALSE) {
    	
    	$id = $row[1] ? $row[0] : $i;
    	$val = $row[1] ? $row[1] : $row[0];
    	
        if (preg_match("/^$term| $term/i", $val)){ 
            $return['results'][] = array('id'=>$id,'text'=>$val);
            $i++;
            if($i>100) break;
        }
    }

fclose($file);
}

echo json_encode($return);