<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Logistics</title>
	<meta name="description" content="FasTrans - Logistics & Delivery Company HTML template">
	<meta name="keywords" content="logistics,  transportation, truck, trucking">
	<meta name="author" content="Themexriver">
	<link rel="shortcut icon" href="landingpage/assets/imgs/logo/ficon.html" type="image/x-icon">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="landingpage/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="landingpage/assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="landingpage/assets/css/flaticon.css">
	<link rel="stylesheet" href="landingpage/assets/css/jquery-ui.css">
	<link rel="stylesheet" href="landingpage/assets/css/animate.css">
	<link rel="stylesheet" href="landingpage/assets/css/nice-select.css">
	<link rel="stylesheet" href="landingpage/assets/css/video.min.css">
	<link rel="stylesheet" href="landingpage/assets/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="landingpage/assets/css/slick.css">
	<link rel="stylesheet" href="landingpage/assets/css/rs6.css">
	<link rel="stylesheet" href="landingpage/assets/css/slick-theme.css">
	<link rel="stylesheet" href="landingpage/assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

	<style>
        /* Custom CSS for the unique div */
        #checkGroup {
            display: flex;
			flex-wrap: wrap;
			width: 100%;
        }
		#checkGroup #checkbox-container{
			display:flex;
			gap: 10px;
		}
    </style>

</head>
<body>
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>


<!-- Start of header section
	============================================= -->
	<header id="pr-mark-header" class="pr-mark-main-header">
		<div class="container">
			<div class="pr-mark-header-top d-flex justify-content-between align-items-center position-relative">
				<div class="pr-mark-header-top-cta ul-li">
					<ul>
						<li><img src="landingpage/assets/imgs/icon/ic1.png" alt=""> info@consulting.com</li>
						<li><img src="landingpage/assets/imgs/icon/ic2.png" alt=""> +90 158 856 789</li>
					</ul>
				</div>
				<div class="pr-mark-header-social d-flex">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-pinterest-p"></i></a>
				</div>
			</div>
			<div class="pr-mark-main-navigation-wrapper d-flex justify-content-between position-relative">
				<div class="pr-mark-brand-logo">
					<a href="#"><img src="landingpage/assets/imgs/logo/logo3.png" alt=""></a>
				</div>
				<div class="pr-mark-navigation-menu d-flex align-items-center">
					<nav class="pr-main-navigation  clearfix ul-li">
						<ul id="pr-main-nav" class="nav navbar-nav clearfix">
							
							<li><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#services">Service</a></li>
							
						</ul>
					</nav>
					<div class="pr-mark-btn text-center">
						<a class="d-flex justify-content-center align-items-center" href="#makeorder">Make an Order</a>
					</div>
				</div>
			</div>
			<div class="mobile_menu position-relative">
				<div class="mobile_menu_button open_mobile_menu">
					<i class="fal fa-bars"></i>
				</div>
				<div class="mobile_menu_wrap">
					<div class="mobile_menu_overlay open_mobile_menu"></div>
					<div class="mobile_menu_content">
						<div class="mobile_menu_close open_mobile_menu">
							<i class="fal fa-times"></i>
						</div>
						<div class="m-brand-logo">
							<a href="index.html#"><img src="landingpage/assets/imgs/logo/logo2.png" alt=""></a>
						</div>
						<nav class="mobile-main-navigation  clearfix ul-li">
							<ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
								
								<li><a href="#home">Home</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#services">Service</a></li>
								
							</ul>
						</nav>
					</div>
				</div>
				<!-- /Mobile-Menu -->
			</div>
		</div>
	</header>
<!-- End of header section
	============================================= -->

<!-- Start of Banner section
	============================================= -->
	<section id="home" class="ft-thx-banner-section position-relative" data-background="landingpage/images/banner.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="ft-thx-banner-content position-relative">
				<div class="row">
					<div class="col-lg-6">
						<div class="ft-thx-banner-text headline pera-content">
							<div class="banner-slug text-uppercase">You are Welcome To</div>
							<h1>Fastrans Cargo Service</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
							<div class="ft-thx-banner-btn d-flex">
								<a href="#about">About Us</a>
								<a href="#services">Service</a>
							</div>
						</div>
					</div>
					<!-- <div class="col-lg-6">
						<div class="ft-thx-banner-courier-form">
							<form action="#">
								<div class="row">
									<div class="col-md-12">
										<div class="wc-input">
											<span>Freight type:</span>
											<div class="wc-select position-relative">
												<select name="#">
													<option value="#">Seelct</option>
													<option value="#">Air Freight</option>
													<option value="#">Sea Freight</option>
													<option value="#">Road Freight</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="wc-input">
											<span>Load:</span>
											<div class="wc-select position-relative">
												<select name="#">
													<option value="#">Seelct</option>
													<option value="#">500kg</option>
													<option value="#">1000kg</option>
													<option value="#">1500kg</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="wc-input-range" data-background="landingpage/assets/imgs/bg/wc-f-bg.html">
											<span>DIST (Miles):</span>
											<div class="wc-input-range-area d-flex align-items-center">
												<div id="slider-range" class="range-bar"></div>
												<div class="range-value clearfix">
													<input type="text" id="amount">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="wc-input">
											<span>Your name:</span>
											<div class="wc-text-input position-relative">
												<input type="text" placeholder="Jhon Doe..">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="wc-input">
											<span>Your Mail:</span>
											<div class="wc-text-input position-relative">
												<input type="email" placeholder="Example@mail.com">
											</div>
										</div>
									</div>
								</div>
								<button class="text-uppercase" type="submit">Submit request</button>
							</form>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>	
<!-- End of Banner section
	============================================= -->

<!-- Start of About section
	============================================= -->
	<section id="about" class="pr-sx-about-section-2">
		<div class="container">
			<div class="pr-sx-about-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="pr-sx-about-text-area">
							<div class="pr-sx-secion-title headline pera-content  wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
								<span class="pr-sx-title-tag position-relative">About Company</span>
								<h2>Professional <span>Logistics Cargo</span>
								Company</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultric gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
								</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
								incididunt ut labore et dolore magna aliqua. </p>
							</div>
							<div class="pr-sx-about-feature-list ul-li-block  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
								<ul>
									<li>There are many variations of passages of LoreIpsum availablebut the 
									majority have suffered</li>
									<li>It uses a dictionary of over 200 Latin wor combined with a handful of 
									model sentence structure</li>
								</ul>
							</div>
							<div class="ft-thx-btn d-flex  text-center wow flipInX" data-wow-delay="200ms" data-wow-duration="1500ms">
								<a class="d-flex justify-content-center align-items-center" href="#">Explore More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="pr-sx-about-exp-wrapper position-relative  wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
							<div class="pr-sx-about-img-area">
								<img src="landingpage/images/ab3.jpg" alt="">
							</div>
							<div class="pr-sx-about-exp d-flex align-items-center">
								<div class="pr-sx-about-exp-icon text-center">
									<i class="flaticon-delivery-truck"></i>
								</div>
								<div class="pr-sx-about-exp-text headline pera-content">
									<h3><span>2550</span>+</h3>
									<p>Product Delivered</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of About section
	============================================= -->


<!-- Start of Case Study  section
	============================================= -->
	<section id="services" class="pr-sv-case-study-section">
		<div class="container">
			<div class="pr-sx-secion-title headline pera-content  wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
				<span class="pr-sx-title-tag position-relative">Our Products & Services</span>
				<h2>Some Of Our <span>Logistics Cargo</span>
				Project</h2>
			</div>
			<div class="pr-sv-case-study-content">
				
					<div class="pr-sv-case-study-item-wrapper filtr-container row">
					@foreach($products as $product)
						<div class="col-lg-4 col-sm-6 filtr-item" data-category="1, 3, 5" data-sort="Busy streets">
							<div class="pr-sv-case-study-item">
								<div class="pr-sv-case-study-img position-relative">
									<img src="{{ asset('product_images/'. $product->package_image) }}" alt="">
									<a href="#"><i class="fal fa-link"></i></a>
								</div>
								<div class="pr-sv-case-study-text headline text-center">
								<h3>{{ $product->package_name }}</h3>
								<h6>N {{ $product->price }}</h6>
								<p>
									@foreach(explode(',', $product->package_content) as $content)
										<li>{{ $content }}</li>
									@endforeach
								</p>
								</div>
								<a class="service-more" style="color:red; font-weight:bold" href="#makeorder"> Order <i class="far fa-chevron-right"></i></a>

							</div>
						</div>
					@endforeach
		
				</div>
			</div>
		</div>
	</section>		
<!-- End of Case Study  section
	============================================= -->

<!-- Start of Funfact section
	============================================= -->		
	 <section id="pr-sx-funfact" class="pr-sx-funfact-section">
		<div class="container">
			<div class="pr-sx-funfact-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="pr-sx-funfact-innerbox text-center position-relative">
								<div class="pr-sx-funfact-icon d-flex align-items-center justify-content-center">
									<i class="fal fa-bullseye-arrow"></i>
								</div>
								<div class="pr-sx-funfact-text headline">
									<h3><span class="counter">15</span> +</h3>
									<h4>Years Of Experience</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="pr-sx-funfact-innerbox text-center position-relative">
								<div class="pr-sx-funfact-icon d-flex align-items-center justify-content-center">
									<i class="fal fa-users"></i>
								</div>
								<div class="pr-sx-funfact-text headline">
									<h3><span class="counter">2500</span>+</h3>
									<h4>Happy Clients</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="pr-sx-funfact-innerbox text-center position-relative">
								<div class="pr-sx-funfact-icon d-flex align-items-center justify-content-center">
									<i class="flaticon-delivery-truck"></i>
								</div>
								<div class="pr-sx-funfact-text headline">
									<h3><span class="counter">15</span>K</h3>
									<h4>Product Delivery</h4>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- MAKE ORDER SECTION -->

	<section id="makeorder" class="ft-contact-page-section page-padding">
		<div class="container">
			<div class="ft-contact-page-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ft-contact-page-text-wrapper">
							<div class="ft-section-title-2 headline pera-content">
								<span class="sub-title">Place Your Order</span>
								<h2>What do you want Delivered to you?
								</h2>
							</div>
						
						</div>
					</div>
					<div class="col-lg-6">
						<div class="headline card p-4" id="content">
							<h3 class="text-center fw-bolder mb-5">Order</h3>
							<form action="{{ route('submit_order') }}" method="POST" id="order_form">
								@csrf
								<div class="row">
									<div class="col-lg-6 mb-3">
										<input type="text" class="form-control" name="name" placeholder="Your Name">
									</div>
									<div class="col-lg-6 mb-3">
										<input type="email" class="form-control"  name="email" placeholder="Your Email">
									</div>

									<div class="col-lg-6 mb-3">
										<input type="number" class="form-control" name="phone_no" placeholder="Your Phone">
									</div>
									
									<div class="col-lg-6 mb-3">
										<input type="text" class="form-control" name="address" placeholder="To Address">
									</div>

									<div class="col-lg-12 my-3">
										<label for="packages  " class="mb-3 d-block"> Packages </label>
										<div id="checkGroup">
											<!-- Checkboxes inside the unique div -->
											@foreach ($products as $product)
											<div id="checkbox-container" class="form-check">
  												<input class="package-checkbox form-check-input" type="checkbox" data-price="{{ $product->price }}" data-name="{{ $product->package_name }}" id="checkbox">
  												<label for="checkbox" class="form-check-label">
												  {{ $product->package_name }}
 												 </label>
											</div> &nbsp; &nbsp;
											<!-- <label class="tiny-label">
												<input type="checkbox" class="package-checkbox" data-price="{{ $product->price }}" data-name="{{ $product->package_name }}">
												{{ $product->package_name }}
											</label> -->
											@endforeach
											
										</div>												
									</div>
									<div class="col-lg-12">
										<input type="text" placeholder="Total Price" class="form-control" id="totalPrice" name="totalPrice" readonly>
									</div>
									<div class="col-lg-12">
										<!-- <strong>Google recaptcha:</strong> -->
										<!-- {!! NoCaptcha::renderJs() !!}-->
										<!-- {!! NoCaptcha::display() !!}  -->
									</div>
									<br>
									<div class="col-lg-12 mb-4">
										<textarea type="text" placeholder="Plan Selected" class="form-control" id="ordered_package" name="ordered_package" readonly></textarea>
									</div>
									<div class="d-grid">
										<button type="submit" style="background-color:#ea1e00; color:white; border-style:none; height:50px; " class=""> Order </button>
									</div>
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Funfact section
	============================================= -->




<!-- Start of Footer  section
	============================================= -->		
	<footer id="pr-sv-footer" class="pr-sv-footer-section">
		<div class="container">
			<div class="pr-sv-footer-widget-wrap">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="pr-sv-footer-widget headline clearfix pera-content ul-li-block">
							<div class="pr-sv-about-widget">
								<h3 class="widget-title">About</h3>
								<p>Lorem ipsum dolor sit amet, consect etur adi pisicing elit sed do eiusmod tempor incididun elit sed do eiusmod tempor incididunt</p>
								<!-- <div class="ft-thx-btn text-center">
									<a class="d-flex justify-content-center align-items-center" href="#">Make an Order</a>
								</div> -->
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6">
						<div class="pr-sv-footer-widget headline clearfix pera-content ul-li-block"> 
							<div class="pr-sv-contact-widget">
								<h3 class="widget-title">Links</h3>
								<ul >
									<li><a href="#home" >Home</a></li>
									<li><a href="#about" >About</a></li>
									<li><a href="#services" >Services</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pr-sv-footer-widget headline clearfix pera-content ul-li-block">
							<div class="pr-sv-contact-widget">
								<h3 class="widget-title">Contact Info</h3>
								<ul>
									<li><i class="fas fa-phone"></i> <span> +123 (4567) 890 </span>  </li>
									<li><i class="fas fa-envelope"></i> <span> info@envato.com  </span> </li>
									<li><i class="fas fa-map-marker-alt"></i> <span>380 St Kilda Road, Melbourne
									VIC 3004, Australia </span></li>
								</ul>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</footer>
	
<!-- End of Footer  section
	============================================= -->			

	<!-- For Js Library -->
	<script src="landingpage/assets/js/jquery.min.js"></script>
	<script src="landingpage/assets/js/bootstrap.min.js"></script>
	<script src="landingpage/assets/js/popper.min.js"></script>
	<script src="landingpage/assets/js/jquery-ui.min.js"></script>
	<script src="landingpage/assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="landingpage/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="landingpage/assets/js/appear.js"></script>
	<script src="landingpage/assets/js/slick.js"></script>
	<script src="landingpage/assets/js/jquery.counterup.min.js"></script>
	<script src="landingpage/assets/js/waypoints.min.js"></script>
	<script src="landingpage/assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="landingpage/assets/js/jquery.filterizr.js"></script>
	<script src="landingpage/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="landingpage/assets/js/wow.min.js"></script>
	<script src="landingpage/assets/js/jquery.cssslider.min.js"></script>
	<script src="landingpage/assets/js/rbtools.min.js"></script>
	<script src="landingpage/assets/js/rs6.min.js"></script>
	<script src="landingpage/assets/js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

	<script>
		const checkboxes = document.querySelectorAll('.package-checkbox');
		const totalPriceInput = document.getElementById('totalPrice');
		const orderedPackageInput = document.getElementById('ordered_package');

		checkboxes.forEach(checkbox => {
			checkbox.addEventListener('change', function () {
				let totalPrice = 0;
				let orderedPackages = [];

				checkboxes.forEach(cb => {
					if (cb.checked) {
						totalPrice += parseFloat(cb.getAttribute('data-price'));
						orderedPackages.push(cb.getAttribute('data-name'));
					}
				});

				totalPriceInput.value = totalPrice.toFixed(2);
				orderedPackageInput.value = orderedPackages.join(', ');
			});
		});
	</script>

	<script>
		// Check if a message is present in the session
		var message = "{{ session('message') }}";
		
		// Display SweetAlert if the message exists
		if (message) {
			Swal.fire({
				icon: 'success',
				title: 'Success',
				text: message
			});
		}
	</script>

	
</body>
</html>				