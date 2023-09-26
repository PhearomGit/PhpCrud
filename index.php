<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="container-fluid bg-danger d-flex justify-content-end p-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add (+)
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="./logic/save.php" method="post">
                        <div class="modal-body">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Model"
                                name="Product_name">
                            <input type="text" class="form-control my-3" id="exampleFormControlInput1"
                                placeholder="brand" name="brand">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="price"
                                name="price">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-danger" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--  -->
    <div class="container mx-auto mt-3">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">MODEL</th>
                    <th class="text-center">BRAND</th>
                    <th class="text-center">PRICE</th>
                    <th class="text-center">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include("./connect/connect.php");
                    include("./logic/select.php");
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td class="text-center"><?php echo $row['id']; ?></td>
                    <td class="text-center"><?php echo $row['product_name']; ?></td>
                    <td class="text-center"><?php echo $row['brand']; ?></td>
                    <td class="text-center"><?php echo $row['price']; ?></td>
                    <th class="text-center">
                    <a href="./logic/edit.php?id=<?php echo $row['id'];?>"><i class="fas fa-edit text-info"></i></a>
                    <a href="./logic/delete.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-trash px-3 text-danger"></i></a>
                    <a href="./logic/view.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-eye text-primary"></i></a>
                    </th>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>