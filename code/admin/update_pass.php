<?php
require_once 'header.php';
$id = $_POST['id'];
if (isset($_POST['change'])) {
    $pass = $_POST['pass'];
    $retype = $_POST['retype'];
    if ($pass != $retype) {?> 
        <script>
            alert("Password & retype password don't match");
            window.location.href = "update_pass.php";
        </script>
    <?php } else {
    $token = encryptPassword($pass); // mã hóa pass trước khi lưu vào DB
    $sql = "UPDATE user SET password = '$token' WHERE user_id = '$id'";
    $run = querySQL ($sql);
    if ($run) { ?>
        <script type="text/javascript">
		alert ("Update password successfully !");
		window.location.href = "manage_user.php";
   </script>
    <?php }
    }
}
?>
<center>
    <form class="frm123" action="update_pass.php" method="POST">
    <fieldset>
        <legend> Change password </legend>
    Password: <input type="password" name="pass" required> <br><br>
    Retype  : <input type="password" name="retype" required> <br><br>
    <input type="hidden" name="id" value='<?= $id ?>'>
    <input type="submit" value="Change" name="change">
    </fieldset>
    </form>
</center>


