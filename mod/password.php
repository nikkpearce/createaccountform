<?php

include("../mod/connection.php");

if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='root';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=BCITex",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "INSERT INTO admin_users (name, email, password)
VALUES ('".$_POST["stu_name"]."','".$_POST["stu_email"]."','".$_POST["stu_password"]."')";
if ($dbh->query($sql)) {
echo "INSERTED";
}
else{
echo "NOT INSERTED";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>
</body>
</html>