 <?
include "../mars2/insert.php";

echo "결과 확인화면 <br />";

echo "아이디 : {$_POST[id]} <br />";
echo "이름 :  {$_POST[name]} <br />";
echo "비밀번호 : {$_POST[pw]} <br />";
echo "비밀번호 확인 : {$_POST[pw_re]} <br />";
echo "성별 : {$_POST[gender]} <br />";
echo "이메일 : {$_POST[email]}@{$_POST[email_dns]}{$_POST[email2]} <br />";

?>