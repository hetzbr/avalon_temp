<?php define( 'K_TEMPLATE_NAME', 'arrangements.php' ); ?>
<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Arrangements'>

</cms:template>
<cms:template>
    
     <cms:editable 
        name='product1_header' 
        label='Product 1 Header' 
        type='text'
        order='1'
      />
    <cms:editable 
        name='product1_desc' 
        label='Product 1 Description' 
        type='text'
        order='2'
      />
    
    <cms:editable 
        name='image1'
        type='image'
        desc='Upload first product image here'
        order='3'      
    />
    
    <cms:editable 
        name='product2_header' 
        label='Product 2 Header' 
        type='text'
        order='4'
      />
    <cms:editable 
        name='product2_desc' 
        label='Product 2 Description' 
        type='text'
        order='5'
      />

    <cms:editable 
        name='image2'
        type='image'
        desc='Upload second product image here'
        order='6'         
    />
    
            
    <cms:editable 
        name='product3_header' 
        label='Product 3 Header' 
        type='text'
        order='7'
      />
    <cms:editable 
        name='product3_desc' 
        label='Product 3 Description' 
        type='text'
        order='8'
      />
    
    <cms:editable 
        name='image3'
        type='image'
        desc='Upload third product image here'
        order='9'           
    />
  
            
    <cms:editable 
        name='product4_header' 
        label='Product 3 Header' 
        type='text'
        order='10'
      />
    <cms:editable 
        name='product4_desc' 
        label='Product 4 Description' 
        type='text'
        order='11'
      /> 
    
    <cms:editable 
        name='image4'
        type='image'
        desc='Upload forth product image here'
        order='12'          
    />
            
    <cms:editable 
        name='product5_header' 
        label='Product 5 Header' 
        type='text'
        order='13'
      />
   <cms:editable 
        name='product5_desc' 
        label='Product 5 Description' 
        type='text'
        order='14'
      />   
    
    <cms:editable 
        name='image5'
        type='image'
        desc='Upload fifth product image here'
        order='15'          
    />
            
    <cms:editable 
        name='product6_header' 
        label='Product 6 Header' 
        type='text'
        order='16'
      />
  <cms:editable 
        name='product6_desc' 
        label='Product 6 Description' 
        type='text'
        order='17'
      />
    <cms:editable 
        name='image6'
        type='image'
        desc='Upload fifth product image here'
        order='18'          
    />
          
    <cms:editable 
        name='product7_header' 
        label='Product 7 Header' 
        type='text'
        order='19'
      />
    
  <cms:editable 
        name='product7_desc' 
        label='Product 7 Description' 
        type='text'
        order='20'
      />
    
    <cms:editable 
        name='image7'
        type='image'
        desc='Upload fifth product image here'
        order='21'          
    />
    <cms:editable 
        name='product8_header' 
        label='Product 6 Header' 
        type='text'
        order='22'
      />
  <cms:editable 
        name='product8_desc' 
        label='Product 8 Description' 
        type='text'
        order='23'
      />
    <cms:editable 
        name='image8'
        type='image'
        desc='Upload fifth product image here'
        order='24'          
    />
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

        <div class="row">

 

            <div class="col-md-9">

                

  <div class="row">
            <div class="col-lg-12">
               
                    <h1 id ="arrangement">Arrangements</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<cms:show image1 />" alt="">
                    <div class="caption">
                        <h3><cms:show product1_header /></h3>
                        <p><cms:show product1_desc /></p>
                        <p>
                            <button class="snipcart-add-item" 
                                  
  data-item-id="roses1"
  data-item-name="Roses"
  data-item-price="10.50"
  data-item-image="images/roes3.jpg"
   data-item-url="http://yoda.cs.uwec.edu/cs321/students/muganrp/Avalon/arrangements.html">Buy Now</button>
                            <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<cms:show image2 />" alt="Grand Display Arrangement">
                    <div class="caption">
                        <h3><cms:show product2_header /></h3>
                        <p><cms:show product2_desc /></p>
                           <p>
                            <button class="snipcart-add-item" 
                                  
  data-item-id="grand"
  data-item-name="Grand Display"
  data-item-price="10.50"
  data-item-image="images/grand2.jpg"
  data-item-url="http://yoda.cs.uwec.edu/cs321/students/muganrp/Avalon/arrangements.html">Buy Now</button>
                            <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<cms:show image3 />" alt="">
                    <div class="caption">
                        <h3><cms:show product3_header /></h3>
                        <p><cms:show product3_desc /></p>
                           <p>
                            <button class="snipcart-add-item" 
                                  
  data-item-id="designers"
  data-item-name="Designers Mix"
  data-item-price="10.50"
  data-item-image="images/designers2.jpg"
    data-item-url="http://yoda.cs.uwec.edu/cs321/students/muganrp/Avalon/arrangements.html">Buy Now</button>
                            <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<cms:show image4 />" alt="Drama Arrangement">
                    <div class="caption">
                        <h3><cms:show product4_header /></h3>
                        <p><cms:show product4_desc /></p>
                          <p>
                            <button class="snipcart-add-item" 
                                  
  data-item-id="drama"
  data-item-name="Drama Display"
  data-item-price="10.50"
  data-item-image="images/drama2.jpg"
    data-item-url="http://yoda.cs.uwec.edu/cs321/students/muganrp/Avalon/arrangements.html">Buy Now</button>
                            <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<cms:show image5 />" alt="">
                    <div class="caption">
                      <h3><cms:show product5_header /></h3>
                        <p><cms:show product5_desc /></p>
                           <p>
                            <button class="snipcart-add-item" 
                                  
  data-item-id="wild"
  data-item-name="Wild Flower Flavor"
  data-item-price="10.50"
  data-item-image="images/wild2.jpg"
    data-item-url="http://yoda.cs.uwec.edu/cs321/students/muganrp/Avalon/arrangements.html">Buy Now</button>
                            <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<cms:show image6 />" alt="">
                    <div class="caption">
                        <h3><cms:show product6_header /></h3>
                        <p><cms:show product6_desc /></p>
                         <p>
                            <button class="snipcart-add-item" 
                                  
  data-item-id="green"
  data-item-name="Green & Blooming"
  data-item-price="10.50"
  data-item-image="images/green2.jpg"
    data-item-url="http://yoda.cs.uwec.edu/cs321/students/muganrp/Avalon/arrangements.html">Buy Now</button>
                            <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<cms:show image7 />" alt="">
                    <div class="caption">
                        <h3><cms:show product7_header /></h3>
                        <p><cms:show product7_desc /></p>
                          <p>
                            <button class="snipcart-add-item" 
                                  
  data-item-id="seasonal"
  data-item-name="Seasonal Bouquet"
  data-item-price="10.50"
  data-item-image="images/seasonal2.jpg"
    data-item-url="http://yoda.cs.uwec.edu/cs321/students/muganrp/Avalon/arrangements.html">Buy Now</button>
                            <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<cms:show image8 />" alt="">
                    <div class="caption">
                       <h3><cms:show product8_header /></h3>
                        <p><cms:show product8_desc /></p>
                          <p>
                            <button class="snipcart-add-item" 
                                  
  data-item-id="special"
  data-item-name="Someone Special"
  data-item-price="10.50"
  data-item-image="images/spontaneous2.jpg"
   data-item-url="http://yoda.cs.uwec.edu/cs321/students/muganrp/Avalon/arrangements.html">Buy Now</button>
                            <a href="#" class="btn btn-default">More Info</a>
                        </p>
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