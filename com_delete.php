<?php

include "../mars2/dbconnect.php";
session_start();



$sql = "select * from comment where num='$_GET[num]'";
$ret = mysql_query($sql);
//$row = mysql_fetch_array($ret);



if($ret){
    
    //삭제
    
    $sql2= "delete from comment where num='$_GET[num]'";
    $ret2= mysql_query($sql2);
    if($ret2){
        echo ("
           <script>
             window.alert('게시글이 삭제되었습니다.')
             history.go(-1);
           </script>
         ");}
        else{ echo("<script> window.alert('게시글을삭제하지못했습니다.')
                location.href = 'http://localhost/mars2/content.php';
                </script>
            ");}
        
        
}

?>
