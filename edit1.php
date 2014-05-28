<?php
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$fathersname = $_REQUEST['fathersname'];
$city = $_REQUEST['city'];
$adress = $_REQUEST['adress'];
$product = $_REQUEST['product'];
$quantity = $_REQUEST['quantity'];
$id = $_REQUEST['id'];
echo "<p>name=$name</p>";
echo "<p>surname=$surname</p>";
echo "<p>fathersname=$fathersname</p>";
echo "<p>city=$city</p>";
echo "<p>adress=$adress</p>";
echo "<p>product=$product</p>";
echo "<p>quantity=$quantity</p>";

mysql_connect("localhost","-u root"," ");
mysql_query("use information");
$query = "update inrormation set name='$name' where id=$id";
echo "q=$query";
mysql_query($query);
$query = "update information set surname='$surname' where id=$id";
mysql_query($query);

mysql_query("use information");
echo "q=$query";
$query = "update inrormation set fathersname='$fathersname' where id=$id";
mysql_query($query);

mysql_query("use information");
$query = "update information set city='$city' where id=$id";
echo "q=$query";
mysql_query($query);

mysql_query("use information");
$query = "update information set adress='$adress' where id=$id";
echo "q=$query";
mysql_query($query);

mysql_query("use information");
$query = "update information set product='$product' where id=$id";
echo "q=$query";
mysql_query($query);

mysql_query("use information");
$query = "update information set quantity='$quantity' where id=$id";
echo "q=$query";
mysql_query($query);

?>
