// JavaScript Document

//点击触发表单验证并实现页面跳转
function page_to(page_a,page_b){
	document.getElementById(page_a).style.display="";
	document.getElementById(page_b).style.display="none"; 
	document.getElementById("contact_title").getElementsByTagName("li").item(page_a).className = 'on';
	document.getElementById("contact_title").getElementsByTagName("li").item(page_b).className = ''; 
}


//点击触发表单验证并实现页面跳转，同时提交表单
function submit_btn(){
	document.getElementById("activity_form").submit(); 
	alert("提交成功！");
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