<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<!-- Main css -->
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="bd1">
</div>
<?php

extract($_POST);
include("database.php");
$rs=mysqli_query($conn,"select * from user where user_id='$user_id' and email='$email'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id with user name $user_id Already Exists</div>";
	exit;
}
$query="insert into user(user_id,phone,pass,name,email) values('$user_id','$phone','$pass','$name','$email')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1> $user_id has Registered  Sucessfully</div>";
echo "<br><div class=head1>Tap on the link below to the Login page</div>";
echo "<br><div class=head1><a href=login.php>Login</a></div>";



?>

</body>
</html>