
	<?php $the_title="充值明细";
	 require 'user_header.php'; ?>
    <!--详细列表-->
    <div class="xiangxilbnm">
    	<!--left-->
       <?php require 'userleftmenu.php' ?>
        <!--right-->
        <div class="zuirifip">
        	<!--账户余额滴干活-->
            <div class="locfre">
            	<a href="#">账户余额</a>
                <a href="#" class="zuliyesi">充值明细</a>
                <a href="#">余额提现</a>
                <a href="#">充值卡余额</a>
                
                <a href="#" style="float:right; color:#FFF" class="paopaodg">在线充值</a>
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
            <!--可用金额和冻结余额滴干活-->
            <div class="pipixia">
            	<span>可用金额：</span>
                <em><s>0.00</s>元</em>
                <span>冻结金额：</span>
                <em><s>0.00</s>元</em>
            </div>
            <!--列表导航滴干活-->
            <div class="zhuzhuxiabi">
            	<span>充值单号</span>
                <span>创建时间</span>
                <span>支付方式</span>
                <span>充值金额（元）</span>
                <span>状态</span>
                <span>操作</span>
            </div>
            <!--一条列表开始-->
            <div class="zhuzhuxiabi">
            	<span>210519219986357014</span>
                <span>2016-6-6&nbsp;12:46</span>
                <span></span>
                <span>1000</span>
                <span>未支付</span>
                <span><a href="#">支付</a>&nbsp;&nbsp;<a href="#">删除</a></span>
            </div>
        </div>
        <!--right结束-->
    </div>
    <!--详细列表结束-->
</div>
<!--个人中心结束-->
</body>
</html>
