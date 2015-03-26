<?php define( 'K_TEMPLATE_NAME', 'index.php' ); ?>
<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home Page'>

</cms:template>
<cms:template>
    
     <cms:editable 
        name='product1_header' 
        label='Product 1 Header' 
        type='text'
        order='1'
      />
    
    <cms:editable 
        name='image1'
        type='image'
        desc='Upload first product image here'
        order='2'      
    />
    
    <cms:editable 
        name='product2_header' 
        label='Product 2 Header' 
        type='text'
        order='3'
      />
    

    <cms:editable 
        name='image2'
        type='image'
        desc='Upload second product image here'
        order='4'         
    />
    
            
    <cms:editable 
        name='product3_header' 
        label='Product 3 Header' 
        type='text'
        order='5'
      />
    
    
    <cms:editable 
        name='image3'
        type='image'
        desc='Upload third product image here'
        order='6'           
    />
    
            
    <cms:editable 
        name='product4_header' 
        label='Product 3 Header' 
        type='text'
        order='7'
      />
    
    
    <cms:editable 
        name='image4'
        type='image'
        desc='Upload forth product image here'
        order='8'          
    />
            
    <cms:editable 
        name='product5_header' 
        label='Product 5 Header' 
        type='text'
        order='9'
      />
    
    
    <cms:editable 
        name='image5'
        type='image'
        desc='Upload fifth product image here'
        order='10'          
    />
            
    <cms:editable 
        name='product6_header' 
        label='Product 6 Header' 
        type='text'
        order='11'
      />
    
    

   
    
  </cms:template>
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
        


        <div class="row">

 

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/slider2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slider3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slider1.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<cms:show image1 />" alt="">
                            <div class="caption">
                                
                                <h4><a href="#"><cms:show product1_header /> </a>
                                </h4>
                             
                                <p>Don't miss out on our great Valentine's day arrangements!</p>
                         
                            </div>
                      
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<cms:show image2 />" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$49.99</h4>
                                <h4 class ="test"><a href="#"><cms:show product2_header /></a>
                                </h4>
                          
                                <p>For the girl (or boy, of course) who would "rather be camping!  </p>

                            </div>
                    
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<cms:show image3 />" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$34.99</h4>
                                <h4><a href="#"><cms:show product3_header /></a>
                                </h4>
                                <p>Contemporary with unusual and sophisticated flowers.</p>
                            </div>
               
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<cms:show image4 />" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$84.99</h4>
                                <h4><a href="#"><cms:show product4_header /></a>
                                </h4>
                                <p>Avalon European Floral is best known for our Grand Displays!</p>
                            </div>
                
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<cms:show image5 />" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$75.00</h4>
                                <h4><a href="#"><cms:show product5_header /></a>
                                </h4>
                                <p>Ready to be displayed permanently.</p>
                            </div>
            
                        </div>
                    </div>

 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<cms:show image6 />" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$84.99</h4>
                                <h4><a href="#"><cms:show product6_header /></a>
                                </h4>
                                <p>"Now In Season" Bouquet - Fresh Flowers from the garden! </p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
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