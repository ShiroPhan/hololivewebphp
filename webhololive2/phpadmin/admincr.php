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
                    <th width ="10%" scope="col" class="rounded-start">IdProducts</th>
                    <th width ="15%" scope="col">Image</th>
                    <th width ="10%" scope="col">Name</th>
                    <th width ="35%" scope="col">Content</th>
                    <th width ="10%"scope="col">Price</th>
                    <th width ="20%" scope="col"class="rounded-end">Action</th>
                 </tr>
            </thead>
            <tbody class="bg-white">
                <?php
                    require '../db/connect.php';
                    $query="SELECT * FROM `product`";
                    $result=mysqli_query($conn,$query);
                    $i=1;
                    $fetch_src=FETCH_SRC;

                    while($fetch=mysqli_fetch_assoc($result))
                    {
                        $products[] = $fetch;
                        echo<<<product
                            <tr>
                                <th scope="row">$i</th>
                                <td><img src="$fetch_src$fetch[image] "width="90px"></td>
                                <td>$fetch[name]</td>
                                <td>$fetch[content]</td>
                                <td>$fetch[price]</td>
                                <td>
                                    <a>Edit</a>
                                    <button onclick="confirm_rem($fetch[idproduct])" class="btn btn-danger" ><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        product;
                        $i++;
                    }
                ?>
            </tbody>
</table>
    </div>
    
    
    </div>
<div class="modal fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="crud5.php" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Add Product</h5>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
            <span class="input-group-text">Name</span>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Price</span>
            <input type="number" class="form-control" name="price" min="1" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Content</span>
            <textarea class="form-control" name="content" required></textarea>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Image</label>
            <input type="file" class="form-control" name="image" accept=".jpg,.png,.gif" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success-primary" name="addproduct">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>
<script>
    function confirm_rem(idproduct){
        if(confirm("Are You Sure, Want delete this item ?")){
            window.location.href="crud5.php?rem="+idproduct;
        }
    }
</script>
</body>
</html>