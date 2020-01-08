<?php
include "../mars2/dbconnect.php";
session_start();


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<table>
    <thead>
        <caption> 글쓰기 </caption>
    </thead>
    <tbody>
        <form name="text_form" method="post" action="enter3.php">
            <tr>
                <th>제목: </th>
                <td><input type="text" placeholder="제목을 입력하세요. " name="title"/></td>
            </tr>
            <tr>
                <th>내용: </th>
                <td><textarea cols="50" rows ="25" placeholder="내용을 입력하세요. " name="content"></textarea></td>
            </tr>
           <tr>
                <td colspan="2">
                    <input type="submit" value="등록"/>
                    <input type="reset" value="리셋"/>
                   	<input type="button" value="글 목록으로... " onclick="javascript:location.href='http://localhost/mars2/content.php'"/>
                </td>
            </tr>
        </form>
    </tbody>
</table>
</head>
</html>