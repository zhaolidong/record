jQuery(function($) {
	function add() {
		var html = document.documentElement;
		var hei = html.clientWidth;
		var fz = hei / 375 * 20 + "px";
		html.style.fontSize = fz;
	};
	add();
	window.addEventListener("resize", add, false);
	function GetRequest() {
		var url = location.search; //获取url中"?"符后的字串 
		var theRequest = new Object();
		if(url.indexOf("?") != -1) {
			var str = url.substr(1);
			strs = str.split("&");
			for(var i = 0; i < strs.length; i++) {
				theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
			}
		}
		return theRequest;
	}

	function setCookie(name, value) {
		var argv = setCookie.arguments;
		var argc = setCookie.arguments.length;
		var expires = (argc > 2) ? argv[2] : null;
		if(expires != null) {
			var LargeExpDate = new Date();
			LargeExpDate.setTime(LargeExpDate.getTime() + (expires * 1000 * 3600 * 24));
		}
		document.cookie = name + "=" + escape(value) + ((expires == null) ? "" : ("; expires=" + LargeExpDate.toGMTString()));
	}

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
	var headimgurl = getCookie("headimgurl"),
		nickname = getCookie("nickname");
	var Request = new Object();
	Request = GetRequest();
	if(Request.headimgurl == undefined ||Request.headimgurl == "") {
		if(headimgurl == undefined || headimgurl == "" || nickname == "" ||nickname==undefined) {
			var wxurl = encodeURIComponent(window.location.href);
			window.location.href = 'http://m.yhctech.com/wxpay/wxinfo?appid_type=1&redirect=' + wxurl + '&scope=snsapi_userinfo';
		}
	} else {
		var headimgurl = encodeURI(Request.headimgurl),
			nickname = Request.nickname;
		setCookie("headimgurl", headimgurl);
		setCookie("nickname", nickname);
	}

	

})