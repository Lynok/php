<?php

mysql_connect("localhost","-u root","");
echo "<table border=2>\n";
echo "<tr><td>surname</td>
            <td>name</td>
            <td>fathersname</td>
            <td>city</td>
            <td>adress</td>
            <td>product</td>
            <td>quantity</td>
            <td>edit</td>
            <td>delete</td>
            </tr>\n";
mysql_query("use information");
$r = mysql_query("select * from information");
$n = mysql_num_rows($r);
for ($i=0;$i<$n;$i++)
{
	$f = mysql_fetch_array($r);
	//var_dump($f);
    echo "<tr><td>".$f['surname']."</td>
            <td>".$f['name']."</td>
            <td>".$f['fathersname']."</td>
            <td>".$f['city']."</td>
            <td>".$f['adress']."</td>
            <td>".$f['product']."</td>
            <td>".$f['quantity']."</td>
            <td><a href='edit.php?id=".$f['id']."'>edit</a></td>
            <td><a href='delete.php?id=".$f['id']."'>delete</a></td>
            </tr>\n";

}
?>
