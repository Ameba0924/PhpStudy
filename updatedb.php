<?php
include "dbconnect.php";

session_start();

$title = $_POST[title];
$content = $_POST[content];
$updatenum = $_SESSION['num'];
$time = date("Y-m-d G:i:s");    //������ �ð� �ֽ�ȭ ���� [�ۼ����� �ۼ��ð� �������ιٲ�]

$sql = "update list set title='$title',contents='$content',time='$time'
        where num = '$updatenum'";

$ret = mysql_query($sql);

if($ret){
    echo ("
           <script>
             window.alert('�Խñ��� �����Ǿ����ϴ�.')
             location.href = 'http://localhost/mars2/content.php';
           </script>
         ");}
    else{ echo("<script> window.alert('�Խñ��� ���������ʾҽ��ϴ�.')
                location.href = 'http://localhost/mars2/content.php';
                </script>
            ");}
    



?>