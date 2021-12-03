<?php
    $the_title="在线充值";
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
        	<!--账户余额滴干活-->
            <div class="locfre">
            	<a href="#">账户余额</a>
                <a href="#">充值明细</a>
                <a href="#">余额提现</a>
                <a href="#">充值卡余额</a>
                <a href="#"  class="zuliyesi">在线充值</a>
                
                
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
            <div class="thetwobf">
                	<em>充值金额：</em><input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px" type="text" class="shuru" placeholder="单位元" required />
        </div>
        <input class="submit" value="提交" type="submit" style=" width:100px; height:30px; background:#09f; color:#fff; margin-top:10px; margin-left:158px">
        <!--right结束-->
    </div>
    <!--详细列表结束-->
</div>
<!--个人中心结束-->
</body>
</html>
