<?php
include("connection.php");
error_reporting(0);
?>


<?php

mysqli_select_db($con,  'userdata1');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message = $_POST["message"];

$query = "insert into userinfodata (user, email, mobile, comments)
values ('$firstname','$lastname','$email','$mobile','$message') ";


echo "$query";
mysqli_query($con, $query);
header('location:index.php');
?>


<?php/*
$query ="SELECT * from teacher ORDER BY Te_Id";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);

if($total!=0)
{
	
    while($result=mysqli_fetch_assoc($data))
    {
	    $nn=$result['Te_Id'];
	}
	$nn=$nn+1;
	
}
	
else 
{
	$nn=100;
}


?>
<?php
if($_GET['submit'])
	{
$rn = $nn;
$mn = $_GET['name'];
$cn = $_GET['qualification'];
$gn = $_GET['r1'];
$sn = $_GET['sal'];
$an = $_GET['addres'];

echo "$rn";
echo "$nn";
echo "$cn";
echo "$gn";
echo "$sn";
echo "$an";

$query= "INSERT INTO teacher values ('$rn','$mn','$cn','$gn','$sn','$an')";
$data = mysqli_query($con,$query);

if($data)
{
    echo '<script>alert("Data insertion successful")</script>';
}

else
{
    echo '<script>alert("Data insertion un-successful")</script>';
}
}*/
?>