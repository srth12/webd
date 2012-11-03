<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up</title>

<?php
if(isset($_REQUEST["submit"])){
$name=$_REQUEST["name"];
$userid=$_REQUEST["userid"];
$password=$_REQUEST["password"];
$check="Select * from book_user where username=".$userid;
mysqli_connect("localhost","","") or die("could not connect to db stopping...");
mysql_select_db("books") or die(" database selection failed");
if(($res=mysql_num_rows($check))==0){
	echo "User name already exist";
	

	}
	else{
	$query="insert into book_user values('$name','$password') ";
	mysql_query($query) or die("Sign Up failed Try again later...");
	session_start();
	$_SESSION["username"]=$name;
	
	
	}
}
?>

</head>

<body>
<form action="signup.php" method="post" >
<table align="center">
<tr>
<td>Enter Your Name :</td>
<td><input type="text" name="name"  /></td>
</tr>

<tr>
<td>Enter Prefered User ID :</td>
<td><input type="text" name="userid" /></td>
</tr>

<tr>
<td>Enter Password :</td>
<td><input type="password" name="password"  /></td>
</tr>

<tr>

<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"</td>
</tr>

</table>

</form>
</body>
</html>
