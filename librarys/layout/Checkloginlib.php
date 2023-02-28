<head>
    <meta charset="UTF-8">
    <title>Check Login Librarian</title>
</head>

<body>

    <?php
    session_start();
    include("../inc/Config.inc.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM librarian WHERE lib_id='" . $username . "' AND lib_password ='" . $password . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION["username"] = $row["username"];
        $_SESSION["lib_name"] = $row["lib_name"];
        $_SESSION["lib_id"] = $row["lib_id"];
        // echo ($row["lib_name"]);
        $_SESSION["mem_type"] = $row["mem_type"];
        // $name = $row["lib_name"];

        if ($row["mem_type"] == "Librarian") {
            // echo ($row["lib_name"]);
            echo ("<script> alert('เข้าสู่ระบบสำเร็จ Librarian : $username '); window.location = '/librarys/afterlogin/Libsearch.php';</script>");
            // echo ("<script> alert('เข้าสู่ระบบสำเร็จ Librarian : $name '); window.location = '/librarys/afterlogin/Liblistbook.php';</script>");
        }
        if ($row["mem_type"] == "Student") {

            echo ("<script> alert('เข้าสู่ระบบสำเร็จ Student : $username '); window.location = '/librarys/afterlogin/Truelistbook.php';</script>");
        } else {
            echo ("<script> alert('Username หรือ Password ไม่ถูกต้อง'); window.location = 'Loginlib.php';</script>");
        }
    } else {
        echo ("<script> alert('Username หรือ Password ไม่ถูกต้อง'); window.location = 'Loginlib.php';</script>");
    }

    ?>
</body>