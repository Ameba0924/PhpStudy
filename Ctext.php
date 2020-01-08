<?php

include "../mars2/dbconnect.php";

session_start();
$userid2 = $_SESSION['userid'];
$com_num = $_SESSION['num'];
if (! $userid2) { // 현재 로그인아이디와 정보가 맞지 않으면 로그인 페이지로 이동
    echo ("<script>
    window.alert('로그인하지않고  시도했기에 로그인페이지로 넘어갑니다.')
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
<title>[Mars2팀 게시판]</title>
</head>
<h1 align="center" style="color: white;">MARS2</h1>
<body  style="background-image: url('./img/jenny.png'); background-color:silver;
background-repeat: no-repeat; background-size: 1920px 1080px ">
 <div id="allboard" align="center" >
 <div id="board" >
  <table border="1" style="border-style:dotted; background-color:silver; font-style: oblique;" >
   <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">작성자</td>
        <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?=$row['id']?></td>
         <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">제목</td>
        <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?=$row['title']?></td>
	 <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">내용</td>
        <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?=$row['contents']?></td>
	 <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">작성시간</td>
        <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?=$row['time']?></td>
       
	<?php 
	$sessionnum = $row['num'];
	$_SESSION['num'] = $sessionnum //넘길값의 DB상 글번호를 세션으로 넘겨줌 ?>   
	</table>
	<input type = button value = "목록으로" onclick= "javascript:location.href='http://localhost/mars2/content.php'"> 
	<?php if ( $row['id'] == $userid2){ ?>
	<input type = button value = 삭제하기 
    onclick = "javascript:location.href ='http://localhost/mars2/delete.php?num=<?=$row['num']?>'">
    <?};?>
    <?php if ( $row['id'] == $userid2){ ?>
	<input type = button value = 수정하기
    onclick = "javascript:location.href ='http://localhost/mars2/update.php?num=<?=$row['num']?>'">
    <?};?>
    <!-- 로그아웃 -->
    <input type = button value = 로그아웃 
    onclick = "javascript:location.href='http://localhost/mars2/logout.php'">
	
	<!-- 댓글 뿌려주기  -->
	
	<?php include "../mars2/com_result.php";?>
	
	
	<!-- 댓글작성  -->
	
	<?php 
	include "../mars2/comment.php";?>

	

        
	



