<html>
<head>
	<title>Add a new information data</title>
</head>
<body>
	<h1> Information form </h1>
	<form method="post" action="add1.php">
		<p>
		<label> First name:
			<input type=text name="name">
		</label>
		<br>
		<label> Father's name:
			<input type=text name="fathersname">
		</label>
		<br>
		<label> Last name:
			<input type=text name="surname">
		</label>
		<br>
		<label> City:
			<input type=text name="city">
		</label>
		<br>
		<label> Adress 
			<input type=text name="adress">
		</label>
		<br>
		<label> Product
			<select name="product">
				<option value="TV">TV-set</option>
				<option value="Comp">Computer</option>
			</select>
		</label>
		<br>
		<label> Quantity:
			<input type=text name="quantity">
		</label>
		<input type=submit value="Add">
	</p>
	</form>
</html>
