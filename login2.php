<?
session_start();

$_SESSION['cnt'] = $cnt; // �α��� �����Ҷ����� ���Ǻ����� ������ 5ȸ�ʰ��� �α��� ���ϰ� �ϱ� ����

?>
<meta charset="euc-kr">
<?
// ����ȭ�鿡�� �̸��� �Էµ��� �ʾ����� "�̸��� �Է��ϼ���"
// �޽��� ���
if (! $id) {
    echo ("
           <script>
             window.alert('���̵� �Է��ϼ���.')
             history.go(-1)
           </script>
         ");
    exit();
}

if (! $pw) {
    echo ("
           <script>
             window.alert('��й�ȣ�� �Է��ϼ���.')
             history.go(-1)
           </script>
         ");
    exit();
}

include "../mars2/dbconnect.php";

$sql = "select * from member where id='$id'";
$result = mysql_query($sql, $connect);

$num_match = mysql_num_rows($result);

if (! $num_match) {
    $cnt ++; // ���̵� �������� ������ ���Ǻ��� ����

    if ($cnt >= 6) { // ���� 6ȸ���ʹ� ���̻� �α��� �� �� ������
        echo ("<script>
        window.alert('���̵� �Ǵ� ��й�ȣ 5ȸ�̻� Ʋ���ż� �α��θ��Կ�')
    location.href = 'http://localhost/mars2/join.php';
        </script>
              ");
        $cnt = 0; // �α��� �� 5ȸ ������ ȸ������ �������� �Ѿ�� ���Ǻ����� �ٽ� 0���� �ʱ�ȭ�� ���� �α��ζ� ������ ���� �ʵ��� �Ѵ�
    } else {
        echo ("
           <script>
             window.alert('��ϵ��� ���� ���̵��Դϴ�.Ʋ��Ƚ�� : $cnt')
             history.go(-1)
           </script>
         ");
    }
} else {
    $row = mysql_fetch_array($result);

    $db_pw = $row[pw];

    if ($pw != $db_pw) {
        $cnt ++; // ��й�ȣ�� Ʋ�������� ���Ǻ��� ����

        if ($cnt >= 6) {
            echo ("<script>
        window.alert('���̵� �Ǵ� ��й�ȣ 5ȸ�̻� Ʋ���ż� �α��θ��Կ�')
        location.href = 'http://localhost/mars2/join.php';
        </script>");
            $cnt = 0;
        } else {
            echo ("
              <script>
                window.alert('��й�ȣ�� Ʋ���ϴ�. Ʋ��Ƚ�� : $cnt')
                history.go(-1)
              </script>
           ");

            exit();
        }
    } else {
        $userid = $row[id];
        $_SESSION['userid'] = $userid;
        $cnt = 0; // �α��� ���� �� �ڱ�Ұ��Է� �������� �Ѿ�� 0���� �ʱ�ȭ�� ���� �α��ζ� ������ ���� �ʵ��� �Ѵ�
        echo ("
              <script>
                location.href = './text.php';
              </script>
           "); // �α��� ������ �ڱ�Ұ� �Է���������
    }
}
?>
