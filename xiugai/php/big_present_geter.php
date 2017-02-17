<style>
        *{
            margin: 0;
            padding:0;
        }
        .award_big_wrap{
            width:16.25rem;
            margin:0.5rem auto 0.25rem;
            padding: 0.5rem 0.75rem 1.5rem;
            box-sizing: border-box;
            box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
						 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
            position: relative;
        }
        .award_big_wrap .award_big_title{
            font-size: 0.75rem;
            line-height: 0.9rem;
        }
        .award_big_wrap .award_big_title>img{
            float: left;
            margin-right: 0.25rem;
            width:0.9rem;;
            height: 0.9rem;;
        }
        .award_big_wrap .award_wrap{
            background-color: #f7f7f7;
        }
        .award_big_wrap .award_big_title>span{
            display: inline-block;
            height:0.9rem;;
            line-height: 0.9rem;;
            color: #edb5b6;
        }
        .clear{
            clear: both;
        }
        .award_big_wrap  .award_big_content_wrap{
            margin-top: 0.5rem;
            height:4.75rem;
            box-sizing: border-box;
            position: relative;
            overflow: hidden;
        }
        .award_big_wrap  .award_big_content,.award_big_wrap .award_small_content{
            width: 100%;
            box-sizing: border-box;
            padding:0 0.5rem ;
            position: absolute;
            left: 0;
            top:0;
            list-style: none;
            font-size: 0.7rem;
            margin: auto;
        }
        .award_big_wrap .award_small_content{
        	font-size: 0.6rem;
        }
        .award_big_wrap .award_small_wrap{
            overflow: hidden;
            position: relative;
            height:9.75rem;
        }
        .award_big_wrap  .award_big_content li p,.award_big_wrap  .award_small_content li p{
            text-overflow : ellipsis;
            overflow : hidden;
            /*white-space : nowrap;*/
            margin: 0;
        }
        .award_big_wrap  .award_big_content li a,.award_big_wrap  .award_small_content li a{
            text-overflow : ellipsis;
            overflow : hidden;
            /*white-space : nowrap;*/
            margin: 0;
        }
        .award_big_wrap .award_small_title{
        	width: 100%;
        	margin-top: 1rem;
        	font-size: 0.7rem;
        	color: #323232;
        	font-weight: bolder;
        	padding: 0.5rem 0 0 0.5rem;
        	background-color: #f7f7f7;
        }
        .award_big_wrap  .award_big_content li,.award_big_wrap  .award_small_content li{
            width: 100%;
            box-sizing: border-box;
            padding: 0.25rem 0;
        }
        .award_big_wrap  a{
            color: #abbdff;
            display: block;
        }
    </style>
  <div class="award_big_wrap">
    <div class="award_big_title">
        <img src="http://static.yhctech.com/frontend/img/active_medal.png" alt="">
        <span>大奖得主</span>
        <div class="clear"></div>
    </div>
    <div class="award_wrap award_big_content_wrap">
        <ul class="award_big_content">
         <?php foreach($big_present as $item):?> 
           <li>
                <p>
                    恭喜<?=$item['wx_name']?>获得：
                </p>
                <a href="javascript:void(0);" out_link="<?=$item['present_website']?>" company="<?=$item['present_brand']?>" type="board_link"
                	>
                    <span><?=$item['present_brand']?></span>厂商赞助的<span><?=$item['present_name']?></span>
                </a>
            </li>
         <?php endforeach;?>   
        </ul>
    </div>
    <div class="award_small_title">
    	中奖嘉宾：
    </div>
    <div class="award_wrap award_small_wrap">
        <ul class="award_small_content">
            <?php foreach($normal_present as $item):?> 
           <li>
                <p>
                    恭喜<?=$item['wx_name']?>获得：
                </p>
                <a href="javascript:void(0);" out_link="<?=$item['present_website']?>" company="<?=$item['present_brand']?>" type="board_link">
                    <span><?=$item['present_brand']?></span>厂商赞助的<span><?=$item['present_name']?></span>
                </a>
            </li>
         <?php endforeach;?>   
        </ul>
    </div>
</div>
<script type="text/javascript">
	(function re2(){
        var smallWrap = $(".award_big_wrap .award_big_content"),
                li=smallWrap.children(":first"),
                num = 0.5;
        smallWrap.css("top",smallWrap.position().top-num);
        if(smallWrap.position().top+li.innerHeight()<=0){
            li.appendTo(smallWrap);
            smallWrap.css("top",0);
        }
        requestAnimationFrame(re2);
    })();
    (function re3(){
        var smallWrap = $(".award_big_wrap .award_small_content"),
                li=smallWrap.children(":first"),
                num = 1;
        smallWrap.css("top",smallWrap.position().top-num);
        if(smallWrap.position().top+li.innerHeight()<=0){
            li.appendTo(smallWrap);
            smallWrap.css("top",0);
        }
        requestAnimationFrame(re3);
    })();
</script>