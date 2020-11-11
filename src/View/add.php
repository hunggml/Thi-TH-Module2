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
        background-color: #0e84b5;
        margin: 0 auto;
        border: 1px;
    }

    td {
        color: white;
        padding-top: 10px;
    }

    button {
        align-content: center;
        width: 600px;
        height: 35px;
    }

    input {
        height: 40px;
        width: 400px;
    }
    textarea{
        width: 400px;
    }
</style>
<form method="post" enctype="multipart/form-data">
    <a href="index.php">RETURN HOME</a>
    <table>
        <tr>
            <td>
                Product Name :
            </td>
            <td>
                <input type="text" name="name" placeholder="Enter Name Product">
            </td>
        </tr>
        <tr>
            <td>
                Product Type :
            </td>
            <td>
                <input type="text" name="type" placeholder="Enter Product Type ">
            </td>
        </tr>
        <tr>
            <td>
                Price:
            </td>
            <td>
                <input type="number" name="price" placeholder="Enter Price Product">
            </td>
        </tr>
        <tr>
            <td>
                Quantity Stock :
            </td>
            <td>
                <input type="number" name="quantity" placeholder="Enter Quantity Stock">
            </td>
        </tr>
        <tr>
            <td>
                Date Add Product :
            </td>
            <td>
                <input type="date" name="date">
            </td>
        </tr>
        <tr>
            <td>
                Description :
            </td>
            <td>
                <textarea type="text" name="des" placeholder="Enter Description"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-success">ADD</button>
            </td>

        </tr>
    </table>

</form>
</body>
</html>