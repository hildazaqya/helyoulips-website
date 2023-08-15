<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom Stylesheet -->
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/1c256bdeea.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
</head>

<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" id="headeratas">
            <div class="container">
                <a class="navbar-brand" href="index.php" id="headeratas1" style="font-size: 40px;">Helyoulips</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#formatorder">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M19 6H17C17 3.2 14.8 1 12 1S7 3.2 7 6H5C3.9 6 3 6.9 3 8V20C3 21.1 3.9 22 5 22H19C20.1 22 21 21.1 21 20V8C21 6.9 20.1 6 19 6M12 3C13.7 3 15 4.3 15 6H9C9 4.3 10.3 3 12 3M19 20H5V8H19V20M12 12C10.3 12 9 10.7 9 9H7C7 11.8 9.2 14 12 14S17 11.8 17 9H15C15 10.7 13.7 12 12 12Z" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactperson">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <title>Confirm Your Order</title>
        <div class="content container d-flex justify-content-center align-items-center" id="welcomee">
            <div class="row text-center mt-5">
                <h1 style="color: #9ED5C5;">Confirm Your Order</h1>
                <div class="card shadow p-3 text-start">
                    <fieldset>
                        <div class="my-2">
                            <p>Name:
                                <?php echo $_POST["Nama"]; ?>
                            </p>
                            <p>Address:
                                <?php echo $_POST["Alamat"]; ?>
                            </p>
                            <p>Telephone:
                                <?php echo $_POST["Nomor_telepon"]; ?>
                            </p>
                            <p>Order 1:
                                <?php echo $_POST["Pesanan1"]; ?>
                            </p>
                            <p>Order 2:
                                <?php echo $_POST["Pesanan2"]; ?>
                            </p>
                            <p>Shipping Options:
                                <?php echo $_POST["Opsi_pengiriman"]; ?>
                            </p>
                            <p> Payment via:
                                <?php echo $_POST["Pembayaran"];

                                $servername = 'localhost';
                                $username = 'root';
                                $password = '';
                                $db = 'datapemesanan';
                                $conn = new mysqli($servername, $username, $password, $db);
                                $Nama = $_POST["Nama"];
                                $Alamat = $_POST["Alamat"];
                                $Nomor_telepon = $_POST["Nomor_telepon"];
                                $Pesanan1 = $_POST["Pesanan1"];
                                $Pesanan2 = $_POST["Pesanan2"];
                                $Opsi_pengiriman = $_POST["Opsi_pengiriman"];
                                $Pembayaran = $_POST["Pembayaran"];
                                // Check Connection
                                if ($conn->connect_error) {
                                    die("Connection Failed: " . $conn->connect_error);
                                }
                                $sql = "UPDATE `dataorderan` SET `Nama` = '$Nama', `Alamat` = '$Alamat', `Nomor_telepon`='$Nomor_telepon',
                                `Pesanan1`='$Pesanan1', `Pesanan2`='$Pesanan2',`Opsi_pengiriman`='$Opsi_pengiriman', `Pembayaran`='$Pembayaran' WHERE `Nomor_telepon`='$Nomor_telepon'";

                                if ($conn->query($sql) === TRUE) {
                                    echo "
                                    <script>
                                    alert('Your order has been successfully modified');
                                    </script>";
                                } else {
                                    echo "
                                    <script>
                                    alert('Your order was not successfully modified');
                                    window.location.replace('index.php?status = False');
                                    </script>";
                                }

                                ?>
                            </p>
                            <a name="submit" type="submit" href="fix-order.php" class="btn form-control mt-2"
                                style="background-color: #9ED5C5;">Check Out</a>
                        </div>
                    </fieldset>
                </div>
                <div class="mt-10">
                    <br>
                    <a class="btn" href="update-order.php?Nomor_telepon=<?= $_POST["Nomor_telepon"]; ?>"
                        style="background-color: #9ED5C5;">Change Order</a>
                    <a class="btn" href="delete-order.php?Nomor_telepon=<?= $_POST["Nomor_telepon"]; ?>"
                        style="background-color: #9ED5C5;"
                        xonclick="return confirm('Are You Sure to Delete the Order?')">Delete Order</a>
                    <br>
                    <br>
                </div>
    </main>
    <div class="container" id="container5">
        <section>
            <div class="row">
                <div class="col-md-4 mt-auto mb-auto">
                    <h1 id="footer1">Helyoulips</h1>
                    <h8>Jl. Joyosuko Timur, Lowokwaru, Malang</h8>
                </div>
                <div class="col-md-4">
                    <h6>Contact Person</h6>
                    <h8 style="color: white;">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
                        </svg>
                        Hilda (082345611345)
                    </h8>
                </div>
                <div class="col-md-4">
                    <h6>Social Links</h6>
                    <h8 style="color: white;">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                        </svg> Helyoulips
                        <br>
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" />
                        </svg> Helyoulips
                    </h8>
                </div>
            </div>
        </section>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>