<?
session_start();
?>
<!doctype html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">


<title>ȸ�� ����</title>

<script>
    function check_id()
    {
	window.open("check_id.php?id="+document.write_form_member.id.value,"IDcheck",
			"left=200,top=200,width=200,height=60");
	}
    </script>

</head>

<body>
	<form name="write_form_member" method="post" action="enter.php">
		<table width="940" style="padding: 5px 0 5px 0;">
			<tr height="2" bgcolor="#FFC8C3">
				<td colspan="2"></td>
			</tr>
			<tr>
				<th>�̸�</th>
				<td><input type="text" name="name"></td>
			</tr>

			<tr>
				<th>���̵�</th>
				<td><input type="text" name="id"> <a href="#"><img
						src="./img/check_id.gif" onclick="check_id()"></a></td>

			</tr>
			<tr>
				<th>��й�ȣ</th>
				<td><input type="password" name="pw"> ����/�������� 6�� �̻�</td>
			</tr>
			<tr>
				<th>��й�ȣ Ȯ��</th>
				<td><input type="password" name="pw_re"></td>
			</tr>
			<tr>
				<th>����</th>
				<td><input type="radio" name="gender" value="����">�� <input
					type="radio" name="gender" value="����">��</td>


			</tr>
			<tr>
				<th>E-MAIL</th>
				<td><input type='text' name="email">@ <input type='text'
					name="email_dns"> <select name="email2">
						<option value="">�����Է�</option>
						<option value="naver.com">naver.com</option>
						<option value="daum.net">daum.net</option>
						<option value="empal.com">empal.com</option>
						<option value="gmail.com">gmail.com</option>
						<option value="hanmail.net">hanmail.net</option>
						<option value="nate.com">nate.com</option>
				</select></td>
			</tr>

		</table>

		<input type="submit" value="����" value="join"> <input type="reset"
			value="����">

	</form>
</body>

</html>
