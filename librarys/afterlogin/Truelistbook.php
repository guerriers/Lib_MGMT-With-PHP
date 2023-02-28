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
    <title>Library</title>
</head>

<body>

    <?php session_start();
    if (!$_SESSION["mem_std_id"]) {
        Header("Location: ../layout/Login.php");
    } else {
    }
    ?>

    <?php
    include("../../librarys/afterlogin/layout/Trueheader.php")
    ?>

    <div class="container-fluid">
        <div class="table-list-book ">
            <div class="row-table">
                <div class="col-md-12 ">

                    <div class="page-header clearfix">
                        <h1 class="title-table">รายการหนังสือ</h1>
                    </div>
                    <!-- <div class="btn-table">
                        <a class="btn btn-secondary" href="Addbook.php">เพิ่มรายการหนังสือ</a>
                    </div> -->


                    <?php
                    $sql = "SELECT * FROM `book`";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table class='table table-bordered border-dark'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th> ID </th>";
                        echo "<th> รหัสหนังสือ </th>";
                        echo "<th> ชื่อหนังสือ </th>";
                        echo "<th> ชื่อผู้แต่ง </th>";
                        echo "<th> สำนักพิมพ์ </th>";
                        echo "<th> ราคา </th>";
                        echo "<th> จำนวนวันยืม นักศึกษา </th>";
                        echo "<th>  จำนวนวันยืม ครู - เจ้าหน้าที่</th>";
                        // echo "<th>แก้ไข </th>";
                        // echo "<th>ลบ </th>";

                        echo "</tr>";
                        echo "</thead>";

                        echo "<tbody>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['b_id'] . "</td>";
                            echo "<td>" . $row['b_id_b'] . "</td>";
                            echo "<td>" . $row['b_name'] . "</td>";
                            echo "<td>" . $row['b_author'] . "</td>";
                            echo "<td>" . $row['b_publish'] . "</td>";
                            echo "<td>" . $row['b_price'] . "</td>";
                            echo "<td>" . $row['b_rentstd'] . "</td>";
                            echo "<td>" . $row['b_rentlib'] . "</td>";
                            // echo "<td>" . $row['createdAt'] . "</td>";
                            // echo "<td>" . $row['updatedAt'] . "</td>";
                            // echo "<td><a href='Editbook.php?b_id=" . $row['b_id'] . "' class='btn btn-warning'><i class='fas fa-user-edit'></i></a></td>";
                            // echo "<td><a href='Deletebook.php?b_id=" . $row['b_id'] . "' class='btn btn-danger'><i class='fas fa-trash'></i></a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "ไม่พบข้อมูล";
                    }
                    echo "</tbody>";
                    $conn->close();
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