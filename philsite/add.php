<?php
include_once("config.php"); 
//$eid = $_GET['id'];
//$efname = $_GET['efname'];
//echo "<br/>";
//echo "editing employee id: " . $eid . "Efnmae=: $efname";

//$sql = "SELECT * FROM sirimported.tblemployee WHERE id=:id";
  $query = $dbConn->prepare($sql);
//$query->execute(array(':id' => $eid));
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$fname = $row['Efname'];
	$lname = $row['Elname'];
    $gender = $row['Egender'];
    $bdate = $row['Ebirthdate'];
	$dept = $row['Edept'];
	$rank = $row['rank'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	//<a href="addnew.php">Home</a>
	<br/><br/>
	
	<form action="addnew.php" name="form1" method="POST" >
		<table border="0">
			<tr> 
				<td>first Name</td>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lname" ></td>
			</tr>
			<tr> 
				<td>gender</td>
				<td><input type="text" name="gender"></td>
			</tr>
            <tr> 
				<td>Birth date</td>
				<td><input type="date" name="bdate" ></td>
			</tr>
            <tr> 
				<td>department</td>
				<td><input type="text" name="dept" ></td>
			</tr><tr> 
				<td>Rank</td>
				<td><input type="text" name="rank"></td>
			</tr>

			<tr>
				<td><input name="id"  type="hidden" ></td>
				<td><input type="submit" name="add" value="add"></td>
			</tr>
            
		</table>
	</form>
</body>
</html>