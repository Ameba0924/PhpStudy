<?
include "../mars2/dbconnect.php";

$sql = "select * from member where id='$id'";
$result = mysql_query($sql, $connect);
$exist_id = mysql_num_rows($result);

if ($exist_id) {
    echo ("
    <script>
    window.alert('�ش� ���̵� �����մϴ�.') 
    history.go(-1)
</script>
");
    exit();
} else {
    // ���Ը��
    $sql = "insert into member(id, name, pw, gender, email)";
    $sql .= "values('$id', '$name', '$pw', '$gender', '$email')";
    mysql_query($sql, $connect); // sql�� ����� ��� ����
}
mysql_close();

?>