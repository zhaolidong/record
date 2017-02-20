jQuery(function($) {
	function add() {
		var html = document.documentElement;
		var hei = html.clientWidth;
		var fz = hei / 375 * 20 + "px";
		html.style.fontSize = fz;
	};
	add();
	window.addEventListener("resize", add, false);
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
	var login = getCookie("_yhcp00001"),
		openid = getCookie("openid"),
		headimgurl = getCookie("headimgurl"),
		nickname = getCookie("nickname");
		console.log(login+'\n'+openid)
	if(login){
		if($_GET.openid == undefined||$_GET.headimgurl == undefined ||$_GET.headimgurl == "") {
			if(openid == undefined || openid == "" || headimgurl == undefined || headimgurl == "" || nickname == "" ||nickname==undefined) {
				var wxurl = encodeURIComponent(window.location.href);
				window.location.href = 'http://m.yhctech.com/wxpay/wxinfo?appid_type=1&redirect=' + wxurl + '&scope=snsapi_userinfo';
			}
		} else {
			var openid = $_GET.openid,
				headimgurl = decodeURI($_GET.headimgurl),
				nickname = decodeURI($_GET.nickname);
			setCookie("openid", openid);
			setCookie("headimgurl", headimgurl);
			setCookie("nickname", nickname);
		}
	}else{
		var xurl = encodeURIComponent(window.location.href);
		window.location.href = 'http://foreend.yhctech.cn/lubo/login?type=small_media&agenttype=5&next='+xurl;
	}
	

	

})