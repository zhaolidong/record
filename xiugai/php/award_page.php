<style>
.box{
width:100%;height:100%;
<?php if($is_alert):?>
	display: none;
<?php endif;?>
background-image: url(http://static.yhctech.com/frontend/img/award_box.png);
background-size: 100% 100%;
padding-top: 11rem;
    position: fixed;
    top: 0px;
    left: 0px;
    z-index: 9999;
}
.box p{
  width:15.3rem;text-align:center;color:#333333;font-size: 0.85rem;line-height: 1.5rem;
  border-bottom:1px dashed #fff;margin:0 auto;
  font-family: "STKaiti" ; 
}
.box b{
  color:#333333;font-size: 0.7rem;text-align: right;
  display: block;font-family: "STKaiti" ; margin-top: .5rem;
  margin-right: 1.8rem;font-weight: 200;
}
.box span{
  color:#666666;font-size: 0.7rem;text-align: center;
  display: block;font-family: "STKaiti" ; margin-top: .25rem;
}
.box input{
  width:7.4rem;height:1.15rem;margin-bottom: 0.25rem;
  font-size: 0.85rem;color:#666666;opacity:0.6; 
}
.share{
  width:4.65rem;height: 1.8rem;
  background-image: url(http://static.yhctech.com/frontend/img/active_changenickname.png);
  background-size: 100% 100%;
  margin:0 auto;margin-top:.25rem; 
}
.box>.close_btn{
	position: absolute;
	top: 10px;
	right: 10px;
	height: 30px;
	width: 30px;
	<?php if(isset($from_id[0])&&(!$is_alert)):?>
		display: none;
	<?php endif;?>
	background-image: url(http://static.yhctech.com/frontend/img/cha.png);
	background-repeat: no-repeat;
	background-size: contain;
	z-index: 9999;
}
.stm_alert{
	height: 100%;
	width: 100%;
	position: fixed;
	top: 0px;
	left: 0px;
	z-index: 10000;
	background-color: rgba(0,0,0,0.6);
	display: none;
}
.stm_alert .alert_bar{
		width: 13rem;
    padding: 20px;
    background-color: #f4abae;
    border-radius: 8px;
    margin: 0px auto;
    position: relative;
    top: 50%;
   -webkit-transform: translateY(-50%);
       transform: translateY(-50%);
}
.stm_alert .alert_bar .desc{
	    width: 100%;
    color: white;
    text-align: center;
    font-size: 1rem;
    line-height: 1.4rem;
}
.stm_alert .alert_bar .confirm{
	width: 100%;
	    margin-top: 20px;
}
.stm_alert .alert_bar .confirm>div{
	    width: 30%;
    margin: 0px 10%;
    padding: 6px 0px;
    border-radius: 20px;
    color: white;
    border: 1px solid white;
    display: inline-block;
    text-align: center;
}
</style>
<?php if(isset($user_info['is_pay'])):?>
<div class="box">
		<div class="close_btn"></div>
      <a style="color:#e38c8f;position:absolute;left:0;top:1.15rem;text-align:center;width:100%;font-family:'STKaiti';font-size:0.85rem;">第三期</a>
      <a style="color:#e38c8f;position:absolute;left:0;top:2.2rem;text-align:center;width:100%;font-family:'STKaiti';font-size:1.125rem;">28天为爱有声阅读</a>
      <a style="color:#e38c8f;position:absolute;left:0;top:9rem;text-align:center;width:100%;font-family:'STKaiti';font-size:0.85rem;">2016.11.28 ~ 12.25</a>
      <p style="text-align:left;line-height:1.25rem;">亲爱的
      	<?php if(!isset($from_id[0])):?>
      		<?php if(isset($user_info['award_name'][0])):?><?=$user_info['award_name']?><?php else:?><input type="text" class="user_name" value="<?=$user_info['sign_name']?>"/><?php endif;?>
      	<?php else:?>
      			<?php if(isset($user_info['award_name'][0])):?><?=$user_info['award_name']?><?php else:?><?=$user_info['sign_name']?><?php endif;?>
      		<?php endif;?>	
      	</p>
      <p style="text-align:right;">恭喜您圆满完成“28天为爱有声阅读”</p>
      <p>活动。您是一位有识有爱的家长，在陪伴</p>
      <p>孩子阅读的过程中，相信您自身也有所收</p>
      <p>获。所谓和孩子一起成长，就是从这种具</p>
      <p>体的小事做起。愿阅读成为您家庭生活的</p>
      <p style="text-align:left;">一部分，祝您全家幸福健康！</p>
      <b>北京尹建莉文化传播有限公司</b>
     <?php if((!isset($user_info['award_name'][0]))||(!isset($from_id[0]))):?> 
      	<!--<span class="name_alert">每位用户只能修改一次名称</span>-->
     <?php endif;?>
    	
      <?php if(isset($from_id[0])):?>
      	
      <?php elseif(isset($user_info['award_name'][0])):?>
      	
      <?php elseif(!isset($user_info['award_name'][0])):?>	
     	 		<div class="share" ></div>   
      <?php endif;?>
  </div>
<?php endif;?>
	<div class="stm_alert">
			<div class="alert_bar">
				<div class="desc">您只有一次修改昵称的机会，是否确认？</div>
				<div class="confirm">
					<div class="yes">确认</div><div class="no">取消</div>
				</div>
			</div>
	</div>
<script>
$(function(){
<?php if(!isset($user_info['award_name'][0])):?>
	//输入框控制
	$(".box input").on("input",function(){
	  if($(this).val().length>16){
	    alert("名称过长");
	    $(this).val("");
	  }
	});
<?php endif;?>
//分享确认
  $(".share").on("click",function(){
    if(!$(".box input").val()==0){
    	$('.stm_alert').show();
    	
//  	 $(this).off("click").on("click",function(){
//	          	alert("ok");//分享的函数可以写在这里
//	          	$('#share_container').show();
//	          	win_share();
//      })
     }else{
//      $(this).off("click").on("click",function(){
	        	//  alert("ok");//分享的函数可以写在这里
	          //	$('#share_container').show();
	          //	 win_share();
//      })
    }
   
  });
  $('.stm_alert .yes').bind('click',function(){
  	
    	$.ajax({
    		url:'/wx_active_port_test/upload_username',
    		data:{lesson_id:"<?=$lesson_id?>",openid:"<?=$openid?>",award_name:$(".box input").val()},
    		type:'post',
    		success:function(){
    				$('.stm_alert').hide();
    			  $(".box p").eq(0).html("亲爱的"+$(".box input").val()).css("line-height","1.5rem");
       	 		$(".share,.name_alert").hide();
    		}
    	})
  });
  $('.stm_alert .no').bind('click',function(){
  		$('.stm_alert').hide();
  		
  });
	 $('.close_btn').bind('click',function(){
    		$('.box').hide();
    		share_info();
    })
})
var win_share=function(){
		 wx.onMenuShareAppMessage({
					          title: '我是一位有识有爱的家长，你呢？',
					          link: 'http://m.yhctech.com/wx_active_test/actives/win?lesson_id=<?=$lesson_id?>&from_id=<?=$user_id?>',
					          imgUrl: 'http://static.yhctech.com/frontend/img/wx_active_jz.png',
					          desc:'尹建莉工作室颁发',
					          trigger: function (res) {
					            // 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
					            // alert('用户点击发送给朋友');
					          },
					          success: function (res) {
					             alert('已分享');
					             update_share_infos();
					              $('#share_container').hide();
					          },
					          cancel: function (res) {
					            // alert('已取消');
					          },
					          fail: function (res) {
					            // alert(JSON.stringify(res));
					          }
					        });
					        wx.onMenuShareTimeline({
					           title: '我是一位有识有爱的家长，你呢？',
					          link: 'http://m.yhctech.com/wx_active_test/actives/win?lesson_id=<?=$lesson_id?>&from_id=<?=$user_id?>',
					          imgUrl: 'http://static.yhctech.com/frontend/img/wx_active_jz.png',
					          trigger: function (res) {
					            // 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
					            // alert('用户点击分享到朋友圈');
					          },
					          success: function (res) {
					             alert('已分享');
					             update_share_infos();
					          },
					          cancel: function (res) {
					            // alert('已取消');
					          },
					          fail: function (res) {
					            // alert(JSON.stringify(res));
					          }
					        });
	}
</script>
 
<script>
<?php if($is_alert):?>
	var award_alert=function(user_sign_times){
			if(user_sign_times=='<?=isset($rule_days)?$rule_days:'0'?>'){
				$('.box').show();
				win_share();
				return true;
			}else{
				return false;
			}
		}
<?php else:?>
	//win_share();
<?php endif;?>		
	  $(".remo").on("click",function(){
		    $(".winning").hide();
		})
</script>