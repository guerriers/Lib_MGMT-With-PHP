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
    <link rel="stylesheet" href="../css/search.css">
    <title>Search Books</title>
</head>

<body>
    <?php session_start();
    // if (!$_SESSION["mem_std_id"]) {
    //     Header("Location: ../layout/Login.php");
    // } else {
    // }
    ?>

    <?php
    include("../../librarys/afterlogin/layout/Trueheader.php");

    ini_set('display_errors', 1);
    error_reporting(~0);

    $strKeyword = null;
    if (isset($_POST["txtKeyword"])) {
        $strKeyword = $_POST["txtKeyword"];
        if ($strKeyword !== "") {
            $sql = "SELECT * FROM `book` WHERE b_name LIKE '%" . $strKeyword . "%'";
        } else {
            $sql = "SELECT * FROM `book`";
        }
    } else {
        $sql = "SELECT * FROM `book`";
    }
    $result = mysqli_query($conn, $sql);
    $row_show = mysqli_fetch_array($result);
    ?>
    <div class="container-fluid">
        <div class="table-list-book ">
            <div class="row-table">
                <div class="col-md-12 ">

                    <div class="page-header clearfix">
                        <div class="btn-table">
                            <h1 class="title-table">กรุณากรอกชื่อหนังสือที่ต้องการค้นหา :</h1>
                            <div class="page-header clearfix">
                                <form class="d-flex" name="fromSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
                                    <input class="form-control me-2" name="txtKeyword" id="txtKeyword" value="<?php echo $strKeyword; ?>" type="search" placeholder="ค้นหาหนังสือ" aria-label="Search">
                                    <button class="btn btn-outline-secondary" type="submit" value="Search">ค้นหา</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <h1>ข้อมูลหนังสือ</h1>
                    <!-- search -->

                    <?php

                    if (mysqli_num_rows($result) > 0) {
                    ?>

                        <div class="Details">
                            <div class="row ser-row" style="text-align: center;">
                                <!-- <div class="col-md-2"></div> -->
                                <div class="col-md-4 ser-table">
                                    <label for="">รห้สหนังสือ</label><br>
                                    <label for=""><?php echo $row_show['b_id_b'] ?></label>
                                </div>
                                <div class="col-md-4 ser-table">
                                    <label for="">ชื่อหนังสือ</label><br>
                                    <label for=""><?php echo $row_show['b_name'] ?></label>
                                </div>
                                <div class="col-md-4 ser-table">
                                    <label for="">ชื่อผู้แต่ง</label><br>
                                    <label for=""><?php echo $row_show['b_author'] ?></label>
                                </div>
                            </div>

                            <div class="row ser-row" style="text-align: center;">
                                <!-- <div class="col-md-2"></div> -->
                                <div class="col-md-4 ser-table">
                                    <label for="">สำนักพิมพ์</label><br>
                                    <label for=""><?php echo $row_show['b_publish'] ?></label>
                                </div>
                                <div class="col-md-2 ser-table">
                                    <label for="">ราคา</label><br>
                                    <label for=""><?php echo $row_show['b_price'] ?></label>
                                </div>
                                <div class="col-md-2 ser-table">
                                    <label for="">จำนวนวันยืมนักศึกษา</label><br>
                                    <label for=""><?php echo $row_show['b_rentstd'] ?></label>
                                </div>
                                <div class="col-md-4 ser-table">
                                    <label for="">จำนวนวันยืม ครู - เจ้าหน้าที่</label><br>
                                    <label for=""><?php echo $row_show['b_rentlib'] ?></label>
                                </div>
                            </div>
                            <?php
                            echo "<table class='table table-bordered border-dark mt-4'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th> ลำดับ </th>";
                            echo "<th> รหัสหนังสือ </th>";
                            echo "<th> สถานะ </th>";
                            echo "</tr>";
                            echo "</thead>";

                            ?>
                            <?php
                            $result = mysqli_query($conn, $sql);
                            $count = 1;
                            if (mysqli_num_rows($result) > 0) {
                                echo "<tbody>";
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <td><?php echo $count++ ?></td>
                                        <?php
                                        // echo "<td>" . $row['b_id'] . "</td>";
                                        echo "<td>" . $row['b_id_b'] . "</td>";
                                        echo "<td>" . $row['b_status'] . "</td>";
                                        ?>
                                        <!-- <td> -->
                                        <!-- <php
                                            if ($row['b_status'] == "ว่าง") {
                                            ?>
                                                <a href='lend_add.php?id_book=<php echo $row['id_book']; ?>' <i class='fas fa-calendar-check' style='color: #FF0000'></i></a>
                                        </td>
                                    <php
                                            } else {
                                    ?>
                                        <i class='fas fa-times-circle' style='color: #000000'></i></td>
                                    <php
                                            }
                                    ?> -->
                                    </tr>
                        <?php
                                }
                                echo "</tbody>";
                                echo "</table>";
                                mysqli_free_result($result);
                            } else {
                                echo "<p class='lead' <em>No Value Were Found.</em></p>";
                            }
                        } else {

                            echo "<p class='lead' <em>No Value Were Found.</em></p>";
                        }
                        ?>
                        </div>
                </div>
            </div>
        </div>

        <?php
        include("../../librarys/layout/Footer.php")
        ?>
</body>

</html>