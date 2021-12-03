	<div class="liefyu">
 			<h2>个人中心</h2>
                <div class="conb">
  				<a href="profile.php">个人资料</a>
                <a href="zhanghuyue.php">账户余额</a>
                <a href="jifenmingxi.php">我的积分</a>
                <a href="#11">我的代金卷</a>
                </div>
        	<h2>交易管理</h2>
                <div class="conb">
                <a href="order_list.php">订单列表</a>
                <a href="favorite.php">我的收藏</a>
                <a href="woyaopingjia.php">交易评价/晒单</a>                
                </div>
            <h2>客户服务</h2>
                <div class="conb">
                <a href="woyaotuihuo.php">退款及退货</a>
                <a href="jiaoyitousu.php">交易投诉</a>
                <a href="shangpinzixun.php">商品咨询</a>
                <a href="#11">违规举报</a>
                <a href="pingtaikefu.php">平台客服</a>
                <a href="#111">商家入驻</a>
                </div>
            <h2>资料管理</h2>
                <div class="conb">
                <a href="#111">账户信息</a>
                <a href="zhanghuanquan.php">账户安全</a>
                <a href="dizhiguanli.php">收货地址</a>
                <a href="#11">我的消息</a>
                <a href="#11">我的好友</a>
                <a href="#111">我的足迹</a>
                <a href="#111">第三方账号登录</a>
                <a href="#111">分享绑定</a>
                </div>
        </div>

        <script type="text/javascript">
		$(function(){
			$(".liefyu h2").click(function(){//获取title，并且让他执行下面的函数
				$(this).next(".conb").slideToggle();
			})
			
			$(".conb a").each(function(){ 
				$this = $(this); 

				//alert($this[0].href);alert(window.location);
				var url01 = $this[0].href.replace('#', '');
				var url02 = String(window.location).replace('#', '');

				//alert(url01);alert(url02);
				
				if(url01 == url02){
					$this.css("color","red"); 
				} 
			}); 

		});
		</script>