<?php
    $pro=$_POST['pro'];
	if( $pro == '北京' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="北京市">北京市</option></select>';
		exit;
    }else if( $pro == '上海' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="上海市">上海市</option></select>';
		exit;
	}else if( $pro == '天津' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="天津市">天津市</option></select>';
		exit;
	}else if( $pro == '重庆' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="重庆市">重庆市</option></select>';
		exit;
	}else if( $pro == '黑龙江' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="哈尔滨市">哈尔滨市</option><option value="七台河市">七台河市</option><option value="齐齐哈尔市">齐齐哈尔市</option><option value="黑河市">黑河市</option><option value="大庆市">大庆市</option><option value="鹤岗市">鹤岗市</option><option value="伊春市">伊春市</option><option value="佳木斯市">佳木斯市</option><option value="双鸭山市">双鸭山市</option><option value="鸡西市">鸡西市</option><option value="牡丹江市">牡丹江市</option><option value="绥化市">绥化市</option><option value="大兴安岭地区">大兴安岭地区</option></select>';
	exit;
	}else if( $pro == '吉林' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="长春市">长春市</option><option value="白城市">白城市</option><option value="松原市">松原市</option><option value="吉林市">吉林市</option><option value="四平市">四平市</option><option value="辽源市">辽源市</option><option value="通化市">通化市</option><option value="白山市">白山市</option><option value="延边朝鲜族自治州">延边朝鲜族自治州</option></select>';
	exit;
	}else if( $pro == '辽宁' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="沈阳市">沈阳市</option><option value="朝阳市">朝阳市</option><option value="阜新市">阜新市</option><option value="铁岭市">铁岭市</option><option value="抚顺市">抚顺市</option><option value="本溪市">本溪市</option><option value="辽阳市">辽阳市</option><option value="鞍山市">鞍山市</option><option value="丹东市">丹东市</option><option value="大连市">大连市</option><option value="营口市">营口市</option><option value="盘锦市">盘锦市</option><option value="锦州市">锦州市</option><option value="葫芦岛市">葫芦岛市</option></select>';
	exit;
	}else if( $pro == '安徽' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="合肥市">合肥市</option><option value="宿州市">宿州市</option><option value="淮北市">淮北市</option><option value="亳州市">亳州市</option><option value="阜阳市">阜阳市</option><option value="蚌埠市">蚌埠市</option><option value="淮南市">淮南市</option><option value="滁州市">滁州市</option><option value="马鞍山市">马鞍山市</option><option value="芜湖市">芜湖市</option><option value="铜陵市">铜陵市</option><option value="安庆市">安庆市</option><option value="黄山市">黄山市</option><option value="六安市">六安市</option><option value="巢湖市">巢湖市</option><option value="池州市">池州市</option><option value="宣城市">宣城市</option></select>';
	exit;
	}else if( $pro == '江苏' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="南京市">南京市</option><option value="徐州市">徐州市</option><option value="连云港市">连云港市</option><option value="宿迁市">宿迁市</option><option value="淮安市">淮安市</option><option value="盐城市">盐城市</option><option value="扬州市">扬州市</option><option value="泰州市">泰州市</option><option value="南通市">南通市</option><option value="镇江市">镇江市</option><option value="常州市">常州市</option><option value="无锡市">无锡市</option><option value="苏州市">苏州市</option></select>';
	exit;
	}else if( $pro == '浙江' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="杭州市">杭州市</option><option value="湖州市">湖州市</option><option value="嘉兴市">嘉兴市</option><option value="舟山市">舟山市</option><option value="宁波市">宁波市</option><option value="绍兴市">绍兴市</option><option value="衢州市">衢州市</option><option value="金华市">金华市</option><option value="泰州市">台州市</option><option value="温州市">温州市</option><option value="丽水市">丽水市</option></select>';
	exit;
	}else if( $pro == '陕西' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60010001">西安市</option><option value="60010002">延安市</option><option value="60010003">铜川市</option><option value="60010004">渭南市</option><option value="60010005">咸阳市</option><option value="60010006">宝鸡市</option><option value="60010007">汉中市</option><option value="60010008">榆林市</option><option value="60010009">安康市</option><option value="60010010">商洛市</option></select>';
	exit;
	}else if( $pro == '湖北' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60011001">武汉市</option><option value="60011002">十堰市</option><option value="60011003">襄樊市</option><option value="60011004">荆门市</option><option value="60011005">孝感市</option><option value="60011006">黄冈市</option><option value="60011007">鄂州市</option><option value="60011008">黄石市</option><option value="60011009">咸宁市</option><option value="60011010">荆州市</option><option value="60011011">宜昌市</option><option value="60011012">随州市</option><option value="60011013">恩施土家族苗族自治州</option></select>';
	exit;
	}else if( $pro == '广东' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60012001">广州市</option><option value="60012002">清远市</option><option value="60012003">韶关市</option><option value="60012004">河源市</option><option value="60012005">梅州市</option><option value="60012006">潮州市</option><option value="60012007">汕头市</option><option value="60012008">揭阳市</option><option value="60012009">汕尾市</option><option value="60012010">惠州市</option><option value="60012011">东莞市</option><option value="60012012">深圳市</option><option value="60012013">珠海市</option><option value="60012014">中山市</option><option value="60012015">江门市</option><option value="60012016">佛山市</option><option value="60012017">肇庆市</option><option value="60012018">云浮市</option><option value="60012019">阳江市</option><option value="60012020">茂名市</option><option value="60012021">湛江市</option></select>';
	exit;
	}else if( $pro == '湖南' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60013001">长沙市</option><option value="60013002">张家界市</option><option value="60013003">常德市</option><option value="60013004">益阳市</option><option value="60013005">岳阳市</option><option value="60013006">株洲市</option><option value="60013007">湘潭市</option><option value="60013008">衡阳市</option><option value="60013009">郴州市</option><option value="60013010">永州市</option><option value="60013011">邵阳市</option><option value="60013012">怀化市</option><option value="60013013">娄底市</option><option value="60013014">湘西土家族苗族自治州</option></select>';
	exit;
	}else if( $pro == '甘肃' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60014001">兰州市</option><option value="60014002">嘉峪关市</option><option value="60014003">金昌市</option><option value="60014004">白银市</option><option value="60014005">天水市</option><option value="60014006">武威市</option><option value="60014007">酒泉市</option><option value="60014008">张掖市</option><option value="60014009">庆阳市</option><option value="60014010">平凉市</option><option value="60014011">定西市</option><option value="60014012">陇南市</option><option value="60014013">临夏回族自治州</option><option value="60014014">甘南藏族自治州</option></select>';
	exit;
	}else if( $pro == '四川' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60015001">成都市</option><option value="60015002">广元市</option><option value="60015003">绵阳市</option><option value="60015004">德阳市</option><option value="60015005">南充市</option><option value="60015006">广安市</option><option value="60015007">遂宁市</option><option value="60015008">内江市</option><option value="60015009">乐山市</option><option value="60015010">自贡市</option><option value="60015011">泸州市</option><option value="60015012">宜宾市</option><option value="60015013">攀枝花市</option><option value="60015014">巴中市</option><option value="60015015">达州市</option><option value="60015016">资阳市</option><option value="60015017">眉山市</option><option value="60015018">雅安市</option><option value="60015019">阿坝藏族羌族自治州</option><option value="60015020">甘孜藏族自治州</option><option value="60015021">凉山彝族自治州</option></select>';
	exit;
	}else if( $pro == '济南' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60016001">济南市</option><option value="60016002">聊城市</option><option value="60016003">德州市</option><option value="60016004">东营市</option><option value="60016005">淄博市</option><option value="60016006">潍坊市</option><option value="60016007">烟台市</option><option value="60016008">威海市</option><option value="60016009">青岛市</option><option value="60016010">日照市</option><option value="60016011">临沂市</option><option value="60016012">枣庄市</option><option value="60016013">济宁市</option><option value="60016014">泰安市</option><option value="60016015">莱芜市</option><option value="60016016">滨州市</option><option value="60016017">菏泽市</option></select>';
	exit;}
	else if( $pro == '山东' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60016001">济南市</option><option value="60016002">聊城市</option><option value="60016003">德州市</option><option value="60016004">东营市</option><option value="60016005">淄博市</option><option value="60016006">潍坊市</option><option value="60016007">烟台市</option><option value="60016008">威海市</option><option value="60016009">青岛市</option><option value="60016010">日照市</option><option value="60016011">临沂市</option><option value="60016012">枣庄市</option><option value="60016013">济宁市</option><option value="60016014">泰安市</option><option value="60016015">莱芜市</option><option value="60016016">滨州市</option><option value="60016017">菏泽市</option></select>';
	exit;
	}else if( $pro == '福建' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60017001">福州市</option><option value="60017002">南平市</option><option value="60017003">莆田市</option><option value="60017004">三明市</option><option value="60017005">泉州市</option><option value="60017006">厦门市</option><option value="60017007">漳州市</option><option value="60017008">龙岩市</option><option value="60017009">宁德市</option></select>';
	exit;
	}else if( $pro == '河南' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60018001">郑州市</option><option value="60018002">三门峡市</option><option value="60018003">洛阳市</option><option value="60018004">焦作市</option><option value="60018005">新乡市</option><option value="60018006">鹤壁市</option><option value="60018007">安阳市</option><option value="60018008">濮阳市</option><option value="60018009">开封市</option><option value="60018010">商丘市</option><option value="60018011">许昌市</option><option value="60018012">漯河市</option><option value="60018013">平顶山市</option><option value="60018014">南阳市</option><option value="60018015">信阳市</option><option value="60018016">周口市</option><option value="60018017">驻马店市</option></select>';
	exit;
	}else if( $pro == '云南' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60020001">昆明市</option><option value="60020002">曲靖市</option><option value="60020003">玉溪市</option><option value="60020004">保山市</option><option value="60020005">昭通市</option><option value="60020006">丽江市</option><option value="60020007">普洱市</option><option value="60020008">临沧市</option><option value="60020009">德宏傣族景颇族自治州</option><option value="60020010">怒江傈僳族自治州</option><option value="60020011">迪庆藏族自治州</option><option value="60020012">大理白族自治州</option><option value="60020013">楚雄彝族自治州</option><option value="60020014">红河哈尼族彝族自治州</option><option value="60020015">文山壮族苗族自治州</option><option value="60020016">西双版纳傣族自治州</option></select>';
	exit;
	}else if( $pro == '河北' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60021001">石家庄市</option><option value="60021002">张家口市</option><option value="60021003">承德市</option><option value="60021004">秦皇岛市</option><option value="60021005">唐山市</option><option value="60021006">廊坊市</option><option value="60021007">保定市</option><option value="60021008">衡水市</option><option value="60021009">沧州市</option><option value="60021010">邢台市</option><option value="60021011">邯郸市</option></select>';
	exit;
	}else if( $pro == '江西' ){
        echo '<option id="city" selected="selected" value="">城市</option><option value="60022001">南昌市</option><option value="60022002">九江市</option><option value="60022003">景德镇市</option><option value="60022004">鹰潭市</option><option value="60022005">新余市</option><option value="60022006">萍乡市</option><option value="60022007">赣州市</option><option value="60022008">上饶市</option><option value="60022009">抚州市</option><option value="60022010">宜春市</option><option value="60022011">吉安市</option></select>';
	exit;
	}else if( $pro == '山西' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60023001">太原市</option><option value="60023002">朔州市</option><option value="60023003">大同市</option><option value="60023004">阳泉市</option><option value="60023005">长治市</option><option value="60023006">晋城市</option><option value="60023007">忻州市</option><option value="60023008">晋中市</option><option value="60023009">临汾市</option><option value="60023010">吕梁市</option><option value="60023011">运城市</option></select>';
	exit;
	}else if( $pro == '贵州' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60024001">贵阳市</option><option value="60024002">六盘水市</option><option value="60024003">遵义市</option><option value="60024004">安顺市</option><option value="60024005">毕节地区</option><option value="60024006">铜仁地区</option><option value="60024007">黔东南苗族侗族自治州</option><option value="60024008">黔南布依族苗族自治州</option><option value="60024009">黔西南布依族苗族自治州</option></select>';
	exit;
	}else if( $pro == '广西' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60025001">南宁市</option><option value="60025002">桂林市</option><option value="60025003">柳州市</option><option value="60025004">梧州市</option><option value="60025005">贵港市</option><option value="60025006">玉林市</option><option value="60025007">钦州市</option><option value="60025008">北海市</option><option value="60025009">防城港市</option><option value="60025010">崇左市</option><option value="60025011">百色市</option><option value="60025012">河池市</option><option value="60025013">来宾市</option><option value="60025014">贺州市</option></select>';
	exit;
	}else if( $pro == '内蒙古' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60026001">呼和浩特市</option><option value="60026002">包头市</option><option value="60026003">乌海市</option><option value="60026004">赤峰市</option><option value="60026005">通辽市</option><option value="60026006">呼伦贝尔市</option><option value="60026007">鄂尔多斯市</option><option value="60026008">乌兰察布市</option><option value="60026009">巴彦淖尔市</option><option value="60026010">兴安盟</option><option value="60026011">锡林郭勒盟</option><option value="60026012">阿拉善盟</option></select>';
	exit;
	}else if( $pro == '宁夏' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60027001">银川市</option><option value="60027002">石嘴山市</option><option value="60027003">吴忠市</option><option value="60027004">固原市</option><option value="60027005">中卫市</option></select>';
	exit;
	}else if( $pro == '青海' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60028001">西宁市</option><option value="60028002">海东地区</option><option value="60028003">海北藏族自治州</option><option value="60028004">海南藏族自治州</option><option value="60028005">黄南藏族自治州</option><option value="60028006">果洛藏族自治州</option><option value="60028007">玉树藏族自治州</option><option value="60028008">海西蒙古族藏族自治州</option></select>';
	exit;
	}else if( $pro == '新疆' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60029001">乌鲁木齐市</option><option value="60029002">克拉玛依市</option><option value="60029003">喀什地区</option><option value="60029004">阿克苏地区</option><option value="60029005">和田地区</option><option value="60029006">吐鲁番地区</option><option value="60029007">哈密地区</option><option value="60029008">克孜勒苏柯尔克孜自治州</option><option value="60029009">博尔塔拉蒙古自治州</option><option value="60029010">昌吉回族自治州</option><option value="60029011">巴音郭楞蒙古自治州</option><option value="60029012">伊犁哈萨克自治州</option><option value="塔城地区">塔城地区</option><option value="阿勒泰地区">阿勒泰地区</option></select>';
	exit;
	}else if( $pro == '海南' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="海口市">海口市</option><option value="三亚市">三亚市</option></select>';
	exit;
	}else if( $pro == '西藏' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="拉萨市">拉萨市</option><option value="那曲地区">那曲地区</option><option value="昌都地区">昌都地区</option><option value="林芝地区">林芝地区</option><option value="山南地区">山南地区</option><option value="日喀则地区">日喀则地区</option><option value="阿里地区">阿里地区</option></select>';
	exit;
	}else if( $pro == '香港' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60032001">香港特别行政区</option></select>';
	exit;
	}else if( $pro == '澳门' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="60032001">澳门特别行政区</option></select>';
		exit;
	}else if( $pro == '台湾' ){
		echo '<option id="city" selected="selected" value="">城市</option><option value="7101">台北市</option><option value="7102">高雄市</option><option value="7103">基隆市</option><option value="7104">台中市</option><option value="7105">台南市</option><option value="7106">新竹市</option><option value="7107">嘉义市</option></select>';
	exit;
	}else if( $pro == '省份' ){
		echo '<option id="city" selected="selected" value="">城市</option></select>';
		exit;
	}
?>