jQuery(function($) {
//	获取课程名称
	//获取URI
	var $_GET = (function(){
		    var url = window.document.location.href.toString();
		    var u = url.split("?");
		    if(typeof(u[1]) == "string"){
		        u = u[1].split("&");
		        var get = {};
		        for(var i in u){
		            var j = u[i].split("=");
		            get[j[0]] = j[1];
		        }
		        return get;
		    } else {
		        return {};
		    }
		})();
	var title = decodeURI($_GET.lesson_name);
	document.title = title;
	//	获取用户头像
	var headimgurl = getCookie("headimgurl");
	$(".head_img").attr("src", headimgurl);

	function getCookie(Name) {
		var search = Name + "="
		if(document.cookie.length > 0) {
			offset = document.cookie.indexOf(search)
			if(offset != -1) {
				offset += search.length
				end = document.cookie.indexOf(";", offset)
				if(end == -1) end = document.cookie.length
				return unescape(document.cookie.substring(offset, end))
			} else return ""
		}
	}
	//	切换语音文字
	var aswitch = false;
	$('.food .switch').on('touchstart', function() {
			aswitch = !aswitch;
			if(aswitch) {
				$(this).css({
					"background-image": 'url(//cache.yhctech.com/static/img/1486445676audio.png)'
				})
				$('.enter_audio').hide();
				$('.enter_img').hide();
				$('.enter_text').show();
				$('.enter_text_content').show();
			} else {
				$(this).css({
					"background-image": 'url(//cache.yhctech.com/static/img/1486367772key.png)'
				})
				$('.enter_audio').show();
				$('.enter_img').show();
				$('.enter_text').hide();
				$('.enter_text_content').hide();
			}
		})
		//录制课程时滚动条为0
		//      录音--begin
	var wxurl = encodeURIComponent(window.location.href);
	//解转义
	// decodeURIComponent(encodeURIComponent("#"));
	//	授权公众号
	$.ajax({
		url: '//m.yhctech.com/api/c/wxconfig/',
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
					'checkJsApi',
					'openLocation',
					'getLocation',
					'onMenuShareTimeline',
					'onMenuShareAppMessage',
					"startRecord",
					"stopRecord",
					"onVoiceRecordEnd",
					"playVoice",
					"pauseVoice",
					"stopVoice",
					"onVoicePlayEnd",
					"uploadVoice",
					"downloadVoice",
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
	if(!localStorage.rainAllowRecord || localStorage.rainAllowRecord !== 'true') {
		wx.startRecord({
			success: function() {
				localStorage.rainAllowRecord = 'true';
				wx.stopRecord();
			},
			cancel: function() {
				alert('用户拒绝授权录音');
			}
		});
	}
	wx.ready(function() {
			//				share_info();
			wx.showOptionMenu();
		})
		//	删除本条消息
	$('.message_view').delegate('.delete', 'touchstart', function(e) {
			e.preventDefault();
			var that = $(this);
			$('.alert_wrap').show();
			$('.alert_wrap .return').on('touchstart', function(e) {
				e.preventDefault();
				$('.alert_wrap').hide();
			})
			$('.alert_wrap .confirm').on('touchstart', function(e) {
				e.preventDefault();
				//			ajax交互

				that.parents("li").remove();
				$('.alert_wrap').hide();
			})

		})
		//	设置时间
	$('.message_view').delegate('.delete', 'touchstart', function(e) {
			e.preventDefault();
			var that = $(this);
			$('.alert_wrap').show();
			$('.alert_wrap .return').on('touchstart', function(e) {
				e.preventDefault();
				$('.alert_wrap').hide();
			})
			$('.alert_wrap .confirm').on('touchstart', function(e) {
				e.preventDefault();
				//			ajax交互

				that.parents("li").remove();
				$('.alert_wrap').hide();
			})

		})
		//	添加一条
	var push = false,
		top;
	$('.message_view').delegate('.push', 'touchstart', function(e) {
		e.preventDefault();
		//		console.log($('.push_prompt_wrap').length)
		if($('.push_prompt_wrap').length >= 1) {
			return false;
		} else {
			$(this).parents('li').after($("<div class='push_prompt_wrap'><div class='push_prompt'></div><span class='close'></span></div>"))
			$('.message_wrap').scrollTop($('.message_view .push_prompt_wrap').position().top)
			top = $(this).parents('li').position().top;
			push = true;
		}
	})
	$('.message_view').delegate('.push_prompt_wrap .close', 'touchstart', function(e) {
			e.preventDefault();
			$(this).parents(".push_prompt_wrap").remove();
			push = false
		})
		//	 调整时间间隔按钮
	$('.message_view').delegate('.interval', 'touchstart', function(e) {
		e.preventDefault();
		var that = $(this).parents('li').find('.cont'),
			time = that.attr('data-time-interval'),
			minTime = that.attr('data-time');
		$('.wrap_recording .time_set_wrap').show().find('.number').val(time);
		$('.wrap_recording .time_set_wrap .time_set_cont_wrap .less').bind('touchstart', function(e) {
			e.preventDefault();
			var timeNumber = $('.wrap_recording .time_set_wrap .number').val();
			timeNumber--;
			if(timeNumber <= minTime) {
				timeNumber = minTime;
			} else if(timeNumber <= 3) {
				timeNumber = 3;
			}
			$('.wrap_recording .time_set_wrap .number').val(timeNumber);
			return false;
		})
		$('.wrap_recording .time_set_wrap .time_set_cont_wrap .plus').on('touchstart', function(e) {
			e.preventDefault();
			var timeNumber = $('.wrap_recording .time_set_wrap .number').val();
			timeNumber++;
			//			console.log(timeNumber)
			if(timeNumber > 600) {
				timeNumber = 600;
			}
			$('.wrap_recording .time_set_wrap .number').val(timeNumber);
			return false;
		})
		$('.wrap_recording .time_set_wrap .set_time_btn_wrap .set_time_confirm').on('touchstart', function(e) {
			var time = $('.wrap_recording .time_set_wrap .number').val();
			//			console.log(time)
			e.preventDefault();
			if(time < minTime) {
				alert('时间间隔不得小于语音长度!');
				return false;
			} else if(time < 3) {
				alert('时间间隔不得小于3秒!');
				return false;
			} else if(time > 600) {
				alert('时间间隔不得大于600秒!');
				return false;
			}
			$('.wrap_recording .time_set_wrap .time_set_cont_wrap .less').unbind('touchstart');
			$('.wrap_recording .time_set_wrap .time_set_cont_wrap .plus').unbind('touchstart');
			that.attr('data-time-interval', $('.wrap_recording .time_set_wrap .number').val());
			$('.wrap_recording .time_set_wrap ').hide();
		})
		return false;
	})

	$('.wrap_recording .time_set_wrap .set_time_btn_wrap .set_return').on('touchstart', function(e) {
		$('.wrap_recording .time_set_wrap .time_set_cont_wrap .less').unbind('touchstart');
		$('.wrap_recording .time_set_wrap .time_set_cont_wrap .plus').unbind('touchstart');
		e.preventDefault();
		$('.wrap_recording .time_set_wrap').hide();
	})

	//	录音
	var baudio = false,
		startTimestamp, endTimestamp;
	$('.enter_audio').on('touchstart', startRecord)
		//	上传语音到微信服务器函数
	function uploadVoice(localId, time) {
		wx.uploadVoice({
			localId: localId, // 需要上传的音频的本地ID，由stopRecord接口获得
			isShowProgressTips: 1, // 默认为1，显示进度提示
			success: function(res) {
				var serverId = res.serverId; // 返回音频的服务器端ID
//				$('.message_view').text(serverId)
				$.ajax({
					type:"post",
					url:"http://{{host}}/api/v1/lessoncontents",
					data:{
						content_type:audio,
						time:time,
						interval:time
					},
					async:true,
					success:function(res){
						if (res.code == "A00000") {
							createAudio(localId, time, 'audio');
						}
					}
				});
				
			}
		});
	}
	//	录音函数
	function startRecord() {
		baudio = !baudio;
		if(baudio) {
			wx.startRecord({
				success: function() {
					startTimestamp = Date.parse(new Date());
					$('.prompt_alert').attr('src', '//cache.yhctech.com/static/img/1486449791audio_prompt.gif').show();
				},
				cancel: function() {
					alert('用户拒绝授权录音');
				}
			});
			wx.onVoiceRecordEnd({
				// 录音时间超过一分钟没有停止的时候会执行 complete 回调
				complete: function(res) {
					var localId = res.localId;
					baudio = false;
					$('.prompt_alert').hide();
					createAudio(localId, 60)
				}
			});
		} else {
			wx.stopRecord({
				success: function(res) {
					endTimestamp = Date.parse(new Date());
					var localId = res.localId,
						time = (endTimestamp - startTimestamp) / 1000;
					$('.prompt_alert').hide();
					if(time <= 0) {
						alert('录音小于1秒，请重新录制！');
						return false;
					}
					uploadVoice(localId, time)
				}
			});
		}

	}
	//	点击播放播放语音
	var playLocalId="";
	$('.message_view').delegate('.audio', 'touchstart', function() {
			var localId = $(this).attr('data-localId');
			palyType(localId);
		})
//	播放语音判断文件格式
	function palyType(localId){
		var mp3 = localId.substring(localId.length-3,localId.length)
				if(mp3=="mp3"){
					if (playLocalId != "") {
						if (playLocalId == localId) {
							stopAudio(playLocalId);
						}else{
							stopAudio(playLocalId);
							setTimeout(function(){
								palyAudio(localId);
							},200)
						}
						return false;
					}
					palyAudio(localId);
				}else{
					if (playLocalId != "") {
						if (playLocalId == localId) {
							stopVoice(playLocalId);
						}else{
							stopVoice(playLocalId);
							setTimeout(function(){
								palyVoice(localId);
							},200)
						}
						return false;
					}
					palyVoice(localId);
				}
	}
	
//	创建audio
	function createAudio(localId, time, type) {
		var intervalTime = time;
		if(intervalTime <= 3) {
			intervalTime = 3;
		}
		var li,
			libegin = '<li><div class="option">' +
			'<img class="push" src="//cache.yhctech.com/static/img/1486443460new.png" />' +
			'<img class="interval" src="//cache.yhctech.com/static/img/1486443442time.png" />' +
			'<img class="delete" src="//cache.yhctech.com/static/img/1486443478delete.png" />' +
			'</div><div class="message_cont">' +
			'<img class="head_img" src=' + headimgurl + ' />' +
			'<div class="time_wrap">' +
			'<div class="message">' +
			'<div class="triangle"></div>',
			liaudio = '<div class="cont ' + type + '" data-localId="' + localId +'" data-time="' + time + '" data-time-interval="' + intervalTime + '" data-type="' + type + '"></div>' +
			'</div>',
			liimg = '<img class="cont ' + type + '" data-localId="' + localId + '" src="' + localId + '" data-time="' + time + '" data-time-interval="' + intervalTime + '" data-type="' + type + '"/>' +
			'</div>',
			litext = '<div class="cont ' + type + '" data-localId="' + localId + '" data-time="' + time + '" data-time-interval="' + intervalTime + '" data-type="' + type + '">' +
			localId + '</div>' +
			'</div>',
			licont = '<div class="time_wrap">' +
			'<div class="point">' +
			'<span></span>' +
			'</div>' +
			'<div class="time">' +
			'<span>' + time + '</span>″' +
			'</div>',
			liend = '</div>' +
			'</div>' +
			'</div>' +
			'</li>';
		if(type == 'audio') {
			li = libegin + liaudio + licont + liend;
			li = $(li);
			li.find('.audio').css({
				'width': time * 6
			});
		} else if(type == "img") {
			li = libegin + liimg + liend;
			li = $(li);
		} else if(type == "text") {
			li = libegin + litext + liend;
			li = $(li);
		}
		if(push) {
			li.replaceAll($('.message_view .push_prompt_wrap'));
			$('.message_wrap').scrollTop(top)
			push = false;

		} else {
			li.appendTo($('.wrap_recording .message_view'));
			$('.message_wrap').scrollTop($('.message_wrap')[0].scrollHeight)
		}
	}

//	自动播放下一条函数
function nextL(nextLi){
	var maxLenght = $('.message_view li').length-1;
	var next =nextLi,  type = next.next().find('.cont').attr('data-type');
	if (type == 'audio') {
		return nextLi.next();
	}else{
		if (nextLi.index() == maxLenght) {
			return false;
		}else{
			nextL( next.next());
		}
	}
}
console.log($('.wrap_recording').next())
//	自动播放函数
	function autoPlay(localId){
		var thisLi = $('.message_view .cont[data-localid="'+localId+'"]').parents('li');
		var nextLi = nextL(thisLi);
		var nextSpan = nextLi.find('.point').children('span').length;
		if (nextSpan==0) {
			return false;
		}else{
			var localId = nextLi.find('.audio').attr('data-localid');
			setTimeout(function(){
				palyType(localId);
			},800)
		}
		
	}
	//	播放语音函数
	function palyAudio(localId) {
		var aud = new Audio(localId); 
		$('body').append(aud);
		aud.play(); 
//		console.log(aud)
	}
//	监听播放停止
	wx.onVoicePlayEnd({
		    success: function (res) {
		        var localId = res.localId; // 返回音频的本地ID
		        playLocalId = "";
		        autoPlay(localId);
		    }
		});
	function palyVoice(localId) {
		var span = $('.audio[data-localid="'+localId+'"]').parents('.time_wrap').find('.point span');
		span.remove();
		console.log()
		playLocalId = localId;
		wx.playVoice({
			localId: localId // 需要播放的音频的本地ID，由stopRecord接口获得
		});
	}
	//	停止播放语音
	function stopAudio(localId) {
		$('body audio[src="'+localId+'"]').remove();
	}

	function stopVoice(localId) {
		playLocalId ="";
		wx.stopVoice({
			localId: localId // 需要停止的音频的本地ID，由stopRecord接口获得
		});
	}

	//	上传图片
	$('.enter_img').on('touchstart', function() {
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
		//	上传图片到微信服务器函数
	function syncUpload(localIds) {
		var localId = localIds.pop();
		wx.uploadImage({
			localId: localId,
			isShowProgressTips: 1,
			success: function(res) {
				serverId = res.serverId; // 返回图片的服务器端ID
				createAudio(localId, 3, 'img')
					//其他对serverId做处理的代码
			}
		});
	};
	//	预览图片
	$('.message_view').delegate('.img', 'touchstart', function() {
			var ourl = $(this).attr('src');
			var urls = new Array();
			$('.message_view .img').each(function() {
				urls.push($(this).attr('src'));
			})
			wx.previewImage({
				current: $(this), // 当前显示图片的http链接
				urls: urls // 需要预览的图片http链接列表
			});
		})
		//	发送文字
	$('.enter_message_wrap .enter_text_content').focus(function(e) {
			e.preventDefault();
			var that = $(this);
			$(document).on('keydown', function(event) {
				if(event.keyCode == 32 || event.keyCode == 8) {
					that.autoHeight();
					setTimeout(function() {
						$('.wrap').scrollTop($('.wrap')[0].scrollHeight)
						$('.play_preview_btn').hide();
					}, 10)
				}

			})

		})
		//	发送文字函数
	$('.enter_text').on('touchstart', function() {
			if($('.enter_text_content').val().replace(/^\s+|\s+$/g, "") == "") {
				alert("输入内容不能为空！")
				return false;
			}
			var localId = $('.enter_message_wrap .enter_text_content').val();
			createAudio(localId, 1, 'text');
			setTimeout(function() {
				$('.enter_message_wrap .enter_text_content').val("")
				$('.enter_text').removeClass('enter_text_ok');
			}, 10)
		})
		//	完成录课按钮
	$('.end').on('touchstart', function() {
			messgasArr();
			$('.food').hide();
			$('.end').hide();
			$('.then').show();
			$('.end_option').show();
			$('.wrap_recording .status .text').text('暂停中').removeClass('green').addClass('pink');
			$('.wrap_recording .status img').attr('src', '//cache.yhctech.com/static/img/1486623262play_min.png');
		})
		//	继续录课按钮
	$('.then').on('touchstart', function() {
			$('.end_option').hide();
			$('.then').hide();
			$('.food').show();
			$('.end').show();
			$('.wrap_recording .status img').attr('src', '//cache.yhctech.com/static/img/1486443338timeout.png')
			$('.wrap_recording .status .text').text('录制中').removeClass('pink').addClass('green');
		})
		//自适应输入框
	jQuery.fn.extend({
		autoHeight: function() {
			return this.each(function() {
				var $this = jQuery(this);
				if(!$this.attr('_initAdjustHeight')) {
					$this.attr('_initAdjustHeight', $this.outerHeight());
				}
				_adjustH(this).on('input', function() {
					_adjustH(this);
				});
			});
			/**
			 * 重置高度 
			 * @param {Object} elem
			 */
			function _adjustH(elem) {
				var $obj = jQuery(elem);
				return $obj.css({
					height: $obj.attr('_initAdjustHeight'),
					'overflow-y': 'hidden'
				}).height(elem.scrollHeight);
			}
		}
	});
	//	预览课程
	$('.wrap_recording .end_option .preview').on('touchstart', function() {
			
			var j = 0;
			var scrollHeight=$('.wrap_recording .message_wrap').scrollTop();
			if($('.wrap_recording .message_wrap .message_view li').length == 0) {
				alert("课程内容为空！");
				return false;
			} else {
				$('.wrap_recording .message_wrap li').each(function(){
					if ($(this).position().top-scrollHeight>=0) {
						j = $(this).index();
						return false;
					}else{
						var that = $(this).find('.cont'),
							localId = that.attr('data-localid'),
							time = that.attr('data-time'),
							type = that.attr('data-type');
						addLi(localId,type,time);
//						console.log("不符合")
					}
				})
				
				$('.preview_wrap').show();
				startd = false;
				preview(j);
			}
		})
		//	预览课程函数
	var timeMessage, previewo, startd;

	function preview(index) {
//		console.log(index + '=>' + recordArr.length)
		if(index > recordArr.length - 1 || startd == true) {
			return false;
		} else {
			var localId = recordArr[index].localId,
				type = recordArr[index].type,
				time = recordArr[index].time,
				intervalTime = recordArr[index].intervalTime;
			index++;

			setTimeout(function() {
				if(startd == true) {
					return false;
				} else {
					addLi(localId, type, time);
					preview(index);
				}
			}, intervalTime * 1000)
		}
	}
	//存下信息数据

	var recordArr = new Array();

	function messgasArr() {
		var intervalTime = 0;
		$('.wrap_recording .message_wrap .message_view li').each(function(i, item) {
			var that = $(this).find('.cont');
			var time = that.attr('data-time'),
				type = that.attr('data-type'),
				localId = that.attr('data-localId'),
				intervalTime = that.attr('data-time-interval');
			//				intervalTime = Number(intervalTime) +Number(that.attr('data-time-interval')) ;

			recordArr[i] = {
					time: time,
					type: type,
					localId: localId,
					intervalTime: intervalTime
				}
		})
	}

	//	创建消息发送
		function addLi(localId,type,time){
			if (previewo==false) {
				return false;
			}
			var li,
				libegin = '<li><div class="option">' +
				'</div><div class="message_cont">' +
				'<img class="head_img" src=' + headimgurl + ' />' +
				'<div class="time_wrap">' +
				'<div class="message">' +
				'<div class="triangle"></div>',
				liaudio = '<div class="cont ' + type + '" data-localId="' + localId + '" data-time="' + time + '" data-time-interval="' + time + '" data-type="' + type + '"></div>' +
				'</div>',
				liimg = '<img class="cont ' + type + '" data-localId="' + localId +'" src="' + localId + '" data-time="' + time + '" data-time-interval="' + time + '" data-type="' + type +'"/>' +
				'</div>',
				litext = '<div class="cont ' + type + '" data-localId="' + localId + '" data-time="' + time + '" data-time-interval="' + time + '" data-type="' + type + '">' +
				localId + '</div>' +
				'</div>',
				licont = '<div class="time_wrap">' +
				'<div class="point">' +
				'<span></span>' +
				'</div>' +
				'<div class="time">' +
				'<span>' + time + '</span>″' +
				'</div>',
				liend = '</div>' +
				'</div>' +
				'</div>' +
				'</li>';
			if(type == 'audio') {
				li = libegin + liaudio + licont + liend;
				li = $(li);
				li.find('.audio').css({
					'width': time * 6
				});
	//			console.log(1)
			} else if(type == "img") {
				li = libegin + liimg + liend;
				li = $(li);
	//			console.log(2)
			} else if(type == "text") {
				li = libegin + litext + liend;
				li = $(li);
	//			console.log(3)
			}
				li.appendTo($('.preview_wrap .message_view'));
				setTimeout(function() {
					$('.preview_wrap .message_wrap').scrollTop($('.preview_wrap .message_wrap').scrollHeight)
				}, 10)
		}
	var _index;
	//	暂停预览
	$('.startd_preview_btn').on('touchstart', function() {
			startd = true;
			$('.startd_preview_btn').hide();
			$('.play_preview_btn').show().css({
				'background-color': '#777777'
			}).unbind('touchstart');
			_index = $('.preview_wrap .message_view li').length;
			var time = $('.wrap_recording .message_view li .cont').eq(_index).attr('data-time-interval');
			console.log(time)
			setTimeout(function() {
//				继续预览
				$('.play_preview_btn').css({
					'background-color': '#01D6B0'
				}).bind('touchstart', function() {
					playPpreview();
				})
			}, time * 1000)

			console.log(_index)
		})
	function playPpreview() {
		startd = false;
		preview(_index);
		$('.play_preview_btn').hide();
		$('.startd_preview_btn').show();
	}
	//	退出预览
	$('.end_preview_btn').on('touchstart', function() {
		startd = true;
		$('.preview_wrap .message_wrap .message_view').html('');
		$('.preview_wrap').hide();
	})
})