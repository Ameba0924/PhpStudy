<?php

include "../mars2/dbconnect.php";

session_start();
$userid2 = $_SESSION['userid'];
$com_num = $_SESSION['num'];
if (! $userid2) { // ���� �α��ξ��̵�� ������ ���� ������ �α��� �������� �̵�
    echo ("<script>
    window.alert('�α��������ʰ�  �õ��߱⿡ �α����������� �Ѿ�ϴ�.')
    location.href = './login.php';
    </script>
");
}

$sql = "select * from list where num=$_GET[num]";
$ret = mysql_query($sql);
$row = mysql_fetch_array($ret);

?>




<!DOCTYPE html>
<html>
<head>
<title>[Mars2�� �Խ���]</title>
</head>
<h1 align="center" style="color: white;">MARS2</h1>
<body  style="background-image: url('./img/jenny.png'); background-color:silver;
background-repeat: no-repeat; background-size: 1920px 1080px ">
 <div id="allboard" align="center" >
 <div id="board" >
  <table border="1" style="border-style:dotted; background-color:silver; font-style: oblique;" >
   <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">�ۼ���</td>
        <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?=$row['id']?></td>
         <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">����</td>
        <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?=$row['title']?></td>
	 <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">����</td>
        <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?=$row['contents']?></td>
	 <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">�ۼ��ð�</td>
        <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?=$row['time']?></td>
       
	<?php 
	$sessionnum = $row['num'];
	$_SESSION['num'] = $sessionnum //�ѱ氪�� DB�� �۹�ȣ�� �������� �Ѱ��� ?>   
	</table>
	<input type = button value = "�������" onclick= "javascript:location.href='http://localhost/mars2/content.php'"> 
	<?php if ( $row['id'] == $userid2){ ?>
	<input type = button value = �����ϱ� 
    onclick = "javascript:location.href ='http://localhost/mars2/delete.php?num=<?=$row['num']?>'">
    <?};?>
    <?php if ( $row['id'] == $userid2){ ?>
	<input type = button value = �����ϱ�
    onclick = "javascript:location.href ='http://localhost/mars2/update.php?num=<?=$row['num']?>'">
    <?};?>
    <!-- �α׾ƿ� -->
    <input type = button value = �α׾ƿ� 
    onclick = "javascript:location.href='http://localhost/mars2/logout.php'">
	
	<!-- ��� �ѷ��ֱ�  -->
	
	<?php include "../mars2/com_result.php";?>
	
	
	<!-- ����ۼ�  -->
	
	<?php 
	include "../mars2/comment.php";?>

	

        
	



