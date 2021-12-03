<?php
$the_title = '我的购物车';
  require 'shop_header.php';
?>
   <?php $the_title="我的收藏";
	 require 'user_header.php'; ?>
    <!--详细列表-->
    <div class="xiangxilbnm">
    	<!--left-->
       <?php require 'userleftmenu.php' ?>
        <!--right-->
        <div class="zuirifip">
        	<!--商品收藏和店铺收藏-->
            <div class="locfre">
            	<a href="#" class="zuliyesi">商品收藏</a>
                <a href="#">店铺收藏</a>
                <a href="#" style=" float:right">全部删除</a>
            </div>
            <script>
			$(function(){
				$(".locfre a").click(function(){
					$(this).addClass("zuliyesi").siblings().removeClass("zuliyesi")
					})
				})
            </script>
            <!--收藏的商品列表-->
            <div class="feizhoum">
            	<ul id="template-collection-list">
            	<script id="template-collection" type="text/x-jquery-tmpl">
                	<li>
                    	<img src="${productInfo.picture}"/>
                        <span>
                        	<a href="#">${productInfo.name}</a>
                            <em>${productInfo.price}元</em>
                            <a href="#" style="display:block; width:40px; height:20px; text-align:center; line-height:20px; font-size:12px; color:#fff; background:#09f; margin-top:12px">删除</a>
                        </span>
                    </li>
				</script>              
                </ul>
            </div>
            <!--收藏商品列表结束-->
        </div>
        <!--right结束-->
    </div>
    <!--详细列表结束-->
</div>
<!--个人中心结束-->

<!--页脚-->
<!--footer-->
<?php require 'shop_footer.php'?>
<script type='text/javascript'>


            
function get_collection_products_callback(res)
{
	console.log('yue');
	console.log(res);
	console.log('yue');
	$('#template-collection').tmpl(res.data).appendTo('#template-collection-list');
}

$(function(){
	var userid = loginItem.userid;
	var checkstr = loginItem.checkstr;
	console.log(userid);
	var request_collection_products = {'userid':userid, 'checkstr':checkstr};
	ajax_request_server('collection_products', request_collection_products, get_collection_products_callback);
})

</script>

</body>
</html>    	
                        
                        
                
        
