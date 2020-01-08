<?
session_start();
?>

<!doctype html>
<html>
<head>
</head>
<body>
	<form name="member_form" method="post" action="login2.php">
		<table>
			<tr>
				<td>아이디<input type="text" name="id"></td>
			</tr>
			<tr>
				<td>비밀번호<input type="password" name="pw"></td>
			</tr>
			<tr>
				<td><input type="image" src="./img/login_button.gif"></td>
			</tr>
		</table>
	</form>
</body>
</html>