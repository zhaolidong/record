<style>
.question {
		width: 88%;
		box-shadow:-0.25rem 0rem 0.5rem rgba(193,203,254, 0.1), 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1), -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),0.25rem 0rem 0.5rem rgba(193,203,254, 0.1);
		padding: 0.9rem 0.75rem;
		border-radius: 0.1rem;
		margin: auto;
	}
	.question_title {
		height: 0.9rem;
		font-size: 0.75rem;
		overflow: hidden;
	}
	
	.question_title>span {
		color: #edb5b6;
		line-height: 0.9rem;
		float: left;
		display: inline-block;
		margin-left: 0.25rem;
	}
	
	.question_title>img {
		width: 0.9rem;
		height: 0.9rem;
		float: left;
	}
	
	.qusetion_cont {
		font-size: 0.7rem;
		font-weight: bolder;
		margin: 0.5rem 0 0.25rem 0;
	}
	
	.question_key {
		display: none;
	}
	
	label {
		font-size: 0.7rem;
		margin-bottom: 0.125rem;
	}
	
	.question_key+label {
		-webkit-appearance: none;
		padding-left: 0.6rem;
		position: relative;
		margin-left: 0.25rem;
		color: #323232;
		font-weight: normal;
		display: block;
	}

.question_key+label:before {
	content: "";
	position: absolute;
	box-sizing: border-box;
	background: white;
	border: 1px solid #323232;
	width: 0.5rem;
	height: 0.5rem;
	border-radius: 100%;
	top: 0.25rem;
	left: -0.25rem;
}
.quwstion .question_form>p {
	font-size: 0.7rem;
}
.question_key+label.blue{
	color: #ABBDFF;
}
.question_key+label.blue:before {
	background: #abbdff;
	border: 1px solid #abbdff;
	box-sizing: border-box;
}
.question_key+label.red {
	color: #edb5b6;
}
.question_key+label.red:before {
	background: #edb5b6;
	border: 1px solid #edb5b6;
	box-sizing: border-box;
}
/*.question_key+label.green {
	color: #abbdff;
}
.question_key+label.green:before {
	background: #abbdff;
	border: 1px solid #abbdff;
	box-sizing: border-box;
}*/
.question_key:checked+label:after {
	content: "";
	box-sizing: border-box;
	width: 0.5rem;
	height: 0.5rem;
	border-radius: 100%;
	background-color: #abbdff;
	position: absolute;
	top: 0.25rem;
	left: -0.25rem;
}
.question_key:checked+label.red:after {
    content: "";
    box-sizing: border-box;
    width: 0.5rem;
    height: 0.5rem;
    border-radius: 100%;
    background-color: #edb5b6; 
    position: absolute;
    top: 0.25rem;
    left: -0.25rem;
}
.question_btn {
	border: none;
	outline: none;
	height: 1.45rem;
	padding: 0rem 1.3rem;
	border-radius: 0.75rem;
	color: white;
	font-size: 0.75rem;
	display: block;
	line-height: 1.45rem;
	margin: auto;
	margin-top: 1rem;
	background-color: #abbdff;
	font-weight: bolder;
	box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
}
.jump_btn {
	border: none;
	outline: none;
	height: 1.45rem;
	padding: 0rem 1.3rem;
	border-radius: 0.75rem;
	color: white;
	font-size: 0.75rem;
	display: block;
	line-height: 1.45rem;
	margin: auto;
	margin-top: 1rem;
	background-color: #abbdff;
	font-weight: bolder;
	box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
}
.question_btn.disabled{
	color: #7f7f7f;
	border: #7a7a7a 1px solid;
	box-sizing: border-box;
	background-color: #ffffff;
}
.question_side {
	width: 16rem;
	height: 0.5rem;
	margin: auto;
	box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1), 0.25rem 0rem 0.5rem rgba(193,203,254, 0.1), -0.25rem 0rem 0.5rem rgba(193,203,254, 0.1),0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
	border-radius: 0.1rem;
}

/*群内样式*/
.alert_cont{
	padding: 0 1rem;
	box-sizing: border-box;
}
.p_succeed_end {
	font-size: 0.75rem;
	color: white;
	margin: 0;
}
.p_succeed_end_one {
	margin: 0.25rem 0;
}
</style>
<?php $numbers=array('one','two','three')?>
<?php $letters=array('a','b','c','d','e','f')?>
<?php
    		//如果用户签到过
    		if(isset($user_info['sign_answers'])&&(explode('&',$user_info['sign_answers'])[0]==date('Y-m-d'))){
    			$user_answers=explode('&',$user_info['sign_answers'])[1];
    		}
    	?>
	<?php if(isset($user_answers)):?>
	<div class="question">
		<div class="question_title">
			<img src="http://static.yhctech.com/frontend/img/active_sign_what.png" alt="">
			<span>答题签到</span>
		</div>
		<div class="question_form" action="">
			<!--问题一开始-->
			<?php foreach($questions as $list=>$item):?>
			<p class="qusetion_cont qusetion_cont_one">
				<?=$item['question_title']?>
			</p>
			<?php foreach(json_decode($item['answers']) as $inner_list=>$inner_item):?>

			<?php if(!empty($inner_item)):?>
				<?php if(isset($from_id)&&(isset($from_id[0]))):?>
						<input type="radio" class="question_key" id="qusetion_<?=$numbers[$list]?>_key_<?=$letters[$inner_list]?>" name="qusetion_<?=$numbers[$list]?>_key" <?php if($inner_list==$item[ 'right_answer']):?>right_answer
					<?php endif;?> value="
					<?=$inner_list?>">
						<label for="qusetion_<?=$numbers[$list]?>_key_<?=$letters[$inner_list]?>" class="qusetion_<?=$numbers[$list]?>_key_label"><?=$inner_item?></label>
					<?php else:?>
						<input type="radio" disabled="disabled" class="question_key" id="qusetion_<?=$numbers[$list]?>_key_<?=$letters[$inner_list]?>" name="qusetion_<?=$numbers[$list]?>_key" <?php if($inner_list==$item[ 'right_answer']):?>style="color:#edb5b6;"
				<?php elseif($inner_list==$user_answers[$list]):?>style="color:#abbdff;"
				<?php endif;?> value="
				<?=$inner_list?>">
					<label for="qusetion_<?=$numbers[$list]?>_key_<?=$letters[$inner_list]?>" class="qusetion_<?=$numbers[$list]?>_key_label <?php if($inner_list==$item['right_answer']):?>red<?php elseif($inner_list==$user_answers[$list]):?>blue<?php endif;?>"><?=$inner_item?></label>
						<?php endif;?>
				<?php endif;?>
				<?php endforeach;?>
				<?php endforeach;?>
				<!--提交按钮开始-->
				<?php if(isset($from_id)&&(isset($from_id[0]))):?>
						<input type="button" class="jump_btn" onclick="window.location.href='/wx_active_test/actives/sign?lesson_id=<?=$lesson_id?>'" value="我也试试">
							<script>
								$('input:not(.jump_btn)').attr('disabled','disabled');
							</script>
					<?php else:?>
						<input type="button" class="question_btn disabled" value="已提交">
					<?php endif;?>
					<!--提交按钮结束-->
				<!--<input type="button" class="question_btn disabled"  value="提交">-->
				<!--提交按钮结束-->
		</div>
	</div>
	<div class="question_side"></div>
	<?php else:?>
	<div class="question">
		<div class="question_title">
			<img src="http://static.yhctech.com/frontend/img/active_sign_what.png" alt="">
			<span>答题签到</span>
		</div>

		<div class="question_form" action="">
			<?php if(count($questions)>0):?>
				<!--问题开始-->
				<?php foreach($questions as $list=>$item):?>
				<p class="qusetion_cont qusetion_cont_one">
					<?=$item['question_title']?>
				</p>
				<?php foreach(json_decode($item['answers']) as $inner_list=>$inner_item):?>
					<?php if(!empty($inner_item)):?>
							<input type="radio" class="question_key" id="qusetion_<?=$numbers[$list]?>_key_<?=$letters[$inner_list]?>" name="qusetion_<?=$numbers[$list]?>_key" <?php if($inner_list==$item[ 'right_answer']):?>right_answer
						<?php endif;?> value="
						<?=$inner_list?>">
							<label for="qusetion_<?=$numbers[$list]?>_key_<?=$letters[$inner_list]?>" class="qusetion_<?=$numbers[$list]?>_key_label"><?=$inner_item?></label>
					<?php endif;?>
			<?php endforeach;?>
					<?php endforeach;?>
					<!--提交按钮开始-->
					<?php if(isset($from_id)&&(isset($from_id[0]))):?>
						<input type="button" class="jump_btn" onclick="window.location.href='/wx_active_test/actives/sign?lesson_id=<?=$lesson_id?>'" value="我也试试">
							<script>
								$('input:not(.jump_btn)').attr('disabled','disabled');
							</script>
					<?php else:?>
						<input type="button" class="question_btn" value="提交">
					<?php endif;?>
					<!--提交按钮结束-->
					<?php else:?>
							<div>请联系管理员出题,谢谢</div>
				<?php endif;?>
		</div>
	</div>
	<div class="question_side"></div>
	<?php endif;?>
	<div class="alert_wrap"></div>
	<script>
		<?php if(!isset($user_answers)):?>
			$(".question_key").bind("click", function() {
				$(this).next('label').addClass("blue"); 
				$('.question_key:not(:checked)').next('label').removeClass('blue').removeClass('red');
			})
		<?php endif;?>
		$(".question_btn").bind("click", function() {
			if($(this).hasClass('disabled')){
				return false;
			}
		<?php if(strtotime($rules)>strtotime('now')):?>
		if($('input:checked').length != 3) {
				jqAlert({
					imgSrc: "http://static.yhctech.com/frontend/img/active_sth_left_icon.png",
					cont: "<p class='p_succeed'>您还没有回答完问题！</p>" +
						"<p class='p_succeed_en'>You haven't answered the question.</p>",
					close: true,
					btn: 1,
					btn1: {
						click: true,
						name: "继续回答",
						color: "#323232",
						bC: "white",
						clickFn: function() {
							//此处填写点击关闭弹窗的函数
							$('.alert_wrap').hide();
						}
					}
				})
			} else {
				$('.question_key:checked').next('label').removeClass('red').removeClass('blue').addClass('blue');
				$('.question_key[right_answer]').next('label').removeClass('red').removeClass('blue').addClass('red');
				if($('input[right_answer]:checked').length == 3) {
					var alert_img = 'http://static.yhctech.com/frontend/img/active_success_icon.png';
					var alert_text = "<p class='p_succeed'>亲！您已签到成功！</p>" +
						"<p class='p_succeed'>您回答的是最佳答案哦！</p>" +
						"<p class='p_succeed_en'>Congratulation! Answer is the best answer!</p>" +
						"<p class='p_succeed_end p_succeed_end_one'>活动还未开始，就从今天起做一名温柔的家长吧</p>" +
						<?php if(isset($user_info['is_pay'])&&($user_info['is_pay']=='t')):?>"<p class='p_succeed_end'>分享到朋友圈让朋友们加入活动吧</p>"<?php else:?>"<p class='p_succeed_end'>赶快加入吧！</p>"<?php endif;?>;

				} else {
					var alert_img = 'http://static.yhctech.com/frontend/img/active_success_icon.png';
					var alert_text = "<p class='p_succeed'>亲！您已签到成功！</p>" +
						"<p class='p_succeed'>亲！您回答的不是最佳答案哦！加油哦！</p>" +
						"<p class='p_succeed_en'>Your answer is not the best answer!</p>" +
						"<p class='p_succeed_end p_succeed_end_one'>活动还未开始，就从今天起做一名温柔的家长吧</p>" +
						<?php if(isset($user_info['is_pay'])&&($user_info['is_pay']=='t')):?>"<p class='p_succeed_end'>分享到朋友圈让朋友们加入活动吧</p>"<?php else:?>"<p class='p_succeed_end'>赶快加入吧！</p>"<?php endif;?>;
				}
				jqAlert({
					imgSrc: alert_img,
					cont: alert_text,
					close: true,
					btn: 1,
					btn1: {
						click: true,
						name: "分享",
						color: "#323232",
						bC: "white",
						clickFn: function() {
							//                此处填写点击分享的函数
							$('#share_container').show();
						}
					}
				})
				}
		<?php else:?>	
			if($('input:checked').length != 3) {
				jqAlert({
					imgSrc: "http://static.yhctech.com/frontend/img/active_sth_left_icon.png",
					cont: "<p class='p_succeed'>您还没有回答完问题！</p>" +
						"<p class='p_succeed_en'>You haven't answered the question.</p>",
					close: true,
					btn: 1,
					btn1: {
						click: true,
						name: "继续回答",
						color: "#323232",
						bC: "white",
						clickFn: function() {
							//此处填写点击关闭弹窗的函数
							$('.alert_wrap').hide();
						}
					}
				})
			} else {
				
				$('.question_key:checked').next('label').removeClass('red').removeClass('blue').addClass('blue');
				$('.question_key[right_answer]').next('label').removeClass('red').removeClass('blue').addClass('red');
				<?php if(isset($user_info['is_pay'])&&($user_info['is_pay']=='t')):?>
					$('.question_btn').addClass('disabled').val('已提交').unbind('click');
					var arr = [];
					$("input[type='radio']:checked").each(function() {
						arr.push($(this).val())
					})
					if($('.qusetion_cont_one').eq(0).text().trim()=='1.您昨天大吼大叫了吗？'){
//						console.log($('.qusetion_cont_one').eq(0).next('input[type^=radio]:checked').next().text())
						if($('.qusetion_cont_one').eq(0).siblings('input[type^=radio]:checked').eq(0).next().text().trim()=="A、有"){
							arr[0]=true;
						}
						if($('.qusetion_cont_one').eq(0).siblings('input[type^=radio]:checked').eq(0).next().text().trim()=="B、没有"){
							arr[0]=false;
						}
					}
					$.ajax({
						type: "POST",
						url: "/wx_active_port_test/sign_in",
						dataType: "json",
						data: {
							lesson_id: '<?=$lesson_id?>',
							openid: '<?=$openid?>',
							usr_answer: arr,
							all_correct: ($('input[right_answer]:checked').length == 3) ? '1' : '0'
						},
						async:false,
						success: function(data) {
//							data=eval('('+data+')');
							if(data.err_code == 100) {
								console.log(data.data.angry_list);
								var arrData =  data.data.angry_list;
//								$('.question_btn').addClass('disabled').val('已提交');
//								$('.question_key').attr('disabled',"disabled");
//								data = data.data;
//								$(".people_all_signer").text(data.all_signer);
//								$(".people_together").text(data.together);
//								$(".people_less").text(data.less);
//								if(award_alert(data.countinue_sign_times)){
//									return;
//								}else{
//									
//								if($('input[right_answer]:checked').length == 3) {
//									//如果全部成功   
//									var alert_img = 'http://static.yhctech.com/frontend/img/active_success_icon.png';
//									var part_1 = "<p class='p_succeed'>亲！您已签到成功！</p>" + "<p class='p_succeed'>您回答的是最佳答案,亲有做辅导员的潜质哦</p>" + "<p class='p_succeed_en'>Congratulation! Answer is the best answer!</p>"
//								} else {
//									//如果部分成功
//									var alert_img = 'http://static.yhctech.com/frontend/img/active_success_icon.png';
//									var part_1 = "<p class='p_succeed'>亲！您已签到成功！</p>" + "<p class='p_succeed'>可到群里咨询辅导员，帮助提升科学教育水平</p>" + "<p class='p_succeed_en'>Your answer is not the best answer!</p>";
//								}
//								if(data.left_sign_days == 0) { //如果获得至少一次次机会
//									var part_2 = "<p class='p_succeed_end p_succeed_end_one'>亲！您已坚持<span>" + data.sign_times + "</span>次签到</span>"//获得<span>" + data.get_draw_times + "</span>次抽奖机会哦！</p>"
//								} else {
//									var part_2 =""// "<p class='p_succeed_end p_succeed_end_one'>亲！再坚持<span>" + data.left_sign_days + "</span>次签到就可获得<span>" + data.will_given_times + "</span>次抽奖机会哦！</p>";
//	
//								}
//								if(data.left_sign_times == 0) { //如果没有抽奖机会
//									var part_3 = "<p class='p_succeed_end'>继续加油哦！</p>";
//									var draw_btn = {
//										name: "马上抽奖",
//										bC: "#abbdff",
//										color: "#788fe4"
//									};
//								} else {
//									var part_3 = "<p class='p_succeed_end'>您有<span>" + data.left_sign_times + "</span>次抽奖机会哦！</p>";
//									var draw_btn = {
//										click: true,
//										name: "马上抽奖",
//										bC: "white",
//										color: "#323232",
//										clickFn: function() {
//											//                此处填写点击马上抽奖的函数
//											window.location.href = "/wx_active_test/actives/present?lesson_id=<?=$lesson_id?>";
//										}
//									}
//								}
								illumeSatr(arrData);
								$('.box').css('z-index','14'). fadeIn();
//									jqAlert({
//										imgSrc: alert_img,
//										cont: part_1 + part_2 + part_3,
//										close: true,
//										btn: 2,
//										btn1: {
//											click: true,
//											name: "分享",
//											color: "#323232",
//											bC: "white",
//											clickFn: function() {
//												//                此处填写点击分享的函数
//												$('#share_container').show();
//											}
//										},
//										btn2: draw_btn
//									});

//							}
							} else {
								alert(data.err_message);
							}
							
						}
					})
				<?php else:?>
					if($('input[right_answer]:checked').length == 3) {
						var alert_img = 'http://static.yhctech.com/frontend/img/active_success_icon.png';
						var alert_text = "<p class='p_succeed'>亲！您已签到成功！</p>" +
							"<p class='p_succeed'>您回答的是最佳答案哦！</p>" +
							"<p class='p_succeed_en'>Congratulation! Answer is the best answer!</p>" +
							"<p class='p_succeed_end p_succeed_end_one'>立即报名，让星星记录你的戒吼历程</p>" +
							"<p class='p_succeed_end'>赶快加入吧！</p>";
	
					} else {
						var alert_img = 'http://static.yhctech.com/frontend/img/active_success_icon.png';
						var alert_text = "<p class='p_succeed'>亲！您已签到成功！</p>" +
							"<p class='p_succeed'>亲！您回答的不是最佳答案哦！加油哦！</p>" +
							"<p class='p_succeed_en'>Your answer is not the best answer!</p>" +
							"<p class='p_succeed_end p_succeed_end_one'>立即报名，让星星记录你的戒吼历程</p>" +
							"<p class='p_succeed_end'>赶快加入吧！</p>";
					}
					jqAlert({
						imgSrc: alert_img,
						cont: alert_text,
						close: true,
						btn: 1,
						btn1: {
							click: true,
							name: "分享",
							color: "#323232",
							bC: "white",
							clickFn: function() {
								//                此处填写点击分享的函数
								$('#share_container').show();
							}
						}
					})
				<?php endif;?>
			}
		<?php endif;?>
		})
	$('.scroll_container').on('scroll',function(){
		$(this).css('z-index',Math.ceil(Math.random()*10));
	})
	</script>