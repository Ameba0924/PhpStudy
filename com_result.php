<?php 


include "../mars2/dbconnect.php";

session_start();
$userid2 = $_SESSION['userid'];
$com_num = $_SESSION['num'];

?>

<table>
 		<th bgcolor ='orange' align='center'>���̵�</th>
	    <th bgcolor ='orange' align='center'>��۳���</th>
	    <th bgcolor ='orange' align='center'>����ۼ��ð�</th>
	<?php 
	
	$sql = "select num,id,comment,time from comment where com_num='$com_num' order by num desc";
	$ret = mysql_query($sql);
	while($row = mysql_fetch_assoc( $ret )){
	    
	   
	    
	    print "<tr bgcolor = 'white' align='center'>";
	    
	    print "<td>$row[id]</td>";
	    
	    print "<td>$row[comment]</a></td>";
	    
	    print "<td>$row[time]</td>";
	    if($userid2 == $row['id']){ //���̵� �ٸ��� ��ۻ�����ư�� ���ü�����.
	    print "<td> <input type = button value = ��ۻ���  onclick = javascript:location.href='http://localhost/mars2/com_delete.php?num=$row[num]'> </td>";
	    }
	    //���⼭ �� �������ϱ����� ���� row[$num] �� DB�� �����ϴ� �����̸Ӹ�Ű�� ������ ȭ���� �Ѿ��� �Ѿ�� ȭ�鿡�� GET���� Ű�� �޾ƿ� ��۹װԽ����� ���� ó���Ҽ��ִ�. 
	    
	    print "</tr>";
	

	    
	}
	

	    ?>
	    </table>
	    
	