	<?php $the_title="修改绑定";
	 require 'user_header.php'; ?>
    <!--详细列表-->
    <div class="xiangxilbnm">
    	<!--left-->
       <?php require 'userleftmenu.php' ?>
        <!--right-->
        <div class="zuirifip">
        	<!--账户安全之手机绑定-->
            <div class="basedexinxi">
            	<a href="#">邮箱绑定</a>
            </div>
            <!--绑定手机开始-->
            <div class="bdsjksla">
            <h5 style=" display:block; float:left; line-height:40px; font-size:20px; color:#666; margin-left:10px">操作提示</h5>
            	<p style=" display:block; width:960px; height:auto; overflow:hidden; margin:0 auto; font-size:14px; line-height:20px; background:rgba(0,66,255,0.1); padding-top:10px; padding-bottom:10px; color:#09f">
                	&nbsp;1. 请选择“绑定邮箱”或“绑定手机”方式其一作为安全校验码的获取方式并正确输入。<br>
					&nbsp;2. 如果您的邮箱已失效，可以 绑定手机 后通过接收手机短信完成验证。<br>
					&nbsp;3. 如果您的手机已失效，可以 绑定邮箱 后通过接收邮件完成验证。<br>
                    &nbsp;4. 请正确输入下方图形验证码，如看不清可点击图片进行更换，输入完成后进行下一步操作。<br>
                    &nbsp;5. 收到安全验证码后，请在30分钟内完成验证。<br>
				</p>
                <div class="thetwobf">
                	<em>绑定的邮箱地址：</em><select name="auth_type" style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px; text-indent:0">
                                    <option value="email">128****957@qq.com</option>
                      </select>
                      <a href="#" style=" display:block; padding-left:20px; padding-right:20px; line-height:26px; font-size:14px; color:#666; float:left; margin-left:6px; background:#f5f5f5; border:1px solid #bbb">获取短信验证码</a>
                </div>
                <div class="thetwobf">
                	<em>请输入安全验证码：</em><input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px" type="text" class="shuru"/>
                </div>
                
                <div class="thetwobf">
                	<em>输入验证码：</em><input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px; width:160px" type="text" class="shuru"/>
                    <img src="img/ybjsadz.jpg"/ style=" float:left; width:100px; height:30px; display:block; margin-left:10px">
                    <em style=" width:50px">换一张</em>
                </div>
                 <div class="thetwobf">
                	<a href="#" style=" display:block; padding-left:20px; padding-right:20px; line-height:40px;float:left; font-size:14px; color:#FFF; margin-left:213px">确认进入下一步</a>
            </div>
        </div>
        <!--right结束-->
    </div>
    <!--详细列表结束-->
</div>
<!--个人中心结束-->

</body>
</html>
      
                