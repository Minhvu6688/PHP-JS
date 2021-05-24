<?php
require_once 'header.php';

$qry = "SELECT * FROM bike";
if (isset($_POST['search'])) {
	$keyword = $_POST['keyword'];
	$qry .= " WHERE bike_name LIKE '%$keyword%' 
	          OR bike_price LIKE '%$keyword%'"; 
    $result = querySQL($qry);
   //không tìm thấy kết quả  
   if ($result->num_rows == 0) {  ?>
   <script>
	 alert("Motor not found");
	 window.location.href = "";
   </script> 
   <?php } 
}
$result = querySQL($qry);
?>
<center>
	<div>
		<style>
			body {
				background-image: url(images/blue.jpg);
				background-size: cover;
			}
		</style>
	</div>
<form class="frm123" action="" method="POST">
	<fieldset style="background-color: yellow;">
		<legend style="font-size: 24px;"><b><U> SEARCH MOTOR</U> </b> </legend><br><br>
		<input type="text" name="keyword" required maxlength="15"
	  	placeholder="Input name or price" style="font-size: 20px;"> <br> <br>
		<input type="submit" value="Search" name="search" style="font-size: 30px;">
	</fieldset>
</form>
<br><br>
<table class="tbl" border="1" style="background-color: yellow;" width ="100%">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Capacity</th>
		<th>Price</th>
		<th>Year</th>
		<th>Brand</th>
		<th>Image</th>
		<th>Options</th>
	</tr>
		<?php 
		while($row = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?= $row[2] ?></td>
			<td><?= $row[3] ?></td>
			<td><?= $row[4] ?></td>
			<?php
			//Hiển thị class name thay vì class id
			$qry1 = "SELECT * FROM brand";
			$result1 = querySQL($qry1);
			while ($row1 = mysqli_fetch_array($result1)) {
				if ($row1["brand_id"] == $row["bike_brand"]) {
					$brand = $row1["brand_name"];
				}
			}
			?>
			<td><?= $brand ?></td>
			</td>
			<td> 
			<img src='images\bike\<?= $row['bike_image'] ?>' width="100" height="130"></td>
		    </td>
			<td> 
				<form class="frm_inline" action="update_bike.php" method="POST">
					<input type="hidden" name="id" value="<?= $row[0] ?>">
					<input type="submit" value="Update">
			    </form>
				<form class="frm_inline" action="delete_bike.php" method="POST"
				 onsubmit="return confirmDelete();">
					<input type="hidden" name="id" value="<?= $row[0] ?>">
					<input type="submit" value="Delete">
			    </form>
			</td>
		</tr>
		<?php } ?>
</table>
</center>
<script>
	function confirmDelete() {
		var del = confirm("Do you want to delete this bike ?");
		if (del)
			return true;
		else
			return false;
	}
</script>