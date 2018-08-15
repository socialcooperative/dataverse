<?php
if (!$taxonomy_default) {
    $taxonomy_default = 1;
}
if (!$tag_default) {
    $tag_default = 1;
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="/js/d3.v4.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/sequences.css" />



<div class="form-group"><select id="form_tag" name="s" class="fieldtype-TaxonomyTag field-tag taxonomy_search form-control" data-help="" data-placeholder="Search tag" style="width:100%"><</select></div>

<?=($_GET['tag_id'] ? '<a class="btn btn-info float-right" href="?">Back to top categories</a> ' : '')?>

<p>Click on an any of the items to view more detailed sub-categories and tags.</p>

<div id="knowledge_browser">
	<div id="knowledge_left">
		<div id="knowledge_chart">
<!--			<div id="knowledge_center">
				<span class="knowledge_name"></span><br/>
				<span id="knowledge_percentage"></span>
			</div>-->
		</div>
	</div>
	<div id="knowledge_sidebar">

    <p class="taxonomy_edit">
      <a class="btn btn-warning btn-sm" href="#" onclick="return tag_go('/q/4?step=1')">Rename</a>
			<a class="btn btn-warning btn-sm" href="#" onclick="return tag_go('/q/5?step=1')">Move</a>
			<a class="btn btn-warning btn-sm" href="#" onclick="return tag_go('/q/7?step=1')">Merge with another tag</a>
			<a class="btn btn-danger btn-sm" href="#" onclick="return tag_go('/q/6?step=1')">Delete</a>
			<p><a class="btn btn-info btn-sm" href="#" onclick="return tag_go('/q/3?step=1')">Add a tag as sub-category</a>
      <a class="btn btn-info btn-sm" href="#" onclick="return tag_go('/q/9?step=1')">Link with a related tag</a>
    </p>

		<div id="knowledge_legend"></div>
		<div id="knowledge_content" style="visibility: hidden;">
			<h3 class="knowledge_name"></h3>
      <div id="tag_meta"></div>


			<div id="knowledge_description">
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
// Hack to make this example display correctly in an iframe
d3.select(self.frameElement).style("height", "700px");
var select_id = "<?=$_GET['tag_id']?>";
var active_tag_id = select_id;
var active_tag_label = "<?=$_GET['tag_label']?>";

// var json_url = "/needs_json?parent=<?=urlencode($_GET['parent'])?>&item=<?=urlencode($_GET['item'])?>";

var json_url = "/taxonomy/<?=($_GET['taxonomy_id'] ? intval($_GET['taxonomy_id']) : $taxonomy_default)?>/tag/<?=($_GET['tag_id'] ? intval($_GET['tag_id']) : $tag_default)?>?output=tree&format=json";

</script>
<script type="text/javascript" src="/js/taxonomies.js?v1.1"></script>
<script type="text/javascript" src="/js/taxonomy_browser.js?v1.1"></script>
