<?
include "../mars2/dbconnect.php";
session_start();
$contentnum = $_SESSION['num'];
$userid2 = $_SESSION['id'];


?>

<!doctype html>
<html>
<head>
</head>
<body>
	<form name="comment_form" method="post" action="com_update.php">
		<table>
			<tr>
				<td align="center" style="border-style:dotted; background-color:white; font-family: fantasy; font-style: oblique; font-weight: bold; ">
				 ��۴ޱ� <textarea cols="50" rows ="2" placeholder="������ �Է��ϼ���. " name="comment"></textarea></td>
				<td> <input type = submit value = "��۵��">
			</tr>
			
			
		</table>
	</form>
</body>
</html>