<?php
 
	define('IN_ADMIN',True);
	require_once('../include/common.php');
	if ( !$_USER->id ) {
		show_msg('你还没有登录，请先登录', 'login.php', 1000);
	}
	if($_GET["menuid"]){
		$muid=$_GET["menuid"];
	}else{
		$muid=3;
	}
	global $_CACHE;
	get_cache('menu');
	foreach ( $_CACHE['menu'] as $row) {
		if($row['fatherid']==$muid){
				if(crm_menu_view($row["menuid"])){
					if($row[menutype]!='1'){
						if($row[keytable]!=''){
							if(is_superadmin() || check_purview($row[keytable])){
								echo '<h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>'.$row[menuname].'</h3>';
								crm_menu_tow($row[menuid]);
							}
						}else{
							echo '<h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span>'.$row[menuname].'</h3>';
							crm_menu_tow($row[menuid]);
						}
					}
				}else{
					if($row[menutype]!='1'){
						if($row[keytable]!=''){
							if(is_superadmin() || check_purview($row[keytable])){
								echo "<h3 class='f14'><span class='cu' title='点击操作'></span><a href=javascript:_MP(".$row[menuid].",'".$row[menuurl]."'); hidefocus='true' style='outline:none;'>".$row[menuname]."</a></h3>";
							}
						}else{
							echo "<h3 class='f14'><span class='cu' title='点击操作'></span><a href=javascript:_MP(".$row[menuid].",'".$row[menuurl]."'); hidefocus='true' style='outline:none;'>".$row[menuname]."</a></h3>";
						}
					}
				}
		}
	}
?>
<script type="text/javascript"> 
$(".switchs").each(function(i){
	var ul = $(this).parent().next();
	$(this).click(
	function(){
		if(ul.is(':visible')){
			ul.hide();
			$(this).removeClass('on');
				}else{
			ul.show();
			$(this).addClass('on');
		}
	})
});
</script>
