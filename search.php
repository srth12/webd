<?phpfunction connectdb(){mysqli_connect("localhost","","") or die("could not connect to db stopping...");mysql_select_db("books") or die(" database selection failed");}$search=$_GET["id"];connectdb();$query="select * from book_details where title like '%".$search."%' ";$res=mysql_query($query) or die("searching failed... ");if($res and !mysql_num_rows($res)){die("Content not found");}echo "<div id='3' ";while( $row=mysql_fetch_assoc($res)){echo ("<br/><img style='clear:both;z-index:-5; ' src='./images/".$row["image_url"]."' /> <br/>".$row["title"]."<br/>".$row["author"]."<br/>".$row["publisher"]."<br/><br/><br/>");}echo "</div>";?>