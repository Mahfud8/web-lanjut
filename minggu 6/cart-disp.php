<?php
session_start();

if (isset($_SESSION['login'])) {

    include "koneksi.php";

    ?>
    <!DOCTYPE html>
        <html>
            <head>
                <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

                <!-- Bootstrap core CSS -->
                <link href="../bootstrap-5.1.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">

                <style>
                    /* Show it is fixed to the top */
                    body {
                    min-height: 75rem;
                    padding-top: 4.5rem;
                    margin-left: 1.5rem;
                    }
                    .bd-placeholder-img {
                        font-size: 1.125rem;
                        text-anchor: middle;
                        -webkit-user-select: none;
                        -moz-user-select: none;
                        user-select: none;
                    }

                    @media (min-width: 768px) {
                        .bd-placeholder-img-lg {
                        font-size: 3.5rem;
                        }
                    }
                </style>
                <!-- Custom styles for this template -->
                <link href="navbar-top-fixed.css" rel="stylesheet">
            </head>
            <body>
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Tokko</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="list-product.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href='cart-disp.php'>Cart</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href='logout.php'>Log out</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>

                <h3>Keranjang Belanja</h3>
                <hr>
                <?php
                if (!empty($_SESSION['keranjang'])){
                echo "Jml data :".sizeof($_SESSION['keranjang']).
                    "<br /> <a href=cart-remove.php>Kosongkan Cart</a><br />
                    Kembali ke <a href='list-product.php'>List product</a><br /><br />";
                ?>
                <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1;?>
                        <?php foreach ($_SESSION['keranjang'] as $id => $jml):?>
                        <?php
                        $sql = "SELECT * FROM barang WHERE barang.id='$id'";
                        $ambil = $conn->query($sql);
                        $row = $ambil->fetch_assoc();

                        $total_row = $row['hrg']*$jml;
                        $jml_all = isset($jml_all)? $jml_all: 0;
                        $jml_all += $jml;
                        $total_all = isset($total_all)? $total_all: 0;
                        $total_all += $total_row;
                        ?>
                            <tr>
                                <td><?php echo $nomor++;?></td>
                                <td><?php echo $row['nama'];?></td>
                                <td>Rp. <?php echo number_format($row['hrg']);?></td>
                                <td><?php echo $jml;?></td>
                                <td>Rp. <?php echo number_format($total_row);?></td>
                            </tr>
                            <?php endforeach ?>
                            <tr>
                                <td colspan ="3">Total bayar</td>
                                <td><?php echo ($jml_all);?></td>
                                <td>Rp. <?php echo number_format($total_all);?></td>
                            </tr>
                    </tbody>   
                </table>
                </div>
                <?php
            }else
                echo "cart kosong<br> kembali ke <a href='list-product.php'>List Product</a>";
            ?>
        </body>
    </html>
<?php
}else{
       //session belum ada artinya belum login
    die ("Anda belum login! Anda tidak berhak masuk ke halaman ini.
    Silahkan login <a href='login.php'>di sini</a>");
}
?>