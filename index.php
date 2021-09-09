<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>ASTravel</title>
    <link rel="icon" href="assets/images/ASTravel.jpg">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,700,900,500' rel='stylesheet' type='text/css'>

    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

</head>

<body class="top-navigation">
    <div id="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="assets/images/loading.gif" alt="loading" /></span>
            </div>
        </div>

        <div class="nav-wrapper smoothie">  
            <div class="container">      
                <div class="row">
                    <div class="col-xs-3">
                        <a class="logo" href="#"><img alt="" class="logo img-responsive" src="assets/images/logo-light-astravel.png"></a> 
                    </div>
                    <div class="col-xs-9">
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#about-us" class="page-scroll">About Us</a></li>
                                <li><a href="#contact-us" class="page-scroll">Bookings</a></li>
                            </ul>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        
        <header id="home" class="fullheight">
            <div class="dark-overlay half-opacity fullheight">
                <div class="container fullheight">                   
                    <div class="jumbotron">
                        <h1><small>ASTRAVEL</small><br>
                        We Love The Earth</h1>
                        <p>
                            <a class="btn btn-white btn-lg page-scroll" href="#about-us" role="button">About Us</a> 
                            <a class="btn btn-lg btn-primary page-scroll" href="#contact-us" role="button">Buy Ticket</a>
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <section id="about-us">
            <div class="section-inner">
                <div class="container">
                    <div class="row mb60 text-center">
                        <div class="col-sm-12">
                            <h3 class="section-title">About Us</h3>
                            <p class="section-sub-title">Who are we?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-2">
                   			<p class="lead">You should be thankful for the journey of life. You only make this journey once in your life time..</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="contact-us" class="dark-wrapper">
            <div class="section-inner">
                <div class="container">
                    <div class="row mb60 text-center">
                        <div class="col-sm-12">
                            <h3 class="section-title">Ready to Book?</h3>
                            <p class="section-sub-title">Get in touch.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-justified" id="nav-tabs" role="tablist">
                                        <li role="presentation" class="">
                                            <a href="#contact-2" aria-controls="contact-2" role="tab" data-toggle="tab" class="btn btn-white btn-lg">
                                                <span>Bookings</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                       <div role="tabpanel" class="tab-pane fade" id="contact-2">
                                            <div class="tab-inner">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="row">
                                                            <div id="message" class="col-sm-12">&nbsp;</div>
                                                            <div class="col-sm-12">
                                                                <form method="post" action="">
                                                                        <select name="lokasi" class="form-control col-md-4 mb20">
                                                                            <option name="lokasi" value="bandung">Bandung</option>
                                                                            <option name="lokasi" value="jakarta">Jakarta</option>
                                                                            <option name="lokasi" value="surabaya">Surabaya</option>
                                                                            <option name="lokasi" value="jayapura">Jayapura</option>
                                                                        </select>
                                                                        <select name="maskapai" placeholder="Jumlah Penumpang" class="form-control col-md-4 mb20">
                                                                            <option name="maskapai" value="lionair">Lion Air</option>
                                                                            <option name="maskapai" value="airasia">Air Asia</option>
                                                                            <option name="maskapai" value="batikair">Batik Air</option>
                                                                            <option name="maskapai" value="garudaair">Garuda Air</option>
                                                                        </select>
                                                                        <input type="text" class="form-control col-md-4 mb20" required="required" placeholder="The Number of Passangers" name="jumlah">
                                                                <form method="post" action="sendemail.php" id="contactform" class="main-contact-form">
                                                                <div class="form-group">
                                                                        <input type="text" class="form-control col-md-4 mb20" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                                                                        <input type="text" class="form-control col-md-4 mb20" name="email" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." />
                                                                        <input type="text" class="form-control col-md-4 mb20" name="website" placeholder="Your URL *" id="website" required data-validation-required-message="Please enter your web address." />
                                                                 <button type="submit" class="btn btn-white mt30 pull-right" name="hitung" value="hitung" href="#services"></i>Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <section>
                      <div class="container">
                        <div class="row">                
                            <div class="col-md-12 footer-social text-center mb40">
    <?php
    if (isset($_POST['hitung'])) {
        $jumlah=$_POST['jumlah'];
        $lokasi = $_POST['lokasi'];
        $maskapai = $_POST['maskapai'];
        switch ($maskapai) {
            case 'lionair':
                switch ($lokasi) {
                    case 'bandung':
                        $harga=100000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'jakarta':
                        $harga=150000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'surabaya':
                        $harga=200000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'jayapura':
                        $harga=300000;
                        $hasil=$harga*$jumlah;
                    break;
                    }
            break;
            case 'airasia':
                switch ($lokasi) {
                    case 'bandung':
                        $harga=200000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'jakarta':
                        $harga=250000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'surabaya':
                        $harga=300000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'jayapura':
                        $harga=400000;
                        $hasil=$harga*$jumlah;
                    break;
                    }
            break;
            case 'batikair':
                switch ($lokasi) {
                    case 'bandung':
                        $harga=300000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'jakarta':
                        $harga=350000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'surabaya':
                        $harga=400000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'jayapura':
                        $harga=500000;
                        $hasil=$harga*$jumlah;
                    break;
                    }
            break;
            case 'garudaair':
                switch ($lokasi) {
                    case 'bandung':
                        $harga=400000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'jakarta':
                        $harga=450000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'surabaya':
                        $harga=500000;
                        $hasil=$harga*$jumlah;
                    break;
                    case 'jayapura':
                        $harga=600000;
                        $hasil=$harga*$jumlah;
                    break;
                    }
            break;
        }
    } ?>
                        <?php 
                        if(isset($_POST['hitung'])){
                        echo "SUCCESFULL!!";
                        echo "<br> You Choose a ticket to ",$lokasi,"<br> With AirPlane ",$maskapai,"<br> Price Piecies : Rp. ", $harga ,"<br> The Number of Passangers: ",$jumlah,"<br> Total Price: Rp. ",$hasil; }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <footer>
            <div class="container">
                <div class="row">                
                    <div class="col-md-12 footer-social text-center mb40">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-yelp"></i></a>          
                    </div>
                    <div class="col-md-12 text-center">
                        <p class="copyright"><small>© 2019. Ayu Shafira Tubagus. 1710631170064 </small></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script> 
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bigvideo.js"></script> 
    <script src="assets/js/plugins.js"></script> 
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/init.js"></script>
    <script type="text/javascript">
    jQuery(window).load(function(){
        "use strict";
        jQuery(function(){
            jQuery(".player").mb_YTPlayer();
        });
        jQuery('.player-controls a').on('click', function(event) {
            event.preventDefault();
        });
        jQuery('a.vol').on('click', function(event) {
            var $this = jQuery(this).children('i');
            if ($this.hasClass('fa-volume-off')) {
                 $this.removeClass('fa-volume-off').addClass('fa-volume-up');
            }
            else {
                 $this.removeClass('fa-volume-up').addClass('fa-volume-off');
            }
        });
    });
    </script>

</body>
</html>