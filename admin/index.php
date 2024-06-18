<?php
if($_POST){
$username=$_POST['username'];
$password=$_POST['password'];
if(($username=='admin') && ($password =='olay78')){
header("location: product.php");
exit(0);

}else{
    echo "<script>alert('ທ່ານປ້ອນຂໍ້ມູນ username ຫຼື password ບໍຖືກຕ້ອງ')</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="">
    <?php
    // include "layout/menu.php";
    ?>
    <div class="container ">
        <div class="row">
            <div class="col-3">
                <?php
                    // include "layout/sidebar.php";
                ?>
            </div>
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h2 class="text-center fw-bold">Form LogIn</h2>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div>
                                    <label for="UserName" class="form-lable">UserNmae</label>
                                    <input type="text" name="username" class="form-control"
                                        placeholder="Enter your UserName">
                                </div>
                                <div class="mb-3">
                                    <label for="Password" class="form-lable">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Enter your Password">
                                </div>
                                <input type="submit" value="login" class="btn btn-outline-info">
                                <a class="btn btn-outline-danger" href="\store_online/index.php">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <?php
        // include "layout/footer.php";
        ?>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>