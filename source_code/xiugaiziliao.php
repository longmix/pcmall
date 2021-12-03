<?php $the_title="修改资料";
	 require 'user_header.php'; ?>
    <!--详细列表-->
    <div class="xiangxilbnm">
    	<!--left-->
       <?php require 'userleftmenu.php' ?>
        <!--right-->
        <div class="zuirifip">
        	<!--基本信息-->
            <div class="basedexinxi">
            	<a href="#">基本信息</a>
            </div>
            <!--基本信息结束-->
            <!--修改基本信息开始-->
            <div class="baseopxg">
            	<!--第一部分-->
                <div class="tirstbf">
                	<span>
                    	<img src="img/6a0bf347jw8er5bdo5q8zj20u00rz7a9.jpg"/>
                        <a href="#">编辑头像</a>
                    </span>
                    <em>用户名：</em>
                    <input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px; margin-top:65px" type="text" class="shuru" placeholder="czz1994612" required />
                </div>
                <!--第二部分-->
                <div class="thetwobf">
                	<em>真实姓名：</em><input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px" type="text" class="shuru" placeholder="王大宝" required />
                </div>
                <div class="thetwobf">
                	<em>昵称：</em><input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px" type="text" class="shuru" placeholder="部落猪" required />
                </div>
                <div class="thetwobf">
                	<em>性别：</em>
                    <input type="radio" name="sex" style=" float:left; display:block; width:13px; height:13px; margin-top:9px"><span>男</span>
                    <input type="radio" name="sex" style=" float:left; display:block; width:13px; height:13px; margin-top:9px"><span>女</span>
                    <input type="radio" name="sex" style=" float:left; display:block; width:13px; height:13px; margin-top:9px"><span>保密</span>
                </div>
                <div class="thetwobf">
                	<em>电话：</em><input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px" type="text" class="shuru" placeholder="15554465535" required />
                </div>
                <div class="thetwobf">
                	<em>邮箱：</em><input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px; width:160px" type="text" class="shuru" placeholder="1285447957@qq.com" required />
                </div>
                <div class="thetwobf">
                	<em>出生日期：</em><input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px; width:160px" type="text" class="shuru" placeholder="1994-6-8" required />
                </div>
                <div class="thetwobf">
                	<em>居住地址：</em><input type="text" id="city" value="点击选择地区"/ style=" height:28px; font-size:12px; border:1px solid #bbb; float:left">
                    <script type="text/javascript">
						$("#city").click(function (e) {
						SelCity(this,e);
						});
					</script>
                    <em style=" width:60px">街道：</em>
                    <input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px; width:420px" type="text" class="shuru" placeholder="山东省济南市历下区黄台电子商务产业园3030室" required />
                </div>
                <div class="thetwobf">
                	<em>验证码：</em><input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px; width:160px" type="text" class="shuru"/>
                    <img src="img/ybjsadz.jpg"/ style=" float:left; width:100px; height:30px; display:block; margin-left:10px">
                    <em style=" width:50px">换一张</em>
                </div>
                <div class="thetwobf">
                	<a href="#" style=" display:block; padding-left:20px; padding-right:20px; line-height:40px;float:left; font-size:14px; color:#FFF; margin-left:213px">保存</a>
                </div>
            </div>	
            <!--修改基本信息结束-->
        </div>
        <!--right结束-->
    </div>
    <!--详细列表结束-->
</div>
<!--个人中心结束-->

</body>
</html>        
                
                       
             
            
