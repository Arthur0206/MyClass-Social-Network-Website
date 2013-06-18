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
		if (!$(this).hasClass('error')) {
			$(this).siblings('span').show();
		}
	}); //end focus
	
	$('.has-info').blur(function() {
		$(this).siblings('span').hide();
	}); //end blur
	
	jQuery.validator.addMethod("notEqual", function(value, element, param) {
		return this.optional(element) || (value != param);
	}, "輸入不可和default值相同");
	
	$('#register').validate({
		groups: {
			dateOfBirth: "month day year"
		},
		rules: {
			name: {
				notEqual: "ex. 張君雅"
			},
			account: {
				required: true
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
				notEqual: "月"
			},
			day: {
				notEqual: "日"
			},
			year: {
				notEqual: "年"
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
				notEqual: "請輸入您的姓名"
			},
			account: {
				required: "請選擇您的MyClass帳號"
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
				notEqual: "請輸入您的生日"
			},
			day: {
				notEqual: "請輸入您的生日"
			},
			year: {
				notEqual: "請輸入您的生日"
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
				error.insertAfter(element.siblings('span'));
			} else {
				error.insertAfter(element);
			}
		}
	}); //end validate
}