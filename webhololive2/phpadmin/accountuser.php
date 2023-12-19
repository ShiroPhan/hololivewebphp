<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../phpadmin/./css/quanlisanpham.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <h1 style="text-align: center;">Hololive Admin</h1>
    <div class="container">
        <div class="container bg-dark text-light p-3 rounded my-4">
            <div class="d-flex align-items-center justify-content-between">
                <h2>Product Libary</h2>
                <!-- Button trigger modal -->
                <a style="text-decoration : none; color: white; text-align: center; " href="http://localhost/webhololive2/phpadmin/accountuser.php"><button style="text-align: center;" class="btn btn-success" type="button">Accout User</a>
                <a style="text-decoration : none; color: white; text-align: center; " href="http://localhost/webhololive2/phpadmin/adminoder.php"><button style="text-align: center;" class="btn btn-success" type="button">ODER</a>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproduct">
                    <a style="text-decoration: none; color:aliceblue;" href="http://localhost/webhololive2/phpadmin/admincr.php?success=added"><i class="bi bi-plus-lg"></i>Add Product</a>
                </button>

            </div>
        </div>

        <div class="container mt-5 p-0">
            <table class="table table-hover text-center">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="10%" scope="col">Iduser</th>
                        <th width="40%" scope="col">Username</th>
                        <th width="40%" scope="col">Password</th>
                        <th width="10%" scope="col" class="rounded-end">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <?php
                    require '../db/connect.php';
                    $query = "SELECT * FROM `user`";
                    $result = mysqli_query($conn, $query);
                    while ($fetch = mysqli_fetch_assoc($result)) {
                        $users[] = $fetch;
                        echo <<<user
                            <tr>
                            <td>$fetch[iduser]</td>
                                <td>$fetch[username]</td>
                                <td>$fetch[password]</td>
                                <td><button onclick="confirm_rem($fetch[iduser])" class="btn btn-danger" ><i class="bi bi-trash"></i></button></td>
                            </tr>
                        user;
                    }
                    ?>
                </tbody>
                <script>
                    function confirm_rem(iduser) {
                        if (confirm("Are You Sure, Want delete this item ?")) {
                            window.location.href = "manageraccountuser.php?rem=" + iduser;
                        }
                    }
                </script>
</body>

</html>