<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="a tutorial about creating a portfolio webpage showing best practices">
    <meta name="author" content="by-mistake.com">
    <link rel="icon" href="../../favicon.ico">

    <title>Learbymistake - portfolio wannabe ^_^</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--font awesome-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
    
    <style type="text/css">
        #map {
          height: 200px;
          width: 200px;
        }
    </style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <!--<div class="navbar-wrapper">-->
    <!--  <div class="container">-->

    <!--    <nav class="navbar navbar-inverse navbar-static-top">-->
    <!--      <div class="container">-->
    <!--        <div class="navbar-header">-->
    <!--          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
    <!--            <span class="sr-only">Toggle navigation</span>-->
    <!--            <span class="icon-bar"></span>-->
    <!--            <span class="icon-bar"></span>-->
    <!--            <span class="icon-bar"></span>-->
    <!--          </button>-->
    <!--          <a class="navbar-brand" href="#">Project name</a>-->
    <!--        </div>-->
    <!--        <div id="navbar" class="navbar-collapse collapse">-->
    <!--          <ul class="nav navbar-nav">-->
    <!--            <li class="active"><a href="#">Home</a></li>-->
    <!--            <li><a href="#about">About</a></li>-->
    <!--            <li><a href="#contact">Contact</a></li>-->
    <!--            <li class="dropdown">-->
    <!--              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
    <!--              <ul class="dropdown-menu">-->
    <!--                <li><a href="#">Action</a></li>-->
    <!--                <li><a href="#">Another action</a></li>-->
    <!--                <li><a href="#">Something else here</a></li>-->
    <!--                <li role="separator" class="divider"></li>-->
    <!--                <li class="dropdown-header">Nav header</li>-->
    <!--                <li><a href="#">Separated link</a></li>-->
    <!--                <li><a href="#">One more separated link</a></li>-->
    <!--              </ul>-->
    <!--            </li>-->
    <!--          </ul>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </nav>-->

    <!--  </div>-->
    <!--</div>-->


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="http://res.cloudinary.com/repkit-by-mistake-com/image/upload/c_crop,h_500,w_1024/v1453657970/6320428250_f035c53bb7_b_stpcxl.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Bran castle from Romania</h1>
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="http://res.cloudinary.com/repkit-by-mistake-com/image/upload/c_scale,h_500,w_1024/v1453658629/Castelul_Peles__Sinaia_-_Vedere_panoramica_askla4.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Peles castle from Romania.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="http://res.cloudinary.com/repkit-by-mistake-com/image/upload/c_scale,h_500,w_1024/v1453658703/1280px-RO_HD_Hunedoara_castle_panorama_2_hwkswk.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Hunedoara castle from Romania</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <div class="img-circle"><i class="fa fa-fort-awesome fa-5x" style="color:#FFAEAE;"></i></div>        
          <h2>Fortified</h2>
          <p>Our knowledge it's fortified by experience:)</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <i class="fa fa-map fa-5x" style="color:#B0E57C;"></i>        
          <h2>Mindmap</h2>
          <p>Our mind is mapped to the succes path ^_^</p>
          <div style="margin-left: 30px;">
          <div id="map" style="width:300px; height:200px;"></div>
          </div>    
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <i class="fa fa-twitter fa-5x" style="color:#3B94D9;"></i>    
          <h2>Twitter</h2>
          <p>You can  follow me on twitter.</p>
          <a href="https://twitter.com/ideasbymistake" class="twitter-follow-button" data-show-count="false">Follow @ideasbymistake</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <a class="twitter-timeline" href="https://twitter.com/ideasbymistake" data-widget-id="691327534701662208">Tweets by @ideasbymistake</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="http://res.cloudinary.com/repkit-by-mistake-com/image/upload/v1453660364/2014-10-12-obama_gel0bw.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!--<script src="../../assets/js/vendor/holder.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <!--google maps-->
    <!-- Replace the API Key with your own -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAqKjF9QZ5uVtBBPZnDWhNWaeT1DVYjdQ&callback=initMap" async defer></script>
    <script type="text/javascript">
        var map;
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
          });
        }
    </script>
  </body>
</html>