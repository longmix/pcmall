
<?php
    $the_title="列表页";
  require 'shop_header.php';
  
?>

<script src="js/daohang.js"></script>

<?php 
require 'config/list_brand_nav.php';
?>


<!--分类搜索-->
<div class="zhxlxp">
	<span style="margin-left:0;">排序方式</span>
	<a href="javascript:void(0)" id="zonghe" style=" background:#000; color:#fff;">默认</a>
    <a href="javascript:void(0)" title="7天销量降序排列" id="sale_volume">销量</a>
    <a href="javascript:void(0)" title="上架时间降序排列" id="new_product">新品</a>
    <a href="javascript:void(0)" title="销售价格降序排列" id="price_des">价格</a>
</div>
<!--你当前位置 -->
<div class="nowweizhi" id="nowweizhi"">
	<span>当前的位置</span>
    <b>&gt;</b>
    <a>商品列表</a>
	<b>&gt;</b>
    <a>默认排序</a>
</div>
<!--商品列表-->
<div class="shopliebiao">
<script id="template_product_all" type="text/x-jquery-tmpl">
		<li>
           <a href="detail.php?productid=${productid}" class="wocici">
               <b>
               <img src="${picture}"/>
               </b>
               <h2 style="display: inline-block; white-space: nowrap;width: 220px; overflow: hidden; text-overflow:ellipsis;">${name}</h2>
               <p style="display: inline-block; white-space: nowrap;width: 220px; overflow: hidden; text-overflow:ellipsis;">${brief}</p>
               <span>${price}元</span>
           </a>
           <em class="wocaca">
           	<a href="detail.php?productid=${productid}">查看详情</a>
            <a href="#" style=" border-right:hidden">立即购买</a>
           </em>
        </li>
	</script>
	<ul id="product_list">

    </ul>
</div>

<?php 
require 'config/list_guess.php';
?>

<!--页脚-->
<!--footer-->
<?php require 'shop_footer.php'?>
<script type="text/javascript">
var next_page = 1;
var loading_next_page = false;

function get_product_list_callback(res)
{
	loading_next_page = false;
	
	$("#template_product_all").tmpl(res.product_list).appendTo("#product_list");

	if(res.cata_name){
		$('#nowweizhi').append('<b> &gt; </b> <a>'+res.cata_name+'</a> ');
	}
}

//位置
function get_product_cata_level2_callback(res)
{
	var GET = $.urlGet();
	var cataid = GET['cataid'];
	for (key in res.data) {		
		if(res.data[key].cataid == cataid){
			$('#nowweizhi').append('<b> &gt; </b> <a>'+res.data[key].name+'</a>  ');
			return;
		}
	}
}

function GetQueryString(name)
{
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if(r!=null)return  unescape(r[2]); return null;
}


$(function(){

	//类型	
	var GET = $.urlGet();
	var cataid = GET['cataid'];
	var keyword = decodeURI(GetQueryString('keyword'), "utf-8");
	var request_data = {'page': next_page};

	if(keyword == 'null'){
		keyword = null;
	}
	

	if (keyword) {
		console.log(111);

		$('#nowweizhi').append('<b> &gt; </b> <a>'+keyword+'</a> ');
				
		request_data.keyword = keyword;
		request_data.sort = 1;
		request_data.page = next_page;
		
		ajax_request_server('product_list', request_data, get_product_list_callback);	
		
	} else {
		if (cataid){
			//ajax_request_server('product_cata_level2', {}, get_product_cata_level2_callback);
			//request_data.keyword = keyword;			
		}
		
		ajax_request_server('product_list', {'page': next_page, 'cataid': cataid}, get_product_list_callback);
	}

	
	
	
	$("#product_list").mousewheel(function(event, delta){
		
		var dir = delta > 0 ? 'Up' : 'Down';

		// 		$(this).empty();
		
        if (dir == 'Down') {
        	if(next_page == -1){
    			return;
    		}

    		if(loading_next_page){
        		return;
    		}

    		loading_next_page = true;
    		
    		var list_type = $('#product_list').attr('list-type');

    		if(cataid){
    			request_data.cataid = cataid;
    		}

    		if(keyword){
    			request_data.keyword = keyword;
    		}
    		
    		request_data.page = ++next_page;
    		
    		if (!list_type) {
        		
    			request_data.sort = 1;
    			
    		} else if (list_type == 'sale_volume'){
        		
    			request_data.sort = 2;
    			
            } else if (list_type == 'new_product'){
            	request_data.sort = 3;
    			
            } else {
            	request_data.sort = 4;
            }

    		ajax_request_server('product_list', request_data, get_product_list_callback);
    		
        }
        
        return false;
	});

	
	


	
	
	//综合
	$('#zonghe').click(function(){
		$(this).css({"background":"#000", "color":"#fff"});
		$(this).siblings().css({"background":"", "color":""});
		$('#nowweizhi').children('b, a').remove();
		$('#nowweizhi').append('<b>&gt;</b> <a>商品列表</a> <b>&gt;</b> <a>默认排序</a>');
		next_page = 1;
		$('#product_list').empty();
		$('#product_list').removeAttr('list-type');	
		var request_data={'page': next_page, 'sort': 1};
		if (cataid) {
			request_data.cataid = cataid;
		}
		if(keyword){
			request_data.keyword = keyword;
		}
		ajax_request_server('product_list', request_data, get_product_list_callback);	
	});

	//销量
	$('#sale_volume').click(function(){
		$(this).css({"background":"#000", "color":"#fff"});
		$(this).siblings().css({"background":"", "color":""});
		$('#nowweizhi').children('b, a').remove();
		$('#nowweizhi').append('<b>&gt;</b> <a>商品列表</a> <b>&gt;</b> <a>销量排序</a>');
		next_page = 1;
		$('#product_list').empty();
		$('#product_list').attr('list-type', 'sale_volume');
		var request_data={'page': next_page, 'sort': 2};
		if (cataid) {
			request_data.cataid = cataid;
		}
		if(keyword){
			request_data.keyword = keyword;
		}
		ajax_request_server('product_list', request_data, get_product_list_callback);
	});	


	//新品
	$('#new_product').click(function(){
		$(this).css({"background":"#000", "color":"#fff"});
		$(this).siblings().css({"background":"", "color":""});
		$('#nowweizhi').children('b, a').remove();
		$('#nowweizhi').append('<b>&gt;</b> <a>商品列表</a> <b>&gt;</b> <a>最新上架</a>');
		next_page = 1;
		$('#product_list').empty();
		$('#product_list').attr('list-type', 'new_product');
		var request_data={'page': next_page, 'sort': 3};
		if (cataid) {
			request_data.cataid = cataid;
		}
		if(keyword){
			request_data.keyword = keyword;
		}
		ajax_request_server('product_list', request_data, get_product_list_callback);
	});	

	//价格
	$('#price_des').click(function(){
		$(this).css({"background":"#000", "color":"#fff"});
		$(this).siblings().css({"background":"", "color":""});
		$('#nowweizhi').children('b, a').remove();
		$('#nowweizhi').append('<b>&gt;</b> <a>商品列表</a> <b>&gt;</b> <a>价格排序</a>');
		next_page = 1;
		$('#product_list').empty();
		$('#product_list').attr('list-type', 'new_product');
		var request_data={'page': next_page, 'sort': 4};
		if (cataid) {
			request_data.cataid = cataid;
		}
		if(keyword){
			request_data.keyword = keyword;
		}
		ajax_request_server('product_list', request_data, get_product_list_callback);
	});


	
	

})

// function product_list_callback(code, counter, product_list)
// {
// 	if (code == 0) {
// 		return;
// 	}
// 	product_all.push = count;
// 	product_all.push = count;
// 	console.log('欧西');
// 	console.log(code);
// 	console.log(product_all);
// 	console.log('欧西');
// }
</script>

</body>
</html>    
           
    
               
            
        
             
                
            
                    
        
            	
            
                  
          
 

    
    		
        