<?php

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
if(isset($_REQUEST["go"])){
$search=$_REQUEST["Searchbox"];
$query="select from 

}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book360Deg.com</title>





</head>
<body>
<!DOCTYPE html>
<html>
<body style="margin-top:-41px;">

<div id="container" style="width:100%;height:550px;"><br />
<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bbottom:0;">Book360deg: Book  Views and reviews</h1></div>
<div id="Seach box" style="float:right">
<form action="index.php" method="POST" >
Search: <input type="text" name="Searchbox">
<input type="submit" value="Go" /> 
</form>
</div>
<div id="menu" style="background-color:#FFD700;height:100%;width:10%;float:left;">
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
<div id="content" style="background-color:#EEEEEE;height:100%;width:70%;float:left;">
Content goes here</div>
<div id="login field" style="float:left">
<form align="right" action="index.php" method="POST">
User ID  : 
<input type="text" name="username"><br/>
Password 
<input type="password" name="password"><br />
<input type="submit" value="login" name="login" >
</form>
</div>
</div>

</body>
</html>
