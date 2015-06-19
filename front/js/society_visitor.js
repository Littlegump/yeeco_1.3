// JavaScript Document
$(document).ready(function(){
	$(".board textarea").focus(function(){
		$(this).css("border","1px solid #fff");
	}) 
    $(".board textarea").blur(function(){
		$(this).css("border","1px solid #fff");
	})
    
	//报名表-取消表单边框的样式
	$(".app_form textarea").focus(function(){
		$(this).css("border","0 solid #fff");
	})
	$(".app_form :text").focus(function(){
		$(this).css("border","0 solid #fff");
	})
	$(".app_form textarea").blur(function(){
		$(this).css("border","0 solid #fff");
	})
	$(".app_form :text").blur(function(){
		$(this).css("border","0 solid #fff");
	})



})
	//切换 关注1/已经关注2
function change_concern(t){	
	if(t==1){
		$(".concern").attr('id','concerned');
		$(".concerned-icon").html("已关注");
		$("#concerned").hover(function(){
			$("#concerned i").css("background-position","-76px 0");
		},function(){
			$("#concerned i").css("background-position","-76px -74px");
		});
	}else if(t==2){
		$(".concern").attr('id','concern');
		$(".concerned-icon").html("关注此社团");
		$("#concern").hover(function(){
			$("#concern i").css("background-position","0 -74px");
		},function(){
			$("#concern i").css("background-position","0 0");
		});
	}
}

//关注或取消关注
function concern(){	
	var type=$(".concern").attr('id');
	if(type == 'concern'){
		//如果未关注，进行关注
		$.ajax({
			type:"GET",
			url:"../background/background_society/isConcern.php?action=concern&sId="+$("#sId").val()+"&uId="+$("#uId").val(),
			success:function(){change_concern(1);},
			error:function(jqXHR){alert("操作失败"+jqXHR.status);}
		})
		
	}else{
		//如果已经关注，取消关注
		var isManage=$("#isManage").val();
		if(isManage==4){
			$.ajax({
				type:"GET",
				url:"../background/background_society/isConcern.php?action=cancelConcern&sId="+$("#sId").val()+"&uId="+$("#uId").val(),
				success:function(){change_concern(2);},
				error:function(){alert("操作失败");}
			})
		}else{
			alert("您是该社团成员，默认为关注，无法取消关注！");	
		}
	}
}
var t=1;
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
//申请加入
function apply_form(){
	var sId = $("#sId").val();
	var uId = $("#uId").val();
	var sName = $("#sName").val();
	var fQue_1 = $("#fQue_1").val();
	var fQue_2 = $("#fQue_2").val();
	var fQue_3 = $("#fQue_3").val();
	$("#form_box").load("res_package/apply_form.php",{"sId":sId,"uId":uId,"sName":sName,"fQue_1":fQue_1,"fQue_2":fQue_2,"fQue_3":fQue_3},function(){
		coverall();
		newbox('form_box');		
		// 提交表单
		$("#apply_table").ajaxForm(function() {  
		   alert("提交成功！"); 
		   return_main();
		   $('.handle_2').text('等待审核').removeAttr('href');
		});
	})
}



//关闭报名表
function return_main(){
	movebox('form_box');
	nocover();
}



