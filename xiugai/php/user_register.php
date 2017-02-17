 <style>
        *{
            margin: 0;
            padding:0;
        }
        .apply_log{
            width: 2.5rem;
            height:2.5rem;
            border-radius: 50%;
            position: absolute;
            top:12.875rem;
            left: 8.125rem;
            z-index: 300;
            box-shadow:-0.25rem 0.25rem 0.5rem rgba(193, 203, 254, 0.1), 0.25rem -0.25rem 0.5rem rgba(193, 203, 254, 0.1), -0.25rem -0.25rem 0.5rem rgba(193, 203, 254, 0.1), 0.25rem 0.25rem 0.5rem rgba(193, 203, 254, 0.1);
        }
        .apply_log>img{
            width:100%;
            height:100%;
            border-radius: 50%;
        }
        .appply_form{
            box-shadow:-0.25rem 0.25rem 0.5rem rgba(193, 203, 254, 0.1), 0.25rem -0.25rem 0.5rem rgba(193, 203, 254, 0.1), -0.25rem -0.25rem 0.5rem rgba(193, 203, 254, 0.1), 0.25rem 0.25rem 0.5rem rgba(193, 203, 254, 0.1);
            width: 16.25rem;
            margin: auto;
            margin-top:0.5rem ;
            margin-bottom:2.95rem;
            padding-top:1.25rem ;
            padding-bottom:1rem ;
            position: relative;
        }
        .apply_form_title{
            font-size: 0.7rem;
            line-height: 2.1rem;
            height: 2.1rem;
            color: #f1c5c6;
            text-align: center;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        .form_style{
            display: block;
            width:12.5rem;
            margin:auto ;
            position: relative;
        }
        .iphone_err_wrap{
            text-align: right;
            margin:0.25rem auto;
            height: 0.5rem;
            line-height: 0.5rem;
            font-size: 0.45rem;
        }
        .iphone_err{
            display: none;
        }
        .iphone_err_wrap img{
            width: 0.5rem;
            height: 0.5rem;
        }

        .apply_wrap{
            width:100%;
            background-color: #f7f7f7;
            box-sizing: border-box;
            border:1px solid #d1dafb;
            padding: 0.2rem;
            font-size: 0.6rem;
            border-radius: 0.1rem;
            color: #7a7a7a;
        }
        label{
            margin-bottom: 0;
        }
        .input_style{
            border: 0;
            outline: none;
            width: 77%;
            background-color: #f7f7f7;
        }
        .apply_wrap_iphone{
            margin-top:0.75rem;
        }
        .apply_age_wrap{
            background-color: white;
            border:none;
            margin-top:0.5rem;
            padding:0;
        }
        .apply_age{
            color: #323232;
            width:3.85rem;
            border-radius: 0.1rem;
            outline: none;
            font-size: 0.5rem;
            text-align: center;
            border:1px solid #d4ddff;
            box-sizing: border-box;
            background-color: #f7f7f7;
            padding: 0.2rem;
        }
        .apply_wrap_province{
            margin-top: 0.5rem;
            border: none;
            background-color: white;
        }
        .apply_wrap_city{
            margin-top:0.75rem;
            border: none;
            background-color: white;
        }
        .apply_btn_wrap{
            margin-top:1.35rem;
            text-align: center;
        }
        .apply_btn{
            width: 4rem;
            height: 1.45rem;
            font-size: 0.75rem;
            outline: none;
            border:none;
            border-radius: 0.75rem;
            background-color: #abbdff;
            color: white;
            font-weight: bolder;
            box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
						 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
        }
        .apply_tel{
            margin-top:1.6rem ;
            text-align: center;
            font-size: 0.6rem;
            color: #abbdff;
            margin-bottom: 1.3rem;
        }
        .apply_tel span{
            display: inline-block;
            height: 0.75rem;
            font-size: 0.6rem;
            line-height: 0.75rem;
        }
        .apply_tel>img{
            width: 0.75rem;
            height: 0.75rem;
            margin-right: 0.25rem;
        }
        .apply_age_select{
            list-style: none;
            line-height: 1.5rem;
            text-align: center;
            font-size: 0.7rem;
            border-radius: 0.1rem;
            height: 7.5rem;
            color: #323232;
            font-weight: bolder;
            width:5rem;
            z-index: 2;
            background-color: white;
            position: absolute;
            right: 0rem;
            overflow-y: scroll;
            border:1px solid #edb5b6;
        }
        .apply_age_options{
            position: absolute;
            right: 0rem;
            top:3.7rem;
            display: none;
            cursor: default;
        }
        .triangle_wrap{
            display: inline-block;
            height: 0; width: 0;
            border-top: 0.225rem solid transparent;
            border-right: 0.35rem solid #edb5b6 ;
            border-bottom: 0.225rem solid transparent;
            border-left: 0.45rem solid transparent;
            position: absolute;
            left: -5.66rem;
            top: 1.24rem;
            z-index: 1;
        }
        .triangle{
            display: inline-block;
            height: 0; width: 0;
            border-top: 0.225rem solid transparent;
            border-right: 0.35rem solid white ;
            border-bottom: 0.225rem solid transparent;
            border-left: 0.45rem solid transparent;
            position: absolute;
            left: -5.6rem;
            top: 1.24rem;
            z-index: 3;
        }
         .p_succeed{
            color: white;
            font-size: 0.75rem;
            margin-top: 0.25rem;
        }
        .p_succeed_en{
            font-size: 0.6rem;
            color: #6d82d1;
            font-weight: lighter;
        }
        .p_succeed_two{
            margin-top: 0.5rem;
        }
        .p_succeed_two_num{
            font-weight: bolder;
        }
        .small{
            font-size: 0.6rem;
            font-weight: lighter;
        }
        .alert_cont{
        	top:2.5rem!important;        }
     .next_pic{
         display: none;
         height:100%;
         width:100%;
         position: absolute;
         left: 0px;
         top:0px;
         background-color: rgba(0,0,0,0.6);
         z-index: 9999;
     }
     .next_pic>img{
         position:absolute;
         left:50%;
         top:50%;
         margin-top:-100px;
         margin-left:-100px;
         width:200px;
         height:200px;
         z-index:1;
     }
    </style>
<?php if(!isset($user_info['is_pay'])):?>    
    <div>
    <!--报名页面所有内容块开始-->
    <!--报名悬浮log开始-->
    <div class="apply_log">
        <img src="http://static.yhctech.com/frontend/img/regist_red.png" alt="">
    </div>
    <!--报名log悬浮结束-->
    <!--报名内容块开始-->
    <div class="appply_form">
        <!--报名时间开始-->
        <div class="apply_form_title">
            <span class="apply_activity_stage">第三期</span>报名时间为：<span class="begin_time_apply"><?=explode(' ',$active_rules['begin_enroll_time'])[0]?></span>至<span class="end_time_apply"><?=explode(' ',$active_rules['end_enroll_time'])[0]?></span>
        </div>
        <!--报名时间结束-->
        <!--报名填写详情-->
        <div class="form_style" action="">
            <div class="iphone_err_wrap">
                <span class="iphone_err"><img src="http://static.yhctech.com/frontend/img/err_alert_icon.png" alt=""> 手机号输入有误</span>
            </div>
            <div class="apply_wrap">
                <label for="apply_name">姓名：</label><input type="text" id="apply_name"  class="input_style apply_name" required="required" placeholder="请输入姓名">
            </div>
            <div class="apply_wrap apply_wrap_iphone">
                <label for="apply_name">手机：</label><input type="text" id="apply_iphone" maxlength="11" class="input_style apply_iphone" required="required" placeholder="请输入手机号">
            </div>
            <div class="apply_wrap apply_age_wrap">
                <label for="apply_age">宝贝年龄：</label><input type="text" id="apply_age" class="apply_age" placeholder="点击选择" required="required" readonly="readonly">
            </div>
            <div class="apply_age_options">
                <span class="triangle"></span>
                <span class="triangle_wrap"></span>
                <ul class="apply_age_select">
                    <li>1岁</li>
                    <li>2岁</li>
                    <li>3岁</li>
                    <li>4岁</li>
                    <li>5岁</li>
                    <li>6岁</li>
                    <li>7岁</li>
                    <li>8岁</li>
                    <li>9岁</li>
                    <li>10岁</li>
                    <li>11岁</li>
                    <li>12岁</li>
                    <li>12岁以上</li>
                </ul>
            </div>
            <div class="apply_wrap apply_wrap_province">
                <label for="apply_province">所在省：</label>
                <select id="apply_province" name="apply_province" class="input_style apply_province" required="required"></select>
            </div>
            <div class="apply_wrap apply_wrap_city">
                <label for="apply_city">所在市：</label>
                <select id="apply_city" name="apply_province"class="input_style apply_city" required="required"></select>
            </div>
            <div class="apply_btn_wrap">
            	<?php if($user_next_lesson==1):?>
            		<input type="button" class="apply_btn" value="扫码入群">
            	<?php else:?>
                	<input type="button" class="apply_btn" apply_btn value="保存">
                <?php endif;?>
            </div>
        </div>
        <!--报名填写信息结束-->
        <!--客服电话开始-->
        <div class="apply_tel">
            <img src="http://static.yhctech.com/frontend/img/active_phone_red.png" alt=""><span>客服电话：</span><span>17792214882</span>
        </div>
        <!--客服电话结束-->
    </div>
    <!--报名页面所有内容块结束-->
</div>
<?php else:?>
	<!--如果已经注册了？-->
	    <div>
    <!--报名页面所有内容块开始-->
    <!--报名悬浮log开始-->
    <div class="apply_log">
        <img src="http://static.yhctech.com/frontend/img/regist_red.png" alt="">
    </div>
    <!--报名log悬浮结束-->
    <!--报名内容块开始-->
    <div class="appply_form">
        <!--报名时间开始-->
        <div class="apply_form_title">
            <span class="apply_activity_stage">第三期</span>报名时间为：<span class="begin_time_apply"><?=explode(' ',$active_rules['begin_enroll_time'])[0]?></span>至<span class="end_time_apply"><?=explode(' ',$active_rules['end_enroll_time'])[0]?></span>
        </div>
        <!--报名时间结束-->
        <!--报名填写详情-->
        <div class="form_style" action="">
            <div class="iphone_err_wrap">
                <span class="iphone_err"><img src="http://static.yhctech.com/frontend/img/err_alert_icon.png" alt=""> 手机号输入有误</span>
            </div>
            <div class="apply_wrap">
            	
                <label for="apply_name">姓名：</label><input type="text" id="apply_name"  class="input_style apply_name" value="<?=$user_info['sign_name']?>">
            </div>
            <div class="apply_wrap apply_wrap_iphone">
                <label for="apply_name">手机：</label><input type="text" id="apply_iphone" maxlength="11" class="input_style apply_iphone"  value="<?=$user_info['sign_tel']?>">
            </div>
            
            <div class="apply_wrap apply_age_wrap">
                <label for="apply_age">宝贝年龄：</label><input type="text" id="apply_age" class="apply_age" placeholder="点击选择" required="required" readonly="readonly" value="<?=$user_info['sign_age']?>">
            </div>
            <div class="apply_age_options">
                <span class="triangle"></span>
                <span class="triangle_wrap"></span>
                <ul class="apply_age_select">
                    <li>1岁</li>
                    <li>2岁</li>
                    <li>3岁</li>
                    <li>4岁</li>
                    <li>5岁</li>
                    <li>6岁</li>
                    <li>7岁</li>
                    <li>8岁</li>
                    <li>9岁</li>
                    <li>10岁</li>
                    <li>11岁</li>
                    <li>12岁</li>
                    <li>12岁以上</li>
                </ul>
            </div>
            <div class="apply_wrap apply_wrap_province">
                <label for="apply_province">所在省：</label>
                <select id="apply_province" name="apply_province" class="input_style apply_province" required="required">
                </select>
            </div>
            <div class="apply_wrap apply_wrap_city">
                <label for="apply_city">所在市：</label>
                <select id="apply_city" name="apply_province"class="input_style apply_city" required="required">
                </select>
            </div>
            <div class="apply_btn_wrap">
            	<?php if($user_next_lesson==1):?>
            		<input type="button" class="apply_btn" next_lesson_btn value="扫码入群">
            	<?php else:?>
<!--               	 	<input type="button" class="apply_btn" pay_btn value="缴费">-->
                <?php endif;?>
            </div>
        </div>
        <!--报名填写信息结束-->
        <!--客服电话开始-->
        <div class="apply_tel">
            <img src="http://static.yhctech.com/frontend/img/active_phone_red.png" alt=""><span>客服电话：</span><span>17792214882</span>
        </div>
        <!--客服电话结束-->
    </div>
    <!--报名页面所有内容块结束-->
</div>
<?php endif;?>
<div class="alert_wrap"></div>
 <div class="next_pic">
     <img src="http://static.yhctech.com/frontend/img/313388644054693208.jpg" alt="">
 </div>
<script type="text/javascript">
    var openid='<?=$openid?>';
    //解决白框问题
    
$('.scroll_container').on('scroll',function(){
		$(this).css('z-index',Math.ceil(Math.random()*10));
	})
	
//    点击宝贝年龄弹框
    $(".apply_age").bind("click",function(){
    	event.stopPropagation();
        $(".apply_age_options").toggle(function () {
                    $(".apply_age_select").children().unbind('click').bind("click",function(){
                    	event.stopPropagation();
                        $(".apply_age").val($(this).text());
                        $(".apply_age_options").hide();
                    })
                });
    })
	$('.scroll_container').bind('click',function(){
		if($(".apply_age_options").css('display')!='none'){
			$(".apply_age_options").css('display','none');
		}
	})
//    验证手机号
    $(".apply_iphone").blur(function(){
        if(!(/^1[34578]\d{9}$/.test($(this).val()))){
            $(".iphone_err").show();
            bul = false;
            return false;
        }else{
            $(".iphone_err").hide();
            bul = true;
        }
    })
    function test_phone_num(){
    	if(!(/^1[34578]\d{9}$/.test($(".apply_iphone").val()))){
            $(".iphone_err").show();
            bul = false;
            return false;
        }else{
            $(".iphone_err").hide();
            bul = true;
         	  return true;
        }
    }
//    省际联动
    _init_area()
    var Gid  = document.getElementById ;
    var showArea = function(){
        Gid('show').innerHTML =  Gid('apply_province').value  +
                Gid('s_city').value
    }
    <?php if(isset($user_info['is_pay'])):?>
    	$('#apply_province>option[value=<?=$user_info['sign_province']?>]').attr('selected','selected').siblings().removeAttr('selected')
    	change(1);
    	$('#apply_city>option[value=<?=$user_info['sign_city']?>]').attr('selected','selected').siblings().removeAttr('selected')
    <?php endif;?>
    //提交按钮函数
    var bul = true;
    $("input[apply_btn]").bind("click",function(){
        $(".apply_wrap>input").each(function(){
            if ($(this).val() == ""){
                bul = false;
                alert("信息填写不完整");
                return false;
            }
          //  bul = true;
        })
        if(!test_phone_num()){
        	 alert("请输入正确的手机号！");
             return false;
        }
        if(($(".apply_province").val().trim()=="")||($(".apply_city").val()=="")){
        	  bul = false;
              alert("请填写您的地址信息");
              return false;
        }
        var name = $(".apply_name").val(),
            tel = $(".apply_iphone").val(),
            age = $(".apply_age").val(),
            province =$(".apply_province").val(),
            city = $(".apply_city").val();
           if(age==''){
           		return false;
           }
        if(bul){
        	var alertdata={
		        imgSrc:"http://static.yhctech.com/frontend/img/active_success_icon.png",
		        cont:"<p class='p_succeed'>恭喜您！保存成功！</p>" +
		        "<p class='p_succeed_en'>Congratulations on your succes.</p>"+
		        "<p class='p_succeed p_succeed_two'>本活动的费用为：<span class='p_succeed_two_num'>198.</span><span class='small'>00（元）</span></p>"+
		        "<p class='p_succeed_en'>The cost of this activity is：198 yuan</p>",
		        close:true,
		        btn:1,
		        btn1:{
		            click:true,
		            name:"付款入群",
		            color:"white",
		            bC:"#edb5b6",
		            clickFn:function (){
		//                此处填写点击付款入群的函数
						sessionStorage.setItem('cost','198');
						sessionStorage.setItem('payint','<?=$lesson_id?>');
						sessionStorage.setItem('type','0');
						sessionStorage.setItem('whichurl',"http://m.yhctech.com/wx_active_test/jump_page?address="+encodeURIComponent('http://m.yhctech.com/wx_active_test/actives/regist?lesson_id=<?=$lesson_id?>&is_pay=t'));
						window.location.href='/api/c/wxpaypage/';
		            }
		        }
		    };
            $.ajax({
                type:"POST",
                url:"/wx_active_port_test/fans_sign_in",
                dataType:"json",
                data:{
                    openid:openid,
                    lesson_id:'<?=$lesson_id?>',
                    name:name,
                    tel:tel,
                    age:age,
                    province:province,
                    city:city,
                    background:(/background/.test(window.location.search))?'true':'false'
                },
                success:function(response){
                    if(response.err_code=='100'){
                    		  close_share_menu();
							  jqAlert(alertdata);
                    }else{
                        alert(response.err_message);
                    }
                }
            })
        }
    })
    $('input[pay_btn]').bind('click',function(){
    	close_share_menu();
    	$('.foot_nav').hide();
    	jqAlert({
		        imgSrc:"http://static.yhctech.com/frontend/img/active_success_icon.png",
		        cont:"<p class='p_succeed'>您已报名，请您付款入群</p>" +
		        "<p class='p_succeed_en'>Please pay for group.</p>"+
		        "<p class='p_succeed p_succeed_two'>本活动的费用为：<span class='p_succeed_two_num'>198.</span><span class='small'>00（元）</span></p>",
		        close:true,
		        btn:1,
		        btn1:{
		            click:true,
		            name:"付款入群",
		            color:"white",
		            bC:"#edb5b6",
		            clickFn:function (){
		            		$('.foot_nav').show();
		            		$.ajax({
					      		type:"post",
					      		url:"/wx_active_port_test/view_page",
					      		data:{
					      			url:'paypage',
					      			company:'pay',
					      			lesson_id:'<?=$lesson_id?>',
					      			openid:"<?=$openid?>"
					      		},
					      	});
		//                此处填写点击付款入群的函数
								sessionStorage.setItem('cost','198');
								sessionStorage.setItem('payint','<?=$lesson_id?>');
								sessionStorage.setItem('type','0');
								sessionStorage.setItem('whichurl','http://m.yhctech.com/wx_active_test/actives/regist?lesson_id=<?=$lesson_id?>&is_pay=t');
								localStorage.setItem('cost','198');
								localStorage.setItem('payint','<?=$lesson_id?>');
								localStorage.setItem('type','0');
								localStorage.setItem('whichurl','http://m.yhctech.com/wx_active_test/actives/regist?lesson_id=<?=$lesson_id?>');
								window.location.href='/api/c/wxpaypage/';
		            }
		        },
		    })
    })
    $('input[next_lesson_btn]').bind('click', function () {
            $('.next_pic').show()
    })
</script>