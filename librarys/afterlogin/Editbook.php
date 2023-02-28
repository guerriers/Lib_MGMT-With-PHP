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
    <title>Edit</title>
</head>

<body>

    <?php
    include("../../librarys/afterlogin/layout/Libheader.php");
    include("../../librarys/inc/Config.inc.php");
    $b_id_b = $_GET['b_id_b'];
    $sql = "SELECT * FROM `book` WHERE b_id_b='$b_id_b'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    ?>

    <div class="container">
        <div class="add-add">

            <center>
                <label for="">
                    <h1>แก้ไขหนังสือ </h1>
                </label>
            </center><br>

            <form class="row g-3 needs-validation" action="Updatebook.php" method="POST" novalidate>
                <div class="row row-1">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                        <input type="hidden" class="form-control" name="txt_b_id" id="txt_b_id" placeholder="b_id" value="<?php echo $row['b_id']; ?>">
                        <label for="bname" class="form-label">ชื่อหนังสือ</label>
                        <input name="bname" type="text" class="form-control" id="bname" value="<?php echo $row['b_name']; ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label for="bauthor" class="form-label">ชื่อผู้แต่ง</label>
                        <input name="bauthor" type="text" class="form-control" id="bauthor" value="<?php echo $row['b_author']; ?>" required>
                    </div>

                    <div class="col-md-3">
                        <label for="bcategory" class="form-label">ประเภทหนังสือ</label>
                        <select class="form-select" name="bcategory" id="bcategory" required>
                            <?php
                            if ($row['b_category'] == 'Mathematics') {
                                echo "<OPTION value='1'>Mathematics</OPTION>";
                            } else if ($row['b_category'] == 'Investment') {
                                echo "<OPTION value='2'>Investment</OPTION>";
                            } else if ($row['b_category'] == 'Prehistory') {
                                echo "<OPTION value='3'>Prehistory</OPTION>";
                            } else if ($row['b_category'] == 'Detective') {
                                echo "<OPTION value='4'>Detective</OPTION>";
                            } else if ($row['b_category'] == 'Business') {
                                echo "<OPTION value='5'>Business</OPTION>";
                            } else if ($row['b_category'] == 'Language') {
                                echo "<OPTION value='6'>Language</OPTION>";
                            } else if ($row['b_category'] == 'Science') {
                                echo "<OPTION value='7'>Science</OPTION>";
                            }
                            ?>
                            <option selected value="">Choose...</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Investment">Investment</option>
                            <option value="Prehistory">Prehistory</option>
                            <option value="Detective">Detective</option>
                            <option value="ฺBusiness">ฺBusiness</option>
                            <option value="Language">Language</option>
                            <option value="Science">Science</option>
                        </select>
                    </div>

                    <div class="col-md-1"></div>
                </div>
                <div class="row row-2">

                    <div class="col-md-3"></div>

                    <div class="col-md-4">
                        <label for="bdescription" class="form-label">รายละเอียด</label>
                        <input name="bdescription" type="text" class="form-control" id="bdescription" value="<?php echo $row['b_description']; ?>" required>
                    </div>
                    <div class="col-md-2">
                        <label>สถานะ</label>
                        <?php
                        if ($row['b_status'] == 'ว่าง') {
                        ?>
                            <div class="">

                                <div class="form-check">
                                    <input name="bstatus" class="form-check-input" type="radio" id="bstatus" checked>
                                    <label class="form-check-label" for="bstatus" name="bstatus" value="ว่าง">ว่าง</label>
                                </div>
                                <div class="form-check">
                                    <input name="bstatus" class="form-check-input" type="radio" id="bstatus" disabled>
                                    <label class="form-check-label" for="bstatus" name="bstatus" value="ถูกยืม">ถูกยืม</label>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="">

                                <div class="form-check">
                                    <input name="bstatus" class="form-check-input" type="radio" id="bstatus" checked>
                                    <label class="form-check-label" for="bstatus" name="bstatus" value="ว่าง">ว่าง</label>
                                </div>
                                <div class="form-check">
                                    <input name="bstatus" class="form-check-input" type="radio" id="bstatus" disabled>
                                    <label class="form-check-label" for="bstatus" name="bstatus" value="ถูกยืม">ถูกยืม</label>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row row-3">
                    <div class="col-md-5"></div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">Agree to terms</label>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="Save" id="Save" value="Add">Add</button>
                    <button class="btn btn-danger" type="reset" name="Reset" id="Reset" value="Reset">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include("../../librarys/layout/Footer.php")
    ?>

</body>

</html>