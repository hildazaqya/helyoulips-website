<?php 
include 'config.php';
if (isset($_GET['submit'])) {
    $Nama = $_GET['Nama'];
    $Alamat = $_GET['Alamat'];
    $Nomor_telepon = $_GET['Nomor_telepon'];
    $Pesanan1 = $_GET['Pesanan1'];
    $Pesanan2 = $_GET['Pesanan2'];
    $Opsi_pengiriman = $_GET['Opsi_pengiriman'];
    $Pembayaran = $_GET['Pembayaran'];

    $sql = "INSERT INTO `dataorderan` VALUE ('$Nama','$Alamat', '$Nomor_telepon', '$Pesanan1', '$Pesanan2'
    , '$Opsi_pengiriman', '$Pembayaran')";
    
    if ($conn->query($sql) === TRUE) {
        echo "
            <script>
            alert('Data berhasil dimasukkan');
            window.location.replace('welcomee.php?status = True');
            </script>";
    } else {
        echo "
            <script>
            alert('Data tidak berhasil dimasukkan');
            window.location.replace('index.php?status = False');
            </script>";
    }

} else {
    echo 'AKSES DENIED!';
}

?>
