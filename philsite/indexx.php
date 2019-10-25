<?php 
include_once("config.php"); 

$result = $dbConn -> query("SELECT * FROM sirimported.tblusers ORDER by id asc ");

?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<a href = addnewuserform.php>Add New User </a>


	<table width='80%' border=0 valign=center> 

	<tr bgcolor='#CCCCCC'>
        <th>ID</th>
		<th>username</th>
		<th>password</th>
		<th>role</th>
		
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['ID']."</td>";
		echo "<td>".$row['username']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['role']."</td>";
		echo "<td><a href=\"edituser.php?id=$row[ID]&username=$row[username]\">Edit</a></td>";		
		echo "<td><a href=\"deleteuser.php?id=$row[ID]&username=$row[username]\"onClick=\"return confirm('Are you sure you want to delete?')\">Delete Record</a></td>";	
     
	}
	?>
	</table>
    
</body>


</html>