<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    
    <div class="container my-3">
        <div class="row ">
            <div class="col-3 ">
            <?php
            include "layout/sidebar.php";
            ?>
            </div>

            <div class="col-9">
                <?php
                include "layout/nav.php";
                ?>

                <form class="my-3" action="saveproduct.php" method="post">
                    <div class="mb-3">
                        <label for="pro_name" class="form-lable">ຊື່ສິນຄ້າ</label>
                        <input type="text" id="pro_name" name="pro_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="detall" class="form-lable">ລາຍລະອຽດສິນຄ້າ</label>
                        <input type="text" id="detall" name="detall" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-lable">ລາຄາສິນຄ້າ</label>
                        <input type="text" id="price" name="price" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-lable">ຈຳນວນສິນຄ້າ</label>
                        <input type="text" id="quantity" name="quantity" class="form-control" required>
                    </div>
                    <input type="submit" value="ບັນທືກ" class="btn btn-success">
                    <input type="reset" value="ຍົກເລີກ" class="btn btn-danger">
                </form>
            </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
