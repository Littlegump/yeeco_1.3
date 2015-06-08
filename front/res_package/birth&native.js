// JavaScript Document

//判断是否是有31天的月份
function judge_day(){
	var month = $("#birthmonth").val();
	if( month=="1" || month=="3" || month=="5" || month=="7" || month=="8" || month=="10" || month=="12"){
	    var oForm = document.getElementById("birthday");
        var newHtml = document.createElement("option");
	        newHtml.value= "31";
			newHtml.innerHTML = '31';
			oForm.appendChild(newHtml);
	}
}
//加载该省份的所有城市
function load_city(){
	var pro = $("#native_por").val();
	$("#native_city").load("city_list.php",{"pro":pro});
}


$(document).ready(function(){
  //点击省份的时候加载城市
	$("#native_por").change(function (){
	    load_city();
    });
	//点击月份的时候加载日期
	$("#birthmonth").change(function (){
	    judge_day();
    });
});

