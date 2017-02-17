<?php
/*
 $user_info->用户信息
 */
?>	
<!DOCTYPE html>
<html style="font-size:20px;">
<head>
  <meta charset="utf-8">
	<meta name="referrer" content="never">
		<link rel="stylesheet" href="http://static.yhctech.com/frontend/css/yjl_qdSign.css" />
  <!--<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">-->    
  <title>补签页面</title>
  
  </head>
  <body>
  	
  
	<div class="signWrap">
    <div class="search">
        <input type="text" placeholder="请输入关键字" class="searchText"><button class="searchBtn">搜索</button>
    </div>
    <table class="tableWrap">
        <thead>
            <tr>
                <th>用户头像</th>
                <th>微信昵称</th>
                <th>报名名称</th>
                <th>报名电话</th>
                <th>抽奖记录</th>
                <th>访问记录</th>   <!--ajax需要 访问记录是一个日期里列表 但是点击列表可以查看用户当天详细访问记录 有访问页面名 时间 在页面上的停留时间 是否是别人分享的页面-->
                <th>签到记录</th>
                <th>补签 (请输入补签日期)</th>
            </tr>
        </thead>
        <tbody>
    	 	<?php foreach($user_info as $item):?>
            <tr openid="<?=$item['wx_id']?>">
                <td class="headImg">
                    <div class="imgWrap">
                        <img src="<?= $item['wx_icon'] ?>">
                    </div>
                </td>
            	<td><?= $item['wx_name'] ?></td>
                <td><?= $item['sign_name'] ?></td>
                <td><?= $item['sign_tel'] ?></td>
                <td>
                	<?php foreach($item['user_orders'] as $inner_item):?>
                		<?= $inner_item?></br>
                	<?php endforeach;?>
                	</td>
                <td>
                    <select class="visitRecord">
                    	<?php foreach($item['view_dates'] as $inner_item):?>
                        	<option value="<?= $inner_item?>"> 
                        		<?= $inner_item?>
                        	</option>
                        <?php endforeach;?>
                    </select>
                </td>
                <td>
                    <select class="signRecord">
                    	<?php foreach($item['sign_dates'] as $inne_signs):?>
                            <option value="<?=$inne_signs?>">
                     		   	<?=$inne_signs?>
                        	</option>
                        <?php endforeach;?>
                    </select>
                </td>
                <td class="lastTd">
                    <input type="text" placeholder="格式2016-12-01" class="repairInput">
                    <button class="repairBtn">补签</button>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<!--弹窗-->
<div class="popup">
    <table class="twoTable">
        <thead>
        <tr>
            <th>页面名称</th>
            <th>访问时间</th>
            <th>停留时间</th>
            <th>是否为分享页面</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="page_name"></td>
            <td class="visit_time"></td>
            <td class="stop_time"></td>
            <td class="is_share"></td>
        </tr>
        </tbody>
    </table>
</div>
    <script>
        var lesson_id="<?=$lesson_id?>"
    </script>
<script type="text/javascript" src="http://static.yhctech.com/frontend/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="http://static.yhctech.com/frontend/js/yjl_qdSign.js"></script>
    
</body>
</html>