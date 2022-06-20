<?php
session_start();

if (isset($_SESSION['login'])){
    if (empty($_SESSION['cart']["arrCart"]))
        $_SESSION['cart']["arrCart"]=array(); 

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
                    <br>
                <h4> Selamat datang, <?php echo $_SESSION['login'] ?></h4>

                <div class="album py-5 bg-light">
                <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    
                    <?php
                        $sql = "Select * from barang";
                        $hasil = $conn->query($sql);

                        if ($hasil->num_rows > 0){
                            while ($row = $hasil->fetch_assoc()){
                                ?>
                                <div class="col">
                                <div class="card shadow-sm">

                                    <img src='img/<?php echo $row['foto']?>' style='width:150px;height:300px;margin:10px 35px 10px 35px;'/>

                                    <div class="card-body">
                                    <p class="card-text"><?php echo $row['keterangan']?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <a class="btn btn-primary" href="addCart.php?id=<?php echo $row['id']?>" role="button">Add Cart</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <?php
                            }
                        }else {
                            echo "tidak ada data";
                        }
                    ?>
                </div>
                </div>
            </body>
        </html>
        <?php
}else{
    //session belum ada artinya belum login
    die ("Anda belum login! Anda tidak berhak masuk ke halaman ini.
     Silahkan login <a href='Login/login.php'>di sini</a>");
} 					
?>     