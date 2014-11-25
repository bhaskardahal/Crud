<html>
<head>
<title> Crud</title>
</head>
<body>
<?php
	include_once'model.php';
	if(isset($_POST['submit'])):
		$name=$_POST['name'];
		$address=$_POST['address'];
		$father_name=$_POST['father_name'];
		$mother_name=$_POST['mother_name'];
		//var_dump($mother_name);
		$createStart=new Santosh();
	$create=$createStart->create($name,$address,$father_name,$mother_name);
		header("Location: read.php");
	endif;
?>
	<form action="" method="POST">
		<div>
			<label>Name</label>
			<input type="text" name="name"/>
		</div>
		<div>
			<label>Address</label>
			<input type="text" name="address"/>
		</div>
		<div>
			<label>Father Name</label>
			<input type="text" name="father_name"/>
		</div>
		<div>
			<label>Mother Name</label>
			<input type="text" name="mother_name"/>
		</div>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>