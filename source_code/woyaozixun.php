	<?php $the_title="我要咨询";
	 require 'user_header.php'; ?>
    <!--详细列表-->
    <div class="xiangxilbnm">
    	<!--left-->
       <?php require 'userleftmenu.php' ?>
        <!--right-->
        <div class="zuirifip">
        	<!--账户余额滴干活-->
            <div class="locfre">
            	<em style=" display:block; padding-left:10px; float:left; line-height:30px; font-size:14px; margin-top:5px">咨询类型：</em>
            	<a href="#" class="zuliyesi">商品咨询</a>
                <a href="#">支付问题</a>
                <a href="#">发票及维修</a>
                <a href="#">促销及赠品</a>
                
            </div>
            <script>
			$(function(){
				$(".locfre a").click(function(){
					$(this).addClass("zuliyesi").siblings().removeClass("zuliyesi")
					})
					$(".feifeidg").mouseenter(function(){
						$(this).css({background:"#0059a7"})
						})
					$(".feifeidg").mouseleave(function(){
						$(this).css({background:"#006DCC"})
						})
					$(".tutudg").mouseenter(function(){
						$(this).css({background:"#3a9d3a"})
						})
					$(".tutudg").mouseleave(function(){
						$(this).css({background:"#5BB75B"})
						})
					$(".paopaodg").mouseenter(function(){
						$(this).css({background:"#dd7200"})
						})
					$(".paopaodg").mouseleave(function(){
						$(this).css({background:"#fe8300"})
						})			
				})
            </script>
            
            <!--一条开始-->
            <div class="zhuzhuxia" style=" margin-top:10px; border-bottom:none">
            	<em style=" padding-left:10px; font-size:14px; color:#111; display:block; height:30px; line-height:30px; float:left">咨询内容：</em>
                <textarea style=" border:1px solid #bbb;resize: none; width:770px; height:120px; font-size:12px; line-height:20px; margin-top:10px; margin-bottom:10px"></textarea>
            </div>
            <!--一条结束-->
            <!--一条开始-->
            <div class="zhuzhuxia" style=" margin-top:0">
            	<span>
                	<input type="text" style=" border:1px solid #bbb; width:100px; height:30px; margin-left:65px; text-align:center; color:#666; margin-bottom:10px" value="输入验证码">
                </span>
                <a href="#" class="wulgdz">发布咨询</a>
                <a href="#" class="wulgdz">匿名发布</a>
            </div>
            <!--一条结束-->
        </div>
        <!--right结束-->
    </div>
    <!--详细列表结束-->
</div>
<!--个人中心结束-->
</body>
</html>
