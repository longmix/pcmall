<?php
  $the_title="首页";
  require 'shop_header.php';
  
?>
 

<script type="text/javascript" src="js/order_detail.js"></script>
<script type="text/javascript" src="js/unslider.min.js"></script>

  
 <!--收货地址部分开始-->  
 <div class="border_top_cart" style="border-top:0;">
  <script type="text/javascript">
    var checkoutConfig={
        addressMatch:'common',
        addressMatchVarName:'data',
        hasPresales:false,
        hasBigTv:false,
        hasAir:false,
        hasScales:false,
        hasGiftcard:false,
        totalPrice:244.00,
        postage:10,//运费
        postFree:true,//活动是否免邮了
        bcPrice:150,//计算界值
        activityDiscountMoney:0.00,//活动优惠
        showCouponBox:0,
        invoice:{
            NA:"0",
            personal:"1",
            company:"2",
            electronic:"4"
        }
    };
    var miniCartDisable=true;
</script>
<div class="container">
    <div class="checkout-box">
        <form  id="checkoutForm" action="#" method="post">
            <div class="checkout-box-bd">
                    <!-- 地址状态 0：默认选择；1：新增地址；2：修改地址 -->
                <input type="hidden" name="Checkout[addressState]" id="addrState"   value="0">
                <!-- 收货地址 -->
                <div class="xm-box">
                    <div class="box-hd ">
    <h2 class="title">收货地址</h2>
    <!---->
</div>
<div class="box-bd">
    <div class="clearfix xm-address-list" id="checkoutAddrList">
    	<div id="address_list">
    		<script id="template_address" type="text/x-jquery-tmpl">
	          <dl class="item" >
	            <dt>
	                <strong class="itemConsignee" id="name">${name}</strong>
	                                <span class="itemTag tag">{{if is_default == 1}}默认{{else}}备选{{/if}}</span>
	                            </dt>
	            <dd>
	                <p class="tel itemTel" id="phone">${mobile}</p>
	                <p class="itemRegion" id="address">${address}</p>
	<!--                 <p class="itemStreet">民丰西苑82号202室(214045)</p> -->
	                                                        <span class="edit-btn J_editAddr">编辑</span>
	                                                                </dd>
	            <dd style="display:none">
	                <input type="radio" name="Checkout[address]" class="addressId"  value="10140916720030323">
	            </dd>
	         </dl>
			</script>
        </div>
        
                        <div class="item use-new-addr"  id="J_useNewAddr" data-state="off">
<!--              <span class="iconfont icon-add"><img src="images/add_cart.png" /></span>  -->
<!--             <a href="dizhiguanli.php" target="block">更换地址</a> -->
                        <div id="changeaddress">更换地址</div>
            <img style="width:50%;display:none;" alt="" src="images/changeaddress.png">
        </div>
            </div>
        <input type="hidden" name="newAddress[type]" id="newType" value="common">
    <input type="hidden" name="newAddress[consignee]" id="newConsignee">
    <input type="hidden" name="newAddress[province]" id="newProvince">
    <input type="hidden" name="newAddress[city]" id="newCity">
    <input type="hidden" name="newAddress[district]" id="newCounty">
    <input type="hidden" name="newAddress[address]" id="newStreet">
    <input type="hidden" name="newAddress[zipcode]" id="newZipcode">
    <input type="hidden" name="newAddress[tel]" id="newTel">
    <input type="hidden" name="newAddress[tag_name]" id="newTag">
    <!--点击弹出新增/收货地址界面start-->
    <div class="xm-edit-addr-box" id="J_editAddrBox">
        <div class="bd">
            <div class="item">
                <label>收货人姓名<span>*</span></label> 
                <input type="text" name="userAddress[consignee]" id="Consignee" class="input" placeholder="收货人姓名" maxlength="15" autocomplete='off'>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>联系电话<span>*</span></label> 
                <input type="text" name="userAddress[tel]" class="input" id="Telephone" placeholder="11位手机号" autocomplete='off'>
                <p class="tel-modify-tip" id="telModifyTip"></p>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>地址<span>*</span></label>
                <select name="userAddress[province]" id="Provinces" class="select-1">
                    <option>省份/自治区</option>
                </select>
                <select name="userAddress[city]"  id="Citys" class="select-2" disabled>
                    <option>城市/地区/自治州</option>
                </select>
                <select name="userAddress[county]"  id="Countys" class="select-3" disabled>
                    <option>区/县</option>
                </select>
                <textarea   name="userAddress[street]" class="input-area" id="Street" placeholder="路名或街道地址，门牌号"></textarea>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>邮政编码<span>*</span></label> 
                <input type="text" name="userAddress[zipcode]" id="Zipcode" class="input" placeholder="邮政编码"  autocomplete='off'>
                <p class="zipcode-tip" id="zipcodeTip"></p>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>地址标签<span>*</span></label> 
                <input type="text" name="userAddress[tag]" id="Tag" class="input" placeholder='地址标签：如"家"、"公司"。限5个字内'  >
                <p class="tip-msg tipMsg"></p>
            </div>
        </div>
        <div class="ft clearfix">
            <button  type="button"  class="btn btn-lineDake btn-small " id="J_editAddrCancel">取消</button>
             <button type="button" class="btn btn-primary  btn-small " id="J_editAddrOk">保存</button>
        </div>
    </div>
    <!--点击弹出新增/收货地址界面end-->
    <div class="xm-edit-addr-backdrop" id="J_editAddrBackdrop"></div>
</div>                </div>
                <!-- 收货地址 END-->
                <div id="checkoutPayment">
                    <!-- 支付方式 -->
                                <div class="xm-box">
                <div class="box-hd ">
                    <h2 class="title">支付方式</h2>
                </div>
                <div class="box-bd">
                
                    <ul id="checkoutPaymentList" class="checkout-option-list clearfix J_optionList">
                 
                          <script id="template_payment" type="text/x-jquery-tmpl">
                           <li class="item selected payment" style="{{if payment_type==3}}border-color:#f00;{{/if}}">
                            <input type="checkbox" name="Checkout[pay_id]" value="1">
                            <p>
                              ${payment_name}<span></span>
                            </p>
                        	</li>
						</script>
                    </ul>
				
                </div>
            </div>
            <!-- 支付方式 END-->
                </div>

            </div>
            <div class="checkout-box-ft">
                 <!-- 商品清单 -->
                <div id="checkoutGoodsList" class="checkout-goods-box">
                                    <div class="xm-box">
                    <div class="box-hd">
                        <h2 class="title">确认订单信息</h2>
                    </div>
                    <div class="box-bd">
                        <dl class="checkout-goods-list">
                            <dt class="clearfix">
                                <span class="col col-1">商品名称</span>
                                <span class="col col-2">购买价格</span>
                                <span class="col col-3">购买数量</span>
                                <span class="col col-4">小计（元）</span>
                            </dt>
                            <script id="template_checkout_goods" type="text/x-jquery-tmpl">
                                                        <dd class="item clearfix">
                                <div class="item-row">
                                    <div class="col col-1">
                                        <div class="g-pic">
                                            <img src="${picture}" srcset="" width="40" height="40" />
                                        </div>
                                        <div class="g-info">
                                           <a href="#">${name}</a>
										</div>
                                    </div>
                
                                    <div class="col col-2">${price}元</div>
                                    <div class="col col-3">${amount}</div>
                                    <div class="col col-4">${price_total}元</div>
                                </div>
                            </dd>
					</script>
                                                        
                                                    </dl>
                        <div class="checkout-count clearfix">
                            <div class="checkout-count-extend xm-add-buy">
                                <h3 class="title">会员留言</h2></br>
                                <input type="text" />

                            </div>
                            <!-- checkout-count-extend -->
                            <div class="checkout-price">
                                <ul>

                                    <li>
                                       订单总额：<span id="all-price">244元</span>
                                    </li>
                                    <li>
                                        活动优惠：<span>-0元</span>
                                        <script type="text/javascript">
                                            checkoutConfig.activityDiscountMoney=0;
                                            checkoutConfig.totalPrice=244.00;
                                        </script>
                                    </li>
                                    <li>
                                        优惠券抵扣：<span id="couponDesc">-0元</span>
                                    </li>
                                    <li>
                                        运费：<span id="traffic-price">1元</span>
                                    </li>
                                </ul>
                                <p class="checkout-total">应付总额：<span><strong id="pay-price">244</strong>元</span></p>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>

    <!--S 加价购 产品选择弹框 -->
                <div class="modal hide modal-choose-pro" id="J_choosePro-664">
                <div class="modal-header">
                    <span class="close" data-dismiss='modal'><i class="iconfont">&#xe617;</i></span>
                    <h3>选择产品</h3>
                    <div class="more">
                        <div class="xm-recommend-page clearfix">
                            <a class="page-btn-prev   J_carouselPrev iconfont" href="javascript: void(0);">&#xe604;</a><a class="page-btn-next  J_carouselNext iconfont" href="javascript: void(0);">&#xe605;</a>
                        </div>
                    </div>
                </div>
                <div class="modal-body J_chooseProCarousel">
                    <div class="J_carouselWrap modal-choose-pro-list-wrap">
                        <ul class="clearfix J_carouselList">
                                                    </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-disabled J_chooseProBtn">加入购物车</a>
                </div>
            </div>
                <!--E 加价购 产品选择弹框 -->
    
    <!--S 保障计划 产品选择弹框 -->
    
    
                </div>
                <!-- 商品清单 END -->
                <input type="hidden"  id="couponType" name="Checkout[couponsType]">
                <input type="hidden" id="couponValue" name="Checkout[couponsValue]">
                <div class="checkout-confirm">
                    
                     <a href="#" class="btn btn-lineDakeLight btn-back-cart">返回购物车</a>
                     <input type="button" class="btn btn-primary" value="立即下单" id="checkoutToPay" />
                                     </div>
            </div>
        </div>

    </form>

</div>
<!-- 禮品卡提示 S-->
    <div class="modal hide lipin-modal" id="lipinTip">
        <div class="modal-header">
            <h2 class="title">温馨提示</h2>
            <p> 为保障您的利益与安全，下单后礼品卡将会被使用，<br>
 且订单信息将不可修改。请确认收货信息：</p>
        </div>
        <div class="modal-body">
            <ul>
                <li><strong>收&nbsp;&nbsp;货&nbsp;&nbsp;人：</strong><span id="lipin-uname"></span></li>
                <li><strong>联系电话：</strong><span id="lipin-uphone"></span></li>
                <li><strong>收货地址：</strong><span id="lipin-uaddr"></span></li>
            </ul>
        </div>
        <div class="modal-footer">
            <span class="btn btn-primary" id="useGiftCard">确认下单</span><span class="btn btn-dakeLight" id="closeGiftCard">返回修改</span>
        </div>
    </div>
<!--  禮品卡提示 E-->
<!-- 预售提示 S-->
    <div class="modal hide yushou-modal" id="yushouTip">
        <div class="modal-body">
            <h2>请确认收货地址及发货时间</h2>
            <ul class="list">
                <li>
                    <strong>请确认配送地址，提交后不可变更：</strong>
                    <p id="yushouAddr"> </p>
                    <span class="icon-common icon-1"></span>
                </li>
                <li>
                    <strong>支付后发货</strong>
                    <p>如您随预售商品一起购买的商品，将与预售商品一起发货</p>
                    <span class="icon-common icon-2"></span>
                </li>
                <li>
                    <strong>以支付价格为准</strong>
                    <p>如预售产品发生调价，已支付订单价格将不受影响。</p>
                    <span class="icon-common icon-3"></span>
                </li>
            </ul>
        </div>
        <div class="modal-footer">
                <p id="yushouOk" class="yushou-ok">
                    <span class="icon-checkbox"><i class="iconfont">&#xe626;</i></span>
                    我已确认收货地址正确，不再变更</p>
                <span class="btn btn-lineDakeLight" data-dismiss="modal">返回修改地址</span>    
                <span class="btn btn-primary" id="yushouCheckout">继续下单</span>
                
            </div>
    </div>
<!--  预售提示 E-->

<script id="newAddrTemplate" type="text/x-dot-template">
        <dl class="item selected" data-isnew="true" data-consignee="{{=it.consignee}}" data-tel="{{=it.tel}}" data-province="{{=it.province}}" data-provincename="{{=it.provinceName}}" data-city="{{=it.city}}" data-cityname="{{=it.cityName}}" data-county="{{=it.county}}" data-countyname="{{=it.countyName}}" data-zipcode="{{=it.zipcode}}" data-street="{{=it.street}}" data-tag="{{=it.tag}}">
            <dt>
                <strong class="itemConsignee">{{=it.consignee}}</strong>
                {{? it.tag }}
                    <span  class="itemTag tag">{{=it.tag}}</span>
                {{?}}
            </dt>
            <dd>
                <p class="tel itemTel">{{=it.tel}}</p>
                <p  class="itemRegion">{{=it.provinceName}} {{=it.cityName}} {{=it.countyName}}</p>
                <p  class="itemStreet">{{=it.street}} ({{=it.zipcode}})</p>
                <span class="edit-btn J_editAddr">编辑</span>
            </dd>
        </dl>
</script>


<!-- 保险弹窗 -->
<!-- 保险弹窗 -->


        

    <script src="js/base.min.js"></script>

        <script type="text/javascript" src="js/address_all.js"></script>
<script type="text/javascript" src="js/checkout.min.js"></script> 
</div>
 
 <!--收货地址body部分结束-->
    
    
    
    <!-- 底部 -->
    <div class="promise_box">
    	<div class="w">
    		<ul>
        		<li><img src="images/promise_img01.jpg"><span>365天不打烊</span></li>
        		<li><img src="images/promise_img02.jpg"><span>无理由退换货</span></li>
        		<li><img src="images/promise_img03.jpg"><span>担保交易</span></li>
        		<li><img src="images/promise_img04.jpg"><span>先行赔付</span></li>
        		<li><img src="images/promise_img05.jpg"><span>支持定制</span></li>
        	</ul>
    	</div>
    </div>
    
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <script src="js/unslider.min.js" type="text/javascript"></script>
    <script src="js/index.js" type="text/javascript"></script>
 
 
 
 
 
 
 
 
<!--页脚-->
<!--footer-->
<?php require 'shop_footer.php'?>
<script type="text/javascript" src="http://yanyubao.tseo.cn/api/shopapp.js"></script>
<script type="text/javascript" src="http://yanyubao.tseo.cn/Tpl/static/jquery.tmpl.js"></script>
<script type="text/javascript"> 
function order_queren_callback(res)
{
// 	$("#name").text(res.address.name);
// 	$("#address").text(res.address.address);
// 	$("#phone").text(res.address.mobile);
	$("#all-price").text(res.all_price+'元');
	$("#traffic-price").text(res.traffic_price+'元');
	$("#pay-price").text(res.pay_price+'元');
	
	console.log('sdfsdfsdfsdf');
	console.log(res);
	console.log('jiuxing0');
	$('#template_checkout_goods').tmpl(res.orderlist).appendTo('.checkout-goods-list');
	console.log('jiuxing');
}

//支付方式
function payment_type_list_callback(res)
{
	$('#template_payment').tmpl(res.data).appendTo('#checkoutPaymentList');
}


//地址
function address_list_callback(res)
{
	console.log('ddddd');
	console.log(res);
	console.log('ddddd');
	
	$('#template_address').tmpl(res.addressList).appendTo('#address_list');
	
}

function order_queren_callback2(res)
{

	var userid = loginItem.userid;
	var checkstr = loginItem.checkstr;
	console.log('111111111111111111111111111111');
	console.log(res);
	ajax_request_server("order_add", {'userid':userid,'checkstr':checkstr,'all_price':res.all_price,'traffic_price':res.traffic_price},address_list_callback);
}

$(function() { 

	var GET = $.urlGet();
	var userid = loginItem.userid;
	var checkstr = loginItem.checkstr;

	var productid_str = GET['productid'];
	var request_data = {'sellerid':sellerid,'productid': productid_str,'userid':userid,'checkstr':checkstr};
 	ajax_request_server("order_queren", request_data, order_queren_callback);

 	ajax_request_server("payment_type_list", {}, payment_type_list_callback);

 	$('#changeaddress').click(function(){
		$(this).next().css('display','inline');
		
 	})
 	
 	
 	$("body").on('click', '.payment', function(){
 	 	$(this).css('border-color','#f00');
 	 	$(this).siblings().css('border-color','#dfdfdf');
 	 	
 	 	$(this).siblings().find('input').removeAttr('checked');
 	 	$(this).find('input').attr('checked','true');
 	 })

 	 $("#checkoutToPay").click(function(){
 		$('.payment').each(function(){ 						
 	 		if($(this).find('input').is(':checked')){
 	 			console.log($(this).find('input').is(':checked')); 	 		
 	 		}	
 	 	}) ;

  		var request_data = {'sellerid':sellerid,'productid': productid_str,'userid':userid,'checkstr':checkstr};
  	 	ajax_request_server("order_queren", request_data, order_queren_callback2);
 		//ajax_request_server("order_add",{'userid':userid,'checkstr':checkstr},order_add_callback);  

 		
  	 })

  	ajax_request_server("address_list", {'userid':userid,'checkstr':checkstr},address_list_callback);

  	 
});
function order_add_callback(res){
	concole.log(res);
	concole.log('ddddddddddd');
}
</script> 
	

	
	

	





