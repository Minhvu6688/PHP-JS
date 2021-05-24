<?php
require_once "function.php";
// muc dich cua file nay la de kiem tra xem nguoi dung da login hay chua
//truoc khi co the thuc hien cac thao tac quan tri vien cua admin
session_start();
// neu ng dung chua login thi thong bao loi va dieu huong ve trang login
if(!isset($_SESSION['username']) && !isset['password']){
?>
    <script>
        alert("You must login first");
        window.location.href = "index.php";
    </script>
<?php } ?>