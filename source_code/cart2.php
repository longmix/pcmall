<?php
$the_title = '我的购物车';
require 'shop_header.php';
?>


<!--详细列表-->
    <section class="cartMain">
        <div class="cartMain_hd">
            <ul class="order_lists cartTop">
                <li class="list_chk">
                    <!--所有商品全选-->
                    <input type="checkbox" id="all" class="whole_check  aaa">
                    <label for="all"></label>
                    全选
                </li>
                <li class="list_con">商品信息</li>
                <li class="list_info">商品参数</li>
                <li class="list_price">单价</li>
                <li class="list_amount">数量</li>
                <li class="list_sum">金额</li>
                <li class="list_op">操作</li>
            </ul>
        </div>

        <div class="cartBox">
            <div class="shop_info">
                <div class="all_check">
                  
                </div>
                
            </div>
            <div class="order_content">
            <script id="cart_item" type="text/x-jquery-tmpl">
                <ul class="order_lists">
                    <li class="list_chk">
                        <input type="checkbox" id="${productid}" class="son_check">
                        <label for="${productid}"></label>
                    </li>
                    <li class="list_con">
                        <div class="list_img"><a href="javascript:;"><img src="${picture}" alt=""></a></div>
                        <div class="list_text"><a href="javascript:;">${name}</a></div>
                    </li>
                    <li class="list_info">
                        <p>规格：默认</p>
                        <p>尺寸：16*16*3(cm)</p>
                    </li>
                    <li class="list_price">
                        <p class="price">￥${price}</p>
                    </li>
                    <li class="list_amount">
                        <div class="amount_box">
                            <a data-id="${productid}" href="javascript:;" class="reduce reSty">-</a>
                            <input type="text" value="${amount}" class="sum">
                            <a data-id="${productid}" href="javascript:;" class="plus">+</a>

                        </div>
                    </li>
                    <li class="list_sum">
                        <p class="sum_price">￥${price_total}</p>
                    </li>
                    <li class="list_op">
                        <p class="del"><a href="javascript:;" class="delBtn" onclick="del_cart(${productid})" style="font-size:12px;">移除商品</a></p>
                    </li>
                </ul>
              </script>
              
            </div>
        </div>

        

        
        <!--底部-->
        <div class="bar-wrapper">
            <div class="bar-right">
                <div class="piece">已选商品<strong class="piece_num">0</strong>件</div>
                <div class="totalMoney">共计: <strong class="total_text">0.00</strong></div>
                <div class="calBtn"><a href="javascript:;" id="submit">结算</a></div>
            </div>
        </div>
    </section>
    <section class="model_bg"></section>
    <section class="my_model">
        <p class="title">删除宝贝<span class="closeModel">X</span></p>
        <p>您确认要删除该宝贝吗？</p>
        <div class="opBtn"><a href="javascript:;" class="dialog-sure">确定</a><a href="javascript:;" class="dialog-close">关闭</a></div>
    </section>
	
    
	
</body>
</html>
</div>



</body>
</html>
      
        
	
	
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


	
	 
// 	sellerid.push(2);
// 	seller[sellerid2] = sellerid;
// 	seller['2'].push = 1;
// 	seller['2'].push = 2;
	console.log("sdfsd f");
	$("#cart_item").tmpl(res.data).appendTo("#cart_list2");
	console.log("sdfsd f");
}

function cart_list2_callback(res){

	for(key in res.data){
		res.data[key].price_total = parseInt(res.data[key].price) * parseInt(res.data[key].amount);
	}
	$('#cart_item').tmpl(res.data).appendTo('.order_content');
	
	
}
function cart_num_change_callback(res){
	
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


	
	
	 $("body").on('click',".plus", function(){
		 var productid = $(this).attr('data-id');		 
		 var cart_num_change_data = {'userid':userid, 'checkstr':checkstr, 'productid':productid,'amount':1,'action':'inc'};
			 ajax_request_server("cart_num_change", cart_num_change_data, cart_num_change_callback);

		 
		 var amount = parseInt($(this).prev().val()) + 1;
		 
		 $(this).prev().val(amount);
		 var price = $(this).parents('.list_amount').prev().find('.price').text();
		 price = price.substring(price.indexOf('￥') + 1,price.indexOf('.'));
		 price = parseInt(price);		
		 var sum_price = amount * price;		 
		 $(this).parents('.list_amount').next().find('.sum_price').text('￥' + sum_price);
		 $(this).prev().prev().css('color','#444');
	});

	 $("body").on('click',".reduce", function(){
		 var productid = $(this).attr('data-id');		 
		 var cart_num_change_data = {'userid':userid, 'checkstr':checkstr, 'productid':productid,'amount':1,'action':'dec'};
			 ajax_request_server("cart_num_change", cart_num_change_data, cart_num_change_callback);

		 var amount = parseInt($(this).next().val());
		 if(amount == 1){
			 $(this).css('color','#cbcbcb');
		 }
		 if(amount > 0){
			 amount--;
			 $(this).next().val(amount);
			 var price = $(this).parents('.list_amount').prev().find('.price').text();
			 price = price.substring(price.indexOf('￥') + 1,price.indexOf('.'));
			 price = parseInt(price);		
			 var sum_price = amount * price;		 
			 $(this).parents('.list_amount').next().find('.sum_price').text('￥' + sum_price);
		 } 
		 
	});	

	$("#submit").click(function(){
		var string = '['; // ["3682","3683"]
		
		
		$(".son_check").each(function(){
			if($(this).is(':checked')){
				var productid = $(this).attr('id');
				string += '"'+productid + '",';			
			}		
		});

		string = string.substring(0,string.length-1);
		string += ']';

		string = encodeURI(string);
		
		window.location.href='order_queren.php?productid='+string;
	})

// 	ajax_request_server("cart_add", {'userid':userid}, order_queren_callback);
	
	 		
});

function get_wait_pay_callback(res)
{
	console.log('春爱情呢');
	console.log(res);
	console.log('春爱情呢');
}
function allCheckbox(thisObj){
	console.log($(thisObj).val());
    if ($(thisObj).is(':checked')) {
        $(thisObj).next('label').addClass('mark');
    } else {
        $(thisObj).next('label').removeClass('mark');
    }
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
</html>
