<?php
$the_title = '我的购物车';
  require 'shop_header.php';
?>
	<?php $the_title="积分明细";
	 require 'user_header.php'; ?>
    <!--详细列表-->
    <div class="xiangxilbnm">
    	<!--left-->
       <?php require 'userleftmenu.php' ?>
        <!--right-->
        
        <div class="zuirifip">
        <!--lll-->
        	<div class="zuiriftp1">
            	<ul>
                	<li>
                        <span>账户余额</span>
                        <p>￥1000</p>
                    </li>
                    <li>
                    	<span>我的积分</span>
                        <p>1000</p>
                    </li>
                    <li>
                    	<span>我的优惠劵</span>
                        <p><s>2</s>张</p>
                    </li>
                    <li>
                    	<span>我的帝云币</span>
                        <p>0</p>
                    </li>
                </ul>
            </div>
        <!--lll-->
        	<!--积分明细-->
            <div class="jifenmingxiq">
            	<span style=" display:block; padding-left:20px; line-height:40px; font-size:14px; float:left; color:#666; font-weight:bold">积分明细</span>
                <p style=" display:block; width:980px; height:auto; overflow:hidden; background:rgba(0,66,163,0.1); font-size:14px; color:#09f; line-height:20px; padding-left:20px; padding-bottom:10px">
                	<i style=" display:block; font-size:16px; font-weight:bold; color:09f; line-height:30px; color:#09f">积分获得规则</i>
                    成功注册会员：增加20积分；会员每天登录：增加30积分；评价完成订单：增加50积分。<br>
					购物并付款成功后将获得订单总价5%（最高限额不超过800）积分。<br>
					如订单发生退款、退货等问题时，积分将不予退还。
                </p>
            </div>
            <!--我的积分-->
            <div class="jifenmingxiq">
            	<em>积分总数</em>
                <span style=" color:#f00;padding-left:10px">1000</span>
                <em style=" padding-right:6px">添加时间</em>
                <input type="text" style=" width:100px; height:26px; font-size:12px; border:1px solid #cacace; box-shadow:none; margin-top:6px; float:left">
                <em style=" padding-left:6px; padding-right:6px">至</em>
                <input type="text" style=" width:100px; height:26px; font-size:12px; border:1px solid #cacace; box-shadow:none; margin-top:6px; float:left">
            </div>
            <!--列表开始-->
            <div class="jifenmingxiq">
            	<!--列表导航-->
            	<div class="jifenmingxiqx">
                	<ul>
                    	<li>添加时间</li>
                        <li>积分变更</li>
                        <li>操作</li>
                        <li>描述</li>
                    </ul>
                </div>
                <!--一条列表开始-->
                <div class="jifenmingxiqm">
                	<ul>
                    	<li>
                        	<span>2016-6-6</span>
                            <span>+30</span>
                            <span>登录</span>
                            <span>会员登录</span>
                        </li>
                        <li>
                        	<span>2016-6-6</span>
                            <span>+30</span>
                            <span>订单消费</span>
                            <span>订单8000000000001301购物消费</span>
                        </li>
                    </ul>
                </div>
               <!-- 一条列表结束-->
            </div>
            <!--列表结束-->
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
</html>

   	
            
            
                
            
           
        

