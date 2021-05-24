<?php
//Thông tin kết nối đến database
$hostname = 'localhost';
$dbport = 3306;
$dbname = 'sanpham';
$username = 'root';
/*Username DB mặc định của cả XAMPP & MAMP đều
 * là 'root' */
$password = 'root';
/*Lưu ý:
 *- Với XAMPP: Pass DB mặc định là '' (rỗng)
 *- Với MAMP: Pass DB mặc định là 'root'  */

//Thiết lập kết nối đến DB
$connection = new mysqli($hostname, $username, $password, 
	$dbname, $dbport);
if ($connection->connect_error) {
	die($connection->connect_error); //hiển thị lỗi kết nối
} 

//Tạo hàm để chạy câu lệnh SQL
function querySQL ($qry) {
	global $connection; //set "$connection" thành biến toàn cục (global)
	$result = $connection->query($qry);
	if (!$result) {
		die($connection->error);
	}
	return $result;
}

//khởi tạo 2 biến string chứa ký tự đặc biệt dùng để mã hóa  
$key1 = "$*%(@#";
$key2 = "()#*$!";

//tạo hàm để mã hóa mật khẩu
function encryptPassword ($password) {
	global $key1;
	global $key2;
	//tạo biến $token để lưu pass đã mã hóa
	//note: 'ripemd128' là thuật toán mã hóa
	$token = hash("ripemd128","$key1$password$key2");
	return $token;
}

?>