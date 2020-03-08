<?php 
	require 'connection.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>E Corner DVD store</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<script src="js/owl.carousel.js"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({ 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
	}); 
}); 
</script>
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
<script src="js/bootstrap.js"></script>	
</head>
<body>
	
	</div>
	<script>
		$('#myModal88').modal('show');
	</script> 
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="#">UPTO $5 Off on Master cards</a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.php">Login </a></li>
							<li><a href="signup.php">Sign Up</a></li> 
							<li><a href="login.php">My Orders</a></li>  
							<li><a href="login.php">Wishlist</a></li> 
						</ul> 
					</li> 
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-percent" aria-hidden="true"></i> Today's Deals<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="offers.html">Cash Back Offers</a></li> 
							<li><a href="offers.html">Product Discounts</a></li>
							<li><a href="offers.html">Special Offers</a></li> 
						</ul> 
					</li> 
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gift" aria-hidden="true"></i> Gift Cards<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="offers.html">Product Gift card</a></li> 
							<li><a href="offers.html">Occasions Register</a></li>
							<li><a href="offers.html">View Balance</a></li> 
						</ul> 
					</li> 
					<li class="dropdown head-dpdn">
						<a href="contact.html" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Store Finder</a>
					</li> 
					<li class="dropdown head-dpdn">
						<a href="card.html" class="dropdown-toggle"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Credit Card</a>
					</li> 
					<li class="dropdown head-dpdn">
						<a href="help.html" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="index.php"><span>E</span>Corner DVD<i></i></a></h1>
					<h6>Your store, your Movies.</h6> 
				</div>	
				<div class="header-search">
					<form action="index.php" method="POST">
						<input type="search" name="txtsearch" placeholder="Search for a Product..." required="">
						<input type="submit" class="btn btn-default" name="btnsearch" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
					</form>
				</div>
				<div class="header-cart"> 
					<div class="my-account">
						<a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>						
					</div>
                    <div style="float:right">
                        <label>
                            <?php
                            if(isset($_SESSION["loginuser"]))
                            {
                                echo $_SESSION["loginuser"];
                            }
                            else
                            {
                                echo "Your not logged in";
                            }
                            ?>
                        </label>
                        <label>|
                        <?php
                            if(isset($_SESSION["loginuser"]))
                            {
                                echo '<a href="destroy.php">Logout</a>';
                            }
                            else
                            {
                                echo '<a href="DS-Signin.php">Login</a>';
                            }
                        ?>
                        </label>
                    </div>
					<div class="cart"> 
						<form action="cart.php" method="post">
							<input type="hidden" name="display" value="1" />
                            <a href="cart.php"><button class="w3view-cart" type="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
						</form>  
					</div>
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div>
		 <div class="header-three">
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Store Categories</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								<li><a href="offers.html">Today's Offers</a></li>
								<li class="has-children">
									<a href="#">Movie selection</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products.html">All Movies</a></li>
										<li class="has-children">
											<a href="#">Movie Category</a>  
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#">All Electronics</a></li> 
												<li class="has-children">
													<a href="#0">Divisions</a> 
													<ul class="is-hidden"> 
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products.html">Bollywood</a></li>
														<li><a href="products.html">Hollywood</a></li>
														<li><a href="products.html">Kollywood</a></li>
													</ul>
												</li>
												<li> <a href="products.html">Children selection</a> </li>
												<li><a href="products.html">Adult selection</a></li>
												<li><a href="products.html">Featured movies</a></li>
												<li><a href="products.html">Favorites</a></li> 
											</ul>
										</li> 
										
										<li class="has-children">
											<a href="#">Comedy Selection</a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#">Kings of comedy</a></li>
												<li><a href="products.html">Bollywood comedy</a></li>
												<li><a href="products.html">Hollywood comedy</a></li>
												<li><a href="products.html">Kollywood comedy</a></li>
											
							
											</ul>
										</li> 
								
								</li> 
									
								<li class="has-children">
									<a href="#">Movies</a> 
									<ul class="is-hidden"> 
										<li class="go-back"><a href="#"></a></li>
										<li><a href="products9.html">New Releases </a></li> 
										<li><a href="products9.html">Children & Family </a></li>
										<li><a href="products9.html">Action</a></li>
										<li><a href="products9.html">Classic Movies </a></li>
										<li><a href="products9.html">Bollywood Movies </a></li>
									</ul>
								</li> 
								<li class="has-children">
									<a href="#">Movies Combo</a> 
									<ul class="is-hidden">
										<li class="go-back"><a href="#"></a></li>
										<li><a href="products9.html">Hollywood Movies </a></li> 
										<li><a href="products9.html">Digital Movies </a></li>
										<li><a href="products9.html">Boxed Sets</a></li>
										<li><a href="products9.html">Animated</a></li>
										<li><a href="products9.html">Adventure</a></li>
									</ul>
								</li> 
								<li class="has-children">
									<a href="#">TV Shows</a> 
									<ul class="is-hidden">
										<li class="go-back"><a href="#"></a></li>
										<li><a href="products9.html">Serials</a></li> 
										<li><a href="products9.html">Best Programs</a></li>
										<li><a href="products9.html">Celebrations</a></li>
										<li><a href="products9.html">Top Shows</a></li> 
									</ul>
								</li> 
							</ul><!-- .cd-secondary-dropdown --> 
						</li>  
								<li><a href="sitemap.html">Full Site Directory </a></li>  
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->	 
				</div>
				<div class="move-text">
					<div class="marquee"><a href="offers.html"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->	
	<!-- banner -->
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">  
                <div class="item active"><!-- First-Slide -->
                    <img src="images/baahubali.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated flipInX">Flat <span>50%</span> Discount</h3>
                        <h4 data-animation="animated flipInX">Hot Offer Today Only</h4>
                    </div>
                </div>  
                <div class="item"> <!-- Second-Slide -->
                    <img src="images/endhiran.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInDown">Our Latest Movie releases</h3>
                        <h4 data-animation="animated fadeInUp">Check it out</h4>
                    </div>
                </div> 
                <div class="item"><!-- Third-Slide -->
                    <img src="images/batmans.jpg" alt="" class="img-responsive"/>
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated fadeInLeft">End Of Season Sale</h3>
                        <h4 data-animation="animated flipInX">Grab yours now</h4>
                    </div>
                </div> 
            </div> 
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> 
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> 
        </div>
		<script src="js/custom.js"></script>
	</div>
	
					<div class="clearfix"> </div>
					<h3 class="w3ls-title">Featured Products</h3>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel">
                                    <?php
                                    if(isset($_POST["txtsearch"]))
                                    {
                                        $searchproduct=$_POST["txtsearch"];
                                    }


                                    if(isset($_POST["btnsearch"]))
                                    {
                                        $selectdvd = "SELECT * FROM dvd WHERE dvdname like '%$searchproduct%'";
                                        $selected = $con->query($selectdvd);

                                        $row=mysqli_fetch_assoc($selected);

                                        if($row==null)
                                        {
                                            echo '<script>';
                                            echo 'alert("The Product your searching for is Not Found/Matched...")';
                                            echo '</script>';
                                        }
                                        else
                                            {
                                            while ($row = mysqli_fetch_assoc($selected)) {
                                                ?>
                                                <div class="item">
                                                    <div class="glry-w3agile-grids agileits">
                                                        <a href="products.html"><?php echo '<img style="height:250px" src="data:image/jpeg;base64,' . base64_encode($row['dvdimage']) . '"' ?></a>
                                                        <div class="view-caption agileits-w3layouts">
                                                            <h4>
                                                                <a href="products.html"><?php echo $row["dvdname"]; ?></a>
                                                            </h4>
                                                            <h5><?php echo $row["unitprice"]; ?></h5>
                                                            <form action="index.php" method="POST"
                                                                  enctype="multipart/form-data">
                                                                <input type="text" style="color:black" name="cmd"
                                                                       value=""/>
                                                                <input type="text" hidden name="add"
                                                                       value="<?php echo $row["dvdid"]; ?>"/>
                                                                <input type="text" hidden name="w3ls_item"
                                                                       value="<?php echo $row["dvdname"]; ?>"/>
                                                                <input type="text" hidden name="amount"
                                                                       value="<?php echo $row["unitprice"] + "/="; ?>"/>
                                                                <input type="text" placeholder="Enter Quantity"
                                                                       style="color:black" name="quantity">
                                                                <input type="date" style="color:black" name="date">
                                                                <input type="text" hidden
                                                                       placeholder="Amount (Auto Generate)"
                                                                       name="amount1"
                                                                       value="0">
                                                                <input type="submit" name="btncart" style="color:black"
                                                                       Value="Add to Cart">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $selectdvd = "SELECT * FROM dvd";
                                        $selected = $con->query($selectdvd);

                                        while ($row = mysqli_fetch_assoc($selected)) {
                                            ?>
                                            <div class="item">
                                                <div class="glry-w3agile-grids agileits">
                                                    <a href="products.html"><?php echo '<img style="height:250px" src="data:image/jpeg;base64,' . base64_encode($row['dvdimage']) . '"' ?></a>
                                                    <div class="view-caption agileits-w3layouts">
                                                        <h4><a href="products.html"><?php echo $row["dvdname"]; ?></a>
                                                        </h4>
                                                        <h5><?php echo $row["unitprice"]; ?></h5>
                                                        <form action="index.php" method="POST"
                                                              enctype="multipart/form-data">
                                                            <input type="text" style="color:black" name="cmd" value=""/>
                                                            <input type="text" hidden name="add"
                                                                   value="<?php echo $row["dvdid"]; ?>"/>
                                                            <input type="text" hidden name="w3ls_item"
                                                                   value="<?php echo $row["dvdname"]; ?>"/>
                                                            <input type="text" hidden name="amount"
                                                                   value="<?php echo $row["unitprice"] + "/="; ?>"/>
                                                            <input type="text" placeholder="Enter Quantity"
                                                                   style="color:black" name="quantity">
                                                            <input type="date" style="color:black" name="date">
                                                            <input type="text" hidden
                                                                   placeholder="Amount (Auto Generate)" name="amount1"
                                                                   value="0">
                                                            <input type="submit" name="btncart" style="color:black"
                                                                   Value="Add to Cart">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>

                                    <?php
                                        if(isset($_POST["cmd"]) && isset($_POST["add"]) && isset($_POST["w3ls_item"]) && isset($_POST["amount"]) && isset($_POST["quantity"]) && isset($_POST["amount1"]) && isset($_POST["date"]))
                                        {
                                            $orderid = $_POST["cmd"];
                                            $dvdid = $_POST["add"];
                                            $dvdname = $_POST["w3ls_item"];
                                            $price = $_POST["amount"];
                                            $quantity = $_POST["quantity"];
                                            $date = $_POST["date"];
                                            $amount = $_POST["amount1"];
                                            $user = $_SESSION["loginuser"];
                                        }
                                        if(isset($_SESSION["loginuser"]))
										{
                                            if (isset($_POST["btncart"])) {
                                                $insertQuery = "INSERT INTO order_detail VALUES('$orderid','$user','$dvdid','$date','$quantity','$price','$amount')";

                                                if ($con->query($insertQuery)) {
                                                    echo '<script>';
                                                    echo 'alert("ADDED TO CART SUCCESSFULLY")';
                                                    echo '</script>';
                                                } else {
                                                    echo '<script>';
                                                    echo 'alert("ERROR OCCURED WHILE SENDING TO CART...")';
                                                    echo '</script>';
                                                }
                                            }
                                        }
										
                                        else
                                        {
                                            echo '<script>';
                                            echo 'alert("Please login to continue...")';
                                            echo '</script>';
                                        }
                                    ?>
								</div> 
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo1").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								
						<div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo2").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								
										</div> 
									</div> 
								</div>    
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="decor" aria-labelledby="decor-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo3").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo3" class="owl-carousel"> 
								
										</div> 
									</div>  
								</div>    
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="sports" aria-labelledby="sports-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo4").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										}); 
									}); 
								</script>
							
										</div> 
									</div>
								</div>    
							</div>
						</div> 
					</div>   
				</div>  
			</div>  	
		</div>  	
	</div> 
	<!-- //welcome -->
	<!-- add-products -->
	 <div class="add-products"> 
		<div class="container">  
			<div class="add-products-row">
				<div class="w3ls-add-grids">
					<a href="products1.html"> 
						<h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
						<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="w3ls-add-grids w3ls-add-grids-mdl">
					<a href="products1.html"> 
						<h4>SUNDAY SPECIAL DISCOUNT FLAT <span>40%</span> OFF</h4>
						<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="w3ls-add-grids w3ls-add-grids-mdl1">
					<a href="products.html"> 
						<h4>LATEST DESIGNS FOR YOU <span> Hurry !</span></h4>
						<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="clerfix"> </div>
			</div>  	 */
		</div>  	
	</div>
	<!-- //add-products -->
	<!-- coming soon -->
	<div class="soon">
		<div class="container">
			<h3>Mega Deal Of the Week</h3>
			<h4>Coming Soon Don't Miss Out</h4>  
			<div id="countdown1" class="ClassyCountdownDemo"></div>
		</div> 
	</div>
	<!-- //coming soon -->
	<!-- deals -->
	<div class="deals"> 
		<div class="container"> 
		
				<div class="clearfix"> </div>
			</div>  	
		</div>  	
	</div> 
	<!-- //deals --> 
	<!-- footer-top -->
	<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>FREE DELIVERY</h4>
					
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>CUSTOMER CARE</h4>
					
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>GOOD QUALITY</h4>
					
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer-top --> 
	<!-- subscribe -->
	<div class="subscribe"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul> 
				<ul class="apps"> 
					<li><h4>Download Our app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul> 
			</div> 
			<div class="col-md-6 subscribe-right">
				<h4>Sign up for email and get 25%off!</h4>  
				<form action="#" method="post"> 
					<input type="text" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="clearfix"> </div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe --> 
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.html"><span>E</span>Corner</a></h2>
						<h6>DVD store</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 155, Moors road, Wellwatte, Colombo, SriLanka</li>
						<li><i class="fa fa-mobile"></i> 0115896320</li>
						<li><i class="fa fa-phone"></i> +941152200025 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="marketplace.html">Marketplace</a></li>  
							<li><a href="values.html">Core Values</a></li>  
							<li><a href="privacy.html">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Services</h3>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="login.html">Returns</a></li> 
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="sitemap.html">Site Map</a></li>
							<li><a href="login.html">Order Status</a></li>
						</ul> 
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Payment Methods</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
							<li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
						</ul>  
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2018 E Corner DVD store . All rights reserved </p>
		</div>
	</div> 
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->	
	<!-- countdown.js -->	
	<script src="js/jquery.knob.js"></script>
	<script src="js/jquery.throttle.js"></script>
	<script src="js/jquery.classycountdown.js"></script>
		<script>
			$(document).ready(function() {
				$('#countdown1').ClassyCountdown({
					end: '1388268325',
					now: '1387999995',
					labels: true,
					style: {
						element: "",
						textResponsive: .5,
						days: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#1abc9c",
								lineCap: 'round'
							},
							textCSS: 'font-weight:300; color:#fff;'
						},
						hours: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#05BEF6",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						minutes: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#8e44ad",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						seconds: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#f39c12",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						}

					},
					onEndCallback: function() {
						console.log("Time out!");
					}
				});
			});
		</script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
</body>
</html>