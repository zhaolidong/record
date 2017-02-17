<script type="text/javascript">
	var stay_time=5;
	if(typeof(companys)!='undefined'){
		var company_text='';
		function submit_stay_time_t(){
			if((stay_time/5-1)<companys.length){
				company_text+=','+companys[(stay_time/5-1)];
			}
			var t=setTimeout("submit_stay_time_t()",5000);
			$.ajax({
				url:'/wx_active_port_test/submit_stay_time',
				data:{'page_id':'<?=$page_id?>','stay_time':stay_time,'company':company_text},
				type:'post'
			});
			stay_time+=5;
		}
		setTimeout(function(){
			submit_stay_time_t();		
		},5000);
	}else{
		function submit_stay_time(){
			var t=setTimeout("submit_stay_time()",5000);
			$.ajax({
				url:'/wx_active_port_test/submit_stay_time',
				data:{'page_id':'<?=$page_id?>','stay_time':stay_time},
				type:'post'
			});
			stay_time+=5;
		}
		setTimeout(function(){
			submit_stay_time();		
		},5000);
	}
</script>