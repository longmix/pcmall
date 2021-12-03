</div>
</div>
<div class="footer" style="margin-top: 0;">
	<div class="box" style=" width:1226px; margin:0 auto">
        <ul class="lian">
            <!-- <li style="width:110px;">
                <p><img src="img/fot2.png">配送说明</p>
                <a>配送运费：</a>
                <span>实物商品按照配送地区费用会略有区别，出特殊说明的商品外，江浙沪免快递费。</span>
                <a>配送时间：</a>
                <span>虚拟商品根据服务特性决定是否自动发货，实物商品72小时内发货。</span>
            </li>
            <li style="width:110px;">
                <p><img src="img/fot3.png">售后服务</p>
                <a>技术服务标准：</a>
                <span>平台严格遵守顾客服务协议，为您提供5X8售后服务，对于定制类产品，提供24小时响应。</span>
                <a>退换货流程：</a>
                <span>账号类的虚拟商品享受24小时内免手续费退换货，注册码类商品享受7天半价退货，实物类商品具体按照市场相关政策执行。</span>
            </li> -->
<?php 
foreach($basic_config['footer_nav_group_list'] as $nav_line){
	echo '<li>
   		<p><img src="'.$nav_line['icon'].'">'.$nav_line['title'].'</p>';

	foreach($nav_line['item_list'] as $nav_item){
		if($nav_item['url']){
			echo '<a href="'.$nav_item['url'].'">'.$nav_item['name'].'</a>';
		}
		else{
			echo '<a>'.$nav_item['name'].'</a>';
		}
	}

	echo '</li>'; 
}

//显示最后一组（第六组）
echo '<li>
   		<p><img src="http://damaijia.abot.cn/img/fot4.png">快捷链接</p>';
foreach ($basic_config['footer_quick_link_list'] as $nav_item){
	if($nav_item['url']){
		echo '<a href="'.$nav_item['url'].'">'.$nav_item['name'].'</a>';
	}
	else{
		echo '<a>'.$nav_item['name'].'</a>';
	}
}
echo '</li>';

?>            
        </ul>
        <ul class="adv">
        	<li><img src="img/adv.png">正品保障</li>
            <li><img src="img/adv1.png">免手续费</li>
            <li><img src="img/adv2.png">安全配送</li>
            <li style="border-right:none;"><img src="img/adv3.png">实物拍摄</li>
        </ul>
        <p class="ad">地址：<?php echo $basic_config['pc_footer_address']; ?>
        	&nbsp;&nbsp;&nbsp;邮箱：<?php echo $basic_config['pc_footer_email']; ?> 
        	&nbsp;&nbsp;&nbsp;电话：<?php echo $basic_config['pc_footer_tel']; ?></p>
        <p class="ad">Copyright © <?php echo date('Y'); ?> 版权所有  &nbsp;&nbsp;&nbsp;
        <a href="http://www.beian.miit.gov.cn/" target="_blank"><?php echo $basic_config['pc_icp_beianhao']; ?></a></p>
    </div>
</div>