<?
session_start();
$userid2 = $_SESSION['userid']; // userid2�� ���� �α��� �� ���̵� ������ ��´�
?>

<?

include "../mars2/dbconnect.php";

$sql = "select * from member where id='$id'";
$result = mysql_query($sql, $connect);
$id2 = mysql_num_rows($result);

// ���Ը��

// �α��� �� �ڱ�Ұ� �Է��ϸ� �� db���� �� ���̵� ã�� textĭ�� �Է°��� �����Ѵ�
$sql = "update member set text='{$_POST['text']}' where id='$userid2'";
mysql_query($sql, $connect);

// sql�� ����� ��� ����

mysql_close();

?>