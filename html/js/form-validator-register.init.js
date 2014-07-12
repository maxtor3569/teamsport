$.validator.setDefaults(
{
	submitHandler: function() { jQuery('#validateSubmitForm').submit(); },
	showErrors: function(map, list) 
	{
		this.currentElements.parents('label:first, div:first').find('.has-error').remove();
		this.currentElements.parents('.form-group:first').removeClass('has-error');
		
		$.each(list, function(index, error) 
		{
			var ee = $(error.element);
			var eep = ee.parents('label:first').length ? ee.parents('label:first') : ee.parents('div:first');
			
			ee.parents('.form-group:first').addClass('has-error');
			eep.find('.has-error').remove();
			eep.append('<p class="has-error help-block">' + error.message + '</p>');
		});
		//refreshScrollers();
	}
});

$(function()
{
	// validate signup form on keyup and submit
	$("#validateSubmitForm").validate({
		rules: {
			'profile[prenom]': "required",
			'profile[nom]': "required",
                        'profile[sports][]': "required",
			'profile[password]': {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#profile_password"
			},
			'profile[email]': {
				required: true,
				email: true
			},
			
			agree: "required"
		},
		messages: {
			'profile[prenom]': "Vui lòng nhập tên của bạn",
			'profile[nom]': "Vui lòng nhập họ của bạn",
			
			'profile[password]': {
				required: "Vui lòng cung cấp một mật khẩu",
				minlength: "Mật khẩu của bạn phải có ít nhất 5 ký tự"
			},
			confirm_password: {
				required: "Vui lòng cung cấp một mật khẩu",
				minlength: "Mật khẩu của bạn phải có ít nhất 5 ký tự",
				equalTo: "Vui lòng nhập mật khẩu tương tự như trên"
			},
			'profile[email]': "Vui lòng nhập một địa chỉ email hợp lệ",
                        'profile[sports][]': "Vui lòng chọn môn thể thao của bạn",
			agree: "<span style='color:red'>Hãy chấp nhận chính sách của chúng tôi</span>"
		}
	});

	//code to hide topic selection, disable for demo
	var newsletter = $("#newsletter");
	// newsletter topics are optional, hide at first
	var inital = newsletter.is(":checked");
	var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
	var topicInputs = topics.find("input").attr("disabled", !inital);
	// show when newsletter is checked
	newsletter.click(function() {
		topics[this.checked ? "removeClass" : "addClass"]("gray");
		topicInputs.attr("disabled", !this.checked);
	});
});