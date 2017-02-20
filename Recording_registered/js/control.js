jQuery(function() {
	var wxurl = encodeURIComponent(window.location.href);
	//解转义
	// decodeURIComponent(encodeURIComponent("#"));
	$.ajax({
		url: 'http://m.yhctech.com/api/c/wxconfig/',
		type: 'POST',
		dataType: "json",
		data: {
			"url": wxurl
		},
		success: function(data) {
			wx.config({
				debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
				appId: data.msg.appId, // 必填，公众号的唯一标识
				timestamp: data.msg.timestamp, // 必填，生成签名的时间戳
				nonceStr: data.msg.nonceStr, // 必填，生成签名的随机串
				signature: data.msg.signature, // 必填，签名，见附录1
				jsApiList: [
					// 所有要调用的 API 都要加到这个列表中
					"previewImage",
					"uploadImage",
					"chooseImage",
					"downloadImage"
				]
			});
		},
		error: function(err) {
			console.log("get失败");
		}
	})
	$('.file_pic').on('click', function() {
		wx.chooseImage({
			count: 1, // 默认9
			sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
			sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
			success: function(res) {
				var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
				syncUpload(localIds);
			}
		});
	})
	function syncUpload(localIds) {
		var localId = localIds.pop();
		wx.uploadImage({
			localId: localId,
			isShowProgressTips: 1,
			success: function(res) {
				var serverId = res.serverId; // 返回图片的服务器端ID
				alert(localIds)
				$(".file_pic").attr("src", localId)
				//其他对serverId做处理的代码
			}
		});
	};
	$('.btn').on('click', function() {
			var data = new Object;
			data = {
				lesson_name: $('.course_title').val(),
				author: $('#author').val(),
				descr: $('#course_introduction').val(),
				img:$('.img_previev img').attr('src'),
				status:$("input[type='radio']:checked").val()
			}
			console.log(data)
			if(data.course_title == "" || data.author == "" || data.course_introduction == "" || data.img == "") {
				alert("信息填写不完整！");
				return false;
			} else {
				alert($('#course_title').val())
				window.location.href = 'http://cache.yhctech.com/test/recording_dialogue.html?lesson_name='+$('#course_title').val();
				$.ajax({
					type: "post",
					url: "http://courserecord.c8fa4f365882a4c1d85c4e89ba8b6942e.cn-beijing.alicontainer.com/api/v1/lessoninfos",
					async: true,
					data: data,
					success: function(res) {
						if(res.code=='A00000') {
							setTimeout(function(){
								window.location.href = 'http://{{host}}/recording_dialogue.html?lesson_name='+res.data.lesson_name;
							},2000)
						} else {
							alert('res.msg')
						}
					}
				});
			}

		})
})