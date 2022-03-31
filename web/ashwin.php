<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$host ="host=ec2-3-217-251-77.compute-1.amazonaws.com";
$port =" port = 5432";
$dbname ="dbname = d70r9bhne97jnl";
$credentials =" user =qnqmahgvxgbfdv  password =613f81817406320f3cbf2311312b93688ae53753c6f5d2090df148df814bdb38";
$con = pg_connect( "$host $port $dbname $credentials");

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO tbl_contact (fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage');";

// insert in database 
$rs = pg_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}else{
echo "Contact not Inserted";
}

?>
