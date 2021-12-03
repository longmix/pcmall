<?php 
if (0){
?>
<!--乐乐周边啊-->
<div class="dy14">
 	<div class="dy15">
    	<ul>
        	<li><a href="#">乐乐OA<br/>乐乐OA</a></li>
            <li><a href="#">乐乐APP<br/>乐乐APP</a></li>
            <li><a href="#">乐乐网贷<br/>乐乐网贷</a></li>
            <li><a href="#">话费充值<br/>话费充值</a></li>
            <li><a href="#">乐乐订餐<br/>乐乐订餐</a></li>
            <li><a href="#">乐乐外包<br/>乐乐外包</a></li>
        </ul>
    </div>
    
   <!--平铺广告 -->
   	<div class="dy16">
    	<ul id="pingpu_list">
    	<script id="template_pingpu" type="text/x-jquery-tmpl">
        	<li><a href="#"><img src="${image}"/></a></li>
		</script>
           
        </ul>
    </div>
</div>

<script type="text/javascript">

//平铺广告
function pingpu_callback(res){
	
	$("#template_pingpu").tmpl(res.data).appendTo('#pingpu_list');
}


$(function(){

	var function_name = "get_flash_img_list";
	var request_data = {'data':" "};

	ajax_request_server(function_name, request_data, pingpu_callback);
})


</script>

<?php 
}
?>