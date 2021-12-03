<?php

$basic_config = array(
		'current_ensellerid'=>'pQNNmSkaq',
		
		//网站标题
		'site_title'=>'延誉宝大卖家云服务市场',
		'shop_name'=>'延誉宝大卖家云服务市场',
		
		/***************/
		/*** 头部设置 ***/
		/***************/
		//官网的名称和链接（左上角）
		'header_homepage_name'=>'延誉官网',
		'header_homepage_url'=>'http://www.abot.cn',
		
		//二维码的名称和二维码图片（左上角）
		'header_qrcode_name'=>'关注公众号',
		'header_qrcode_img_url'=>'http://www.abot.cn/wp-content/themes/abotcn/images/yanyu_weixin_250px.jpg',
		
		//网站Logo地址（头部左侧）如果没有默认使用商城设置的，建议尺寸360*60
		'logo_header_left'=>'http://yanyubao.tseo.cn/Conf/images/yanyubao_100px.png',
		//在页脚显示的Logo（一般是白色图形）
		'logo_in_footer'=>'http://yanyubao.tseo.cn/Conf/images/yanyubao_100px.png',
		
		//头部"全部商品分类"右侧的导航图标，第一项必须为商城首页的URL
		'nav_right_good_cata_name' => array(
				array('title'=>'首页', 'url'=>'index.php'),
				array('title'=>'全部商品', 'url'=>'list.php'),
				//array('title'=>'公司主页', 'url'=>'http://www.abot.cn', 'target'=>'_blank'),
				array('title'=>'会员套餐', 'url'=>'http://www.abot.cn/yanyubaovip', 'target'=>'_blank'),
				array('title'=>'延誉宝', 'url'=>'http://yanyubao.tseo.cn/saasdocs/', 'target'=>'_blank'),
				array('title'=>'微读客', 'url'=>'http://www.weiduke.com', 'target'=>'_blank'),
				array('title'=>'邮件营销', 'url'=>'http://www.qunfa158.com', 'target'=>'_blank'),
		),
		
		/***************/
		/*** 首页设置 ***/
		/***************/
		
		
		//首页滚动广告开关：如果为1，使用flash_ad_list，否则使用延誉宝后台设置的H5首页滚动广告
		'flash_ad_list_flag' => 1,
		'flash_ad_list' => array(
			array('image'=>'https://img.alicdn.com/imgextra/i4/791260090/O1CN01jxFAmv1CXGEO1HYRG_!!791260090.png',
					'url'=>'http://www.abot.cn/525.html'
			),
			array('image'=>'http://www.abot.cn/wp-content/themes/abotcn/images/banner_img1.jpg',
					'url'=>'http://yanyubao.tseo.cn/app.php'
			),
		),
		
		
		'footer_nav_group_list' => array(
				array('title'=>'新手指南', 'icon'=>'http://damaijia.abot.cn/img/fot.png', 
						'item_list'=>array(array('name'=>'购物流程', 'url'=>''),
								array('name'=>'会员计划及划分', 'url'=>''),
								array('name'=>'优惠券规则', 'url'=>''),
								array('name'=>'联系客服', 'url'=>''),
								array('name'=>'常见问题', 'url'=>''),
						)
						
				),
				array('title'=>'付款方式', 'icon'=>'http://damaijia.abot.cn/img/fot1.png', 
						'item_list'=>array(array('name'=>'在线支付', 'url'=>''),
								array('name'=>'礼品卡支付', 'url'=>''),
								array('name'=>'货到付款', 'url'=>''),
								array('name'=>'银行付款', 'url'=>''),
						)
						
				),
				array('title'=>'配送服务', 'icon'=>'http://damaijia.abot.cn/img/fot2.png',
						'item_list'=>array(array('name'=>'配送时效及运费', 'url'=>''),
								array('name'=>'超时赔付', 'url'=>''),
								array('name'=>'验货与签收', 'url'=>''),
								array('name'=>'配货信息跟踪', 'url'=>''),
						)
				
				),
				array('title'=>'售后服务', 'icon'=>'http://damaijia.abot.cn/img/fot3.png',
						'item_list'=>array(array('name'=>'退换货政策', 'url'=>''),
								array('name'=>'退换货区域', 'url'=>''),
								array('name'=>'退款时限', 'url'=>''),
								array('name'=>'先行赔付', 'url'=>''),
								array('name'=>'发票说明', 'url'=>''),
						)
				
				),
				array('title'=>'特色服务', 'icon'=>'http://damaijia.abot.cn/img/fot4.png',
						'item_list'=>array(array('name'=>'礼品卡', 'url'=>''),
								array('name'=>'产品试用', 'url'=>''),
								array('name'=>'花粉中心', 'url'=>''),
								array('name'=>'快速购物', 'url'=>''),
								array('name'=>'推荐好友', 'url'=>''),
						)
				
				),
		),
		
		'footer_quick_link_list' => array(array('name'=>'关于我们', 'url'=>'http://www.abot.cn/aboutus'),
						array('name'=>'发展历程', 'url'=>'http://www.abot.cn/history'),
						array('name'=>'Wordpress模板', 'url'=>'http://www.abot.cn/qiye211themehelp'),
						array('name'=>'常用二维码', 'url'=>'http://www.abot.cn/qrcode'),
		),
		
		

		//登录页面的广告图片，建议大小为 400x300
		'login_bg_img'=>'http://test.tseo.cn:888/yanyubao/web/pcmall_php/login/zhuce_400x300.jpg',
		
		
);


