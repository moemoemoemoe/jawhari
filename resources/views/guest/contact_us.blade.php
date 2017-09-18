<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from inspirythemes.biz/html-templates/cream/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2017 08:33:12 GMT -->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">

    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />

    <title>Home &#8211; Cream</title>

    <link rel='stylesheet' id='google-open-sans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C700italic%2C800italic%2C400%2C300%2C600%2C700%2C800&amp;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Cgreek%2Cvietnamese%2Clatin-ext%2Ccyrillic&amp;ver=4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='google-lily-script-one-css'  href='http://fonts.googleapis.com/css?family=Lily+Script+One&amp;subset=latin%2Clatin-ext&amp;ver=4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='google-Leckerli-one-css'  href='http://fonts.googleapis.com/css?family=Leckerli+One&amp;ver=4.4' type='text/css' media='all' />

    <link rel='stylesheet' id='woocommerce-layout-css'  href='http://localhost/jawhariseets/public/css/woocommerce-layout18f6.css?ver=2.4.12' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='http://localhost/jawhariseets/public/css/woocommerce-smallscreen18f6.css?ver=2.4.12' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='http://localhost/jawhariseets/public/css/woocommerce18f6.css?ver=2.4.12' type='text/css' media='all' />

    <link rel='stylesheet' id='bootstrap-css'  href='http://localhost/jawhariseets/public/css/bootstrape7f0.css?ver=1.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css'  href='http://localhost/jawhariseets/public/js/flexslider/flexslider3601.css?ver=2.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css'  href='http://localhost/jawhariseets/public/js/carousel/owl.carousel8a28.css?ver=1.24' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='http://localhost/jawhariseets/public/css/font-awesomefa0c.css?ver=4.0.3' type='text/css' media='all' />
    <link rel='stylesheet' id='selectric-css'  href='http://localhost/jawhariseets/public/css/selectric5152.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='image-light-box-css-css'  href='http://localhost/jawhariseets/public/js/image-lightbox/image-light-box5152.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='meanmenu-css'  href='http://localhost/jawhariseets/public/css/meanmenu1717.css?ver=2.0.6' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-tables-css'  href='http://localhost/jawhariseets/public/css/responsive-tables6b25.css?ver=2.1.4' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'  href='http://localhost/jawhariseets/public/css/animate5152.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css'  href='http://localhost/jawhariseets/public/css/maine7f0.css?ver=1.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='parent-custom-css'  href='http://localhost/jawhariseets/public/css/custom5152.css?ver=1.0' type='text/css' media='all' />


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="">

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<!-- Start of Header Wrapper -->
<div class="header-wrapper" style="background-color: #107122">

    <header class="header container fadeInDown " style="background-color: #107122">

        <div class="logo-wrapper">
            <div class="logo">
                <h1 class="text-logo">
                    <a href="{{route('indexpage')}}" title="Cream" style="color: #fff">
                       <img src="{{asset('images/icon.PNG')}}" width="100px">
                    </a>
                </h1>
               
            </div>
        </div>


     


        <!-- product search form -->
       

        <!-- Main Menu -->
        <div class="main-menu-wrapper">
            <nav id="nav" class="main-menu nav-collapse clearfix">
          <ul class="clearfix">
                    <li class="current-menu-item"><a href="{{route('contact')}}" style="color: #fff">تواصل معنا</a>
                  
                </li>
                    <li><a href="#news" style="color: #fff">أخر الأخبار</a>
                        
                    </li>
                    <li><a href="#services" style="color: #fff">خدماتنا</a></li>
                    <li><a href="#works" style="color: #fff">اعمالنا</a>
                       
                    </li>
                    <li><a  style="color: #fff">الفئات</a>
                        <ul class="sub-menu">
                        @foreach($cats as $cat)
                            <li><a href="{{route('categories_articles', $cat->id)}}">{{$cat->cat_name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('indexpage')}}" style="color: #fff">الرئيسية</a> </li>
                </ul>
            </nav>
        </div>


        <div class="clearfix"></div>

        <!-- product search form for mobile screens -->
      
    </header>

    <div class="header-border-bottom"></div>

</div>
<!-- End of Header Wrapper -->

<
<!-- start of page content -->
<div class="page-content container">

    <div class="row">
        <div class="main col-md-9" role="main">
            <section id="contact-form">
                <h2 class="form-heading">Send a Message</h2>
                <form class="contact-form clearfix" action="#" method="post">
                <div class="row">
                    <p class="group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="required" title="* Please provide your name" />
                    </p>
                    <p class="group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="email required" title="* Please provide a valid email address" />
                    </p>
                    <p class="group">
                        <label for="number">Phone</label>
                        <input type="text" name="number" id="number" class="phone digits" title="* Please provide only digits as phone number" />
                    </p>
                </div>
                <p>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="required" cols="30" rows="5" title="* Please provide your message"></textarea>
                    <br/>
                    <em>All HTML tags will be removed.</em>
                </p>
                <p>
                    <input type="submit" value="SUBMIT" id="submit" name="submit">
                    <img src="images/ajax-loader.gif" id="contact-loader" alt="Loading...">
                </p>
            </form>
                <div class="error-container"></div>
                <div id="message-sent"></div>
            </section>
        </div>
        <!-- start of sidebar -->
        <aside class="sidebar col-md-3" role="complementary">
            <section class="widget  contact-details-widget">
                <h3 class="title">Address</h3>
                <div class="wrapper">
                <address><i class="fa fa-map-marker"></i>3895 NW 107TH AVE,
                    MIAMI, UNITED STATES,
                    465601</address>
                    <div class="phone-numbers">
                <span><i class="fa fa-phone"></i>+1 800 559 6580</span><span><i class="fa fa-phone"></i>+1 800 559 6581</span><span><i class="fa fa-fax"></i> +1 959 603 6035</span>
                    </div>
            </div>
            </section>
        </aside>
        <!-- end of sidebar -->
    </div>

</div><!-- end of page content -->


<!-- Start Footer -->
<footer class="footer">

    <div class="footer-top container">

        <div class="row">

            <div class="col-lg-8 col-xs-12">

             

                <div class="contact-details clearfix fade-in-left ">
                    <address>
                        <i class="fa fa-home"></i>3895 NW 107th Ave, Miami, United States, 465601
                    </address>
                    <a class="phone-number" href="tel:18005551234">
                        <i class="fa fa-mobile"></i>1-800-555-1234</a>
                    <span class="email">
                        <i class="fa fa-envelope-o"></i>
                        <a href="mailto:&#105;&#110;f&#111;&#64;y&#111;u&#114;w&#101;b&#115;&#105;&#116;&#101;&#46;c&#111;m">inf&#111;&#64;you&#114;&#119;ebs&#105;&#116;&#101;&#46;&#99;om</a></span>
                </div>
            </div>

            <div class="col-lg-4 col-xs-12">
                <div class="social-networks fade-in-right ">
                    <p class="invitation">Get Social With Us</p>
                    <ul class="social_networks clearfix">
                        <li>
                            <a target="_blank" href="#"><i class="fa fa-twitter fa-lg"></i></a>
                        </li>
                        <li><a target="_blank" href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-instagram fa-lg"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-youtube fa-lg"></i></a></li>
                        <li><a target="_blank" href="skype:inspirythemes?add"><i class="fa fa-skype fa-lg"></i></a></li>
                        <li><a target="_blank" href="#rss"><i class="fa fa-rss fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom fadeInUp ">
        <div class="container">
            <p class="copyright-text">© Copyright 2017  All Rights Reserved.</p><a href="#top" id="scroll-top"></a>
        </div>
    </div>

</footer><!-- End Footer -->


<script type='text/javascript' id='quick-js'>

</script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/jqueryc1d8.js?ver=1.11.3'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/jquery-migrate1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/modernizr.custom61da.js?ver=2.6.2'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/bootstrap19ce.js?ver=3.0.3'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/flexslider/jquery.flexslider-min605a.js?ver=2.2.2'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/carousel/owl.carousel.minc43a.js?ver=1.31'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/jquery.appear2d16.js?ver=0.3.3'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/jquery.hoverdir5152.js?ver=1.0'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/image-lightbox/imagelightbox5152.js?ver=1.0'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/jquery.isotope.mind5f7.js?ver=2.0'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/jquery.validate.min90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/jquery.selectric.min7d4c.js?ver=1.7.0'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/jquery.transite2dc.js?ver=0.9.9'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/jquery.meanmenu.min1717.js?ver=2.0.6'></script>
<script type='text/javascript' src='http://localhost/jawhariseets/public/js/custome7f0.js?ver=1.3.1'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true&amp;ver=4.4'></script>

</body>

<!-- Mirrored from inspirythemes.biz/html-templates/cream/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2017 08:33:12 GMT -->
</html>
