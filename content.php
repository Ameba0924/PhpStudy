<?php 
include "../mars2/dbconnect.php";
session_start();

$userid2 = $_SESSION['userid'];


if (! $userid2) { // ���� �α��ξ��̵�� ������ ���� ������ �α��� �������� �̵�
    echo ("<script>
    window.alert('�α��������ʰ�  �õ��߱⿡ �α����������� �Ѿ�ϴ�.')
    location.href = './login.php';
    </script>
");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>[Mars2�� �Խ���]</title>
</head>
<h1 align="center" style="color: white;">MARS2</h1>
<body  style="background-image: url('./img/jenny2.jpg'); background-color:silver;
background-repeat: no-repeat; background-size: 1920px 1080px ">
 <div id="allboard" align="center" >
 <div id="board" >
  <table border="1" style="border-style:dotted; background-color:silver; font-style: oblique;" >
   <tr align="center" style="border-style:dotted; background-color:gray; font-family: fantasy; font-style: oblique; font-weight: bold; ">
    <th>��ȣ</th>
    <th>�۾���</th>
    <th>����</th>
    <th>����</th>
    <th>�ۼ��ð�</th>
     </tr>
  <?php 
  $marscontent = mysql_query( " SELECT * FROM list" );
  
  $content_len = mysql_num_rows( $marscontent );
  
  
  if( isset($_GET[idx]) ) {
      
      $start = $_GET[idx] * 10;
      
      $sql = "SELECT * FROM list ORDER BY num DESC LIMIT $start, 10";
      
  } else {  
      
      $sql = "SELECT * FROM list ORDER BY num DESC LIMIT 10";
      
  }
  
  $marscontent = mysql_query( $sql );
 
  
  
  
  $num = 1;
  
  while( $row = mysql_fetch_assoc( $marscontent ) ) {
      
      print "<tr>";
      
      print "<th scope='row'>$num</th>";
      
      print "<td>$row[id]</td>";
      
      print "<td><a href = http://localhost/mars2/Ctext.php?num=$row[num]>$row[title]</a></td>";
      
      print "<td>$row[contents]</td>";
      
      print "<td>$row[time]</td>";
      
      print "</tr>";
      
      
      
      $num++;
      
  }
  
  
  $count = (int)($content_len / 10);
  
  if( $content_len % 10 ) { $count++; }
  
  
  
  print "<tr>";
  
  print "<td colspan=4 align=center>";
  
  
  
  for( $i = 0; $i < $count; $i++ ) {
      
      print "<a href=http://localhost/mars2/content.php?idx={$i}> [";
      
      $j = $i+1;
      
      print $j;
      
      print "] </a>";
      
  }
  
  
  
  print "</td>";
  
  print "</tr>";
  
  ?>
  
  
  
  
  </table>
 
 
 
 <div id="button1" align="center">
 <input type = "button"  value = "�۾���" onclick="javascript:location.href='http://localhost/mars2/Rtext.php'"> </div>
</body>
</html>