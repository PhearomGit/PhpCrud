
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
<div class="card w-75 mx-auto mt-3">
  <div class="card-body">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">MODEL</th>
      <th scope="col">BRAND</th>
      <th scope="col">PRICE</th>
    </tr>
  </thead>
  <tbody>
    <?php include("view_logic.php") ?>
    <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['product_name'] ?></td>
      <td><?php echo $row['brand'] ?></td>
      <td><?php echo $row['price'] ?></td>
    </tr>
  </tbody>
</table>
  </div>
</div>
</body>
</html>