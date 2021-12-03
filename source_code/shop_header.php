<?php
error_reporting(E_ALL  ^  E_NOTICE);

require_once 'config/basic.php';

require_once 'abot_function.php';
require_once 'abot_cache.class.php';

//获取sellerid及其相关配置
require_once 'shop_init.php';



//准备前端展示
if(strlen($the_title) == 0){
	$the_title = '商城首页';
}
else{
	$the_title = $the_title .' - '. $basic_config['site_title'];
}

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $the_title; ?></title>
<link rel="stylesheet" type="text/css" href="css/zhanshi.css">
<link rel="stylesheet" type="text/css" href="css/top.css"/>
<link rel="stylesheet" type="text/css" href="css/dianpu.css">
<link rel="stylesheet" type="text/css" href="css/style02.css">
<link rel="stylesheet" type="text/css" href="css/footer.css"/>
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/lunbo.css">
<link rel="stylesheet" type="text/css" href="css/liebiao.css"/>
<link rel="stylesheet" type="text/css" href="css/vipcenter.css">
<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/cart.css">
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/checkOut.css" />

<script type="text/javascript">
//var http_server = './shopapp_api.php';
//var http_server = 'http://yanyubao.tseo.cn/index.php';
var http_server = 'http://127.0.0.1/yanyubao_server/index.php';

var sellerid = '<?php echo $basic_config['current_ensellerid']; ?>';
//var sellerid = 'fyzNUPkaW';
//var sellerid = 'fmJyUPkWj';

</script>

<script type="text/javascript" src="http://yanyubao.tseo.cn/Tpl/Home/default/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/iscroll.js"></script>
<script type="text/javascript" src="js/abot.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="http://yanyubao.tseo.cn/Tpl/static/jquery.tmpl.js"></script>
<script type="text/javascript" src="http://yanyubao.tseo.cn/api/shopapp.js"></script>
<script type="text/javascript" src="js/abot.function.js"></script>
<script type="text/javascript" src="js/cart.js"></script>


<script src="js/public.js"></script>
<script type="text/javascript">

</script>
</head>
<body>
<!--顶部菜单-->
<div class="dy1">
	<div class="dy2">
		<ul class="dy3">
		<li id="home_page"><a href="<?php echo $basic_config['header_homepage_url']?>" ><?php echo $basic_config['header_homepage_name']?><br/><?php echo $basic_config['header_homepage_name']?></a></li>
		<li><a href="#" id="diyunapp"><?php echo $basic_config['header_qrcode_name']?><br/><?php echo $basic_config['header_qrcode_name']?></a></li>
		</ul>
		
		
		<a href="http://yanyubao.tseo.cn/Market/order_car.html" class="dy5"><img src="images/gouwuche.png" style="width: 20px; height: 20px;"/></a>
		
		
		<ul class="dy4" id="login">
			<li><a href="<?php echo $login_url; ?>">登录<br/>登录</a></li>
			<li><a href="<?php echo $login_url; ?>">注册<br/>注册</a></li>
		</ul>
		<ul class="dy4" id="user_info" style="display:none;">
			<li><a href="http://yanyubao.tseo.cn/User/index.html?ensellerid=<?php echo $basic_config['current_ensellerid']; ?>">欢迎您！<span id="login_name01">啊啊啊啊啊</span>
			<br />欢迎您！<span id="login_name02">啊啊啊啊啊</span></a>
			</li>
			<li><a href="http://yanyubao.tseo.cn/User/index.html?ensellerid=<?php echo $basic_config['current_ensellerid']; ?>"><img src="images/usercenter.png" style="width:15px;">
			<br /><img src="images/usercenter.png" style="width:15px;"></a>
			</li>
			<li><a id="del_login" onclick="del_login_info()">退出
			<br />退出</a>
			</li>
		</ul>
		
		<div class="dy6" id="dy6">
			<script id="cart_list" type="text/x-jquery-tmpl">
	<ul>	
		<li>
			<b><img src="${picture}"/></b>
			<a href="detail.php?productid=${productid}" class="dy7">${name}</a>
			<!--<a href="#" class="dy8" onclick="del_cart(${productid})">删除</a>-->
		</li>
		
	</ul>
			</script>
			
		<!-- 	<li> -->
		<!-- 			<b><img src="img/gaoqingxianshiqi.jpg"/></b> -->
		<!-- 			<a href="#" class="dy7">4k高清显示器</a> -->
		<!-- 			<a href="#" class="dy8">删除</a> -->
		<!-- 		</li> -->
		</div>
		
		<div class="dy9">
		 	<img src="<?php echo $basic_config['header_qrcode_img_url']?>" id="qrcode"/>
		</div>
	</div><!-- end of dy2 -->
</div><!-- end of dy1 -->


<!--logo加时间加搜索框-->
<div class="dy10">
	<div class="dy11">
    	<a href="<?php echo $basic_config['nav_right_good_cata_name'][0]['url']?>">
    	<img src="<?php echo $basic_config['logo_header_left']?>"/></a>
    </div>
    <div class="dy13">
    	<embed src="img/honehone_clock_wh.swf" style=" height:45px; width:120px"></embed>
    </div>
    <div class="dy12">
    	<input id="keyword" type="text" value="搜索商品/店铺" onFocus="if(value=='搜索商品/店铺') {value=''}" onBlur="if (value=='') {value='搜索商品/店铺'}" style="width:500px; height:36px; text-indent:12px; font-size:12px; color:#666; float:left">
        <input id="search" type="search" value="搜索" style=" cursor:pointer; width:70px; height:36px; float:right; text-align:center; background:#333;" class="shousuo">
    </div>
</div>
    		
<!--全部商品分类-->
<div class="qbspfl">
	<div class="djfl" style="height:400px" >
    	全部商品分类
    
    </div>
    <div class="morelist">   
    <?php  foreach ($basic_config['nav_right_good_cata_name'] as $v) {?> 	
    	<a href="<?php echo $v['url']?>" <?php if($v['target'] == '_blank') echo 'target="_blank"'; ?>><?php echo $v['title']?></a>
    <?php } ?>
<!--     	 <a href="index.php">首页</a> -->
<!--         <a href="list.php">商品列表</a> -->
<!--         <a href="#">商品1</a> -->
<!--         <a href="#">商品2</a> -->
<!--         <a href="#">商品3</a> -->
<!--         <a href="#">帮助中心</a> -->
    </div>
</div>

<!--banner轮播引入lunbo.css和daohang.js-->
<div id="big_contain" style="display:block; height: auto">
 <div id="big_banner_wrap" style="display:inline-block; height: auto;">
	 
	 <div id="banner_position">
	 <ul id="banner_menu_wrap">
	 <script id="template_product_list" type="text/x-jquery-tmpl">
		 <li class="active" onmousemove="showcaidan(this)" onmouseleave="hidecaidan(this)">
			 <a href="list.php?cataid=${cataid}">${name}</a>
			 <a class="banner_menu_i">&gt;</a>
			 <div class="banner_menu_content" style="width: 600px; height:550px;overflow:hidden; top: 0px; background: rgba(0, 0, 0, 0.8);">
				
				 <ul class="banner_menu_content_ul" id="tow2" >
					{{each sub_cata}}
					 <li>
						 <a href="list.php?cataid=${cataid}"><img src="${icon}" style="width:50px;"></a>
						 <a  href="list.php?cataid=${cataid}">${name}</a><span>选购</span>
					 </li>
					{{/each}}
				 </ul>
				
			 </div>
		 </li>
		 </script>
	 </ul>
	 </div>	
 
	 	
<script type="text/javascript">  
var loginItem = null;


$(function(){

	var GET = $.urlGet();
	var refresh_token = GET['refresh_token'];
	console.log('ddddd',refresh_token);

	if(refresh_token){
		$.ajax({
			url:http_server+'?g=Yanyubao&m=ShopApp&a=login_by_refresh_token',
			data:{'refresh_token':refresh_token},
			type:"POST",
			dataType:"json",
			success:function(data){
				console.log('aaa',data);
				if(data.code==1){				
					set_login_info(data.userid, data.checkstr);//本地保存用户信息

					get_user_info(data.userid,data.checkstr,get_user_info_callback);
					
					
				}else{
					alert(data.msg);
				}
			}
		});

		return;
	}
	
	
	
	if(is_user_login()){
		loginItem = get_login_info();
	}

	if(!loginItem){
		$('#user_info').hide();
	} else {
		get_user_info(loginItem.userid,loginItem.checkstr,get_user_info_callback);
		
	}

	
	if(loginItem){
		
		var userid = loginItem.userid;

		var checkstr = loginItem.checkstr;

		var function_cart_list_name = 'cart_list';

		var request_cart_list_data = {'userid':userid, 'checkstr':checkstr};
	
		if(is_user_login()){
		
			ajax_request_server(function_cart_list_name, request_cart_list_data, cart_list_callback);
		
		}

	}

	var request_data = {'data':" "};
	var function_product_list_name = "product_cata_level2";
	ajax_request_server(function_product_list_name, request_data, product_list_callback66);
	
	//搜索跳转
	$('#search').click(function(){
		var keyword = $('#keyword').val();
		window.location.href='list.php?keyword='+encodeURI(encodeURI(keyword));
	})
	
	
});


//登录信息
function get_user_info_callback(res){

	console.log('111111111111');
	console.log(res);
	
	if(res.code != 1){
		$('#login_name').hide();
		$('#del_login').hide();
		alert(res.msg);
		
		return;
	}
	

	var nickname = res.data.nickname;//昵称
	
	var mobile = res.data.mobile;//手机号、账号
	
	var headimgurl = res.data.headimgurl;//头像
	
	var balance = res.data.balance;//现金余额
	
	var balance_zengsong = res.data.balance_zengsong;//赠送
	
	var balance_jifen = res.data.score; 

	
	$('#login_name01').text(nickname);
	$('#login_name02').text(nickname);
	$('#login').hide();

	$('#user_info').css('display', 'block');

	

}
//购物车
function cart_list_callback(res)
{
	$('#cart_list').tmpl(res.data).appendTo('#dy6');	
}



//二级下拉菜单
$(".djfl,#banner_menu_wrap").mousemove(function(){
	$("#banner_menu_wrap").show();
});	
$(".djfl,#banner_menu_wrap").mouseleave(function(){
		$("#banner_menu_wrap").hide();
	}); 

//商品列表
function product_list_callback66(res){
	 $("#template_product_list").tmpl(res.data).appendTo('#banner_menu_wrap');	
}

function showcaidan(select)
{
    $(select).children(".banner_menu_content").show();	
}

function hidecaidan(select)

{
	 $(select).children(".banner_menu_content").hide();
}


//购物车删除
function del_cart(productid){
	/*  alert(productid) */
	 
	var userid = loginItem.userid;

	var checkstr = loginItem.checkstr; 
	
	var function_cart_del_name = "cart_del";
	
	var request_cart_del_data = {'userid':userid, 'checkstr':checkstr ,'productid':productid};
	
	ajax_request_server(function_cart_del_name,request_cart_del_data,cart_del_callback);
	
}

function cart_del_callback(res){
	
	console.log('dsafasdf3333');
	  if(res.code == 1)
    {
		
		  alert(res.msg);
		  
		  window.location.reload();
      }
	
	 	alert(res.msg);	
	
}


</script>
    		