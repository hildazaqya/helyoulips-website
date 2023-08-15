<?php 
include 'config.php';
if (isset($_POST['submit'])) {
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Nomor_telepon = $_POST['Nomor_telepon'];
    $Pesanan1 = $_POST['Pesanan1'];
    $Pesanan2 = $_POST['Pesanan2'];
    $Opsi_pengiriman = $_POST['Opsi_pengiriman'];
    $Pembayaran = $_POST['Pembayaran'];


    $sql = "UPDATE `dataorderan` SET `Nama` = '$Nama', `Alamat` = '$Alamat', `Nomor_telepon`='$Nomor_telepon',
    `Pesanan1`='$Pesanan1', `Pesanan2`='$Pesanan2',`Opsi_pengiriman`='$Opsi_pengiriman', `Pembayaran`='$Pembayaran' WHERE `Nomor_telepon`='$Nomor_telepon'";

    if ($conn->query($sql) === TRUE) {
        echo "
            <script>
            alert('Your order has been successfully modified');
            window.location.replace('welcomeee.php?status = True');
            </script>";
    } else {
        echo "
            <script>
            alert('Your order was not successfully modified');
            window.location.replace('index.php?status = False');
            </script>";
    }

} else {
    echo 'AKSES DENIED!';
}

?>