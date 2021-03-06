<?php define( 'K_TEMPLATE_NAME', 'services.php' ); ?>
<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Services'>

</cms:template>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Avalon Floral - Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">


<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript" 
  id="snipcart" 
  src="https://app.snipcart.com/scripts/snipcart.js"
  data-api-key="ZWM4YTYxZTAtMTEwZi00ZjE3LWJlMjctZWQwN2Y2ZWNiODUw"></script>

<link type="text/css"
  id="snipcart-theme"
  href="https://app.snipcart.com/themes/base/snipcart.css" 
  rel="stylesheet" />
    


</head>

<body background="images/navbackground.jpg">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><span id="green">A</span>valon Floral</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <!-- Single button -->
<li><div class="dropdown">
   <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" 
      data-toggle="dropdown">
       <span id="space">.</span>Shop
      <span class="caret"></span>
   </button>
   <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
      <li role="presentation">
         <a role="menuitem" tabindex="-1" href="arrangements.html">Hand-Crafted Arrangements</a>
      </li>
      <li role="presentation">
         <a role="menuitem" tabindex="-1" href="#">Build Your Own</a>
      </li>
      <li role="presentation">
         <a role="menuitem" tabindex="-1" href="subscription.html">
            Subscription
         </a>
      </li>
   </ul>
    </div></li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                     <li>
                       <a id="fbook" class="snipcart-checkout" href="#"> <img id ="fbook"src = "images/cart.jpg"</img></a>
                         
                         
                    </li>
                   <li>
                       <a target="_blank" id="fbook" href="https://www.facebook.com/pages/Avalon-Floral/108029693932"> <img id ="fbook"src = "images/facebook.jpg"</img></a>
                    </li>
                </ul>
                    
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
     <header class="jumbotron hero-spacer">
         <img  src ="images/logo.jpg" alt="Avalon Logo"</img>
         
         <cms:editable name='main_content' type='richtext'>
           <h1>Weddings & Celebrations</h1>
         <br/>
          <img class ="images" src ="images/weddingstrip.jpg" alt="Weddings"</img>
         <br/>
         <br/>
         
            <p>Complimentary wedding consultations filled with good ideas and creative solutions, the freshest, widest variety of flowers, and a room full of up-to-date rental items will "make your day"!</p>
   
         <h1>Sympathy and Funeral</h1>
         <br/>
          <img class = "images" src ="images/funeralstrip.jpg" alt="Funerals"</img>
         <br/>
         <br/>
         <p>The staff at Avalon takes pride in the service and design work that we do for families, friends, and co-workers who have lost a loved one.  While we can and do design the very traditional sprays, and baskets, we are best known for our <b>personalized custom designs</b>.</p>
         <ul id="funeral">
         <li>We design outdoorsy arrangements with birch bark, moss and wildflowers for the hunters and cottage folks. </li>
         <li>We design bright cheerful gerbera daisy vases for younger teens and children sometimes with keepsake mementos.</li>
         <li>A black vase with orange lilies and Harley Davidson memorabilia just seems to work better than traditional roses and carnations when a biker dies.</li>
         </ul>
         <br/>
        
        </header>
      
    </div>
         </cms:editable>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
          <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>504 Water Street | Eau Claire, WI 54703 | (715) 838.8880 |  <a href="mailto:webmaster@example.com">avalonfloralso@gmail.com</a></p>
                    <p>Copyright &copy; Avalon Floral 2014</p>
                    
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php COUCH::invoke(); ?>