<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sofware Tester">
    <meta name="author" content="Redion">

    <title>SWTest</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.min.css" ?>" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url()."assets/css/freelancer.min.css"?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()."assets/vendor/font-awesome/css/font-awesome.min.css" ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">SWTest 2017</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url().'index.php#form';?>">Form Input</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#login">Login</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#info">Info</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <img class="img-responsive" src="<?php echo base_url()."assets/img/medical.jpg" ?>" alt=""> -->
                    <div class="intro-text">
                        <span class="name">SWTest</span>
                        <hr class="star-light">
                        <span class="skills">SWTest brief Description</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Hasil Anda</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <p>Total Skor Anda:</p>
                    <br>
                    <h1><?php echo $total ?></h1>
                    <br>
                    <p>Tabel Skoring saat ini:</p>
                    <table id="res" class="table table-bordered table-hover col-sm-4">
                        <thead>
                        <tr>
                          <th>Rank</th>
                          <th>Nama</th>
                          <th>Skor</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no=0;
                          // var_dump($result); die();
                          foreach ($result as $s) {
                          ?>
                            <tr>
                              <td><?php echo ++$no; ?></td>
                              <td><?php echo $s->NAME;?></td>
                              <td><?php echo $s->score;?></td>
                            </tr>
                        <?php
                        } ?>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Section -->
    <section  class="success" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Login</h2>
                    <hr class="star-light">
                    <a href="<?php echo base_url()."index.php/user/login" ?>" class="btn btn-lg btn-outline">
                        Login as Admin
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center" id="info">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Ciwaruga
                            <br>Parongpong, Bandung Barat</p>
                    </div>
                    <div class="footer-col col-md-4">

                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About SWTest</h3>
                        <p>SWTest brief Description</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; SWTest App 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url()."assets/vendor/jquery/jquery.min.js" ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()."assets/vendor/bootstrap/js/bootstrap.min.js"?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="<?php echo base_url()."assets/js/freelancer.min.js" ?>"></script>
</body>

</html>
