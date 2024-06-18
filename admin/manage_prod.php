<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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

                <!-- <form action="saveproduct.php" method="post">
                    <div class="mb-3">
                        <label for="Pro_name" class="form-lable">ຊື່ສິນຄ້າ</label>
                        <input type="text" id="pro_name" name="pro_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Detall" class="form-lable">ລາຍລະອຽດສິນຄ້າ</label>
                        <input type="text" id="detall" name="detall" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Price" class="form-lable">ລາຄາສິນຄ້າ</label>
                        <input type="number" id="price" name="price" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Quantity" class="form-lable">ຈຳນວນສິນຄ້າ</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" required>
                    </div>
                    <input type="submit" value="ບັນທືກ" class="btn btn-success">
                    <input type="reset" value="ຍົກເລີກ" class="btn btn-danger">
                </form> -->
            </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
