<!DOCTYPE html>
<html style="font-size:20px;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">    
    <title></title>
    <script src="http://static.yhctech.com/frontend/js/c9e68e81f67f3a2cf547713d3de7f82a.12"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>      
</head>
<body>
<button class="call_wx_pay">点我唤起支付</button>
<!--<input type="hidden" name="" id="openid" value="{{ openid }}" />

<input type="hidden" name="csrfmiddlewaretoken" id="csrf_token" value="{{ csrf_token }}" />  -->
<br />
<button class="send_red_pack">点我给我发红包</button>
<script>
  $(function(){

    //本页需要支付，wx.config
   // var wxurl=encodeURIComponent("http://m.yhctech.com/api/c/wxpaypage/");
    //解转义
    // decodeURIComponent(encodeURIComponent("#"));
//  $.ajax({
//      url: '/api/c/wxconfig/',
//      type: 'POST',
//      dataType: "json",
//      data: {
//          "url":wxurl
//      },
//      success: function (data) {
           wx.config({
                    debug: false,// 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
                    appId:'<?=$appId?>', // 必填，公众号的唯一标识
                    timestamp:'<?=$timestamp?>', // 必填，生成签名的时间戳
                    nonceStr:'<?=$nonceStr?>', // 必填，生成签名的随机串
                    signature:'<?=$signature?>',// 必填，签名，见附录1
                    jsApiList: [
                      // 所有要调用的 API 都要加到这个列表中
                      "chooseWXPay"
                    ]
            });
//      },
//      error: function (err) { 
//          console.log("get失败");
//      }
  })

$('.call_wx_pay').bind('click',function(){
	$.ajax({
		type:"post",
		url:"/wxpay/getorder",
		async:true,
		data:{money:'1',openid:"<?=$openId?>",lesson_id:'test'/*sessionStorage.payint*/,type:'group_pay'},
		sucess:function(data){
			$('body').html(data);
		}
	});
})
$('.send_red_pack').bind('click',function(){
	$.ajax({
		type:"post",
		url:"/wxpay/sendred",
		async:true,
		data:{money:'10',openid:"<?=$openId?>"},
		sucess:function(data){
			$('body').html(data);
		}
	});
})

//wx.ready(function () { 
//
//if(!sessionStorage.openid==undefined){
//  openid=sessionStorage.openid;
//}else{
//  openid=$("#openid").val();
//} 
//
//  $.ajax({
//      url: '/api/c/wxpay/',
//      type: 'POST',
//      data: {
//          'openid':openid,
//          'cost':1,/*sessionStorage.cost*/
//          'lesson_id':sessionStorage.payint,
//          'type':sessionStorage.type, 
//          'csrfmiddlewaretoken': $('#csrf_token').val()
//      },
//      dataType:'json',
//      success: function (data) {
//      console.log(data);
//          // 在这里调用 API
//              wx.chooseWXPay({
//                  timestamp:data.msg.timeStamp, // 支付签名时间戳，注意微信jssdk中的所有使用timestamp字段均为小写。但最新版的支付后台生成签名使用的timeStamp字段名需大写其中的S字符
//                  nonceStr:data.msg.nonceStr, // 支付签名随机串，不长于 32 位
//                  package:data.msg.package, // 统一支付接口返回的prepay_id参数值，提交格式如：prepay_id=***）
//                  signType:data.msg.signType, // 签名方式，默认为'SHA1'，使用新版支付需传入'MD5'
//                  paySign:data.msg.paySign, // 支付签名
//                  success: function (res) {
//                      if(res.errMsg == "chooseWXPay:ok"){
//                          // alert("支付成功");
//                          window.location.href  = sessionStorage.whichurl;//前面带来的回跳地址
//                      }else{
//                          alert(res.errMsg);
//                      }
//                  },
//                  cancel: function(res){
//                      alert('取消支付');
//                      window.location.href  = document.referrer.split(".com")[1];//前面带来的回跳地址
//                  }
//              });  
//        },
//        error: function (err) { 
//            console.log("post失败")
//        }
//  })  //ajax请求结束
//
//
//
//})   //wxready结束
//
//})  //$fun结束
</script>


</body>
</html>
