<?
session_start();

$userid2 = $_SESSION['userid']; // �α��� �� ���̵� userid2�� ��´�

if (! $userid2) { // ���� �α��ξ��̵�� ������ ���� ������ �α��� �������� �̵�
    echo ("<script>
    window.alert('�α��������ʰ�  �õ��߱⿡ �α����������� �Ѿ�ϴ�.')
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
				<td>�ڱ�Ұ� <input type="text" name="text"></td>
			</tr>
			<tr>
				<td><input type="submit" value="����"></td>
				<td></td>
			</tr>
		</table>

	</form>
	<form name="login_form" method="post" action="logout.php">
		<table>
			<tr>
				<td><input type="submit" value="�α׾ƿ�"></td>
			</tr>
		</table>
	</form>
	<form name="login_form" method="post" action="content.php">
		<table>
			<tr>
				<td><input type="submit" value="�Խ��� �̵�"></td>
			</tr>
		</table>
	</form>
</body>
</html>