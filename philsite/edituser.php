<?php
include_once("config.php"); 
if(!isset($_GET['id'])){
	header("location: indexx.php");
}
$eid = $_GET['id'];
$username = $_GET['username'];
//echo "<br/>";
//echo "editing employee id: " . $eid . "Efnmae=: $efname";

$sql = "SELECT * FROM sirimported.tblusers WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $eid));
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$username = $row['username'];
	$password = $row['password'];
    $role = $row['role'];
       
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
	<a href="indexx.php">Home</a>
	<br/><br/>
	
	<form action="updateuser.php" name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Usernamae</td>
				<td><input type="text" name="username" ></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password" ></td>
			</tr>
			<tr> 
				<td>role</td>
				<td><input type="text" name="role" ></td>
			</tr>
     			<tr>
				<td><input name="id"  type="hidden" name="id" value=<?php echo $eid;?>></td>
				<td><input type="submit" name="updateuser" value="Update"></td>
			</tr>
            
		</table>
	</form>
</body>
</html>