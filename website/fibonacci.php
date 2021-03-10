<!DOCTYPE html>
<html lang="en">

<head>
    <title> Fibonacci </title>
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
                <img src="media/fibo.png">
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
                        <li><a href="index.php">HOME</a></li>
                        <li class="active"><a href="fibonacci.php">FIBONACCI</a></li>
                        <li><a href="aritmatika.php">ARITMATIKA</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon gliphicon-log-in"></span>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <hr>
        <div class="content1">
            <div class="col-lg-12">
                <div class="fibonacci" style="width:200px">
                    <form action="" method="get">
                    <h2><b>Fibonacci</b></h2>
                        Deret ke-1 <input class="form-control " type="number" name="x" required>
                        Deret ke-2 <input class="form-control " type="number" name="y" required>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <h3>Hasil Deret Bilangan Fibonacci</h3>

        <?php

        $x = isset($_GET['x']) ? $_GET['x'] : '0';
        $y = isset($_GET['y']) ? $_GET['y'] : '0';

        $n = 10;
        $hasil = "$x,  $y, ";

        for ($i = 0; $i <= $n - 3; $i++) {

            $output = $x + $y;

            $hasil = $hasil . " $output, ";


            $x = $y;
            $y = $output;
        }

        echo "<div style='font-size:20px; font-family: chili;'>Output : $hasil</div>";

        ?>
    </div>
</body>

</html>