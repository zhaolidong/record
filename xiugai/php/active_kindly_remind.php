<style>
	.friendship_prompt {
		width: 17.5rem;
		margin:0.5rem auto 0.25rem;
		padding-bottom: 0.75rem;
		box-shadow: -0.25rem 0.25rem 0.5rem rgba(193, 203, 254, 0.1), 0.25rem -0.25rem 0.5rem rgba(193, 203, 254, 0.1), -0.25rem -0.25rem 0.5rem rgba(193, 203, 254, 0.1), 0.25rem 0.25rem 0.5rem rgba(193, 203, 254, 0.1);
	}
	
	.friendship_prompt i {
		display: block;
		background: #abbdff;
		height: 0.2rem;
		width: 12.5rem;
		border-radius: 2px 0 0 0;
	}
	
	.color_pink {
		color: #edb5b6;
	}
	
	.friendship_prompt_title {
		text-align: center;
		margin-top: 0.55rem;
		font-size: 0.9rem;
	}
	
	.friendship_prompt_cont {
		position: relative;
		width: 15.25rem;
		box-sizing: border-box;
		color: #7a7a7a;
		font-size: 0.7rem;
		margin: auto;
		margin-top: 0.5rem;
	}
	
	.friendship_prompt_cont p {
		padding-left:0.65rem;
		box-sizing: border-box;
		margin:  0.5rem auto 0rem;
		position: relative;
	}
	
	
	.friendship_prompt .round {
		position: absolute;
		display: inline-block;
		border-radius: 100%;
		height: 0.3rem;
		width: 0.3rem;
		left: -0.125rem;
		top: 0.35rem;
	}
	
	.friendship_prompt .round_one {
		background-color: #abbdff;
	}
	
	.friendship_prompt .round_two {
		background-color: #edb5b6;
	}
	
	.friendship_prompt .round_three {
		background-color: #abbdff;
	}
	
	.friendship_prompt .friendship_prompt_cont_p3 {
		color: #323232;
	}
</style>
<div class="friendship_prompt">
	<i></i>
	<div class="friendship_prompt_title color_pink">温馨提示</div>
	<div class="friendship_prompt_cont">
		<p class="friendship_prompt_cont_p1">
			<span class="round round_one"></span>
			<!--每<span><?=$active_rules['sign_rules']['cont'][0]['times']?></span>天可获得<span><?=$active_rules['sign_rules']['cont'][0]['given']?></span>次抽奖机会。-->
			每<span>5</span>天可获得<span>1</span>次抽奖机会。
		</p>
		<p class="friendship_prompt_cont_p2">
			<span class="round round_two"></span>
			活动结束后，未使用的抽奖机会将不可使用，小伙伴们要看仔细噢！
		</p>
		<p class="friendship_prompt_cont_p3">
			<span class="round round_three"></span>
			活动时间：<span><?=explode(' ',$active_rules['begin_time'])[0]?></span>至<span><?=explode(' ',$active_rules['end_time'])[0]?></span>
		</p>
	</div>
</div>