//index.js
//获取应用实例
var req = require('../../utils/utils.js')
var app = getApp()
Page({
	data: {
		navOption:[],
		userInfo: {}
	},
	//事件处理函数

	onLoad: function () {
	// var a = wx.request({
	// 				//必须是https服务   妈的智障
	// 				url: "https://wxapp.yhctech.cn/post",
	// 				method: "post",
	// 				//   data:{
	// 				data: [
	// 					{ nav: '活动详情', url: '../index/index' },
	// 					{ nav: '活动签到', url: '../signin/signin' },
	// 					{ nav: '活动抽奖', url: '' },
	// 					{ nav: '活动心得', url: '' }
	// 				],
	// 				success: function (res) {
	// 					// if(res.err_code==100){
	// 					console.log(res.data)
	// 					that.setData({navOption:res.data}) 
	// 					// }
	// 				}
	// 			})
		var that = this;
		console.log(req.data())
		// this.setData({navOption:req.data()})
		// this.setData(
		// 	{
		// 		navOption: a
		// 	}
		// )
		app.getnavOption(function(){
			that.setData({
				navOption:navOption
			})
		})
		//调用应用实例的方法获取全局数据
		app.getUserInfo(function (userInfo) {
			//更新数据
			that.setData({
				userInfo: userInfo
			})
		})

	}
})