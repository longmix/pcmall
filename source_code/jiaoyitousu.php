<?php
    $the_title="交易投诉";
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
            	<a href="#" class="zuliyesi">投诉管理</a>
                
            </div>    
            <div class="pipixia" style=" background:#FFF">
            	<tbody><tr>
        		<td>&nbsp;</td>
        		<th><i style=" font-size:14px">选择状态</i></th>
        		
        		<th>
                	<select style=" border:1px solid #bbb; height:28px">
            			<option>选择状态</option>
            			<option>进行中</option>
            			<option>已完成</option>
          			</select>
                </th>
        		
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
            	<span>投诉商品</span>
                <span>投诉主题</span>
                <span>投诉时间</span>
                <span>投诉状态</span>
                <span>操作</span>
            </div>
            <!--一条列表开始-->
            
            <div class="zhuzhuxia">
            	<span>
                	<a href="#"><p>利郎100%羊毛%羊毛薄款羊毛衫V领线衣</p></a>
                    <p style=" color:#999">商家：<a href="#" class="yansb" style="color:#111">帝云自营店</a></p>
                </span>
                <span style=" line-height:58px; color:#999">售后保障服务</span>
                <span style=" line-height:58px; color:#999">2016-07-07 09:02:47</span>
                <span style=" line-height:58px; color:#999">待申诉</span>
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

<!--页脚-->
<!--footer-->
<?php require 'shop_footer.php'?>
</body>
</html>
