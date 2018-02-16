<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Taxonomy Browser</title>

</head>

<body>
	
	<h3>Needs & Offers Taxonomy <?=($_GET['parent'] ? ' > '.$_GET['parent'] : '')?> <?=($_GET['item'] ? ' > '.$_GET['item'] : '')?></h3>
	
	<?php
    include_once("needs_browser.php");
    ?>
</body>

</html>
