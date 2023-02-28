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
    <link rel="stylesheet" href="../css/rentbook.css">
    <title>Library</title>
    <script>
        function myFunction(str) {
            if (str == "") {
                document.getElementById("mem_name").value = "";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.status == 200) {
                    document.getElementById("mem_name").innerHTML = this.response;
                }
            }
            xmlhttp.open("GET", "showuser.php?number=" + str, true);
            xmlhttp.send();
        }

        function countday(str) {
            if (str == "") {
                document.getElementById("mem_name").value = "";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.status == 200) {
                    document.getElementById("re_date").value = this.response;
                }
            }
            xmlhttp.open("GET", "countday.php?number=" + str, true);
            xmlhttp.send();
        }
    </script>
</head>

<?php
session_start();
include("../../librarys/afterlogin/layout/Libheader.php");
?>

<?php
if (isset($_GET['b_id_b'])) {
    $b_id_b = $_GET['b_id_b'];
    $sql = "SELECT * FROM book WHERE b_id_b = '$b_id_b'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
    <div class="container">
        <div class="table-list-book ">
            <div class=" row-table">
                <div class="col-md-12 ">
                    <div class="page-header clearfix">

                        <label class="title-table">
                            <h1>การยืมหนังสือ</h1>
                        </label>
                    </div>

                    <form name="form1" action="Insertrent.php" method="POST">

                        <div class="row row-1">
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <label for="" class="form-label">รหัสนักศึกษา : </label>
                            </div>
                            <div class="col-md-4 col-margin">
                                <input type="" class="form-control" name="mem_std_id" id="mem_std_id" onkeyup="myFunction(this.value),countday(this.value)" required>

                            </div>
                            <div class="col-md-3">
                                <!-- <input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="ชือผู้ยืม" required> -->
                                <label type="text" style="color: red;" name="mem_name" id="mem_name" required></label>
                            </div>
                        </div>

                        <div class="row row-2">
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <label for="">รหัสหนังสือ :</label>
                            </div>
                            <div class="col-md-4 col-margin">
                                <!-- <input class="form-control me-2" name="lib_password" type="text" value="<php echo $row_show['lib_password'] ?>"></input> -->
                                <input class="form-control me-2" name="b_id_b" type="text" value="<?php echo $row['b_id_b'] ?>" readonly></input>
                            </div>
                            <div class="col-md-3">
                                <label type="text" style="color: red;" name="b_name" id="b_name" value="" require><?php echo $row['b_name'] ?></label>
                            </div>
                        </div>

                        <div class="row row-3">
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <label for="">วันที่ยืม :</label>
                            </div>
                            <div class="col-md-3 col-margin">
                                <input class="form-control me-2" style="color: red;" name="bor_date" id="bor_date" value="<?php echo date("d-m-Y") ?>" type="text"></input>
                            </div>
                            <div class="col-md-3">
                            </div>
                        </div>

                        <div class="row row-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <label for="">วันที่ครบกำหนดคืน :</label>
                            </div>
                            <div class="col-md-3 col-margin">
                                <input class="form-control me-2" style="color: red;" name="re_date" id="re_date" type="text" readonly></input>
                            </div>
                            <div class="col-md-3">
                            </div>
                        </div>

                        <div class="row row-5">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <label for="">รหัสผู้ให้ยืม :</label>
                            </div>
                            <div class="col-md-4 col-margin">
                                <input type="text" class="form-control" name="lib_id" id="lib_id" value="<?php echo $_SESSION["lib_id"] ?>" readonly>
                                <label name="bor_date" id="bor_date" type="text"></label>
                            </div>
                            <div class="col-md-2">
                                <span style="color: red;"><?php echo $_SESSION["lib_name"] ?></span>
                            </div>
                        </div>

                        <div class="row">
                            <!-- <div class="col-md-2"></div> -->
                            <div class="col-md-12">
                                <center>
                                    <button class="btn btn-success" type="submit">บันทึก</button>
                                </center>
                            </div>
                            <!-- <div class="col-md-2"></div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
}
    ?>