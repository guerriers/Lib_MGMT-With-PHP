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
  <title>Add Books</title>
</head>

<body>

  <?php
  include("../../librarys/afterlogin/layout/Libheader.php")
  ?>


  <?php
  include("../../librarys/inc/Config.inc.php");
  $bidb = $_POST['bidb'];
  $bname = $_POST['bname'];
  $bauthor = $_POST['bauthor'];
  $bpublish = $_POST['bpublish'];
  $bprice = $_POST['bprice'];
  $brentstd = $_POST['brentstd'];
  $brentlib = $_POST['brentlib'];
  $bstatus = $_POST['bstatus'];

  $sql = "INSERT INTO `book` (b_id, b_id_b, b_name, b_author, b_publish, b_price, b_rentstd, b_rentlib, b_status) 
          value ('', '$bidb', '$bname', '$bauthor', '$bpublish', '$bprice', '$brentstd', `$brentlib`, `$bstatus`)";


  if ($conn->query($sql) == TRUE) {
    echo ("<script> alert('ส่งข้อมูลไปเก็บยังฐานข้อมูลเรียบร้อย'); window.location = 'Liblistbook.php';</script>");
  } else {
    echo ("<script> alert('ไม่สามารถส่งข้อมูลไปเก็บยังฐานข้อมูลได้'); window.location = 'Addbook.php';</script>");
  }
  $conn->close();


  ?>

  <?php
  include("../../librarys/layout/Footer.php");
  ?>

</body>

</html>