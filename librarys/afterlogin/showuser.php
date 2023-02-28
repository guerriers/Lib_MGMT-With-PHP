<?php
    include("../inc/config.inc.php");
    $number=$_GET['number'] ;
    $sql = "SELECT * FROM member WHERE mem_std_id = '$number'"; 
    $result = mysqli_query($conn, $sql);
    $row_user = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
        echo $row_user['mem_name'];
        return $row_user['mem_name'];
    }else{
        return "";
    }
