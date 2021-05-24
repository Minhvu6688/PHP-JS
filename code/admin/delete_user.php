<?php
require_once "header.php";

$id = $_POST["id"];
$qry = "DELETE FROM user WHERE user_id = '$id'";
$result = querySQL($qry);
if ($result) { ?>
    <script>
        alert("Delete user successfully !");
        window.location.href = "manage_user.php";
    </script>
<?php } else { ?>
    <script>
        alert("Delete user failed !");
        window.location.href = "manage_user.php";
    </script>
<?php } ?>