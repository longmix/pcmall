<?php
if(strlen($the_title) == 0){
	$the_title = '用户中心';
}
?>
<!--个人中心首页 -->
<div class="thetoubu" style="margin-top: 0">
	<!--头部-->


   <script type="text/javascript">
   /*设置用户信息**/
   function get_user_info2_callback(res)
   {
      var nickname = res.data.nickname;//昵称
   	
   	
   	var mobile = res.data.mobile;//手机号、账号
   	
   	var headimgurl = res.data.headimgurl;//头像
   	
   	var balance = res.data.balance;//现金余额
   	
   	var balance_zengsong = res.data.balance_zengsong;//赠送
   	
   	var balance_jifen = res.data.score; //积分
   	
   	var balance_diyubi = res.data.balance2;
   	$('.userimg').attr('src',headimgurl);
   	$(".nikename").text(nickname);
   	$(".balance").text(balance);
   	$(".jifen").text(balance_jifen);
   	$('.zengsong').text(balance_zengsong);
   	$('.diyunbi').text(balance_diyubi);
   }

   $(document).ready(function(){
	 
// 	   var loginItem = get_login_info();//获取登录信息 
       console.log('就像阳光创挂');
	   console.log(loginItem)
	   get_user_info(loginItem.userid,loginItem.checkstr,get_user_info2_callback);
   });
   
   </script>





