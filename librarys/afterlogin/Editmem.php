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
    <link rel="stylesheet" href="../css/member.css">
    <title>Member Edit</title>
</head>

<body>

    <?php
    include("../../librarys/afterlogin/layout/Libheader.php");
    include("../../librarys/inc/Config.inc.php");
    $mem_std_id = $_GET['mem_std_id'];
    $sql = "SELECT * FROM `member` WHERE mem_std_id='$mem_std_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // $row_show = mysqli_fetch_array($result);

    ?>

    <div class="container">
        <div class="add-add">

            <center>
                <label for="">
                    <h1>แก้ไขสมาชิก </h1>
                </label>
            </center><br>
            <form class="row g-3 needs-validation" action="Updatemem.php" method="POST" novalidate>
                <div class="row row-1">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="mem_std_id" class="form-label">รหัสนักศึกษา : </label>
                    </div>
                    <div class="col-md-4 col-margin">
                        <input class="form-control me-2" name="mem_std_id" id="mem_std_id" type=" text" value="<?php echo $row['mem_std_id'] ?>"></input>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row row-2">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="">รหัสผ่าน :</label>
                    </div>
                    <div class="col-md-4 col-margin">
                        <!-- <input class="form-control me-2" name="mem_password" type="text" value="<php echo $row_show['mem_password'] ?>"></input> -->
                        <input class="form-control me-2" name="mem_password" id="mem_password" type="text" value="<?php echo $row['mem_password'] ?>"></input>
                    </div>
                    <!-- <div class="col-md-3"></div> -->
                </div>

                <div class="row row-3">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="">ชื่อ - สกุล :</label>
                    </div>
                    <div class="col-md-6 col-margin">
                        <input class="form-control me-2" name="mem_name" id="mem_name" type="text" value="<?php echo $row['mem_name'] ?>"></input>
                    </div>
                    <!-- <div class="col-md-3"></div> -->
                </div>

                <div class="row row-4">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="">กลุ่ม :</label>
                    </div>
                    <div class="col-md-2 col-margin">
                        <input class="form-control me-2" name="mem_group" id="mem_group" type="text" value="<?php echo $row['mem_group'] ?>"></input>
                    </div>
                    <!-- <div class="col-md-3"></div> -->
                </div>

                <div class="row row-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="">ที่อยู่ :</label>
                    </div>
                    <div class="col-md-8 col-margin">
                        <input class="form-control me-2" name="mem_address" id="mem_address" type="text" value="<?php echo $row['mem_address'] ?>"></input>
                    </div>
                    <!-- <div class="col-md-3"></div> -->
                </div>

                <div class="row row-6">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="">เบอร์โทรศัพท์ :</label>
                    </div>
                    <div class="col-md-5 col-margin">
                        <input class="form-control me-2" name="mem_phone" id="mem_phone" type="text" value="<?php echo $row['mem_phone'] ?>"></input>
                    </div>
                    <!-- <div class="col-md-3"></div> -->
                </div>

                <div class="row row-7">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="">ประเภทสมาชิก:</label>
                    </div>
                    <div class="col-md-2 col-margin">
                        <input class="form-control me-2" name="mem_type" type="text" id="mem_type" value="<?php echo $row['mem_type'] ?>"></input>
                    </div>
                    <!-- <div class="col-md-3"></div> -->
                </div>

                <div class="col-md-5"></div>

                <br>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="Save" id="Save" value="success">ยืนยัน</button>
                    <button class="btn btn-danger" type="reset" name="Reset" id="Reset" value="Reset">Reset</button>
                </div>
                <div class="col-12">

                </div>
            </form>

        </div>
    </div>

    <?php
    include("../../librarys/layout/Footer.php")
    ?>

</body>

</html>