<?php

require_once 'dbconfig.php';

if (isset($_REQUEST['del'])) {
    $productId = intval($_GET['del']);

    $sql = "DELETE FROM product WHERE Id =:id";
    $query = $conn->prepare($sql);
    $query->bindParam(':id', $productId, PDO::PARAM_STR);
    $query->execute();
    
    echo "<script>alert('حذف با موفقیت انجام شد')</script>";
    echo "<script>window.lcation.href='index.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>فروشگاه لباس</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container border p-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <h3 class="p-3 pt-5">فروشگاه لباس بهادری ایمانی</h3>
                <hr />
                <a href="insert.php"><button class="btn btn-primary font-16 m-3">وارد کردن رکورد</button></a>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordered table-striped m-2">
                        <thead>
                            <th>شناسه</th>
                            <th>نام لباس</th>
                            <th>رنگ</th>
                            <th>اندازه</th>
                            <th>جنس</th>
                            <th>قیمت</th>
                            <th>عکس</th>
                        </thead>
                        <tbody>

                            <?php
                            $sql = 'SELECT Id, Name, Color, Size, Material, Price, Picture From product';
                            $query = $conn->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                            $id = 1;
                            if ($query->rowCount() > 0) {

                                foreach ($results as $result) {

                            ?>

                                    <tr>
                                        <td>
                                            <?php echo htmlentities($id) ?>
                                        </td>
                                        <td>
                                            <?php echo htmlentities($result->Name) ?>
                                        </td>
                                        <td>
                                            <?php echo htmlentities($result->Color) ?>
                                        </td>
                                        <td>
                                            <?php echo htmlentities($result->Size) ?>
                                        </td>
                                        <td>
                                            <?php echo htmlentities($result->Material) ?>
                                        </td>
                                        <td>
                                            <?php echo htmlentities($result->Price) ?>
                                        </td>
                                        <td>
                                            <?php echo htmlentities($result->Picture) ?>
                                        </td>

                                        <td><a href="update.php?id=<?php echo htmlentities($result->Id) ?>">
                                                <button class="btn btn-warning">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                </button></a></td>

                                        <td><a href="index.php?del=<?php echo htmlentities($result->Id) ?>">
                                                <button class="btn btn-danger" onClick="return confirm('آیا حذف انجام شود');">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button></a></td>
                                    </tr>

                            <?php
                                    $id++;
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>