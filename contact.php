<!doctype html>  
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        
        <title>Portfolio | Jong creatief enzo</title>

        <meta name="description" content="Wij laten zien dat je geen doorgewinterde ondernemer hoeft te zijn om een bedrijf op te richten. Je moet weten waar je voor staat en je hart in je werk stoppen.">
        <meta name="author" content="M van Eijgen">

        
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
        <script>
        if (!("ontouchstart" in document.documentElement)) {
            document.documentElement.className += " no-touch";
            }
        </script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/resources/img/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" href="favicon.png">
        <!-- Begin meny -->
        <meta name="viewport" content="width=800, user-scalable=no">
        <script src="assets/js/meny.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <!-- End meny -->


        <!-- google maps-->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD8yxYODUYckByN8QhQTp2igqS_R3OD2bo&sensor=false"
        type="text/javascript"></script>

<script type="text/javascript">
      var directionDisplay;
      var directionsService = new google.maps.DirectionsService();
  
      function initialize() {
        var latlng = new google.maps.LatLng(52.387832,4.638205);
        directionsDisplay = new google.maps.DirectionsRenderer();
        var settings = {
          zoom: 16,
          center: latlng,
          mapTypeControl: true,
          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
          navigationControl: true,
          navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
        directionsDisplay.setMap(map);

        var companyImage = new google.maps.MarkerImage('assets/img/pointers.png',
          new google.maps.Size(292,120),
          new google.maps.Point(0,0),
          new google.maps.Point(160,120)
        );

        var companyShadow = new google.maps.MarkerImage('',
          new google.maps.Size(130,50),
          new google.maps.Point(0,0),
          new google.maps.Point(65, 50));

        var companyPos = new google.maps.LatLng(52.386467,4.64387);

        var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map,
          icon: companyImage,
          shadow: companyShadow,
          title:"Haarlem",
          zIndex: 3});
        
        var trainImage = new google.maps.MarkerImage('',
          new google.maps.Size(50,50),
          new google.maps.Point(0,0),
          new google.maps.Point(25,50)
        );

        var trainShadow = new google.maps.MarkerImage('',
          new google.maps.Size(70,50),
          new google.maps.Point(0,0),
          new google.maps.Point(35, 50)
        );

        var trainPos = new google.maps.LatLng(52.387832,4.638205);

        var trainMarker = new google.maps.Marker({
          position: trainPos,
          map: map,
          icon: trainImage,
          shadow: trainShadow,
          title:"Train Station",
          zIndex: 2
        });
        
        google.maps.event.addListener(companyMarker, 'click', function() {
          infowindow.open(map,companyMarker);
        });
        var styles = [
  {
    stylers: [
      { hue: "#00ffe6" },
      { saturation: -20 }
    ]
  },{
    featureType: "road",
    elementType: "geometry",
    stylers: [
      { lightness: 100 },
      { visibility: "simplified" }
    ]
  },{
    featureType: "road",
    elementType: "labels",
    stylers: [
      { visibility: "off" }
    ]
  }
];

map.setOptions({styles: styles});
      }
    </script>

        <!--END google maps-->
        <!-- google analitics-->
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-37039342-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>            
    </head>
    
    <body onload="initialize()">
        <? include("meny.php"); ?>
        <div class="contents">
        <!-- Begin experiment -->
            <aside>
                <section>
                    <h1>Contact</h1>
                        <ul>
                            <li>Mitchel@jcenzo.nl</li>
                            <li>06 38 63 27 35</li>
                            <li>Gonnetstraat 26</li>
                            <li>2011 KA Haarlem</li>
                        </ul> 

                        <ul class="projecten">
                            <a class="tumb" href="#"><li><img src="assets/img/mvaneijgen.jpg"><p>Mitchel van Eijgen <small>Grafisch ontwerper, Jong creafief enzo</small></p></li></a>
                            <a class="tumb" href="#"><li><img src="assets/img/jaapredeker.jpg"><p>Jaap Redeker <small>Developer, Atticweb</small></p></li></a>
                            <a class="tumb" href="#"><li><img src="assets/img/davidhager.jpg"><p>David Hager <small>Marketing en social media, All terrain media</small></p></li></a>
                        </ul>                    
                        
                        <div class="contact">
                            <a href="mailto:mitchel@jcenzo.nl?Subject=Nieuw%20project" class="aanmelden" ><div class="btn icon-cube no-touch">Meld een project aan</div></a>
                            <a href="mailto:mitchel@jcenzo.nl?Subject=Hello" class="hello" ><div class="btn icon-twitter no-touch">Just say Hello.</div></a>
                        </div>


                    <a href="https://twitter.com/jcenzo" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @jcenzo</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                     
                </section>
            </aside> 

          <section id="map_canvas" style="width:100%; height:100%"></section>

        </div>
   </body>
</html>