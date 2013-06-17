function processForm(){
	$('.need-clean').focus(function() {
		var field = $(this);
		if (field.val()==field.prop('defaultValue')) {
			field.val('');
		}
	}); //end focus
	$('.need-clean').blur(function() {
		var field = $(this);
		if (field.val()=='') {
			field.val(field.prop('defaultValue'));
		}
	}); //end blur
	$('.has-info').focus(function() {
		$(this).siblings('span').show();
	}); //end focus
	$('.has-info').blur(function() {
		$(this).siblings('span').hide();
	}); //end blur
}