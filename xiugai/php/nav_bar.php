</div>	
<style>
	.foot_nav{
		width:100%;height:2.45rem;
		background: #edb5b6;position: absolute;
		bottom: 0;left:0;
		z-index: 15;
	}
	.foot_nav div{
		width:25%;height:100%;background: #edb5b6;
		box-sizing: border-box;
		border-right:1px solid #ee9a9c;float: left;
		text-align: center;line-height:2.45rem;
		font-size: 0.6rem;color:#fff;
	}
	.foot_nav .selected{
		background:#abbdff;
	}
	.foot_nav .noborder{
		border:0;
	}
</style>
<?php if(isset($from_id)&&(strlen($from_id)>0)):?>
	<div class="foot_nav">
			<div htm='/wx_active_test/actives/detail?lesson_id=<?=$lesson_id?>' href="/wx_active_test/actives/detail?lesson_id=<?=$lesson_id?>">活动详情</div>
			<div htm='/wx_active_test/actives/sign?lesson_id=<?=$lesson_id?>' href="/wx_active_test/actives/sign?lesson_id=<?=$lesson_id?>">活动签到</div>
			<div htm='/wx_active_test/actives/present?lesson_id=<?=$lesson_id?>' href="/wx_active_test/actives/present?lesson_id=<?=$lesson_id?>">戒吼现状</div>
			<div htm='/wx_active_test/actives/awake?lesson_id=<?=$lesson_id?>' href="/wx_active_test/actives/awake?lesson_id=<?=$lesson_id?>">活动心得</div>
	</div>
<?php else:?>
<div class="foot_nav">
			<div <?php if($page_name=='detail'):?>class="noborder selected"<?php endif;?> htm='/wx_active_test/actives/detail?lesson_id=<?=$lesson_id?>' href="/wx_active_test/actives/detail?lesson_id=<?=$lesson_id?>">活动详情</div>
			<div <?php if($page_name=='sign'):?>class="noborder selected"<?php endif;?> htm='/wx_active_test/actives/sign?lesson_id=<?=$lesson_id?>' href="/wx_active_test/actives/sign?lesson_id=<?=$lesson_id?>">活动签到</div>
			<div <?php if($page_name=='present'):?>class="noborder selected"<?php endif;?> htm='/wx_active_test/actives/present?lesson_id=<?=$lesson_id?>' href="/wx_active_test/actives/present?lesson_id=<?=$lesson_id?>">戒吼现状</div>
			<div <?php if($page_name=='awake'):?>class="noborder selected"<?php endif;?> htm='/wx_active_test/actives/awake?lesson_id=<?=$lesson_id?>' href="/wx_active_test/actives/awake?lesson_id=<?=$lesson_id?>">活动心得</div>
	</div>
<?php endif;?>
<script type="text/javascript">
	$('.foot_nav>div').bind('click',function(){
		window.location.href=$(this).attr('htm');
	});
	$('input[type=text],input[type=tel],textarea').bind('focus',function(){
		$('.foot_nav').hide();
	});
	$('input[type=text],input[type=tel],textarea').bind('blur',function(){
		$('.foot_nav').show();
	});
	$('.scroll_container').on('scroll',function(){
		$(this).css('z-index',Math.ceil(Math.random()*10));
	})
</script>
