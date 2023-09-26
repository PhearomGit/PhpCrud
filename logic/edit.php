<?php
    // error_reporting(0);
    include("../connect/connect.php");
    $id = $_GET['id'];
    
    $string_select = "SELECT * FROM `product` WHERE id = $id";
    $result = mysqli_query($conn,$string_select);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="card w-50 mx-auto mt-5">
        <div class="card-body">
            <form method="post" action="edit_logic.php">
                <div class="modal-body">
                <input type="text" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Model"
                        name="id" value = "<?php echo $row['id']; ?>">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Model"
                        name="Product_name" value = "<?php echo $row['product_name']; ?>">
                    <input type="text" class="form-control my-3" id="exampleFormControlInput1" placeholder="brand"
                        name="brand" value = "<?php echo $row['brand']; ?>">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="price"
                        name="price" value = "<?php echo $row['price']; ?>">
                </div>
                <div class="modal-footer mt-3">
                    <a href="../index.php" class="btn btn-primary me-2">Back</a>
                    <input type="submit" class="btn btn-danger" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>