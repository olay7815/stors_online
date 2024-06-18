
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">  <link rel="stylesheet" href="css/style.scss">
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
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna a tincidunt bibendum, magna nulla ultrices neque, id faucibus sem arcu vel massa.</p>
    </section>
    <section class="content text-center my-2">
      <h1>Hello world.</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem repudiandae modi ea, consectetur repellat iusto aut sequi eaque ipsam explicabo!</p>
    </section>
  </main>
      </div>
      

      </div>
      </div>
     </div>
    </div>
    <!-- <div class="container my-3">
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
                    <td><a class="btn btn-danger" href="delete.php?p_id=<?php echo $row["p_id"]; ?>"
                            onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນ ຫຼື ບໍ?')";
                           
                            >ລຶບຂໍ້ມູນ</a>
                        <a class="btn btn-success" href="edit.php?p_id=<?php echo $row["p_id"];?>">ແກ້ໄຂ</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
          //ຕາຕະລາງ
        <?php } else { ?>
        <div class="alert alert-danger">
            <p>ບໍ່ມີຂໍ້ມູນໃນຖານຂໍ້ມູນ</p>
        </div>
        <?php } ?>
    </div> -->
      </div>
  <!-- <div class="container ">

      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s1.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Shared Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s2.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Dedicated Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="images/s3.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Cloud Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s4.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                VPS Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s5.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Wordpress Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/s6.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Domain Name
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
              <a href="">
                Read More
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div> -->
    <?php
    include "layout/footer.php";
    ?>
  </footer>
  

</body>
</html>