<?php 
session_start();
$userid2 = $_SESSION['userid'];

?>

<?
include "../mars2/insert3.php";

echo "입력하신 정보가 저장되었습니다";

echo "결과 확인화면 <br />";

echo "작성자 : $userid2 <br />";

echo "제목 :  {$_POST[title]}  <br />";

echo "내용 : {$_POST[content]}  <br />";

echo "작성시간 : $time <br />";


echo ("
           <script>
             window.alert('입력하신정보가 저장되었습니다.')
             location.href = 'http://localhost/mars2/content.php';
           </script>
         ");

?>