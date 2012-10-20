<?php
$title=$_GET["id"];
function connectdb(){


mysqli_connect("localhost","","") or die("could not connect to db stopping...");
mysql_select_db("books") or die(" database selection failed");

}
connectdb();
$query="select username,comments from book_forum where title=".$title;
$res=mysql_query($query) or die("Comments not found");
if( $res and ! $mysql_num_rows){
return "No posts";
}
else{
$text="";
while($row=mysql_fetch_assoc($res)){
$text=$text. "<br/> ".$row["username"]."<br/>".$row["comments"]."<br/>";


}

return $text;
}



















?>