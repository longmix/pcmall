<?php

//确定sellersn的值
if(@$_GET['ensellerid']){
	setcookie('current_ensellerid', $_GET['ensellerid'], time()+30*24*60*60);
	//$basic_config[''] = $_GET['ensellerid'];
}

if(@$_COOKIE['current_ensellerid']){
	$basic_config['current_ensellerid'] = $_COOKIE['current_ensellerid'];
}
else{
	//$request_uri = $_SERVER['REQUEST_URI'];
	//var_dump($request_uri);
	
	//如果快速高效的通过域名来判断
	$the_host = @$_SERVER['HTTP_HOST'];
	
	/* if ($the_host == 'damaijia.abot.cn'){
		setcookie('current_ensellerid', 'pQNNmSkaq', time()+30*24*60*60);
	}
	else if ($the_host == 'shop.tengyumall.com'){
		setcookie('current_ensellerid', 'fSNQPajka', time()+30*24*60*60);
	} */
	
	//====== 检查域名与sellerid的对应关系 ===
	$cache_key = 'pcmall_domain_to_ensellerid';
	$domain_to_ensellerid = abot_cache($cache_key);
	if (!$domain_to_ensellerid){
		$new_url = 'http://yanyubao.tseo.cn/openapi/SupplierInfo/get_pc_mall_domain_to_ensellerid';
		$post_data = '';
		
		$domain_to_ensellerid_str = abot_curl_post($new_url, $post_data);
		
		$domain_to_ensellerid_str = json_decode($domain_to_ensellerid_str, true);
		
		if($domain_to_ensellerid_str && ($domain_to_ensellerid_str['code'] == 1)){
			$domain_to_ensellerid = $domain_to_ensellerid_str['data'];
			
			abot_cache($cache_key, $domain_to_ensellerid);
		}
	}
	
	$current_ensellerid = null;
	
	if ($domain_to_ensellerid){
		$current_ensellerid = $domain_to_ensellerid[$the_host];
	}
	 
	if($current_ensellerid){
		setcookie('current_ensellerid', $current_ensellerid, time()+30*24*60*60);
	}
	else{
		setcookie('current_ensellerid', 'pQNNmSkaq', time()+30*24*60*60);
	}
	//============ End ================
}

$basic_config['current_ensellerid'] = $_COOKIE['current_ensellerid'];


//获取PC商城的基本配置
$cache_key = 'pcmall_system_setting_'.$basic_config['current_ensellerid'];

$system_setting = abot_cache($cache_key);

//$system_setting = null;

if (!$system_setting && $basic_config['current_ensellerid']){
	$new_url = 'http://yanyubao.tseo.cn/openapi/SupplierData/get_option_pc_mall';
	$post_data = 'sellerid='.$basic_config['current_ensellerid'];
	
	$system_setting = abot_curl_post($new_url, $post_data);
	
	$system_setting = json_decode($system_setting, true);
	
	if($system_setting && ($system_setting['code'] == 1)){
		abot_cache($cache_key, $system_setting);
	}
}

//用PC商城的设置，覆盖本地设置
if($system_setting && ($system_setting['code'] == 1)){
	foreach ($system_setting['data'] as $key=>$val){
		//var_dump($key, $val);
		
		if(strlen($val) == 0){
			continue;
		}
		
		if($key == 'pc_footer_sellerid'){
			$basic_config['site_title'] = $val;
			$basic_config['shop_name'] = $val;
		}
		else if($key == 'pc_url_index_logo'){
			$basic_config['logo_header_left'] = $val;
		}
		else if($key == 'pc_url_footer_logo_address'){
			$basic_config['logo_in_footer'] = $val;
		}
		else if($key == 'nav_right_good_cata_name_json'){
			$basic_config['nav_right_good_cata_name'] = json_decode($val, true);
		}
		else if($key == 'flash_ad_list_json'){
			$basic_config['flash_ad_list'] = json_decode($val, true);
		}
		else if($key == 'footer_nav_group_list_json'){
			$basic_config['footer_nav_group_list'] = json_decode($val, true);
		}
		else if($key == 'footer_quick_link_list_json'){
			$basic_config['footer_quick_link_list'] = json_decode($val, true);
		}
		else{
			$basic_config[$key] = $val;
		}
		
	}
}

//var_dump($new_url, $system_setting, $basic_config);

$ret_url = get_current_page_url();
$login_url = "http://yanyubao.tseo.cn/index.php?m=Interface&a=user_login&ret_url=".urlencode($ret_url)."&refresh_token=on";

    		