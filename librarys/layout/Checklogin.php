<head>
    <meta charset="UTF-8">
    <title>Check Login</title>
</head>

<body>

    <?php
    session_start();
    include("../inc/Config.inc.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `member` WHERE mem_std_id='" . $username . "' AND mem_password ='" . $password . "'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_array($result);
        $_SESSION["username"] = $row["username"];
        $_SESSION["mem_type"] = $row["mem_type"];
        // $_SESSION["Name"] = $row["Name"];

        if ($row["mem_type"] == "Librarian") {

            echo ("<script> alert('เข้าสู่ระบบสำเร็จ Librarian : $username '); window.location = '/librarys/afterlogin/Liblistbook.php';</script>");
        }
        if ($row["mem_type"] == "Student") {

            echo ("<script> alert('เข้าสู่ระบบสำเร็จ Student : $username '); window.location = '/librarys/afterlogin/Truelistbook.php';</script>");
        } else {
            echo ("<script> alert('Username หรือ Password ไม่ถูกต้อง'); window.location = 'Login.php';</script>");
        }
    }

    ?>
</body>