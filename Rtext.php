<?php
include "../mars2/dbconnect.php";
session_start();


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<table>
    <thead>
        <caption> �۾��� </caption>
    </thead>
    <tbody>
        <form name="text_form" method="post" action="enter3.php">
            <tr>
                <th>����: </th>
                <td><input type="text" placeholder="������ �Է��ϼ���. " name="title"/></td>
            </tr>
            <tr>
                <th>����: </th>
                <td><textarea cols="50" rows ="25" placeholder="������ �Է��ϼ���. " name="content"></textarea></td>
            </tr>
           <tr>
                <td colspan="2">
                    <input type="submit" value="���"/>
                    <input type="reset" value="����"/>
                   	<input type="button" value="�� �������... " onclick="javascript:location.href='http://localhost/mars2/content.php'"/>
                </td>
            </tr>
        </form>
    </tbody>
</table>
</head>
</html>