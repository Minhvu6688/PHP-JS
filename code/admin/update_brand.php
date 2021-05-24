<?php
require_once 'header.php';

$id = $_POST['id'];
if (isset($_POST['update'])) {
$name = $_POST['name'];
$sql = "UPDATE class SET brand_name = '$name' WHERE brand_id = '$id'";
$run = querySQL($sql);
if ($run) { ?>
   <script type="text/javascript">
		alert ("Update class successfully !");
		window.location.href = "manage_brand.php";
   </script>
<?php 
} else { ?>
  <script type="text/javascript">
		alert ("Update brand failed !");
		window.location.href = "manage_brand.php";
  </script>
<?php } } ?>
<center>
<form class="frm123" action="" method="POST">
	<fieldset>
	<legend>Update brand</legend>
	Brand name:
	<?php
	$qry = "SELECT * FROM brand WHERE brand_id = '$id'";
	$result = querySQL($qry);
	$cls = mysqli_fetch_array($result);
	?>
	<input type="hidden" name="id" value="<?= $cls[0] ?>">
	<input type="text" name="name" value="<?= $cls[1] ?>" size="30"> <br><br>
	<input type="submit" name="update" value="Update">
    </fieldset>
</form>
</center>