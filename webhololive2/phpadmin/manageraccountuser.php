<?php
require '../db/connect.php';
    if(isset($_GET['rem']) && $_GET['rem']>0){
        $query="SELECT * FROM `user` WHERE `iduser`='$_GET[rem]'";
        $result=mysqli_query($conn,$query);
        $fetch=mysqli_fetch_assoc($result);


        $query="DELETE  FROM `user` WHERE `iduser`='$_GET[rem]'";
        if(mysqli_query($conn,$query)){
            header("location: adminoder.php?success=removed");
        }else{
            header("location: adminoder.php?alert=removed_failed");
        }
    }
?>