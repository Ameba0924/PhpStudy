<?
session_start();

echo "���� ���� id : ";
echo $_SESSION['userid'], "<br>";

unset($_SESSION['userid']); // ���� �α��εǾ��ִ� ���̵� ����

echo "������ �����Ǿ����ϴ� <br> ";
echo $_SESSION['userid'];

echo ("
           <script>
             window.alert('������ �����Ǿ� �α����������� �Ѿ�ϴ�.')
              location.href = './login.php';
        </script>
         ");

/*
 * echo("
 * <script>
 * location.href = './login.php';
 * </script>
 * ");
 */
?>
