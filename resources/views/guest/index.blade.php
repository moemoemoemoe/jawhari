<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from inspirythemes.biz/html-templates/cream/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2017 08:29:42 GMT -->
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

    <link rel='stylesheet' id='woocommerce-layout-css'  href='css/woocommerce-layout18f6.css?ver=2.4.12' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='css/woocommerce-smallscreen18f6.css?ver=2.4.12' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='css/woocommerce18f6.css?ver=2.4.12' type='text/css' media='all' />

    <link rel='stylesheet' id='bootstrap-css'  href='css/bootstrape7f0.css?ver=1.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css'  href='js/flexslider/flexslider3601.css?ver=2.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css'  href='js/carousel/owl.carousel8a28.css?ver=1.24' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='css/font-awesomefa0c.css?ver=4.0.3' type='text/css' media='all' />
    <link rel='stylesheet' id='selectric-css'  href='css/selectric5152.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='image-light-box-css-css'  href='js/image-lightbox/image-light-box5152.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='meanmenu-css'  href='css/meanmenu1717.css?ver=2.0.6' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-tables-css'  href='css/responsive-tables6b25.css?ver=2.1.4' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'  href='css/animate5152.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css'  href='css/maine7f0.css?ver=1.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='parent-custom-css'  href='css/custom5152.css?ver=1.0' type='text/css' media='all' />

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

<div class="home-slider fadeInUp ">
    <div class="flexslider loading">
        <ul class="slides">
            <li>
                <img src="images/temp-images/slide-1-flex.jpg" alt="Classic Vanilla Cone"/>

                <div class="slide-description container ">

                    <h2>Classic Vanilla Cone</h2>

                    <div class="separator"></div>

                    <p>Lorem ipsum dolor sit amet consectetuer adipiscing elie sed diam </p>

                

                </div>
            </li>
            <li>
                <img src="images/temp-images/slide-2-flex.jpg" alt="Amazing Waffle Cone"/>

                <div class="slide-description container ">

                    <h2>Amazing Waffle Cone</h2>

                    <div class="separator"></div>

                    <p>Lorem ipsum dolor sit amet consectetuer adipiscing elie sed</p>

                

                </div>
            </li>
        </ul>
    </div>
</div>
<section class="home-services-section clearfix">


    <div class="section-top" style="background-color: #64c576">

        <div class="container" style="background-color: #64c576">

            <header class="section-header" style="background-color: #64c576">

                <h2  class="section-title fade-in-up">Why Jawhari</h2><p class="fade-in-up " style="color: #fff">Features section is flexible to handle any number of features</p>
            </header>

        </div>

    </div>


    <div class="section-bottom">

        <div class="container">

            <div class="row">

                <article class="service col-md-3 col-sm-6 col-xs-12 fade-in-left ">
                    <div class="img-frame">
                        <figure>
                            <a href="#elegant-design" title="Elegant Designs"><img src="images/temp-images/feature-1.png" alt="Elegant Designs"/></a>                                    </figure>
                    </div>
                    <h3><a href="#elegant-design" title="Elegant Designs">Elegant Designs</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit, Duis autem vel eum iriure dolor in hendrerit</p>
                </article>
                <article class="service col-md-3 col-sm-6 col-xs-12 fade-in-up ">
                    <div class="img-frame">
                        <figure>
                            <a href="#ice-cream-delicacy" title="Ice Cream Delicacy">
                                <img src="images/temp-images/feature-2.png" alt="Ice Cream Delicacy"/></a>                                    </figure>
                    </div>
                    <h3><a href="#ice-cream-delicacy" title="Ice Cream Delicacy">Ice Cream Delicacy</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit, Duis autem vel eum iriure dolor in hendrerit</p>
                </article>
                <div class="clearfix visible-sm"></div>
                <article class="service col-md-3 col-sm-6 col-xs-12 fade-in-up ">
                    <div class="img-frame">
                        <figure>
                            <a href="#enriched-taste" title=" Enriched Taste">
                                <img src="images/temp-images/feature-3.png" alt=" Enriched Taste"/></a>                                    </figure>
                    </div>
                    <h3><a href="#enriched-taste" title=" Enriched Taste"> Enriched Taste</a></h3><p>Lorem ipsum dolor sit amet consectetuer adipiscing elit, Duis autem vel eum iriure dolor in hendrerit</p>
                </article>
                <article class="service col-md-3 col-sm-6 col-xs-12 fade-in-right ">
                    <div class="img-frame">
                        <figure>
                            <a href="#home-delivery" title="Home Delivery"><img src="images/temp-images/feature-4.png" alt="Home Delivery"/></a>
                        </figure>
                    </div>
                    <h3><a href="#home-delivery" title="Home Delivery">Home Delivery</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit, Duis autem vel eum iriure dolor in hendrerit</p>
                </article>
                <div class="clearfix visible-lg"></div>
                <div class="clearfix visible-md"></div>
                <div class="clearfix visible-sm"></div>
            </div>
        </div>
    </div>

</section>

<section class="home-work-section clearfix">

    <div class="container">
        <header class="section-header">
            <h2 class="section-title fade-in-up " id="works">اعمالنا</h2>
            <p class="fade-in-up ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
        </header>
    </div>


    <div class="carousel-wrapper">
        <div class="work-items-carousel fade-in-up ">
        @foreach($articles as $article)
            <div class="work-snippet">
                <article class="clearfix">
                    <img src="{{asset('uploads/articles/'.$article->image_url_original)}}" alt="Various Cupcakes Designs"/>
                    <div class="overly" style="text-align: center;padding-top: 4em">
                        <h4><a href="#">{{$article->title}}</a></h4>
                       
                        <a class="preview-icon" data-imagelightbox="lightbox" href="{{asset('uploads/articles/'.$article->image_url_original)}}"><i class="fa fa-search "></i></a>
                      <a class="link-icon" href="{{route('singlearticle', $article->id)}}"><i class="fa fa-link"></i></a>
                    </div>
                </article>
               
            </div>
     @endforeach
        </div>
    </div>

</section>
<section class="home-testimonial-section">
    
</section>
<div class="service-plans">

    <div class="container">
        <header class="section-header">
            <h2 class="section-title fade-in-up " id="services">خدماتنا</h2>
            <p class="fade-in-up ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
        </header>
    </div>

    <div class="container">

        <div class="row">
        @foreach($services as $service)
            <section class="col-md-4 col-sm-6 col-xs-12 fade-in-left ">
                <div class="image-container">
                    <a href="#" title="Lorem ipsum dolor">
                        <img src="{{asset('uploads/services/'.$service->image_url_original)}}" alt="Lorem ipsum dolor"/></a>
                </div>
                <h3 class="title"><a href="#" title="Lorem ipsum dolor">{{$service->title}}</a></h3>
                <p>{{$service->content}}</p>
            </section>
@endforeach
        

            <div class="clearfix visible-lg"></div>
            <div class="clearfix visible-md"></div>

        </div>

    </div>

</div><!-- end of services section -->


<section class="home-blog-section clearfix">

    <div class="container">

        <header class="section-header">
            <h2 class="section-title" id="news">آخر الأخبار</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
        </header>
        <div id="blog-posts-container">

            <div class="row blog-items">
@foreach($works as $work)
                <div class="item col-xs-6 col-sm-6 col-md-4 col-lg-4">

                    <article class=" status-publish format-gallery has-post-thumbnail hentry category-recipes post_format-post-format-gallery">

                        <div class="slider-gallery-type-post">
                            <ul class="slides">
                                <li>
                                    <a data-imagelightbox="gallery" href="{{asset('uploads/works/'.$work->image_url_original)}}" title="Standard Post Format with Featured Image">
                                        <img src="{{asset('uploads/works/'.$work->image_url_original)}}" alt="Home BLog Img">
                                    </a>
                                </li>
                                
                                </li>
                            </ul>
                        </div>
                        <div class="wrapper">

                            <header class="entry-header">
                                <h3 class="entry-title"><a href="gallery-post-format.html" rel="bookmark">{{$work->title}}</a></h3>
                                <div class="entry-meta post-meta">
                        <span class="byline">
                            
                        </span>
                       
                                </div>
                            </header>

                            <div class="entry-summary entry-content">
                                <p>{{$work->content}}</p>
                            </div>


                        </div>

                    </article>

                </div>
               
              @endforeach
               
           
             
             
            </div>

        </div>

    </div>

</section>



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
<script type='text/javascript' src='js/jqueryc1d8.js?ver=1.11.3'></script>
<script type='text/javascript' src='js/jquery-migrate1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='js/modernizr.custom61da.js?ver=2.6.2'></script>
<script type='text/javascript' src='js/bootstrap19ce.js?ver=3.0.3'></script>
<script type='text/javascript' src='js/flexslider/jquery.flexslider-min605a.js?ver=2.2.2'></script>
<script type='text/javascript' src='js/carousel/owl.carousel.minc43a.js?ver=1.31'></script>
<script type='text/javascript' src='js/jquery.appear2d16.js?ver=0.3.3'></script>
<script type='text/javascript' src='js/jquery.hoverdir5152.js?ver=1.0'></script>
<script type='text/javascript' src='js/image-lightbox/imagelightbox5152.js?ver=1.0'></script>
<script type='text/javascript' src='js/jquery.isotope.mind5f7.js?ver=2.0'></script>
<script type='text/javascript' src='js/jquery.validate.min90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='js/jquery.selectric.min7d4c.js?ver=1.7.0'></script>
<script type='text/javascript' src='js/jquery.transite2dc.js?ver=0.9.9'></script>
<script type='text/javascript' src='js/jquery.meanmenu.min1717.js?ver=2.0.6'></script>
<script type='text/javascript' src='js/custome7f0.js?ver=1.3.1'></script>
</body>

<!-- Mirrored from inspirythemes.biz/html-templates/cream/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2017 08:32:07 GMT -->
</html>
