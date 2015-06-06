// JavaScript Document
//更改绑定的手机号码
function change_tel(){
	$(".tel_form :button").css("display","block");
	$("[name='userTel']").removeAttr("readonly"); 
	$("[name='userTel']").val("");
	$("[name='userTel']").focus();
}

//发送验证码
function sendcode(){
	
	//检查手机号码格式以及是否被注册了
	var usertel=$("[name='userTel']").val();
	var temp=usertel.substring(0,2);
	if(usertel != ""){
	if(usertel.length != 11){
		error(x);
	}else if(temp!="14" && temp!="13" && temp!="15" && temp!="18"){
	    error(x);
	}else{
	    //用户名格式正确，判断该用户是否已经被注册
		$("#otel").load("../background/background_person/form_register.php",{"ousertel":usertel},function(){
		    aaa = $("#otel").html();
			    if(aaa){
			        $("#otel").css("display","block");
				}else{
	                //发送验证码*****************************************************
					$(".ver_code").css("display","block");
					$(".tel_form :submit").css("display","block");
					$(".tel_form :button").css("display","none");
					$("[href='javascript:change_tel()']").css("display","none");
					//重置并开启倒计时
					$("#resend").addClass("gray");
					$("#resend").removeAttr("href"); 
					t=60;
					countDown();
				}
		});
	}		
	}
}

var timer = null;
var t=60;
//执行倒计时，使strong标签中显示剩余时间
function countDown(){
    if(timer){
		clearTimeout(timer);
		timer = null;
	}	
	timer = setTimeout(function(){
		t = t-1;
		$(".time").html(t);
		if(t != 0 ){
		    countDown();
		}else{
			$("#resend").removeClass("gray");
			$("#resend").attr("href","javascript:sendcode();"); 
		}
    },1000)
}


//提示框消失
function disappear(x){
	document.getElementById(x).style.display="none";
}

//错误提示：x表示发生错误的文本框；
function error(x){
	var objid = $(x).attr("name");
	switch(objid){
	case 'password_old':$("#span_1").css("display","block");break;
	case 'password_1':$("#span_2").css("display","block");break;
	case 'password_2':$("#span_3").css("display","block");break;
	}
		
	x.value = "";
	x.focus();
}
//验证密码是否正确
function password_test(){
	var usertel=$("[name='userTel']").val();
	var password=$("[name='password_old']").val();
	//***************在这里执行与后台交互的查询操作,提交“当前密码”，通过session保存的id与其进行匹配
	$("#span_1").load("####",{"opassword":password},function(){
		bbb = $("#span_1").html();
		    if(bbb){
			        $("#span_1").css("display","block");
				}
		});
}


//验证密码的格式是否正确
function checking_2(x){
	var password1=x.value;
	if(password1 != ""){
	if(password1.length<6){
	    error(x);
	}	
	}
}

//验证密码是否一致
function checking_3(x){
	var password1=$("[name='password_1']").val();
	var password2=x.value;
	if(password2 != ""){
	    if(password1 != password2){
		    error(x);
	    }	
	}
}







