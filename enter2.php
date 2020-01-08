<?
include "../mars2/insert2.php";

echo "입력하신 정보가 저장되었습니다";

echo "결과 확인화면 <br />";

echo "자기소개 : {$_POST['text']} <br />";

echo ("
           <script>
             window.alert('입력하신정보가 저장되었습니다.')
             history.go(-1)
           </script>
         ");

?>