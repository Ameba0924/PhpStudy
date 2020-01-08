<?
session_start();

$userid2 = $_SESSION['userid']; // 로그인 한 아이디를 userid2에 담는다

if (! $userid2) { // 현재 로그인아이디와 정보가 맞지 않으면 로그인 페이지로 이동
    echo ("<script>
    window.alert('로그인하지않고  시도했기에 로그인페이지로 넘어갑니다.')
    location.href = './login.php';
    </script>
");
}

?>
<!doctype html>
<html>
<head>
</head>
<body>
	<form name="login_form" method="post" action="enter2.php">
		<table>
			<tr>
				<td>자기소개 <input type="text" name="text"></td>
			</tr>
			<tr>
				<td><input type="submit" value="저장"></td>
				<td></td>
			</tr>
		</table>

	</form>
	<form name="login_form" method="post" action="logout.php">
		<table>
			<tr>
				<td><input type="submit" value="로그아웃"></td>
			</tr>
		</table>
	</form>
	<form name="login_form" method="post" action="content.php">
		<table>
			<tr>
				<td><input type="submit" value="게시판 이동"></td>
			</tr>
		</table>
	</form>
</body>
</html>