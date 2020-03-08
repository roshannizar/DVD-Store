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
				<p><a href="#">UPTO $5 Off on Amex and Master cards</a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.html">Login </a></li> 
							<li><a href="signup.html">Sign Up</a></li> 
							<li><a href="login.html">My Orders</a></li>  
							<li><a href="login.html">Wishlist</a></li> 
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
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
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
				<div class="header-cart">
					<div class="my-account">
						<a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>						
					</div>
					<div class="cart">
						<form action="index.php" method="post" class="last">
                            <a href="index.php"><input type="hidden" name="display" value="1" /></a>
							<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
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
	
	<div>
		<table style="margin:10px;color:white;width:90%" cellspacing="10" cellpadding="10">
            <tr>
                <th>DVD IMAGE COVER</th>
                <th>DVD NAME</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th>CONTROLS</th>
            </tr>
		<?php
			
			$select = "SELECT * FROM order_detail od,dvd d WHERE od.dvdid=d.dvdid";
			
			$selected = $con->query($select);
			$total=0;
			while($row=mysqli_fetch_assoc($selected))
			{
                $total = $row["oquantity"]*$row["price"];
				?>
				<tr>
					<form method="POST" action="cart.php">
					    <td hidden name="cartid"><input type="text" name="cartid" value="<?php echo $row["orderid"];?>"></td>
                        <td><?php echo '<img style="width:50%;margin:10px" src="data:image/jpeg;base64,' . base64_encode($row['dvdimage']) . '"' ?></td>
					    <td hidden><?php echo $row["dvdid"];?></td>
					    <td><?php echo $row["dvdname"];?></td>
					    <td><?php echo $row["price"];?></td>
					    <td name="quantity"><input type="number" style="width:20%;background-color: transparent;border:1px solid transparent;outline:none" name="quantity" value="<?php echo $row["oquantity"];?>"></td>
					    <td><input type="submit" style="color:black" name="btnupdate" value="Update"> <input type="submit" style="color:black" name="btnsubmit" value="Remove"></td>
					</form>
				</tr>
				<?php

			}
			?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="font-size:20px">Grand Total: <?php echo $total;?></td>
            </tr>
            <?php
		?>
		</table>
	</div>
	<?php
		if(isset($_POST["cartid"]) && isset($_POST["quantity"]))
		{
			$cartid = $_POST["cartid"];
			$quan = $_POST["quantity"];
		}
		
		if(isset($_POST["btnsubmit"]))
		{

			$deleteQuery = "DELETE FROM order_detail WHERE orderid='$cartid'";

			if($con->query($deleteQuery))
			{
				echo '<script>';
				echo 'alert("Removed...")';
				echo '</script>';
			}
			else
			{
				echo '<script>';
				echo 'alert("Error occured...")';
				echo '</script>';
			}
		}
		else if(isset($_POST["btnupdate"]))
        {
            $updateQuery = "UPDATE order_detail SET oquantity='$quan' WHERE orderid='$cartid'";

            if($con->query($updateQuery))
            {
                echo '<script>';
                echo 'alert("Cart details updated...")';
                echo '</script>';
            }
            else
            {
                echo '<script>';
                echo 'alert("Error occured while updating the cart details....")';
                echo '</script>';
            }
        }
	?>
	
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2018 E Corner DVD store . All rights reserved </p>
		</div>
	</div> 
	<!-- cart-js -->
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