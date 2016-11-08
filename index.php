﻿<?php
require __DIR__ . '/vendor/autoload.php';

$app_lang = ['en', 'ru'];

$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if(isset($_GET['lang'])){
    $new_lang = $_GET['lang'];
    if($new_lang != null && in_array($new_lang, $app_lang)){
        $language = $new_lang;
    }
}

putenv("LANG=$language");
setlocale(LC_ALL, $language);

bindtextdomain($language, "./locale");
textdomain($language);


?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>

    <!-- METAS
  ================================================== -->
    <meta charset="utf-8">
    <title>Albumist</title>
    <meta name="description" content="Albumist | Ultimate App">
    <meta name="author" content="Ruslana Ryabchuk">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FAVICONS
  ================================================== -->
    <link rel="shortcut icon" href="img/Untitled-123.png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="css/appster.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css">
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Quicksand" rel="stylesheet">
    <script>
        function changeLang(lang){
            window.location = "?lang=".concat(lang);
        }
    </script>
</head>
<body>
<!-- Primary Page Layout
================================================== -->

<!-- Site Wrapper -->
<div class="site-wrapper">


    <!-- Back Top -->
    <i class="fa fa-chevron-up back-top downscaled"></i>

    <!-- Header -->
    <header class="header" id="header" style="height: 60px; background:#38c0d6 ">

        <!-- Logo Area -->
        <div class="logo-area" ></div>

        <!-- Container -->
        <div class="container">

            <!-- Logo & Mobile -->
            <div class="four columns" id="navbar">
                <div class="logo" style="height: 60px; background: #FFFFFF; padding: 0px !important;"  >
                    <img src="img/LOGO%20(3).png" alt="Albumist a Minimal App Selling Landing Page" />
                </div>
                <i class="fa fa-align-justify mobile-menu" style="color: #38c0d6; margin-top: 23px; margin-right: 8px"></i>
            </div>

            <!-- Navigation -->
            <div class="twelve columns">
                <nav class="nav">
                    <ul class="menu">
                        <li><a href="#"><?php echo _("Home")?></a></li>
                        <li><a href="#showcase"><?php echo _("Features")?></a></li>
                        <li><a href="#shots"><?php echo _("Shots")?></a></li>
                        <li><a href="#download"><?php echo _("Download")?></a></li>
                        <li class="lang"><a href="#" onclick="changeLang('ru');"><?php echo _("ru")?></a>
                            <a href="#" onclick="changeLang('en');"><?php echo _("en")?></a></li>
                    </ul>
                </nav>
            </div>

        </div><!-- / Container -->

    </header><!-- / Header -->



    <!-- Slider -->
    <section class="slider" id="slider">

        <!-- Container -->
        <div class="container">

            <!-- Slide Content -->
            <div class="slide-content">
                <h1 class="wow fadeInDownBig"><?php echo _("Albumist - stay in touch")?></h1>
                <h2 class="wow fadeInDownBig"><?php echo _("with your friends")?>  </h2>
                <p> <?php echo _("Albumist is a free online photo sharing and social application.
                    Share your photos and follow the updates of celebrities and other people of your interest.
                    Albumist is a perfect application to stay in touch with your friends and
                    share your life moments. With great add-ons like photo puzzles and crosswords, your friends will be
                    challenged if they are to see your the most recent updates!")?>
                </p>
                <div class="button-container">
                    <a href="#call-to-action" class="button color"><?php echo _("Download the app")?></a>
                </div>
            </div>

            <!-- Slide Model -->
            <div class="slide-model">
                <img class="slide-model-a wow fadeInUpBig" src="img/slider/Login.png" alt="App Product Mockup">
                <img class="slide-model-b wow fadeInUpBig" src="img/slider/In.png" alt="App Product Mockup">
            </div>

        </div><!-- / Container -->

    </section><!-- / Slider -->


    <!-- Features -->
    <section class="features" id="features">

        <!-- Container -->
        <div class="container">

            <!-- Icon Box -->
            <div class="one-third column feature-icon-box wow fadeInUp">
                <i class="fa fa-cog"></i>
                <h3><?php echo _("High Portability")?></h3>
                <p><?php echo _("By phone, by tablet or by computer - you can use it anywhere")?></p>
            </div>

            <!-- Icon Box -->
            <div class="one-third column feature-icon-box wow fadeInUp">
                <i class="fa fa-cloud-download"></i>
                <h3><?php echo _("Cloud Upload Support")?></h3>
                <p><?php echo _("Gallery support. Fast and easy to use")?></p>
            </div>

            <!-- Icon Box -->
            <div class="one-third column feature-icon-box wow fadeInUp">
                <i class="fa fa-user-plus "></i>
                <h3><?php echo _("New People")?></h3>
                <p><?php echo _("It is so easy to find a new acquaintance")?> </p>
            </div>

            <div class="clear"></div>

        </div>

    </section><!-- / Features -->



    <!-- Showcase -->
    <section class="showcase dark first" id="showcase">

        <!-- Container -->
        <div class="container">

            <!-- Contents -->
            <div class="nine columns showcase-content">
                <h1><?php echo _("Friends")?><span style="color: #dad7d7"> <?php echo _("- simple search")?></span></h1>
                <div class="title-bullet"><span></span></div>
                <p><?php echo _("Like someone's profile? Just add this person to a list of your friends, keep in touch with him and don't miss his new publications!")?>
                    <br><?php echo _("Don't worry about difference of your mobile devices. Albumist is supported on iOS and Android")?></p>
                <div class="os-icons">
                    <i class="fa fa-apple"></i>
                    <i class="fa fa-android"></i>
                </div>
            </div>

            <!-- Model -->
            <div class="seven columns showcase-model">
                <img class="wow fadeInUpBig" src="img/showcase/Planshet1.png" alt="App Showcase Image" />
            </div>

        </div><!-- / Container -->

    </section><!-- / Showcase -->


    <!-- Showcase -->
    <section class="showcase second">

        <!-- Container -->
        <div class="container">

            <!-- Model -->
            <div class="seven columns showcase-model">
                <img class="wow fadeInLeftBig" src="img/showcase/Planshet3.png" alt="App Showcase Image"/>
            </div>

            <!-- Contents -->
            <div class="nine columns showcase-content">

                <h1><?php echo _("Chat")?> <span style="color: #dad7d7"><?php echo _("in live mode")?></span></h1>
                <div class="title-bullet"><span></span> <?php echo _("It is so simple to get a good mood!
                    <br> Just start a new chat with your friend!
                    Discuss topical issues, share news.
                    <br> Also look for answers and tips for clues puzzles")?><p>
                </div>

            </div>

        </div><!-- / Container -->

    </section><!-- / Showcase -->



    <!-- Showcase -->
    <section class="showcase dark third">

        <!-- Container -->
        <div class="container">

            <!-- Contents -->
            <div class="nine columns showcase-content">

                <h1><?php echo _("Sharing")?><span style="color: #dad7d7"><?php echo _("photo")?></span></h1>
                <div class="title-bullet"><span></span></div>
                <p><?php echo _("Share photos with friends with just one click! Albumist offers unusual ways of presenting pictures.
                    You can encrypt your picture. Only attentive friends will receive a reward in the representation of your encrypted photos
                    <br>You can use two types of encryption:")?></p>
                <ul class="check-list">
                    <li><i class="fa fa-check-circle"></i><?php echo _("crosswords")?></li>
                    <li><i class="fa fa-check-circle"></i><?php echo _("puzzles")?></li>
                </ul>

            </div>

            <!-- Model -->
            <div class="seven columns showcase-model">
                <img class="wow fadeInUpBig" src="img/showcase/Planshet2.png" alt="App Showcase Image" />
            </div>

        </div><!-- / Container -->

    </section><!-- / Showcase -->



    <!-- Shots -->
    <section class="shots" id="shots">

        <!-- Container -->
        <div class="container">

            <!-- Section Title -->
            <div class="sixteen columns section-title">
                <h1><?php echo _("Screen shots")?></h1>
                <div class="title-bullet"><span></span></div>
            </div>

            <!-- Screenshot -->
            <div class="four columns">
                <div class="screenshot wow bounceIn" data-wow-delay="0.5s">
                    <img src="img/shots/screenshot_01.jpg" alt="App Screenshot" />
                    <div class="overlay"></div>
                    <i class="fa fa-plus screenshot-zoom"></i>
                </div>
            </div>

            <!-- Screenshot -->
            <div class="four columns">
                <div class="screenshot wow bounceIn" data-wow-delay="1s">
                    <img src="img/shots/screenshot_02.jpg" alt="App Screenshot" />
                    <div class="overlay"></div>
                    <i class="fa fa-plus screenshot-zoom"></i>
                </div>
            </div>

            <!-- Screenshot -->
            <div class="four columns">
                <div class="screenshot wow bounceIn" data-wow-delay="1.5s">
                    <img src="img/shots/screenshot_03.jpg" alt="App Screenshot" />
                    <div class="overlay"></div>
                    <i class="fa fa-plus screenshot-zoom"></i>
                </div>
            </div>




            <!-- Screenshot -->
            <div class="four columns">
                <div class="screenshot wow bounceIn" data-wow-delay="1.5s">
                    <img src="img/shots/screenshot_04.jpg" alt="App Screenshot" />
                    <div class="overlay"></div>
                    <i class="fa fa-plus screenshot-zoom"></i>
                </div>
            </div>

        </div><!-- / Container -->

        <!-- Lightbox -->
        <div class="lightbox">
			<span class="lightbox-close">
				<i class="fa fa-times"></i>
			</span>
            <img src="img/shots/screenshot_01.jpg" alt="App Screenshot"  class="lightbox-shot"/>
        </div>

        <!-- Lightbox Overlay-->
        <div class="lightbox-overlay"></div>

    </section><!-- / Shots -->














    <!-- Call to Action -->
    <section class="download" id="download" style=" background-image: url(img/tile.jpg);">

        <!-- Overlay -->
        <div class="overlay" style="background-image: url(img/tile.jpg);"></div>

        <!-- Container -->
        <div class="container">

            <div class="sixteen columns download-content">
                <h1 style="color: #38c0d6"><?php echo _("Like this app?")?></h1>
                <div class="but">
                    <?php if($language =="ru"){ ?>
                        <a href="https://itunes.apple.com/ru/app/albumist/id1128079856"><img src="img/buttons/Untitled-3.png" alt=""></a>
                        <a href="https://play.google.com/store/apps/details?id=com.albumistapp" class="secBut"><img src="img/buttons/Untitled-4.png" alt=""></a>
                    <?php } else { ?>
                        <a href="https://itunes.apple.com/ru/app/albumist/id1128079856"><img src="img/buttons/Untitled-1.png" alt=""></a>
                        <a href="https://play.google.com/store/apps/details?id=com.albumistapp" class="secBut"><img src="img/buttons/Untitled-2.png" alt=""></a>
                    <?php } ?>
                </div>

            </div>

        </div><!-- / Container -->

    </section><!-- / Call to Action -->

    <section class="money">

        <!-- Container -->
        <div class="container">


        </div><!-- / Container -->

    </section><!-- / Showcase -->


    <!-- Socials -->
    <section class="social-networks" id="social-networks">

        <!-- Container -->
        <div class="container">

            <!-- Social Links -->
            <div class="sixteen columns">
                <ul class="social-network-links">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                    <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></i></a></li>

                </ul>
            </div>

        </div><!-- / Container -->

    </section><!-- / Socials -->



    <!-- Subscribe -->
    <!--<section class="subscribe" id="subscribe">

        &lt;!&ndash; Container &ndash;&gt;
        <div class="container">

            &lt;!&ndash; Mailchimp Subscribe Form
            <div class="sixteen columns subscribe-form">
                <h2>Join our mailing list</h2>
                <div id="mc_embed_signup">
                    <form action="..." method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <input type="email" value="" name="EMAIL" class="email textfield" id="mce-EMAIL" placeholder="Type your email address" required>
                        <input type="submit" value="Subscribe Now" name="subscribe" id="mc-embedded-subscribe" class="button color">
                    </form>
                </div>
            </div> &ndash;&gt;

            &lt;!&ndash; Basic Contact Form &ndash;&gt;
            <div class="sixteen columns contact-form">
                <h2>Get in touch with us</h2>
                <form method="post" action="mailer.php" id="cform">
                    <input type="text" name="name" class="textfield" placeholder="Your name" required />
                    <input type="email" name="email" class="textfield" placeholder="Your email address" required />
                    <textarea name="message" class="textarea" placeholder="Your message" required></textarea>
                    <input type="submit" value="Send Message" class="button color" />
                </form>
                <div id="success"></div>
            </div>

        </div>&lt;!&ndash; / Container &ndash;&gt;

    </section>&lt;!&ndash; / Subscribe &ndash;&gt;-->


    <!-- Footer -->
    <footer class="footer" id="footer">

        <!-- Container -->
        <div class="container">

            <h6 class="copyright-text"><?php echo _("Albumist 2016 | All rights reserved.")?></h6>

        </div><!-- / Container -->

    </footer><!-- / Footer -->


</div><!-- / Site Wrapper -->

<!-- Javascript
================================================== -->
<script type="text/javascript" src="js/jquery.1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.loupe.min.js"></script>
<script type="text/javascript" src="js/tweetie.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/waypoints-sticky.min.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();

    $('.tweet').twittie();
</script>

<!--[if lt IE 10]>
<script type="text/javascript">
    $(document).ready(function(){

        $(".lightbox-close").click(function(){
            $(".lightbox, .lightbox-overlay").hide();
        });

        $(".feature-selector-buttons li").click(function(){
            $('.feature-selector-frame img').hide();
        });

    });
</script>
<![endif]-->

<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        var portfolio = (function() {
            var $container = $('#portfolio-wrapper');
            $select = $('#filters select');

            // initialize Isotope
            $container.isotope({
                // options...
                resizable: false, // disable normal resizing
                // set columnWidth to a percentage of container width
                masonry: { columnWidth: $container.width() / 12 }
            });

            // update columnWidth on window resize
            $(window).smartresize(function(){
                $container.isotope({
                    // update columnWidth to a percentage of container width
                    masonry: { columnWidth: $container.width() / 12 }
                });
            });


            $container.isotope({
                itemSelector : '.item'
            });

            $select.change(function() {
                var filters = $(this).val();

                $container.isotope({
                    filter: filters
                });
            });

            // Portfolio Filtering
            var $optionSets = $('#filters .option-set'),
                $optionLinks = $optionSets.find('a');

            $optionLinks.click(function(){
                var $this = $(this);
                // don't proceed if already selected
                if ( $this.hasClass('selected') ) {
                    return false;
                }
                var $optionSet = $this.parents('.option-set');
                $optionSet.find('.selected').removeClass('selected');
                $this.addClass('selected');

                // make option object dynamically, i.e. { filter: '.my-filter-class' }
                var options = {},
                    key = $optionSet.attr('data-option-key'),
                    value = $this.attr('data-option-value');
                // parse 'false' as false boolean
                value = value === 'false' ? false : value;
                options[ key ] = value;
                if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                    // changes in layout modes need extra logic
                    changeLayoutMode( $this, options )
                } else {
                    // otherwise, apply new options
                    $container.isotope( options );
                }
                return false;
            });

        });

        portfolio();
    });
</script>

<!-- End Document
================================================== -->
</body>
</html>
