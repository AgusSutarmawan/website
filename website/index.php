<!DOCTYPE html>
<html lang="en">

<head>
    <title> Futsal Store </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="text-center">
                <img src="media/logo.jpg" width="200px">
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id=myNavbar>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">HOME</a></li>
                        <li><a href="#">JERSEY</a></li>
                        <li><a href="#">SEPATU</a></li>
                        <li><a href="#">BOLA</a></li>
                        <li><a href="#">KAOS KAKI</a></li>
                        <li class="dropdown">
                            <a href="" class="  dropdown-toggle" data-toggle="dropdown">LAINNYA
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="fibonacci.php">FIBONACCI</a></li>
                                <li><a href="aritmatika.php">ARITMATIKA</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon gliphicon-log-in"></span>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="slide">
                <div class="col-sm-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="media/bg1.jpg" alt="Gambar 1">
                            </div>

                            <div class="item">
                                <img src="media/bg2.jpg" alt="Gambar 2">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-jaminan">
                    <h3>JAMINAN KAMI</h3>
                </div>
            </div>
        </div>
        <div class="jaminan">
            <div class="row">
                <div class="col-sm-3">
                    <div class="free">
                        <h3><img src="media/free.jpg" width="130px"></h3>
                        <h3>FREE ONGKIR</h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="transaksi">
                        <h3><img src="media/transaksi.jpg" width="130px"></h3>
                        <h3>TRANSAKSI 100% AMAN</h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kepuasan">
                        <h3><img src="media/kepuasan.jpg" width="130px"></h3>
                        <h3>KEPUASAN PELANGGAN</h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pelayanan">
                        <h3><img src="media/pelayanan.jpg" width="130px"></h3>
                        <h3>PELAYANAN TERBAIK</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="kontak">
                    <h3>KONTAK KAMI</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="fb">
                    <a href="www.facebook.com/aguss.sutarmawan/" style="color: black;"><img src="media/fb.png">
                        <h3>FACEBOOK</h3>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ig">
                    <a href="www.instagram.com" style="color: black;"><img src="media/ig.png">
                        <h3>INSTAGRAM</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="gmail">
                <div class="col-sm-2">
                    <div class="logoimel">
                        <img src="media/gmail.png">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="imel" style="text-align: center;">
                        <h3>HUBUNGI KAMI LEWAT G-MAIL</h3>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="go">
                        <h3><button onclick="window.location.href='namafile.html'">GO</button></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="logobot">
                    <img src="media/logo.jpg">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="menubot">
                    <h2 style="margin-bottom: 30px;"><b>MENU</b></h2>
                    <h4>ADDRESS</h4>
                    <h4>ABOUT</h4>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="address">
                    <h2 style="margin-bottom: 30px;"><b>ADDRESS</b></h2>
                    <h4>JALAN UDAYANA NO. 11 SINGARAJA, BULELENG, BALI</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="regist">
                    <h6>&reg; Futsal Store All Rights Reserved.</h6>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="author">
                    <h2>Agus Sstarmawan</h2>
                    <h4><img src="media/gmail.png" width="30px"> asutarmawan@gmail.com</h4>
                </div>
            </div>
</body>

</html>