// JavaScript Document

$(document).ready(function(){
	
	//报名表下，表达那样式不可用
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
	
	$(".top_back").hover(function(){
				$(".top_back").removeClass("transparency");
			},function(){
				$(".top_back").addClass("transparency");
		});
	$(".top").hover(function(){
				$(".top_back").removeClass("transparency");
			},function(){
				$(".top_back").addClass("transparency");
		});
	
	var jWindow = $(window);
	jWindow.scroll(function(){
		var scrollHeight =jWindow.scrollTop();
		if(scrollHeight>310){
		    $('#fixedSide').addClass("scroll");
		}else{
			$('#fixedSide').removeClass("scroll");
		}
	})	
	//单选与全选
	$(":checkbox").click(function(){
		var dId = $(this).attr("value");
		if($(this).attr("id")== "all_"+dId){
			//获取所要全选的部门的dId，该ID存储在全选按钮的value值当中	
			if(this.checked){
				$(":checkbox[name='member_"+dId+"[]']").prop('checked',true)
				$(":checkbox[name='member_"+dId+"[]']").parent().parent().css("background","#ffffd7");
			}else{
				$(":checkbox[name='member_"+dId+"[]']").prop('checked',false)
				$(":checkbox[name='member_"+dId+"[]']").parent().parent().css("background","#fff");
			}
		}else{
			if(this.checked){
				$(this).parent().parent().css("background","#ffffd7");
			}else{
				$(this).parent().parent().css("background","#fff");
			}
		}	
	})
	
	//查看报名表 table_a
	$("#table_a").click(function(){
		var x = $(this).parent().parent().find(":checkbox").attr("value");
		$("#form_box").load("res_package/member_appForm.php",{"userId":x},function(){
			coverall();
			$("#form_box").show();
		});
	})
	//删除 table_b
	$("#table_b").click(function(){
		var x = $(this).parent().parent().find(":checkbox").attr("value");
		alert(x)
	})
	//条换部门 table_c
	$("#table_c").click(function(){
		var x = $(this).parent().parent().find(":checkbox").attr("value");
		alert(x)
	})
	//发送通知 table_d
	$("#table_d").click(function(){
		var x = $(this).parent().parent().find(":checkbox").attr("value");
		alert(x)
	})
})


//关闭报名表
function return_main(){
	movebox('form_box');
	nocover();
}