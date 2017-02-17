<!DOCTYPE html>
<!--此页面为活动管理后台页面
其中包括:
		1、活动详情；
		2、活动签到规则；
		3、活动问题设置；
		4、活动奖项设置；
-->
<!--定义一点php变量-->
<?php $han_numbers=['一','二','三','四','五','六','七','八','九'];?>
<?php $letters=['A','B','C','D','E','F','G'];?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>活动后台页面</title>
		<link rel="stylesheet" type="text/css" href="http://static.yhctech.com/frontend/css/jedate.css">
		<link rel="stylesheet" type="text/css" href="http://static.yhctech.com/frontend/css/activity_background.css"/>
		<style type="text/css">
			.red_border{
				border-color: red;
				border-width: 1px!important;
			}
		</style>
	</head>
	<body>
		<div class="header">
			<div class="log">
				<img src="http://static.yhctech.com/frontend/img/activty_logo.png">
				<span>后台管理系统</span>
			</div>
			<div class="header_user">
				<p>
					用户：<span class="set_user_name"><?=$user_name?></span>
				</p>
				<p>
					lesson_id：<span class="set_lesson_id"><?=$rules['lesson_name']?></span>
				</p>
			</div>
		</div>
		<div class="content">
			<!--活动后台导航栏开始-->
			<ul class="nav">
				<li class="nav_style nav_hover">
					时间设置
				</li>
				<li class="nav_style">
					权益设置
				</li>
				<li class="nav_style">
					签到设置
				</li>
				<li class="nav_style">
					奖品设置
				</li>
				<li class="nav_style">
					自定义banner图
				</li>
				<li class="nav_style">
					自定义群邀请
				</li>
				<li class="nav_style">
					开始活动/设置群名（危险！）
				</li>
			</ul>
			<!--活动设置导航栏结束-->
			<!--活动内容开始-->
			<div class="content_warp">
				<div class="form" >
					<ul class="content_hide">
						<!--活动详情页面开始-->
						<li>
							<ul class="set_activity">
								<!--活动开始和结束时间-->
								<li>
									<label for="avtivity_name">活动名称：</label>
									<input type="text" id="avtivity_name" name="lesson_name" class="avtivity_name input30" placeholder="请设置活动名称" value="<?=$rules['lesson_name']?>"/>
								</li>
								<li>
									<label for="begin_time">活动开始时间：</label>
									<input type="text" id="begin_time" name="begin_time" class="begin_time input30 " placeholder="请选择" value="<?=$rules['begin_time']?>"/>
									<span class="hint">（请在时间选定好后按日历上的确定键）</span>
								</li>
								<li>
									<label for="end_time">活动结束时间：</label>
									<input type="text" id="end_time" name="end_time" class="end_time input30" placeholder="请选择" value="<?=$rules['end_time']?>"/>
									<span class="hint">（请在时间选定好后按日历上的确定键）</span>
								</li>
								<li>
									<!--下次报名-->
								</li>
								<!--报名时间开始-->
								<li>
									<label for="begin_time">报名开始时间：</label>
									<input type="text" id="begin_enroll_time" name="begin_enroll_time" class="begin_enroll_time input30 " placeholder="请选择" value="<?=$rules['begin_enroll_time']?>"/>
									<span class="hint">（请在时间选定好后按日历上的确定键）</span>
								</li>
								<li>
									<label for="end_time">报名结束时间：</label>
									<input type="text" id="end_enroll_time" name="end_enroll_time" class="end_enroll_time input30" placeholder="请选择" value="<?=$rules['end_enroll_time']?>"/>
									<span class="hint">（请在时间选定好后按日历上的确定键）</span>
								</li>
								<!--报名时间结束-->
								<!--下次活动-->
								<!--<li>
									<label for="">
										是否还有下次课程<input type="checkbox" id="is_next_lesson" name="next_lesson" id="" value="" <?php if(isset($rules['next_lesson'])):?>checked<?php endif;?> />
									</label>
									<div class="next_lesson_time" <?php if(!isset($rules['next_lesson'])):?>style="display: none;"<?php endif;?> >
										
										<input type="text" id='next_begin_time' name="begin_time" <?php if(isset($next_lesson[0])):?>value="<?=$next_lesson[0]['begin_time']?>"<?php endif;?> placeholder="下次活动开始时间" desc="下次活动开始时间"/>
										<input type="text" id='next_end_time' name="end_time" <?php if(isset($next_lesson[0])):?>value="<?=$next_lesson[0]['end_time']?>"<?php endif;?>  placeholder="下次活动结束时间" desc="下次活动结束时间"/>
										
									</div>
								</li>-->
								<li>
									<input type="button" class="lesson_rules_submit" value="保存"/>
								</li>
							</ul>
						</li>
						<!--活动详情页面结束-->
						<!--活动签到规则开始-->
						<li class="none">
							<ul class="set_activity set_sign_rules">
								
								<li class="normal">
									<label for="one_day" style="width: 6em;">每签到：</label>
									<input class="award_input" type="number" min="0" name="times" id="one_day" value="<?=$rules['sign_rules']['normal']['times']?>" />&nbsp;次,
									<label for="one_day_award" style="width: 1em;">赠&nbsp;</label>
									<input class="award_input"  type="number" min="0" name="given" id="one_day_award" value="<?=$rules['sign_rules']['normal']['given']?>"/>&nbsp;次抽奖
								</li>
							<?php foreach($rules['sign_rules']['cont'] as $item):?>
								<li class="continue">
									<label style="width: 6em;">连续签到：</label>
									<input class="award_input" type="number" name="times" value="<?=$item['times']?>"/>&nbsp;次,
									<label style="width: 1em;">赠&nbsp;</label>
									<input class="award_input" type="number" name="given" value="<?=$item['given']?>" />&nbsp;次抽奖	<button onclick="$(this).parent().remove()">删除本行规则</button>
								</li>
							<?php endforeach;?>

							<li class="award_days">
								<label for="award_days">
									连续签到<input type="number" name='award_days' id="award_days" value="<?=$rules['sign_rules']['award_days']?>">天，发奖状
								</label>
							</li>
								<li>
									<input type="button" class="add_sign_rule" name="" id="" value="增加一行规则" />
								</li>
								<li>
									<input type="button" class="sign_rules_submit" value="保存"/>
								</li>
							</ul>
						</li>
						<!--活动签到规则结束-->
						<!--活动问题设置开始-->
						<li class="none">
							<!--问题和签到时间-->
							<ul class="set_questions">
								<li>
									<label>
										问题日期选择
									</label>
									<input type="text" id="question_time">
								</li>
						<?php if(count($questions)>0):?>
							<?php foreach($questions as $list=>$item):?>	
								<li class="question_cont">
									<label>
										问题<?=$han_numbers[$list]?>：
									</label>
									<textarea class="question question_one_title"  name="question_one" onpropertychange="this.style.height=this.scrollHeight+'px';" oninput="this.style.height=this.scrollHeight+'px'"><?=$item['question_title']?></textarea>
									<ul class="set_question ">
									<?php foreach(json_decode($item['answers']) as $inner_list=>$inner_item):?>	
										<li class="question_key_title">
											<input class="question_key_radio" type="radio" <?php if($item['right_answer']==$inner_list):?>checked<?php endif;?> name='question_<?=$inner_list?>'/>
											<!--<span><?=$letters[$inner_list]?></span>-->
											<input type="text" class="question_key input60" value="<?=$inner_item?>"/>
										</li>
									<?php endforeach;?>	
									</ul>
								</li>
							<?php endforeach;?>
						<?php else:?>		
								<li class="question_cont">
									<label>
										问题一：
									</label>
									<textarea class="question question_one_title"   name="question_one" onpropertychange="this.style.height=this.scrollHeight+'px';" oninput="this.style.height=this.scrollHeight+'px'"></textarea>
									<ul class="set_question ">
										<li class="question_key_title">
											<input class="question_key_radio" type="radio"  name='question_0'/>
											<!--<span>A</span>-->
											<input type="text" class="question_key input60"/>
										</li>
										<li class="question_key_title">
											<input class="question_key_radio" type="radio" name='question_0'/>
											<!--<span>B</span>-->
											<input type="text" class="question_key input60"/>
										</li>
										<li class="question_key_title">
											<input class="question_key_radio" type="radio"  name='question_0'/>
											<!--<span>C</span>-->
											<input type="text"  class="question_key input60"/>
										</li>
									</ul>
								</li>
								<li class="question_cont">
									<label>
										问题二：
									</label>
									<textarea class="question question_one_title"   name="question_one" onpropertychange="this.style.height=this.scrollHeight+'px';" oninput="this.style.height=this.scrollHeight+'px'"></textarea>
									<ul class="set_question ">
										<li class="question_key_title">
											<input class="question_key_radio" type="radio"  name='question_1'/>
											<!--<span>A</span>-->
											<input type="text" class="question_key input60"/>
										</li>
										<li class="question_key_title">
											<input class="question_key_radio" type="radio" name='question_1'/>
											<!--<span>B</span>-->
											<input type="text" class="question_key input60"/>
										</li>
										<li class="question_key_title">
											<input class="question_key_radio" type="radio"  name='question_1'/>
											<!--<span>C</span>-->
											<input type="text"  class="question_key input60"/>
										</li>
									</ul>
								</li>
								<li class="question_cont">
									<label>
										问题三：
									</label>
									<textarea class="question question_one_title"   name="question_one" onpropertychange="this.style.height=this.scrollHeight+'px';" oninput="this.style.height=this.scrollHeight+'px'"></textarea>
									<ul class="set_question ">
										<li class="question_key_title">
											<input class="question_key_radio" type="radio" name='question_2'/>
											<!--<span>A</span>-->
											<input type="text" class="question_key input60"/>
										</li>
										<li class="question_key_title">
											<input class="question_key_radio" type="radio" name='question_2'/>
											<!--<span>B</span>-->
											<input type="text" class="question_key input60"/>
										</li>
										<li class="question_key_title">
											<input class="question_key_radio" type="radio" name='question_2'/>
											<!--<span>C</span>-->
											<input type="text"  class="question_key input60"/>
										</li>
									</ul>
								</li>
						<?php endif;?>
							</ul>
							<!--问题三结束-->
							<button class="active_question_submit">保存提交</button>
						</li>
						<!--活动问题设置结束-->
						<!--奖品设置开始-->
						<li class="none active_presents">
							<table class="table_form">
							<thead>
								<tr>
									<th>等级</th>
									<th>名称</th>
									<th>奖品图片</th>
									<th>奖品详情图片</th>
									<th>虚拟物品</th>
									<th>总量</th>
									<th>余量</th>
									<th>已抽数量</th>
									<th>追加数量</th>
									<th>中奖概率</th>
									<th>当日中奖最大量</th>
									<th>赞助商链接</th>
									<th>备注</th>
									<th>赞助商名字</th>
									<th>奖品详情链接</th>
									<th>虚拟物品领奖链接</th>
									<th>广告语</th>
									<th>联系方式</th>
									<th>奖品发奖时简介</th>
								</tr>
							</thead>
							<tbody>
									<?php foreach($presents as $list=>$item):?>
								<tr class="presents_cont" present_id="<?=$item['id']?>">
									<td>
										<select class="present_level"  disabled="disabled" >
											<option selected value="<?=$item['present_level']?>"><?=$item['present_level']?></option>
										</select>
									</td>
									<td>
										<input type="text" class="present_name" name="present_name" value="<?=$item['present_name']?>">
									</td>
									<td>
										<label for="<?='item_pic'.$list?>">
										<div>点我选择图片</div>
										<input class="upload" id="<?='item_pic'.$list?>" type="file" accept="image/*" style="display: none;">
										</label>
										<img style="height: 30px;" alt="" name="present_icon" src="<?=$item['present_icon']?>">
										<!--</input>-->
									</td>
									<td>
										<label for="<?='desc_pic'.$list?>">
										<div>点我选择图片</div>
										<input class="upload" id="<?='desc_pic'.$list?>" type="file" accept="image/*" style="display: none;"></label>
										<img style="height: 30px;" alt="" name="present_brief" src="<?=$item['present_brief']?>">
										<!--</input>-->
									</td>
									<td>
										<select name="present_type" id="present_type">
											<option <?php if($item['present_type']=='realize'):?>selected<?php endif;?> value="realize">否</option>
											<option <?php if($item['present_type']=='virtual'):?>selected<?php endif;?>  value="virtual">是</option>
										</select>
									</td>
									<td>
										<input type="number" min="0" <?php if($item['new_item']=='0'):?>name="present_all" <?php else:?>disabled<?php endif;?> value="<?=$item['present_all']?>" >
									</td>
									<td>
										<input type="text" readonly="readonly" disabled="disabled" value="<?=$item['present_left']?>" >
									</td>
									<td>
										<?=$item['present_all']-$item['present_left']?>
									</td>
									<td>
										<input type="number" name="add_present" min="0">
									</td>
									<td>
										<input type="text" name="present_probability" value="<?=$item['present_probability']?>">%
									</td>
									<td>
										<input type="number" name="present_max" value="<?=$item['present_max']?>" min="0" placeholder="不填跟余量一致">
									</td>
									<td>
										<input type="text" name="present_website" value="<?=$item['present_website']?>">
									</td>
									<td>
										<input type="text" name="present_others" placeholder="选填" value="<?=$item['present_others']?>" >
									</td>
									<!--这是赞助商名字-->
									<td>
										<input type="text"  name="present_brand"  value="<?=$item['present_brand']?>"/>
									</td>
									<!--这是赞助商广告链接-->
									<td>
										<input type="text"  name="present_ad_page"  value="<?=$item['present_ad_page']?>"/>
									</td>
									<!--这是虚拟物品链接-->
									<td>
										<input type="text"  name="present_get_link"  value="<?=$item['present_get_link']?>"/>
									</td>
									<td>
										<input type="text" name="present_ad_talk"  value="<?=$item['present_ad_talk']?>"/>
									</td>
									<td>
										<input type="text" name="call_number"  value="<?=$item['call_number']?>"/>
									</td>
									<td>
									<input type="text" name="present_desc"  value="<?=$item['present_desc']?>"/>
									</td>
								</tr>
									
								<?php endforeach;?>
						</tbody>
					<!--奖品设置结束-->
					<tfoot>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								
							</td>
							<td>
								<span>
									剩余中奖率
									<input type="text" disabled="disabled" value="0" class="probility_left"/>
								</span>
							</td>
							<td></td>
							<td></td>
						</tr>
					</tfoot>
					</ul>
				</table>
				<br />
				<button class="active_presents_submit">保存</button>
			</li>

			<!--自定义banner图开始-->
			<li style="display:none;" class="custom_banner">
				<table class="table_form">
							<thead>
								<tr>
									<th>banner顺序</th>
									<th>banner图</th>
									<th>banner图链接</th>
									<th>banner图广告商</th>
								</tr>
							</thead>
							<tbody id="bar">
							<?php foreach($banners as $list=>$item):?>	
								<tr class="presents_cont">
									<td><?=(int)$list+1?></td>
									<td style="position:relative;">
										<label for="">
										<div>点我选择图片</div>
										<input class="upload" id="" type="file" accept="image/*" style="display:block;
										width:100%;height:100%;max-width:100%;border:1px solid red;position:absolute;left:0;top:0;filter:alpha(opacity=0);-moz-opacity:0; opacity:0;"></label>
										<img style="height: 30px;width:50px;" alt="" name="present_icon" src="<?=$item['banner_pic']?>">
									</td>
									<td>
										<input type="text" style="width:100%;height:60%;max-width:270px;" value="<?=$item['banner_link']?>">
									</td>
									<td>
										<input type="text" style="width:100%;height:60%;max-width:270px;" value="<?=$item['banner_company']?>">
									</td>
									<td>
										<input type="button" class="del" value="删除" style="width:100px;height:30px;text-align:center;color:red;">
									</td>
								</tr>
								<?php endforeach;?>
							</tbody>
				</table>
				<input type="button" class="add" value="添加一行" style="width:100px;height:30px;text-align:center;color:blue;">

				<button style="width:70px;height:30px;color:green;">确认提交</button>
			</li>


<!--自定义banner结束-->
<!--自定义邀请函开始-->
			<li style="display:none;position:relative;" class="custom_invitation">
				<div style="width:100%;text-align:center;font-size:30px;color:blue;">自定义入群邀请</div>
				<h3 style="float:left;color:green;margin-left:200px;">预览</h3>
				<h3 style="float:right;color:green;margin-right:200px;">上传</h3>
				<b style="display:block;height:450px;width:2px;margin:20px auto 0;background:green;"></b>
				<div style="width:400px;height:200px;border:1px solid green;position:absolute;left:30px;top:100px;">
					<img src="<?=$invite_rules['thumburl']?>" alt="" class="showimg" style="float:left;border:1px solid black;width:100px;height:100px;margin:10px 5px 0 10px;">
					<p class="showtitle" style="margin:20px 10px 0 10px;width:250px;overflow:hidden;color:blue;"><?=$invite_rules['title']?></p>
					<p class="showcontent" style="margin:10px 10px 0 10px;width:380px;height:100px;white-space:normal;"><?=$invite_rules['desc']?></p>
				</div>	
				<div style="width:400px;height:350px;position:absolute;right:30px;top:100px;">
					<div style="margin:20px 0 0 20px;float:left;">
						<p style="float:left;">上传图片：</p>
						<input class="upload_invitation" style="float:left;" id="" type="file" accept="image/*" style="display:block;width:50%;height:100%;">
					</div>
					<div style="margin:50px 0 0 20px;float:left;">
						<p style="float:left;">邀请函标题：</p>
						<input class="title" type="text" style="display:block;width:50%;height:25px;">
					</div>

					<div style="margin:50px 0 0 20px;float:left;">
						<p style="float:left;">邀请函简介：</p>
						<textarea name="" id="" cols="30" rows="10" style="width:90%;height:50%;"></textarea>
					</div>
				</div>
				<button style="width:70px;height:30px;color:green;" class="submit_inviterules">确认上传</button>
			</li>
<!--自定义邀请函结束-->
<!--自定义开始活动开始-->
	<li style="display:none;position:relative;" class="custom_invitation">
		<h2>自定义开始群活动（警告！此操作非常危险！且操作不可逆！）</h2>
		<h2><?php if($invite_rules['status']=='0'):?>活动未开始<?php elseif($invite_rules['status']=='1'):?>活动已开始<?php else:?>活动已结束<?php endif;?></h2>
		<div>
			<input type="text" class="input" name="group_name" placeholder="请输入您定义好的群名字，此操作不可逆！请谨慎使用！" value="<?=$invite_rules['title']?>"/>
			<input type="text"  name="welcome" placeholder="欢迎消息"/>
		</div>
		<div>
			<button style="width:70px;height:30px;color:green;" class="start_lesson">点我部署机器人！</button>
		</div>
		<hr />
		<h2>请在设置完成自定义群邀请和设置好自定义开始群活动后再点击下方启动活动！</h2>
		<hr />
		<div>
			<style type="text/css">
				.big_button{
					    position: relative;
					    color: rgba(255,255,255,1);
					    text-decoration: none;
					    background-color: rgba(219,87,5,1);
					    font-family: 'Yanone Kaffeesatz';
					    font-weight: 700;
					    font-size: 3em;
					    display: block;
					    padding: 4px;
					    -webkit-border-radius: 8px;
					    -moz-border-radius: 8px;
					    border-radius: 8px;
					    -webkit-box-shadow: 0px 9px 0px rgba(219,31,5,1), 0px 9px 25px rgba(0,0,0,.7);
					    -moz-box-shadow: 0px 9px 0px rgba(219,31,5,1), 0px 9px 25px rgba(0,0,0,.7);
					    box-shadow: 0px 9px 0px rgba(219,31,5,1), 0px 9px 25px rgba(0,0,0,.7);
					    margin: 100px auto;
					    width: 160px;
					    text-align: center;
					    -webkit-transition: all .1s ease;
					    -moz-transition: all .1s ease;
					    -ms-transition: all .1s ease;
					    -o-transition: all .1s ease;
					    transition: all .1s ease;
					    line-height: 3rem;
					    height: 8rem!important;
					    width: 14rem!important;
				}
			</style>
			<button class="big_button event_start">点我启动活动！</button>
		</div>
	</li>
<!--自定义开始活动结束-->

				</div>
			</div>
			<!--活动内容结束-->
		</div>
	</body>
	
	<script>
		var active_rule_dates=[<?php foreach($active_rule_dates as $item):?>'<?=$item['date']?>',<?php endforeach;?>];
		var lesson_id="<?=$lesson_id?>";
	</script>
	<script src="http://static.yhctech.com/frontend/js/jquery-3.0.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://static.yhctech.com/frontend/js/jedate.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://static.yhctech.com/webservice/views/wx_active_beat_test/js/activity_background.js"></script>
	<script src="http://static.yhctech.com/frontend/js/Sortable.js"></script>
	<script src="http://static.yhctech.com/frontend/js/custom_banner.js"></script>
</html>
