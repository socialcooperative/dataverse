<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="/js/d3.v4.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/sequences.css" />

<?=($_GET['item'] ? '<a class="btn btn-info float-right" href="?">Back to top categories</a> ' : '')?>
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
		<div id="knowledge_legend"></div>
		<div id="knowledge_content" style="visibility: hidden;">
			<h3 class="knowledge_name"></h3>
			<p><a class="btn btn-warning btn-sm" href="#">Rename</a>
			<a class="btn btn-warning btn-sm" href="#">Move</a>
			<a class="btn btn-warning btn-sm" href="#">Merge with another</a>
			<a class="btn btn-danger btn-sm" href="#">Delete</a>
			<p><a class="btn btn-info btn-sm" href="#">Add a sub-category / tag</a>
			<div id="knowledge_description">
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
// Hack to make this example display correctly in an iframe
d3.select(self.frameElement).style("height", "700px");
var select_id = "<?=$_GET['item']?>";
var json_url = "/needs_json?parent=<?=urlencode($_GET['parent'])?>&item=<?=urlencode($_GET['item'])?>";
</script>
<script type="text/javascript" src="/js/needs.js"></script>
