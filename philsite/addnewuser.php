
<?php
include_once('config.php'); 
if(isset($_POST['addd'])){
   // $id = $_POST['id'];
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$role=$_POST['role'];
		
	// checking empty fields
	if(empty($username) || empty($password) || empty($role)) {	
			
		if(empty($username)) {
			echo "<font color='red'>username is empty</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>passord is empty</font><br/>";
		}
		
		if(empty($role)) {
			echo "<font color='red'>role is</font><br/>";
		}	
	//	if(empty($bdate)) {
	//		echo "<font color='red'>Email field is empty.</font><br/>";
	//	}	
	} else {	
		//updating the table
        $sql = "INSERT INTO sirimported.tblusers " ;
        $sql .= "(username, password, role ) " ;
        $sql .= "VALUES (:username, :password, :role ) " ;
		$query = $dbConn->prepare($sql);
				
		//$query->bindparam(':id', $id);
		$query->bindparam(':username', $username);
		$query->bindparam(':password', $password);
		$query->bindparam(':role', $role);
	    $query->execute();
        
        echo "success" . "<br/>";
        echo "<a href = \"indexx.php\">added</a> ";
	
		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
				
		//redirectig to the display page. In our case, it is index.php
		header("Location: indexx.php");
	}

}
else{
    echo "error:restricred access";
}
?>
