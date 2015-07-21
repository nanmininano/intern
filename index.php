<?php
include_once 'common.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SC- Internship</title>
        <?php header('Content-language: en'); ?>  
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">


        <link rel="stylesheet" href="css/creative.css" type="text/css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script
        src="http://maps.googleapis.com/maps/api/js"></script>

        <script>


            window.initialize = function () {
                var myLatlng = new google.maps.LatLng(13.7437257, 100.5625362);
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: myLatlng,
                    zoom: 18,
                }
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: "123"
                });
                var latLng = marker.getPosition();
                map.setCenter(latLng);
            }
            google.maps.event.addDomListener(window, 'load', initialize);

        </script>

    </head>

    <body id="page-top" >

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand page-scroll" href="#page-top">
                        <img src="img/logo.jpg" style="width:100px;height:30px"></a>


                    <div style="float: left;">
                        <ul class="nav-default nav-lang "style="padding-left: 0px; padding-top:15px; ">
                            <li><a href="en">EN</a></li>

                            <li><a href="de">/ DE /</a></li>

                            <li><a href="th">TH</a></li>
                        </ul>
                    </div>


                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" > 
                    <ul class="nav navbar-nav navbar-right" >
                        <li>
                            <a class="page-scroll" href="#about"><?php echo $lang['ABOUT']; ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services"><?php echo $lang['Services']; ?></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact"><?php echo $lang['Contact']; ?></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <!-- <h1>Your Favorite Source of Free Bootstrap Themes</h1> -->
                    <h1><?php echo $lang['MENU_HOME']; ?></h1>
                    <hr>
                    <p><?php echo $lang['CONTENT_HOME']; ?></p>
                    <a href="#about" class="btn btn-primary btn-xl page-scroll"> <?php echo $lang['BUTTON_HOME']; ?> </a>
                </div>
            </div>
        </header>

        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading"><?php echo $lang['Section2-head']; ?></h2>
                        <hr class="light">
                        <p class="text-faded"><?php echo $lang['Section2-content']; ?></p>
                        <!-- <a href="#" class="btn btn-default btn-xl"><?php echo $lang['Section2-button']; ?></a> --> 
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading"><?php echo $lang['Section3-head']; ?></h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                            <h3><?php echo $lang['Section3-con1']; ?></h3>
                            <p class="text-muted"><?php echo $lang['Section3-SubCon1']; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                            <h3><?php echo $lang['Section3-con2']; ?></h3>
                            <p class="text-muted"><?php echo $lang['Section3-SubCon2']; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                            <h3><?php echo $lang['Section3-con3']; ?></h3>
                            <p class="text-muted"><?php echo $lang['Section3-SubCon3']; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                            <h3><?php echo $lang['Section3-con4']; ?></h3>
                            <p class="text-muted"><?php echo $lang['Section3-SubCon4']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>




<!--  <section id="Slide_Image">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 text-center">
               <h2 class="section-heading"><?php echo $lang['Section4-head']; ?></h2>
               <hr class="primary">
           </div>
       </div>
   </div>
</section> -->

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active" >
                    <img src="img/banner/BN-SC-03.jpg" alt="..." >
                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="img/banner/BN-SC-01.jpg" alt="..." >
                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="img/banner/BN-SC-02.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div> <!-- Carousel -->

        <section id="Trainee"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading"><?php echo $lang['Section5-head']; ?></h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
        </section>


        <section class="no-padding" id="portfolio">
            <div class="container-fluid">
                <div class="row no-gutter">

                    <div class="col-lg-4 col-sm-6">
                        <a href="" data-toggle="modal" data-target="#myModal1" class="portfolio-box">
                            <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <?php echo $lang['Section4-Image1-Con1']; ?>
                                    </div>
                                    <div class="project-name">
                                        <?php echo $lang['Section4-Image1-Con2']; ?> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel" ><a href="#"><?php echo $lang['Image-Link1']; ?></a></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $lang['Intern-content-1']; ?> 
                                    </div>

                                    <div class="js-video [vimeo, widescreen]">
                                        <iframe width="560" height="315" src="http://www.youtube.com/embed/wN3gueLT0D8?showinfo=0" 
                                                frameborder="0" allowfullscreen></iframe>
                                    </div>


                                </div>
                            </div>
                        </div>





                    </div>


                    <div class="col-lg-4 col-sm-6">
                        <a href="" data-toggle="modal" data-target="#myModal2" class="portfolio-box">
                            <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <?php echo $lang['Section4-Image2-Con1']; ?>
                                    </div>
                                    <div class="project-name">
                                        <?php echo $lang['Section4-Image2-Con2']; ?> 
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel" ><a href="#"><?php echo $lang['Image-Link2']; ?></a></h4>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/nXHvDDLiANA" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a href="" data-toggle="modal" data-target="#myModal3" class="portfolio-box">
                            <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <?php echo $lang['Section4-Image3-Con1']; ?>
                                    </div>
                                    <div class="project-name">
                                        <?php echo $lang['Section4-Image3-Con2']; ?> 
                                    </div>
                                </div>
                            </div>
                        </a>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel" ><a href="#"><?php echo $lang['Image-Link3']; ?></a></h4>

                                    </div>
                                    <div class="modal-body">
                                        ...
                                        <?php echo $lang['Intern-content-1']; ?> 
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>





                    <div class="col-lg-4 col-sm-6">
                        <a href="" data-toggle="modal" data-target="#myModal4" class="portfolio-box">
                            <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <?php echo $lang['Section4-Image4-Con1']; ?>
                                    </div>
                                    <div class="project-name">
                                        <?php echo $lang['Section4-Image4-Con2']; ?> 
                                    </div>
                                </div>
                            </div>
                        </a>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel" ><a href="#"><?php echo $lang['Image-Link4']; ?></a></h4>

                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a href="" data-toggle="modal" data-target="#myModal5" class="portfolio-box">
                            <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <?php echo $lang['Section4-Image5-Con1']; ?>
                                    </div>
                                    <div class="project-name">
                                        <?php echo $lang['Section4-Image5-Con2']; ?> 
                                    </div>
                                </div>
                            </div>
                        </a>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel" ><a href="#"><?php echo $lang['Image-Link5']; ?></a></h4>

                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-6">
                        <a href="" data-toggle="modal" data-target="#myModal6" class="portfolio-box">
                            <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <?php echo $lang['Section4-Image6-Con1']; ?>
                                    </div>
                                    <div class="project-name">
                                        <?php echo $lang['Section4-Image6-Con2']; ?> 
                                    </div>
                                </div>
                            </div>
                        </a>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel" ><a href="#"><?php echo $lang['Image-Link6']; ?></a></h4>

                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </section>

    <!-- <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2 class="section-heading">How to recruit an apprentice</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
            </div>
        </div>
    </aside> -->

    <section id="contact">
        <div class="header-content">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <hr class="primary">
            </div>
        </div>
    </section>


    <div >
        <div class="col-lg-6" style="padding-top: 10px;">
            <div id="map-canvas" style="max-width:100%;height:300px;"></div>
        </div>
    </div> 

    <div class="col-lg-6" >
        <div id="success"></div>
        <form id="form-contact" class="form-horizontal" action="sendmail.php" method="post" enctype="multipart/form-data">
            <div class="form-group username hide">
                <input class="form-control" placeholder="username *" name="username" type="text">
            </div>

            <div class="form-group" style="padding-top: 10px;">
                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value required pattern="^[^!@#$%&*+=]+$" maxlength="50"
                           oninvalid="this.setCustomValidity('Please enter your name.')" 
                           oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value required maxlength="100"
                           oninvalid="this.setCustomValidity('Please enter a valid email address.')" 
                           oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Upload</label>
                <div class="col-sm-10">
                    <input id="upload" name="upload" type="file" class="file" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" id="comments" name="comments" placeholder="Message" ></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10" style="padding-bottom: 100px; ">
                    <button type="submit" class="btn btn-primary" id="submit" name="submit"  style ="width : 25%;" >Send</button>
                </div>
            </div>
        </form>
    </div>



    <div id="rt-copyright">
        <div class="rt-container">
            <div class="col-md-6 rg-bottom">
                <div class="custom">
                    <p>
                        <span class="q_social_icon_holder normal_social">
                            <a href="https://plus.google.com/+SoftcontrolNet-IT-Peace-of-Mind" rel="publisher" target="_blank">
                                <em class="fa fa-google-plus fa-lg simple_social"></em>
                            </a>
                        </span>
                        <span class="q_social_icon_holder normal_social">
                            <a href="https://www.facebook.com/SoftControl.Net" target="_blank">
                                <em class="fa fa-facebook fa-lg simple_social"></em>
                            </a>
                        </span>
                        <span class="q_social_icon_holder normal_social">
                            <a href="https://twitter.com/softcontrol_net" rel="publisher" target="_blank">
                                <em class="fa fa-twitter fa-lg simple_social"></em>
                            </a>
                        </span>
                        <span class="q_social_icon_holder normal_social">
                            <a href="https://www.linkedin.com/company/softcontrol" rel="publisher" target="_blank">
                                <em class="fa fa-linkedin fa-lg simple_social"></em>
                            </a>
                        </span>
                        <span class="q_social_icon_holder normal_social">
                            <a href="http://www.youtube.com/user/softcontrolnet" rel="publisher" target="_blank">
                                <em class="fa fa-youtube fa-lg simple_social"></em>
                            </a>
                        </span>
                    </p>
                </div>
            </div>

            <div class="col-md-6 rg-bottom">
                <div class="custom">
                    <p>
                        Copyright © 1993-2015 SoftControl.Net, Ltd. All Rights Reserved.
                    </p>
                </div> 
            </div>
        </div>
    </div>




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
    <script src="js/app.js"></script>


</body>

</html>
