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

connectdb();
$genre[0]="Adventure";
$genre[1]="Comics";
$genre[2]="Science&Technology";
$genre[3]="Sci-Fi";
$genre[4]="Novel";
$genre[5]="Short Story";
$genre[6]="History";
$genre[7]="Autobiography";
$genre[8]="Epic";
for($i=0;$i<9;$i++){
$query="select image_url from book_details where genre=".$genre[i]."limit 0,1";
$res=mysql_query($query) or die("Querying failed... ");
if($res and !mysql_num_rows($res)){
while( $row=mysql_fetch_assoc($res)){
echo ("<br/><img style='clear:both;z-index:-5; ' src='./images/".$row['image_url']."' /> <br/>".$row["title"]."<br/>");

}
}}



?>