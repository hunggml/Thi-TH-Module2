<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
          integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous"/>

</head>
<body>
<div class="container">
    <div class="row" style="background-color: azure;">
        <a href="index.php?page=add" class="btn btn-primary btn-xs pull-right"><b>+</b> Add New Product</a>
        <form class="form-inline my-2 my-lg-0" action="index.php?page=search" method="post">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <table class="table table-hover table-striped">

            <thead>
            <tr class="thead-dark">
                <th>STT</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>date Add</th>
                <th>Description</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (empty($product)): ?>
                <tr>
                    <td>No Data</td>
                </tr>
            <?php else: ?>
                <?php foreach ($product as $key => $value): ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td><?php echo $value->getProductName() ?></td>
                        <td><?php echo $value->getProductType() ?></td>
                        <td><?php echo $value->getPrice() ?></td>
                        <td><?php echo $value->getQuantity() ?></td>
                        <td><?php echo $value->getDateAdd() ?></td>
                        <td><?php echo $value->getDescription() ?></td>
                        <td>
                            <a href="index.php?page=edit&id=<?php echo $value->getId() ?>" class="btn btn-warning"><i
                                        class="fas fa-edit"></i></a>
                            <a onclick="return confirm('Do you want delete item ?')"
                               href="index.php?page=delete&id=<?php echo $value->getId() ?>" class="btn btn-danger"><i
                                        class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>