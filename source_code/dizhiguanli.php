<?php
    $the_title="首页";
  require 'shop_header.php';
  
?>
	<?php $the_title="地址管理";
	 require 'user_header.php'; ?>
    <!--详细列表-->
    <div class="xiangxilbnm">
    	<!--left-->
       <?php require 'userleftmenu.php' ?>
        <!--right-->
        <div class="zuirifip" id="address_list">
        <!--地址列表和新增地址-->
          	<div class="dfdaspjtk" style=" margin-top:0">
            	<span style=" display:block; float:left; font-size:14px; font-weight:bold; line-height:34px; padding-left:20px; padding-right:20px; color:#666">地址列表</span>
            	<a href="#" style=" line-height:34px; font-weight:bold; color:#09f; float:right" class="zcznmdfc1">添加地址</a>
                <s style=" font-size:12px; color:#111; line-height:34px; display:block">注：最多保存20个地址</s>
            </div>
            <script id="template_address" type="text/x-jquery-tmpl">
            <!--一条地址开始-->
            <div class="adressdeliebi">
            
            	<div class="adressfive">
                	<div class="shrtm">
                    	<span>收货人</span>
                        <p>${name}</p>
                    </div>
                    <div class="shrszdq">
                    	<span>所在地区</span>
                        <p>${province_name}${district_name}</p>
                    </div>
                    <div class="shrjddz">
                    	<span>街道地址</span>
                        <p>${address}</p>
                    </div>
                    <div class="shrjbdh">
                    	<span>联系方式</span>
                        <p>${mobile}</p>
                    </div>
					
					<div>
						{{if is_default == 1}}
						<span style="color:#f00; margin-top:12px">当前选中地址</span>
						{{else}}
						<span class="change_address" id="${addressid}" style="cursor:pointer;margin-top:12px">选为默认地址</span>
						{{/if}}
					</div>	
					
                    <div class="shrtmdcz" style=" float:right">
                    	<span>操作</span>
                        <a href="#">编辑</a>
                        <a href="#">删除</a>
                    </div>
                </div>
			
            </div>
            <!--一条地址结束-->
</script>
            <!--地址结束-->
        </div>
        <!--right结束-->
    </div>
    <!--详细列表结束-->
</div>
<!--个人中心结束-->
<script type="text/javascript">
var loginItem = get_login_info();
	 
var userid = loginItem.userid;

var checkstr = loginItem.checkstr;

function address_list_callback(res)
{
	console.log('22222222222222222');
	console.log(res);
	$("#template_address").tmpl(res.addressList).appendTo("#address_list");
}

function address_save_callback(res)
{
	if(res.code == 1){
		alert('默认地址修改成功');
		window.location.reload();
	}
}
$(function(){

	ajax_request_server('address_list', {'userid':userid, 'checkstr':checkstr}, address_list_callback);

	$("body").on('click','.change_address', function(){
		var addressid = $(this).attr('id');
		var request_data = {'userid':userid, 'checkstr':checkstr, 'addressid':addressid,'moren':1,'action':'edit'};
		ajax_request_server('address_save', request_data, address_save_callback);
	});
});
	 


</script>



</body>
</html>    
                
        

