<?
include "../mars2/dbconnect.php";

$sql = "select * from member where id='$id'";
$result = mysql_query($sql, $connect);
$exist_id = mysql_num_rows($result);

if ($exist_id) {
    echo ("
    <script>
    window.alert('해당 아이디가 존재합니다.') 
    history.go(-1)
</script>
");
    exit();
} else {
    // 삽입명령
    $sql = "insert into member(id, name, pw, gender, email)";
    $sql .= "values('$id', '$name', '$pw', '$gender', '$email')";
    mysql_query($sql, $connect); // sql에 저장된 명령 실행
}
mysql_close();

?>