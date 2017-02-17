App({
  onLaunch: function () {
    //调用API从本地缓存中获取数据
    var logs = wx.getStorageSync('logs') || [];
    // var 
    logs.unshift(Date.now())
     console.log(Date.now());
    wx.setStorageSync('logs', logs);
  },
  getUserInfo:function(cb){
   
    var that = this;
    console.log(this.globalData)
    if(this.globalData.userInfo){
      typeof cb == "function" && cb(this.globalData.userInfo)
    }else{
      //调用登录接口
      wx.login({
        success: function (res) {
          wx.getUserInfo({
            success: function (res) {
              that.globalData.userInfo = res.userInfo;
              typeof cb == "function" && cb(that.globalData.userInfo)
            }
          });
		  //用户openID
		//   wx.request({
		// 	  url:"https://wxapp.yhctech.cn/get_user_info",
		// 	  data:{
		// 		  code:res.code
		// 	  },
		// 	  success:function(data){
		// 		  console.log(data);
		// 		  that.globalData.session_key = data.session_key;
		// 		  that.globalData.expires_in = data.expires_in;
		// 		  that.globalData.openid = data.openid;

		// 	  }
		//   });
		//   获取导航栏
		  
        }
      });
    }
  },
  globalData:{
    userInfo:function(){
     
    }
  },
  getnavOption:function(){
	  var that = this;
	 wx.request({
					//必须是https服务   妈的智障
					url: "https://wxapp.yhctech.cn/post",
					method: "post",
					//   data:{
					data: [
						{ nav: '活动详情', url: '../index/index' },
						{ nav: '活动签到', url: '../signin/signin' },
						{ nav: '活动抽奖', url: '' },
						{ nav: '活动心得', url: '' }
					],
					success: function (res) {
						// if(res.err_code==100){
						console.log(res.data)
						that.globalData.navOption=res.data
						// }
					}
				})
  },
  data:function(a){
    wx.request({
    	//必须是https服务   妈的智障
      url:"https://wxapp.yhctech.cn/post",
	  method:"post",
      data:{
       navOption:[
			{ nav: '活动详情', url: '../index/index' },
			{ nav: '活动签到', url: '../signin/signin' },
			{ nav: '活动抽奖', url: '' },
			{ nav: '活动心得', url: '' }
		],
		imgUrls: [
			'http://yhc-oss-hb2-001.oss-cn-beijing.aliyuncs.com/activity/df8f4f87d4a9ded000e3dc72cfab1b89.jpg',
			'http://yhc-oss-hb2-001.oss-cn-beijing.aliyuncs.com/activity/44f81569fe0e66aa43b3cab362d5b510.jpg'
		],
		indicatorDots: true,
		autoplay: true,
		vertical:false,
		interval: 5000,
		duration: 1000,
		loadingHidden:false,
		active:{
			imgUrls:"http://static.yhctech.com/frontend/img/active_theme.png",
			title:'活动主题',
			activeText:'28天为爱有声阅读',
			activeTextEnglish:'Reading with love for 28 days'
		},
		activeDetails:[
			{	
				title:"活动时间",
				bc:"#abbdff",
				content:[
					"2017年01月18日至2017年02月24日（01月24日~02月02日春节休息十天，可自愿签到）"
					]
			},
			{	
				title:"活动参与对象",
				bc:"#edb5b6",
				content:[
					"0-12岁孩子家长"
					]
			},
			{	
				title:"活动报名费",
				bc:"#abbdff",
				content:[
					"198元/人",
					"1、连续28天完成阅读并进行签到，将获得198元现金奖励和100元宝宝市集购物券（10张10元劵，有效期一年）。",
					"2、如果有中断签到的，发放200元尹建莉工作室的宝宝集市优惠劵（20张10元劵，有效期一年）。"
				]
			},
			{	
				title:"活动目标",
				bc:"#edb5b6",
				content:[
					"培养一个喜爱阅读的孩子是本次活动的目标，只要家长按照活动要求完成阅读任务，孩子将不同程度喜欢上阅读，前三期活动已证明效果达到90%以上。"
					]
			},
			{	
				title:"活动要求",
				bc:"#abbdff",
				content:[
					"家长连续28天，每天阅读30分钟"
					]
			},
			{	
				title:"活动支持",
				bc:"#edb5b6",
				content:[
					"每个阅读活动群配备由尹建莉老师亲自遴选、培养出来的2位辅导员，为家长提供贴身服务与指导。"
					]
			},
			{	
				title:"阅读要求",
				bc:"#abbdff",
				content:[
					"1、家长：本活动的家长指的是家庭中的成年人，包括但不限于爸爸、妈妈、爷爷、奶奶、姥爷、姥姥……活动过程可不同家长替代进行。",
					"2、阅读图书品种：不限制阅读图书种类，任何图书均可；家长自己阅读的时候读自己喜欢的书，孩子被吸引过来的时候建议读孩子感兴趣的书。",
					"3、孩子在场：在孩子在场的时候阅读。",
					"4、声量：阅读要发出声音读出来，声音以孩子能听到的声量即可，注意是“听到”不是“听清”，不要打扰孩子。",
					"5、对孩子要求：不要求孩子跟家长一起读、不要求孩子看书、不要求孩子仔细听、不要求孩子做任何事情，也就是说，让孩子在一个自然宽松的环境中感受阅读的乐趣，以激发孩子阅读兴趣为主要目标。",
					"7、目标：亲子共同阅读是本次活动希望能达到的效果，孩子能够进行自我阅读是本次活动的终极目标。",
					]
			},
			{	
				title:"活动奖励",
				bc:"#edb5b6",
				content:[
					"1、连续28天完成阅读并进行签到，发放198元现金奖金以及100元尹建莉工作室的宝宝集市优惠券（10张10元，有效期一年）；",
					"2、如果有中断签到的，发放200元（20张10元，有效期一年）尹建莉工作室的宝宝集市优惠券；",
					"3、参加阅读活动的家长，将可获得有爱家长奖状。",
					]
			},
			{	
				title:"客服支持",
				bc:"#abbdff",
				content:[
					"如您在报名和使用过程中遇到问题，请手动添加管理员微信号：YG13316995897进行咨询或拨打18931181019与客户服务部门联系。"
					]
			}			
		]
			
      },
      success:function(res){
        // if(res.err_code==100){
          return res.data;
        // }
      }
    })
  }
})