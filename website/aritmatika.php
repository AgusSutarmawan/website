<?php

$u1 = "";
$beda = "";
$nilai_n = "";
$hasil = "";
$baris = "";
$barishasil = "";


if (isset($_POST['submit'])) {

    $u1 = $_POST["u1"];
    $beda = $_POST["beda"];
    $nilai_n = $_POST["nilai_n"];

    $a = $u1;
    $b = $beda;
    $n = $nilai_n;

    $hasil = $a + ($n - 1) * $b;

    for ($i = 1; $i < $n + 1; $i++) {
        $baris = $a + ($i - 1) * $b;
        $barishasil .= $baris . " ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title> Futsal Store </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
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
                <img src="media/aritmatika.png">
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
                        <li><a href="fibonacci.php">FIBONACCI</a></li>
                        <li class="active"><a href="aritmatika.php">ARITMATIKA</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon gliphicon-log-in"></span>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="aritmatika">
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="#" class="bg-white form-container p-3" id="forminput">
                        <h2><b>Barisan Aritmatika</b></h2>
                        <div class="form-group">
                            <label for="u1">Suku pertama (a) atau (U1)</label>
                            <input type="number" class="form-control" value="<?php echo $u1; ?>" id="u1"  name="u1" required />
                        </div>
                        <div class="form-group">
                            <label for="beda">Beda (b)</label>
                            <input type="number" class="form-control" value="<?php echo $beda; ?>" id="beda"  name="beda" required />
                        </div>

                        <div class="form-group">
                            <label for="nilai_n">Mencari suku ke-</label>
                            <input type="number" class="form-control" value="<?php echo $nilai_n; ?>" id="nilai_n" name="nilai_n" required />
                        </div>
                        <br><button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit">Hitung</button></br>
                        <div class="form-group">
                            <h4 style="text-align: center;"><b>Hasil</b></h4>
                        </div>
                        <div class="form-group">
                            <h4 style="text-align: center;">Barisan aritmatika</h4>
                            <h4 style=" color: black;; text-align: center; border-radius: 4px;"><?php echo $barishasil; ?></h4>
                        </div>
                        <div class="form-group">
                            <h4 style="text-align: center;">Nilai suku ke-n (Un)</h4>
                            <h4 style="color: black;; text-align: center; border-radius: 4px;"><?php echo $hasil; ?></h4>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>