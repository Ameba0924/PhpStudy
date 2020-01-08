<?php 


include "../mars2/dbconnect.php";

session_start();
$userid2 = $_SESSION['userid'];
$com_num = $_SESSION['num'];

?>

<table>
 		<th bgcolor ='orange' align='center'>아이디</th>
	    <th bgcolor ='orange' align='center'>댓글내용</th>
	    <th bgcolor ='orange' align='center'>댓글작성시간</th>
	<?php 
	
	$sql = "select num,id,comment,time from comment where com_num='$com_num' order by num desc";
	$ret = mysql_query($sql);
	while($row = mysql_fetch_assoc( $ret )){
	    
	   
	    
	    print "<tr bgcolor = 'white' align='center'>";
	    
	    print "<td>$row[id]</td>";
	    
	    print "<td>$row[comment]</a></td>";
	    
	    print "<td>$row[time]</td>";
	    if($userid2 == $row['id']){ //아이디가 다르면 댓글삭제버튼이 나올수없음.
	    print "<td> <input type = button value = 댓글삭제  onclick = javascript:location.href='http://localhost/mars2/com_delete.php?num=$row[num]'> </td>";
	    }
	    //여기서 꼭 구별을하기위해 현재 row[$num] 즉 DB상 구별하는 프라이머리키를 가지고 화면을 넘어가줘야 넘어가는 화면에서 GET으로 키를 받아와 댓글및게시판을 각각 처리할수있다. 
	    
	    print "</tr>";
	

	    
	}
	

	    ?>
	    </table>
	    
	