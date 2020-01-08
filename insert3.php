<?php
include "../mars2/dbconnect.php";

session_start();
$time = date("Y-m-d G:i:s");
$userid2 = $_SESSION['userid'];
$title = $_POST['title'];
$content = $_POST[content];// userid2에 현재 로그인 된 아이디 정보를 담는다?>
<?php 



$sql = "insert into list(id,title,contents,time)";
$sql .= "values('$userid2', '$title', '$content','$time')";




mysql_query($sql, $connect);

mysql_close();


?>