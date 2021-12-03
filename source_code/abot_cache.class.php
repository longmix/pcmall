<?php
class AbotCache {
	private $cache_path;//path for the cache
	private $cache_expire;//seconds that the cache expires
	 
	//cache constructor, optional expiring time and cache path
	//如果永不过期，将过期时间设置为0
	public function __construct($exp_time=3600,$path="cache/"){
		$this->cache_expire=$exp_time;
		$this->cache_path=$path;
		
		if(!is_dir($path)){
			mkdir($path);
		}
	}
	 
	//returns the filename for the cache
	private function fileName($key){
		return $this->cache_path.md5($key);
	}
	 
	//creates new cache files with the given data, $key== name of the cache, data the info/values to store
	//返回存储的大小
	public function put($key, $data){
		$values = serialize($data);
		$filename = $this->fileName($key);
		
		$file = fopen($filename, 'w');
		if ($file){//able to create the file
			$nSize = fwrite($file, $values);
			fclose($file);
			
			return $nSize;
		}
		else {
			return false;
		}
	}
	 
	//returns cache for the given key
	public function get($key){
		$filename = $this->fileName($key);

		if (!file_exists($filename) || !is_readable($filename)){
			//can't read the cache			
			return false;
		}
		
		//如果设置了超时时间，并且已经超时
		if(!$this->cache_expire || ((filemtime($filename) + $this->cache_expire) <= time())){
			$file = fopen($filename, "r");// read data file
			
			if ($file){//able to open the file
				$data = fread($file, filesize($filename));
				fclose($file);
				return unserialize($data);//return the values
			}
		}
		
		return false;//was expired you need to create new
		
	}
	
	public function remove($key){
		$filename = $this->fileName($key);
		
		unlink($filename);
	}
}

/**
 * 增加一个缓存
 * @param unknown $key
 * @param unknown $cache 缓存的内容，可以为对象和数组；如果为null，代表删除缓存；如果不传，代表读取缓存
 * @param unknown $expire 超时时间
 */
function abot_cache($key, $cache='45tfdgfd54rdfdgdf4terfdc', $expire=0){
	$abot_cache = new AbotCache($expire);
	
	if ($cache){
		if ($cache != '45tfdgfd54rdfdgdf4terfdc'){
			return $abot_cache->put($key, $cache);
		}
		else{
			return $abot_cache->get($key);
		}
	}
	else{
		return $abot_cache->remove($key);
	}
}

