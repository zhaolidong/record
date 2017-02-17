<style>
	.bc{
		display: block;width:3px;height:8.75rem;
		background: red;position: absolute;left:50%;
		top:0.5rem;
	}
	.bc2{
		display: block;width:3px;height:8.75rem;
		background: green;position: absolute;left:50%;
		top:9.25rem;
	}
	.turntable{
		width:17.5rem;height:17.5rem;margin:0.5rem auto 0;
		background:#fff;border-radius: 50%;
		box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
						 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
		padding-top: 1rem;
		position: relative;
	}
	.inside_turntable{
		width:15.5rem;height:15.5rem;
		background:#fff;border-radius: 50%;
		box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
						 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
		margin:0 auto;
		padding-top: 5.875rem;
	}
	.bg{
		width:3.75rem;height:3.75rem;
		background:#edeffc;border-radius: 50%;
		margin:0 auto;
		/* padding-top: 0.2rem; */
		position: relative;
	}
	.rotate{
		width:3.35rem;height:3.35rem;
		background-image:url(http://static.yhctech.com/frontend/img/after_turntable.png);
		background-size: cover;
		border-radius: 50%;
		position: absolute;left:0.2rem;top:0.2rem;
	}
	/* .rotate:hover{
		background-image:url(./img/before_turntable.png);
		transform:rotate(5010deg);
		transition:4s ease;
	} */
	.rotate img{
		position: absolute;left:1.35rem;top:-0.55rem;
		width:0.75rem;height:0.75rem;
	}
	.turntable>i:nth-child(1){
		display: block;width:1px;height:15.5rem;
		background:#eceefc;position: absolute;left:50%;
		top:1rem;transform:rotate(0deg);
	}
	.turntable>i:nth-child(2){
		display: block;width:1px;height:15.5rem;
		background:#eceefc;position: absolute;left:50%;
		top:1rem;transform:rotate(45deg);
	}
	.turntable>i:nth-child(3){
		display: block;width:1px;height:15.5rem;
		background:#eceefc;position: absolute;left:50%;
		top:1rem;transform:rotate(90deg);
	}
	.turntable>i:nth-child(4){
		display: block;width:1px;height:15.5rem;
		background:#eceefc;position: absolute;left:50%;
		top:1rem;transform:rotate(135deg);
	}
	/* .cizi{
		width:17rem;height:17rem;border-radius: 50%;
		border:1px solid red;position: absolute;
		left:0.2rem;top:0.2rem;
	}*/
	.turntable .b1{
		display: block;width:0.1rem;height:16.5rem;
		 /*background:blue; */
		position: absolute;left:8.65rem;top:0.5rem;
	} 
	.turntable .b2{
		transform:rotate(22.5deg);
	} 
	.turntable .b3{
		transform:rotate(45deg);
	}
	.turntable .b4{
		transform:rotate(67.5deg);
	}
	.turntable .b5{
		transform:rotate(90deg);
	}
	.turntable .b6{
		transform:rotate(112.5deg);
	}
	.turntable .b7{
		transform:rotate(135deg);
	}
	.turntable .b8{
		transform:rotate(157.5deg);
	}
	.turntable .b1 b{
		position: absolute;display: block;
		width:0.3rem;height:0.3rem;border-radius: 50%;
		background:#eceefc;top:-0.25rem;left:-0.1rem;
	} 
	.turntable .b1 strong{
		position: absolute;display: block;
		width:0.3rem;height:0.3rem;border-radius: 50%;
		background:#eceefc;bottom:-0.25rem;left:-0.1rem;
	} 
	.turntable .gift .left{
		width:3rem;height:3rem;
		position: absolute;left:-1.4rem;top:1rem; 
	}
	.turntable .gift .left img{
		width:3rem;height:3rem;
	}
	.turntable .gift .leftp{
		width:1.8rem;height:1.5rem;
		position: absolute;left:-0.8rem;top:4rem; 
		font-size: 0.6rem;color:#edb5b6;text-align: center;
	}
	.turntable .gift .right{
		width:3rem;height:3rem;
		position: absolute;left:-1.4rem;bottom:1rem; 
	}
	.turntable .gift .right img{
		width:3rem;height:3rem;
		transform:rotate(180deg);
	}
	.turntable .gift .rightp{
		transform:rotate(180deg);
		width:1.8rem;height:1.5rem;
		position: absolute;left:-0.8rem;bottom:3.6rem; 
		font-size: 0.6rem;color:#edb5b6;text-align: center;
	}
	  .award_details_alert_wrap{
            width: 100%;
            z-index: 999;
            background-color:rgba(0,0,0,0.4) ;
            position: fixed;
            height:100%;
            top: 0px;
    		left: 0px;
    		display: none;
        }
        .award_details_alert_wrap .award_details_alert_cont_wrap{
            opacity: 1;
            position: relative;
            top:8.525rem;
            padding:.75rem 1rem;
            box-sizing: border-box;
            width: 66.667%;
            background-color: #f7f7f7;
            margin: auto;
            border-radius: 0.5rem;
            font-size: 0.6rem;
        }
        .award_details_alert_wrap .award_details_alert_header>img{
            display: block;
            margin: 0.25rem auto 0;
            width:2.5rem;
            height:2.5rem;
        }
        .award_details_alert_wrap .award_details_alert_cont{
            margin-top: 0.75rem;
        }
        .award_details_alert_wrap .award_details_alert_cont img{
            /*width: 0.75rem;
            height:0.75rem;
            float: left;
            margin-right: 0.25rem;*/
        }
        .award_details_alert_wrap .award_details_alert_cont>div{
            margin:0.4rem 0 ;
            overflow: hidden;
        }
        .award_details_alert_wrap .award_details_alert_cont p{
            line-height: 0.75rem;
            font-weight: bolder;
            float: left;
            margin:0;
        }
        .award_details_alert_wrap .award_details_alert_cont p span{
            font-weight: normal;
        }
        .award_details_alert_wrap .award_details_alert_cont .block{
            margin-left: 1rem;
            display: block;
        }
        .award_details_alert_wrap .award_details_alert_fooder{
            color: #abbdff;
            margin-top: 0.852rem;
        }
        .award_details_alert_wrap .award_details_alert_fooder .wrap{
        	height: 0.75rem;
        	line-height: 0.75rem;
        	overflow: hidden;
        }			
        .award_details_alert_wrap .award_details_alert_fooder img{
        	width: 0.75rem;
		    height: 0.75rem;
		    float: left;
		    margin-right: 0.3rem;
        }
        .award_details_alert_wrap .award_details_alert_fooder span{
        	font-size: 0.7rem;
        	line-height: 0.75rem;
        }
        .award_details_alert_wrap .bolder{
            display: inline-block;
            line-height: 0.75rem;
            font-weight: bolder;
        }
        .award_details_alert_wrap .close{
            width: 1rem;
            height:1rem;
            line-height: 1rem;
            text-align: center;
            font-size: 0.6rem;
            box-sizing: border-box;
            font-weight: 900;
            color: #798fe5;
            display: inline-block;
            position: absolute;
            right: 2%;
            top:2%;
            border-radius: 50%;
            background-image: url(http://static.yhctech.com/frontend/img/active_alert_exit.png);
            background-size: contain;
        }
        .award_details_alert_wrap .link{
            color: #abbdff;
            display: block;
            margin:0.25rem 0;
            height: 1.1rem;
            box-sizing: border-box;
            line-height:1.1rem;
            padding: 0 0.25rem;
            border:0.025rem solid #abbdff;
            border-radius: 0.5rem;
            text-decoration: none;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
</style>


<div class="turntable">
		<i></i>
		<i></i>
		<i></i>
		<i></i>
		<div class="b1">
			<b></b>
			<strong></strong>
		</div>
		<?php foreach($present as $list=>$item):?>
			<?php if(($list==0)||($list%2==0)):?>
				<div class="b1 b<?=(int)$list+1?>">
					<b></b>
					<strong></strong>
				</div>
				<div class="b1 b<?=(int)$list+2?> gift">
					<div class="left" present_id="<?=$item['id']?>">
						<img src="<?=$item['present_icon']?>" detail_src="<?=$item['present_brief']?>" present_src="<?=$item['present_ad_page']?>" present_brand="<?=$item['present_brand']?>" alt="">
					</div>
					<?php if(strlen($item['present_name'])>12):?>
						<p class="leftp">
						<?php $strs=str_split($item['present_name'],9)?>
							<?=$strs[0]?>
							<br>
								<?=isset($strs[1])?$strs[1]:''?>
								</p>
					<?php else:?>
						<p class="leftp">
							<?php $strs=str_split($item['present_name'],6)?>
							<?=$strs[0]?>
							<br>
								<?=isset($strs[1])?$strs[1]:''?>
								</p>
					<?php endif;?>
					<b></b>
					<strong></strong>
					<div class="right" present_id="<?=$present[$list+1]['id']?>" >
						<img src="<?=$present[$list+1]['present_icon']?>" detail_src="<?=$present[$list+1]['present_brief']?>" present_src="<?=$present[$list+1]['present_ad_page']?>" present_brand="<?=$present[$list+1]['present_brand']?>" alt="">
					</div>
					<?php if(strlen($present[$list+1]['present_name'])>13):?>
						<p class="rightp">
						<?php $strs=str_split($present[$list+1]['present_name'],9)?>
							<?=$strs[0]?>
							<br>
								<?=isset($strs[1])?$strs[1]:''?>
								</p>
					<?php else:?>
						<p class="rightp">
							<?php $strs=str_split($present[$list+1]['present_name'],6)?>
							<?=$strs[0]?>
							<br>
								<?=isset($strs[1])?$strs[1]:''?>
								</p>
					<?php endif;?>
				</div>
			<?php endif;?>
		<?php endforeach;?>
			
			<div class="inside_turntable">
			<div class="bg">
				<div class="rotate">
					<img src="http://static.yhctech.com/frontend/img/turntable.png"  alt="">
				</div>
			</div>
		</div>
		<!-- <div class="cizi"></div> -->
	</div>
	
	<div class="award_details_alert_wrap" style="display: none;">
    <div class="award_details_alert_cont_wrap">
        <div class="close">
        </div>
        <div class="award_details_alert_cont">
        	<img src="http://photo.enterdesk.com/2009-4-21/200901241609531378.png" class="ad_img" width="100%" alt="" />
        </div>
        <div class="award_details_alert_fooder">
            <div class="wrap">
                <img src="http://static.yhctech.com/frontend/img/active_link.png" alt="">
                <span>赞助商链接</span>
            </div>
            <a class="link ad_link" href="javascript:void(0);" type="turnable_alert_link">
                http://www.yinghuochongleji.com
            </a>
        </div>
    </div>
</div>
	
<script type="text/javascript">
var present_ids={
	left:[],right:[]
}
$('.left').each(function(){
	present_ids.left[present_ids.left.length]=$(this).attr('present_id');
})
$('.right').each(function(){
	present_ids.right[present_ids.right.length]=$(this).attr('present_id');
})
function LuckDraw(num,callback){//num是奖品present_id(就是属性present_id值),callback是回调函数
	num=num+"";
	var final_num=0;
	if(present_ids.left.indexOf(num)>=0){
		final_num=present_ids.left.indexOf(num)+1;
	}else{
		final_num=present_ids.right.indexOf(num)+5;
	}
	var ang=parseInt(Math.ceil(Math.random()*45))+1;
	var angle=(final_num-1)*45+ang+3600;
	$(".rotate").css("transform","rotate("+angle+"deg)")
		.css("transition","4s ease");
		setTimeout(callback,4000);
}


 $(".rotate").bind("click",function(){
 	<?php if(strtotime('now')>strtotime($end_time)):?>
 		alert('活动已结束!您无法继续抽奖！');
 	<?php else:?>
 	 
 	if($('div[class=p1]>span').html().trim()=='0'){
 		alert('您没有抽奖次数啦,请去签到吧');
 	}else{
 		$(".rotate").unbind("click");
	 	$.ajax({
	 		url:'/wx_active_port_test/get_presents',
	 		type:'post',
	 		data:{
	 			lesson_id:'<?=$lesson_id?>',
	 			openid:'<?=$openid?>'
	 		},
	 		dataType:'json',
	 		success:function(data){
	 			if(data.err_code=='100'){
	LuckDraw(data.data.present_id,function(){
	 				 //	alert('您中了'+data.data.present_id+'等奖');
	 				 $('div[class=p1]>span').html($('div[class=p1]>span').html().trim()-1);
	 				 	window.location.href='/wx_active_test/actives/get_present?lesson_id=<?=$lesson_id?>&order_id='+data.data.order_id
	 				 });
	 			}
	 		}
	 	})
 	}
 	<?php endif;?>
 });	

$('.turntable img').bind('click',function(){
		$.ajax({
      		type:"post",
      		url:"/wx_active_port_test/view_page",
      		data:{
      			url:'present_alert_view',
      			company:$(this).attr('present_brand'),
      			lesson_id:'<?=$lesson_id?>',
      			openid:"<?=$openid?>"
      		},
      	});
	$('.ad_img').attr('src',$(this).attr('detail_src'));
	$('.ad_link').html($(this).attr('present_src')).attr('out_link',$(this).attr('present_src')).attr('company',$(this).attr('present_brand'));
	bind_link();
	$('.award_details_alert_wrap').show();
});
$(".award_details_alert_wrap .close").bind("click",function(){
        $(".award_details_alert_wrap").hide();
})


</script>