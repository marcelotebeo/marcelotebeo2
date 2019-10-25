<?php
session_start();
session_destroy();
echo "<a href = \"login.php\"onclick=\"return confirm('logout')\">back to login</a>";;
?>

