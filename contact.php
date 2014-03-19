<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nature's Finest</title>
        <style>
      html, body, #map-canvas {
        height: 75%;
        margin: 10px 40px 10px 40px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(45.51984, -121.59674);
  var mapOptions = {
    zoom: 8,
    center: myLatlng,
    draggable: false
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: "Nature's Finest"
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

    <!-- Bootstrap core CSS -->
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    
</head>

<body>
  
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
        

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <a class="navbar-brand navbar-left hidden-xs" id ="logo" href="index.html">
                  <img src="img/nfLogo.png" alt="Nature's Finest logo"</a></a>
                <a class="navbar-brand navbar-left hidden-xl hidden-lg hidden-md hidden-sm" id="tinylogo" href="index.html">
                  <img src="img/nfLogoTiny.png" alt="Nature's Finest logo"</a></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
               
                    <ul class="nav navbar-right navbar-nav">
                        
                        <li><a href="inSeason1.html">In Season</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="inSeason1.html">In Season </a></li>
                                <li><a href="fullProductLine.html">Full Product Line</a></li>  
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="aboutPhilosophy.html">Farming Practices</a>
                                </li>
                                <li><a href="aboutStory.html">About Us</a>
                                </li>
                            </ul>
                        </li>
                
                        <li><a href="contact.php">Contact</a>
                        </li>

                    </ul>
                </div>
            
            <!-- /.navbar-collapse -->
        </div>
     
        <!-- /.container -->
    </nav>
<body>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <br>
          <br>
          <br>
          <br>
          <br>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>
      

   
        <div class="col-lg-12 hidden-md hidden-sm hidden-xs">
          <div id="map-canvas" style="width: 1000px; height: 300px"></div>
        </div>
       

      </div><!-- /.row -->
      
      <div class="row contactForm">

        <div class="col-sm-8">
          <h3>Questions or Comments?</h3>
          <div class="contact">
            <p>Please use this form or the contact information to the right to inquire about how to become a customer or to provide suggestions or comments about our crops.  </p>
        </div>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Name</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email Address</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Phone Number</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Message</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Nature's Finest</h3>
          <h4>Parkdale, Oregon<br></h4>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>:  (541) 214-4779</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto: adeats@gmail.com."> manager@naturesfinestfarm.com</a></p>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Nature's Finest 2014</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    

  </body>
</html>
