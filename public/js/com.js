function checklogin(token){
	/*$.post('',{'token':token},function(data){
		 if(data.userId>0){
			return true;
		}else{
			return false;
		} 
		
	},'json');*/
	if(token>0){
		return true;
	}else{
		return false;
	} 
}

function getCookie(name)
{
var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
if(arr=document.cookie.match(reg))
return unescape(arr[2]);
else
return null;
}

function page(page,url){
$.get(url,function(data){
	
	var html='';
	if(page<=1){
		html+='<li class="paginate_button previous disabled"><a href="javascript:void(0)">上一页</a></li>';
	}else{
		html+='<li class="paginate_button previous"><a href="javascript:clicklist('+(page-1)+')">上一页</a></li>';
	}
	
	if(page==Number(data)){
		var i=Number(data)-2 ? Number(data)-2:1;
		
		for(i;i<Number(data);i++){
			html+='<li class="paginate_button"><a href="javascript:clicklist('+i+')">'+i+'</a></li>';
		}
	}else if(page>1 && page<Number(data)){
		html+='<li class="paginate_button"><a href="javascript:clicklist('+(page-1)+')">'+(page-1)+'</a></li>';
	}
	html+='<li class="paginate_button active"><a href="javascript:clicklist('+page+')">'+page+'</a></li>';
	if(page<=Number(data)){
		for(var i=page+1;i<=3 && i<=Number(data);i++){
			html+='<li class="paginate_button"><a href="javascript:clicklist('+i+')">'+i+'</a></li>';
		}
	}
		
	
	
	if(page>=Number(data)){
		html+='<li class="paginate_button next disabled"><a href="javascript:void(0)">下一页</a></li>';
	}else{
		html+='<li class="paginate_button next"><a href="javascript:clicklist('+(page+1)+')">下一页</a></li>';
	}
	$('.pagination').html(html);
});
}

function formatDateTime(inputTime) {    
	var date = new Date(inputTime);  
	var y = date.getFullYear();    
	var m = date.getMonth() + 1;    
	m = m < 10 ? ('0' + m) : m;    
	var d = date.getDate();    
	d = d < 10 ? ('0' + d) : d;    
	var h = date.getHours();  
	h = h < 10 ? ('0' + h) : h;  
	var minute = date.getMinutes();  
	var second = date.getSeconds();  
	minute = minute < 10 ? ('0' + minute) : minute;    
	second = second < 10 ? ('0' + second) : second;   
	return y + '-' + m + '-' + d+' '+h+':'+minute+':'+second;    
};

function getQueryString(name) { 
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i"); 
	var r = window.location.search.substr(1).match(reg); 
	if (r != null) return unescape(r[2]); return null; 
}