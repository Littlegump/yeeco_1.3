// JavaScript Document

//点击触发表单验证并实现页面跳转
function page_to(page_a,page_b){
	document.getElementById(page_a).style.display="";
	document.getElementById(page_b).style.display="none"; 
	document.getElementById("contact_title").getElementsByTagName("li").item(page_a).className = 'on';
	document.getElementById("contact_title").getElementsByTagName("li").item(page_b).className = ''; 
}


//异步提交表单功能
$(document).ready(function () {
    // 提交表单form_1（组织架构）
    $("#fresh_form").ajaxForm(function(){  
    	page_to('3','2');
    });
});
//检查第二页的表单是否填写完整
function check_page(){
	var temp = $('[name="notice"]').val();
	if(temp == ""){
		$('[name="notice"]').css("border","1px solid #f00");
	}else{
		page_to('2','1');
	}
}

//判断表单中的复选框是否选中，并显示文本框
function judge_check(n){
	var set = "set_"+n;
	var ques = "ques_"+n;
    if(document.getElementById(set).checked){
        document.getElementById(ques).style.display="";
    }else{
		document.getElementById(ques).style.display="none";
    }
}