
	<?php $the_title="退款及退货";
	 require 'user_header.php'; ?>
    <!--详细列表-->
    <div class="xiangxilbnm">
    	<!--left-->
       <?php require 'userleftmenu.php' ?>
        <!--right-->
        <div class="zuirifip">
        	<!--账户余额滴干活-->
            <div class="locfre">
            	<a href="#" class="zuliyesi">退款申请</a>
                <a href="#">退货申请</a>
                <a href="#">虚拟兑码退款</a>
            </div>    
            <div class="pipixia" style=" background:#FFF">
            	<tbody><tr>
        		<td>&nbsp;</td>
        		<th><i style=" font-size:14px">申请时间</i></th>
        		<td class="w240">
                	<input type="text" style=" border:1px solid #bbb; height:26px">&nbsp;–&nbsp;
                	<input type="text" style=" border:1px solid #bbb; height:26px">
                </td>
        		<th>
                	<select style=" border:1px solid #bbb; height:28px">
            			<option>订单编号</option>
            			<option>退款编号</option>
            			<option>商品名称</option>
          			</select>
                </th>
        		<td class="w160"><input type="text" style=" border:1px solid #bbb; line-height:26px"></td>
        		<td class="w70 tc">
                <label>
            		<input type="submit" value="搜索" style=" border:1px solid #bbb; line-height:24px">
          		</label>
                </td>
      </tr>
    </tbody>
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
            
            <!--列表导航滴干活-->
            <div class="zhuzhuxia" style=" margin-top:10px">
            	<span>商品</span>
                <span>退款金额</span>
                <span>审核状态</span>
                <span>平台确认</span>
                <span>操作</span>
            </div>
            <!--一条列表开始-->
            <div class="zhuzhuxia" style=" background:#FAFAFA">
            	<em style=" padding-left:10px">退款编号：<s>255103160707091337</s></em>
                <em>申请时间：<s>2016-6-6&nbsp;14:46</s></em>
                <a href="#"><em style=" color:#09f">店铺：<s>帝云自营店</s></em></a>
                <a href="#"><em style=" color:#09f">QQ：<s>1285447957</s></em></a>
            </div>
            <div class="zhuzhuxia">
            	<span>
                	<p style=" color:#999">订单商品全部退款</p>
                    <p style=" color:#999">订单编号：<a href="#" class="yansb" style="color:#111">8000000000016201</a></p>
                </span>
                <span style=" line-height:58px; color:#999">100</span>
                <span style=" line-height:58px; color:#999">同意</span>
                <span style=" line-height:58px; color:#999">已完成</span>
                <span><a href="#" style=" line-height:58px; color:#111" class="yseal">查看</a></span>
            </div>
            <!--一条列表结束-->
            <!--一条列表开始-->
            <div class="zhuzhuxia" style=" background:#FAFAFA">
            	<em style=" padding-left:10px">退款编号：<s>255103160707091337</s></em>
                <em>申请时间：<s>2016-6-6&nbsp;14:46</s></em>
                <a href="#"><em style=" color:#09f">店铺：<s>帝云自营店</s></em></a>
                <a href="#"><em style=" color:#09f">QQ：<s>1285447957</s></em></a>
            </div>
            <div class="zhuzhuxia">
            	<span>
                	<a href="#"><p>利郎100%羊毛%羊毛薄款羊毛衫V领线衣</p></a>
                    <p style=" color:#999">订单编号：<a href="#" class="yansb" style="color:#111">8000000000016201</a></p>
                </span>
                <span style=" line-height:58px; color:#999">100</span>
                <span style=" line-height:58px; color:#999">同意</span>
                <span style=" line-height:58px; color:#999">已完成</span>
                <span><a href="#" style=" line-height:58px; color:#111" class="yseal">查看</a></span>
            </div>
            <!--一条列表结束-->
            <script>
				$(function(){
					$(".yansb").mouseenter(function(){
						$(this).css({color:"#f00"})
						});
					$(".yansb").mouseleave(function(){
						$(this).css({color:"#111"})
						})
					$(".yseal").mouseenter(function(){
						$(this).css({color:"#f00"})
						});
					$(".yseal").mouseleave(function(){
						$(this).css({color:"#111"})
						})		
					})
            </script>
        </div>
        <!--right结束-->
    </div>
    <!--详细列表结束-->
</div>
<!--个人中心结束-->
</body>
</html>
