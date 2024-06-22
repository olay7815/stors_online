
<?php
include "connect.php";

$pro_id=$_GET["pro_id"];
$sql = "DELETE FROM product WHERE pro_id = $pro_id";
$result = mysqli_query($conn,$sql);
if ($result){
    // echo '<script>
    // alert("ລຶບຂໍ້ມູນສຳເລັດ");
    // window.location.href = "index.php";
    //     </script>';
     header ("location: home.php");
}else{
    echo "ລຶບຂໍ້ມູນບໍ່ສຳເລັດ";
}

?>
