
<?php
include_once('config.php'); 
if(isset($_POST['add'])){
   // $id = $_POST['id'];
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
		
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($gender)) {	
			
		if(empty($fname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($gender)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
	//	if(empty($bdate)) {
	//		echo "<font color='red'>Email field is empty.</font><br/>";
	//	}	
	} else {	
		//updating the table
        $sql = "INSERT INTO sirimported.tblemployee " ;
        $sql .= "(eFname, Elname, Egender ) " ;
        $sql .= "VALUES (:fname, :lname, :gender )" ;
		$query = $dbConn->prepare($sql);
				
		//$query->bindparam(':id', $id);
		$query->bindparam(':fname', $fname);
		$query->bindparam(':lname', $lname);
		$query->bindparam(':gender', $gender);
	    $query->execute();
        
        echo "success" . "<br/>";
        echo "<a href = \"index.php\">added</a> ";
	
		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
				
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}

}
else{
    echo "error:restricred access";
}
?>
