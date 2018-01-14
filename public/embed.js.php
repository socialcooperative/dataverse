<?php
include_once('../custom/secrets.php');
global $bv;
header('Content-Type: application/javascript');
?>

function dataverse_open_form() {

	$('<link>').attr('rel','stylesheet')
	  .attr('type','text/css')
	  .attr('href',"<?=$bv->config->home_url?>/css/embed.css?v2.3")
	  .appendTo('head');

	$('body').append(
	  $('<div/>')
	    .attr("id", "dataverse_black_out")
	);
	$('body').append(
	  $('<div/>')
	    .attr("id", "dataverse_contain")
	);
	$('#dataverse_contain').append(
	  $('<div/>')
	    .attr("id", "dataverse_loader")
	);
	$('#dataverse_contain').append(
	  $('<div/>')
	    .attr("id", "dataverse_contain_embed")
	);
	$('#dataverse_contain_embed').append(
	  $('<iframe/>')
	);

  $('#dataverse_contain_embed iframe').attr('src', "<?=$bv->config->home_url?>/question?embedded&questionnaire=<?=$_GET['id']?>&step=1");
  $('#dataverse_contain_embed iframe').on('load', function() {
      $('#dataverse_loader').fadeOut(function() {
          $('#dataverse_contain_embed').fadeIn();
      });
  });

	return false;
}
