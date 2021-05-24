<?php
//khởi tạo session
session_start();
//check nếu người dùng chưa đăng nhập sẽ bị direct về trang login
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("Location: index.php");
}
?>