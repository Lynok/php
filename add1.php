<?php
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$fathersname = $_REQUEST['fathersname'];
$city = $_REQUEST['city'];
$adress = $_REQUEST['adress'];
$product = $_REQUEST['product'];
$quantity = $_REQUEST['quantity'];
echo "<p>name=$name</p>";
echo "<p>surname=$surname</p>";
echo "<p>fathersname=$fathersname</p>";
echo "<p>city=$city</p>";
echo "<p>adress=$adress</p>";
echo "<p>product=$product</p>";
echo "<p>quantity=$quantity</p>";
mysql_connect("localhost","-u root"," ");
mysql_query("use information");
$query = "insert into information (name,surname,fathersname,city,adress,product,quantity) 
	values ('$name', '$surname','$fathersname','$city','$adress','$product','quantity');";
echo $query;
mysql_query($query);
?>
