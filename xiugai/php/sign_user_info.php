<style>
	.register_message {
		width: 17.5rem;
		background: #fff;
		margin: 0.5rem auto 0;
		border-radius: 2px 0 0 0;
		box-shadow: -0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
		position: relative;
		overflow: hidden;
	}
	
	.register_message i {
		display: block;
		background: #abbdff;
		height: 0.2rem;
		width: 12.5rem;
		border-radius: 2px 0 0 0;
	}
	
	.active_img {
		height: 3rem;
		width: 3rem;
		margin: 1rem 0.5rem 0;
		float: left;
		border-radius: 50%;
		border: 0.075rem solid #abbdff;
	}
	
	.user_wrap {
		float: left;
		width: 12.5rem;
	}
	
	.nickname {
		width: 9rem;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
		font-weight: 600;
		margin-top: 0.75rem;
		font-size: 0.9rem;
	}
	
	.register_message .p1 {
		color: #323232;
		font-size: 0.75rem;
		margin: 0rem 0;
		font-weight: bolder;
	}
	
	.register_message .p2 {
		margin: 0.3rem 0 0;
		color: #7a7a7a;
		font-size: 0.5rem;
	}
	
	.register_message .p3 {
		color: #7a7a7a;
		font-size: 0.5rem;
		margin: 0.2em 0 1rem 0;
	}
	
	.color_pink {
		color: #edb5b6;
	}
	
	.color_black {
		color: #323232;
	}
	
	.bolder {
		font-weight: bolder;
	}
	
	.clear {
		clear: both
	}
	#record{
		width: 0px;
		height: 0px;
		border: none;
		outline: none;
	}
	.register_message .record{
        display: block;
        position: absolute;
        font-size: 0.6rem;
        width:3.75rem;
        height: 1.1rem;
        right: 0.5rem;
        top:0.75rem;
        text-align: center;
        color: #edb5b6;
        border:1px solid #edb5b6;
        line-height: 1.1rem;
        border-radius: 0.75rem;
        background-color: #ffffff;
	}
	.record_bg{
		z-index: 800;
		display: none;
		position: absolute;
		width: 100%;
		height: 100%;
		background: #000000;
		opacity: 0.5;
		top: 0;
		left: 0;
	}
</style>
<!--引入css-->
<!--引入css结束-->
<?php if((isset($user_info['is_pay']))&&($user_info['is_pay']=='t')):?>
<!--群内-->
<div class="register_message">
	<i></i>
	<img class="active_img" src="<?=$user_info['wx_icon']?>">
	<div class="user_wrap">
		<div class="nickname color_pink">
			<?=$user_info['sign_name']?>
		</div>
		<div class="p1">参加本期活动的有爱家长已有<span class="color_pink people_all_signer"><?=$numbers['all']?></span>位</div>
		<div class="p2">和您同样坚持的有<span class="color_pink people_together"><?=$numbers['same']?></span>位爸爸妈妈。</div>
		<div class="p3">您比<span class="color_pink people_less"><?=$numbers['more']?></span>位爸爸妈妈更有爱哦！</div>
	</div>
	<?php if((!isset($from_id[0]))&&(isset($user_info['is_pay'])&&($user_info['is_pay']=='t'))):?>
	<!--新加DOM签到记录-->
	<label id="aaa" class="record" for="record">签到记录</label>
	<input type="text"  id="record"/>
	<!--新加DOM签到记录结束-->
	<?php endif;?>
</div>
<!--遮罩开始-->
	<script>
		var lesson_id="<?=$lesson_id?>";
		var openid="<?=$openid?>";
	</script>
<!--引入JS-->
<script src="http://static.yhctech.com/webservice/views/wx_active_beat_test/js/jquery-jedate.js"></script>
<script src="http://static.yhctech.com/webservice/views/wx_active_beat_test/js/calendar-watchs.js"></script>
<!--引入js结束-->
<?php else:?>
<!--群外-->
<div class="register_message">
	<i></i>
	<img class="active_img" src="<?=$user_info['wx_icon']?>">
	<div class="user_wrap">
		<div class="nickname color_pink">
			<?php if(isset($user_info['sign_name'])):?><?=$user_info['sign_name']?><?php else:?><?=$user_info['wx_name']?><?php endif;?>
		</div>
		<div class="p1">您还没有报名哦！</div>
		<div class="p2">参加本期活动的有爱家长已有<span class="color_pink people_all_signer"><?=$numbers['all']?></span>位</div>
		<div class="p3">点击<span class="color_black bolder">我要报名</span>，赶紧加入吧！</div>
	</div>
	<div class="clear"></div>
</div>
<?php endif;?>