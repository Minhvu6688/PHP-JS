<?php
require_once 'header.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    //kiểm tra xem hãng xe cần xóa có tồn tại sản phẩm không 
    $sql1 = "SELECT * FROM bike WHERE bike_brand = '$id'";
    $run1 = querySQL($sql1);
    if ($run1->num_rows > 0) { ?>
        <script>
        alert("Delete brand failed !");
        window.location.href = "manage_brand.php";
    </script>
    <?php 
    } else {
    //xóa hãng xe sau khi đã kiểm tra điều kiện
    $sql2 = "DELETE FROM brand WHERE brand_id = '$id'";
    $run2 = querySQL($sql2); ?>
        <script>
            alert("Delete brand successfully !");
            window.location.href = "manage_brand.php";
        </script>
    <?php } 
} 
?>