<?php if(isset($img_link)):?>
<style>
.sign_up{
				width:2.75rem;height: 2.75rem;
				border-radius: 50%;
				position: absolute;
				top:9.5rem;right:0.25rem;
				box-shadow:-0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1),
						 0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						 -0.25rem -0.25rem 0.5rem rgba(193,203,254, 0.1),
						0.25rem 0.25rem 0.5rem rgba(193,203,254, 0.1);
				z-index: 10;
			}
</style>
<img class="sign_up" src="<?=$img_link?>" alt="">
<script> 	
	$('.sign_up').bind('click',function(){
		window.location.href='<?=$link?>';
	})
</script>
<?php endif;?>