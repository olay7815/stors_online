<?php
include "/admin/connect.php";
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
  <title>Home</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style.scss">
</head>

<body class="">
  <?php
      include "layout/nav.php";
      ?>
  <div class="container my-1">
    <div class="row">
      <div class="col-3 ">
        <?php
      include "layout/sidebar.php";
      ?>
      </div>
      <div class="col-9">
        <div class="container my-2">
          <div class="row">
            <div class="col-6 my-5">
              <img src="http://localhost/hostit/images/slider-img.png" width="400px" alt="" srcset="">
            </div>
            <div class="col-6 ">
              <main>
                <section class="hero text-center my-5">
                  <h1>Welcome to our Responsive Page</h1>
                  <p>This page is designed to adapt to different screen sizes.</p>
                </section>
                <section class="content text-center my-2">
                  <h2>Content Section</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna a tincidunt bibendum,
                    magna nulla ultrices neque, id faucibus sem arcu vel massa.</p>
                </section>
                <section class="content text-center my-2">
                  <h1>Hello world.</h1>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem repudiandae modi ea,
                    consectetur repellat iusto aut sequi eaque ipsam explicabo!</p>
                </section>
              </main>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include "layout/footer.php";
    ?>
    </footer>


</body>

</html>