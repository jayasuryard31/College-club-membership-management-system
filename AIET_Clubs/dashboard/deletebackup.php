<?php
include '../dbconnect.php';

if(isset($_GET['deleteid'])){
    $club_id = $_GET['deleteid'];
    $sql = "delete from `backup` where `club_id` =$club_id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Deleted successfully";
        header('location:dashboard2.php');
    }
    else{
        die(mysqli_error($conn));
    }


}