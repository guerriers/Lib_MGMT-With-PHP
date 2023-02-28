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
  <title>Update Book</title>
</head>


<body>

  <?php
  include("../../librarys/afterlogin/layout/Trueheader.php");
  include("../../librarys/inc/Config.inc.php");

  $b_id = $_POST['txt_b_id'];
  $bname = $_POST['bname'];
  $bauthor = $_POST['bauthor'];
  $bcategory = $_POST['bcategory'];
  $bdescription = $_POST['bdescription'];
  $bstatus = $_POST['bstatus'];

  $sql = "UPDATE `book` SET b_name='$bname', b_author='$bauthor', b_category='$bcategory', b_description='$bdescription', b_status='$bstatus' WHERE b_id='$b_id'";

  if ($conn->query($sql) === TRUE) {
    echo ("<script> alert('Updated successfully'); window.location = 'Truelistbook.php';</script>");
  } else {
    echo ("<script> alert('Updating Error'); window.location = 'Updatebook.php';</script>");
  }
  $conn->close();

  ?>

  <?php
  include("../../librarys/layout/Footer.php")
  ?>


</body>

</html>