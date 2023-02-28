<meta charset="UTF-8">
<?php
include("../../librarys/inc/Config.inc.php");
$mem_std_id = $_GET['mem_std_id'];
$sql = "DELETE FROM `member` WHERE mem_std_id = $mem_std_id";
if ($conn->query($sql) === TRUE) {
    echo ("<script> alert('Deleted successfully'); window.location = 'Member.php';</script>");
} else {
    echo ("<script> alert('Deleting Error'); window.location = 'Member.php';</script>");
}
$conn->close();
?>

<?php
include("../../librarys/inc/Config.inc.php");
$mem_std_id = $_GET['mem_std_id'];
$sql = "DELETE FROM `member` WHERE mem_std_id = $mem_std_id";
if ($conn->query($sql) === TRUE) {
    echo "Deleted successfully";
} else {
    echo "Deleting Error" . $conn->error;
}

$conn->close();
?>