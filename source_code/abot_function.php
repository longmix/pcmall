<?php

//一些常用函数
function get_current_domain(){
	if (isset($_SERVER['HTTP_X_FORWARDED_HOST'])){
		return $_SERVER['HTTP_X_FORWARDED_HOST'];
	}
	else if (isset($_SERVER['HTTP_HOST'])) {
		//dump($_SERVER['HTTP_HOST']);exit;
		return $_SERVER['HTTP_HOST'];
	}
		
	return "";
}

function get_current_page_url() {
	$sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
	
	//2018.04.06 针对阿里云CDN的请求，如果是https的，从CDN上转过来的依然是80端口，但是会带 HTTP_X_CLIENT_SCHEME 这个参数
	if (@$_SERVER['HTTP_X_CLIENT_SCHEME'] == 'https'){
		$sys_protocal = 'https://';
	}
	
	$php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
	$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';

	$query_string = $_SERVER['QUERY_STRING'];
	//var_dump($_SERVER['QUERY_STRING']);
	if (isset($query_string)){
		$query_string = str_replace(array('<', '>'), array('%3C', '%3E'), $query_string);
		$query_string = str_replace("'", "",  $query_string);
	}
	
	//Log::write('11111111111111111111111'.print_r($_SERVER, true));
	//Log::write('11111111111111111111111'.$sys_protocal);

	$request_uri = $_SERVER['REQUEST_URI'];
	if(isset($request_uri)){
		$request_uri = str_replace(array('<', '>'), array('%3C', '%3E'), $request_uri);
		$request_uri = str_replace("'", "",  $request_uri);
	}
	$relate_url = isset($request_uri) ? $request_uri : $php_self.(isset($query_string) ? '?'. $query_string: $path_info);

	return $sys_protocal . get_current_domain() . $relate_url;
}


function abot_curl_post($url, $data){
	$ch = curl_init();
	$header = array(
			"Accept-Charset: utf-8",
	);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$temp = curl_exec($ch);
	return $temp;
}



