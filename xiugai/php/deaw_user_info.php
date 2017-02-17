 <style>
        .register_message_moods{
            width:17.5rem;
            background:#fff;margin:0.5rem auto 0;
            border-radius: 2px 0 0 0;
            padding-bottom: 1rem;
            box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
			 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
			 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
			0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
            position: relative;
            overflow: hidden;
        }
        .register_message_moods i{
            display: block;background:#abbdff;
            height:0.2rem;width:12.5rem;border-radius: 2px 0 0 0;
        }
        .active_img{
            height:3rem;width:3rem;
            margin:0.75rem 0.5rem 0;
            float:left;
            border-radius:50%;
            border:0.075rem solid #abbdff;
        }
        .user_wrap{
            float: left;
            margin-top: 1.1rem;
        }
        .nickname{
        	width: 8.125rem;
        	white-space: nowrap;
        	overflow: hidden;
        	text-overflow: ellipsis;
            font-weight: 600;
           font-size:0.9rem;
        }
        .register_message_moods .p1{
            color:#323232;font-size: 0.75rem;
            font-weight: bolder;margin-top: 0.25rem;
        }
        .color_pink{
            color: #edb5b6;
        }
        .release_btn{
            text-decoration: none;
            display: block;
            position: absolute;
            font-size: 0.6rem;
            width:3.75rem;
            height: 1.1rem;
            right: 0.5rem;
            top:1rem;
            text-align: center;
            color: #EDB5B6;
            line-height: 1.1rem;
            border-radius: 0.75rem;
            border:1px solid #EDB5B6;
            /*background-color: #abbdff;*/
        }
        .disabled{
        	color:gray;
        	background-color: white;
        }
    </style>
    <div class="register_message_moods">
    <i></i>
    <img class="active_img" src="<?=$user_info['wx_icon']?>" >
    <div class="user_wrap">
        <div class="nickname color_pink"> <?php if(isset($user_info['sign_name'])):?><?=$user_info['sign_name']?><?php else:?><?=$user_info['wx_name']?><?php endif;?> </div>
   <?php if(isset($user_info['is_pay'])&&($user_info['is_pay']=='t')):?>     
        <div class="p1">您还有<span class="color_pink"> <?=$user_info['lottery_times']?> </span>次抽奖机会，赶快抽奖吧!</div>
       <?php if($present_num>0):?> 
        	<a class="release_btn" href="/wx_active_test/actives/present_list?lesson_id=<?=$lesson_id?>">中奖纪录</a>
        	<?php else:?>
        	<a class="release_btn disabled" >中奖纪录</a>
       <?php endif;?>
       <?php else:?>
       	 <div class="p1">您还没有报名呢，请报名</div>
       	<?php endif;?> 
    </div>
</div>
