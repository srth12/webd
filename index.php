<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book360Deg.com</title>
<?php
function connectdb(){

mysqli_connect("localhost","","") or die("could not connect to db stopping...");
mysql_select_db("books") or die(" database selection failed");

}

function check_input($value)
{
// Stripslashes
if (get_magic_quotes_gpc())
  {
  $value = stripslashes($value);
  }
// Quote if not a number
if (!is_numeric($value))
  {
  $value = "'" . mysql_real_escape_string($value) . "'";
  }
return $value;
}
if(isset($_REQUEST["login"])){
//echo $_REQUEST["username"];


$username=check_input($_REQUEST["username"]);
$password=check_input($_REQUEST["password"]);



}
if(isset($_REQUEST["search"])){

$search=$_REQUEST["Searchbox"];
header("Location:search.php?id=".$search);

}


?>





</head>
<body>
<!DOCTYPE html>
<html>
<body>
<img src="./images/titlebar.jpg" width="100%" height="90px"/><br />
<div id="container"><br />
</div>
<div id="Searchbox">
<form action="index.php" method="POST" align="right">
<font>Search</font><input id="oval" type="text" name="Searchbox">
<input type="submit" value="Go" name="search"/> 
</form>
</div>
<div id="bottom">
<div id="menu" style="background-color:#FFD700;height:450px;width:10%;float:left;">
<b>Genre</b><br>
Adventure<br>
Comics<br>
Science&Technology <br>
Sci-Fi<br>
Novel<br>
Short Story<br>
History<br>
Autobiography<br/>
Epic
</div>
<div id="content">
Content goes here</div>
<div id="loginfield">
<form align="right" action="index.php" method="POST">
User ID  : 
<input type="text" name="username"><br/>
Password 
<input type="password" name="password"><br />
<input id= "loginbutton" type="submit" value="login" name="login" >
</form>
</div>
</div>
</div>
</body>
</html>
