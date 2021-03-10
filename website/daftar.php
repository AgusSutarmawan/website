<!DOCTYPE html>
<html lang="en">

<head>
    <title> Registrasi </title>
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
                        <li><a href="index.php">HOME</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="daftar.php">
                        <li class="active"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon gliphicon-log-in"></span>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="form">
                <div class="col-lg-12">
                    <h1 style="text-align: center;">Sign Up</h1>
                    <p class="hint-text">Create your account. It's free and only takes a minute.</p>
                    <hr>
                    <form class="form-horizontal" action="  ">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" required placeholder="Name" name="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" required placeholder="Address" name="Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" placeholder="example@domain.com" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" class="form-control psw" placeholder="Password" name="Enter password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" class="form-control repsw" placeholder="Confirm Password" name="Enter password">
                                <small class="errpsw"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="Remember">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                        </div>
                        <div class="form-group2">
                            <div class=" col-sm-12">
                                <button type="submit" class="btn btn-default" style="background-color:green; color:white;">Register Now!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


   
    <div id="myModal" class="modal Fade" role="dialog">
        <div class="modal-dialog">
            <!--modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Berhasil</h4>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(function() {
        $(".form-horizontal  ").submit(function() {

            var ps1 = $('.psw').val();
            var ps2 = $('.repsw').val();
            var valid = 0;
            $('.err').html('');
            if (ps1 == ps2) {
                valid = 1;
            } else {
                $('.errpsw').html('Passsword  Tidak  Sama');
            }
            if (valid == 0) {
                event.preventDefault();
            } else {
                $('p').html("Selamat  pendaftaran  A.N  " + $('input[name="nama"]').val() + " telah  berhasil  ");
                $('.modal').modal('show');
                event.preventDefault();
            }
        });
    });
</script>

</html>