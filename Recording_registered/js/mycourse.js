jQuery(function($) {
//	获取所有课程
	$.ajax({
		type:"post",
		url:"",
		async:true,
		data:{},
		success:function(res){
			
		}
	});
	//	tab切换begin
	$('.tabnav').on('click', function() {
			$('.tabnav').removeClass('border_color_blue');
			$('.tabnav strong').removeClass('bc_blue');
			$(this).addClass('border_color_blue');
			$(this).find('strong').addClass('bc_blue')
			$('.list').hide();
			$('.list').eq($(this).index()).show();
			$.ajax({
				type: "post",
				url: "",
				async: true,
				data: data,
				success: function(res) {
					if(res) {

					} else {

					}
				}
			})
		})
		//	tab切换end
		//		删除课程--begin
	$('.list').delegate('.delete', 'click', function() {
			var that = $(this);
			$('.alert_wrap').show();
			$('.delete_alert').show();
			$('.return').on('click', function() {
				$('.alert_wrap').hide();
			})
//			$('.alert_wrap .confirm').on('click', function() {
//				$.ajax({
//					type: "post",
//					url: "",
//					async: true,
//					data: data,
//					success: function(res) {
//						if(res) {
//							that.parents('li').remove();
//						} else {
//							alert('刪除失败，请稍后再试！')
//						}
//					}
//				})
//				console.log(that)
//
//			})

		})
		//		删除课程--end
//		开启授权码--begin
	$('.list').delegate('.switch_code', 'click', function() {
			var that = $(this);
			$('.alert_wrap').show();
			$('.switch_code').show();
			$('.return').on('click', function() {
				$('.alert_wrap').hide();
			})
		})
//	开启授权码--end
		//		查看授权码--begin
	$('.list').delegate('.viewcode', 'click', function() {
		var that = $(this);
			$('.alert_wrap').show();
			$('.code_preview_alert').show();
			$('.return').on('click', function() {
				$('.code_preview_alert').hide();
			})
//			alert('查看授权码')
		})
		//		查看授权码--end
		//		预览课程--begin
	$('.list').delegate('.preview_course', 'click', function() {
			alert('预览课程')
		})
		//		预览课程--end
})
//		发布课程--begin
	$('.list').delegate('.release', 'click', function() {
			alert('发布课程')
		})
//		发布课程--end
//		保存预览录课--begin
	$('.list').delegate('.preview', 'click', function() {
			alert('预览课程')
		})
//		保存预览录课--end
//		等待录课 --录制--begin
	$('.list').delegate('.recording', 'click', function() {
			alert('录课')
		})
//	等待录课 --录制--end
