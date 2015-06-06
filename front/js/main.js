//表单功能****************************************************************

//获取焦点改变文本框（当前对象）边框颜色：操作的文本框
function outline_new(x){
		x.style.border="1px solid #00ACFF";
}

//失去焦点改变文本框（当前对像）边框颜色：操作的文本框
function outline_old(x){
		x.style.border="1px solid #ccc";
}



//复选框被选中时，该选框所对应的label颜色变黑；反之则恢复灰色
function judge_check(x){
	var inputId = x.id;
	var label = $("label[for='"+inputId+"']");
    if(x.checked){
        label.addClass("label_selected");
    }else{
		label.removeClass("label_selected");
    }
}


//***************************************************************************

//弹出全屏遮罩层
function coverall(){
	$("body").append("<div class='back'></div>");
}
//取消全屏遮罩层
function nocover(){
	$(".back").remove("");
}

// JavaScript Document
//弹出窗口：要弹出窗口的id
function newbox(wid){
	$('#'+wid).fadeIn("fast");	
}

//窗口消失：要消失窗口的id
function movebox(wid){
	$('#'+wid).fadeOut("fast");
}

