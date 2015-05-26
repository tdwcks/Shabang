<!doctype html>

<html class="no-js" lang="">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>The Whole Shabang! | Huddersfield</title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/scss/application.css.css">

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    </head>

    <body>

        <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->


        <?php include('includes/header.php'); ?>

        <article class="article-hero">



        </article> <!-- article-hero -->

        <article class="article-audio-player">

            <div class="layout-container">

                <audio id="js-jukebox">

                    <source id="js-jukebox-src" src="" type="audio/mpeg">

                    Sorry You need to upgrade your browser if you'd like to hear out tunes!

                </audio>

                <i id="js-jukebox-play" class="link-icon-style-two fa fa-play"></i>

                <div id="js-song-select" class="link-drop-down link-drop-down-container">

                    <span>Pick A Tune</span>

                    <ul class="link-drop-down-items">

                        <!-- Change to PHP in Production
                            $query = mysqli_query($localDB, "SELECT * FROM Products WHERE Type = 'MP3' ORDER BY NoofDownloads Desc LIMIT 5") or die(mysqli_error($localDB));
                            while($row = mysqli_fetch_assoc($query)) {
                                $title = $row['Title'];
                                echo '<li class="jukeboxsong"><a id="'.$row['ID'].'" href="shop/mp3/samples/'.$row['ID'].'.mp3">'.$title.'</a></li>';
                            }
                         --> 

                    </ul> <!-- link-drop-down-items -->

                </div> <!-- js-song-select -->

                <div class="element-jukebox-controls">

                    <div class="element-jukebox-bar">

                        <span id="js-jukebox-progress" class="element-jukebox-progress" style="width: 0%;"></span>

                    </div>

                    <span id="element-jukebox-timecode">0:00</span>

                    <span id="element-jukebox-duration">0:30</span>

                    <a id="js-jukebox-buy" class="link-button-style-one">Pick Song</a>

                </div>

            </div> <!-- layout-container -->

        </article> <!-- article-audio-player -->

        <article class="article-home-information colour-background-blue">

            <div class="layout-container">

                <div class="layout-span-three layout-shift-three">

                    <div class="image-container-circle">

                        <img alt="Kim Reuter and Russ Elias" src="img/">

                    </div> <!-- image-container-circle -->

                </div> <!-- layout-span-three -->

                <div class="layout-span-four layout-shift-one">

                    <p class="type-paragraph-large">

                        We are Kim Reuter and Russ Elias, Innovators in the field of excellent and accessible theatre, song, music, arts and drama for children with additional needs.

                    </p> <!-- type-paragraph-large -->

                    <a href="<?php echo $userPath; ?>whats_on.php" class="link-button-style-two colour-background-yellow">Learn More</a>

                </div> <!-- layout-span-four -->

            </div> <!-- layout-container -->

        </article> <!-- article-home-information -->

        <article class="article-home-shop">

            <div class="layout-container">

                <div class="element-centre-title">

                    <h2 class="type-title-style-one">Shabang! Shop</h2>

                    <p class="type-paragraph-centered">

                        Check out our fantastic range of resources available for you at home or at school.

                    </p> <!-- type-paragraph-centered -->

                    <a href="<?php echo $userPath; ?>shop.php" class="link-button-style-one colour-background-green">Go Shopping</a>

                </div> <!-- element-centre-title -->

                <div class="layout-span-four">

                    <div class="element-box-portrait colour-background-blue">

                        <div class="image-container-golden">

                            <img alt="Kim Reuter and Russ Elias" src="img/">

                        </div> <!-- image-container-golden -->

                        <div class="element-box-information">

                            <h3 class="type-title-style-one">Film: All at Sea</h3>

                            <p class="type-paragraph-left">A collection of 5 Tunes on a gardening theme. Played by your favourite horticulture experts Bud &amp; Blossom.</p>

                        </div> <!-- element-box-information -->

                        <div class="element-box-actions">

                            <span class="type-span-style-one">£12.99</span>

                            <a href="product.php?id=55" class="link-button-style-one colour-background-blue">View Film</a>

                        </div> <!-- element-box-actions -->

                    </div> <!-- element-box-portrait -->

                </div> <!-- layout-span-four -->

                <div class="layout-span-four">

                    <div class="element-box-portrait colour-background-orange">

                        <div class="image-container-golden">

                            <img alt="Kim Reuter and Russ Elias" src="img/">

                        </div> <!-- image-container-golden -->

                        <div class="element-box-information">

                            <h3 class="type-title-style-one">Film: All at Sea</h3>

                            <p class="type-paragraph-left">A collection of 5 Tunes on a gardening theme. Played by your favourite horticulture experts Bud &amp; Blossom.</p>

                        </div> <!-- element-box-information -->

                        <div class="element-box-actions">

                            <span class="type-span-style-one">£12.99</span>

                            <a href="product.php?id=55" class="link-button-style-one colour-background-orange">View Film</a>

                        </div> <!-- element-box-actions -->

                    </div> <!-- element-box-portrait -->

                </div> <!-- layout-span-four -->

                <div class="layout-span-four layout-column-right">

                    <div class="element-box-portrait colour-background-green">

                        <div class="image-container-golden">

                            <img alt="Kim Reuter and Russ Elias" src="img/">

                        </div> <!-- image-container-golden -->

                        <div class="element-box-information">

                            <h3 class="type-title-style-one">Film: All at Sea</h3>

                            <p class="type-paragraph-left">A collection of 5 Tunes on a gardening theme. Played by your favourite horticulture experts Bud &amp; Blossom.</p>

                        </div> <!-- element-box-information -->

                        <div class="element-box-actions">

                            <span class="type-span-style-one">£12.99</span>

                            <a href="product.php?id=55" class="link-button-style-one colour-background-green">View Film</a>

                        </div> <!-- element-box-actions -->

                    </div> <!-- element-box-portrait -->

                </div> <!-- layout-span-four -->

            </div> <!-- layout-container -->

        </article> <!-- article-home-shop -->

        <article class="article-home-characters">



        </articles> <!-- article-home-characters -->

        <article class="article-social-wall">

            <div class="layout-container">

                <div class="element-centre-title">

                    <h2 class="type-title-style-one">Social Wall</h2>

                    <p class="type-paragraph-centered">

                        Find out what people are saying about Shabang! &amp; get involved in the conversation.

                    </p> <!-- type-paragraph-centered -->

                </div> <!-- element-centre-title -->

                <div id="social-boxes">

                </div>

            </div> <!-- layout-container -->

        </article> <!-- article-social-wall -->

        <?php include('includes/footer.php'); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>

        <script src="js/main.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

        <script>

            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');

        </script>

    </body>

</html>
