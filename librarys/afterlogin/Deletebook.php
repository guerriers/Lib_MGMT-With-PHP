<meta charset="UTF-8">
<?php
include("../../librarys/inc/Config.inc.php");
$b_id_b = $_GET['b_id_b'];
$sql = "DELETE FROM `book` WHERE b_id_b = $b_id_b";
if ($conn->query($sql) === TRUE) {
    echo ("<script> alert('Deleted successfully'); window.location = 'Liblistbook.php';</script>");
} else {
    echo ("<script> alert('Deleting Error'); window.location = 'Liblistbook.php';</script>");
}
$conn->close();
?>

<?php
include("../../librarys/inc/Config.inc.php");
$b_id_b = $_GET['b_id_b'];
$sql = "DELETE FROM `books` WHERE b_id_b = $b_id_b";
if ($conn->query($sql) === TRUE) {
    echo "Deleted successfully";
} else {
    echo "Deleting Error" . $conn->error;
}

$conn->close();
?>