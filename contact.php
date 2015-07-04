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

        <link rel="stylesheet" href="style.css">

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.js'></script>
        
        <link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.css' rel='stylesheet' />

    </head>

    <body>

        <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->


        <?php include('includes/header.php'); ?>

        <div class="article-message">

            <div class="layout-container">

                <h4 class="type-title-one colour-foreground-cream"> Thank You! Your Message has been sent to Shabang!</h4>

            </div>

        </div> <!-- article-message -->

        <div class="article-contact">

            <div class="layout-container">

                <div class="layout-row">

                    <div class="layout-span-six">

                        <div class="element-contact-box-address">

                                <div id="map"></div>

                            <div class="element-contact-information">

                                <h5 class="type-style-six">Visit Us</h5>

                                <h2 class="type-style-two">The Watershed</h5>

                                <h5 class="type-style-six">22 Bridge Street, Slaithwaite, HD7 5JN</h5>

                            </div>

                            <a href="https://www.google.co.uk/maps/dir//22+Bridge+St,+Slaithwaite,+Huddersfield,+West+Yorkshire+HD7/@53.622397,-1.879928,17z/data=!4m13!1m4!3m3!1s0x487bc4bce24cac6b:0xc6cd7651ebb5be25!2s22+Bridge+St,+Slaithwaite,+Huddersfield,+West+Yorkshire+HD7!3b1!4m7!1m0!1m5!1m1!1s0x487bc4bce24cac6b:0xc6cd7651ebb5be25!2m2!1d-1.879928!2d53.622397" class="element-contact-action">

                                <h5 class="type-style-contact-action">Get Directions</h5>

                            </a>

                        </div>

                    </div>

                    <div class="layout-span-six layout-column-right">

                        <a href="tel:01484 848073" class="element-contact-box colour-background-red">

                            <div class="element-contact-information">

                                <h5 class="type-style-six">Call Us</h3>

                                <h2 class="type-style-two">01484 848073</h2>

                            </div>

                            <div class="element-contact-action">

                                <h5 class="type-style-contact-action">Call Our Phone</h5>

                            </div>

                        </a>

                        <a href="mailto:someone@example.com?Subject=Howdy!" class="element-contact-box colour-background-yellow">

                            <div class="element-contact-information">

                                <h5 class="type-style-six">Email Us</h3>
                                
                                <h2 class="type-style-two">info@shabang.org.uk</h2>

                            </div>

                            <div class="element-contact-action">

                                <h5 class="type-style-contact-action">Start An Email</h5>

                            </div>

                        </a>

                    </div>

                </div> <!-- layout-row -->

                <div class="layout-row">

                    <div class="layout-span-six layout-shift-three layout-column-right">

                        <h2 class="type-style-three colour-foreground-blue">Contact Form</h3>

                        <form id="form-contact" method="post">

                            <fieldset class="form-fieldset-half">
                                
                                <label>First Name:</label>
                              
                              <input id="name" name="name" type="text" placeholder="Captain" />
                            
                            </fieldset> <!-- form-fieldset-half -->

                            <fieldset class="form-fieldset-half">
                                
                                <label>Second Name:</label>
                              
                              <input id="name" name="name" type="text" placeholder="Barnacle Bill" />
                            
                            </fieldset> <!-- form-fieldset-half -->
                            
                            <fieldset class="form-fieldset-half">
                                
                                <label>Email address:</label>
                                
                                <input id="email" name="email" type="email" placeholder="barnaclebill@thesea.org" />

                            </fieldset> <!-- form-fieldset-half -->
                            
                            <fieldset class="form-fieldset-half">
                                
                                <label>Phone Number:</label>
                                
                                <input id="tel" name="tel" type="text" placeholder="01484 848073" />

                            </fieldset> <!-- form-fieldset-half -->

                            <fieldset class="form-full-width">
                                
                              <label>Message:</label>
                              
                              <textarea id="contactmessage" name="contactmessage" rows="6" placeholder="Hello my old sea dog..."></textarea>
                            
                            </fieldset>

                            <input id="submit" name="submit" type="submit" value="Submit" />
                        
                        </form> <!-- form-contact -->

                    </div> <!-- layout-span-six -->

                </div> <!-- layout-row -->

            </div> <!-- layout-container -->

        </div> <!-- article-contact -->

        <?php include('includes/footer.php'); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>

        <script src="js/main.js"></script>

        <script>

        L.mapbox.accessToken = 'pk.eyJ1IjoidGR3Y2tzIiwiYSI6IlhwMGlGR28ifQ.irq5Rbn1WvGb_VIwn1auNA';
        var map = L.mapbox.map('map', 'tdwcks.k79k9hod')
        .setView([53.622408, -1.879932], 16);

        var myLayer = L.mapbox.featureLayer().addTo(map);

        var geoJson = [{

            type: 'Feature',
            "geometry": { "type": "Point", "coordinates": [-1.879932,53.622408]},
            "properties": {
                "icon": {
                    "iconUrl": "img/map-logo.svg",
                    "iconSize": [120, 120], // size of the icon
                    "iconAnchor": [35, 85], // point of the icon which will correspond to marker's location
                }
            } 

        }, {
            // Add Another Point
        }];

        // Add custom popups to each using our custom feature properties
        myLayer.on('layeradd', function(e) {
            var marker = e.layer,
                feature = marker.feature;


        });

        // Set a custom icon on each marker based on feature properties.
        myLayer.on('layeradd', function(e) {
            var marker = e.layer,
                feature = marker.feature;

            marker.setIcon(L.icon(feature.properties.icon));
        });


        // Add features to the map
        myLayer.setGeoJSON(geoJson);



        </script>


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
