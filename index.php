<?php
require __DIR__ . '/vendor/autoload.php';
$productController = new \test\Controller\productController();
$page = $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : NULL;
switch ($page) {
    case 'add':
        $productController->add();
        break;
    case 'edit':
        $productController->edit();
        break;
    case 'delete':
        $productController->delete();
        break;
    case 'search':
        $productController->search();
        break;
    default:
        $productController->show();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
<style>
    body {
        background-size: cover;
        background-attachment: fixed;
        background-image: url("image/backgroundTH.jpg");
    }

    img {
        max-width: 66%;
        height: auto;
    }

</style>
</body>
</html>