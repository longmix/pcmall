<?php
    $the_title="详情页";
  require 'shop_header.php';
  
  $productid = $_GET['productid'];
  
  $mobile_product_url = 'http://yanyubao.tseo.cn/Home/Cata/xiangqing/productid/'.$productid.'.html';
  
  $mobile_product_qrcode_url = 'http://yanyubao.tseo.cn/openapi/SupplierData/string_to_qrcode?string='.urlencode($mobile_product_url);
  
?>
<!--全部商品分类-->
<!-- <div class="qbspfl"> -->
<!-- 	<div class="djfl"> -->
<!--     	全部商品分类 -->
<!--     </div> -->
<!--     <div class="morelist"> -->
<!--     	<a href="#">标题一</a> -->
<!--         <a href="#">标题一</a> -->
<!--         <a href="#">标题一</a> -->
<!--         <a href="#">标题一</a> -->
<!--         <a href="#">标题一</a> -->
<!--         <a href="#">标题一</a> -->
<!--     </div> -->
<!-- </div> -->
<!-- <script>

// $(function(){
// 	$("#banner_menu_wrap").mouseleave(function(){
// 		$(this).hide()
// 		$("#big_banner_wrap").hide()
// 		});
// 	$(".djfl").mouseenter(function(){
// 		$("#big_banner_wrap").show()
// 		$("#banner_menu_wrap").show()
// 		});	
// 	})
	
</script> -->

<style type="text/css">
.product_brief_text {
	font-size: 15px;
	color: #555;
	margin: 15px;
}

#product_brief_picture p img {
	max-width:100% !important;
}
</style>

<script src="js/daohang.js"></script>
<!--你当前位置 -->
<div class="nowweizhi">
	<span>当前的位置</span>
    <b>&gt;</b>
    <a>首页</a>
    <b>></b>
    <a>商品详情</a>
</div>
<!--商品展示区域-->
<div class="theshopshow">
	<!--left-->
        <!-- 延誉宝商品展示 -->
		<script src="js/163css.js"></script>
        <script src="js/lib.js"></script>
			<div id="preview">
				<div class=jqzoom id="spec-n1" onClick="window.open('/')"><IMG height="350" src="" jqimg="img/img04.jpg" width="350">
					</div>
					<div id="spec-n5">
						<div class=control id="spec-left">
							<img src="img/left.gif" />
						</div>
						<div id="spec-list">
							<ul class="list-h">
							<script id="template_product_picture" type="text/x-jquery-tmpl"> 
							
								<li class="caonima"><img class="product_picture" src="${picture}" style="border: 1px solid rgb(204, 204, 204); padding: 2px;"> </li>
							
							</script> 	
							</ul>
						</div>
						<div class=control id="spec-right">
							<img src="img/right.gif" />
						</div>
					</div>
				</div>
				<SCRIPT type=text/javascript>
					$(function(){			
						   $(".jqzoom").jqueryzoom({
								xzoom:400,
								yzoom:400,
								offset:10,
								position:"right",
								preload:1,
								lens:1
							});
							$("#spec-list").jdMarquee({
								deriction:"left",
								width:350,
								height:56,
								step:2,
								speed:4,
								delay:10,
								control:true,
								_front:"#spec-right",
								_back:"#spec-left"
							});
							$("#spec-list").on("mouseover","img", function(){
								var src=$(this).attr("src");
								console.log(this);
								$("#spec-n1 img").eq(0).attr({
									src:src.replace("\/n5\/","\/n1\/"),
									jqimg:src.replace("\/n5\/","\/n0\/")
								});
								$(this).css({
									"border":"2px solid #ff6600",
									"padding":"1px"
								});
							}).on("mouseout", "img", function(){
								$(this).css({
									"border":"1px solid #ccc",
									"padding":"2px"
								});
							});				
						})
				</SCRIPT>
			<!-- 延誉宝商品展示 End -->                               
	<!--right-->
    <div class="shoppnum" style="float:left; margin-left:16px;width:624px">
    	<!--n1-->
        <div class="shanpmai">
        	<h1 class="spdname" id="product_name"></h1>
            <div class="hotspeak">
            	全场免邮，满200-20,400-40，支持货到付款
            </div>
            <div class="shoujiap">
            	<span>商城价格</span>
                <i id="product_price"></i>
            </div>
            
<!--             <div class="chuxinxi"> -->
<!--             	<span>促销信息</span><i>满200.00减20.00，满400.00减40.00</i> -->
<!--             </div> -->
<!--             <div class="shoujigm"> -->
<!--             	<span>APP独享打折</span> -->
<!--                 <div class="sjapp">用手机购买 -->
<!--                 	<b><img src="img/延誉宝官网二维码.jpg"/></b> -->
<!--                 </div> -->
<!--             </div> -->
<!--             <div class="peisongzhi"> -->
<!--             	<span>配送至</span> -->
<!--                 <script src="js/city.js/cityJson.js"></script> -->
<!--                 <script src="js/city.js/citySet.js"></script> -->
<!--                 <script src="js/city.js/Popt.js"></script> -->
<!--                 <div class="choosecity"> -->
 <!--              	<input type="text" id="city" value="点击选择地区"/ style=" height:20px; font-size:12px; margin-top:5px; border:1px solid #cacace">
<!--                     <script type="text/javascript"> -->
<!--  						$("#city").click(function (e) {
// 						SelCity(this,e);
// 						});
<!--					</script> -->
<!--                 </div> -->
<!--               <span style=" font-weight:bold; color:#333">有货</span> -->
<!--                 <a href="#">支持货到付款</a> -->
<!--             </div> -->
<!--             <div class="xuanzcolor"> -->
<!--             	<span>选择颜色</span> -->
<!--                 <div class="morecolor"> -->
<!--                 	<ul> -->
<!--                     	<li><a href="#"><img src="img/56aec892N2f09760e.jpg!cc_60x76.jpg"/></a></li> -->
<!--                         <li><a href="#"><img src="img/56aec892N2f09760e.jpg!cc_60x76.jpg"/></a></li> -->
<!--                         <li><a href="#"><img src="img/56aec892N2f09760e.jpg!cc_60x76.jpg"/></a></li> -->
<!--                         <li><a href="#"><img src="img/56aec892N2f09760e.jpg!cc_60x76.jpg"/></a></li> -->
<!--                         <li><a href="#"><img src="img/56aec892N2f09760e.jpg!cc_60x76.jpg"/></a></li> -->
<!--                         <li><a href="#"><img src="img/56aec892N2f09760e.jpg!cc_60x76.jpg"/></a></li> -->
<!--                         <li><a href="#"><img src="img/56aec892N2f09760e.jpg!cc_60x76.jpg"/></a></li> -->
<!--                     </ul> -->
<!--                     <script> -->
<!-- // 						$(function(){ -->
<!-- // 							$(".morecolor ul li").click(function(){ -->
<!-- // 								$(this).css({border:"1px solid #f00"}).siblings().css({border:"none"}) -->
<!-- // 								}) -->
<!-- // 							$(".morecm ul li").click(function(){ -->
<!-- // 								$(this).css({border:"1px solid #f00"}).siblings().css({border:"1px solid #cacace"}) -->
<!-- // 								})	 -->
<!-- // 							}) -->
<!--                     </script> -->
<!--                 </div> -->
            
                <div class="choosecm">
                	<span>选择规格</span>
                    <div class="morecm">
                    	<ul id="template_sku_list">
                    	<script id="template_sku" type="text/x-jquery-tmpl">
                        	<li onclick="choosecm(this)"><a href="#">${option_name}</a></li>                            
						</script>
                        </ul>
                    </div>
                </div>
                
                
                <!--购买数量-->
                <div class="goumaijiajian">
                    <span>购买数量</span>
                    <input id="min" name="" type="button" value="-" / style=" width:30px; height:30px; font-size:18px; line-height:30px; color:#333; float:left; cursor:pointer">  
    <input id="text_box" name="" type="text" value="1" style="width:60px;height:30px; font-size:12px; text-align:center; float:left"/>  
    <input id="add" name="" type="button" value="+" / style=" width:30px; height:30px; font-size:15px; line-height:30px; color:#333; float:left; cursor:pointer">
				</div>
				<script>
					$(document).ready(function(){
					//获得文本框对象
					   var t = $("#text_box");
					//初始化数量为1,并失效减
					$('#min').attr('disabled',true);
						//数量增加操作
						$("#add").click(function(){    
							t.val(parseInt(t.val())+1)
							if (parseInt(t.val())!=1){
								$('#min').attr('disabled',false);
							}
						  
						}) 
						//数量减少操作
						$("#min").click(function(){
							t.val(parseInt(t.val())-1);
							if (parseInt(t.val())==1){
								$('#min').attr('disabled',true);
							}
						  
						})
					   
					});
					</script>
                 <!--加入购物车与收藏商品-->
                 <div class="joinspadsp">
                 	<a href="#" id="buying" style=" margin-left:67px">立即购买</a>
                 	
                 	 
                 	<a href="javascript:;" id="shopping" style=" margin-left:6px">加入购物车</a>
                 	
                    <!--
                    <a href="#" style=" margin-left:6px">收藏该商品</a>
                     -->
                     
                 </div>
                 <!--商品编号-->
                 <div class="shopbh">
                 	<span>商品编号</span>
                    <em id='skuno'>123456789</em>
                 </div> 
                 
                 <div class="shoujiap">
	            	<span>所属分类</span>
	                <i id="product_cataname" style="font-size: 14px;color: #333;"></i>
	            </div>  
                 
                 <div class="shoujiap">
	            	<span>商品来源</span>
	                <i id="seller_name" style="font-size: 14px;color: #333;"></i>
	            </div>  
                 
				<!--商品介绍 -->
                <div class="describe" style="margin-top:10px">
                	<span>商品简介</span>
                    <div class="morecm">
                    	<ul>
                    	<li id="template_brief" style="width:500px; margin-top:6px;color:#333;border:#fff"></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
        
        
    	
    	
    	<?php require 'config/detail_right_top.php'?>
            <!--上去下来的按钮-->
            <div class="ananniu shangfan" style=" background: url(img/__sprite.png) no-repeat 0 0; margin-left:70px"></div>
            <div class="ananniu xiafan" style=" background:url(img/__sprite.png) no-repeat -28px 0; margin-left:50px"></div>
        </div>
        <script>
		$(function(){
			var i=0
			var size=$(".lklksp ul li").size()
			$(".shangfan").click(function(){
				i++
				if(i==size-1){
					i=0;
					}
				$(".lklksp ul").animate({top:-i*218})
				})
			$(".xiafan").click(function(){
				i--
				if(i==-1){
					i=size-2
					}
				$(".lklksp ul").animate({top:-i*218})
				})
			})
        </script>
    </div>
</div>
<!--店长推荐-->
<div class="bosstuijian">
	<div class="bosstj">
    	<span>店长推荐</span>
    </div>
    <div class="bosstjsp">
    	<ul id="template_tuijian_list">
    	<script id="template_tuijian" type="text/x-jquery-tmpl">
    	<li>
            	<a href="detail.php?productid=${productid}">
                	<b style="">
					<img src="${picture}" /></b>
                    <h5 style="display: inline-block; white-space: nowrap;width: 100%; overflow: hidden; text-overflow:ellipsis;">${name}</h5>
                    <p style="display: inline-block; white-space: nowrap;width: 100%; overflow: hidden; text-overflow:ellipsis;">${brief}</p>
                    <span>&yen; ${price}</span>
            	</a>
               
        </li>
		</script>
<!--         	<li>
            	<a href="#">
                	<b><img src="img/chose1.png"/></b>
                    <h5>夏季短袖</h5>
                    <p>穿上它，让您冰凉一夏</p>
                    <span>299元</span>
            	</a>
                <a href="#" style=" display:block; width:100%; height:20px; font-size:12px; color:#666; line-height:20px; text-align:center" class="dyzydo">延誉宝自营店</a>
            </li>
			<li>
            	<a href="#">
                	<b><img src="img/chose1.png"/></b>
                    <h5>夏季短袖</h5>
                    <p>穿上它，让您冰凉一夏</p>
                    <span>299元</span>
            	</a>
                <a href="#" style=" display:block; width:100%; height:20px; font-size:12px; color:#666; line-height:20px; text-align:center" class="dyzydo">延誉宝自营店</a>
            </li>
            <li>
            	<a href="#">
                	<b><img src="img/chose1.png"/></b>
                    <h5>夏季短袖</h5>
                    <p>穿上它，让您冰凉一夏</p>
                    <span>299元</span>
            	</a>
                <a href="#" style=" display:block; width:100%; height:20px; font-size:12px; color:#666; line-height:20px; text-align:center" class="dyzydo">延誉宝自营店</a>
            </li>
             -->
        </ul>
    </div>
</div>

<!--商品介绍东西有点多-->
<div class="spjsmore" style="margin-bottom: 60px">
	<!--左-->
    <div class="theleftkz">
    	<div class="dpnames">
        	<a target="_blank" href="http://www.abot.cn/">大卖家通道</a>
        </div>
        <div class="intolkads">
        	<a target="_blank" href="http://www.abot.cn/yanyubaovip">套餐列表</a>
            <a target="_blank" href="http://www.abot.cn/category/cases">客户案例</a>
            <a target="_blank" href="http://www.abot.cn/category/products">产品展示</a>
            <a target="_blank" href="http://www.abot.cn/category/help">帮助文档</a>
        </div>
        <div class="nknzaizhao">
        	你可能在找
        </div>
        <div class="zaizdnr">
        	<ul id="template_shop_option_list">     
<!--             	<li><a href="#"></a></li>			 -->
            </ul>
<!--             <li><a href="#">window10</a></li> -->
<!--                 <li><a href="#">4g</a></li> -->
<!--                 <li><a href="#">gtx967</a></li> -->
<!--                 <li><a href="#">1T</a></li> -->
<!--                 <li><a href="#">机械键盘</a></li> -->
<!--                 <li><a href="#">背光键盘</a></li> -->
<!--                 <li><a href="#">游戏主机</a></li> -->
<!--                 <li><a href="#">显卡</a></li> -->
<!--                 <li><a href="#">高清大屏显示器</a></li> -->
<!--                 <li><a href="#">GTA5</a></li> -->
<!--                 <li><a href="#">专业音响</a></li> -->
        </div>
        <div id='cata_level2'>
        <script id="template_cata_level2" type="text/x-jquery-tmpl">
        <div class="xianguanfls">
            ${name}	
        </div>
        <div class="aboutflsnr">
        	<ul>
					{{each sub_cata}}
						<li><a href="#">${name}</a></li>
					{{/each}}
            </ul>
        </div>
        </script>
        </div>
<!--         <div class="xianguanfls"> -->
<!--         	其他相关分类 -->
<!--         </div> -->
<!--         <div class="aboutflsnr"> -->
<!--         	<ul> -->
<!--             	<li><a href="#">笔记本</a></li> -->
<!--                 <li><a href="#">超极本</a></li> -->
<!--                 <li><a href="#">游戏本</a></li> -->
<!--                 <li><a href="#">平板电脑</a></li> -->
<!--                 <li><a href="#">平板电脑配件</a></li> -->
<!--                 <li><a href="#">台式机</a></li> -->
<!--                 <li><a href="#">服务器</a></li> -->
<!--                 <li><a href="#">工作站</a></li> -->
<!--                 <li><a href="#">笔记本配件</a></li> -->
<!--                 <li><a href="#">一体机</a></li> -->
<!--                 <li><a href="#">网吧机</a></li> -->
<!--                 <li><a href="#">主板</a></li> -->
<!--             </ul> -->
<!--         </div> -->
        <div class="drxgs">
        	最新上架
        </div>
        <div class="drxgsp">
        	<ul id="template_baokuan_list">
        	<script id="template_baokuan" type="text/x-jquery-tmpl">
            	<li>
                	<a href="detail.php?productid=${productid}">
                    	<b>
                        	<img src="${picture}" style="width:190px"/>
                        </b>
                        <h5 style="display: inline-block; white-space: nowrap;width: 100%; overflow: hidden; text-overflow:ellipsis;">${name}</h5>
                        <p>&yen; ${price}</p>
                    </a>
                    
                </li>
			</script>
            </ul>
        </div>
    </div>
    <!--右-->
    <div class="therightnrs">
    	<div class="threespa">
            <ul>
                <li class="oncolors" mt-floors="1" mt-cts="1" id="spencals1">商品介绍</li>
                <!-- <li mt-floors="2" mt-cts="1" id="spencals2">商品评价<s>(1297)</s></li> -->
                <li mt-floors="2" mt-cts="1" id="spencals2">手机端下单</s></li>
                <li mt-floors="3" mt-cts="1" id="spencals3">售后保障</li>
                
            </ul>
        </div>
        <script>
		$(function(){
			/*控制商品详情、商品评价、售后保障的出现或消失*/
			$(".threespa ul li").mouseenter(function(){
				$(this).addClass("oncolors").siblings().removeClass("oncolors")
				})
			/*控制商品评价里面导航块的添加颜色或减去颜色*/	
			$(".quanbupinglun a").click(function(){
						$(this).addClass("nocolors").siblings().removeClass("nocolors")
						})	
			})
    	</script>
        <!--大容器里面放若干内容-->
        <div class="drqlmfrgnr" id="product_brief" style="padding-left:10px;">
       	
       		<!-- <div id="product_brief_text"></div> -->
       	
       		<!--商品详情-->
        	<div class="bigcakes c-1-1" id='product_brief_picture' style="text-align:left; width:600px;">
<!--             	<img src="img/57457e3bN79fa0a40.jpg"/> -->
<!--                 <img src="img/57457e3bN6a8921ca.jpg"/> -->
<!--                 <img src="img/57457e3dNdf3f408f.jpg"/> -->
<!--                 <img src="img/57457e3eN2208b681.jpg"/> -->
<!--                 <img src="img/rBEhVFG6bEkIAAAAAAA5Uh-hG5AAAANUALXii0AADlq961.jpg"/> -->
<!--                 <img src="img/566b7a7aN406c5e49.jpg"/> -->
<!--                 <img src="img/56af03e5N1eecb9d5.jpg"/> -->
<!--                 <img src="img/56808a80N3df0450b.jpg"/> -->
            </div>
            
        	<!--售后保障-->
            <div class="bigcakes c-3-1">
            	<div class="maijiacnqs">
                	<span>卖家承诺</span>
                    <p><?php echo $basic_config['shop_name'];?>销售并发货的商品，由平台卖家提供发票和相应的售后服务。请您放心购买！
注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若<?php echo $basic_config['shop_name'];?>没有及时更新，请大家谅解！</p>
                </div>
                <div class="maijiacnqs">
                	<span><?php echo $basic_config['shop_name'];?>承诺</span>
                    <p><?php echo $basic_config['shop_name'];?>向您保证所售商品均为正品行货，<?php echo $basic_config['shop_name'];?>自营商品开具机打发票或电子发票。</p>
                </div>
                <div class="maijiacnqs">
                	<span>全国联保</span>
                    <p>凭质保证书及<?php echo $basic_config['shop_name'];?>发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由<?php echo $basic_config['shop_name'];?>联系保修，享受法定三包售后服务），与您亲临商场选购的商品享受相同的质量保证。<?php echo $basic_config['shop_name'];?>还为您提供具有竞争力的商品价格和运费政策，请您放心购买！ 

注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若<?php echo $basic_config['shop_name'];?>没有及时更新，请大家谅解！</p>
                </div>
                <div class="maijiacnqs">
                	<span>无忧退换货</span>
                    <p>客户购买<?php echo $basic_config['shop_name'];?>自营商品7日内（含7日，自客户收到商品之日起计算），在保证商品完好的前提下，可无理由退货。（部分商品除外，详情请见各商品细则）</p>
                </div>
                <div class="maijiacnqs">
                	<span>权利声明</span>
                    <p><?php echo $basic_config['shop_name'];?>上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是京东重要的经营资源，未经许可，禁止非法转载使用。<br>

注：本站商品信息均来自于合作方，其真实性、准确性和合法性由信息拥有者（合作方）负责。本站不提供任何保证，并不承担任何法律责任。</p>
                </div>
                <div class="maijiacnqs">
                	<span>价格说明</span>
                    <p><strong>销售价：</strong>为商品支付时候的价格，是您最终决定是否购买商品的依据。<br>

<strong>划线价：</strong>商品展示的划横线价格为参考价，该价格可能是品牌专柜标价、商品吊牌价或由品牌供应商提供的正品零售价（如厂商指导价、建议零售价等）或该商品在京东平台上曾经展示过的销售价；由于地区、时间的差异性和市场行情波动，品牌专柜标价、商品吊牌价等可能会与您购物时展示的不一致，该价格仅供您参考。
折扣：如无特殊说明，折扣指销售商在原价、或划线价（如品牌专柜标价、商品吊牌价、厂商指导价、厂商建议零售价）等某一价格基础上计算出的优惠比例或优惠金额；如有疑问，您可在购买前联系销售商进行咨询。<br>

<strong>异常问题：</strong>商品促销信息以商品详情页“促销”栏中的信息为准；商品的具体售价以订单结算页价格为准；如您发现活动商品售价或促销信息有异常，建议购买前先联系销售商咨询。</p>
                </div>
            </div>
            
        	<!--商品评价 ==替换为移动端的二维码，暂时没有读取评价 接口  -->
        	<div class="bigcakes c-2-1">
        		
        		<div class="maijiacnqs">
                	<span>扫码直接下单</span>
                	
                    <p>拿出手机扫一扫直接下单
                    	<br /><img style="width: 150px;" src="<?php echo $mobile_product_qrcode_url; ?>" />
                    
                    </p>
                </div>
                
                
                
        	</div>
        	
        	<!--商品评价-->
            <div class="bigcakes c-2-1--0" style="display:none;">
            	<!--对该商品的综合评分-->
                <div class="duigaispdzhpfs">
                	<!--left-->
                    <div class="goodhpd">
                    	<span><i>99</i>%</span>
                        <p>好评度</p>
                    </div>
                    <!--right-->
                    <div class="haopingjdts">
                    	<!--好评-->
                        <div class="gdpjbf">
                        	<em>好评<i>99%</i></em>
                            <span>
                            	<p style=" width:50%"></p>
                            </span>
                        </div>
                        <!--中评-->
                        <div class="gdpjbf">
                        	<em>好评<i>99%</i></em>
                            <span>
                            	<p style=" width:50%"></p>
                            </span>
                        </div>
                        <!--差评-->
                        <div class="gdpjbf">
                        	<em>好评<i>99%</i></em>
                            <span>
                            	<p style=" width:50%"></p>
                            </span>
                        </div>
                        <!--差评结束-->
                    </div>
                    <!--right结束-->	
                </div>
                <!--评分结束-->
            	<div class="quanbupinglun">
                	<a href="#" class="nocolors" mt-floord="1" mt-ctd="1">全部评论<em>(1010)</em></a>
                    <a href="#" mt-floord="2" mt-ctd="1">好评<em>(600)</em></a>
                    <a href="#" mt-floord="3" mt-ctd="1">中评<em>(300)</em></a>
                    <a href="#" mt-floord="4" mt-ctd="1">差评<em>(10)</em></a>
                </div>
                <!--这个容器里面放了全部评论、好评、中评、差评、-->
                <div class="qbpltyf123">
                <!--全部评论-->
                	<div class="smallcake d-1-1" style="display:block">
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->    
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat -17px 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat -34px 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat -51px 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat -68px 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat -82px 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    
                    </div>
                <!--好评-->
                	<div class="smallcake d-2-1">
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    </div>
                <!--中评-->
                	<div class="smallcake d-3-1">
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    </div>
                <!--差评-->
                	<div class="smallcake d-4-1">
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    <!--一条评论开始-->
                    	<div class="thepcpls">
                        <!--左-->
                        	<div class="zuileftop">
                            	<!--改变星级只需要改" no-repeat X 0"里面的X即可，一次是17像素-->
                            	<div class="thstar" style=" background:url(img/commentsListIcons1.png) no-repeat 0 0"></div>
                                <div class="shdltpl">收货1天后评论</div>
                                <div class="shdplsj">2016-6-6&nbsp;16:28</div>
                            </div>
                        <!--中-->
                        	<div class="zuicenterop">
                            	尺码标准，面料舒适，买给爸爸的，穿上很合身，非常感谢卖家诚信善良用心经营店铺，全5分支持!值得推荐购买！
                            </div>
                        <!--右-->
                        	<div class="zuirightop">
                            	<div class="touxadmz">
                                	<b>
                                    	<img src="img/touxiang.png"/>
                                    </b>
                                    <em>小******明</em>
                                </div>
                                <div class="zgrsndra">山东</div>
                            </div>
                            <!--购买的商品信息-->
                            <div class="gmdspxinxisz">
                                <a href="#">商品的名字什么商品</a>
                                <em>9999元</em>
                            </div>
                        </div>
                    <!-- 一条评论结束-->
                    </div>
                <!--差评结束-->
                </div>
            </div>    
        </div>
        
        <script>
		/*控制商品详情、商品评价、售后保障的出现或消失*/
		$(function(){
				$(".c-1-1").show();
				$(".c-2-1").hide();
				$(".c-3-1").hide();

				
				$(".threespa ul li").mouseenter(function(){
					var frs=$(this).attr("mt-floors");
					var cats=$(this).attr("mt-cts");
					$(".c-"+frs+"-"+cats+"").show().siblings().hide();
				})
				
				/*这个有点特殊*/
				$("#spencals1").mouseenter(function(){
					$(".c-1-1").show();
					//$(".c-2-1").show();
					//$(".c-3-1").show();
					})
				$("#spencals2").mouseenter(function(){
					$(".c-2-1").show();
					//$(".c-3-1").show();
					})
				$("#spencals3").mouseenter(function(){
					$(".c-3-1").show();
					//$(".c-2-1").show();
					})		
					
				/*控制全部评论、好评、中评、差评的块的出现或消失*/
				$(".quanbupinglun a").click(function(){
					var frd=$(this).attr("mt-floord");
					var catd=$(this).attr("mt-ctd");
					$(".d-"+frd+"-"+catd+"").show().siblings().hide();
				})
		})
        </script>
        <!--这里一切测试正常，现在我去掉容器里面各个div的颜色-->
    </div>
    
</div>
<!--页脚-->
<!--footer-->
<?php require 'shop_footer.php'?>
<script>
function ajax_request_server_callback(res){
	if(!res.data){
		return;
	}

	
	$('#product_name').text(res.data.name);
	$('#product_price').html('&yen;'+res.data.price);

	if(res.data.ad_flag_txt){
		$('.hotspeak').html(res.data.ad_flag_txt);
	}
	else{
		$('.hotspeak').html('&nbsp;');
	}
	
	
	$('#seller_name').text(res.data.seller_name);
	$('#product_cataname').text(res.data.cataname);


	
// 	$('.product_picture').attr('src',res.data.picture);



// 	var pictures = res.data.pictures;
// 	for(var i=0 ; i < pictures.length; i++)
// 	 {
// 		$('.list-h').append('<li><img class="product_picture" src="'+res.data.pictures[i].picture+'"> </li>');
// 	 }
// 	if(res.data.sku_list)
	
	if (res.data.sku_list) {
// 		res.data.sku_list.shift();
		$('#template_sku').tmpl(res.data.sku_list).appendTo('#template_sku_list');
	} else {
		$('.choosecm').hide();
	}

	//商品介绍
	$('#template_brief').append(res.data.brief);
	
	var skuno = res.data.skuno;
	skuno ? $('#skuno').text(skuno) : $('.shopbh').hide();
	
	$('#spec-n1 img').attr('src',res.data.picture);
	$('#spec-n1 img').attr('jqimg',res.data.picture);
	$('.list-h').css('width', '');
	$('#template_product_picture').tmpl(res.data.pictures).appendTo('.list-h');
	//$('#product_brief').prepend(res.data.brief);
	$('#product_brief_text').html(res.data.brief);
	$('#product_brief_picture').append(res.data.describe);
// 	
	
}
function addcart_callback(res){
	
	console.log(res)
	 if(res.code == 1){
		//alert(res.msg);
	}
	alert(res.msg) 
} 

function product_cata_supplier_callback(res)
{
	//商品的一级分类
	console.log('====>>>>', res.data);
	
	$('#template_cata_list').tmpl(res.data).appendTo('#banner_menu_wrap');
	//$('#template_tuijian').tmpl(res.data).appendTo('#product_brief_text');
 	
}

//店长推荐
function product_tuijian_list_callback(code, counter, product_list)
{	
	console.log('====222222222222===>>>>', product_list);
	
	$('#template_tuijian').tmpl(product_list).appendTo('#template_tuijian_list');
}


//你可能在找
function get_shop_option_list_callback(res)
{
	for (key in res.hot_keywords) {
		$('#template_shop_option_list').append('<li><a href="list.php?keyword='+encodeURI(encodeURI(res.hot_keywords[key]))+'">'+res.hot_keywords[key]+'</a></li>')
	}
}



//左侧分类
function get_product_cata_level2_callback(res)
{
	$('#template_cata_level2').tmpl(res.data).appendTo('#cata_level2');
}

//热门
function product_baokuan_list_callback(code, counter, product_list){
	console.log('dsfsdfsdfsdfsdf');
	console.log(product_list);
	$("#template_baokuan").tmpl(product_list).appendTo('#template_baokuan_list');
	console.log('dsfsdfsdfsdfsdf');
};


//选择规格
function choosecm(thisObject){
	$(thisObject).css({"background":"#f00"});
	$(thisObject).children().css({"color":"#fff"});
	$(thisObject).siblings().css({"background":"#fff"});
	$(thisObject).siblings().children().css({"color":"#666"});
}

$(function () {

 
	
	 var GET = $.urlGet();
	
	var productid = GET['productid'];

	console.log(productid);

	var function_name = "product_detail";
	
	var request_data = {'productid':productid}; 
	
	 //商品详情
	   ajax_request_server(function_name, request_data,ajax_request_server_callback);
	 
	 //加入购物车
	
	$("#shopping").click(function(){
		
		var loginItem = get_login_info();//获取登录信息 
		
		if(!loginItem){
			location.href = "http://yanyubao.tseo.cn/yanyubao_server/index.php?m=Interface&a=user_login&ret_url="+window.location.href+"&refresh_token=on";
			return;
		}

		var userid = loginItem.userid;
		
		var checkstr = loginItem.checkstr; 
		
		var function_add_name = "cart_add";
		
		var amount = $("#text_box").val();
		
		var request_add_data = {'sellerid':sellerid,'userid':userid,'checkstr':checkstr,'productid':productid,'amount':amount};
		
		ajax_request_server(function_add_name, request_add_data, addcart_callback);
	})
	
	$("#buying").click(function(){
		var amount = $("#text_box").val();
		location.href = "http://yanyubao.tseo.cn/Market/order_queren.html?buynow_direct_amount="+amount+"&buynow_direct_pid="+productid

		})


	//var function_name = "product_cata_supplier";
	//ajax_request_server(function_name, request_data, product_cata_supplier_callback);

	get_product_tuijian_list({'page': 1, 'page_num': 7}, product_tuijian_list_callback);

	get_product_baokuan_list({'page': 1}, product_baokuan_list_callback);
	
	ajax_request_server('product_cata_level2', {}, get_product_cata_level2_callback);


	
	ajax_request_server('get_shop_option', {}, get_shop_option_list_callback);

// 	var GET = $.urlGet();
// 	var productid = GET['productid'];
// 	var data = {'productid':productid};
//  	get_product_list(data, product_detail_callback);
	
});
</script>
</body>
</html>	    
    
			
			
    
                    
			
    
					
				
				

                    	
                        
                            
                
						
        