 <div class="scroll_container">
 <style>
        *{
            margin: 0;
            padding: 0;
        }
        .apply_scan_wrap{
            box-sizing: border-box;
            padding: 0.5rem 0;
        }
        .apply_scan{
        	width: 17.5rem;
            box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
						 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
            padding:1.75rem 0 1.5rem 0;
            box-sizing: border-box;
            border-radius: 0.1rem;
            text-align: center;
            margin: auto;
            margin-bottom: 2.7rem;
        }
        .apply_scan_header{
            margin-top: 0.75rem;
            font-size: 0.75rem;
        }
        .apply_scan_header>img{
            width: 6.25rem;
            height: 6.25rem;
        }
        .apply_scan_img{
            padding: 2rem 0;

        }
        .apply_scan_img>img{
            width: 7.5rem;
            height: 7.5rem;
        }
        .apply_scan_prompt{
            margin-top:0.75rem;
            font-size: 0.75rem;
            color: #323232;
        }
        .fooder{
            text-align: center;
            font-size: 0.6rem;
            color: #7a7a7a;
        }
        .fooder>img{
            width:1.2rem;
            height:1.2rem;
        }
        .apply_scan_err{
            margin-top: 0.75rem;
            font-size: 1rem;
   			color: red;
        }
        .apply_scan_tel{
            font-weight: bolder;
        }
        .foot_nav{
        	position: fixed!important;
        }
    </style>
      <div class="apply_scan_wrap">
        <div class="apply_scan">
            <!--付款成功提示图片开始-->
            <div class="apply_scan_header">
                <img src="http://static.yhctech.com/frontend/img/active_smile_icon.png" alt="">
            </div>
            <!--付款成功提示图片结束-->
            <!--提示语开始-->
            <p class="apply_scan_prompt">
                亲！赶紧扫码入群吧！
            </p>
            <!--提示语结束-->
            <!--二维码显示处开始-->
            <div class="apply_scan_img">
                <img src="<?=$qrcode?>" alt="">
            </div>
            <!--二维码显示处结束-->
            <!--底部客服开始-->
            <div class="fooder">
                <img src="http://static.yhctech.com/frontend/img/active_phone_big.png" alt="">
                <p class="apply_scan_err">
                	长按二维码点击”识别图中二维码“入群
                	<br />
                    如扫码有误请联系：
                    <span class="apply_scan_tel">17792214882</span>
                </p>
            </div>
            <!--底部客服提示结束-->
        </div>
    </div>
    <script>
	    $(function(){
	    	close_share_menu();
	    })
	      if (window.history && window.history.pushState) {
                      $(window).on('popstate', function () {
　　　　　　　　　　　　　　　　/// 当点击浏览器的 后退和前进按钮 时才会被触发， 
                          window.history.pushState('forward', null, ''); 
                          window.history.forward(1);
                          //去他娘的淦爆
                          wx.closeWindow();
                      });
                  }
　　　　　　　　　　//
                  window.history.pushState('forward', null, '');  //在IE中必须得有这两行
                  window.history.forward(1);
//  	$.ajax({
//  		type:"get",
//  		url:"/api/c/pay_in_group/",
//  		data:{lesson_id:'<?=$lesson_id?>'},
//  		dataType:'json',
//  		success:function(data){
//  			if(data.success){
//  				$('.apply_scan d.footer>img').attr('src',data.msg.helperqrcode)
//  			}
//  		}
//  	});
    </script>