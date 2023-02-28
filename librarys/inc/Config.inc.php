<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "librarys";

//สร้างการเชื่อมต่อ
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Set ภาษาไทย หรือ utf8
mysqli_set_charset($conn, "utf8");

//ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Cannot Connect Database! " . $conn->connect_error);
}
    // echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
