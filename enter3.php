<?php 
session_start();
$userid2 = $_SESSION['userid'];

?>

<?
include "../mars2/insert3.php";

echo "�Է��Ͻ� ������ ����Ǿ����ϴ�";

echo "��� Ȯ��ȭ�� <br />";

echo "�ۼ��� : $userid2 <br />";

echo "���� :  {$_POST[title]}  <br />";

echo "���� : {$_POST[content]}  <br />";

echo "�ۼ��ð� : $time <br />";


echo ("
           <script>
             window.alert('�Է��Ͻ������� ����Ǿ����ϴ�.')
             location.href = 'http://localhost/mars2/content.php';
           </script>
         ");

?>