<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Taxonomy Browser</title>

</head>

<body>

	<h3>Needs & Offers Taxonomy <?=($_GET['tag_label'] ? ' > '.$_GET['tag_label'] : '')?></h3>

	<?php
    include_once("needs_browser.php");
    ?>
</body>

</html>
