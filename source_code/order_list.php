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

        <!--lll-->
        	<div class="dfdaspjtk">
            	<span style=" display:block; float:left; font-size:14px; font-weight:bold; line-height:34px; padding-left:20px; padding-right:20px; color:#666">订单列表</span>
            	<a href="#" onclick="by_order_sort('', this)" style="color:#09f" id="wait_pay">全部&nbsp;</a>
            	<a href="#" onclick="by_order_sort('1', this)">待付款&nbsp;</a>
                <a href="#" onclick="by_order_sort('2', this)">待发货&nbsp;</a>
                <a href="#" onclick="by_order_sort('6', this)">待收货&nbsp;</a>
                <a href="#" >待评价&nbsp;<s></s></a>
                <a href="#" >交易历史&nbsp;<s></s></a>
            </div>
            <script>
			$(function(){
				$(".dfdaspjtk a").click(function(){
					$(this).css({color:"#09f"}).siblings().css({color:"#333"})
					})
				})
            </script>
        <!--所有列表-->
            <div class="sydlbdzz" id="order_list">
            </div>
                <!--一个列表开始-->
            <script id="order_product" type="text/x-jquery-tmpl">

                <div class="gzdlbdzzl"> 
                    <div class="youstdongi" style="float: none;">
                        <h5>订单编号${orderno}&nbsp;&nbsp;&nbsp;<font style="color:#f00">订单状态：${status_str}</font></h5>
                    </div>
					{{each orderProduct}}
                    <div>
		                    <div class="spzhaopin">
		                        <a href="detail.php?productid=${productid}"><img src="${picture}"/></a>
		                    </div>
		                    <div style="margin-left: 80px;">
		                    	<span style="display: block;font-size: 15px;">${product_name}</span>
		                  
		                    	<span style="display: block;margin-top: 10px;margin-bottom: 10px;">单价：${price}</span>
		               
		                    	<span style="display: block;">数量：${amount}</span>
		                    </div>
					<div style="clear:both;"></div>
                    </div>
					{{/each}}

					<div style="float: right;"> 
		                    <div class="quzhifubasb">
		                        <a href="#">${status2}</a>
		                    </div> 
		                    <div class="chakanxiangqingfg">
		                    	<a href="#">${status3}</a>
		                    </div>
	                </div>
                </div>

 </script>
 				<!-- 
                <div class="gzdlbdzzl"> 
                    <div class="spzhaopin">
                        <a href="#"><img src="${seller_icon}"/></a>
                    </div>
                   
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
                    <div class="quzhifubasb">
                        <a href="#">支付订单</a>
                    </div>
                    <div class="chakanxiangqingfg">
                    	<a href="#">查看详情</a>
                    </div>
                </div>
                 -->
                <!--一个列表结束--> 
            </div> 
        <!--所有列表结束--> 
        </div>
        <!--right结束-->
    </div>
    <!--详细列表结束-->

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


function order_list_callback(res){
	console.log('aaaaaa');
	//$('.count').html(res.orderList.length);
	console.log('ssssss');
	$('#order_list').empty();
	
	$("#order_product").tmpl(res.orderList).appendTo('#order_list');	
}

function by_order_sort($order_sort, thisObj)
{
	var userid = loginItem.userid;
	var checkstr = loginItem.checkstr;
	var order_sort = $order_sort;
	if(!is_user_login()){
		window.location.href = 'login.php';
		return;
	}
	//订单列表
	var function_name = "order_index";
	var request_data = {'userid':userid, 'checkstr':checkstr,'order_sort': order_sort};
	ajax_request_server(function_name,request_data, order_list_callback);

}
 $(function(){
	var userid = loginItem.userid;
	var checkstr = loginItem.checkstr;
	var order_sort = '';
	if(!is_user_login()){
		window.location.href = 'login.php';
		return;
	}
	//订单列表
	var function_name = "order_index";
	var request_data = {'userid':userid, 'checkstr':checkstr,'order_sort': order_sort};
	ajax_request_server(function_name,request_data, order_list_callback);
});  

</script>
</html>
