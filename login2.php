<?
session_start();

$_SESSION['cnt'] = $cnt; // 로그인 실패할때마다 세션변수를 증가해 5회초과시 로그인 못하게 하기 위함

?>
<meta charset="euc-kr">
<?
// 이전화면에서 이름이 입력되지 않았으면 "이름을 입력하세요"
// 메시지 출력
if (! $id) {
    echo ("
           <script>
             window.alert('아이디를 입력하세요.')
             history.go(-1)
           </script>
         ");
    exit();
}

if (! $pw) {
    echo ("
           <script>
             window.alert('비밀번호를 입력하세요.')
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
    $cnt ++; // 아이디가 존재하지 않으면 세션변수 증가

    if ($cnt >= 6) { // 실패 6회부터는 더이상 로그인 할 수 없도록
        echo ("<script>
        window.alert('아이디 또는 비밀번호 5회이상 틀리셔서 로그인못함요')
    location.href = 'http://localhost/mars2/join.php';
        </script>
              ");
        $cnt = 0; // 로그인 총 5회 실패후 회원가입 페이지로 넘어갈때 세션변수를 다시 0으로 초기화해 다음 로그인때 영향을 받지 않도록 한다
    } else {
        echo ("
           <script>
             window.alert('등록되지 않은 아이디입니다.틀린횟수 : $cnt')
             history.go(-1)
           </script>
         ");
    }
} else {
    $row = mysql_fetch_array($result);

    $db_pw = $row[pw];

    if ($pw != $db_pw) {
        $cnt ++; // 비밀번호가 틀릴때마다 세션변수 증가

        if ($cnt >= 6) {
            echo ("<script>
        window.alert('아이디 또는 비밀번호 5회이상 틀리셔서 로그인못함요')
        location.href = 'http://localhost/mars2/join.php';
        </script>");
            $cnt = 0;
        } else {
            echo ("
              <script>
                window.alert('비밀번호가 틀립니다. 틀린횟수 : $cnt')
                history.go(-1)
              </script>
           ");

            exit();
        }
    } else {
        $userid = $row[id];
        $_SESSION['userid'] = $userid;
        $cnt = 0; // 로그인 성공 후 자기소개입력 페이지로 넘어갈때 0으로 초기화해 다음 로그인때 영향을 받지 않도록 한다
        echo ("
              <script>
                location.href = './text.php';
              </script>
           "); // 로그인 성공시 자기소개 입력페이지로
    }
}
?>
