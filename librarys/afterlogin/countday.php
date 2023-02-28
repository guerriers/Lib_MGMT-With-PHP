<?php
include("../inc/config.inc.php");
$number = $_GET['number'];
$sql = "SELECT * FROM member WHERE mem_std_id = '$number'";
$result = mysqli_query($conn, $sql);
$row_user = mysqli_fetch_array($result);
if (mysqli_num_rows($result) > 0) {
    if ($row_user['mem_type'] == "Librarian") {
        $Date = date("d-m-Y");
        $date = date('d-m-Y', strtotime($Date . ' + 120 days'));
        echo ($date);
        return $date;
    } elseif ($row_user['mem_type'] == "Student") {
        $Date = date("d-m-Y");
        $date = date('d-m-Y', strtotime($Date . ' + 7 days'));
        echo ($date);
        return $date;
    }
} else {
    return "";
}
