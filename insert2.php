<?
session_start();
$userid2 = $_SESSION['userid']; // userid2에 현재 로그인 된 아이디 정보를 담는다
?>

<?

include "../mars2/dbconnect.php";

$sql = "select * from member where id='$id'";
$result = mysql_query($sql, $connect);
$id2 = mysql_num_rows($result);

// 삽입명령

// 로그인 후 자기소개 입력하면 그 db에서 그 아이디를 찾아 text칸에 입력값을 삽입한다
$sql = "update member set text='{$_POST['text']}' where id='$userid2'";
mysql_query($sql, $connect);

// sql에 저장된 명령 실행

mysql_close();

?>