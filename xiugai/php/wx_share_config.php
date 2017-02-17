<style>
	#share_container{
			position: fixed;
			z-index: 9999;
			height: 100%;
			width: 100%;
			background-color: rgba(0,0,0,0.5);	
			display: none;
			top: 0px;
	}
	#share_container>img{
			width: 30%;
			position: absolute;
			right: 30px;
	}
</style>
<div id="share_container" style="display: none;">
		<img src="http://static.yhctech.com/frontend/img/wx_active_share_pointer.png" alt="" />
</div>
<script>
	  wx.config({
        debug: false,
        appId: '<?=$bridge_settings["appId"]?>',
        timestamp: '<?=$bridge_settings["timestamp"]?>',
        nonceStr: '<?=$bridge_settings["nonceStr"]?>',
        signature: '<?=$bridge_settings["signature"]?>',
        jsApiList: [
            // 所有要调用的 API 都要加到这个列表中
            'checkJsApi',
            'openLocation',
            'getLocation',
            'onMenuShareTimeline',
            'onMenuShareAppMessage'
          ]
    });
    wx.ready(function(){
	  	share_info();
	  	<?php if(isset($cannot_share)):?>
	  	//||(isset($from_id)&&(strlen($from_id)>0))
	  		wx.hideOptionMenu();
	  	//	wx.showOptionMenu();
	  		<?php else:?>
	  		wx.showOptionMenu();
	  	<?php endif;?>
      })
      function update_share_infos(){
      	$.ajax({
 		url:'/wx_active_port_test/insert_share_info',
      		type:'post',
      	data:{
      		'lesson_id':'<?=$page_info['lesson_id']?>',
      		'openid':'<?=$page_info['openid']?>',
      		'page_name':'<?=$page_info['page_name']?>'
      	}
      	})
      }
      $('#share_container').bind('click',function(){
      	  		$(this).hide();
      	  		share_info();
      })
      function alert_share(){
      		$('#share_container').show();
      }
      var close_share_menu=function(){
      		wx.hideOptionMenu();
      }
      var show_share_menu=function(){
      		wx.showOptionMenu();
      }
      var share_info=function(){
	      	  wx.onMenuShareAppMessage({
		          title: '<?=$share_settings['title']?>',
		          link: '<?=$share_settings['url']?>',
		          imgUrl: '<?=$share_settings['pic_url']?>',
		          desc:'<?=$share_settings['desc']?>',
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
		          title: '<?=$share_settings['title'];?>',
		          link: '<?=$share_settings['url'];?>',
		          imgUrl: '<?=$share_settings['pic_url'];?>',
		          trigger: function (res) {
		            // 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
		            // alert('用户点击分享到朋友圈');
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
      }
      var bind_link=function(){
	      $('*[out_link]').unbind('click').bind('click',function(){
	      	event.preventDefault();
	      	event.stopPropagation();
	      
	      	$.ajax({
	      		type:"post",
	      		url:"/wx_active_port_test/view_page",
	      		data:{
	      			url:$(this).attr('type'),
	      			company:$(this).attr('company'),
	      			lesson_id:'<?=$page_info['lesson_id']?>',
	      			openid:"<?=$page_info['openid']?>"
	      		},
	      	});
			window.location.href=$(this).attr('out_link');
			return false;
	      })
      }
      bind_link();
</script>