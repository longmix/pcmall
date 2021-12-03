<?php
$the_title = '我的购物车';
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
			<div class="thetoubu1">
		    	<b>
		        	<img src=" "  class="userimg"/>
		        </b>
		        <em class="nikename"></em>
		        <em>欢迎来到会员中心</em>
		        <a href="dizhiguanli.php">地址管理</a>
		        <a href="xiugaiziliao.php">修改资料</a>
		        <h5>账户安全</h5>
		        <strong>低</strong>
		        <span>
		        	<p style=" width:27%"></p>
		        </span>
		        <a href="#">安全等级提升</a>
		        <em style=" padding-right:2px">手机</em>
		        <a href="bangdingshouji.php" style=" padding-left:2px; float:left; display:block; color:#f00" title="点击绑定">未绑定</a>
		    </div>
       <!--lll-->
        	<div class="zuiriftp1">
            	<ul>
                	<li>
                        <span>账户余额</span>
                        <p class="balance"></p>
                    </li>
                    <li>
                    	<span>我的积分</span>
                        <p class="jifen"></p>
                    </li>
                    <li>
                    	<span>我的捐赠</span>
                        <p><s class="zengsong"></s>份</p>
                    </li>
                    <li>
                    	<span>我的帝云币</span>
                        <p  class="diyunbi"></p>
                    </li>
                </ul>
            </div>
            
        </div>
        <!--right结束-->
    </div>
    <!--详细列表结束-->
</div>
<!--页脚-->
<!--footer-->
<?php require 'shop_footer.php'?>

<!--个人中心结束-->
</body>

</html>
