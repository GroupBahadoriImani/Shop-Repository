<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>فروشگاه لباس</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <h3 class="p-4">ویرایش اطلاعات</h3>
                <hr />
            </div>
        </div>
        <form>
            <div class="form-row">
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
                <button type="submit" class="btn btn-warning">ویرایش</button>
        </form>


    </div>
</body>

</html>