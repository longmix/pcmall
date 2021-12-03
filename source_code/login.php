<!DOCTYPE html>
<!-- saved from url=(0065)http://www.17sucai.com/preview/471626/2017-04-15/login/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>登录_改版蘑菇街</title>
	<!-- <meta name="viewport" content="width=divice-width,initial-scale=1.0,minimum-scale=1.0,maximum=1.0,user-scalable=no" /> -->
	<meta http-equiv="X-UA-Compatible" content="IE=8/">
	<link rel="stylesheet" href="./login/normalize.css" type="text/css">
	<link rel="stylesheet" href="./login/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="./login/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="./login/login.css" type="text/css">

	<!-- <script src="./js/jquery-1.7.2.js"></script> -->
	<script src="./login/jquery-1.11.3.js"></script>
	<script src="./login/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://yanyubao.tseo.cn/api/shopapp.js"></script>
	<script type="text/javascript" src="http://yanyubao.tseo.cn/Tpl/static/jquery.tmpl.js"></script>

	<script type="text/javascript" src="js/abot.js"></script>
	<script type="text/javascript" src="js/abot.function.js"></script>
	
	</head>
<body>
	<div class="wrap" id="wrap">
		<div class="logo" id="logo">
			<a href="http://www.17sucai.com/preview/471626/2017-04-15/login/index.html#">
				<img src="./login/mogulogo_220x52.png" alt="该链接已失效">
			</a>
		</div>
		<div class="register-wrap" id="register-wrap">
			<div class="pic" id="pic">
				<img src="./login/zhuce_400x300.jpg" alt="该链接已失效">
			</div>
			<div class="register" id="register">
				<div class="register-top" id="reg-top">
					<h2 class="normal" id="normal">账号登录</h2>
					<h2 class="nopassword" id="nopw">短信登录</h2>
					<a id="qrcode" href="http://www.17sucai.com/preview/471626/2017-04-15/login/index.html#"></a>
				</div>

				<!--普通登录-->
				<div class="register-con" id="rc">
					<form action="">
						<ul>
							<li id="rc-inner-num">
							<i></i>
							<span>请输入昵称/邮箱/手机号码</span>
							</li>
							<li id="rc-inner-virity">
								<i></i>
								<span>请输入密码</span>
							</li>
							<li id="rc-innerError" style="width:300px;
								height:32px;
								padding:0 6px;
								color:#ff1877;
								border:1px solid #ffd797;
								display:none;">
								<i style="display:inline-block;
									float:left;
									width:20px;
									height:20px;
									margin:6px 10px;
									border:none;
									background:url(./images/bz_16x16.png) no-repeat 0 0;"></i>
								<span style="color:#ff1877;
								display:inline-block;
								float:left;
								line-height:26px;">您输入的用户名或密码不正确</span>
							</li>
							<li class="form-group">
								<input type="text" class="form-control" placeholder="昵称/邮箱/手机号码" id="mobile">
								<span class="fa fa-check success" style="display:none;color:green;position:relative;left:-25px;top:5px;"></span>
								
							</li>
							<li class="form-group">
								<input type="password" class="form-control" placeholder="密码" id="password">
								
							</li>
							
							<li class="form-group">
								<input type="text" name="" id="J_codetext" class="form-control" placeholder="验证码" style="width: 180px;">
								<div style="float: right;margin-right: 60px;height: 30px"><img src="" class="ver_btn" onClick="" id="refresh2" style="height: 30px; width: 100px">
								</div>
							</li>
							
							
							
							
							
							<li class="read">
								<input type="checkbox" class="ck" name="check" value="1" checked="checked">
								<b>2周内自动登录</b>
								<a href="http://www.17sucai.com/preview/471626/2017-04-15/login/index.html#">忘记密码？</a>
							</li>
							<li>
								<button class="submit submit_btn_password" type="submit" id="login-btn" style="border-radius:5px;">立即登录</button>
							</li>
							<li>
								<a href="http://www.17sucai.com/preview/471626/2017-04-15/login/index.html#" class="haiwai">海外手机登录</a>
								<a href="http://www.17sucai.com/preview/471626/2017-04-15/register/register.html" class="zhuce">新用户注册</a>
							</li>
							<li class="zjdl">
								无需注册即可登录：
							</li>
							<li>
								<div class="qq" style="border-radius:5px;"></div>
								<div class="weixin" style="border-radius:5px;"></div>
								<div class="weibo" style="border-radius:5px;"></div>
							</li>
						</ul>
					</form>	
				</div>
				<!--手机无密码登录-->
				<div class="login-con" id="lc">
					<form action="">
					<ul>
						<li id="inner-num">
							<i></i>
							<span>请输入手机号码</span>
						</li>
						<li id="inner-virity">
							<i></i>
							<span>请输入验证码</span>
						</li>
						<li class="lg-num  form-group">
							<input type="text" name="phone-num" class="form-control" placeholder="手机号码" id="mobile2" style="width: 300px; height: 30px;">
							<span class="fa fa-check success" style="display:none;color:green;position:relative;left:-25px;top:5px;"></span>
						</li>
						<li class="form-group">
							<div style="float: right;margin-right: 60px;height: 30px"><img src="" class="ver_btn" onClick="" id="refresh3" style="height: 30px; width: 100px">
							</div>
							<input type="text" name="" id="J_codetext2" class="form-control" placeholder="验证码" style="width: 180px; height: 30px;">		
						</li>
						<li class="password form-group">
							<input type="password" name="password" id="pass" class="form-control" placeholder="动态密码" style="width: 180px; float: left">
							
						</li>
						<li>
<!-- 							<button class="getcode" id="btn_login_send_sms"" onclickstyle="border-radius:5px;">获取动态密码</button> -->
							<input type="button" class="getcode" id="btn_login_send_sms" onclickstyle="border-radius:5px;" style="display: inline;border: none;width: 100px;height: 30px;padding: 0 6px;background: #ff1877;border-radius: 2px;cursor: pointer;color: #fff;margin-left: 20px" value="获取动态密码">
						</li>
						<li class="read">
							<input type="checkbox" class="ck" name="check" value="1" checked="checked">
							<b>2周内自动登录</b>
							<a href="http://www.17sucai.com/preview/471626/2017-04-15/login/index.html#">忘记密码？</a>
						</li>
						
						<li>
							<input type="button" class="submit submit_btn_sms_code" type="submit" id="login-btn1" style="border-radius:5px; display: inline; border: none; width: 300px; height: 30px; padding: 0 6px; background: #ff1877; border-radius: 2px;
cursor: pointer; color: #fff;" value="登录"/>
						</li>
						<li>
							<a href="http://www.17sucai.com/preview/471626/2017-04-15/login/index.html#" class="haiwai">海外手机登录</a>
							<a href="http://www.17sucai.com/preview/471626/2017-04-15/login/index.html#" class="zhuce">新用户注册</a>
						</li>
						<li class="zjdl">
							无需注册即可登录：
						</li>
						<li>
							<div class="qq" style="border-radius:5px;"></div>
							<div class="weixin" style="border-radius:5px;"></div>
							<div class="weibo" style="border-radius:5px;"></div>
						</li>
					</ul>
				</form>	
				</div>
				<!-- 扫码登录 -->
				<div class="saoma" id="sm">
					<div class="screen-tu" id="screen"></div>
					<div class="saoyisao"></div>
					<div class="qr-code">
						<img src="./login/ereima_202x202.png" alt="">
					</div>
					<div class="link">
						<a href="http://www.17sucai.com/preview/471626/2017-04-15/login/index.html#">点击下载蘑菇街APP</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer-wrap">
			<div class="footer-wrap-top">
				<div class="footer-wrap-top-left">
					<dl>
						<dt>新手帮助</dt>
						<dd>
							<a href=""> 如何购买</a>
						</dd>
						<dd>
							<a href="">支付教程</a>
						</dd>
						<dd>
						<a href="">优惠券使用</a>
						</dd>
						<dd>
						<a href="">常见问题</a>
						</dd>
					</dl>
					<dl class="bz">
						<dt>权益保障</dt>
						<dd>
						<a href="">全国包邮</a>
						</dd>
						<dd>
						<a href="">7天无理由退货</a>
						</dd>
						<dd>
						<a href="">退货运费补贴</a>
						</dd>
						<dd>
						<a href="">72小时发货</a>
						</dd>
					</dl>
					<dl>
						<dt> 商家服务</dt>
						<dd>
						<a href="">免费开店</a>
						</dd>
						<dd>
						<a href=""> 商家社区</a>
						</dd>
						<dd>
						<a href="">商家入驻</a>
						</dd>
						<dd>
						<a href="">管理后台</a>
						</dd>
					</dl>
				</div>
				<div class="footer-wrap-top-right">
					<h2>蘑菇街移动客户端</h2>
					<img src="./login/erweima_180x76.png" alt="该链接已失效">
				</div>
			</div>
			<div class="footer-bottom">
				©Copyright 2010-2016蘑菇街 Mogujie.com (增值电信业务经营许可证：浙B2-20110349)			
			</div>
		</div>
	</div>
	<script src="./login/login.js"></script>

</body></html>
<script type="text/javascript">

var tokenstr = ''; 	

function login_get_tokenstr_callback(res){
	
	if(res.code != 1){
		
		alert('连接服务器失败！');
		
		return;
		
	}
	
	tokenstr = res.tokenstr;
	
	var url_img = http_server+'?g=Yanyubao&m=Shang&a=getverifycodeimg&tokenstr='+tokenstr+"&time="+new Date();
	
	$('#refresh2').attr('src', url_img);
	$('#refresh3').attr('src', url_img);
	
}



 function login_by_password_callback(res){
	
	console.log(111111111)
	
	console.log(res)
	
	if(res.code !=1){	 
			    
		alert(res.msg);
		login_get_tokenstr(login_get_tokenstr_callback);
		return;				
	}
	
	var userid=res.userid;
	var checkstr=res.checkstr;
	
	set_login_info(userid, checkstr);//本地保存用户信息
	
	self.location.href = 'index.php'; 
	 
}

function login_send_sms_callback(res){
		
	if(res.code != 1){
			
			alert(res.msg);
			
			return;
	}
		
		alert(res.msg);
		
}

function login_by_sms_code_callback(res){
	
	if(res.code != 1){
		
		alert(res.msg);
		
		return;
	}	
	var userid = res.userid;
	
	var checkstr = res.checkstr;
	
	set_login_info(userid, checkstr);//本地保存用户信息
	
	self.location.href = 'index.php';
}


$(function(){
	
	login_get_tokenstr(login_get_tokenstr_callback);
	
	$('#refresh2').click(function(){
		login_get_tokenstr(login_get_tokenstr_callback);
	});

	$('#nopw').click(function(){
		login_get_tokenstr(login_get_tokenstr_callback);
	});

	$('#refresh3').click(function(){
		login_get_tokenstr(login_get_tokenstr_callback);
	});
	
	$(".submit_btn_password").click(function(){
		
		var mobile = $("#mobile").val();//账号
		
		var password = $("#password").val();//密码
		console.log(password);
		var verifycode=$("#J_codetext").val();//图片验证码
		login_by_password(mobile, password, verifycode, tokenstr, 
		login_by_password_callback)
	});

	$("#btn_login_send_sms").click(function(){
		
		var mobile = $("#mobile2").val();
		
		var verifycode = $("#J_codetext2").val();

		login_send_sms(mobile, verifycode, tokenstr, login_send_sms_callback);
		
	});
	
	$(".submit_btn_sms_code").click(function(){
			
			var mobile = $("#mobile2").val();
			
			var verifycode_sms = $("#pass").val();
			
			login_by_sms_code(mobile, verifycode_sms, login_by_sms_code_callback);
			
			login_get_tokenstr(login_get_tokenstr_callback);
			
	});
	
});
	</script>