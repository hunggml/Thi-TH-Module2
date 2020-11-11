<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    table {
        margin: 0 auto;
        border: 1px;
    }

    td {
        padding-top: 10px;
    }

    button {
        align-content: center;
        width: 600px;
    }

    input {
        width: 400px;
    }

    textarea {
        width: 400px;
    }
</style>
<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                Product Name :
            </td>
            <td>
                <input type="text" name="name" placeholder="Enter Name Product"
                       value="<?php echo $product->getProductName() ?>">
            </td>
        </tr>
        <tr>
            <td>
                Product Type :
            </td>
            <td>
                <input type="text" name="type" placeholder="Enter Product Type"
                       value="<?php echo $product->getProductType() ?>">
            </td>
        </tr>
        <tr>
            <td>
                Price:
            </td>
            <td>
                <input type="number" name="price" placeholder="Enter Price Product"
                       value="<?php echo $product->getPrice() ?>">
            </td>
        </tr>
        <tr>
            <td>
                Quantity Stock :
            </td>
            <td>
                <input type="number" name="quantity" placeholder="Enter Quantity Stock"
                       value="<?php echo $product->getQuantity() ?>">
            </td>
        </tr>
        <tr>
            <td>
                Date Add Product :
            </td>
            <td>
                <input type="date" name="date" value="<?php echo $product->getDateAdd() ?>">
            </td>
        </tr>
        <tr>
            <td>
                Description :
            </td>
            <td>
                <textarea type="text" name="des" placeholder="edit description" value="<?php echo $product->getDescription() ?>"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-success">UPDATE</button>
            </td>

        </tr>
    </table>

</form>
</body>
</html>