<html>
<head>
<style>
</style>
</head>
<body>
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
function connectdb(){


mysqli_connect("localhost","","") or die("could not connect to db stopping...");
mysql_select_db("books") or die(" database selection failed");

}
$search=$_GET["id"];
$search=$search;
connectdb();
$query="select * from book_details where title like '%".$search."%' ";
$res=mysql_query($query) or die("searching failed... ");
if($res and !mysql_num_rows($res)){
die("Content not found");

}

echo ("<br>");
while( $row=mysql_fetch_assoc($res)){

echo ("<a href=''> <img style='clear:both;z-index:-5;' width='100px' height='150px' src='./images/".$row["image_url"]."' /> </a> "."<br>". $row["title"]."<br>". $row["author"]."<br>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
}


?>
</body>
</html>