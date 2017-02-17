<div class="scroll_container">
<style>
	.moods_compile {
		width: 17.5rem;
		min-height: 22.75rem;
		margin: auto;
		margin-top: 0.5rem;
		padding: 0.5rem 0.75rem 1.5rem;
		box-sizing: border-box;
		box-shadow: -0.25rem 0.25rem 0.5rem rgba(193, 203, 254, 0.1), 0.25rem -0.25rem 0.5rem rgba(193, 203, 254, 0.1), -0.25rem -0.25rem 0.5rem rgba(193, 203, 254, 0.1), 0.25rem 0.25rem 0.5rem rgba(193, 203, 254, 0.1);
		position: relative;
		overflow: hidden;
	}
	
	.moods_compile .moods_compile_img {
		width: 15rem;
		background-color: #f7f7f7;
		border: none;
		border-radius: 0.1rem;
		min-height: 6.25rem;
		line-height: 6.25rem;
		font-size: 0.6rem;
		color: #323232;
		text-align: center;
		margin: auto;
		position: relative;
	}
	
	.moods_compile .moods_compile_img>img {
		display: none;
		width: 100%;
		border-radius: 0.1rem;
		display: none;
	}
	
	.moods_compile .moods_compile_img>input {
		position: absolute;
		opacity: 0;
		width: 100%;
		height: 100%;
		left: 0;
		top: 0;
	}
	
	.moods_compile .moods_compile_file_text {
		width: 100%;
		margin: 0.5rem auto;
		background-color: #f7f7f7;
		box-sizing: border-box;
		padding: 0.4rem 1rem;
		font-size: 0.7rem;
		border: none;
		border-radius: 0.1rem;
		height: 8.75rem;
		resize: none;
	}
	
	.moods_compile .moods_compile_btn {
		display: block;
		height: 1.45rem;
		color: #ffffff;
		font-size: 0.75rem;
		line-height: 1.45rem;
		border-radius: 0.75rem;
		margin: 1.75rem auto 0;
		width: 3rem;
		border: none;
		outline: none;
		background-color: #abbdff;
		box-shadow: -0.25rem 0.25rem 0.5rem rgba(193, 203, 254, 0.1), 0.25rem -0.25rem 0.5rem rgba(193, 203, 254, 0.1), -0.25rem -0.25rem 0.5rem rgba(193, 203, 254, 0.1), 0.25rem 0.25rem 0.5rem rgba(193, 203, 254, 0.1);
	}
	
	.clipArea_warp {
		height: 100%;
		width: 100%;
		background: rgba(0, 0, 0, 0.5);
		position: fixed;
		z-index: 99;
		left: 0;
		top: 0;
		display: none;
	}
	
	.clipArea_warp #clipBtn {
		display: block;
		margin: auto;
		width: 2.5rem;
		height: 1.45rem;
		margin-top: 1rem;
		border-radius: 0.75rem;
		border: none;
		outline: none;
		color: #fff;
		font-size: 0.75rem;
		line-height: 1.45rem;
		background-color: #abbdff;
	}
	
	.clipArea_warp #clipArea {
		margin: auto;
		margin-top: 1rem;
		width: 100%;
		height: 6.25rem;
	}
	
	.moods_compile .text_number {
		font-size: 0.6rem;
		color: #edb5b6;
		margin: auto;
		text-align: right;
	}
	
	.alert_p_succeed {
		color: white;
		font-size: 0.9rem;
		margin: 0.25rem 0;
		font-weight: bolder;
	}
	
	.alert_succeed_en {
		font-size: 0.55rem;
		color: #6d82d1;
		font-weight: lighter;
		margin: 0.25rem 0;
	}
	
	.alert_btn {
		padding: 0 0.8rem;
	}
</style>

<!--<div class="clipArea_warp">
    <div id="clipArea"></div>
    <button id="clipBtn">截取</button>
</div>-->
<div class="moods_compile">
	<div class="moods_compile_img">
		<img src=""/>
		<span class="moods_compile_img_text">
        	点击添加图片：最多只能添加一张哦！
        </span>
		<input id="moods_compile_file_img" type="file" accept="image/*" />
	</div>
	<textarea warp="hard" cols="10" class="moods_compile_file_text" placeholder="编辑内容：最多可输入220个字符。" required="required"></textarea>
	<p class="text_number">
		<span>0</span>/220
	</p>
	<input class="moods_compile_btn" type="button" value="发布">
</div>
<div class="alert_wrap"></div>
	<script>
		var openid= "<?=$openid?>";
		var lesson_id= "<?=$lesson_id?>";
		var user_name='<?=$user_name?>';
		var user_icon= '<?=$user_icon?>';
	</script>
	<script src="http://static.yhctech.com/frontend/js/user_mood_upload.js"></script>
