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

        <div class="article-message">

            <div class="layout-container">

                <h4 class="type-title-four">You're Message has been sent to Shabang!</h4>

            </div>

        </div> <!-- article-message -->

        <div class="article-contact">

            <div class="layout-container">

                <div class="layout-span-six">

                    <div class="element-contact-information">



                    </div> <!-- element-contact-information -->

                </div> <!-- layout-span-six -->

                <div class="layout-span-six layout-column-right">

                    <h3 class="type-title-style-one">Contact Form</h3>

                    <form id="form-contact" method="post">

                        <fieldset class="form-fieldset-half">
                            
                            <label>First Name:</label>
                          
                          <input id="name" name="name" type="text" placeholder="eg. Captain Barnacle Bill" />
                        
                        </fieldset> <!-- form-fieldset-half -->

                        <fieldset class="form-fieldset-half">
                            
                            <label>Second Name:</label>
                          
                          <input id="name" name="name" type="text" placeholder="eg. Captain Barnacle Bill" />
                        
                        </fieldset> <!-- form-fieldset-half -->
                        
                        <fieldset class="form-fieldset-half">
                            
                            <label>Email address:</label>
                            
                            <input id="email" name="email" type="email" placeholder="eg. b.bill@thesea.org" />

                        </fieldset> <!-- form-fieldset-half -->
                        
                        <fieldset class="form-fieldset-half">
                            
                            <label>Phone Number:</label>
                            
                            <input id="tel" name="tel" type="text" placeholder="eg. 01484 848073" />

                        </fieldset> <!-- form-fieldset-half -->

                        <fieldset>
                            
                          <label>Message:</label>
                          
                          <textarea id="contactmessage" name="contactmessage" placeholder="eg. Hello my old sea dog..."></textarea>
                        
                        </fieldset>

                        <input id="submit" name="submit" type="submit" value="Submit" />
                    
                    </form> <!-- form-contact -->


                </div> <!-- layout-span-six -->

            </div> <!-- layout-container -->

        </div> <!-- article-contact -->

        <?php include('includes/footer.php'); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>

        <script src="js/main.js"></script>

        <script src="js/circletype.js"></script>

        <script src="js/lettering.js"></script>


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
