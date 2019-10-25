<?php 

session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
include_once("config.php"); 

$result = $dbConn -> query("SELECT * FROM sirimported.tblemployee ORDER by id desc");

?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<tr> WELCOME <?php echo $_SESSION['nickname'] ?></tr><br>
<a href = add.php>Add New </a><br>

	<table width='80%' border=0 valign=center> 

	<tr bgcolor='#CCCCCC'>
        <th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Birth Date</th>
		<th>Department</th>
		<th>Rank</th>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['ID']."</td>";
		echo "<td>".$row['Efname']."</td>";
        echo "<td>".$row['Elname']."</td>";
        echo "<td>".$row['Egender']."</td>";
		echo "<td>".$row['Ebirthdate']."</td>";
        echo "<td>".$row['Edept']."</td>";
        echo "<td>".$row['rank']."</td>";
		echo "<td><a href=\"edit.php?id=$row[ID]&efname=$row[Efname]\">Edit</a></td>";		
		echo "<td><a href=\"deletee.php?id=$row[ID]&efname=$row[Efname]\"onClick=\"return confirm('Are you sure you want to delete?')\">Delete Record</a></td>";	
        
	}
	echo "<a href = \"logout.php\"onclick=\"return confirm('logout')\">log out</a>";
	?>
	
	</table>



</body>


</html>