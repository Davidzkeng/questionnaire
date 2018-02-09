/**
 * Created by Administrator on 2017/12/7.
 */

wx.config({
    appId: '{$signPackage["appId"]}',
    timestamp: '{$signPackage["timestamp"]}',
    nonceStr: '{$signPackage["nonceStr"]}',
    signature: '{$signPackage["signature"]}',
    jsApiList: [
        'onMenuShareAppMessage',
        'onMenuShareTimeline',
        'onMenuShareQQ',
        'onMenuShareQZone'
    ]

});