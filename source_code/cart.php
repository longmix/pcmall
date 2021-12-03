<?php
$the_title = '我的购物车';
  require 'shop_header.php';
?>

<?php 
	 require 'user_header.php'; ?>
    <!--详细列表-->
    <div class="xiangxilbnm">
    	<!--left-->
       <?php require 'userleftmenu.php' ?>
        <!--right-->
       <div class="zuirifip">
			<div class="thetoubu1">
		    	<b>
		        	<img src=" "  class="userimg"/>
		        </b>
		        <em class="nikename"></em>
		        <em>欢迎来到会员中心</em>
		        <a href="dizhiguanli.php">地址管理</a>
		        <a href="xiugaiziliao.php">修改资料</a>
		        <h5>账户安全</h5>
		        <strong>低</strong>
		        <span>
		        	<p style=" width:27%"></p>
		        </span>
		        <a href="#">安全等级提升</a>
		        <em style=" padding-right:2px">手机</em>
		        <a href="bangdingshouji.php" style=" padding-left:2px; float:left; display:block; color:#f00" title="点击绑定">未绑定</a>
		    </div>
       <!--lll-->
        	<div class="zuiriftp1">
            	<ul>
                	<li>
                        <span>账户余额</span>
                        <p class="balance"></p>
                    </li>
                    <li>
                    	<span>我的积分</span>
                        <p class="jifen"></p>
                    </li>
                    <li>
                    	<span>我的捐赠</span>
                        <p><s class="zengsong"></s>份</p>
                    </li>
                    <li>
                    	<span>我的帝云币</span>
                        <p  class="diyunbi"></p>
                    </li>
                </ul>
            </div>
        <!--lll-->
        	<div class="dfdaspjtk">
            	<span style=" display:block; float:left; font-size:14px; font-weight:bold; line-height:34px; padding-left:20px; padding-right:20px; color:#666">交易提醒</span>
            	<a href="#" style="color:#09f" id="wait_pay">待付款&nbsp;<s></s></a>
                <a href="#">待收货&nbsp;<s></s></a>
                <a href="#">待发货&nbsp;<s></s></a>
                <a href="#">待评价&nbsp;<s></s></a>
                <a href="#">交易历史&nbsp;<s>1</s></a>
            </div>
            <script>
			$(function(){
				$(".dfdaspjtk a").click(function(){
					$(this).css({color:"#09f"}).siblings().css({color:"#333"})
					})
				})
            </script>
        <!--所有列表-->
            <div class="sydlbdzz" id="cart_list2">
                <!--一个列表开始-->
                <script id="cart_item" type="text/x-jquery-tmpl">
                <div class="gzdlbdzzl">
                    <!--左-->
                    <div class="spzhaopin">
                        <a href="#"><img src="${picture}"/></a>
                    </div>
                    <!--中-->
                    <div class="youstdongi">
                        <h5><a href="#" style=" color:#333;">${name}</a>&nbsp;&nbsp;&nbsp;<a href="#" style="color:#333">我要咨询</a></h5>
                        <span>下单时间：2016-6-6&nbsp;14:08</span>
                        <span style=" color:#f00">订单状态：待付款</span>
                        <span>订单金额：<s style="color:#f00; font-weight:bold; font-size:14px">￥${price}</s>
                        <s style="color:#666; margin-left:10px">(1)件</s>
                        <s style="color:#666; margin-left:10px">免运费</s>
                        <s style="color:#666; margin-left:10px">在线支付</s>
                        <a href="#" style="margin-left:10px">小明的店铺</a>
                        <a href="#" style="margin-left:10px">取消订单</a>
                        <a href="#" style="color:#F00; cursor:pointer; float:right" onclick="del_cart(${productid})">删除</a></span>
                    </div>
                    <!--右-->
                    <div class="quzhifubasb">
                        <a href="#">支付订单</a>
                    </div>
                    <!--右下-->
                    <div class="chakanxiangqingfg">
                    	<a href="#">查看详情</a>
                    </div>
                </div>
                <!--一个列表结束-->
              </script>
            </div> 
        <!--所有列表结束-->
        
        
        
            
        </div>
        <!--right结束-->
    </div>
    <!--详细列表结束-->
</div>
<!--页脚-->
<!--footer-->
<?php require 'shop_footer.php'?>

<!--个人中心结束-->
</body>
<script type="text/javascript">

// var loginItem = get_login_info();//获取登录信息 


//删除购物车
 function del_cart(productid){
	/*  alert(productid) */
	 
	var function_cart_del_name = "cart_del";
	
	var request_cart_del_data = {'userid':userid, 'checkstr':checkstr ,'productid':productid};
	
	ajax_request_server(function_cart_del_name,request_cart_del_data,cart_del_callback);
	
}

function cart_del_callback(res){
	
	
	  if(res.code == 1)
      {
		
		  alert(res.msg);
		  
		  window.location.reload();
        }
	
	 	alert(res.msg);	
	
}



 function product_detail_callback(res){
	
	$("#cart_item").tmpl(res.data).appendTo("#cart_list2");
	console.log('顶顶顶顶dddd');
	console.log(res);
	console.log('顶顶顶顶dddd');
}

function cart_list2_callback(res){

	console.log('你就');
	console.log(loginItem);
	console.log('阿打发第三方');

	var userid = loginItem.userid;
	
	var checkstr = loginItem.checkstr;

	var arr_cart = res.data;
	
	console.log(arr_cart);//购物车里面的商品
	
	 var count = "";
	
	var zongprice = 0;
	
	var pro_arr = new Array();
	
	 for(var i = 0;i < arr_cart.length;i++){
		 
		 productid = arr_cart[i]['productid'];//商品id 
		 
		 pro_arr[i] =productid
		 
		 console.log(pro_arr);
		 
		 amount = arr_cart[i]['amount'];//购买的数量
			
			var function_name = "product_detail";
			
			var request_data = {'userid':userid, 'checkstr':checkstr,'productid':productid };
			
					var a = arr_cart[i]['price'];
					
		 			zongprice += parseInt(a);
			
		 			
			 
			ajax_request_server(function_name, request_data, product_detail_callback);//商品详情
				
	}
	 
	$("#heji").text("￥"+zongprice);
	 
	sessionStorage["zong"] = zongprice;
	
	
	 var num = " ";
	  for(var i = 0;count.length;i++){
		 
		 num += count[i]
		 
		$(".count").val(num);
		 
	 } 
	 $("#jiesuan").click(function(){
		 
		 sessionStorage["product_id"] = pro_arr;//存储productid的数组
		
		 //console.log(pro_arr);
		 
		 window.location.href="indiana-shu.html";
	   });
	 
	
	
}




$(function(){

	var userid = loginItem.userid;

	var checkstr = loginItem.checkstr;
	
	if(!is_user_login()){
		
		window.location.href = 'login.php';
		
		return;
		
	}
	
	//购物车列表
	
	var function_name = "cart_list";
	
// 	var loginItem = get_login_info();//获取登录信息 

	
	var request_data = {'userid':userid, 'checkstr':checkstr};
	ajax_request_server(function_name,request_data, cart_list2_callback);

	var request_order_index = {'userid':userid, 'checkstr':checkstr, 'order_sort': 1}; 
	ajax_request_server('order_index', request_order_index, get_wait_pay_callback);
	 
	 		
});

function get_wait_pay_callback(res)
{
	console.log('春爱情呢');
	console.log(res);
	console.log('春爱情呢');
}
</script>
</html>
