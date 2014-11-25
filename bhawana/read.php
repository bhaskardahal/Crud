<html>
<head>
<title>bhaskar</title>
</head>
<body>
<?php



include_once'model.php';
$wread=new Santosh();
$readstart=$wread->read();


if (isset($_REQUEST['del_id'])){
	$wread->Delete($_REQUEST['del_id']);
	header("Location :read.php");
}
?>
<table>
<tr>
<td>S.N</td>
<td>name</td>
<td>address</td>
<td>father_name</td>
<td>mother_name</td>
</tr>
<?php $i=1;?>
<?php foreach($readstart as $key=>$value):?>
	<tr>
	<td><?php echo $i++;?></td>
	<td><?php echo $value['name'];?></td>
	<td><?php echo $value['address'];?></td>
	<td><?php echo $value['father_name'];?></td>
	<td><?php echo $value['mother_name'];?></td>
	<td><a href="update.php?id=<?php echo $value["id"];?>">update</a></td>
	<td><a href="read.php?del_id=<?php echo $value["id"];?>">Delete</a></td>
	</tr>
	<?php endforeach ;?>

		</table>
	</body>
</html>