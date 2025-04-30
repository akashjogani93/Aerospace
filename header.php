<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aaniaerospace</title>
    <link rel="stylesheet" href="custome.css">
    <?php include("link.php"); ?>
    <style>
        .dropdown-toggle::after {
            display: none;
        }
        .text-decoration-none{
        text-decoration: none!important;
        }
        .icon-width { width: 2rem;}

        .navbar-nav .nav-item .nav-link {
            color: black; /* Default color */
            transition: color 0.3s ease-in-out;
        }

        .navbar-nav .nav-item .nav-link:hover,
        .navbar-nav .nav-item.active .nav-link {
            color: #F53B40 !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
        <div class="container"> <a class="navbar-brand d-flex align-items-center" href="#">
            <a class="navbar-brand d-flex align-items-center" href="./">
                <img src="photos/logo2.png" alt="Brand Logo" width="100px" height="50px">
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar4">
                <ul class="navbar-nav mr-auto pl-lg-4">
                    <li class="nav-item px-lg-2" id="home"> <a class="nav-link" href="./"> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>Home</a> </li>
                    <li class="nav-item px-lg-2" id="service"> <a class="nav-link" href="services.php"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>Services</a> </li>
                    <li class="nav-item px-lg-2" id="about"> <a class="nav-link" href="aboutus.php"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>About</a> </li>
                    <li class="nav-item px-lg-2" id="contact"> <a class="nav-link" href="contactus.php"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>Contact</a> </li>
                    <li class="nav-item px-lg-2" id="career"> <a class="nav-link" href="career.php"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>Career</a> </li>
                    <!-- <li class="nav-item px-lg-2 dropdown d-menu">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>Dropdown
                    <svg  id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                    </a>
                    <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </li> -->
                    <!-- <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-envelope"></i></span>Contact</a> </li> -->
                </ul>
                    <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                    <li class="nav-item"> <a class="nav-link" href="#">
                    <i class="fab fa-twitter"></i><span class="d-lg-none ml-3">Twitter</span>
                    </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">
                    <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
                    </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">
                    <i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
                    </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">
                    <i class="fab fa-linkedin"></i><span class="d-lg-none ml-3">Linkedin</span>
                    </a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        $(document).ready(function () {
            if ($(window).width() > 991)
            {
            $('.navbar-light .d-menu').hover(function () {
                    $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
                }, function () {
                    $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
                });
                }
        });
    </script>
