jQuery(function($) {
	var key = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDfs1/wLxKKElztd2LKni3qHxrsW8y5xGNt8lYpxDSVObh1fkD9Cy3UfWi5J6ihppwU8GnIQXV7xa2KewOJzAG/9sDuVAeDHp79FAI6yAw0Q7UJ4HYOHF55HaQZqdW8WFsEV8cB5KChUMeOpRi31vSGC039bpJfyo/7cfFTvGzphQIDAQAB";
	var type = 'small_media';
	var v = '1.0',
		isFlag = false;
	//	失去焦点时
	$("input[type='text']").blur(function() {
			if(!(/^1[34578]\d{9}$/.test($(this).val()))) {
				$(this).parents("li").find(".warning_img").show();
				$(this).parents("li").find(".warning").show();
			} else {
				$(this).parents("li").find(".warning_img").hide();
				$(this).parents("li").find(".warning").hide();
				//			失去焦点校验内容
				var data = new Object(),
					that = $(this),
					key = $(this).attr("class"),
					val = $(this).val()
				data = {
					key: key,
					val: val,
					type: type,
					v: v
				}
				$.ajax({
					url: "/api/checkorgname",
					type: "POST",
					dataType: "json",
					data: data,
					success: function(res) {
						if(res['code'] == 'A00000') {
							that.parents("li").find(".warning_img").hide();
							that.parents("li").find(".warning").hide();
							isFlag = true;
						} else {
							that.parents("li").find(".warning_img").show();
							that.parents("li").find(".warning").text(res['code']).show();
							isFlag = false;
						}
					}
				})
			}
		})
		//	验证密码规则
	$("input[type='password']").blur(function() {
			if($(this).val().length > 6) {
				$(this).parents("li").find(".warning_img").hide();
				$(this).parents("li").find(".warning").hide();
				isFlag = true;
			} else {
				$(this).parents("li").find(".warning_img").show();
				$(this).parents("li").find(".warning").show();
				isFlag = false;
			}

		})
		//	登錄
	function confirm() {
		if(isFlag) {
			$("input").attr("disabled", "disabled");
			$('.confirm').unbind();
			data = {
				v: v,
				agenttype: "",
				type: type,
				phone: $(".phone").val(),
				pwd: getEntryptPwd($(".password").val(), key)
			}
			$.ajax({
				url: "{{host}}/login",
				type: "POST",
				dataType: "json",
				data: data,
				success: function(res) {
					if(res['code'] == 'A00000') {
						location.href = "control.html";
					} else {
						alert(res['code']);
						$("input").attr("disabled", false);
						$('.confirm').bind('click', confirm);
					}
				}
			})
		} else {
			//			没有勾选用户协议
			alert("手机号或密码填写有误！")
		}
	}
	$(".confirm").on("click", confirm)
		//	加密
	function getEntryptPwd(pwd, key) {
		var encrypt = new JSEncrypt();
		encrypt.setPublicKey(key);
		return encrypt.encrypt(pwd);
	}
})