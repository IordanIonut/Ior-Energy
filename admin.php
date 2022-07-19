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
    <link rel="stylesheet" href="css/base.css?version=51112" type="text/css">
    <link rel="stylesheet" href="css/vendor.css?version=51112" type="text/css">
    <link rel="stylesheet" href="css/main.css?version=51112" type="text/css"/>
    <link rel="stylesheet" href="css/login/create.css?version=51112" type="text/css"/>
    <link rel="stylesheet" href="css/login/client.css?version=51112" type="text/css"/>
    <link rel="stylesheet" href="css/login/swiper-bundle.min.css?version=51112" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/login/verticalInfo.css?version=511">


    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/mapdata.js"></script>
    <script src="js/countrymap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
    <script>  
        $(document).ready (function () {  
            $("#CreateProduct").validate ();
            $("#UpdateProduct").validate ();  
            $("#DeleteProduct").validate ();  
            $("#ChangeType").validate ({
                rules:{
                    price: "number",
                }
            })
        });  
    </script>  
    <script src="https://kit.fontawesome.com/a00c253d48.js" crossorigin="anonymous"></script>


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
            <a class="site-logo" href="admin.php">
                <img src="images/q.jpg" alt="Homepage">
            </a>
        </div>
        <nav class="header-nav">
            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
            <div class="header-nav__content">
                <h3>Navigation</h3>
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#search" title="search">Search</a></li>
                    <li><a class="smoothscroll"  href="#insert/update" title="insert/update">Insert/Update</a></li>
                    <li><a class="smoothscroll"  href="#delete/price" title="delete/price">Delete/Price</a></li>
                    <li><a class="smoothscroll"  href="#historyProduct" title="historyProduct">Product History</a></li>
                    <li><a class="smoothscroll"  href="#historyRegister" title="historyRegister">Register History</a></li>
                    <li><a class="smoothscroll"  href="#paymenthistory" title="paymenthistory">Payment History</a></li>
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
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/admin.jpg" 
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

    <!-- about
    ================================================== -->
    <section id='search' class="s-contact">
        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">City Search </h3>
            </div>
        </div> <!-- end section-header -->
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
            </div> 
        </div>
        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
            <?php include('phpCode/available.php');?>
        </div> <!-- end about-stats -->
        <div class="about__line"></div>
    </section> <!-- end s-about -->

    <?php include("phpCode/pause.php"); ?>

    <!-- services
    ================================================== -->
    <section id="insert/update" class="s-contact">
        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Create Product/Update Product</h3>
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
                                <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                                <label for="tab-1" class="tab" style="margin-right: 257px;">Create</label>
                                <input id="tab-2" type="radio" name="tab" class="sign-up" >
                                <label for="tab-2" class="tab">Update</label>
		                        <div class="login-space">
                                <div class="login">
                                    <form name="CreateProduct" id="CreateProduct" method="post" action="" novalidate="novalidate">
                                            <fieldset>
                                                <br>
                                            <div class="form-field">
                                                <input name="name2" type="text" id="name" placeholder="Product Name" value="" minlength="2" required aria-required="true" class="full-width">
                                            </div>
                                            <div class="form-field">
                                                <input  name="model2" type="text" id="model" placeholder="Product Model" value="" minlength="2" required aria-required="true" class="full-width">
                                            </div>
                                            <div class="form-field">
                                                <input name="cod2" type="text" id="cod" placeholder="Product Cod" value="" minlength="2" required aria-required="true" class="full-width">
                                            </div>
                                            <div class="form-field">
                                                <select name="place[]" id="place" style="color: #39b54a;background: #222;" placeholder="Product Place" value=""  required aria-required="true" class="full-width">
                                                    <?php include('phpCode/placeAvailable.php');?>
                                                </select>
                                            </div>
                                            <div class="form-field">
                                                <select name="category[]" id="category" style="color: #39b54a;background: #222;" placeholder="Product Category" value=""  required aria-required="true" class="full-width">
                                                    <?php include('phpCode/categoryAvailable.php');?>
                                                </select>
                                            </div><br><br><br><br>
                                            <div class="form-field">
                                                <input  class="full-width btn--primary" type="submit" value="Submite" name="submite5">
                                            </div>
                                            </fieldset>
                                        </form>
                                     <?php include('phpCode/createProduct.php');?>
		                        </div>
                                <div class="sign-up-form">
                                        <form name="UpdateProduct" id="UpdateProduct" method="post" action="" novalidate="novalidate">
                                            <fieldset>
                                                <br>
                                            <div class="form-field">
                                                <input  name="model" type="text" id="model" placeholder="Product Model" value="" minlength="2" required aria-required="true" class="full-width">
                                            </div>
                                            <div class="form-field">
                                                <input name="cod" type="text" id="cod" placeholder="Product Cod" value="" minlength="2" required aria-required="true" class="full-width">
                                            </div>
                                            <div class="form-field">
                                                <select name="category[]" id="category" style="color: #39b54a;background: #222;" placeholder="Product Category"  required="" aria-required="true" class="full-width">
                                                <?php include('phpCode/categoryAvailable.php');?>
                                                </select>
                                            </div>
                                            <div class="form-field">
                                                <select name="condition[]" style="color: #39b54a;background: #222;"  id="condition" placeholder="Product Condition"  required="" aria-required="true" class="full-width">
                                                    <?php include('phpCode/conditionAvailable.php');?>
                                                </select>
                                            </div>
                                            <br><br><br><br><br><br>
                                            <div class="form-field">
                                                <input  class="full-width btn--primary" type="submit" value="Submite" name="submitetest1">
                                            </div>
                                            </fieldset>
                                        </form>
                                    <?php include('phpCode/updateProduct.php');?>
                                </div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end insert Admin-->

    <?php include("phpCode/pause.php"); ?>

    <section id="delete/price" class="s-contact">
        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Delete Product/Price Type</h3>
            </div>
        </div>
        <div class="row contact-content" data-aos="fade-up">
            <div class="contact-primary" style="width: 100%">
                <div class ="row">
                        <div class="login-box">
	                        <div class="login-snip">
                                <input id="tab-6" type="radio" name="tab" class="sign-in" >
                                <label for="tab-6" class="tab" style="margin-right: 257px;">Delete</label>
                                <input id="tab-7" type="radio" name="tab" class="sign-up"  >
                                <label for="tab-7" class="tab">Price</label>
		                        <div class="login-space">
                                <div class="login">
                                    <form name="DeleteProduct" id="DeleteProduct" method="post" action="" novalidate="novalidate" >
                                            <fieldset>
                                                <br>
                                            <div class="form-field">
                                                <input name="name1" type="text" id="name1" placeholder="Product Name" value="" minlength="2" required aria-required="true" class="full-width">
                                            </div>
                                            <div class="form-field">
                                                <input  name="model1" type="text" id="model1" placeholder="Product Model" value="" minlength="2" required aria-required="true" class="full-width">
                                            </div>
                                            <div class="form-field">
                                                <input name="cod1" type="text" id="cod1" placeholder="Product Cod" value="" minlength="2" required aria-required="true" class="full-width">
                                            </div>
                                            <div class="form-field">
                                                <select name="category1[]"style="color: #39b54a;background: #222;" id="category1" placeholder="Product Category"  required="" aria-required="true" class="full-width">
                                                <?php include('phpCode/categoryAvailable.php');?>
                                                </select>
                                            </div>
                                            <br><br><br><br><br><br>
                                            <div class="form-field">
                                                <input  class="full-width btn--primary" type="submit" value="Submite" nume="sub">
                                            </div>
                                            </fieldset>     
                                    </form>
                                    <?php include('phpCode/deleteProduct.php');?>
		                        </div>
                                <div class="sign-up-form">
                                 <form name="ChangeType" id="ChangeType" method="post" action="" novalidate="novalidate" >
                                            <fieldset>
                                                <br>
                                            <div class="form-field">
                                                <select name="category[]" style="color: #39b54a;background: #222;" id="category" placeholder="Type Category" required aria-required="true" class="full-width">
                                                    <?php include('phpCode/categoryAvailable.php');?>
                                                </select>
                                            </div>
                                            <div class="form-field">
                                                <input name="price" type="text" id="price" placeholder="Type Price" value="" minlength="2" required aria-required="true" class="full-width">
                                            </div>
                                            <br><br><br><br><br><br><Br><br><br><br><br>
                                            <div class="form-field">
                                                <input  class="full-width btn--primary" type="submit" value="Submite" nume="test">
                                            </div>
                                        </form>
                                     </fieldset><?php include('phpCode/priceProduct.php');?>
                                </div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br><br><br>
    </section> <!-- end insert Admin-->



    <?php include("phpCode/pause.php"); ?>

<!-- about
================================================== -->
    <section id='historyProduct' class="s-contact">
    <div class="row section-header has-bottom-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead subhead--dark">History Product</h3>
                </div>
            </div>
    <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <?php include("phpCode/historyProduct.php"); ?>
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

    <!-- about
    ================================================== -->
    <section id='historyRegister' class="s-contact">
    <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">History Register</h3>
            </div>
        </div>
    <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                <?php include("phpCode/historyRegister.php"); ?>

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

    <!-- contact
    ================================================== -->
    <section id='paymenthistory' class="s-contact">
    <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Payment History</h3>
            </div>
        </div>
    <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <?php include("phpCode/paymentHistory.php"); ?>
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
