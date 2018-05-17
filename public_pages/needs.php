<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Commons Taxonomy Browser</title>

</head>

<body>

	<h3>Needs & Offers Taxonomy <?=($_GET['tag_label'] ? ' > '.$_GET['tag_label'] : '')?></h3>

	<?php
    $taxonomy_default = 2;
    $tag_default = 3;
    include_once("taxonomy_browser.php");
    ?>
</body>

</html>
