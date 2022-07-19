<?php
    session_start();
    // Turn off error reporting
error_reporting(0);

?>
<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Ior Energy</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css?version=511" type="text/css">
    <link rel="stylesheet" href="css/vendor.css?version=511" type="text/css">
    <link rel="stylesheet" href="css/main.css?version=511" type="text/css"/>
    <link rel="stylesheet" href="css/login/create.css?version=511" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/login/verticalInfo.css?version=511">



    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/mapdata.js"></script>
    <script src="js/countrymap.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>   
    <script src="https://kit.fontawesome.com/a00c253d48.js" crossorigin="anonymous"></script>


    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon">
    <link rel="icon" href="images/logo1.ico" type="image/x-icon">

</head>

<body id="top">
    <header class="s-header">
    <div class="header-logo">
            <a class="site-logo" href="pay.php">
                <img src="images/q.jpg" alt="Homepage">
            </a>
        </div>
        <?php include('verticalInfo.php');?>
    </header>

    <!-- header
    ================================================== -->
    <section id='login' class="s-contact">
        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">LOGIN ADMIN</h3>
            </div>
        </div>
        <div class="row contact-content" data-aos="fade-up">
            <div class="contact-primary" style="width: 100%">
                <div class ="row">
                        <div class="login-box">
	                        <div class="login-snip">
                            <?php include('phpCode/payNow.php')?> 

                                   
		                        </div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br><br><br>

    </section> <!-- end login Admin-->


    <!-- footer
    ================================================== -->

        <?php include('phpCode/footer.php');?>



    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
