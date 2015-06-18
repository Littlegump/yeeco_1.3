// JavaScript Document
$(document).ready(function(){
	$(".board textarea").focus(function(){
		var isEdit = $("#a2").attr("style").indexOf("display"); 
		if(isEdit==0){
			$(this).css("border","1px solid #fff");
		}
	}) 
    $(".board textarea").blur(function(){
		var isSaved = $("#a2").attr("style").indexOf("display"); 
		if(isSaved==0){
			$(this).css("border","1px solid #fff");
		}
	})

	$("#read_form").hover(function(){
		$("#read_form i").css("background-position","0 -75px");
	},function(){
		$("#read_form i").css("background-position","0 0");
	});
})
//查看打印报名表
function read_form(){
	coverall();
	newbox('form_box');
}
//关闭报名表
function return_main(){
	movebox('form_box');
	nocover();
}
	
var t=0;
//纳新详情
function detail(){
	if(t==0){
		$("#detail").slideDown("fast");
		$(".more").css("background-position","0 0");
		t=1;
	}else{
		$("#detail").slideUp("fast");
		$(".more").css("background-position","0 -25px");
		t=0;
	}
}
//编辑公告
function edit(){
	$("#board_text").removeAttr("readonly");
	$("#board_text").focus();
	$("#a1").hide();
	$("#a2").show();	
    $(".board textarea").css("border","1px solid #00acff");
}
//保存公告
function save(){
	$("#board_text").attr("readonly","readonly");
	$("#a1").show();
	$("#a2").hide();
	$(".board textarea").css("border","1px solid #fff");
	////**************************************在这里执行异步提交以后的内容
	$.ajax({
			type:"POST",
			url:"../background/background_society/saveBoard.php",
			data:{
				board:$("#board_text").val(),
				sId:$("#sId").val(),
				
			},
			//dataType:,
			success:function(data){
			},
			error:function(jqXHR){alert("操作失败"+jqXHR.status);}
	})
}
//停止纳新
function stopFresh(){
	
	
}


