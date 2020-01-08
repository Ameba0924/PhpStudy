<?
session_start();

echo "현재 세션 id : ";
echo $_SESSION['userid'], "<br>";

unset($_SESSION['userid']); // 현재 로그인되어있는 아이디 삭제

echo "세션이 삭제되엇습니다 <br> ";
echo $_SESSION['userid'];

echo ("
           <script>
             window.alert('세션이 삭제되어 로그인페이지로 넘어갑니다.')
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
