<?php
include_once('../custom/secrets.php');
global $bv;

$return['results'] = array();
$term   = $_GET['q']; 
$i = 0;
$fpath = __DIR__.'/../custom/tags.tsv';
//echo $fpath;

header('Content-Type: application/json');

if ($term && ($file = fopen($fpath, 'r')) !== FALSE) {
    
    while (($val = fgets($file)) !== false) {
//  while (($row = fgetcsv($file, 5000, "\t")) !== FALSE) {
    
//    	print_r($val);
//    	$id = $row[1] ? $row[0] : $i;
//    	$val = $row[1] ? $row[1] : $row[0];
    	
        if (preg_match("/^$term|	$term| $term/i", $val)){ 
            $return['results'][] = array('id'=>$val,'text'=>$val);
            $i++;
            if($i>500) break;
        }
    }

fclose($file);
}

echo json_encode($return);