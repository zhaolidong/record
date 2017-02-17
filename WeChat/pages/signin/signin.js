var app = getApp();
Page({
  data:{
    userInfo: {},
    navOption: [
			// { nav: '活动详情', url: '../index/index' },
			// { nav: '活动签到', url: '../signin/signin' },
			// { nav: '活动抽奖', url: '' },
			// { nav: '活动心得', url: '' }
			// { id: 5, nav: 'ha', url: '' }
		],
    userMessage: {
      nickName:"",
      arrtext:[
        {
          text:"参加本期活动的有爱家长已有",
          color:""
        },
        {
          text:2000,
          color:"red"
        },
        {
          text:"位",
          color:""
        }
      ]
    }
		// imgUrls: [
		// 	'http://yhc-oss-hb2-001.oss-cn-beijing.aliyuncs.com/activity/df8f4f87d4a9ded000e3dc72cfab1b89.jpg',
		// 	'http://yhc-oss-hb2-001.oss-cn-beijing.aliyuncs.com/activity/44f81569fe0e66aa43b3cab362d5b510.jpg'
		// ],
		// indicatorDots: true,
		// autoplay: true,
		// interval: 5000,
		// duration: 1000
  },
  onLoad: function () {
		var that = this
		//调用应用实例的方法获取全局数据
		app.getUserInfo(function (userInfo) {
			//更新数据
			that.setData({
				userInfo: userInfo
			})
		})
	}
  // onReady:function(){
  //   // 页面渲染完成
  // },
  // onShow:function(){
  //   // 页面显示
  // },
  // onHide:function(){
  //   // 页面隐藏
  // },
  // onUnload:function(){
  //   // 页面关闭
  // }
})