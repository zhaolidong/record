jQuery(function($) {
	var key = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDfs1/wLxKKElztd2LKni3qHxrsW8y5xGNt8lYpxDSVObh1fkD9Cy3UfWi5J6ihppwU8GnIQXV7xa2KewOJzAG/9sDuVAeDHp79FAI6yAw0Q7UJ4HYOHF55HaQZqdW8WFsEV8cB5KChUMeOpRi31vSGC039bpJfyo/7cfFTvGzphQIDAQAB",
		type = 'small_media',
		v = '1.0',
		isFlag = false;
	//	var agenttype = getParam('agenttype');
	//	弹出用户协议
	$(".content_food>.text>span").on("click", function() {
			$(".user_know").show("fast")
		})
		//	关闭用户协议
	$(".user_know .close").on("click", function() {
			$(".user_know").hide("fast")
		})
		//	失去焦点时
	$("input[type='text']").blur(function() {
			if($(this).val() == "") {
				//	失去焦点内容为空时
				$(this).parents("li").find(".warning_img").show();
				$(this).parents("li").find(".warning").show();
			} else {
				if($(this).attr("class") == "phone") {
					if(!(/^1[34578]\d{9}$/.test($(this).val()))) {
						$(this).parents("li").find(".warning_img").show();
						$(this).parents("li").find(".warning").show();
						isFlag =false;
						return false;
					}
				}
				//			失去焦点校验内容
				$(this).parents("li").find(".warning_img").hide();
				$(this).parents("li").find(".warning").hide();
				isFlag = true;
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
		//	验证重输密码规则
	$("input[type='password']").eq(1).blur(function() {
			if($(this).val() == $(".password").val() && (this).val() != "") {
				$(this).parents("li").find(".warning_img").hide();
				$(this).parents("li").find(".warning").hide();
				isFlag = true;
			} else {
				$(this).parents("li").find(".warning_img").show();
				$(this).parents("li").find(".warning").show();
				isFlag = false;
			}
		})
		//	获取验证码
	$('.codebtn').on('click', function() {
			if(!(/^1[34578]\d{9}$/.test($(".phone").val()))) {
				return false;
			} else {
				$.ajax({
					url: "/api/sendmsg",
					type: "POST",
					dataType: "json",
					data: {
						phone: $(".phone").val()
					},
					success: function(res) {
						if(res['code'] == 'A00000') {
							$(".codebtn").hide();
							$(".codetime").show();
							var times = setInterval(function() {
								$(".codetime span").text($(".codetime span").text() - 1);
								if($(".codetime span").text() <= 0) {
									$(".codetime span").text(60).hide();
									$(".codebtn").show();
									clearInterval(times);
								}
							})
						} else {
							$(".verification_code").parents("li").find(".warning_img").show();
							$(".verification_code").parents("li").find(".warning").text(res['code'] == 'B00001').show();
							$(".codetime span").text(60).hide();
							$(".codebtn").show();
						}
					}
				})
			}
		})
		//	注册提交
		//		注册函数 confirm
	function confirm() {
		if($(".checkbox").is(":checked")) {
			//			勾选用户协议
			var data = new Object();
			$('input').each(function() {
				if($(this).val() == "") {
					isFlag = false;
					return false;
				}
			})
			if(isFlag) {
				$("input").attr("disabled", "disabled");
				$('.confirm').unbind();
				data = {
					v: v,
					unit: $(".unit").val(),
					org_name: $(".username").val(),
					pwd: getEntryptPwd($(".password").val(), key),
					phone: $(".phone").val(),
					code: $(".verification_code").val()
				}
				$.ajax({
					url: "",
					type: "POST",
					dataType: "json",
					data: data,
					success: function(res) {
						if(res['code'] == 'A00000') {
							$('.success').show();
							setTimeout(function() {
								location.href = "login.html";
							}, 1500)
						} else {
							alert(res['code']);
							$("input").attr("disabled", false);
							$('.confirm').bind('click', confirm);
						}
					}
				})
			} else {
				alert("用户信息填写有误！")
			}

		} else {
			//			没有勾选用户协议
			alert("请认真阅读用户协议，并勾选")
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