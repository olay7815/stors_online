
<?php  

include "connect.php"; 

$pro_id = $_POST['pro_id'];
$pro_name = $_POST['pro_name'];
$detall = $_POST['detall'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "UPDATE product SET pro_name = '$pro_name', detall = '$detall', price = '$price', quantity = '$quantity' WHERE pro_id = '$pro_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
   header ("location: home.php");

} else {
    echo "Error: " . mysqli_error($conn);  
}

?>
