
<?php 
include "connect.php";
$pro_id=$_GET['pro_id'];
$sql = "SELECT * FROM product WHERE pro_id = $pro_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container ">
        <div class="row ">
            <div class="col-md-3 ">
                <?php include "layout/sidebar.php"; ?>
            </div>
            <div class="col-md-9">
                <?php include "layout/nav.php"; ?>
                <h2 class="text-center">ແກ້ໄຂຂໍ້ມູນສິນຄ້າ</h2>
                <hr>
                <form class="my-3" action="update.php" method="post">
                    <input type="hidden" name="pro_id" value="<?php echo $row['pro_id']; ?>">
                    <div class="mb-3">
                        <label for="pro_name" class="form-label">ຊື່ສິນຄ້າ</label>
                        <input type="text" id="pro_name" name="pro_name" class="form-control" required value="<?php echo $row['pro_name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="detall" class="form-label">ລາຍລະອຽດສິນຄ້າ</label>
                        <input type="text" id="detall" name="detall" class="form-control" required value="<?php echo $row['detall']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">ລາຄາສິນຄ້າ</label>
                        <input type="text" id="price" name="price" class="form-control" required value="<?php echo $row['price']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">ຈຳນວນສິນຄ້າ</label>
                        <input type="text" id="quantity" name="quantity" class="form-control" required value="<?php echo $row['quantity']; ?>">
                    </div>
                    <input type="submit" value="ແກ້ໄຂ & ບັນທືກ" class="btn btn-success">
                    <input type="reset" value="ຍົກເລີກ" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

