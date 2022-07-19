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
    <link rel="stylesheet" href="css/base.css?version=511112" type="text/css">
    <link rel="stylesheet" href="css/vendor.css?version=511112" type="text/css">
    <link rel="stylesheet" href="css/main.css?version=511112" type="text/css"/>
    <link rel="stylesheet" href="css/login/create.css?version=511112" type="text/css"/>
    <link rel="stylesheet" href="css/login/client.css?version=511112" type="text/css"/>
    <link rel="stylesheet" href="css/login/swiper-bundle.min.css?version=511112" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/login/verticalInfo.css?version=51111">
    <link rel="stylesheet" type="text/css" href="css/login/normalize.css?version=512111" />
	<link rel="stylesheet" type="text/css" href="css/login/demo.css?version=511112" />
	<link rel="stylesheet" type="text/css" href="css/login/component.css?version=51111" />
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/mapdata.js"></script>
    <script src="js/countrymap.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-hgyfembDZ9V5hn1wy-Ju8Yt4EnQ424I&callback=initialize_map"></script>
    <script src="https://kit.fontawesome.com/a00c253d48.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
    <script> 
        $(document).ready (function () {  
            $('#StopCommand').validate();
        } );
    </script>  


    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/logo1.ico" type="image/x-icon">
    <link rel="icon" href="images/logo1.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">
        <div class="header-logo">
            <a class="site-logo" href="client.php">
                <img src="images/q.jpg" alt="Homepage">
            </a>
        </div>
        <nav class="header-nav">
            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
            <div class="header-nav__content">
                <h3>Navigation</h3>
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#command" title="command">Command</a></li>
                    <li><a class="smoothscroll"  href="#order" title="order">Orders in progress</a></li>
                    <li><a class="smoothscroll"  href="#stop" title="stop">Stop Command</a></li>
                    <li><a class="smoothscroll"  href="#invoices" title="invoices">Invoices</a></li>
                </ul>
                <p>There is a new way to get around the city. Fun, convenient and easy to use, electric scooters, classic bikes or 
                    electric bikes are available on our website.</p>
                <ul class="header-nav__social">
                    <li>
                        <a href="https://ro-ro.facebook.com/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://www.behance.net/gallery/58902999/Login"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>
            </div> <!-- end header-nav__content -->
        </nav>  <!-- end header-nav -->
        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>
        <?php include('verticalInfo.php');?>
    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero.jpg" 
    data-natural-width=3000 data-natural-height=2000 data-position-y=center>
        <div class="overlay"></div>
        <div class="shadow-overlay"></div>
        <div class="home-content">
            <div class="row home-content__main">
                <h3>Welcome to Ior Tech</h3>
                <h1>
                    Rent electric scooters, <br>
                        classic bicycles or <br>
                         electric bicycles.
                </h1>
                <div class="home-content__buttons">
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        More Contact Us
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Us
                    </a>
                </div>
            </div>
            <div class="home-content__scroll">
                <a href="#command" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>
            <div class="home-content__line"></div>
        </div> <!-- end home-content -->
        <ul class="home-social">
            <li>
                <a href="https://ro-ro.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="https://www.behance.net/gallery/58902999/Login"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="https://dribbble.com/"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li>
        </ul>
        <!-- end home-social -->
    </section> <!-- end s-home -->
    <?php include("phpCode/pause.php"); ?>
    <?php include('phpCode/batteryChange.php');?>

    <section id="command" class="s-contact">
    <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Command Product</h3>
            </div>
    </div>
        <div class="row contact-content" data-aos="fade-up">
            <div class="contact-primary"  style="width: 100%">
                <div>
                    <form name="CitySelected" id="CitySelected" method="post" action="" novalidate="novalidate">
                        <div class="form-field">
                            <select name="city[]" style="color: #39b54a;background: #222;" id="city" placeholder="Product City" value=""  required="" aria-required="true" class="full-width">
                                <?php include('phpCode/cityAvailable.php');?>
                            </select>
                        </div>
                        <div class="form-field">
                            <input  class="full-width btn--primary" type="submit" value="Submite" name="123">
                        </div>
                    </form>
                <?php include('phpCode/citySend.php');?>
            </div>
            <br>
            </div> 
            <div class="contact-primary"  style="width:63%">
                <?php include('phpCode/map.php'); ?>
                </div>
		        </div>
            </div>
    </div>
    </div>
        </div> <!-- end contact-content -->
    </section> <!-- end s-contact -->

    <?php include("phpCode/pause.php"); ?>

    <section id='order' class="s-contact">
    <div class="row section-header has-bottom-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead subhead--dark">Orders in progress</h3>
                </div>
            </div>
    <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <?php include("phpCode/commandActive.php"); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            
        </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    </section>

    <?php include("phpCode/pause.php"); ?>

    <section id='stop' class="s-contact">
        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">STOP COMMAND</h3>
            </div>
        </div>
        <div class="row contact-content" data-aos="fade-up">
            <div class="contact-primary"  style="width: 100%">
            <div>
                <form name="CitySelected" id="CitySelected" method="post" action="" novalidate="novalidate">
                    <div class="form-field">
                        <select name="city[]" style="color: #39b54a;background: #222;" id="city" placeholder="Product City" value=""  required="" aria-required="true" class="full-width">
                            <?php include('phpCode/cityAvailable.php');?>
                        </select>
                    </div>
                    <div class="form-field">
                        <input  class="full-width btn--primary" type="submit" value="Submite" name="123">
                    </div>
                </form>
                <?php include('phpCode/citySend.php');?>
            </div>
            <br>
            </div> 
            <div class="contact-primary"  style="width: 100%">
            <div class="contact-info">
            <div class ="row">
                    <div class="login-box">
	                        <div class="login-snip">
		                        <input id="tab-3" type="radio" name="tab" class="sign-in">
                                <label for="tab-3" class="tab" style=" margin-left: 200px;">STOP</label>
                                <input id="tab-4" type="radio" name="tab" class="sign-up">
                                <label for="tab-4" class="tab"></label>
		                        <div class="login-space">
                                 <div class="login">
                                        <form name="StopCommand" id="StopCommand" method="post" action="" novalidate="novalidate">
                                            <fieldset>
                                                <br>
                                                <div class="form-field">
                                                <select name="place[]" style="color: #39b54a;background: #222;" id="place" placeholder="Product Place" value=""  required aria-required="true" class="full-width">
                                                    <?php include('phpCode/placeAvailable.php');?>
                                                </select>
                                            </div>
                                            <div class="form-field">
                                                <input name="cod" type="text" id="cod" placeholder="Product Cod" value="" minlength="2" required aria-required="true" class="full-width">
                                            </div>
                                            <div class="form-field">
                                                <select name="cat[]" style="color: #39b54a;background: #222;" id="cat" placeholder="Product Category" value=""  required aria-required="true" class="full-width">
                                                    <?php include('phpCode/categoryAvailable.php');?>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="box">
                                                <input type="file" name="file1" id="file-6" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" multiple style="padding: left;will-change: auto;width: 30px;" />
                                                <label for="file-6" ><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span></span></label>
                                            </div>
                                            <br><br>
                                            <div class="form-field">
                                                <p style="text-align: center;">  Please enter the related pictures with the rented product to justify that everything was ok.
                                                If the pictures or other data are wrong you can be criminally liable.</p>
                                            </div>
                                            <div class="form-field">
                                                <input  class="full-width btn--primary" type="submit" value="Submite" name="submite7">
                                            </div>
                                            </fieldset>
                                        </form>
                                        <?php include('phpCode/stopCommand.php');?>
			                        </div>
		                        </div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end s-clients -->

    <?php include("phpCode/pause.php"); ?>

    <section id='invoices' class="s-contact">
    <div class="row section-header has-bottom-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead subhead--dark">Rental history</h3>
                </div>
            </div>
    <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <?php include("phpCode/invaiceClient.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev swiper-navBtn"></div>
             <div class="swiper-button-next swiper-navBtn"></div>
        </div>
        <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    </section>

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
    <script src="js/custom-file-input.js"></script>

</body>

</html>
