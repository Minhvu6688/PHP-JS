<?php
require_once 'functions.php';
require_once 'restricted.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <title>MINH VU'S Motorcycle Store</title>
  <link rel="stylesheet" type="text/css" href="css\style_admin.css?version=5">
  <meta charset="utf-8">
</head>
<style>
/* style for inline form */

form.frm_inline {
    display: inline;
}

form.frm1 {
    width: fit-content;
    margin-top: 30px;
}


/* Style for table */

.tbl {
    margin-top: 30px;
}


/*Style for form */

form.frm {
    border: 2px solid blue;
    width: fit-content;
    padding: 7px;
    margin-top: 40px;
}

form.frm123 {
    width: fit-content;
    margin-top: 30px;
}

#inp_login {
    color: red;
    font-weight: bold;
    font-size: 15px;
}

img {
    margin-top: 30px;
}


/* style for navigation bar */

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: gainsboro;
}

li {
    float: left;
}

li a,
.dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover,
.dropdown:hover .dropbtn {
    background-color: wheat;
    color: black;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: black;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<body>
  <ul>
    <li><a href="home.php">Home</a></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Motorcycle</a>
      <div class="dropdown-content">
        <a href="manage_bike.php">Manage bike</a>
        <a href="add_bike.php">Add bike</a>
      </div>
    </li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Brand</a>
      <div class="dropdown-content">
        <a href="manage_brand.php">Manage brand</a>
        <a href="add_brand.php">Add brand</a>
      </div>
    </li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">User</a>
      <div class="dropdown-content">
        <a href="manage_user.php">Manage user</a>
        <a href="add_user.php">Add user</a>
      </div>
    </li>
    <li><a onclick="about();">About</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  <script type="text/javascript">
    function about() {
      alert("Copyright by MINH VU");
    }
  </script>
</body>

</html>