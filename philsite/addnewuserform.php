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
	$username = $row['username'];
	$password = $row['password'];
    $role = $row['role'];
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
	//<a href="addnewuser.php">Home</a>
	<br/><br/>
	
	<form action="addnewuser.php" name="form1" method="POST" >
		<table border="0">
			<tr> 
				<td>first Name</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password" ></td>
			</tr>
			<tr> 
				<td>Role</td>
				<td><input type="text" name="role"></td>
			</tr>
            <tr> 
				<td>UUUUUU</td>
				<td><input type="date" name="bdate" ></td>
			</tr>
            <tr> 
				<td>IIIII</td>
				<td><input type="text" name="dept" ></td>
			</tr><tr> 
				<td>IIIIISS</td>
				<td><input type="text" name="rank"></td>
			</tr>

			<tr>
				<td><input name="id"  type="hidden" ></td>
				<td><input type="submit" name="addd" value="add new user"></td>
			</tr>
            
		</table>
	</form>
</body>
</html>