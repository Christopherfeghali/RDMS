<html>
<?php

if(isset($_GET['artID']))
{
$id= html_entity_decode($_GET['artID']);
}
?>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<p>New Name: </p>
<input type="text" name="newname" placeholder="insert name here">
<input type="hidden" named="id" value="<?php echo $id ?>"
<p> <input type="submit" name="update" </p>
</form>




<?php
if(isset($_POST['update']))
	require_once('artist.php');
	$row = $_POST['artName'];
	$targetid = $_POST['id'];
	$records = "update name =' $newName' WHERE id= $id";
	$records= mysqli_query;



?>
</html>