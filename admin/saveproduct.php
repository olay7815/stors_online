<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Pro_name = $_POST["pro_name"];
    $Detall = $_POST["detall"];
    $Price = $_POST["price"];
    $Quantity = $_POST["quantity"];

    $sql = "INSERT INTO product (pro_name, detall, price, quantity) VALUES ('$Pro_name', '$Detall', '$Price', '$Quantity')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>
            alert("ບັນທືກຂໍ້ມູນສຳເລັດ");
            window.location.href = "product.php";
        </script>';
    } else {
        echo '<script>
            alert("Error: ' . mysqli_error($conn) . '");
            window.history.back();
        </script>';
    }

    mysqli_close($conn);
} else {
    echo '<script>
        alert("Invalid request method.");
        window.history.back();
    </script>';
}
?>
