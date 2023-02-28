<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Books</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
    <div class="container-fluid">
        <div class="table-list-book ">
            <div class="row-table">
                <div class="col-md-12 ">

                    <div class="page-header clearfix">
                        <h1 class="title-table">รายการหนังสือ</h1>
                    </div>
                    <!-- <div class="btn-table">
                        <a class="btn btn-secondary" href="./addemployee.php">เพิ่มรายการหนังสือ</a>
                    </div> -->

                    <?php
                    $sql = "SELECT * FROM `books`";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table class='table table-bordered border-dark'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th> ID </th>";
                        echo "<th> ชื่อหนังสือ </th>";
                        echo "<th> ชื่อผู้แต่ง </th>";
                        echo "<th> ประเภทหนังสือ </th>";
                        echo "<th> รายละเอียด </th>";
                        echo "<th> สถานะ </th>";
                        // echo "<th>  แก้ไข</th>";
                        // echo "<th>ลบ </th>";

                        echo "</tr>";
                        echo "</thead>";

                        echo "<tbody>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['b_id'] . "</td>";
                            echo "<td>" . $row['b_name'] . "</td>";
                            echo "<td>" . $row['b_author'] . "</td>";
                            echo "<td>" . $row['b_category'] . "</td>";
                            echo "<td>" . $row['b_description'] . "</td>";
                            echo "<td>" . $row['b_status'] . "</td>";
                            // echo "<td>" . $row['createdAt'] . "</td>";
                            // echo "<td>" . $row['updatedAt'] . "</td>";
                            // echo "<td><a href='frm_edit_employee.php?b_id=" . $row['b_id'] . "' class='btn btn-warning'><i class='fas fa-user-edit'></i></a></td>";
                            // echo "<td><a href='del_employee.php?b_id=" . $row['b_id'] . "' class='btn btn-danger'><i class='fas fa-trash'></i></a></td>";
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

</body>

</html>