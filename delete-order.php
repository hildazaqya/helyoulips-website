<?php
include 'config.php';
$Nomor_telepon = $_GET['Nomor_telepon'];

$sql = "DELETE FROM `dataorderan` WHERE `Nomor_telepon`=$Nomor_telepon";

$result = $conn->query($sql);

if (mysqli_affected_rows($conn) != 0) {
    echo "
    <script>
        alert('Your order has been successfully deleted!');
        location.href = 'index.php';
    </script>";
} else {
    echo "
    <script>
        alert('Your order was not deleted successfully!');
        location.href = 'welcomee.php';
    </script";

}
?>