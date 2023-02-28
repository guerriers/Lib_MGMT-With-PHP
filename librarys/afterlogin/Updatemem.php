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
    <title>Update Member</title>
</head>


<body>

    <?php
    include("../../librarys/afterlogin/layout/Libheader.php");
    include("../../librarys/inc/Config.inc.php");

    $mem_std_id = $_POST['mem_std_id'];
    $mem_password = $_POST['mem_password'];
    $mem_name = $_POST['mem_name'];
    $mem_group = $_POST['mem_group'];
    $mem_address = $_POST['mem_address'];
    $mem_phone = $_POST['mem_phone'];
    $mem_type = $_POST['mem_type'];

    $sql = "UPDATE `member` SET mem_password='$mem_password', mem_name='$mem_name', mem_group='$mem_group', mem_address='$mem_address', mem_phone='$mem_phone', mem_type='$mem_type' WHERE mem_std_id='$mem_std_id'";

    if ($conn->query($sql) === TRUE) {
        echo ("<script> alert('Updated successfully'); window.location = 'Member.php';</script>");
    } else {
        echo ("<script> alert('Updating Error'); window.location = 'Member.php';</script>");
    }
    $conn->close();

    ?>

    <?php
    include("../../librarys/layout/Footer.php")
    ?>


</body>

</html>