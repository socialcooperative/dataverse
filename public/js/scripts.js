
// PAGE INIT
$(document).ready(function() {

	$('.select2').select2();

	var pw_field = $(".fieldtype-Password");

	if(pw_field.length) $(pw_field).hideShowPassword(false, true);

	var phone_field = $(".fieldtype-Phone");

	if(phone_field.length) $(phone_field).intlTelInput({
	  nationalMode: false,
	  initialCountry: "auto",
	  geoIpLookup: function(callback) {
	    $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
	      var countryCode = (resp && resp.country) ? resp.country : "";
	      callback(countryCode);
	    });
	  }
	});

	$("#form_language").select2({
	  ajax: {
	    url: function (params) {
	      return "https://alpha.getacross.org/api/v2/languages/autocomplete?via=select2";
	    },
	    dataType: 'json',
	    data: function (params) {
	      return {
	        q: params.term, // search term
	      };
	    },
	   delay: 250,
	   cache: true
	 },
	  minimumInputLength: 0,
	  tags: false,
	  allowClear: true,
	  placeholder: "Start typing your language & select it",
	});

	//  the following simple make textboxes "Auto-Expand" when typed in
	$("textarea").keyup(function(e) {
		$(this).height(1).height(this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth")));
	});


});

function ajax_delete(endpoint_url, element) {
	$.ajax({
    url: endpoint_url,
    type: 'DELETE',
    success: function(result) {
        $(element).remove();
    }
});
}

function clone_to(element, to) {
	$( element ).clone().appendTo( $( to ) );
}



function back_with_fallback(element, url) {
	url = $(element).attr('href') || url || '/';
	var prevPage = window.location.href;

	window.history.go(-1);

	setTimeout(function(){
		if (window.location.href == prevPage) {
			window.location.href = url;
		}
	}, 500);

	return false;
}
