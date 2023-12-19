<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname ="hll-data";
    $conn = new mysqli($host,$username,$password,$dbname);
    if($conn->connect_error){
        die("ket noi khong thanh cong". $conn->connect_error);
    }

    define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/webhololive2/phpadmin/anh/");

    define("FETCH_SRC","http://127.0.0.1/webhololive2/phpadmin/anh/")
    
?>
