<?php
/** Edit all fields containing "_html" by HTML editor 
* @link http://www.adminer.org/plugins/#use
* @uses https://github.com/jhollingworth/bootstrap-wysihtml5
* @uses https://github.com/summernote/summernote
* @author Mayel de Borniol - deborniol.com
*/
class AdminerNiceEditor {

	function head() {
		echo '<!-- include libries(jQuery, bootstrap, fontawesome) -->
		<script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script> 
		<link rel="stylesheet" href="/css/bootstrap.min.css" />
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
		
		<!-- include summernote css/js-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" />
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.min.js"></script>
		<script type="text/javascript" src="/js/sanitize-html.js"></script>
		<script type="text/javascript" src="/js/summernote-cleaner.js"></script>
		<script type="text/javascript" src="/js/wysiwyg.js"></script>
		
		';
		require_once(dirname(__FILE__).'/../../../js/wysiwyg.html');
	}


	function editInput($table, $field, $attrs, $value) {
		if (preg_match("~text~", $field["type"]) || preg_match("~_html~", $field["field"])) {
		//if ($field["field"]=='content') {
			return "<textarea $attrs class='niceeditor' id='field-" . h($field["field"]) . "' rows='8' cols='50'>" . h($value) . "</textarea>";
		}
	}

}