<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>

<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 编辑通迅录</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px; float:right;margin-right:20px;">
	
	<a href="admin.php?ac=index&fileurl=<?php echo $fileurl?>&type=<?php echo $_GET['type']?>" style="font-size:12px;"><<返回列表页</a></span>
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{
   if(document.save.company.value=="")
   { alert("公司名称不能为空！");
     document.save.company.focus();
     return (false);
   }
   if(document.save.person.value=="")
   { alert("联系人不能为空！");
     document.save.person.focus();
     return (false);
   }
   if(document.save.tel.value=="")
   { alert("联系电话不能为空！");
     document.save.tel.focus();
     return (false);
   }
   if(document.save.phone.value=="")
   { alert("手机不能为空！");
     document.save.phone.focus();
     return (false);
   }
   if(document.save.sex.value=="")
   { alert("性别不能为空！");
     document.save.sex.focus();
     return (false);
   }
   
   return true;
}
function sendForm()
{
   if(CheckForm())
      document.save.submit();
}
</script>
<form name="save" method="post" action="?ac=edit&do=save&fileurl=communication">
	<input type="hidden" name="savetype" value="edit" />
	<input type="hidden" name="id" value="<?php echo $communication['id']?>" />
	<input type="hidden" name="type" value="<?php echo $_GET['type']?>" />
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
    <tr>
      <td nowrap class="TableContent" width="15%"> 公司名称：<? get_helps()?></td>
      <td class="TableData">
	  <input type="text" name="company" class="BigInput" size="40" value="<?php echo $communication['company']?>" /></td>
    </tr>
    <tr>
      <td nowrap class="TableContent"> 联系人：<? get_helps()?></td>
      <td class="TableData">
<input type="text" name="person" class="BigInput" size="20" value="<?php echo $communication['person']?>" />
      </td>
    </tr>

	
	
	 <tr>
      <td nowrap class="TableContent"> 联系电话：<? get_helps()?></td>
      <td class="TableData">
	   <input type="text" name="tel" class="BigInput" size="40" value="<?php echo $communication['tel']?>" />
      </td>
    </tr>

 
     <tr>
      <td nowrap class="TableContent" width="15%"> 手机：<? get_helps()?></td>
      <td class="TableData"><input type="text" name="phone" class="BigInput" size="20" value="<?php echo $communication['phone']?>" /></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 传真：</td>
      <td class="TableData"><input type="text" name="fax" class="BigInput" size="30" value="<?php echo $communication['fax']?>" /></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> E_mail：</td>
      <td class="TableData"><input type="text" name="mail" class="BigInput" size="40" value="<?php echo $communication['mail']?>" /></td>
    </tr>
 	<tr>
      <td nowrap class="TableContent" width="15%"> 邮编：</td>
      <td class="TableData"><input type="text" name="zipcode" class="BigInput" size="20" value="<?php echo $communication['zipcode']?>" /></td>
    </tr>
		<tr>
      <td nowrap class="TableContent" width="15%"> 地址：</td>
      <td class="TableData"><input type="text" name="address" class="BigInput" size="60" value="<?php echo $communication['address']?>" /></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 职位：</td>
      <td class="TableData"><input type="text" name="position" class="BigInput" size="20" value="<?php echo $communication['position']?>" /></td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> 性别：<? get_helps()?></td>
      <td class="TableData"><input name="sex" type="radio" value="男" <?php if($communication['sex']=='男') {?>checked="checked"<?php } ?> style="border:0px;" />男
			<input name="sex" type="radio" value="女" <?php if($communication['sex']=='女') {?>checked="checked"<?php } ?> style="border:0px;" />女</td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%"> MSN/(QQ)：</td>
      <td class="TableData"><input type="text" name="msn" class="BigInput" size="50" value="<?php echo $communication['msn']?>" /></td>
    </tr>
 
    <tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">

		<input type="button" name="Submit" value="保存信息" class="BigButton" onclick="sendForm();"> 
        
      </td>
    </tr>
  </table>
</form>
</body>
</html>
