<?php

global $bv, $fair_nodes;

$file_full = "http://api.fairplayground.info/rawdata/FCLN.geo.json";

$json = file_get_contents($file_full);
//	print_r($json); exit();

$json_a = json_decode($json, true);
$features = current($json_a['features']);
//	print_r($features); exit();

foreach ($features as $node) {
//		print_r($node);
	$n = $node['properties'];
	$fair_nodes->list[$n['id']] = $n['name'];
	$fair_nodes->points[$n['id']] = $node['geometry']['coordinates'];
}

$bv->preload_choices['fair_node'] = $fair_nodes->list;
//$bv->preload_choices['location'] = $fair_nodes->list;

//	print_r($fair_nodes);
//	print_r($fair_nodes_loc);
//	exit();
//

