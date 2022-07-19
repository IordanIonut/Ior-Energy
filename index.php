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
    <link rel="stylesheet" href="css/base.css?version=5111112" type="text/css">
    <link rel="stylesheet" href="css/vendor.css?version=5111112" type="text/css">
    <link rel="stylesheet" href="css/main.css?version=5111112" type="text/css"/>
    <link rel="stylesheet" href="css/login/create.css?version=5111112" type="text/css"/>
    <link rel="stylesheet" href="css/login/client.css?version=5111112" type="text/css"/>
    <link rel="stylesheet" href="css/login/swiper-bundle.min.css?version=5111112" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/login/verticalInfo.css?version=511111">
    <link rel="stylesheet" type="text/css" href="css/login/normalize.css?version=5121111" />
	<link rel="stylesheet" type="text/css" href="css/login/demo.css?version=5111112" />
	<link rel="stylesheet" type="text/css" href="css/login/component.css?version=511111" />
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
            $("#LoginAccont").validate ();
            $("#CreateAccont").validate ({
                rules:{
                    tel: { 
                        required: true,
		                number: true,
                    },
                    email:{
                        required: true,
                        email: true,
                    }
                }
            });
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
            <a class="site-logo" href="index.php">
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
                    <li><a class="smoothscroll"  href="#map" title="map">Romania Map</a></li>
                    <li><a class="smoothscroll"  href="#create/login" title="create/login">Create/Login</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
                </ul>
                <p>There is a new way to get around the <a href='adminLogin.php'>city</a>. Fun, convenient and easy to use, electric scooters, classic bikes or 
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
        <div class="navigation" style="position: fixed;">
		<ul style="margin-top: 200px;">
			<li class="list active">
				<a href="#create/login">
					<span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
					<span class="title" style="right: -500px;">Account</span>
				</a>
			</li>
			<li class="list">
				<a href="">
					<span class="icon"><i class="fa-solid fa-window-maximize"></i></span>
					<span class="title" style="right: -500px;">Easy to book</span>
				</a>
			</li>
			<li class="list">
				<a href="">
					<span class="icon"><i class="fa-solid fa-bolt"></i></span>
					<span class="title" style="right: -500px;">Comfortable, non-polluting, smart solutions</span>
				</a>
			</li>
			<li class="list">
				<a href="">
					<span class="icon"><i class="fa-solid fa-tag"></i></span>
					<span class="title" style="right: -500px;">After 2 rentals you receive 15% of the next</span>
				</a>
			</li>
			<div class="indicator"></div>
		</ul>
	</div>

	<!-- add active class on hovered item -->
	<script>
		let list = document.querySelectorAll('li');
		for (let i=0; i<list.length; i++){
			list[i].onmouseover = function(){
				let j = 0;
				while (j < list.length){
					list[j++].className = 'list';
				}
				list[i].className = 'list active';
			}
		}

		// change body color according to indicator

		list.forEach(elements => {
			elements.addEventListener('mouseenter',function(event){
				let bg = document.querySelector('body');
				let color = event.target.getAttribute('data-color');
				bg.style.backgroundColor = color;
			})
		})
	</script>


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

    <!-- about
    ================================================== -->
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
                <?php include('phpCode/mapindex.php'); ?>
                </div>
		        </div>
            </div>
    </div>
    </div>
        </div> <!-- end contact-content -->
    </section> <!-- end s-contact -->

    <?php include("phpCode/pause.php"); ?>

    <!-- services
    ================================================== -->
    <section id="map" style="background: #111111;">
        <br><br><br><br>
        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Romania MAP</h3>
            </div>
        </div>
        <br><br><br>
        <div id="mapRomania" style="margin-left:auto; margin-right:auto">
        </div>
        <br><br><br>
    </section> <!-- end map -->


    <!-- works
    ================================================== -->
    <section id='works' class="s-works">
        <div class="intro-wrap">
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Cities where you find us</h3>
                </div>
            </div> <!-- end section-header -->
        </div> <!-- end intro-wrap -->
        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/Pitesti.jpg" class="thumb-link" title="Shutterbug" data-size="500x500">
                                    <img src="images/portfolio/Pitesti.jpg" 
                                         srcset="images/portfolio/Pitesti.jpg 1x, images/portfolio/Pitesti@2x.jpg 2x" alt="">
                                </a>
                            </div>
                            <br>
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Pitesti
                                </h3>
                                <p class="item-folio__cat">
                                    Romania
                                </p>
                            </div>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div> 

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/Bucuresti.jpg" class="thumb-link" title="Woodcraft" data-size="500x500">
                                    <img src="images/portfolio/Bucuresti.jpg" 
                                         srcset="images/portfolio/Bucuresti.jpg 1x, images/portfolio/Bucuresti@2x.jpg 2x" alt="">
                                </a>
                            </div>
                            <br>
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Bucuresti
                                </h3>
                                <p class="item-folio__cat">
                                    Romania
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div> 

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/Timisoara.jpg" class="thumb-link" title="The Beetle Car" data-size="500x500">
                                    <img src="images/portfolio/Timisoara.jpg"
                                         srcset="images/portfolio/Timisoara.jpg 1x, images/portfolio/Timisoara@2x.jpg 2x" alt="">
                                </a>
                            </div>
                            <br>
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Timisoara
                                </h3>
                                <p class="item-folio__cat">
                                    Romania
                                </p>
                            </div>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div> 
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/Cluj.jpg" class="thumb-link" title="Grow Green" data-size="500x500">
                                    <img src="images/portfolio/Cluj.jpg" 
                                         srcset="images/portfolio/Cluj.jpg 1x, images/portfolio/Cluj@2x.jpg 2x" alt="">
                                </a>
                            </div>
                            <br>
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Cluj Napoca
                                </h3>
                                <p class="item-folio__cat">
                                    Romania
                                </p>
                            </div>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/Mioveni.jpg" class="thumb-link" title="Guitarist" data-size="500x500">
                                    <img src="images/portfolio/Mioveni.jpg" 
                                         srcset="images/portfolio/Mioveni.jpg 1x, images/portfolio/Mioveni@2x.jpg 2x" alt="">
                                </a>
                            </div>
                            <br>
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Mioveni
                                </h3>
                                <p class="item-folio__cat">
                                    Romania
                                </p>
                            </div>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div> 
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/Arad.jpg" class="thumb-link" title="Palmeira" data-size="500x500">
                                    <img src="images/portfolio/Arad.jpg"
                                         srcset="images/portfolio/Arad.jpg 1x, images/portfolio/Arad@2x.jpg 2x" alt="">
                                </a>
                            </div>
                            <br>
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Arad
                                </h3>
                                <p class="item-folio__cat">
                                   Romania
                                </p>
                            </div>
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div> 
                </div> 
            </div>
        </div> 
    </section> <!-- end s-works -->

    <?php include("phpCode/pause.php"); ?>

    <!-- clients
    ================================================== -->
    <section id='create/login' class="s-contact">
        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">CREATE/LOGIN</h3>
            </div>
        </div>
        <div class="row contact-content" data-aos="fade-up">
            <div class="contact-primary" style="width: 100%">
                <div class ="row">
                        <div class="login-box">
	                        <div class="login-snip">
		                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                                <label for="tab-1" class="tab" style="margin-right: 257px;">Login</label>
                                <input id="tab-2" type="radio" name="tab" class="sign-up">
                                <label for="tab-2" class="tab">Create</label>
		                        <div class="login-space">
                                 <div class="login">
                                    <form name="LoginAccont" id="LoginAccont" method="post" action="" novalidate="novalidate">
                                            <fieldset>
                                                <br>
                                            <div class="form-field">
                                                <input name="name" type="text" id="name" placeholder="Your Name" value="" required minlength="2"  aria-required="true" class="full-width">
                                            </div>
                                            <div class="form-field">
                                                <input  name="password" type="password" id="password" placeholder="Your Password" required value="" minlength="2" aria-required="true" class="full-width">
                                            </div>
                                            <br><br><br><br><br><br><br><br><br><br><br><br>
                                            <div class="form-field">
                                                <input  class="full-width btn--primary" type="submit" value="Submite" name="submite2">
                                            </div>
                                            </fieldset>
                                        </form>
                                        <?php include('phpCode/loginAccont.php');?>
			                        </div>
			                        <div class="sign-up-form">
                                        <form name="CreateAccont" id="CreateAccont" method="post" action="" novalidate="novalidate">
                                            <fieldset>
                                                <br>
                                                 <div class="form-field">
                                                <input name="name" type="text" id="name" placeholder="Your Name" value="" minlength="2" required  aria-required="true" class="full-width">
                                                </div>
                                                <div class="form-field">
                                                    <input name="email" type="text" id="email" placeholder="Your Email" value="" minlength="2" required  aria-required="true" class="full-width" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                                                </div>
                                                <div class="form-field">
                                                    <input  name="password" type="password" id="password" placeholder="Your Password" value="" required minlength="2"  aria-required="true" class="full-width">
                                                </div>
                                                <div class="form-field">
                                                    <input   name="tel" type="tel" id="tel" placeholder="Your Phone" value="" minlength="10" maxlength="10" required aria-required="true" class="full-width">
                                                </div>
                                                <br><br><br><br><br><br><br>
                                                <div class="form-field">
                                                    <input  class="full-width btn--primary" type="submit" value="Submite" name="submite1">
                                                </div>
                                            </fieldset>
                                            <?php include('phpCode/createAccont.php');?>
                                        </form>
			                        </div>
		                        </div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br><br><br>
    </section> <!-- end s-clients -->

    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">ABOUT US</h3>
            </div>
        </div>
        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                There is a new way to get around the city. Fun, convenient and easy to use, electric scooters, classic bikes or 
                    electric bikes are available on our website.
                </p>
            </div>
        </div>
       <?php include('phpCode/numberProduct.php');?>
    </section>

    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

    <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Contact US</h3>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            <div class="contact-primary">
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
            </div>

            <div class="contact-secondary">
                <div class="contact-info">
                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>
                    <div class="cinfo">
                        <h5>Where to Find Us</h5>
                        <p>
                            Romania<br>
                            Pitesti, Arges<br>
                            117660
                        </p>
                    </div>
                    <div class="cinfo">
                        <h5>Email Us At</h5>
                        <p>
                            IorTech@yahoo.com<br>
                            IorTech@gmail.com
                        </p>
                    </div>
                    <div class="cinfo">
                        <h5>Call Us At</h5>
                        <p>
                            Phone: +40 760 0007<br>
                            Mobile: +40 760 0007<br>
                            Fax: +40 760 0007
                        </p>
                    </div>
                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->
        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->


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
