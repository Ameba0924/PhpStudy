<?php

include "../mars2/dbconnect.php";
session_start();



$sql = "select * from comment where num='$_GET[num]'";
$ret = mysql_query($sql);
//$row = mysql_fetch_array($ret);



if($ret){
    
    //����
    
    $sql2= "delete from comment where num='$_GET[num]'";
    $ret2= mysql_query($sql2);
    if($ret2){
        echo ("
           <script>
             window.alert('�Խñ��� �����Ǿ����ϴ�.')
             history.go(-1);
           </script>
         ");}
        else{ echo("<script> window.alert('�Խñ��������������߽��ϴ�.')
                location.href = 'http://localhost/mars2/content.php';
                </script>
            ");}
        
        
}

?>
