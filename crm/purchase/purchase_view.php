<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">
<div id="navPanel">
<div id="navMenu" style="padding-left:50px;">
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>" ><span><img src="template/default/content/images/p3.gif" width="16" height="16" align="absmiddle">采购列表</span></a>
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&do=edit&id=<?php echo $view['id'];?>"><span><img src="template/default/content/images/p2.gif" width="16" height="16" align="absmiddle">采购编辑</span></a>
<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&do=view&id=<?php echo $view['id'];?>" class="active"><span><img src="template/default/content/images/p4.gif" width="16" height="16" align="absmiddle">采购查看</span></a>
<a href="#" onClick="window.open ('admin.php?ac=public&do=crmlog&fileurl=crm&viewid=<?php echo $view['id'];?>&modid=crm_purchase', '<?php echo $view['id'];?>', 'height=600, width=600, top=50, left=150, toolbar=no, menubar=no, scrollbars=yes, resizable=yes,location=no, status=no')"><span><img src="template/default/images/admin_img/detail.png" width="16" height="16" align="absmiddle">操作记录</span></a>
</div>
<div id="search" style="float: right; padding-right:100px;">
	
	<input type="button" value="新增采购" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=<?php echo $ac;?>&do=add&fileurl=<?php echo $fileurl;?>'">


 
</div>
</div>



<div style="position:absolute; height:90%; width:100%;overflow:auto"> 
<table class="TableBlock" border="0" width="95%" align="center" style="margin-top:20px;">
<tr>
      <td nowrap class="TableHeader" colspan="4">基本信息</td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 
        采购编号：</td>
      <td class="TableData" width="35%"><?php echo $view['number'];?></td>
      <td class="TableContent" width="15%"> 采购名称：</td>
      <td class="TableData" width="35%"><?php echo $view['title'];?>
       </td>
    </tr>
	<tr>
      <td nowrap class="TableContent">申请人：</td>
      <td class="TableData"><?php echo $view['user'];?></td>
      <td class="TableContent">金额合计：</td>
      <td class="TableData" style="font-size:18px; color:#FF0000; font-weight:900;">
<?php echo $view['pricenum'];?>
      </td>
    </tr>
	<tr>
      <td nowrap class="TableContent">供应商名称：</td>
      <td class="TableData">
	  <?php
	  if($view['sid']!=''){
		  echo public_value('title','crm_supplier','id='.$view['sid']);
	  }
	  ?>
	  </td>
      <td class="TableContent">日期：</td>
      <td class="TableData">
	 <?php echo $view['date'];?>
      </td>
    </tr>
</table>
<table class="TableBlock" border="0" width="95%" align="center">
<tr>
      <td nowrap class="TableHeader" colspan="4">产品信息</td>
    </tr>
	<tr>
      <td nowrap class="TableContent" style="font-weight:bold;">产品名称</td>
      <td class="TableContent" width="15%" align="center" style="font-weight:bold;">产品单价</td>
      <td class="TableContent" width="15%" align="center" style="font-weight:bold;">采购数量</td>
      <td class="TableContent" width="15%" align="center" style="font-weight:bold;">单位</td>
    </tr>
	<?php
	foreach ($result as $row) {
	$r = $db->fetch_one_array("SELECT title FROM ".DB_TABLEPRE."crm_product  WHERE id = '".$row['pid']."' ");
	?>
	<tr>
      <td nowrap class="TableData"><?php echo $r['title'];?></td>
      <td class="TableData" width="15%" align="center" ><?php echo trim($row['price']);?></td>
      <td class="TableData" width="15%" align="center"><?php echo trim($row['number']);?></td>
      <td class="TableData" width="15%" align="center"><?php echo trim($row['unit']);?></td>
    </tr>
	<?php }?>
	
</table>
<?php
//引入表单
form_view('采购信息','crm_purchase',$view['id']);
//引入编辑器
form_view_eweb('crm_purchase',$view['id']);
//引入流程
if($_flow==1){
	echo crm_flow_view($view['id'],'crm_purchase');
}
?>


</div> 
</form>

 
</body>
</html>
