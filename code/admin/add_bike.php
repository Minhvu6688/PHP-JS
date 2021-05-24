<?php
require_once "header.php";   
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $cc =$_POST['cc'];
    $price = $_POST['price'];
    $year =$_POST['year'];
    $brand = $_POST['brand'];
    $image = "";
//đoạn code dùng để upload & xử lý ảnh
//kiểm tra người dùng đã chọn file ảnh có dung lượng khác 0
if (isset($_FILES['image']) && $_FILES['image']['size'] != 0) {	
    //khai báo biến dùng để lưu file ảnh vào đường dẫn tạm thời
    $temp_name = $_FILES['image']['tmp_name'];
    //khai báo biến dùng để lưu tên của ảnh
    $img_name = $_FILES['image']['name'];
    //tách tên file ảnh dựa vào dấu chấm
    $parts = explode(".", $img_name);
    //tìm index cuối cùng
    $lastIndex = count($parts) - 1;
    //lấy ra extension (đuôi) file ảnh
    $extension = $parts[$lastIndex];
    //thiết lập tên mới cho ảnh
    $image = $name . "_" . $brand . "." . $extension;
    //thiết lập địa chỉ file ảnh cần di chuyển đến
    $image_folder = "images/bike/";
    $destination = $image_folder . $image;
    //di chuyển file ảnh từ đường dẫn tạm thời đến địa chỉ đã thiết lập
    move_uploaded_file($temp_name, $destination);
}
$sql = "INSERT INTO bike (bike_name, bike_cc, bike_price, bike_year, bike_brand, bike_image)
        VALUES ('$name','$cc','$price','$year','$brand', '$image')";
$run = querySQL($sql);
if ($run) { ?>
   <script>
       alert("Add new bike successfully !");
       window.location.href = "manage_bike.php";
   </script>
<?php } }  ?>
<center>
    <div >
        <style>
            body {
               background-image: url(images/ducati-panigale-v4-s-uhd-4k-wallpaper.jpg);
               background-size: cover;
            }
        </style>
    </div>
<form style="color: white; width: fit-content; margin-top: 80px;" 
      action="" method="POST" enctype="multipart/form-data">
<!-- Lưu ý: bổ sung thuộc tính enctype vào form khi upload file -->
    <fieldset style="color: white;">
    <legend style="font-size: 50px;"> <b><u>ADD NEW MORTOS</u></b> </legend>
    
    Name: <input type="text" name="name" required maxlength="50"> <br> <br>
    Capacity : <input type="number" name="cc" required maxlength="20"> <br> <br>
    Price: <input type="text" name="price" required maxlength="20"> <br> <br>
    Year : <input type="number" name="year" required maxlength="20"> <br> <br>
    Brand: <br> <br>
    <?php
    $sql = "SELECT * FROM brand";
    $run = querySQL($sql); ?>
    <select name="brand">
    <?php
    while ($row = mysqli_fetch_array($run)) { ?>
        <option value='<?= $row['brand_id'] ?>'> <?= $row['brand_name'] ?> </option>
    <?php } ?>
    </select> 
    <br> <br>
    Image: <input type="file" name="image" required> <br> <br>
    <input type="submit" value="Add" name="add">
    </fieldset>
</center>
