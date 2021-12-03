<?php
    $the_title="账户余额";
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
            	<a href="#" class="zuliyesi">账户余额</a>
                <a href="#">充值明细</a>
                <a href="yuetixian.php">余额提现</a>
                <a href="#">充值卡余额</a>
                <a href="#" style="float:right; color:#FFF" class="feifeidg">充值卡充值</a>
                <a href="shenqingtixian.php" style="float:right; color:#FFF" class="tutudg">申请提现</a>
                <a href="zaixianchongzhi.php" style="float:right; color:#FFF" class="paopaodg">在线充值</a>
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
                <em><s id='balance'>0.00</s>元</em>
                <span>冻结金额：</span>
                <em><s>0.00</s>元</em>
            </div>
            <!--列表导航滴干活-->
            <div class="zhuzhuxia">
            	<span>创建时间</span>
                <span>收入（元）</span>
                <span>支出（元）</span>
                <span>冻结（元）</span>
                <span>变更说明</span>
            </div>
            <!--一条列表开始-->
            <div class="zhuzhuxia">
            	<span>2016-6-6&nbsp;12:46</span>
                <span>100</span>
                <span>10</span>
                <span>10</span>
                <span>hiis阿迪好好看书</span>
            </div>
        </div>
        <!--right结束-->
    </div>
    <!--详细列表结束-->
</div>
<!--个人中心结束-->
<!--页脚-->
<!--footer-->
<?php require 'shop_footer.php'?>
</body>
<script type='text/javascript'>


            
function get_user_info2_callback(res)
{
	$('#balance').text(res.data.balance);
}

$(function(){


	var userid = loginItem.userid;
	var checkstr = loginItem.checkstr;
	console.log(userid);
	var request_get_user_info = {'userid':userid, 'checkstr':checkstr};
	ajax_request_server('get_user_info', request_get_user_info, get_user_info2_callback);
})

</script>
</html>
                
                
