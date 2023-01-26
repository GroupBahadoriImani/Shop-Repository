<?php

require_once 'dbconfig.php';

if (isset($_POST['insert'])) {
    
    $name = $_POST['Name'];
    $color = $_POST['Color'];
    $size = $_POST['Size'];
    $material = $_POST['Material'];
    $price = $_POST['Price'];
    $picture = $_POST['Picture'];

    $sql = "INSERT INTO product(Name,Color,Size,Material,Price,Picture) VALUES(:name,:color,:size,:material,:price,:picture)";

    $query = $conn->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':color', $color, PDO::PARAM_STR);
    $query->bindParam(':size', $size, PDO::PARAM_STR);
    $query->bindParam(':material', $material, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_STR);
    $query->bindParam(':picture', $picture, PDO::PARAM_STR);
    $query->execute();

    $lastInsertId = $conn->lastInsertId();

    if ($lastInsertId) {
        echo "<script>alert('رکورد با موفقیت ثبت شد');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('خطا رخ داد');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container border p-4 mt-4">

        <div class="row">
            <div class="col-md-12">
                <h3 class="p-4">وارد کردن اطلاعات</h3>
                <hr />
            </div>
        </div>

        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>نام لباس</label>
                    <input type="text" class="form-control" name="Name" placeholder="مثال : پیراهن">
                </div>
                <div class="form-group col-md-6">
                    <label>رنگ</label>
                    <input type="text" class="form-control" name="Color" placeholder="مثال : قرمز">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>سایز</label>
                    <input type="text" class="form-control" name="Size" placeholder="مثال : 40">
                </div>
                <div class="form-group col-md-6">
                    <label>جنس</label>
                    <input type="text" class="form-control" name="Material" placeholder="مثال : نخ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>قیمت</label>
                    <input type="text" class="form-control" name="Price" placeholder="مثال : 4000000">
                </div>
                <div class="form-group col-md-6">
                    <label>عکس</label>
                    <input type="text" class="form-control" name="Picture" placeholder="مثال : بدون عکس">
                </div>
            </div>
            <input type="submit" class="btn btn-success" value="ثبت" name="insert"></input>
        </form>
    </div>
</body>

</html>