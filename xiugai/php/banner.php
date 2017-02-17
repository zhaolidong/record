<div class="scroll_container">
<style>
			#photo {
			    width:17.75rem;
			    height: 7.5rem;
			    overflow: hidden;
			    margin:0.5rem auto 0;
			    background-color: #111;
			    position: relative;
			    border-radius: 4px;
				box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
						 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
			}
			.pagination span {
			    width: 5px;
			    height: 5px;
			    display: inline-block;
			    border-radius: 100%;
			    background: #abbdff;
			    opacity: .5;
			    margin:0 5px;
			}
			.pagination{
				bottom: 0;
			}
			.pagination span.active {
			    opacity: 1;
			    background: #edb5b6;
			}
			.banner_bottom{
				width:17.5rem;height:0.5rem;
				background:rgba(193,203,254, 0.25);
				margin:0 auto;
				border-radius: 0 0 2px 2px;
			}
</style>
<div id="photo">
			<div id="loading" class="spinner">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
			<ul id="pic-view" class="pic-view">
				<?php foreach($banner_pages as $item):?>
					<li>
						<a href="javascript:void(0);" <?php if(isset($item['banner_link'])):?>out_link="<?=$item['banner_link']?>"<?php endif;?> company="<?=$item['banner_company']?>" type="banner_link" >
							<img src="<?=$item['banner_pic']?>" />
						</a>
					</li>
				<?php endforeach;?>
			</ul>
</div>
<script type="text/javascript">
	var companys=[];
	$('a[company]').each(function(){
			companys[companys.length]=$(this).attr('company');		
	});
	document.onreadystatechange = subSomething;
	function subSomething() {
		if (document.readyState == 'complete') {
			setTimeout(function(){
				var load=document.getElementById('loading');
				load.style.opacity=0;
				document.getElementById('pic-view').setAttribute('class','pic-view show');
				load.remove();
			},500);
		}
	}
		window.onload=function(){
		photoSlide({
		wrap: document.getElementById('photo'),
		loop: true,
		autoPlay:true,
		autoTime:4000,
		pagination:true
	});
	}
</script>