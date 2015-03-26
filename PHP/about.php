<?php define( 'K_TEMPLATE_NAME', 'about.php' ); ?>
<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='About'>

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
         <img src ="images/logo.jpg" alt="Avalon Logo"</img>
         <cms:editable name='main_content' type='richtext'>
            <h1>Our Mission To The Chippewa Valley</h1>
         <br/>
            <p>Avalon Floral is a locally owned and operated (Sandy O'Connell) small boutique-type shop in Eau Claire, Wisconsin. We usually know our customers, their tastes, and their families. Avalon sets itself apart by being a service oriented, custom design, "happy to try to accommodate your every wish" floral shop! Our products, both fresh arrangements and gifts, change frequently. We try hard to be everything that the box stores are NOT. We actually "answer" our telephones. Much of our work "goes out the back door" as we deliver personalized, convenient gifts to your family and friends in a timely manner.</p>
            </p>
        <h1>Hours</h1>
         <p>Monday - Friday 9:00AM-5:30PM <br/>
             Saturdays 9:00AM-1:00PM
               </p>
        <h1>Contact</h1>
         <p>(715) 833.880 <br/>
        <a href="mailto:webmaster@example.com">avalonfloralso@gmail.com</a>
               </p>
        <h1>Location</h1>
        <p><a target="_blank" href="https://www.google.com/maps/place/504+Water+Street+Eau+Claire+WI+54703">504 Water Street<br/>
            Eau Claire, WI 54703</a></p>
    
        
         <p>Avalon is located in the Historic Water Street District of Eau Claire, Wisconsin.<br/> 
There is public parking across the street. <br/>
For quick pick-ups and for our customers who need very easy access, 
please feel free to park behind our back door on the alley.
               </p>
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