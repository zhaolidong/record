<style>
	*{margin:0;padding: 0;}
	a{text-decoration: none;}
	li{list-style-type: none}
	body,html{
		width:100%;height:100%;
		overflow: hidden;
	}
	.iconfont {
	    font-family:"iconfont" !important;
	    font-size:0.9rem;
	    font-style:normal;
	    -webkit-font-smoothing: antialiased;
	    -webkit-text-stroke-width: 0.2px;
	    -moz-osx-font-smoothing: grayscale;
	}
	@font-face {
	  font-family: 'iconfont';  /* project id 183893 */
	  src: url('//at.alicdn.com/t/font_mmtgv2wv1ohqto6r.eot');
	  src: url('//at.alicdn.com/t/font_mmtgv2wv1ohqto6r.eot?#iefix') format('embedded-opentype'),
	  url('//at.alicdn.com/t/font_mmtgv2wv1ohqto6r.woff') format('woff'),
	  url('//at.alicdn.com/t/font_mmtgv2wv1ohqto6r.ttf') format('truetype'),
	  url('//at.alicdn.com/t/font_mmtgv2wv1ohqto6r.svg#iconfont') format('svg');
	}
	.box{
		width:100%;height:30.15rem;
		background-image: url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_bg.png);
		background-size: cover;overflow: hidden;
		position: relative;
	}
 .box	.skymap_close{
		display:block;position:absolute;right:.5rem;top:.5rem;width:1.25rem;height:1.25rem;
		background-image: url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_close.png);background-size: cover;z-index: 200;
	}
 .box	i{
		display: block;position: absolute;
		background-size: cover;
	}
	.heart{
		width:15.425rem;height:12.125rem;
		background-image: url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_heart.png);
		background-size: cover;
		margin:1.45rem auto 0;overflow:hidden;
	}
	.heart .img{
		width:12.325rem;height:5.875rem;
		margin:3.95rem auto;display: block;
		background-size: 100% 100%;
	}
	.box>i{
		color:gray;display: block;width:0.95rem;height:0.95rem;
		position: absolute;
		/*text-shadow:0 0 1.4rem rgba(255,50,81,1);*/
	}
	.box>i:nth-child(1){
		left:8.9rem;top:3.85rem;
	}
	.box>i:nth-child(2){
		left:7.8rem;top:2.65rem;
	}
	.box>i:nth-child(3){
		left:6.65rem;top:1.775rem;
	}
	.box>i:nth-child(4){
		left:5.275rem;top:1.525rem;
	}
	.box>i:nth-child(5){
		left:3.975rem;top:1.775rem;
	}
	.box>i:nth-child(6){
		left:2.675rem;top:2.65rem;
	}
	.box>i:nth-child(7){
		left:1.825rem;top:3.85rem;
	}
	.box>i:nth-child(8){
		left:1.425rem;top:5.375rem;
	}
	.box>i:nth-child(9){
		left:1.825rem;top:7.05rem;
	}
	.box>i:nth-child(10){
		left:2.675rem;top:8.35rem;
	}
	.box>i:nth-child(11){
		left:3.975rem;top:9.35rem;
	}
	.box>i:nth-child(12){
		left:5.275rem;top:10.2rem;
	}
	.box>i:nth-child(13){
		left:6.65rem;top:11.05rem;
	}
	.box>i:nth-child(14){
		left:7.8rem;top:11.85rem;
	}
	.box>i:nth-child(15){
		left:8.9rem;top:12.8rem;
	}
	.box>i:nth-child(16){
		left:9.85rem;top:11.85rem;
	}
	.box>i:nth-child(17){
		left:11.075rem;top:11.05rem;
	}
	.box>i:nth-child(18){
		left:12.575rem;top:10.2rem;
	}
	.box>i:nth-child(19){
		left:13.95rem;top:9.35rem;
	}
	.box>i:nth-child(20){
		left:15.2rem;top:8.35rem;
	}
	.box>i:nth-child(21){
		left:15.95rem;top:7.05rem;
	}
	.box>i:nth-child(22){
		left:16.4rem;top:5.375rem;
	}
	.box>i:nth-child(23){
		left:15.95rem;top:3.85rem;
	}
	.box>i:nth-child(24){
		left:15.2rem;top:2.65rem;
	}
	.box>i:nth-child(25){
		left:13.95rem;top:1.775rem;
	}
	.box>i:nth-child(26){
		left:12.575rem;top:1.525rem;
	}
	.box>i:nth-child(27){
		left:11.075rem;top:1.775rem;
	}
	.box>i:nth-child(28){
		left:9.85rem;top:2.65rem;
	}
	.meteor1{
		display: block;width:2rem;height:2rem;
		background-image: url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_meteor.png);
		background-size: cover;position: absolute;
		right:-2rem;top:-2rem;
	}
	.meteor2{
		display: block;width:2rem;height:2rem;
		background-image: url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_meteor.png);
		background-size: cover;position: absolute;
		right:-1rem;top:3rem;
	}
	.meteor3{
		display: block;width:2rem;height:2rem;
		background-image: url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_meteor.png);
		background-size: cover;position: absolute;
		right:5rem;top:-2rem;
	}

	.heart .changeName{
		width:100%;height:100%;
		overflow:hidden; position: relative;
	}
	.heart .changeName .changenametxt{
		width:8.575rem;height:2.4rem;
		background-image: url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/changenametxt.png);
		background-size: cover;margin:4.075rem 0 0 3.725rem;
	}
	.heart .changeName .input{
			width:6rem;height:1.75rem;
			background:rgba(153,107,221,0.3);position: absolute;
			left:6.925rem;top:3.7rem;
			border-radius:0.5rem 0.5rem 0.5rem 0.5rem;
			color:rgb(253, 255, 93);
	    	overflow: hidden;
	    	font-size: 0.8rem;
	    	line-height: 1.75rem;
		}
	.heart .changeName .input input{
		width: 80%;height: 100%;background:transparent;
		border:none;outline: none;padding-left: 0.5rem;
		padding-right: 1rem;font-size: 0.7rem;color:rgb(253, 255, 93);
	}
	::-webkit-input-value { /* WebKit browsers */
	    color:rgb(253, 255, 93);
	}
	.changeName p{
		position: absolute;left:10.2rem;top:5.7rem;
		color:rgb(253, 255, 93);font-size: 0.8rem;
		font-weight: 700;
	}
	.changeName .changenamebutton{
		width:5.15rem;height:1.5rem;
		background-image: url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/changenamebutton.png);
		background-size: cover;margin:1.475rem auto 0;
	}
	.changeName .TK{
		width:100%;height:100%;position: absolute;z-index: 100;
		background-image: url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/changenameTK.png);display: none;
		background-size: cover;left:0;top:0;text-align: center;
	}
	.changeName .TK b{
		display:inline-block;width:3.25rem;height: 1.5rem;
		background-image: url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/changenameno.png);
		background-size:100% 100%;margin-top:7.5rem;
	}
	.changeName .TK span{
		display:inline-block;width:3.25rem;height: 1.5rem;
		background-image: url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/changenameyes.png);
		background-size:100% 100%;margin-top:7.5rem;margin-left: 0.5rem;
	}
</style>

<!-- <script>
	//input框随文字增加长度
	function checkLength(which) {
	   /* iCount = which.value.replace(/[^\u0000-\u00ff]/g,"aa");
		which.width="2rem";*/

		console.log($(which).val().length);
		$(which).parent().css("width",4+0.25*$(which).val().length+"rem");
	}
</script> -->

<div class="box" <?php if($page_name!="present"):?>style="display:none"<?php endif;?>>
	<i class="iconfont num1">&#xe6cb;</i>
	<i class="iconfont num2">&#xe6cb;</i>
	<i class="iconfont num3">&#xe6cb;</i>
	<i class="iconfont num4">&#xe6cb;</i>
	<i class="iconfont num5">&#xe6cb;</i>
	<i class="iconfont num6">&#xe6cb;</i>
	<i class="iconfont num7">&#xe6cb;</i>
	<i class="iconfont num8">&#xe6cb;</i>
	<i class="iconfont num9">&#xe6cb;</i>
	<i class="iconfont num10">&#xe6cb;</i>
	<i class="iconfont num11">&#xe6cb;</i>
	<i class="iconfont num12">&#xe6cb;</i>
	<i class="iconfont num13">&#xe6cb;</i>
	<i class="iconfont num14">&#xe6cb;</i>
	<i class="iconfont num15">&#xe6cb;</i>
	<i class="iconfont num16">&#xe6cb;</i>
	<i class="iconfont num17">&#xe6cb;</i>
	<i class="iconfont num18">&#xe6cb;</i>
	<i class="iconfont num19">&#xe6cb;</i>
	<i class="iconfont num20">&#xe6cb;</i>
	<i class="iconfont num21">&#xe6cb;</i>
	<i class="iconfont num22">&#xe6cb;</i>
	<i class="iconfont num23">&#xe6cb;</i>
	<i class="iconfont num24">&#xe6cb;</i>
	<i class="iconfont num25">&#xe6cb;</i>
	<i class="iconfont num26">&#xe6cb;</i>
	<i class="iconfont num27">&#xe6cb;</i>
	<i class="iconfont num28">&#xe6cb;</i>
	<div class="heart">
		<div class="img"></div>
		<div class="changeName">
			<div class="changenametxt"></div>
			<div class="input">
        <?php if(!isset($from_id[0])):?>
					<?php if(isset($user_info['is_pay'])&&($user_info['is_pay']=='t')):?>
      			<?php if(isset($user_info['award_name'])&&isset($user_info['award_name'][0])):?><?=$user_info['award_name']?><?php elseif(isset($user_info['sign_name'])&&isset($user_info['sign_name'][0])):?><input value="<?=$user_info['sign_name']?>"><?php else:?><input value="<?=$user_info['wx_name']?>"/><?php endif;?>
					<?php else:?>
							<?=$user_info['wx_name']?>
					<?php endif;?>
				<?php else:?>
      			<?php if(isset($user_info['award_name'])&&isset($user_info['award_name'][0])):?><?=$user_info['award_name']?><?php elseif(isset($user_info['sign_name'])&&isset($user_info['sign_name'][0])):?><?=$user_info['sign_name']?><?php else:?><?=$user_info['wx_name']?><?php endif;?>
					<?php endif;?>
			</div>
			<p></p>
			<?php if(!isset($from_id[0])):?>
					<?php if((!isset($user_info['award_name'][0]))&&(isset($user_info['is_pay']))&&($user_info['is_pay']=='t')):?><div class="changenamebutton"></div><?php endif;?>
			<?php endif;?>
			<div class="TK">
				<b></b>
				<span></span>
			</div>
		</div>
	</div>
	<b class="skymap_close"></b>
	<strong class="meteor1"></strong>
	<strong class="meteor2"></strong>
	<strong class="meteor3"></strong>
</div>



<script>
	$(function(){
		function  add() {
		    var html=document.documentElement;
		    var hei=html.clientWidth;
		    var fz=hei/375*20+"px";
		    html.style.fontSize=fz;
		};
		add();
		window.addEventListener("resize",add,false);
		if($(".heart .changeName .input input").attr("value")==undefined){
			var nr=$(".heart .changeName .input").html().trim();
			if(nr.length>6){
				nr=nr.substring(0,6)+"…";
			}
			$(".heart .changeName .input").html(nr).css("background","transparent");
		}
		$(".skymap_close").on("click",function(){
			$(".box").hide();
			window.location.reload();
		});
		$(".changeName .changenamebutton").on("click",function(){
			$(".changeName .TK").show();
		});
		$(".changeName .TK b").on("click",function(){
			$(".changeName .TK").hide();
//			$(".heart .changeName .input input").val("");
		});
		$(".changeName .TK span").on("click",function(){
			$(".changeName .changenamebutton").hide();
			$(".changeName .TK").hide();
			if($(".heart .changeName .input input").val()==""){
				if($(".heart .changeName .input input").attr('value').length>6){
					$(".changeName .input").html($(".heart .changeName .input input").attr('value').substring(0,6)+"…");
				}else{
					$(".changeName .input").html($(".heart .changeName .input input").attr('value'));
				}
			}else{
				//将用户修改的新名称传给后台
				$.ajax({
		    		url:'/wx_active_port/upload_username',
		    		data:{lesson_id:"<?=$lesson_id?>",openid:"<?=$openid?>",award_name:$(".heart .changeName .input input").val()},
		    		type:'post',
		    		success:function(){

		    		}
		    	});
				if($(".heart .changeName .input input").val().length>6){
					$(".changeName .input").html($(".heart .changeName .input input").val().substring(0,6)+"…");
				}else{
					$(".changeName .input").html($(".heart .changeName .input input").val());
				};
			}
			$(".changeName .input").css("background",0).css("line-height","1.6rem").css("color","rgb(253, 255, 93)").css("font-size","0.8rem");

		});

//定义签到完成的大函数------------------------------------------------------------------------
		//将某个星星改变颜色，并且闪烁两下
		//// $status=>状态(0.漏签;1.正常签到且未生气;2.正常签到但是生气了)
		illumeSatr=function(arr){
			var color,textShadow,boxbg,bg;
			var animation=true;
			//遍历状态数组，修改星星颜色，星星阴影，大box的大背景，恭喜签到的文本（img:src）
			if(arr.length==0){
				bg="url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_txt.png)";
				boxbg="url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_bg.png)";
				animation=false;
			}else{
				for(var i=0;i<arr.length;i++){
					if(arr[i]==1){
						color="#fdff5d";
						bg="url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_txt.png)";
						textShadow="0 0 0.4rem rgba(252,255,0,0.64)";
						boxbg="url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_bg.png)";
					}else if(arr[i]==2){
						color="red";
						bg="url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_angrytxt.png)";
						textShadow="0 0 0.4rem rgba(255,50,81,1)";
						boxbg="url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_angrybg.png)";
						animation=false;
					}else{
						color="#616161";
						textShadow="";
						bg="";
						boxbg="url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_bg.png)";
						$(".box i").eq(i).css("-webkit-text-stroke","0.5px #fff");
						animation=false;
					};
					//修改每个星星的样式
					$(".box i").eq(i).css("color",color).css("text-shadow",textShadow);
				};
			}
			
			//显示右上角关闭按钮
			$(".skymap_close").show();
			//隐藏签到后出现的文本部分
			$(".heart .img").show();
			$(".changeName").hide();
			//恭喜您签到成功的文字显示部分（bg为false，去掉img标签; 还有是否发怒两种状态）
			$(".heart .img").css("background-image",bg);
			//根据是否生气，修改box的大背景
			$(".box").css("background-image",boxbg);
			//最后一个星星的闪烁效果
			if(!(arr[arr.length-1]==0) && !(arr.length==0)){
				$(".box i").eq(arr.length-1).animate({opacity:0.4},300,function(){
					$(this).animate({opacity:1},300,function(){
						$(this).animate({opacity:0.2},300,function(){
							$(this).animate({opacity:1},300)
						})
					})
				});
			};

			//如果已经满了28天，效果如下
			if(arr.length==28 && animation){
				var meteor1=function(){
					$(".meteor1").animate({right:"18rem",top:"16rem",opacity:0},500,function(){
						$(this).animate({right:"-2rem",top:"-2rem",opacity:1},0)
					});
				};
				var meteor2=function(){
					$(".meteor2").animate({right:"17rem",top:"21rem",opacity:0},500,function(){
						$(this).animate({right:"-1rem",top:"3rem",opacity:1},0)
					});
				};
				var meteor3=function(){
					$(".meteor3").animate({right:"25rem",top:"16rem",opacity:0},500,function(){
						$(this).animate({right:"5rem",top:"-2rem",opacity:1},0)
					});
				}
				var timer=setInterval(function(){
					$(".box i:odd").animate({opacity:0.2},150,function(){
						$(this).animate({opacity:1},150,function(){
							$(this).animate({opacity:0.2},150,function(){
								$(this).animate({opacity:1},150)
							})
						})
					});
					$(".box i:even").animate({opacity:1},150,function(){
						$(this).animate({opacity:0.2},150,function(){
							$(this).animate({opacity:1},150,function(){
								$(this).animate({opacity:0.2},150)
							})
						})
					});
				},600);
				var timer2=setInterval(function(){
					var bb=[meteor1,meteor2,meteor3];
					bb[parseInt(3*Math.random())]();
				},2000);


			};

		};

//定义戒吼现状的大函数------------------------------------------------------------------------
			nowStatus=function(arr,username){

			//填上用户名
			$(".heart .changeName .input input").attr('value',username);

			var color,textShadow,boxbg;
			var animation=true;
			var daynum=0;
			//遍历状态数组，修改星星颜色，星星阴影，大box的大背景，恭喜签到的文本（img:src）
			for(var i=0;i<arr.length;i++){
				if(arr[i]==1){
					color="#fdff5d";
					textShadow="0 0 0.4rem rgba(252,255,0,0.64)";
					boxbg="url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_bg.png)";
					daynum++;
				}else if(arr[i]==2){
					color="red";
					textShadow="0 0 0.4rem rgba(255,50,81,1)";
					boxbg="url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_angrybg.png)";
					animation=false;
				}else{
					color="#616161";
					textShadow="";
					boxbg="url(http://static.yhctech.com/webservice/views/wx_active_beat_test/img/skymap_bg.png)";
					$(".box i").eq(i).css("-webkit-text-stroke","0.5px #fff");
					animation=false;
				};
				//修改每个星星的样式
				$(".box i").eq(i).css("color",color).css("text-shadow",textShadow);

			};
			//填上戒吼天数
			$(".changeName p").html(daynum);
			//隐藏右上角关闭按钮
			$(".skymap_close").hide();
			//隐藏签到后出现的文本部分
			$(".heart .img").hide();
			$(".changeName").show();
			//根据是否生气，修改box的大背景
			$(".box").css("background-image",boxbg);
			//最后一个星星的闪烁效果
			if(!(arr[arr.length-1]==0) && !(arr.length==0)){
				$(".box i").eq(arr.length-1).animate({opacity:0.4},300,function(){
					$(this).animate({opacity:1},300,function(){
						$(this).animate({opacity:0.2},300,function(){
							$(this).animate({opacity:1},300)
						})
					})
				});
			};

			//如果已经满了28天，效果如下
			if(arr.length==28 && animation == true){
				var meteor1=function(){
					$(".meteor1").animate({right:"18rem",top:"16rem",opacity:0},1000,function(){
						$(this).animate({right:"-2rem",top:"-2rem",opacity:1},0)
					});
				};
				var meteor2=function(){
					$(".meteor2").animate({right:"17rem",top:"21rem",opacity:0},1000,function(){
						$(this).animate({right:"-1rem",top:"3rem",opacity:1},0)
					});
				};
				var meteor3=function(){
					$(".meteor3").animate({right:"25rem",top:"16rem",opacity:0},1000,function(){
						$(this).animate({right:"5rem",top:"-2rem",opacity:1},0)
					});
				}
				var timer=setInterval(function(){
					$(".box i:odd").animate({opacity:0.2},150,function(){
						$(this).animate({opacity:1},150,function(){
							$(this).animate({opacity:0.2},150,function(){
								$(this).animate({opacity:1},150)
							})
						})
					});
					$(".box i:even").animate({opacity:1},150,function(){
						$(this).animate({opacity:0.2},150,function(){
							$(this).animate({opacity:1},150,function(){
								$(this).animate({opacity:0.2},150)
							})
						})
					});
				},600);
				var timer2=setInterval(function(){
					var bb=[meteor1,meteor2,meteor3];
					bb[parseInt(3*Math.random())]();
				},1000);
			};
		};






	//	var arr=[1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1];
		// illumeSatr(arr);
	//	nowStatus(arr);
	<?php if($page_name=='present'):?>
			nowStatus(<?=$sign_arr?>);
	<?php endif;?>
	})
</script>
