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
    <link rel="stylesheet" href="../css/book.css">

    <title>ข้อมูลหนังสือ</title>
</head>

<body>
    <?php
    include("../../librarys/afterlogin/layout/Libheader.php");

    ini_set('display_errors', 1);
    error_reporting(~0);

    $strKeyword = null;
    if (isset($_POST["txtKeyword"])) {
        $strKeyword = $_POST["txtKeyword"];
        if ($strKeyword !== "") {
            $sql = "SELECT * FROM `book` WHERE b_id_b LIKE '%" . $strKeyword . "%'";
        } else {
            $sql = "SELECT * FROM `book`";
        }
    } else {
        $sql = "SELECT * FROM `book`";
    }
    $result = mysqli_query($conn, $sql);
    $row_show = mysqli_fetch_array($result);
    $row = $result->fetch_assoc();
    ?>

    <div class="container">
        <div class="table-list-book ">
            <div class=" row-table">
                <div class="col-md-12 ">
                    <div class="page-header clearfix">

                        <label class="title-table">
                            <h1>ข้อมูลหนังสือ</h1>
                        </label>
                    </div>

                    <?php
                    $sql = "SELECT * FROM `book`";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    ?>

                    <div class="row row-1">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <label for="" class="form-label">รหัสหนังสือ : </label>
                        </div>
                        <div class="col-md-5 col-margin">
                            <form class="d-flex" name="fromSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
                                <input class="form-control me-2" name="txtKeyword" id="txtKeyword" value="<?php echo $strKeyword; ?>" type="search" aria-label="Search">
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-outline-secondary" type="submit" value="Search">ค้นหา</button>
                        </div>
                        </form>
                        <!-- <div class="col-md-2"></div> -->
                    </div>

                    <div class="row row-2">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <label for="">ชื่อหนังสือ :</label>
                        </div>
                        <div class="col-md-6 col-margin">
                            <input class="form-control me-2" name="b_name" type="text" value="<?php echo $row_show['b_name'] ?>"></input>
                        </div>
                        <!-- <div class="col-md-3"></div> -->
                    </div>

                    <div class="row row-3">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <label for="">ชื่อผู้แต่ง :</label>
                        </div>
                        <div class="col-md-6 col-margin">
                            <input class="form-control me-2" name="b_author" type="text" value="<?php echo $row_show['b_author'] ?>"></input>
                        </div>
                        <!-- <div class="col-md-3"></div> -->
                    </div>

                    <div class="row row-4">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <label for="">สำนักพิมพ์ :</label>
                        </div>
                        <div class="col-md-6 col-margin">
                            <input class="form-control me-2" name="b_publish" type="text" value="<?php echo $row_show['b_publish'] ?>"></input>
                        </div>
                        <!-- <div class="col-md-3"></div> -->
                    </div>

                    <div class="row row-5">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <label for="">ราคา :</label>
                        </div>
                        <div class="col-md-3 col-margin">
                            <input class="form-control me-2" name="b_price" type="text" value="<?php echo $row_show['b_price'] ?>"></input>
                        </div>
                        <div class="col-md-1">
                            <label for="">บาท</label>
                        </div>
                        <!-- <div class="col-md-3"></div> -->
                    </div>

                    <div class="row row-6">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label for="">จำนวนวันที่สามารถยืมได้:</label>
                        </div>
                        <div class="col-md-2 col-margin">
                            <input class="form-control me-2" name="b_rentstd" type="text" value="<?php echo $row_show['b_rentstd'] ?>"></input>
                        </div>
                        <div class="col-md-3">
                            <label for="">วัน (สำหรับนักศึกษา)</label>
                        </div>
                        <!-- <div class="col-md-3"></div> -->
                    </div>

                    <div class="row row-7">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label for="">จำนวนวันที่สามารถยืมได้:</label>
                        </div>
                        <div class="col-md-2 col-margin">
                            <input class="form-control me-2" name="b_rentlib" type="text" value="<?php echo $row_show['b_rentlib'] ?>"></input>
                        </div>
                        <div class="col-md-4">
                            <label for="">วัน (สำหรับครู หรือเจ้าหน้าที่)</label>
                        </div>
                        <!-- <div class="col-md-3"></div> -->
                    </div>

                    <br>

                    <div class="col-12">
                        <a class="btn btn-primary" href="Addbook.php">เพิ่ม</a>
                        <?php
                        echo "<a href='Editbook.php?b_id_b=" . $row['b_id_b'] . "' class='btn btn-warning edit-class'>แก้ไข</a>";
                        echo "<a href='Deletebook.php?b_id_b=" . $row['b_id_b'] . "' class='btn btn-danger delete-class'>ลบ</a>";
                        ?>

                    </div>

                </div>
            </div>

            <?php
            include("../../librarys/layout/Footer.php");
            ?>



</body>

</html>