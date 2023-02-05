<?php
include '../dbconnect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `members` where id =$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Deleted successfully";
        header('location:dashboard1.php');
    }
    else{
        die(mysqli_error($conn));
    }


}