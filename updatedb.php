<?php
include "dbconnect.php";

session_start();

$title = $_POST[title];
$content = $_POST[content];
$updatenum = $_SESSION['num'];
$time = date("Y-m-d G:i:s");    //수정시 시간 최신화 해줌 [글수정시 작성시간 지금으로바꿈]

$sql = "update list set title='$title',contents='$content',time='$time'
        where num = '$updatenum'";

$ret = mysql_query($sql);

if($ret){
    echo ("
           <script>
             window.alert('게시글이 수정되었습니다.')
             location.href = 'http://localhost/mars2/content.php';
           </script>
         ");}
    else{ echo("<script> window.alert('게시글이 수정되지않았습니다.')
                location.href = 'http://localhost/mars2/content.php';
                </script>
            ");}
    



?>