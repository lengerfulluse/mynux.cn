<html>
<head>
<title>MySql���ݿ������Ϣ...
</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>
<style type="text/css">
	body {font-size:12px}
	td {font:12px}
</style>
<?php
if(isset($_POST[host])){//�ύ��
	$db_lk=@mysql_connect("$_POST[host]","$_POST[loginuser]","$_POST[loginpw]");
	if($db_lk){
		if(mysql_select_db($_POST[usedb])){
			$msg="���������ӳɹ���<br>���ݿ�ʹ�óɹ�..";
		}else{
			$msg="���������ӳɹ���<br>���ݿ�ʹ��ʧ��..";
		}
	}else{
		$msg="������[$_POST[host]]����ʧ�ܣ�<br>�������:".mysql_errno()."<br>������Ϣ:".mysql_error();
	}	
}else{
	$msg="δ�������Ӳ���...";
}
?>
<body bgcolor="#FFFFFF">
<form name="form1" method="post" action="">
<div align=center id="layer1">
<table width="300" border="0" align="center" cellpadding="3" cellspacing="0" bordercolor="#996699" bgcolor="#CCCC99">
  <tr> 
    <td width="92"><p>����</p></td>
    <td width="192"><select name="host">
          <option value="127.0.0.1">127.0.0.1</option>
          <option value="localhost">localhost</option>
          <option value="qdm166485200.my3w.com">qdm166485200.my3w.com</option>
        </select></td>
  </tr>
  <tr> 
    <td>�����ʻ�</td>
    <td><input name="loginuser" type="text" id="loginuser" value="<?=$_POST[loginuser]?>" onkeyup="this.form.usedb.value=this.value+'_db'"></td>
  </tr>
  <tr> 
    <td>��������</td>
    <td><input name="loginpw" type="text" id="loginpw" value="<?=$_POST[loginpw]?>"></td>
  </tr>
  <tr>
    <td>ʹ�����ݿ�</td>
    <td><input name="usedb" type="text" id="usedb" value="<?=$_POST[usedb]?>"></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td><input name="cmdSubmit" type="submit" id="cmdSubmit" value=" �ͳ� "></td>
  </tr>
</table>
<div>
</form>
<p align=center><?=$msg?></p>
</body>
</html>
