 <style>
 	.winning{
				width:100%;height:100%;
				background: rgba(0,0,0,0.5);
				padding-top: 5.375rem;
				position: fixed;
				top: 0px;
				left: 0px;
				z-index: 10;
			}
			div.show{
				width:12.5rem;height:22.5rem;
				margin:0 auto;background-image: url(http://static.yhctech.com/frontend/img/221_02.png);
				background-size: 100% 100%;
				vertical-align:middle;padding-top: 0.5rem;
				position: relative;
			}
			div.show img{
				width:11.875rem;height:8.425;margin:0 auto;display: block;
			}
			.congratulation{
				width:16.5rem;height:3.925rem;
				position: absolute;background-image: url(http://static.yhctech.com/frontend/img/active_sidai.png);
				background-size: cover;
				left:-2rem;top:9rem;
			}
			.show .size{
				width:16.5rem;height:3.925rem;
				position: absolute;text-align: center;line-height: 2.6rem;
				left:-2rem;top:9rem;color:#fff;font-weight: 700;
			}
			.show .for{
				width:16.5rem;height:3.925rem;display: block;
				position: absolute;text-align: center;line-height: 1.2rem;
				left:-2rem;top:12rem;color:#fff;font-weight: 700;font-size: 0.65rem;
			}
			.show .p1{
				width:16.5rem;height:3.925rem;display: block;
				position: absolute;text-align: center;line-height: 1.2rem;
				left:-2rem;top:15rem;color:#fff;font-weight: 700;font-size: 0.6rem;
			}
			.show .button{
				width:2.5rem;height:1.45rem;display: block;background:#fff; 
				text-align: center;margin:10rem auto 0;border-radius: 0.75rem;
				color:#000;font-weight: 700;font-size: 0.6rem;line-height: 1.45rem;
			}
 </style>
  <div class="winning">
			<div class="show">
				<img src="http://static.yhctech.com/frontend/img/active_jiangbei.png" alt="">
				<div class="congratulation"></div>
				<div class="size">恭喜<?=$user_name?>获奖</div>
				<div class="for">获得《28天为爱有声阅读》<br>第三期荣誉奖杯</div>
				<div class="p1">您的用心付出将成为孩子一生永远的回忆<br>使孩子终身受益！</div>
				<div class="button" onclick="$('#share_container').show()">分享</div>
			</div>
		</div>
		