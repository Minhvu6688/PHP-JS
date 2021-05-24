<?php
require_once 'header.php';
//kiểm tra người dùng đã bấm nút Add chưa
//nếu đã bấm rồi thực thi câu lệnh SQL
//ngược lại skip code PHP và hiển thị form
if (isset($_POST['add'])) {
$name = $_POST['name'];
$sql = "INSERT INTO brand (brand_name) VALUES ('$name')";
$run = querySQL($sql);
if ($run) { ?>
  <script>
      alert("Add new brand successfully !");
      window.location.href = "manage_brand.php";
  </script>
<?php } else { ?>
   <script>
       alert("Add brand failed !");
       window.location.href = "manage_brand.php";
   </script>
<?php } } ?>

<center>
    <div>
        <style>
            body {
                background-image: url(images/motor1.jpg);
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </div>
    <form style="width: fit-content; margin-top: 30px;" 
          action="add_brand.php" method="POST">
        <fieldset style="BACKGROUND-COLOR: #FFF;" >
            <legend style="font-size: 50px; "><i><u>ADD NEW BRAND</u></i></legend><br>
        Brand: <input type="text" name="name" required maxlength="30"> 
        <br><br>
        <input type="submit" value="Add" name="add" style="font-size: 25px;">
        </fieldset>
    </form>
</center>