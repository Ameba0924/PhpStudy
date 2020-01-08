<?
include "../mars2/dbconnect.php";
session_start();
$contentnum = $_SESSION['num'];
$userid2 = $_SESSION['userid'];

?>
<?

$com = $_POST['comment'];
$time = date("Y-m-d G:i:s");
$com_id = $userid2;
$com_num = $contentnum;



$sql = "insert into comment(id, comment, time, com_num)";
$sql .= "values('$com_id', '$com', '$time', '$com_num')";
mysql_query($sql, $connect); // sql에 저장된 명령 실행


echo ("
           <script>
             window.alert('댓글이 등록되었습니다.')
             history.go(-1)
           </script>
         ");



?>

