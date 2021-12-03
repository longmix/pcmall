<?php
  $the_title="首页";
  require 'shop_header.php';
  
?>
 
<div id="big_banner_pic_wrap">
	<div class="swiper-container" id="swiper-container">
    <div class="swiper-wrapper"  id="swiper">
     <script type="text/x-jquery-tmpl" id="template_lunbo">
          		<div class="swiper-slide"> 
                 	<a href="${url}" target="_blank"><img src="${image}"></a>

          		</div> 


  	</script> 
  		<!-- <div class="swiper-slide"><img src="http://yanyubao.tseo.cn/uploads/2018/03/01/5a97a2938f139.png"/></div> -->
<!--   		<div class="swiper-slide"><img src="http://yanyubao.tseo.cn/uploads/2018/03/01/5a97a24ce9bd2.jpg"/></div> -->
<!--   	<div class="swiper-slide">大大地1</div> -->
<!--   	<div class="swiper-slide">大大地2</div> -->
<!--   	<div class="swiper-slide">大大地3</div> -->
    </div>
    <!-- Add Pagination -->
<!--     <div class="swiper-pagination"></div> -->  
</div>

	<div id="big_banner_change_wrap">
		 <div id="big_banner_change_prev"> &lt;</div>
		 <div id="big_banner_change_next">&gt;</div>
	</div>
 </div>
 <script src="js/daohang.js"></script>
 
 <?php 
 require 'config/index_quick_nav.php';
 ?>
 
<!--一个推荐商品的轮播-->
<div class="kongzhianniu" style="height: 300px;">
<div class="lunbobanner">
	<ul class="lunboimg">

    
    	<li id="baokuan_list" style="height: 300px; overflow:hidden">
    	<!--热卖  -->
	    	<script id="template_baokuan" type="text/x-jquery-tmpl">
        	 <a href="detail.php?productid=${productid}" style="height: 300px">
            	<b style=""><img src="${picture}"/></b>
                    <h5 style="display: inline-block; white-space: nowrap;width: 100%; overflow: hidden; text-overflow:ellipsis;">${name}</h5>
                    <p style="display: inline-block; white-space: nowrap;width: 100%; overflow: hidden; text-overflow:ellipsis;">${brief}</p>
                    <span style="color: #f00; text-align: left; font-size: 13px">${price}元</span>
             </a>
		   </script>           
        </li>


        <li id="tuijian_list" style="height: 300px; overflow:hidden">
       <!--推荐 -->
       <script id="template_tuijian" type="text/x-jquery-tmpl">
        	<a href="detail.php?productid=${productid}" style="height: 300px;">
            	<b style=""><img src="${picture}"/></b>
                    <h5 style="display: inline-block; white-space: nowrap;width: 100%; overflow: hidden; text-overflow:ellipsis;">${name}</h5>  
                    <span style="color: #f00; text-align: left; font-size: 13px">${price}元</span>
            </a>
		</script>
        </li>
        
    </ul>
</div>    
	<div class="btnl"><</div>
    <div class="btnr">></div>
    <h4 class="guanfangremai">官方热卖</h4>
</div>
<!--其它商品-->
<div class="dy17" id="qwe">
	<!--商品分类-->
	<script id="template_product_list2" type="text/x-jquery-tmpl">
	<div class="dy18" id="fzxba">	 
    	<div class="dy20">
        	<h3><a href="index.php?cataid=${cataid}">${name}</a></h3>
            <div class="xxddh">
			{{each sub_cata}}
            	<a href="javascript:void(0)" onclick="get_product_by_cataid(${cataid}, this)" class="cate a-1-list08"  mt-floor="1"  mt-ct="list08">${name}</a>
            {{/each}}  
				<input type="hidden" value="${cataid}"/>
            </div>
        </div>
        <div class="dy21">
        	<div class="dy22">
            	<div class="dy24"><a href="list.php?cataid=${cataid}"><img src="{{if icon }} ${icon} {{else}} img/tmao.png  {{/if}}" style="width: 100%"/></a></div>
                <div class="dy25">
                	<ul>
						{{each sub_cata}}
                    	<li><a href="javascript:void(0)" onclick="get_product_by_cataid2(${cataid}, this)">${name}</a></li>
                  		{{/each}}  
				<input type="hidden" value="${cataid}"/>
                    </ul>
                </div>
            </div>
            <div class="bigrongqi">
                <div class="pinpai b-1-dy23" style="height: 650px">
                     <ul id="xiangxi${cataid}">
                     </ul>
                </div>
            </div>    
        </div>	
    </div>

 </script>

     <script id="template_product" type="text/x-jquery-tmpl">
         
                        <li style="height: 320px">
                            <a href="detail.php?productid=${productid}" style="height: 290px">
                                <b>
                                  <img src="${picture}"/>
                                </b>
                                <h2 style="display: inline-block;width: 100%;overflow: hidden;text-overflow:ellipsis;-webkit-line-clamp: 2;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;text-align: left;margin-top:15px;height: 48px;">${name}</h2>
                                <p style="display: inline-block; white-space: nowrap;width: 100%; overflow: hidden; text-overflow:ellipsis;text-align:left;">${brief}</p>
                                <span style="float: left; font-size: 13px">${price}元</span>
								<span style="color: #f00; float: right; font-size: 13px">热卖</span>
                            </a>    
                           <!-- <a href="#" style=" width:100%; height:20px; line-height:20px; font-size:12px; color:#666; text-align:left; text-indent:10px" class="dianpud"></a>-->
                        </li>
                 
   </script>

    <!--快速导航菜单-->
    <div class="dy19" id="qaz">	
    	
    <script id="template_product_list3" type="text/x-jquery-tmpl">	
       
    	<a href="#fzxba">${name}</a>
    </script>
    </div>
</div>

<script type="text/javascript"> 
$(function() { 
$(window).scroll(function() { 
var top = $(window).scrollTop()-$(this).scrollTop()+200
 
$(".dy19").css({"top": "top" }); 
}); 
}); 
</script> 
<!--页脚-->
<!--footer-->
<?php require 'shop_footer.php'?>
<script>

/* 商品列表 */
//定义获取商品列表函数，具体功能位获取的数据以Template模板添加到prduct_list父类中
var next_page = 1;
var _is_loading = false;
var tmplid;
function product_list_callback(code, counter, product_list){
	console.log('dds');
	console.log(product_list);
	console.log('dds');
	_is_loading = false;	
	if(code == 0){
		next_page = -1;		
		$("#product_list").append("<div style='width:100%;height:30px;line-height:30px;text-align:center;color:#666;clear: both;'>我也是有底线的</div>");
		$("#emLoadnull").css('display','none');
	}
	else{
		var GET = $.urlGet();
		var cataid2 = GET['cataid2'];
		

		$('#template_product').tmpl(product_list).appendTo('#xiangxi'+cataid2); 

	}
}


//爆款
function baokuan_callback(res){
	$("#template_baokuan").tmpl(res.product_list).appendTo('#baokuan_list');
};

//热门推荐
function product_tuijian_list_callback(code, counter, product_list){	
	$("#template_tuijian").tmpl(product_list).appendTo('#tuijian_list');
};


//轮播图
function lunbo_callback(res){
	console.log('666666');
	console.log(res);
   
	$("#template_lunbo").tmpl(res.data).appendTo('#swiper');
	//轮播
	var mySwiper = new Swiper ('#swiper-container', {
	    
// 	    effect : 'slide',//slide的切换效果，默认为"slide"（位移切换），可设置为'slide'（普通切换、默认）,"fade"（淡入）"cube"（方块）"coverflow"（3d流）"flip"（3d翻转）。
	    autoplay: 2000,
	    
	    speed: 1000,
// 	    initialSlide :0,
	    observer:true,//修改swiper自己或子元素时，自动初始化swiper
	    observeParents:true,//修改swiper的父元素时，自动初始化swiper
	    loop: true,
	    
//	     autoplay : {
//	        delay:3000,
//	       disableOnInteraction: false,//用户操作swiper之后，是否禁止autoplay。默认为true：停止。
//	     },
	    // 如果需要分页器
//	    pagination: {
//	       el: '.swiper-pagination',
//	       clickable :true,//此参数设置为true时，点击分页器的指示点分页器会控制Swiper切换。
//	     },
//	     // 如果需要前进后退按钮
//	     navigation: {
//	       nextEl: '.swiper-button-next',
//	       prevEl: '.swiper-button-prev',
//	     },
	});
}


function products_list2_callback(res){
	 $("#template_product_list2").tmpl(res.data).appendTo('#qwe');
	 var cataids = res.data;
// 	 console.log(cataids+'1');
	 for(var i=0 ; i < cataids.length; i++)//追加商品到相应的分类
	 {
		 get_product_list_cata({'cataid':cataids[i].cataid},product_list_callbackCata);
	 }
	 console.log("sdfsdfsd啥地方");
	 console.log(res.data);
	 console.log("sdfsdfsd啥地方");
	 $("#template_product_list3").tmpl(res.data).appendTo('#qaz');
    
}

/*分类*/
function get_product_list_cata(data, callback)
{
	if(!data){
		data = new Object();
	}
	data['sellerid'] = sellerid;
	var cataid = data.cataid;
	var url = http_server + "/index.php?g=Yanyubao&m=ShopAppH5&a=product_list";
	$.ajax({
		url : url, 
		type : "POST",
		dataType : "json",
		data : data,
		success : function(data) {
			var code = data.code;	//如果返回0，证明没有更多商品
			var counter = data.counter;	
			var product_list = null;
			if (data.code == 1) {
				product_list = data.product_list;
			}

			if (typeof callback === "function") {

				callback(code, counter, product_list,cataid);
			}	
		}
	});
}

function product_list_callbackCata(code, counter, product_list,cataid){

	_is_loading = false;
	

	if(code == 0){
		next_page = -1;
		
		$("#product_list").append("<div style='width:100%;height:30px;line-height:30px;text-align:center;color:#666;clear: both;'>我也是有底线的</div>");
		$("#emLoadnull").css('display','none');
	}
	else{
		$('#template_product').tmpl(product_list).appendTo('#xiangxi'+cataid); 
	
	}
}




function get_product_by_cataid($sub_cataid, thisObj)
{

	var cataid2 = $(thisObj).siblings().last().val();
// 	console.log(cataid);
// 	window.location.href='index.php?cataid='+$sub_cataid+'&cataid2='+cataid2;

	var data = {'cataid':$sub_cataid};
	get_product_new_list(data, cataid2, product_new_list_callback);
}

function get_product_by_cataid2($sub_cataid, thisObj)
{

	var cataid2 = $(thisObj).siblings().last().val();
// 	console.log(cataid);
// 	window.location.href='index.php?cataid='+$sub_cataid+'&cataid2='+cataid2;

	var data = {'cataid':$sub_cataid};
	get_product_new_list(data, cataid2, product_new_list_callback);
}

function get_product_new_list(data, cataid2, callback)
{

	if(!data){
		data = new Object();
	}
	
	data['sellerid'] = sellerid;
	
	var url = http_server + "/index.php?g=Yanyubao&m=ShopAppH5&a=product_list";
	$.ajax({
		url : url, 
		type : "POST",
		dataType : "json",
		data : data,
		success : function(data) {
			var code = data.code;	//如果返回0，证明没有更多商品
			var counter = data.counter;


			
			var product_list = null;
			if (data.code == 1) {
				product_list = data.product_list;
			}

			if (typeof callback === "function") {

				callback(code, counter, product_list, cataid2);
			}
			
			
		}
	});
}

function product_new_list_callback(code, counter, product_list, cataid2)
{
	console.log(product_list);
	console.log(cataid2);
	console.log('dsfsdfsdfsdfds');
	$('#xiangxi'+cataid2).empty();
	$('#template_product').tmpl(product_list).appendTo('#xiangxi'+cataid2); 
}


// function product_new_list

function product_cata_supplier_callback(res)
{
	$('#template_cata_list').tmpl(res.data).appendTo('#banner_menu_wrap');
 	console.log(res.data);
}


//平铺广告
function pingpu_callback(res){
	
	$("#template_pingpu").tmpl(res.data).appendTo('#pingpu_list');
}




$(function(){

	
	//轮播
	var mySwiper = new Swiper ('#swiper-container2', {
	    
// 	    effect : 'slide',//slide的切换效果，默认为"slide"（位移切换），可设置为'slide'（普通切换、默认）,"fade"（淡入）"cube"（方块）"coverflow"（3d流）"flip"（3d翻转）。
// 	    autoplay: 2000,
	    
	    speed: 1000,
// 	    initialSlide :0,
	    observer:true,//修改swiper自己或子元素时，自动初始化swiper
	    observeParents:true,//修改swiper的父元素时，自动初始化swiper
// 	    loop: true,
	    
//	     autoplay : {
//	        delay:3000,
//	       disableOnInteraction: false,//用户操作swiper之后，是否禁止autoplay。默认为true：停止。
//	     },
	    // 如果需要分页器
//	    pagination: {
//	       el: '.swiper-pagination',
//	       clickable :true,//此参数设置为true时，点击分页器的指示点分页器会控制Swiper切换。
//	     },
//	     // 如果需要前进后退按钮
//	     navigation: {
//	       nextEl: '.swiper-button-next',
//	       prevEl: '.swiper-button-prev',
//	     },
	});
	
	var res = {'page':1 };
	
	get_product_tuijian_list(res,product_tuijian_list_callback);
	
	
	
	
	
	var function_lunbo_name = "get_flash_ad_list";
	
	var request_lunbo_data = {'page':1};
	
	var function_baokuan_name = "product_list";
	
	var request_baokuan_data = {'page':1,'is_hot':1};
	
	var function_product_list_name = "product_cata_level2";
	
	var function_fenlei_name = "product_cata_supplier";
	
	var request_fenlei_data = {'cataid':0};
	
	var request_data = {'data':" "};
	
    var function_list_by_cata = "get_product_list_by_cata";
	
	
	<?php if(@$basic_config['flash_ad_list_flag']){ ?>
	
	var lunbo_list = JSON.parse('<?php echo json_encode($basic_config['flash_ad_list']); ?>');

	$("#template_lunbo").tmpl(lunbo_list).appendTo('#swiper');
	//轮播
	var mySwiper = new Swiper ('#swiper-container', {
	    autoplay: 2000,
	    speed: 1000,
	    observer:true, //修改swiper自己或子元素时，自动初始化swiper
	    observeParents:true,//修改swiper的父元素时，自动初始化swiper
	    loop: true,
	});
	
	<?php }else{ ?>
	
	ajax_request_server(function_lunbo_name, request_lunbo_data, lunbo_callback);
	<?php } ?>

	
	ajax_request_server(function_baokuan_name, request_baokuan_data, baokuan_callback);
		
	ajax_request_server(function_product_list_name, request_data, product_list_callback);

	

// 	var GET = $.urlGet();
// 	var cataid = GET['cataid'];
// 	var data = {'cataid':cataid};
	ajax_request_server(function_product_list_name, request_data, products_list2_callback);

	
	
// 	ajax_request_server(function_product_list_name, request_data, products_list3_callback);

	
		 
// 	//商品列表	
// 	var GET = $.urlGet();
// 	var cataid = GET['cataid'];
// 	var data = {'cataid':cataid};
//  get_product_list(data, product_list_callback);


 	//全部商品分类
//  	var function_name = ;
	ajax_request_server("product_list", request_data, product_list_callback);

	

	
	
})
	





</script>

<script>
// var swiper = new Swiper('.swiper-container', {
// 	 pagination: {
// 		  el:'.swiper-pagination',
// 	  },
// 	//1秒切换一次      
//   });

  
    </script>
</body>
</html>     
        