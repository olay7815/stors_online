<?php
include "connect.php";
$sql= "SELECT * FROM product ORDER BY pro_name ASC";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$order = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <div class="container">

        <div class="row ">
            <div class="col-md-3 ">
                <?php
                include "layout/sidebar.php";
                ?>
            </div>
            <div class="col-md-9 ">
                <?php
                include "layout/nav.php";
                ?>
                <h2 class="text-center my-3">ຂ້ໍມູນສິນຄ້າໃນຖານຂ້ໍມູນ</h2>
                <hr>
                <form action="search.php" method="post" class="form-group">
                    <label for="search">ຄົ້ນຫາ:</label>
                    <input type="text" name="pro_name" id="search" placeholder="ປ້ອນຊື່ສິນຄ້າ" class="form-control">
                    <input type="submit" value="ຄົ້ນຫາ" class="btn btn-info my-2">
                </form>
                <?php if ($count > 0) { ?>
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <th>ລະຫັດ</th>
                            <th>ຊື່ສິນຄ້າ</th>
                            <th>ລາຍລະອຽດສິນຄ້າ</th>
                            <th>ລາຄາສິນຄ້າ</th>
                            <th>ຈຳນວນສິນຄ້າ</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $order++; ?></td>
                            <td><?php echo $row["pro_name"]; ?></td>
                            <td><?php echo $row["detall"]; ?></td>
                            <td><?php echo $row["price"]; ?></td>
                            <td><?php echo $row["quantity"]; ?></td>
                            <td><a class="btn btn-danger" href="delete.php?pro_id=<?php echo $row["pro_id"]; ?>"
                                    onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນ ຫຼື ບໍ?')" ;>ລຶບຂໍ້ມູນ</a>
                                <a class="btn btn-success"
                                    href="edit.php?pro_id=<?php echo $row["pro_id"];?>">ແກ້ໄຂ</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div class="alert alert-danger">
                    <p>ບໍ່ມີຂໍ້ມູນໃນຖານຂໍ້ມູນ</p>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>