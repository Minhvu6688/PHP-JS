<?php
require_once 'header.php';
$id = $_POST['id'];
$qry = "DELETE FROM bike WHERE bike_id = '$id'";
$result = querySQL($qry);
if ($result) { ?>
 <script>
     alert ("Delete bike successfully !");
     window.location.href = "manage_bike.php";
 </script>
<?php } else { ?> 
  <script>
    alert ("Delete bike failed !");
    window.location.href = "manage_bike.php";
</script>
<?php } ?>