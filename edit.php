<html>
<head>
	<title>Add a new student's data</title>
</head>
<body>
	<h1> Information form </h1>
	<form method="post" action="edit1.php">
		<?php
		mysql_connect("localhost","-u root"," ");
		mysql_query("use information");
		$id=$_REQUEST['id'];
		$f = mysql_query("select * from information where id=$id;");
		$r = mysql_fetch_array($f);
		?>
		<p>
		<label> First name:
			<input type=text name="name" value='<?php echo $r['name']?>'>
		</label>
		<br>
		<label> Father's name:
			<input type=text name="fathersname" value='<?php echo $r['fathersname']?>'>
		</label>
		<br>
		<label> Last name:
			<input type=text name="surname" value='<?php echo $r['surname']?>'>
		</label>
		<br>
		<label> City:
			<input type=text name="city" value='<?php echo $r['city']?>'>
		</label>
		<br>
		<label> Adress
			<input type=text name="adress" value='<?php echo $r['adress']?>'>
		</label>
		<br>
		<label> Product
			<select name="product">
				<option <?php if ($r['product']=='TV') echo " selected "; ?> value="m">TV-set</option>
				<option <?php if ($r['product']=='Comp') echo " selected "; ?> value="f">Computer</option>
			</select>
		</label>
		<br>
		<label> Quantity:
			<input type=text name="quantity" value='<?php echo $r['quantity']?>'>
		</label>
		<input type=hidden name="id" value='<?php echo $r['id'] ?>'>
		<input type=submit value="save">
	</p>
	</form>
</html>
