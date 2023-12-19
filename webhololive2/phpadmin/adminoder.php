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
<body class="bg-light">
    <h1 style="text-align: center;">Hololive Admin</h1>
    <div class="container">
        <div class="container bg-dark text-light p-3 rounded my-4">
            <div class="d-flex align-items-center justify-content-between">
                <h2>Product Libary</h2>
                <!-- Button trigger modal -->
                <a style="text-decoration : none; color: white; text-align: center; " href="http://localhost/webhololive2/phpadmin/accountuser.php"><button style="text-align: center;" class="btn btn-success" type="button">Accout User</a>
                <a style="text-decoration : none; color: white; text-align: center; " href="http://localhost/webhololive2/phpadmin/adminoder.php"><button style="text-align: center;" class="btn btn-success" type="button">ODER</a>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproduct">
                <i class="bi bi-plus-lg"></i>Add Product
                </button>

            </div>
        </div>
    
    <div class="container mt-5 p-0">
        <table class="table table-hover text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th width ="5%" scope="col" class="rounded-start">IdoderProducts</th>
                    <th width ="15%" scope="col">Image</th>
                    <th width ="5%" scope="col">Name</th>
                    <th width ="35%" scope="col">Content</th>
                    <th width ="10%"scope="col">Price</th>
                    <th width ="10%"scope="col">Quantity</th>
                    <th width ="10%"scope="col">totalPrice</th>
                    <th width ="20%" scope="col"class="rounded-end">Action</th>
                 </tr>
            </thead>
            <tbody class="bg-white">
                <?php
                    require '../db/connect.php';
                    $query="SELECT * FROM `oder_product`";
                    $result=mysqli_query($conn,$query);
                    $i=1;
                    $fetch_src=FETCH_SRC;

                    while($fetch=mysqli_fetch_assoc($result))
                    {
                        $products[] = $fetch;
                        echo<<<oder_product
                            <tr>
                                <th scope="row">$i</th>
                                <td><img src="$fetch_src$fetch[image] "width="90px"></td>
                                <td>$fetch[name]</td>
                                <td>$fetch[content]</td>
                                <td>$fetch[price]</td>
                                <td>$fetch[quantity]</td>
                                <td>$fetch[totalPrice]</td>
                                <td>
                                    <a>Edit</a>
                                    <button onclick="confirm_rem($fetch[idoderproduct])" class="btn btn-danger" ><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        oder_product;
                        $i++;
                    }
                ?>
            </tbody>
</table>
      </div>
    </form>
    </div>
  </div>
</div>
<script>
    function confirm_rem(idoderproduct){
        if(confirm("Are You Sure, Want delete this item ?")){
            window.location.href="manageroder.php?rem="+idoderproduct;
        }
    }
</script>
</body>
</html>