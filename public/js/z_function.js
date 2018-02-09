/*
	参数解释：
	title	标题
	url		请求的url
*/
function layer_show(title,url,parent){
    if(parent){
        parent.layer.open({
            type: 2,
            area: ['100%','100%'],
            maxmin: false,
            shade:true,
            shade:0.4,
            title: title,
            content: url
        });
    }else{
        layer.open({
            type: 2,
            area: ['100%','100%'],
            maxmin: false,
            shade:true,
            shade:0.4,
            title: title,
            content: url
        });
    }


}

function layer_del(title,url){
    title = title+'<br>删除后数据不可恢复！';
    layer.confirm(title,{title:'温馨提示','shade':false},function(){
        $.ajax({
            url: url,
            dataType: 'json',
            success: function (res) {
                if(res.err<=0){
                    layer.msg(res.msg,{'icon':1,'time':1000},function () {
                        location.reload();
                    });
                }else{
                    layer.msg(res.msg,{'icon':2});
                }
            },
            error: function(res){
                console.log(res.responseText);
            }
        });
    },function(){
        layer.msg('取消删除',{icon:2});
    });
}