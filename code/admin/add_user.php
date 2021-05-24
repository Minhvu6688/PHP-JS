<?php
require_once "header.php";
if (isset($_POST['add'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $token = encryptPassword($password);
    $qry1 = "SELECT username FROM user";
    $result1 = querySQL($qry1);
    //check trùng username
    //tạo biến boolean dùng để check với giá trị ban đầu là FALSE
    //nếu trùng username thì giá trị chuyển sang TRUE
    $check = FALSE;
    while ($row = mysqli_fetch_array($result1)) {
        if ($row['username'] == $username) { ?>
            <script>
                alert("Username is already existed !");
                window.location.href = "add_user.php";
            </script>
        <?php
            $check = TRUE;
        }
    }
    if ($check == FALSE) {
        $qry = "INSERT INTO user (username, password) 
        VALUES ('$username', '$token')";
        $result = querySQL($qry);
        if ($result) { ?>
            <script>
                alert("Add user successfully !");
                window.location.href = "manage_user.php";
            </script>
        <?php } else { ?>
            <script>
                alert("Add user failed !");
                window.location.href = "manage_user.php";
            </script>
<?php }
    }
} ?>
<center style="margin-top:100px">
    <form class="frm" action="add_user.php" method="POST">
        Username: <input type="text" name="username" maxlength="15" size="20" required> <br> <br>
        Password: <input type="password" name="password" maxlength="15" size="20" required> <br> <br>
        <input type="submit" name="add" value="ADD">
    </form>
    <style>
        .frm{
            padding: 250px;
        }
    </style>
</center>