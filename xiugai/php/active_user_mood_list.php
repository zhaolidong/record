<style>
		.all_moods_wrap{
			margin:0 auto 1rem;
		}
        .all_moods_wrap  .oneswlf_all_moods_warp,.rests_all_moods_warp{
            width: 16.5rem;
            height:100%;
            margin:auto;
            margin-bottom: 1rem;
            padding:1rem 0;
            box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
						 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
        }
       .all_moods_wrap .all_moods_content_warp{
            padding:0rem 0.5rem;
        }
       .all_moods_wrap .all_moods_content_warp .moods_title{
            width: 100%;
            overflow: hidden;
        }
      .all_moods_wrap  .all_moods_content_warp .moods_title .release_time{
            margin:  0.25rem 0 0;
            font-size: 0.7rem;
            color: #edb5b6;
            display: inline-block;
            float: left;
        }
       .all_moods_wrap .all_moods_content_warp .moods_title .remove{
            margin: 0.35rem 0 0;
            float: right;
            font-size: 0.6rem;
            line-height: 0.7rem;
            color: #7a7a7a;
            overflow: hidden;
        }
        .all_moods_wrap .all_moods_content_warp .moods_title .remove>img{
            width: 0.7rem;
            float: left;
            margin-right: 0.25rem;
         }
       .all_moods_wrap .all_moods_content_warp .all_moods_content{
            width: 100%;
            height:100%;
        }
       .all_moods_wrap .all_moods_content_warp .all_moods_content>img{
            width: 100%;
            margin-top:0.5rem;
        }
        .all_moods_wrap .all_moods_content_warp .all_moods_content .all_moods_content_text{
        	padding: 0.5rem 0 1rem;
        	box-sizing: border-box;
        }
       .all_moods_wrap .all_moods_content_warp .all_moods_content .all_moods_content_text p{
            text-indent: 2em;
            margin: 0;
            font-size: 0.7rem;
            line-height: 0.9rem;
        }
       .all_moods_wrap .rests_moods_warp .rests_user_message{
            overflow: hidden;
        }
       .all_moods_wrap .rests_moods_warp .rests_user_message>img{
            float: left;
            width: 1.6rem;
            height:1.6rem;
            box-sizing: border-box;
            border-radius: 100%;
            border:0.1rem solid #abbdff;
            margin-right: 0.5rem;
        }
       .all_moods_wrap .rests_moods_warp .rests_user_message>span{
            color: #323232;
            font-size:0.75rem;
            height:1.6rem;
            width: 6rem;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            display: inline-block;
            line-height: 1.6rem;
        }
        .alert_p_succeed{
            color: white;
            font-size: 0.75rem;
            margin: 0.25rem 0 0;
        }
        .alert_succeed_en{
            font-size: 0.55rem;
            color: #6d82d1;
            font-weight: lighter;
            margin: 0.5rem 0 0;
        }
    </style>
    

<div class="all_moods_wrap">
    <!--自己新的模块开始-->
<?php if(isset($user_list)):?>
    <div class="oneswlf_all_moods_warp">
    <?php foreach($user_list as $item):?>	
        <div class="all_moods_content_warp oneswlf_moods_warp" list_id="<?=$item['id']?>" >
            <div class="moods_title">
                <p class="release_time">
                    发布时间：<span > <?=$item['date']?> </span>
                </p>
            <?php if(isset($from_id)&&(isset($from_id[0]))):?>
            	<?php else:?>    
                <p class="remove"><img src="http://static.yhctech.com/frontend/img/trash_small_gray.png" alt=""><span>删除</span></p>
               <?php endif;?> 
            </div>
     
            <div class="all_moods_content">
     			<?php if(isset($item['pic'])&&isset($item['pic'][0])):?>
                	<img class="all_moods_content_img" src="<?=$item['pic']?>" alt="">
     			<?php endif;?>
                <div class="all_moods_content_text">
                   <?php foreach(json_decode($item['detail']) as $inner_item):?>
                   		<p> <?=$inner_item?> </p>
                   <?php endforeach;?>
                </div>
            </div>
        </div>
	<?php endforeach;?>
		 </div>
<?php endif;?>    
    <!--自己心得模块结束-->
    <!--其他人新的模块开始-->
 <?php if(isset($other_list)&&isset($other_list[0])):?>   
    <div class="rests_all_moods_warp">
    	<?php foreach($other_list as $item):?>
	        <div class="all_moods_content_warp rests_moods_warp" list_id="<?=$item['id']?>" >
	            <div class="moods_title">
	                <div class="rests_user_message">
	                    <img src="<?=$item['user_icon']?>">
	                    <span> <?=$item['user_name']?> </span>
	                </div>
	                <p class="release_time">
	                    发布时间：<span ><?=$item['date']?></span>
	                </p>
	            </div>
	            <div class="all_moods_content">
	               <?php if(isset($item['pic'])&&isset($item['pic'][0])):?>
		                <img class="all_moods_content_img" src="<?=$item['pic']?>" alt="">
					<?php endif;?>
	                <div class="all_moods_content_text">
	                <?php foreach(json_decode($item['detail']) as $inner_item):?>	
	                    <p> <?=$inner_item?> </p>
	                 <?php endforeach;?>   
	                </div>
	            </div>
	        </div>
        <?php endforeach;?>
    </div>
    <?php else:?>
    	<div class="rests_all_moods_warp">
    	</div>
<?php endif;?>  
	
</div>
<div class="alert_wrap"></div>

<script>
		$('.oneswlf_all_moods_warp').children().length==0&&$('.oneswlf_all_moods_warp').hide();
		$('.rests_all_moods_warp').children().length==0&&$('.rests_all_moods_warp').hide();
//    展示心得接口
   
//    请求数据函数
    function refresh(){
        var pWrap = "<div class='all_moods_content_text'>";
        $.each(this.detail,function(){
           	 pWrap+="<p>"+this.toString()+"</p>";
        })
        pWrap+="</div>";
        if (this.self=="t"){
            $(".all_moods_wrap .oneswlf_all_moods_warp").append(
                    "<div class='all_moods_content_warp oneswlf_moods_warp' list_id="+this.id+"> " +
                    "<div class='moods_title'> " +
                    "<p class='release_time'>" +
                    "发布时间：<span >"+this.date+"</span> " +
                    "</p> " +
                    "<p class='remove'><img src='http://static.yhctech.com/frontend/img/trash_small_gray.png'><span>删除</span></p> " +
                    "</div> " +
                    "<div class='all_moods_content'> " +
                    (this.pic.length>0?"<img class='all_moods_content_img' src="+this.pic+"> ":"") +
                    pWrap +
                    "</div> " +
                    "</div>"
            )
            $('.oneswlf_all_moods_warp').show();
        }else{
            $(".all_moods_wrap .rests_all_moods_warp").append(
                    "<div class='all_moods_content_warp rests_moods_warp' list_id="+this.id+">" +
                    " <div class='moods_title'> " +
                    "<div class='rests_user_message'> " +
                    "<img src='"+this.user_icon+"'> " +
                    "<span>"+this.user_name+"</span> " +
                    "</div> " +
                    "<p class='release_time'>" +
                    "发布时间：<span >"+this.date+"</span> " +
                    "</p> " +
                    "</div> " +
                    "<div class='all_moods_content'> " +
                    (this.pic.length>0?"<img class='all_moods_content_img' src="+this.pic+"> ":"") +
                    pWrap+
                    "</div> " +
                    "</div>"
            )
			$('.rests_all_moods_warp').show();            
        }
    }
    var flashing=false;
//    滑动触发请求事件
    touch.on($('.scroll_container'),"swipe",function() {
    	 var list_id = $(".all_moods_content_warp:last").attr("list_id");
//      if ($('.scroll_container').scrollTop() <= 0) {
//          $.ajax({
//              type: "POST",
//              url: "/wx_active_port_test/user_mood_list",
//              async:false,
//              data: {
//                  openid: "<?=$openid?>",
//                  lesson_id: "<?=$lesson_id?>",
//                  page: "0",
//                  list_id: list_id
//              },
//              success: function (response) {
//                  if (response.err_code == 100) {
//                      $.each(response.data,refresh);
//                      
//                  } else if (response.err_code == 300) {
//                      alert("没有更多数据");
//                  } else {
//                      alert(response.err_message);
//                  }
//              },
//              dataType: "json"
//          })
//      }
        if ($('.scroll_container').scrollTop() >= $('.scroll_container')[0].scrollHeight - $(window).height()*1.8) {
        	 var list_id = $(".all_moods_content_warp:last").attr("list_id");
        	 if(!flashing){
        	 	flashing=true;
	        	 $.ajax({
	                type: "POST",
	                url: "/wx_active_port_test/user_mood_list",
	                data: {
	                    openid: "<?=$openid?>",
	                    lesson_id: "<?=$lesson_id?>",
	                    list_id: list_id
	                },
	                async:false,
	                success: function (data) {
	                    if (data.err_code == 100) {
	                    	flashing=false;
	                        $.each(data.data,refresh);
	                    } else if (data.err_code == 300) {
	                        alert("没有更多数据");
	                    } else {
	                        alert(data.err_message);
	                    }
	                },
	                dataType:"json"
	            });
        	 }
        }
    })
//    删除心得接口
    $(".oneswlf_moods_warp .remove").bind("click",function(){
    	var that=$(this).parent().parent();	
    	jqAlert({
        imgSrc:"http://static.yhctech.com/frontend/img/active_fail_icon.png",
        cont:"<p class='alert_p_succeed'>您确定要删除么！</p>" +
        "<p class='alert_succeed_en'>Are you sure you want to delete it?</p>",
        close:false,
        btn:2,
        btn1:{
            name:"删除",
            click:true,
            color:"#323232",
            bC:"white",
            clickFn:function (){
                //删除心得动作
                //        需要弹出弹框   然后在弹框的删除里边调用删除接口
//        以下是删除请求   需要写在弹窗的函数内
        $.ajax({
              type:"POST",
              url:"/wx_active_port_test/user_mood_del",
              data:{
                  openid: "<?=$openid?>",
                  lesson_id: "<?=$lesson_id?>",
				  list_id:that.attr("list_id")
            	  },
            	  dataType:'json',
              success:function(response) {
                  if (response.err_code == 100) {
                    window.location.href=window.location.href;
                    //  $.each(response.data,refresh);
                  } else if (response.err_code == 300) {
                      alert("没有更多数据");
                  } else {
                      alert(response.err_message);
                  }
              }
          })
//        删除请求结束
            }
        },
        btn2:{
            name:"取消",
            click:true,
            color:"#323232",
            bC:"white",
            clickFn:function(){
			//取消删除心得动作
				$('.alert_wrap').hide().html("");
            }
        }
    })
    	
    	

    })
</script>