<?php
  include_once 'core/ProduitC.php';
  $p = new ProduitC();
   $c = $p->afficherCategorie();

  if(isset($_GET['id'])){
    $liste = $p->afficherProduitParId_Categorie($_GET['id']);
    
  }else{
    $liste = $p->afficherAllProducts();
  }

?>
<!doctype html>
<html>


<!-- Mirrored from themeim.com/demo/vaxin/demo-one/productlist3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Feb 2019 14:05:41 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home — Static Build System</title>

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
<style type="text/css">
        .btnx:hover
            {
            background-image:none;
            background-color:#e5504b;
            }
    </style>
	<!-- Fav Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/fav-icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/fav-icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/fav-icons/favicon-16x16.png">

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/fontawesome/css/fontawesome-all.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/flaticon/css/flaticon.css" type="text/css">
	<link rel="stylesheet" href="dependencies/owl.carousel/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/owl.carousel/css/owl.theme.default.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/magnific-popup/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="dependencies/animate.css/css/animate.css" type="text/css">
	<link rel="stylesheet" href="dependencies/colornip/css/colornip.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/slick-carousel/css/slick.css" type="text/css">
	<link rel="stylesheet" href="dependencies/slick-carousel/css/slick-theme.css" type="text/css">
	<link rel="stylesheet" href="dependencies/material-design-icons/css/material-icons.css">



	    <link rel="stylesheet" href="css/hover-min.css">
    

    <link rel="stylesheet" href="css/flexslider.css">


      <link rel="stylesheet" href="css/etoile.css">
    <!-- =========================
        Loding Main Theme Style
    ============================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="assets/css/app.css" type="text/css">

	<link id="theme" rel="stylesheet" href="assets/css/theme-color/theme-default.css" type="text/css">

	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700%7CRoboto:300,400,500,700,900" rel="stylesheet">

<script src="js/modernizr.js"></script>

</head>
<body id="home-version-1" class="home-version-1" data-style="default">


	<div id="site">



		<!--=========================-->
		<!--=        Navbar         =-->
		<!--=========================-->
		<header id="header" class="header_area hdr_area_two">
			<!-- Start top toolbar -->
			<section class="top_toolbar top_toolbar_new">
				<div class="vigo_container_one">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="toolbar_left">
								<p><span>Get 30% Discounts!</span> Offer ends in</p>
								<div id="count_down"></div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="toolbar_right">
								<ul>
									<li class="search">
										<i class="fas fa-search"></i>
										<div class="search_detail_two">
											<form action="#">
												<input type="text" placeholder="Search Your key">
												<button>Go</button>
											</form>
										</div>
									</li>
									<li class="cart">
										<i class="fas fa-shopping-basket"></i>
										<div class="cart_detail">
											<div class="single_cart">
												<div class="cart_left">
													<img src="media/images/banner-two/cart-one.png" alt="">
												</div>
												<div class="cart_right">
													<h3>Vaxin Regular Big Name</h3>
													<p>$66 <sup>USD</sup></p>
												</div>
											</div>
											<div class="single_cart">
												<div class="cart_left">
													<img src="media/images/banner-two/cart-two.png" alt="">
												</div>
												<div class="cart_right">
													<h3>Vaxin Woman</h3>
													<p>$76 <sup>USD</sup></p>
												</div>
											</div>
											<div class="cart_more">
												<a href="#">View Cart <i class="fa fa-angle-right"></i></a>
											</div>
										</div>
									</li>
									<li class="phone">
										<a href="#">
							<i class="fas fa-phone"></i>
							Appeler +216 24 733 220
						</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top toolbar -->

			<!-- Start Main Menu -->
			<section class="header_nav">
				<div class="vigo_container_one">
					<div class="row">
						<div class="col-auto mr-auto">
							<div class="header_logo">
								<a href="index.html">
					<img src="assets/img/hm-two-logo.png" alt="">
					
				</a>
							</div>
						</div>
						<div class="col-auto">
							<nav class="main_menu">
								<ul id="example-one">
									<li>
										<a href="index2.html">Acceuil</a>
										
									</li>
									<li>
										<a href="supplement2.html">Suppléments</a>
									</li>
									<li>
										<a href="productlist3.html">Produits</a>
										<ul class="sub-menu">
											<li><a href="productlist3.html">Liste des produits</a></li>
											<li><a href="blog2.html">A propos des produits</a></li>
										</ul>
									</li>
									<li>
										<a href="ingredient2.html">Ingrédients</a>
									</li>
									<li>
										<a href="blog-details2.html">Blog</a>
										<!--<ul class="sub-menu">
											<li><a href="blog2.html">Promotions</a></li>
											<li><a href="blog-details2.html">Publicité</a></li>

										</ul>-->
									</li>
									<li>
										<a href="Livraison.html">Livraison</a>
									</li>
									<li>
										<a href="contact2.html">Contact</a>
										<ul class="sub-menu">
											<li><a href="contact2.html">Contact</a></li>
											
										</ul>
					</li>
								</ul>
							</nav>
						</div>
						<div class="col-auto">
							<div class="hdr_btn_wrapper">
								<a href="#" class="btn_one">Acheter</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Main Menu -->

			<!-- Start Mobile Menu outer-->
			<section id="mobile-nav-wrap" class="clearfix">
				<div class="mobile_toolbar">
					<div class="vigo_container_one">
						<div class="top_toolbar_right">
							<div class="phone_number">
								<span class="flaticon-phone-call"></span> <a href="#">+216 24 733 220 </a>
							</div>
							<div class="header_login">
								<div class="whc_toolbar_main_login">
									<a href="#" data-toggle="modal" data-target="#signUpModal">S'inscrire</a>|
									<a href="#" data-toggle="modal" data-target="#signInModal">Se connecter</a>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="vigo_container_one">
					<div class="bottom_nav bottom_nav_two">
						<div id="mobile-logo">
							<a href="index.html">
						<img src="assets/img/hm-two-logo.png" alt="">
					</a>
						</div>
						<div class="toggle-inner">
							<i class="fas fa-bars"></i>
						</div>
					</div>
				</div>
			</section>
			<!-- End Mobile Menu outer-->
		</header>

		<section class="mobile-menu-inner mobile-menu-inner-two">
			<div class="mobile_accor_togo">
				<div class="mobile_accor_logo">
					<a href="index.html">
				<img src="assets/img/hm-two-logo.png" alt="">
			</a>
				</div>
				<div class="close-menu">
					<span></span>
				</div>
			</div>
			<nav id="accordian">
				<ul class="accordion-menu">
					<li class="current_page_item">
						<a href="index.html" >Acceuil</a>
				
					</li>
					<li>
						<a href="supplement2.html">Suppléments</a>
					</li>
					
					<li>
						<a href="productlist3.html" class="dropdownlink">Produits</a>
						<ul class="submenuItems">
							<li><i class="flaticon-right-arrow-angle"></i><a href="productlist3.html">Liste des produits</a></li>
							<li><i class="flaticon-right-arrow-angle"></i><a href="blog2.html">A propos des produits</a></li>
						</ul>
					</li>
					<li>
						<a href="ingredient.html">Ingrédients</a>
					</li>
					<li>
										<a href="blog-details2.html">Blog</a>
										<!--<ul class="sub-menu">
											<li><a href="blog2.html">Promotions</a></li>
											<li><a href="blog-details2.html">Publicité</a></li>

										</ul>-->
									</li>
					<li>
										<a href="contact2.html">Contact</a>
										<ul class="sub-menu">
											<li><a href="contact2.html">Contact</a></li>
											
										</ul>
					</li>
				</ul>
			</nav>
			<form action="#" id="moble-search">
				<input type="text" placeholder="Search....">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
			<ul class="footer-social-link">
				<li class="fb-bg"><a href="https://www.facebook.com/Fitness-shop-272609759866886/"><i class="fab fa-facebook-f"></i></a></li>
				
				
			</ul>
		</section>

		<!--=========================-->
		<!--=        Breadcrumb         =-->
		<!--=========================-->
		<section class="breadcrumb_area_two">
			<div class="breadcrumb_inner" data-bg-image="media/images/banner-two/bg-one.png">
				<div class="vigo_container_two">
					
				</div>
				<!-- /.vigo_container_two -->
			</div>

		</section>
		<!-- /.breadcrumb_area -->
<br> 
<br> 
		<!--=        Portfolio         =-->
		<!--==========================-->
				<section id="portfolio" class="portfolio_area_two section_padding_two">
			<section class="gallery">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="page-title text-center">


<h1>Recherche de Produit </h1>
<form action="test.php" method="GET" >
Nom: <input type="text" name="nom"/>

<input type="submit" name="recherche" value="rechercher"  />
</form>

                    </div>
                </div>

                <div class="col-12 col-sm-10 col-md-11 col-lg-12 col-xl-12">
                    <div  class="btn-group gallery-filter-btn-group">
                        <div class="gallery-menu-box">

                           <a href="blog2.php"><button style="float: left;" type="button"  data-filter="all" class="ral btn border-0   btn-secondary cursor-pointer focus-none">
                            All</button>
                            <?php
                            foreach($c  as $l){
                                ?>
                                        
                                    <a href="produit_categorie.php?id=<?=$l['id_categorie']?>">
                                    <button type="button" style="float: right;" data-filter=".<?=$l['id_categorie']?>" class="ral btn border-0 btn-secondary cursor-pointer focus-none" value=""><?=$l['nom_categorie']?></button>
                                </a>
                                
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div id="products" class="mixitup row">
                    <?php foreach($liste as $l){ ?>

                        <div class="mix category-a col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" data-order="1">
                        	<form method="POST" action="produit.php">
   <input type="submit" name="supprimer" value="details" class="ral btn border-0 btn-secondary cursor-pointer focus-none">
   <input type="hidden" value="<?PHP echo $l['id']; ?>" name="id">
   </form>
                            <div class="filtr-item">         
                                <div class="gallery-hover">
                                    <div class="gallery-img-box pos-r">
                                        <a href="uploads/<?php echo $l['image'] ?>" class="image-link gallery-overlay">

                                    <div class="search-icon">
                                        <h6>Description: <?php echo $l['description'] ?></h6>

                                    </div>
                                            <img class="img-fluid" src="uploads/<?php echo $l['image'] ?>" alt="sample image">
                                        </a>
                                    </div>
                                  <div class="">
                                               <h6>Description: <?php echo $l['description']  ?></h6> 
                                                <div class="stars-outer">
                                         <?php $c=$p->trierProduit($l['id']);
        foreach ($c as $keyc ) {
            $val= $keyc['moyenne'];
            
         } ?>
            <div class="star"><span  class="star stars-inner" data-rating="<?php echo $val ?>"></span>
        </div></div>                        
                                           </div>
                                    <div class="gallery-content-box text-center">
                                        <h6 class="item-desc ral mr-0"><?php echo $l['nom'] ?></h6>
                                   <!--     <p class="gallery-category ral mr-0" >Price: <?php echo $l['prix'] ?></p> -->
                                        <div class="social-media display-inline-block">
                                           
                                <?php if(isset($_SESSION['username'])){ ?>
                            <form method="post" action="index.php?action=add&id=<?php echo $l["id"]; ?>">   
                                                <div class="gallery-content-box text-center">
                                                    <h6 class="item-desc ral mr-0"><?php echo $l['description'] ?></h6>
                                                    <p class="gallery-category ral mr-0">PRIX: <?php echo $l['prix'] ?> DT</p>
                               <!-- <p class="gallery-category ral mr-0">STOCK: <?php echo $l['stock'] ?></p> -->

                                            <input type="number" name="quantity" class="form-control" value="1" />  
                                           <input type="hidden" name="hidden_name" value="<?php echo $l["nom"]; ?>" />  
                                           <input type="hidden" name="hidden_price" value="<?php echo $l["prix"]; ?>" />  
                                             <input type="hidden" name="id" value="<?php echo $l["id"]; ?>" /> 

                                           <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Ajouter au panier" />  

                                                </div>
                            </form>





                                <form method="post" action="index.php">
                                        <input type="hidden" value="<?PHP echo $l['id']; ?>" name="id_prod">  
                                        <input type="hidden" value=<?php echo $_SESSION['id']; ?> name="id_user" >
                                        <button type="submit" class="btn btnx btn-default" aria-label="Left Align">
                                         <span class="fa fa-heart fa-lg" aria-hidden="true"></span>
                                         </button>
                                               
                                </form> 
                                <?php } ?>

                                         </div>
                                    </div>
                              
                         </div>
                         </div>
                        </div>

                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
		</section>

		

	
	<!-- /#site -->

	<!-- Dependency Scripts -->
	<script src="dependencies/jquery/jquery.min.js"></script>
	<script src="dependencies/popper.js/popper.min.js"></script>
	<script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
	<script src="dependencies/owl.carousel/js/owl.carousel.min.js"></script>
	<script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	<script src="dependencies/isotope-layout/js/isotope.pkgd.min.js"></script>
	<script src="dependencies/slick-carousel/js/slick.min.js"></script>
	<script src="dependencies/imagesloaded/js/imagesloaded.pkgd.min.js"></script>
	<script src="dependencies/colornip/colornip.min.js"></script>
	<script src="dependencies/jquery.countdown/js/jquery.countdown.min.js"></script>
	<script src="dependencies/gmap3/gmap3.min.js"></script>
	<script src="dependencies/headroom/js/headroom.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc"></script>
	<!-- Site Scripts -->
	<script src="assets/js/middle.js"></script>
	<script src="assets/js/app.js"></script>


		<!--==========================-->
		<!--=        Content         =-->
		<!--==========================-->
		<footer class="footer_three_area">
			<div class="vigo_container_two">
				<div class="row">
					<div class="col-xl-12">
						<div class="widget widget_three">
							<div class="widget_logo">
								<a>
							<img src="assets/img/hm-two-logo.png" alt="#">

						</a>
							</div>
							<div class="widget_three_desc">
								<p>
									Copyright©
									<a href="#">FitnessShop</a><br> All Rights Reserved
								</p>
							</div>
						</div>
						<div class="widget widget_three">
							<div class="widget_three_title">
								<h3>COMPANY</h3>
							</div>
							<div class="widget_three_list">
								<ul>
									<li>
										<a href="#">
									<i class="fas fa-caret-right"></i>
									About us
								</a>
									</li>
									<li>
										<a href="404-two.html">
									<i class="fas fa-caret-right"></i>
									Delivery Information
								</a>
									</li>
									<li>
										<a href="#">
									<i class="fas fa-caret-right"></i>
									Terms & Conditions
								</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="widget widget_three">
							<div class="widget_three_title">
								<h3>LINKS</h3>
							</div>
							<div class="widget_three_list">
								<ul>
									<li>
										<a href="#">
									<i class="fas fa-caret-right"></i>
									Link One
								</a>
									</li>
									<li>
										<a href="#">
									<i class="fas fa-caret-right"></i>
									Another link
								</a>
									</li>
									<li>
										<a href="#">
									<i class="fas fa-caret-right"></i>
									Lorem Ipsum
								</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="widget widget_three">
							<div class="widget_three_title">
								<h3>PRIVACY</h3>
							</div>
							<div class="widget_three_list">
								<ul>
									<li>
										<a href="#">
									<i class="fas fa-caret-right"></i>
									Link One
								</a>
									</li>
									<li>
										<a href="#">
									<i class="fas fa-caret-right"></i>
									Another link
								</a>
									</li>
									<li>
										<a href="#">
									<i class="fas fa-caret-right"></i>
									Lorem Ipsum
								</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="widget widget_three">
							<div class="widget_three_title">
								<h3>FEED</h3>
							</div>
							<div class="widget_nwsfeed_list">
								<a href="#">
							<img src="media/images/banner-two/nwsfeed-one.png" alt="">
						</a>
								<a href="#">
							<img src="media/images/banner-two/nwsfeed-two.png" alt="">
						</a>
								<a href="#">
							<img src="media/images/banner-two/nwsfeed-three.png" alt="">
						</a>
								<a href="#">
							<img src="media/images/banner-two/nwsfeed-four.png" alt="">
						</a>
								<a href="#">
							<img src="media/images/banner-two/nwsfeed-five.png" alt="">
						</a>
								<a href="#">
							<img src="media/images/banner-two/nwsfeed-six.png" alt="">
						</a>
								<a href="#">
							<img src="media/images/banner-two/nwsfeed-one.png" alt="">
						</a>
								<a href="#">
							<img src="media/images/banner-two/nwsfeed-two.png" alt="">
						</a>
								<a href="#">
							<img src="media/images/banner-two/nwsfeed-three.png" alt="">
						</a>
								<a href="#">
							<img src="media/images/banner-two/nwsfeed-four.png" alt="">
						</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- back to top -->
		<div class="backtotop backtop_two">
			<i class="fas fa-angle-double-up"></i>
		</div>
		<!-- back to top -->

		<!-- Sign in -->
		<div class="modal fade" id="signUpModal">
			<div class="modal-dialog">
				<div class="modal-body">
					<div id="signup">
						<div class="login-left">
							<div class="login-title">
								<h3>Sign in socially</h3>
							</div>
							<div class="login-social">
								<ul>
									<li class="facebook">
										<a href="#">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
									</li>
									<li class="twitter">
										<a href="#">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
									</li>
									<li class="pinterest">
										<a href="#">
									<i class="fab fa-pinterest-p"></i>
									<span>Pinterest</span>
								</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="login-right">
							<div class="login-title">
								<h3>Sign Up through VIGO</h3>
							</div>
							<div class="login_main_form">
								<form action="#">
									<input type="text" placeholder="Username">
									<input type="text" placeholder="Email">
									<input type="text" placeholder="Password">
									<input type="text" placeholder="Confirm Password">
									<div class="select_wrapper">
										<select>
									<option value="Country">Country</option>
									<option value="England">England</option>
									<option value="America">America</option>
									<option value="India">India</option>
									<option value="Australia">Australia</option>
									<option value="Canada">Canada</option>
									<option value="Bangladesh">Bangladesh</option>
								</select>
									</div>
									<label>
								<input type="checkbox" name="vehicle" value="Bike">
								 I'm over 18 and I agree<span> Terms & Conditions!</span>
							</label>
									<input type="submit" value="sign in">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sign in -->

		<!-- sign up -->
		<div class="modal fade" id="signInModal">
			<div class="modal-dialog">
				<div class="modal-body">
					<div id="signup2">
						<div class="login-left">
							<div class="login-title">
								<h3>Sign in socially</h3>
							</div>
							<div class="login-social">
								<ul>
									<li class="facebook">
										<a href="#">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
									</li>
									<li class="twitter">
										<a href="#">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
									</li>
									<li class="pinterest">
										<a href="#">
									<i class="fab fa-pinterest-p"></i>
									<span>Pinterest</span>
								</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="login-right">
							<div class="login-title">
								<h3>Sign in through Vigo</h3>
							</div>
							<div class="login_main_form">
								<form action="#">
									<input type="text" placeholder="Email or Username">
									<input type="text" placeholder="Password">
									<label>
								<input type="checkbox" name="vehicle" value="Bike">
								Remember me
								<span>Forgot your password</span>
							</label>
									<input type="submit" value="sign in">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	<!-- /#site -->

	<!-- Dependency Scripts -->
	<script src="dependencies/jquery/jquery.min.js"></script>
	<script src="dependencies/popper.js/popper.min.js"></script>
	<script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
	<script src="dependencies/owl.carousel/js/owl.carousel.min.js"></script>
	<script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	<script src="dependencies/isotope-layout/js/isotope.pkgd.min.js"></script>
	<script src="dependencies/slick-carousel/js/slick.min.js"></script>
	<script src="dependencies/imagesloaded/js/imagesloaded.pkgd.min.js"></script>
	<script src="dependencies/colornip/colornip.min.js"></script>
	<script src="dependencies/jquery.countdown/js/jquery.countdown.min.js"></script>
	<script src="dependencies/gmap3/gmap3.min.js"></script>
	<script src="dependencies/headroom/js/headroom.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc"></script>
	<!-- Site Scripts -->
	<script src="assets/js/middle.js"></script>
	<script src="assets/js/app.js"></script>


    <script src="js/simplePlayer.js"></script>
    
    <script src="js/jquery.flexslider.js"></script>
    
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>


</body>


<!-- Mirrored from themeim.com/demo/vaxin/demo-one/blog2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Feb 2019 14:05:45 GMT -->
</html>