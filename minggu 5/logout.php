<?php
session_start();
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
            </body>
            <h2>Anda sudah berhasil Log Out</h2>
            <p>Klik <a href='login.php'>di sini</a> untuk LOGIN kembali</p>

        </html>
    <?php 
     if (isset($_SESSION['login'])) {
        unset ($_SESSION);
        session_destroy();          
} 
?>