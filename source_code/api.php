<?php
/**
 * 对外提供API接口
 * 
 * 清楚商户缓存
 * http://damaijia.abot.cn/api.php?ensellerid=pQNNmSkaq&action=clear_cache
 * 
 */



//error_reporting(E_ALL  ^  E_NOTICE);

ini_set("display_errors","On");
error_reporting(E_ALL);

require_once 'config/basic.php';

require_once 'abot_function.php';
require_once 'abot_cache.class.php';

//获取sellerid及其相关配置
require_once 'shop_init.php';

if(@$_GET['action'] == 'clear_cache'){
	$ensellerid = $basic_config['current_ensellerid'];
	//api_clear_cache($ensellerid);
	
	$cache_key = 'pcmall_system_setting_'.$ensellerid;
	
	abot_cache($cache_key, null);
	
	echo '清除缓存成功！';
	
	
}
else if(@$_GET['action'] == 'clear_domain_to_ensellerid'){
	$cache_key = 'pcmall_domain_to_ensellerid';
	
	abot_cache($cache_key, null);
	
	echo '清除缓存成功！clear_domain_to_ensellerid';
}
else{
	$aa= array('aa'=>'111', 'bb'=>'2222');
	
	//$ret = abot_cache('test_cache', $aa);var_dump($ret);
	//return;
	
	
	
	$ret = abot_cache('test_cache');
	var_dump($ret);
	
	return;
	$ret = abot_cache('test_cache', null);
	var_dump($ret);
	
	$ret = abot_cache('test_cache');
	var_dump($ret);
}









  

  
  
  
  
  
  
  

        