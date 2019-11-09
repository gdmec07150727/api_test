const app = getApp()

Page({
  data: {
    
  },
  onLoad: function () {
    var that = this;
    wx.request({
      url: 'http://hungking.com/links',
      method:'GET',
      success:function(res){
        console.log(res)
        that.setData({
          shu:res.data
        })
      },
      fail:function(){

      },
      complete:function(){

      }

    })
  },
  tiao:function(event){
    var cate_id = event.currentTarget.dataset.cateId;
    wx.navigateTo({
      url: '/cate/cate?id='+cate_id,
    })
  }

})
