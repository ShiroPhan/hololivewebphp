<?php
require '../db/connect.php';
function image_upload($img){
    $tmp_loc = $img['tmp_name'];
    $new_name = random_int(11111,99999).$img['name'];
    $new_loc = UPLOAD_SRC.$new_name;

    if(!move_uploaded_file($tmp_loc,$new_loc)){
        header("location :admincr.php?alet=img_upload");
        exit;
    }else{
        return $new_name;
    }
}

function image_remove($img){
    if(!unlink(UPLOAD_SRC.$img)){
        header("location :admincr.php?alet=img_rem_failed");
        exit;
    }
}


    if(isset($_POST['addproduct'])){
        foreach($_POST as $key=> $value){
            $_POST[$key] = mysqli_real_escape_string($conn,$value);
        }   

        $imgpath = image_upload($_FILES['image']);

        $query= "INSERT INTO `product`( `image`, `name`, `content`, `price`) 
        VALUES ( '$imgpath','$_POST[name]','$_POST[content]','$_POST[price]')";

        if(mysqli_query($conn,$query)){
            header("location: admincr.php?success=added");

    }
    else{
        header("location: admincr.php?arlet=add_failed");
    }
}

    if(isset($_GET['rem']) && $_GET['rem']>0){
        $query="SELECT * FROM `product` WHERE `idproduct`='$_GET[rem]'";
        $result=mysqli_query($conn,$query);
        $fetch=mysqli_fetch_assoc($result);

        image_remove($fetch['image']);

        $query="DELETE  FROM `product` WHERE `idproduct`='$_GET[rem]'";
        if(mysqli_query($conn,$query)){
            header("location: admincr.php?success=removed");
        }else{
            header("location: admincr.php?alert=removed_failed");
        }
    }

?>