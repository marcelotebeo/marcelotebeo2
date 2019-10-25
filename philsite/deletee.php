<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$eid = $_GET['id'];

//deleting the row from table
$sql = "DELETE FROM sirimported.tblemployee WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $eid));

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>