<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>HAHA Academy Taxonomy Browser</title>

</head>

<body>

	<h3>HAHA Academy Taxonomy <?=($_GET['tag_label'] ? ' > '.$_GET['tag_label'] : '')?></h3>

	<?php
    $taxonomy_default = 1;
    $tag_default = 1;
    include_once("taxonomy_browser.php");
    ?>
</body>

</html>
