// PAGE INIT
$(document).ready(function() {

	$('.select2').select2();


	$(".taxonomy_search").each(function() {
		var $this_taxonomy_tag = $(this);
		$this_taxonomy_tag.select2({
			ajax: {
				url: "/tags?via=select2",
				dataType: 'json',
				delay: 250,
				cache: true
			},
			minimumInputLength: 3,
			tags: true,
			allowClear: true,
			placeholder: $this_taxonomy_tag.data('placeholder'),
			tokenSeparators: [',']
		});
	});

	$('.taxonomy_search').on("select2:select", function(e) {
		tag = $(".taxonomy_search").val();
		if (tag) window.location = "?tag_id=" + tag;
	});

});

function tag_go(url) {
	window.location = url + '&tag=' + active_tag_id + '&tag_label=' + active_tag_label;
	return false;
}