<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="refresh" content="0;
	<?php if(isset($codepage)):?>
		<?=$address?>
	<?php else:?>
		<?='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$appid.'&redirect_uri='.urlencode($address).'&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect'?>
	<?php endif;?>
		"/>
</head>
</html>