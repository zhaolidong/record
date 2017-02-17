<!DOCTYPE HTML>
<html>
	<head>
	<title>清除数据页面</title>
	 <meta charset="UTF-8">
	 	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<script type="text/javascript" src="http://cdn.bootcss.com/jquery/3.1.0/jquery.min.js" ></script>
</head><body>
	<button class="btn btn-danger clear_myself">清除本人数据</button>	
<!--	<button class="btn btn-success add_lottery_times">增加一千条中奖次数</button>-->
				<br />
	<button class="btn btn-warning clear_sign">清除本人签到数据</button>
	<button class="btn btn-default pay_for">我不交钱想入群!</button>


	<br>
	<br>
	<br>
	<button class="btn btn-danger btn-lg send_account">将所有用户签到次数重置为1</button>
</body></html>
<script>
	$('.clear_myself').bind('click',function(){
		$.ajax({
			url:'/wx_active_port_test/clear_user_data'
			,data:{openid:'<?=$openid?>',lesson_id:'<?=$lesson_id?>'}
			,type:'post'
			,dataType:'json'
			,success:function(data){
				if(data.err_code==100){
					alert('数据清除成功！');
				}
			}
		});
	})
	$('.add_lottery_times').bind('click',function(){
		$.ajax({
			url:'/wx_active_port_test/add_lottery_times'
			,data:{openid:'<?=$openid?>',lesson_id:'<?=$lesson_id?>'}
			,type:'post'
			,dataType:'json'
			,success:function(data){
				if(data.err_code==100){
					alert('抽奖次数已发送！请随意抽奖吧！');
				}
			}
		});
	})
	$('.clear_sign').bind('click',function(){
		$.ajax({
			url:'/wx_active_port_test/clear_sign_data'
			,data:{openid:'<?=$openid?>',lesson_id:'<?=$lesson_id?>'}
			,type:'post'
			,dataType:'json'
			,success:function(data){
				if(data.err_code==100){
					alert('签到数据已清除！');
				}
			}
		});
	})
	$('.pay_for').bind('click',function(){
		if(prompt("世界上最好的语言是什么？")=="PHP"){
			$.ajax({
					type:"post",
					url:"/wx_active_port_test/show_me_the_money"
					,data:{openid:'<?=$openid?>',lesson_id:'<?=$lesson_id?>'}
					,dataType:'json'
					,success:function(data){
						if(data.err_code==100){
							alert('走后门报名成功！');
						}
					}
				});	
		}else{
			alert('走后门失败！');
		}
					
	});

	$('.send_account').bind('click',function(){
		if(prompt("第二次向全部用户赠送抽奖的密码是什么？")=="我不是卧底"){
			$.ajax({
				type:"get",
				url:"/wx_active_port_test/give_times"
				,success:function(data){
					if(data=='success'){
						alert('更新成功！');
					}
				}
			});
		}else{
			alert('密码错误！！');
		}

	});
</script>