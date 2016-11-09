<?php
$array = array(
    "Home"    => "Главная",
    "Features"    => "Особенности",
    "Shots"    => "Снимки",
    "Download"    => "Скачать",
    "ru"    => "ru",
    "en"    => "en",
    "Albumist - stay in touch"    => "Albumist - будь в курсе",
    "with your friends"    => "свежих новостей от друзей",
    "Share your photos and follow the updates of celebrities and other people of your interest.
                    Albumist is a perfect application to stay in touch with your friends and
                    share your life moments. With great add-ons like photo puzzles and crosswords, your friends will be
                    challenged if they are want to see your the most recent updates!"    => "Делитесь своими фотографиями, следите за обновлениями знаменитостей и других людей, которые интересуют Вас. Благодаря кроссвордам и ребусам, Вашим друзьям придется постараться, если они действительно хотят увидеть самые последние обновления!",
    "Download the app"    => "Загрузить приложение",
    "High Portability"    => "Высокая портативность",
    "By phone or by tablet - you can use it anywhere"    => "Вы можете открыть приложение как на телефоне, так и на планшете ",
    "Cloud Upload Support"    => "Поддержка \"облака\"",
    "Gallery support. Fast and easy to use"    => "Быстрая связь с галереей. Удобно в использовании",
    "New People"    => "Новые люди",
    "It is so easy to find a new acquaintance"    => "Теперь найти новое знакомство — так просто!",
    "Friends"    => "Друзья",
    "- simple search"    => "— простой поиск",
    "Like someone's profile? Just add this person to a list of your friends, keep in touch with him and don't miss his new publications!"    => "Понравился чей-то профиль? Просто добавьте этого человека в друзья, чтобы поддерживать с ним связь и не упускать его новые публикации!",
    "Don't worry about difference of your mobile devices. Albumist is supported on iOS and Android"    => "Не беспокойтесь о различии ваших девайсов. Albumist поддерживается как на  на iOS, так и на Android",
    "Chat"    => "Общение",
    "in live mode"    => "в живом режиме",
    "It is so simple to get a good mood!
                     Just start a new chat with your friend!
                    Discuss topical issues, share news.
                     Also look for answers and tips for clues puzzles"    => "Так просто поднять себе настроение!
Просто начните чат с другом. 
 Вы можете обсуждать проблемы, делиться новостями.
Также ищите ответы и подсказки для разгадок ребусов",
    "Sharing"    => "Обмен",
    "photo"    => "фотографиями",
    "Share photos with friends with just one click! Albumist offers unusual ways of presenting pictures.
                    You can encrypt your picture. Only attentive friends will receive a reward in the representation of your encrypted photos
                    You can use two types of encryption:"    => "Делитесь фотографиями с помощью одного клика! Albumist предлагает необычные способы публикации изображений. 
                    Вы можете зашифровать свою фотографию. И только внимательные друзья получат вознаграждение в виде вашего поста. Вы можете использовать два типа шифрования:",
    "crosswords"    => "кроссворды",
    "puzzles"    => "ребусы",
    "Screen shots"    => "Скриншоты",
    "Like this app?"    => "Понравилось приложение?",
    "Albumist 2016 | All rights reserved."    => "Albumist 2016 |  Все права защищены.",

);

$app_lang = ['en', 'ru'];

$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if(isset($_GET['lang'])){
    $new_lang = $_GET['lang'];
    if($new_lang != null && in_array($new_lang, $app_lang)){
        $language = $new_lang;
    }
}


/*putenv("LC_ALL=$language");
setlocale(LC_ALL, $language);

bindtextdomain($language, '/locale');
textdomain($language);
bind_textdomain_codeset($language, 'UTF-8');*/


function  getRuText($foo){
    global $language, $array;
    if($language == "ru"){
        return $array[$foo];
    } else {
        return $foo;
    }
}

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
                        <li><a href="#slider"><?php echo getRuText("Home")?></a></li>
                        <li><a href="#showcase"><?php echo getRuText("Features")?></a></li>
                        <li><a href="#shots"><?php echo getRuText("Shots")?></a></li>
                        <li><a href="#download"><?php echo getRuText("Download")?></a></li>
                        <li class="lang"><a href="#" onclick="changeLang('ru');"><?php echo getRuText("ru")?></a>
                            <a href="#" onclick="changeLang('en');"><?php echo getRuText("en")?></a></li>
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
                <h1 class="wow fadeInDownBig"><?php echo getRuText("Albumist - stay in touch")?></h1>
                <h2 class="wow fadeInDownBig"><?php echo getRuText("with your friends")?>  </h2>
                <p> <?php echo getRuText("Share your photos and follow the updates of celebrities and other people of your interest.
                    Albumist is a perfect application to stay in touch with your friends and
                    share your life moments. With great add-ons like photo puzzles and crosswords, your friends will be
                    challenged if they are want to see your the most recent updates!")?>
                </p>
                <div class="button-container">
                    <a href="#call-to-action" class="button color"><?php echo getRuText("Download the app")?></a>
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
                <h3><?php echo getRuText("High Portability")?></h3>
                <p><?php echo getRuText("By phone or by tablet - you can use it anywhere")?></p>
            </div>

            <!-- Icon Box -->
            <div class="one-third column feature-icon-box wow fadeInUp">
                <i class="fa fa-cloud-download"></i>
                <h3><?php echo getRuText("Cloud Upload Support")?></h3>
                <p><?php echo getRuText("Gallery support. Fast and easy to use")?></p>
            </div>

            <!-- Icon Box -->
            <div class="one-third column feature-icon-box wow fadeInUp">
                <i class="fa fa-user-plus "></i>
                <h3><?php echo getRuText("New People")?></h3>
                <p><?php echo getRuText("It is so easy to find a new acquaintance")?> </p>
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
                <h1><?php echo getRuText("Friends")?><span style="color: #dad7d7"> <?php echo getRuText("- simple search")?></span></h1>
                <div class="title-bullet"><span></span></div>
                <p><?php echo getRuText("Like someone's profile? Just add this person to a list of your friends, keep in touch with him and don't miss his new publications!")?>
                    <br><?php echo getRuText("Don't worry about difference of your mobile devices. Albumist is supported on iOS and Android")?></p>
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

                <h1><?php echo getRuText("Chat")?> <span style="color: #dad7d7"><?php echo getRuText("in live mode")?></span></h1>
                <div class="title-bullet"><span></span> <?php echo getRuText("It is so simple to get a good mood!
                     Just start a new chat with your friend!
                    Discuss topical issues, share news.
                     Also look for answers and tips for clues puzzles")?><p>
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

                <h1><?php echo getRuText("Sharing")?><span style="color: #dad7d7"><?php echo getRuText("photo")?></span></h1>
                <div class="title-bullet"><span></span></div>
                <p><?php echo getRuText("Share photos with friends with just one click! Albumist offers unusual ways of presenting pictures.
                    You can encrypt your picture. Only attentive friends will receive a reward in the representation of your encrypted photos
                    You can use two types of encryption:")?></p>
                <ul class="check-list">
                    <li><i class="fa fa-check-circle"></i><?php echo getRuText("crosswords")?></li>
                    <li><i class="fa fa-check-circle"></i><?php echo getRuText("puzzles")?></li>
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
                <h1><?php echo getRuText("Screen shots")?></h1>
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
                <h1 style="color: #38c0d6"><?php echo getRuText("Like this app?")?></h1>
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
<h1 style="text-align: center">money</h1>
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

            <h6 class="copyright-text"><?php echo getRuText("Albumist 2016 | All rights reserved.")?></h6>

        </div><!-- / Container -->

    </footer><!-- / Footer -->


</div><!-- / Site Wrapper -->

<!-- Javascript
================================================== -->
<script type="text/javascript" src="js/jquery.1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.loupe.min.js"></script>
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
