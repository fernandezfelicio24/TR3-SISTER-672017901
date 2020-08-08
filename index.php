
<?php

if(isset($_POST['tekan'])){
    $asal=$_POST['kata'];
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://mashape-community-urban-dictionary.p.rapidapi.com/define?term=$asal",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        //CURLOPT_POSTFIELDS => "definition=$asal",
        CURLOPT_HTTPHEADER => array(
            "x-rapidapi-host: mashape-community-urban-dictionary.p.rapidapi.com",
            "x-rapidapi-key: abf5defd0emsh2e4428cd384d60fp1f66a6jsn50deac61261e"
        ),
    ));
    
    $response = curl_exec($curl);
    
    
    $err = curl_error($curl);
    
    curl_close($curl);
    $data=json_decode($response, true);
    //var_dump($data);
    $length = count($data);

    
    
 
        
}

	
	

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/barca.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">Felicio(672017901)</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class="active"><a href="index.php"><i class="bx bx-home"></i> <span>Home</span></a></li>

                    <li><a href="#portfolio"><i class="bx bx-book-content"></i> Kamus Bahasa Ingris</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Felicio</h1>
            <p>Saya <span class="typed" data-typed-items="Mahasiswa FTI UKSW"></span></p>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="portfolio" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>KAMUS BAHASA INGRIS</h2>

                </div>

                <div class="row">
                    <section id="contact">
                        <div class="section-content">
                            <h1 class="section-header"> <span class="content-header wow fadeIn "> Cari Tahu Arti Kata bahasa Ingris</span> </h1>
                            <h3>Tulis dan Tekan <b>CARI TAHU</b></h3>
                        </div>
                        <div class="contact-section">
                            <div class="container">
                                <form method="POST" action="">
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <label for="from"> </label>


                                            <div class="form-group">

                                                <textarea name="kata" class="form-control"  placeholder="Misalnya kata elegant"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="from"></label>


                                                <div class="form-group">
    
                                                <textarea  class="form-control" style=" width:500px;height:500px;" >
                                                <?php
                                                if(!(empty($data))){
                                                     foreach($data["list"] as $value)
                                                     {echo $value["definition"];
                                                         };
                                                }
                                               ?>
                                                </textarea>
                                                 
                                                

                                                
                                                   
                                                </div>
                                                <div>

                                                    <button name ="tekan" type="submit" class="btn btn-primary">cari tahu</button>
                                                </div>

                                            </div>
                                </form>
                                </div>
                                </div>
                    </section>
                    </div>

                    </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->

    <!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>