<?php

include "../mars2/dbconnect.php";

session_start();
$deletenum = $_SESSION['num']; //�Ѱܹ��� �۹�ȣ ���� 


$sql = "select * from list where num='$deletenum'";
$ret = mysql_query($sql);
$row = mysql_fetch_array($ret);



if($ret){
    
    //����
    
    $sql2= "delete from list where num='$deletenum'";
    $ret2= mysql_query($sql2);
    if($ret2){
        echo ("
           <script>
             window.alert('�Խñ��� �����Ǿ����ϴ�.')
             location.href = 'http://localhost/mars2/content.php';
           </script>
         ");}
    else{ echo("<script> window.alert('�Խñ��������������߽��ϴ�.')
                location.href = 'http://localhost/mars2/content.php';
                </script>
            ");}
   
   
}
    
?>
