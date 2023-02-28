<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/add.css">
    <title>Rent</title>
</head>

<?php

include("../../librarys/inc/Config.inc.php");

$mem_std_id = $_POST['mem_std_id'];
$b_id_b = $_POST['b_id_b'];
$bor_date = $_POST['bor_date'];
$re_date = $_POST['re_date'];
// $id_book = $_POST['id_book'];
$lib_id = $_POST['lib_id'];
// echo $mem_std_id, $b_id_b, $bor_date, $re_date, $lib_id;
$sql2 = "SELECT * FROM member WHERE mem_std_id = '$mem_std_id'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);
$id_user = $row2['mem_std_id'];
$sql = "INSERT INTO  borrow (bor_id, mem_std_id, b_id_b, lib_id, re_mem, bor_date, re_date)
            VALUES ('', '$id_user','$b_id_b','$lib_id','', '$bor_date','$re_date')";

if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE book SET b_status='ยืม' WHERE b_id_b='$b_id_b'";
    $result = mysqli_query($conn, $sql);

    echo ("<script> alert('ส่งข้อมูลไปเก็บยังฐานข้อมูลเรียบร้อย'); window.location = 'Rentlist.php';</script>");
} else {
    echo ("<script> alert('ไม่สามารถส่งข้อมูลไปเก็บยังฐานข้อมูลได้'); window.location = 'Libsearch.php';</script>");
}
$conn->close();
?>