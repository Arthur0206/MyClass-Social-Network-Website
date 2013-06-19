//input field which has default value should have class .need-clean
//input field which has info msg should have class .has-info
//info msg is <span>, has class .info-msg 
//error msg generated by validator plug-in is <label>, has class .error
//input field which only contain 0-9 has class .number-only
//if the info msg need to be put in next line, add a <br/> before all info messages.

function processCreateGroupForm() {
	$('#class-group-fieldset').nextAll('fieldset').hide();
	$('#submit-create-group').hide();
	$('#class-group-1st-row').nextAll('div').hide();
	
	$('input[name=class-group]').change(function() {		
		if ($('#not-class-group').is(":checked")) { //not a class group
			$('#school-group-fieldset').show();
			$('#class-group-1st-row').nextAll('div').hide();
		} else {
			$('#school-group-fieldset').hide();	
			$('#class-group-1st-row').next('div').fadeIn();
			//$('#class-group-label').nextAll('select[value=0]:first').nextAll('select').attr('disabled', true);
			$('#class-group-label').nextAll('select').val(0);
			$('#school-country-0').nextAll('select').attr('disabled', true);
		}
	}); //end change

	$('#school-country-0').change(function() {
		$(this).nextAll('select').val(0);
		$(this).next('select').nextAll('select').attr('disabled', true);
		$('#class-group-2nd-row').nextAll('div').hide();
		if($(this).val() == 0) {
			$(this).nextAll('select').attr('disabled', true);
		} else {
			$(this).next('select').attr('disabled', false);			
		}
	}); //end change

	$('#school-region-0').change(function(evt) {
		$(this).nextAll('select').val(0);
		$(this).next('select').nextAll('select').attr('disabled', true);
		$('#class-group-2nd-row').nextAll('div').hide();
		if($(this).val() == 0) {
			$(this).nextAll('select').attr('disabled', true);
		} else {
			$(this).next('select').attr('disabled', false);			
		}
	}); //end change

	$('#school-type-0').change(function() {
		$(this).nextAll('select').val(0);
		$('#class-group-2nd-row').nextAll('div').hide();
		if($(this).val() == 0) {
			$(this).nextAll('select').attr('disabled', true);
		} else {
			$(this).next('select').attr('disabled', false);				
		}
	}); //end change

	$('#school-name-0').change(function() {
		$('#class-group-2nd-row').nextAll('div').hide();
		if($(this).val() == 0) {
			$('#class-group-2nd-row').nextAll('div').hide();
			$('#class-group-fieldset').nextAll('fieldset').hide();
		} else {
			$('#class-group-2nd-row').next('div').show();
			type = $('#school-type-0').val();
			if (type == 1) { 						
				//graduate school and Phd - only has department
				
				$('#class-group-3rd-row').html('')
				.append('<label for="grad-department" class="describe-label">科系</label>') 
				.append('<select name="grad-department" id="grad-department"> <option value="0">--系所--</option><option value="1">外文系</option><option value="2">中文系</option><option value="3">經濟系</option><option value="4">企管系</option><option value="5">資工系</option><option value="6">化工系</option><option value="7">醫學系</option><option value="8">牙醫系</option><option value="9">土木系</option></select>');
				
				$('#department').val(0);
				$('#class-group-4th-row').remove(); 
			} else if (type == 2 || type == 3 || type == 4 || type == 5 || type == 6) { 	
				//has a department and a graduate year
				
				$('#class-group-3rd-row').html('')
				.append('<label for="under-department" class="describe-label">科系</label>') 
				.append('<select name="under-department" id="under-department"> <option value="0">--系所--</option><option value="1">外文系</option><option value="2">中文系</option><option value="3">經濟系</option><option value="4">企管系</option><option value="5">資工系</option><option value="6">化工系</option><option value="7">醫學系</option><option value="8">牙醫系</option><option value="9">土木系</option></select>');

				$('#department').val(0);			
			} else if (type == 7 || type == 8) {					
				//high school and junior high school
				
				$('#class-group-3rd-row').html('')
				.append('<label for="high-school-year" class="describe-label">年級</label>') 	
				.append('<select name="high-school-year" id="high-school-year"> <option value="0">--年級--</option><option value="1">一年級</option><option value="2">二年級</option><option value="3">三年級</option></select>');

				$('#department').val(0);		
			} else if (type == 9) {
				//elementary school - 6 year

				$('#class-group-3rd-row').html('')
				.append('<label for="elem-school-year" class="describe-label">年級</label>') 	
				.append('<select name="elem-school-year" id="elem-school-year"> <option value="0">--年級--</option><option value="1">一年級</option><option value="2">二年級</option><option value="3">三年級</option><option value="4">四年級</option><option value="5">五年級</option><option value="6">六年級</option></select>');

				$('#department').val(0);				
			}
		}
	}); //end change
	
	$('#grad-department').change(function() {
		if($(this).val() == 0) {
			$(this).nextAll('select').attr('disabled', true);
		} else {
			$(this).next('select').attr('disabled', false);				
		}	
	}); //end change
}

function processLogInForm(){
	$('#logIn-form').validate({
		rules: {
			account: {
				required: true
			},
			password: {
				required: true
			}
		},
		messages: {
			account: {
				required: "請輸入您的帳號"
			},
			password: {
				required: "請輸入您的密碼"
			}
		}
	});
	$('input').eq(0).focus();
}

function processRegisterForm(){

 	//allow number only in .number-only input field.
	$('.number-only').keyup(function() {
		value = $(this).val();
		$(this).val(value.replace(/[^0-9\.]/g,''));
	}); //end keyup

	//auto focus on #day when user input 2 digits and it is valid month
	$('#month').keyup(function() {
		value = $(this).val();
		if (value.length == 2) {
			if (value <= 12 && value >= 1) {
				$(this).siblings('#day').focus();
			}
		}
	}); //end keyup
	
	//auto focus on #year when user input 2 digits and it is valid day
	$('#day').keyup(function() {
		day = $(this).val();
		month = $('#month').val();
		if (day.length == 2) {
			if (((month==1 || month==3 || month==5 || month==7 || month==8 || month==10 || month==12) && (day>=1) && (day<=31))
				|| ((month==4 || month==6 || month==9 || month==11) && (day >= 1) && (day <= 30))
				|| (month==2 && day >= 1 && day <= 29)) {
				$(this).siblings('#year').focus();
			}
		}
	}); //end keyup

	//auto blur when user type in 4 digits in year field
	$('#year').keyup(function() {
		if ($(this).val().length == 4) {
			$(this).blur();
		}
	}); //end keyup

 	//change #day and #month from 2 to 02 when blured.
	$('#day, #month').blur(function() {
		value = $(this).val();
		if (value > 0 && value.length < 2) {
			$(this).val("0" + value);
			$(this).next().focus();
		}
	}); //end blur
	
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
		if ($(this).siblings('label.error').length == 0 || //no error label
			$(this).siblings('label.error').is(":hidden")) //all error label is hidden
		{
			$(this).siblings('span').show(); //show info msg
		}
	}); //end focus
	
	$('.has-info').blur(function() {
		$(this).siblings('span').hide(); //hide info msg
	}); //end blur
	
	jQuery.validator.addMethod("notEqual", function(value, element, param) {
		return this.optional(element) || (value != param);
	}, "輸入不可和default值相同");

	jQuery.validator.addMethod("validDate", function(value, element) {
		day = value;
		month = $('#month').val();
		if (((month==1 || month==3 || month==5 || month==7 || month==8 || month==10 || month==12) && (day>=1) && (day<=31))
			|| ((month==4 || month==6 || month==9 || month==11) && (day >= 1) && (day <= 30))
			|| (month==2 && day >= 1 && day <= 29)) {
			return true;
		} else {
			return false;
		}
	}, "日期無效");

	$('#register-form').validate({
		groups: {
			dateOfBirth: "month day year"
		},
		rules: {
			name: {
				required: true,
				notEqual: "ex. 張君雅"
			},
			account: {
				required: true,
				remote: 'check_account.php'
			},
			password: {
				required: true,
				rangelength: [3,16]
			},
			passwordconfirm: {
				required: true,
				equalTo:'#password'
			},
			email: {
				required: true,
				email: true
			},
			gender: {
				required: true
			},
			month: {
				required: true,
				notEqual: "月",
				range: [1,12]
			},
			day: {
				required: true,
				notEqual: "日",
				validDate: true
			},
			year: {
				required: true,
				notEqual: "年",
				range: [1900,2050]
			},
			termOfUse: {
				required: true
			},
			region: {
				notEqual: 0
			}
		}, //end rules
		messages: {
			name: {
				required: "請輸入您的姓名",
				notEqual: "請輸入您的姓名"
			},
			account: {
				required: "請選擇您的MyClass帳號",
				remote: "此帳號已被人使用"
			},
			password: {
				required: "請設定密碼",
				rangelength: "密碼需介於3到16個字元"
			},
			passwordconfirm: {
				required: "請確認密碼",
				equalTo: "密碼和第一次輸入不一致"
			},
			email: {
				required: "請提供您的email, 以便系統計確認信給您",
				email: "請輸入正確的email信箱"
			},
			gender: {
				required: "請選擇您的性別"
			},
			month: {
				required: "請輸入您的生日",
				notEqual: "請輸入您的生日",
				range: "請輸入合理的日期"
			},
			day: {
				required: "請輸入您的生日",
				notEqual: "請輸入您的生日",
				validDate: "請輸入合理的日期"
			},
			year: {
				required: "請輸入您的生日",
				notEqual: "請輸入您的生日",
				range: "請輸入合理的日期"
			},
			termOfUse: {
				required: "請閱讀MyClass使用服務條款並勾選此欄位"
			},
			region: {
				notEqual: "請選擇您的所在地區"
			}
		},
		errorPlacement: function(error, element) {
			if (element.is(":radio") || element.is(":checkbox")) {
				error.appendTo(element.parent());
			} else if (element.is("#day") || element.is("#month") || element.is("#year")) {
				error.insertAfter(element.siblings('span')); //show error after info msg.
			} else {
				error.insertAfter(element);
			}
		}
	}); //end validate

	$('input').eq(0).focus();
}
