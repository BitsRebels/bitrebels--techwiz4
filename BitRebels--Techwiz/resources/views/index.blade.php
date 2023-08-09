<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Your Store</title>
<meta name="description" content="My Store" />
<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Philosopher:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i' rel='stylesheet' type='text/css'>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme//stylesheet/TemplateTrip/bootstrap.min.css" rel="stylesheet" media="screen" />

<link href="../assets/catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet" media="screen" />
<link href="../assets/catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="../assets/catalog/view/theme/OPC190_02/stylesheet/stylesheet.css" rel="stylesheet">
<link href="../assets/catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/ttblogstyle.css" rel="stylesheet" type="text/css" />
<link href="../assets/catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/ttcountdown.css" rel="stylesheet" type="text/css" />
<link href="../assets/catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/category-feature.css" rel="stylesheet" type="text/css" />
<link href="../assets/catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/animate.css" rel="stylesheet" type="text/css" />
<link href="../assets/catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/newsletter.css" rel="stylesheet" type="text/css" />
<link href="../assets/catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/ttinstafeed.css" rel="stylesheet" type="text/css" />
<link href="../assets/catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/lightbox.css" rel="stylesheet" type="text/css" />

<link href="catalog/view/javascript/jquery/swiper/css/swiper.min.css" type="text/css" rel="stylesheet" media="screen" />
<link href="catalog/view/javascript/jquery/swiper/css/opencart.css" type="text/css" rel="stylesheet" media="screen" />

<script src="catalog/view/javascript/common.js" type="text/javascript"></script>

<!-- TemplateTrip custom Theme JS START -->
<script src="catalog/view/javascript/TemplateTrip/addonScript.js" type="text/javascript"></script>
<script src="catalog/view/javascript/TemplateTrip/ttcountdown.js" type="text/javascript"></script>
<script src="catalog/view/javascript/TemplateTrip/inview.js" type="text/javascript"></script>
<script src="catalog/view/javascript/TemplateTrip/parallex.js" type="text/javascript"></script>
<script src="catalog/view/javascript/TemplateTrip/lightbox-2.6.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/TemplateTrip/waypoints.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/TemplateTrip/tt_quickview.js" type="text/javascript"></script>
<script src="catalog/view/javascript/TemplateTrip/bootstrap-notify.min.js" type="text/javascript"></script>
<!-- TemplateTrip custom Theme JS END -->

<link href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/catalog/cart.png" rel="icon" />

<script src="catalog/view/javascript/jquery/swiper/js/swiper.jquery.js" type="text/javascript"></script>
<script src="catalog/view/javascript/TemplateTrip/jquery.bpopup.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/TemplateTrip/jquery.cookie.js" type="text/javascript"></script>

</head>

<body class="common-home">
<div id="page">
<header>

<div class="full-header">
	
  	<div class="header-left">
        <div id="logo">
							<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=common/home"><img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/catalog/logo.png" title="Your Store" alt="Your Store" class="img-responsive" /></a>
			      </div>
    </div>
		
	<div class="right-block">
		<div class="search"><div id="search" class="input-group">
	<span class="ttsearch_button"><i class="fa fa-search"></i></span>
	<div class="ttsearchtoggle">
	  <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
	  <span class="input-group-btn">
		<button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
	  </span>
	 </div>
</div></div>
		<div class="user-info">
		  <div class="dropdown"><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/account" title="my account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
 <span class="ttuserheading">my account</span><i class="fa fa-caret-down"></i></a>
          <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
                        <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/register"><i class='fa fa-user'></i> Register</a></li>
            <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/login"><i class='fa fa-sign-in'></i> Login</a></li>
			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/wishlist" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i> <span class="hidden-sm hidden-md">Wish List (0)</span></a></li>
			<li class="ttlanguage"><div class="pull-left">
  <form action="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="form-language">
    <div class="btn-group">
      <button class="btn btn-link">
             
      <img src="catalog/language/en-gb/en-gb.png" alt="English" title="English">
                              <span class="hidden-xs hidden-sm hidden-md">Language</span></button>
      <ul>
                <li>
          <button class="btn btn-link btn-block language-select" type="button" name="en-gb"><img src="catalog/language/en-gb/en-gb.png" alt="English" title="English" /> English</button>
        </li>
                <li>
          <button class="btn btn-link btn-block language-select" type="button" name="ar-lb"><img src="catalog/language/ar-lb/ar-lb.png" alt="Arabic" title="Arabic" /> Arabic</button>
        </li>
              </ul>
    </div>
    <input type="hidden" name="code" value="" />
    <input type="hidden" name="redirect" value="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=common/home" />
  </form>
</div>
</li>
			<li class="ttcurrency"><div class="pull-left">
  <form action="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="form-currency">
    <div class="btn-group">
      <button class="btn btn-link">                               <strong>$</strong>        <span class="hidden-xs hidden-sm hidden-md">Currency</span></button>
      <ul>
                        <li>
          <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
        </li>
                                <li>
          <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
        </li>
                                <li>
          <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
        </li>
                      </ul>
    </div>
    <input type="hidden" name="code" value="" />
    <input type="hidden" name="redirect" value="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=common/home" />
  </form>
</div>
 </li>
                      </ul>
		  </div>
        </div>
		<div class="cart"><div id="cart" class="btn-group">
  <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i>
  <span class="cart-heading">Checkout</span>
  <span id="cart-total">0</span></button>
  <ul class="dropdown-menu pull-right header-cart-toggle">
        <li>
      <p class="text-center">Your shopping cart is empty!</p>
    </li>
      </ul>
</div>
</div>
	</div>
	
		<div class="header-left-cms">
	 <aside id="header-left">
	  <div class="main-category-list left-main-menu">
<div class="cat-menu">
<div class="TT-panel-heading">
	<span>menu</span>
</div>
<div class="menu-category">
<ul class="dropmenu">
						<li class="TT-Sub-List dropdown">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=20" class="TT-Category-List"> Assorted Shrubs</a>
				<span class="active_menu"></span>
		   		
		
			    									
			
			<div class="dropdown-menu">
			<div class="dropdown-inner">
								 	<ul class="list-unstyled childs_1 mega-dropdown-menu columns-4" style="width: 800px;">
																																							 
							<li class="dropdown first" style="width: 25%;">
																							<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=20_26" class="single-dropdown">Mardi Gras</a> 									
															
																	<div class="dropdown-menu">
									<div class="dropdown-inner">
									<ul class="list-unstyled childs_2">
																		
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=26_60">
										Burning Bush</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=26_85">
										Echinacea</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=26_59">
										Euonymus</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=26_61">
										Gold Spot</a>
										</li>
																			<li><a href="">
										</a>
										</li>
											
									</ul>
									</div>
									</div>
									
					       </li>
																																					 
							<li class="dropdown first" style="width: 25%;">
																							<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=20_27" class="single-dropdown">Golden King</a> 									
															
																	<div class="dropdown-menu">
									<div class="dropdown-inner">
									<ul class="list-unstyled childs_2">
																		
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=27_63">
										Dianthus</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=27_86">
										Fern</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=27_62">
										Firewitch</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=27_64">
										Frosty Fire</a>
										</li>
																			<li><a href="">
										</a>
										</li>
											
									</ul>
									</div>
									</div>
									
					       </li>
																																					 
							<li class="dropdown first" style="width: 25%;">
																							<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=20_87" class="single-dropdown">Rose Creek</a> 									
															
																	<div class="dropdown-menu">
									<div class="dropdown-inner">
									<ul class="list-unstyled childs_2">
																		
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=87_91">
										Autumn</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=87_90">
										Grandifolius</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=87_88">
										Green Boxleaf</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=87_97">
										Raulston's Gold</a>
										</li>
																			<li><a href="">
										</a>
										</li>
											
									</ul>
									</div>
									</div>
									
					       </li>
																																					 
							<li class="dropdown first" style="width: 25%;">
																							<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=20_92" class="single-dropdown">Canyon Creek</a> 									
															
																	<div class="dropdown-menu">
									<div class="dropdown-inner">
									<ul class="list-unstyled childs_2">
																		
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=92_96">
										Abelia</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=92_94">
										Ajuga</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=92_95">
										Aucuba</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=92_93">
										Coreopsis</a>
										</li>
																			<li><a href="">
										</a>
										</li>
											
									</ul>
									</div>
									</div>
									
					       </li>
																									</ul>
			</div>
			</div>
			
						</li>
					<li class="TT-Sub-List dropdown">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=25" class="TT-Category-List">Cypress</a>
				<span class="active_menu"></span>
		   		
		
			    									
			
			<div class="dropdown-menu">
			<div class="dropdown-inner">
								 	<ul class="list-unstyled childs_1 mega-dropdown-menu columns-2" style="width: 400px;">
																																							 
							<li class="dropdown first" style="width: 50%;">
																							<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=25_98" class="single-dropdown">Juniper</a> 									
															
																	<div class="dropdown-menu">
									<div class="dropdown-inner">
									<ul class="list-unstyled childs_2">
																		
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=98_101">
										Andorra</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=98_102">
										Bar Harbor</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=98_100">
										Green Mound</a>
										</li>
																			<li><a href="">
										</a>
										</li>
											
									</ul>
									</div>
									</div>
									
					       </li>
																																					 
							<li class="dropdown first" style="width: 50%;">
																							<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=25_99" class="single-dropdown">Conifers</a> 									
															
																	<div class="dropdown-menu">
									<div class="dropdown-inner">
									<ul class="list-unstyled childs_2">
																		
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=99_105">
										Atlas</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=99_103">
										Canaan</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=99_104">
										Cedar</a>
										</li>
																			<li><a href="">
										</a>
										</li>
											
									</ul>
									</div>
									</div>
									
					       </li>
																									</ul>
			</div>
			</div>
			
						</li>
					<li class="TT-Sub-List dropdown">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=65" class="TT-Category-List">Berries</a>
				<span class="active_menu"></span>
		   		
		
			    									
			
			<div class="dropdown-menu">
			<div class="dropdown-inner">
								 	<ul class="list-unstyled childs_1 mega-dropdown-menu columns-2" style="width: 400px;">
																																							 
							<li class="dropdown first" style="width: 50%;">
																							<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=65_82" class="single-dropdown">Ornamental Grasses</a> 									
															
																	<div class="dropdown-menu">
									<div class="dropdown-inner">
									<ul class="list-unstyled childs_2">
																		
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=82_106">
										Dwarf Mondo</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=82_109">
										Liriope</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=82_107">
										Variegated</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=82_108">
										White Pampas</a>
										</li>
																			<li><a href="">
										</a>
										</li>
											
									</ul>
									</div>
									</div>
									
					       </li>
																																					 
							<li class="dropdown first" style="width: 50%;">
																							<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=65_81" class="single-dropdown">Flowering Varieties</a> 									
															
																	<div class="dropdown-menu">
									<div class="dropdown-inner">
									<ul class="list-unstyled childs_2">
																		
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=81_110">
										Azalea</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=81_112">
										Gerbing</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=81_111">
										Pink Ruffle</a>
										</li>
																			<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=81_113">
										Purple Formosa</a>
										</li>
																			<li><a href="">
										</a>
										</li>
											
									</ul>
									</div>
									</div>
									
					       </li>
																									</ul>
			</div>
			</div>
			
						</li>
				   <li>
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=66">Boxwood</a>
				
		
				</li>
				   <li>
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=67">Barberry</a>
				
		
				</li>
				   <li>
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=69">Spirea</a>
				
		
				</li>
				   <li>
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=71">Azaleas</a>
				
		
				</li>
									<li> <a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog/blogs">
					<span data-hover="Blogs">Blogs</span>
					</a></li>       
				</ul>
</div>
</div>
</div>
 </aside>

	</div>
		
	
		
</div>
		
</header>
<div class="header-content-title">
	<div style="background-image: url('../../OPC190_nursery/OPC02/image/catalog/demo/banners/parallax.jpg'); background-position: 50% 78.1106%;" data-source-url="../../OPC190_nursery/OPC02/image/catalog/demo/banners/parallax.jpg" class="parallex">
	</div>
</div>



<script><!--
$(document).ready(function() {
/* ---------------- start Templatetrip link more menu ----------------------*/
	var max_link = 3;
	var moretext= "More";
	var items = $('.menu-category > ul.dropmenu > li');
	var surplus = items.slice(max_link, items.length);
	surplus.wrapAll('<li class="dropdown more-menu"><div class="dropdown-menu"><div class="dropdown-inner"><ul class="list-unstyled childs_1 single-dropdown-menu"></ul></div></div></li>');
	$('.more-menu').prepend('<a href="#" class="level-top">'+moretext+'</a>');
		

/* ---------------- End Templatetrip link more menu ----------------------*/
});
--></script>

<div class="content-top">
	<div class="slideshow-panel">
<div class="ttloading-bg ttloader"></div>
<div class="swiper-viewport">
  <div id="slideshow0" class="slideshow-main swiper-container">
    <div class="swiper-wrapper"> 
	        	<div class="swiper-slide text-center">
							<a href="#">
				<img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/slider-01-1903x855.jpg" alt="slider-01" class="img-responsive" />
				</a>
						</div>
            	<div class="swiper-slide text-center">
							<a href="#">
				<img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/slider-02-1903x855.jpg" alt="slider-02" class="img-responsive" />
				</a>
						</div>
         </div>
   	<div class="swiper-pagination slideshow0"></div>
  <div class="swiper-pager">
    <div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
  </div>
  </div>
</div>
</div>
<script type="text/javascript"><!--
var swiper = new Swiper('#slideshow0', {
	mode: 'horizontal',
	slidesPerView: 1,
	pagination: '.slideshow0',
	paginationClickable: true,
	nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 0,
	effect: 'fade',
	autoplay: 2500,
    autoplayDisableOnInteraction: true,
	loop: true
});
--></script>
<div class="newletter-popup">
<div id="boxes" class="newletter-container">
 <div style="" id="dialog" class="window">
	<div id="popup2">
		<span class="b-close"><span>X</span></span>
	</div>
	<div class="newslatter-img col-sm-6 col-xs-6">
	</div>
	<div class="box col-sm-6 col-xs-6">
	  <div class="newletter-title"><h2>Newsletter</h2></div>
	  <div class="box-content newleter-content">
	  <label></label>
		  <div id="frm_subscribe">
			  <form name="subscribe" id="subscribe_popup">
				   <div class="newslatterpopup-content">
						 <span class="required">*</span><span>Your email address</span>
						 <div id="notification"></div>
						 <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail" placeholder="Your email address">
						 <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname" />
						 
						 <div class="popup-button">
							<a class="button btn btn-primary" onclick="email_subscribepopup()"><span>Subscribe</span></a>
													 </div>
				    </div>  
			  </form>
			  <div class="subscribe-bottom">
					<input type="checkbox" id="newsletter_popup_dont_show_again">
					<label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
			  </div>
		  </div><!-- /#frm_subscribe -->
	  </div><!-- /.box-content -->
 	</div>
 </div>	

<script type="text/javascript">
function email_subscribepopup(){
	$.ajax({
			type: 'post',
			url: 'index.php?route=extension/module/ttnewslettersubscribe/subscribepopup',
			dataType: 'html',
            data:$("#subscribe_popup").serialize(),
			success: function (html) {
				//$.cookie('shownewsletter', '1');
					try {
					
						eval(html);
					
					} catch (e) {
					}
			}}); 
	
	
}
function email_unsubscribepopup(){
	$.ajax({
			type: 'post',
			url: 'index.php?route=extension/module/ttnewslettersubscribe/unsubscribe',
			dataType: 'html',
            data:$("#subscribe_popup").serialize(),
			success: function (html) {
					try {
			
						eval(html);
					
					} catch (e) {
					}
			}}); 
	$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
	
}
</script>
<script type="text/javascript">
    $(document).ready(function() {

		if($.cookie('shownewsletter')==1) $('.newletter-popup').hide();
		$('#subscribe_pemail').keypress(function(e) {
            if(e.which == 13) {
                e.preventDefault();
                email_subscribepopup();
            }
			var name= $(this).val();
		  	$('#subscribe_pname').val(name);
        });
		$('#subscribe_pemail').change(function() {
		 var name= $(this).val();
		  		$('#subscribe_pname').val(name);
		});


        //transition effect
        if($.cookie("shownewsletter") != 1){
			$('.newletter-popup').bPopup();
      
        }
		
		
		$('#newsletter_popup_dont_show_again').on('change', function(){
			if($.cookie("shownewsletter") != 1){   
				$.cookie("shownewsletter",'1')
			}else{
				$.cookie("shownewsletter",'0')
			}
		}); 
		

    });
</script>

</div>
</div><!-- /.box -->


</div>
	<div class="tthome">
  	
                <div id="content" class="col-sm-12 left-column">
	<div class="tt-category-featured">
<div class="container">

<div class="box-heading"><h3>Category Feature</h3></div>
<div class="ttfcat-items">
<div class="row">
<div class="category-feature tt-carousel">
  	  <div class="item">
		<div class="content">
		  <div class="image">
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=20">
				<img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/categorybanner-01-160x170.png" alt=" Assorted Shrubs" title=" Assorted Shrubs" class="img-responsive" />
			</a>
			</div>
			<div class="caption">
			<div class="cat-title">
				<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=20"> Assorted Shrubs</a></h4>
			</div>
			<div class="cat-sub">
			  			  <ul>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=20_26" class="list-group-item">Mardi Gras</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=20_27" class="list-group-item">Golden King</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=20_87" class="list-group-item">Rose Creek</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=20_92" class="list-group-item">Canyon Creek</a></li>
			  			  </ul>
			  		   </div>
		  </div>
		  </div>
		   <!-- Caption END -->
		</div>
  	  <div class="item">
		<div class="content">
		  <div class="image">
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=26">
				<img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/categorybanner-04-160x170.png" alt="Mardi Gras" title="Mardi Gras" class="img-responsive" />
			</a>
			</div>
			<div class="caption">
			<div class="cat-title">
				<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=26">Mardi Gras</a></h4>
			</div>
			<div class="cat-sub">
			  			  <ul>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=26_60" class="list-group-item">Burning Bush</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=26_85" class="list-group-item">Echinacea</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=26_59" class="list-group-item">Euonymus</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=26_61" class="list-group-item">Gold Spot</a></li>
			  			  </ul>
			  		   </div>
		  </div>
		  </div>
		   <!-- Caption END -->
		</div>
  	  <div class="item">
		<div class="content">
		  <div class="image">
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=27">
				<img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/categorybanner-03-160x170.png" alt="Golden King" title="Golden King" class="img-responsive" />
			</a>
			</div>
			<div class="caption">
			<div class="cat-title">
				<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=27">Golden King</a></h4>
			</div>
			<div class="cat-sub">
			  			  <ul>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=27_63" class="list-group-item">Dianthus</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=27_86" class="list-group-item">Fern</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=27_62" class="list-group-item">Firewitch</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=27_64" class="list-group-item">Frosty Fire</a></li>
			  			  </ul>
			  		   </div>
		  </div>
		  </div>
		   <!-- Caption END -->
		</div>
  	  <div class="item">
		<div class="content">
		  <div class="image">
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=87">
				<img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/categorybanner-02-160x170.png" alt="Rose Creek" title="Rose Creek" class="img-responsive" />
			</a>
			</div>
			<div class="caption">
			<div class="cat-title">
				<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=87">Rose Creek</a></h4>
			</div>
			<div class="cat-sub">
			  			  <ul>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=87_91" class="list-group-item">Autumn</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=87_90" class="list-group-item">Grandifolius</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=87_88" class="list-group-item">Green Boxleaf</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=87_97" class="list-group-item">Raulston's Gold</a></li>
			  			  </ul>
			  		   </div>
		  </div>
		  </div>
		   <!-- Caption END -->
		</div>
  	  <div class="item">
		<div class="content">
		  <div class="image">
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=92">
				<img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/categorybanner-01-160x170.png" alt="Canyon Creek" title="Canyon Creek" class="img-responsive" />
			</a>
			</div>
			<div class="caption">
			<div class="cat-title">
				<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=92">Canyon Creek</a></h4>
			</div>
			<div class="cat-sub">
			  			  <ul>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=92_96" class="list-group-item">Abelia</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=92_94" class="list-group-item">Ajuga</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=92_95" class="list-group-item">Aucuba</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/category&amp;path=92_93" class="list-group-item">Coreopsis</a></li>
			  			  </ul>
			  		   </div>
		  </div>
		  </div>
		   <!-- Caption END -->
		</div>
  </div>
</div>
</div>
</div>
</div>
<div class="html-content">
    <div class="box-content"><div id="ttcmsservices">
<div class="services">
  <div class="container">
    <div class="row">
    <div class="tt-title">welcome to the nutrients plants</div>
    <div class="service-subtitle">Quis turpis et volutpat convallis, Plants Product and All</div>
    <div class="services-content">
      <div class="col-sm-4 col-xs-6 left-service service left-to-right hb-animate-element">
      <div class="inner_content">
        <div class="service-img col-sm-3">
          <img alt="Free Shipping" src="image/catalog/demo/banners/service-icon1.png">
        </div>
        <div class="service-content col-sm-9">
        <div class="services-title">Free Shipping</div>
        <div class="service-desc">Lorem ipsum dolor sit amet, conc Lorem sit amet, concLorem ipsum dolor</div>
        </div> 
        </div>
      
      <div class="inner_content">
        <div class="service-img col-sm-3">
          <img alt="big saving" src="image/catalog/demo/banners/service-icon2.png">
        </div>
        <div class="service-content col-sm-9">
        <div class="services-title">big saving</div>
        <div class="service-desc">Lorem ipsum dolor sit amet, conc Lorem sit amet, concLorem ipsum dolor</div>
        </div> 
        </div>
         </div>
      <div class="col-sm-4 col-xs-6 right-service service right-to-left hb-animate-element">
        <div class="inner_content">
          <div class="service-img col-sm-3">
            <img alt="Easy Retrurns" src="image/catalog/demo/banners/service-icon3.png">
          </div>
          <div class="service-content col-sm-9">
          <div class="services-title">Easy Retrurns</div>
          <div class="service-desc">Lorem ipsum dolor sit amet, conc Lorem sit amet, concLorem ipsum dolor</div>
          </div> 
        </div>
        <div class="inner_content">
          <div class="service-img col-sm-3">
            <img alt="24x7 support" src="image/catalog/demo/banners/service-icon4.png">
          </div>
          <div class="service-content col-sm-9">
          <div class="services-title">24x7 support</div>
          <div class="service-desc">Lorem ipsum dolor sit amet, conc Lorem sit amet, concLorem ipsum dolor</div>
          </div> 
        </div>
        </div>
       <div class="col-sm-4 col-xs-4 middle-img bottom-to-top hb-animate-element">
        <div class="service-inner-img">
          	<a href="#">
         		<img alt="about-img.png" src="image/catalog/demo/banners/about-img.png">
      		</a>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div></div>
  </div>

<div class="ttproduct-main hb-animate-element bottom-to-top">
<div class="container">
<div class="TTProduct-Tab TT-product-carousel products-list">
<div class="tthometab">
<div class="box-heading tthometab-title">
	<h3>Trending Products</h3>
	<div class="ttsubtitle">ours plant house</div>
</div>
<div id="TTPTab-0" class="tab-box-heading">
	<ul class="nav nav-tabs">
		  <li><a href="#tab-featured-0" data-toggle="tab">Featured</a></li>
			  <li><a href="#tab-latest-0" data-toggle="tab">Latest</a></li>
			  <li><a href="#tab-bestseller-0" data-toggle="tab">Bestseller</a></li>
			</ul>
</div>
</div>
<div class="tab-content">
  <div id="tab-featured-0" class="tab-pane row">
   <div class="products-carousel">
      	 <div class="product-layouts">
		<div class="product-thumb transition">
		  <div class="image">
								<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=42">
						<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/01-385x501.jpg" title="aliquam quaerat voluptatem" alt="aliquam quaerat voluptatem" />
						<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/01--385x501.jpg" title="aliquam quaerat voluptatem" alt="aliquam quaerat voluptatem" />
					</a>
										  <div class="sale-icon">Sale</div>
			  <span class="percent">-10%</span>
						
			<div class="button-group">
		  	<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('42')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('42');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('42');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=42')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
		  </div>
			
					  </div>
		  
	  	  <div class="thumb-description">
      <div class="caption">
		
        
		
					<div class="rating">
		                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=42">aliquam quaerat voluptatem</a></h4>
		
					<div class="price">
			  			  <span class="price-new">$110.00</span> 
			  <span class="price-old">$122.00</span>
			   
			  			  <span class="price-tax">Without tax: $90.00</span>
			  			</div>
		  
      </div>	  	  
		  
	  </div>
	  </div>
      </div>
	  		
      		 	 <div class="product-layouts">
		<div class="product-thumb transition">
		  <div class="image">
								<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=28">
						<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/04-385x501.jpg" title="aspetur autodit autfugit" alt="aspetur autodit autfugit" />
						<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/04--385x501.jpg" title="aspetur autodit autfugit" alt="aspetur autodit autfugit" />
					</a>
										  <div class="sale-icon">Sale</div>
			  <span class="percent">-80%</span>
						
			<div class="button-group">
		  	<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('28')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('28');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('28');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=28')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
		  </div>
			
					  </div>
		  
	  	  <div class="thumb-description">
      <div class="caption">
		
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=28">aspetur autodit autfugit</a></h4>
		
					<div class="price">
			  			  <span class="price-new">$26.00</span> 
			  <span class="price-old">$122.00</span>
			   
			  			  <span class="price-tax">Without tax: $20.00</span>
			  			</div>
		  
      </div>	  	  
		  
	  </div>
	  </div>
      </div>
	  		
      		 	 <div class="product-layouts">
		<div class="product-thumb transition">
		  <div class="image">
								<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=41">
						<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/05-385x501.jpg" title="magni dolores eosquies" alt="magni dolores eosquies" />
						<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/05--385x501.jpg" title="magni dolores eosquies" alt="magni dolores eosquies" />
					</a>
										  <div class="sale-icon">Sale</div>
			  <span class="percent">-80%</span>
						
			<div class="button-group">
		  	<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('41')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('41');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('41');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=41')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
		  </div>
			
					  </div>
		  
	  	  <div class="thumb-description">
      <div class="caption">
		
        <!--<p class="description">
	Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors. And more memory standard. Combine this with Mac OS X Leopard and iLife ´08, and it´s more all-in-one than ever. iMac packs amazing performance into a stunningly slim space.
..</p>-->
		
					<div class="rating">
		                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=41">magni dolores eosquies</a></h4>
		
					<div class="price">
			  			  <span class="price-new">$26.00</span> 
			  <span class="price-old">$122.00</span>
			   
			  			  <span class="price-tax">Without tax: $20.00</span>
			  			</div>
		  
      </div>	  	  
		  
	  </div>
	  </div>
      </div>
	  		
      		 	 <div class="product-layouts">
		<div class="product-thumb transition">
		  <div class="image">
								<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=46">
						<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/17-385x501.jpg" title="voluptas nulla pariatur" alt="voluptas nulla pariatur" />
						<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/04-385x501.jpg" title="voluptas nulla pariatur" alt="voluptas nulla pariatur" />
					</a>
										
			<div class="button-group">
		  	<button class="btn-cart disabled" type="button" title="Out Of Stock" onclick="" >
			 				<i class="fa fa-shopping-cart"></i><span class="out of stock">Out Of Stock
							</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('46');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('46');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=46')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
		  </div>
			
					  </div>
		  
	  	  <div class="thumb-description">
      <div class="caption">
		
        <!--<p class="description">
	Unprecedented power. The next generation of processing technology has arrived. Built into the newest VAIO notebooks lies Intel&#39;s latest, most powerful innovation yet: Intel&reg; Centrino&reg; 2 processor technology. Boasting incredible speed, expanded wireless connectivity, enhanced multimedia support and greater energy efficiency, all the high-performance essentials are seamlessly combined into a single chip.
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=46">voluptas nulla pariatur</a></h4>
		
					<div class="price">
			  			  $1,202.00
			   
			  			  <span class="price-tax">Without tax: $1,000.00</span>
			  			</div>
		  
      </div>	  	  
		  
	  </div>
	  </div>
      </div>
	  		
      		 	 <div class="product-layouts">
		<div class="product-thumb transition">
		  <div class="image">
								<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=40">
						<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/19-385x501.jpg" title="voluptate velit esse" alt="voluptate velit esse" />
						<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/02-385x501.jpg" title="voluptate velit esse" alt="voluptate velit esse" />
					</a>
										
			<div class="button-group">
		  	<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('40')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('40');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('40');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=40')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
		  </div>
			
					  </div>
		  
	  	  <div class="thumb-description">
      <div class="caption">
		
        <!--<p class="description">
	iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=40">voluptate velit esse</a></h4>
		
					<div class="price">
			  			  $123.20
			   
			  			  <span class="price-tax">Without tax: $101.00</span>
			  			</div>
		  
      </div>	  	  
		  
	  </div>
	  </div>
      </div>
	  		
      		 	 <div class="product-layouts">
		<div class="product-thumb transition">
		  <div class="image">
								<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=45">
						<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/11-385x501.jpg" title="quis autem veleuminium" alt="quis autem veleuminium" />
						<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/10-385x501.jpg" title="quis autem veleuminium" alt="quis autem veleuminium" />
					</a>
										
			<div class="button-group">
		  	<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('45')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('45');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('45');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=45')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
		  </div>
			
					  </div>
		  
	  	  <div class="thumb-description">
      <div class="caption">
		
        <!--<p class="description">
	
		
			Latest Intel mobile architecture
		
			Powered by the most advanced mobile processors from Intel, the new Core 2 Duo MacBook Pro is over 50% faster than the original Core Duo MacBook Pro and now supports up to 4GB of RAM.
		
			Leading-edge graphics
		
			The NVIDIA GeForce 8600M GT delivers exceptional graphics processing power. For the ultimate creative canvas, you can even configure the 17-inch model with a 1920-by-1200 resolution display.
		
			Designed for life on the road
		
			Innovations such as a magnetic power connection and an illuminated keyboard with ambient light sensor put the MacBook Pro in a class by itself.
		
			Connect. Create. Communicate.
		
			Quickly set up a video conference with the built-in iSight camera. Control presentations and media from up to 30 feet away with the included Apple Remote. Connect to high-bandwidth peripherals with FireWire 800 and DVI.
		
			Next-generation wireless
		
			Featuring 802.11n wireless technology, the MacBook Pro delivers up to five times the performance and up to twice the range of previous-generation technologies.
	

..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=45">quis autem veleuminium</a></h4>
		
					<div class="price">
			  			  $2,000.00
			   
			  			  <span class="price-tax">Without tax: $2,000.00</span>
			  			</div>
		  
      </div>	  	  
		  
	  </div>
	  </div>
      </div>
	  		
      		 	 <div class="product-layouts">
		<div class="product-thumb transition">
		  <div class="image">
								<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=43">
						<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/09-385x501.jpg" title="perspiciatis unde omnis" alt="perspiciatis unde omnis" />
						<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/12-385x501.jpg" title="perspiciatis unde omnis" alt="perspiciatis unde omnis" />
					</a>
										
			<div class="button-group">
		  	<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('43')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('43');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('43');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=43')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
		  </div>
			
					  </div>
		  
	  	  <div class="thumb-description">
      <div class="caption">
		
        <!--<p class="description">
	
		Intel Core 2 Duo processor
	
		Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.
	
		1GB memory, larger hard drives
	
		The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.
	
		Sleek, 1.08-inch-thin design
	
		MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.
	
		Built-in iSight camera
	
		Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth

..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=43">perspiciatis unde omnis</a></h4>
		
					<div class="price">
			  			  $14.00
			   
			  			  <span class="price-tax">Without tax: $10.00</span>
			  			</div>
		  
      </div>	  	  
		  
	  </div>
	  </div>
      </div>
	  		
      		 	 <div class="product-layouts">
		<div class="product-thumb transition">
		  <div class="image">
								<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=47">
						<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/03-385x501.jpg" title="aliquam quat voluptatem" alt="aliquam quat voluptatem" />
						<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/03--385x501.jpg" title="aliquam quat voluptatem" alt="aliquam quat voluptatem" />
					</a>
										  <div class="sale-icon">Sale</div>
			  <span class="percent">-20%</span>
						
			<div class="button-group">
		  	<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('47')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('47');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('47');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=47')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
		  </div>
			
					  </div>
		  
	  	  <div class="thumb-description">
      <div class="caption">
		
        <!--<p class="description">
	Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget you&#39;re at the office
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=47">aliquam quat voluptatem</a></h4>
		
					<div class="price">
			  			  <span class="price-new">$98.00</span> 
			  <span class="price-old">$122.00</span>
			   
			  			  <span class="price-tax">Without tax: $80.00</span>
			  			</div>
		  
      </div>	  	  
		  
	  </div>
	  </div>
      </div>
	  		
      		 	 <div class="product-layouts">
		<div class="product-thumb transition">
		  <div class="image">
								<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=48">
						<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/18-385x501.jpg" title="voluptas sit aspernatur" alt="voluptas sit aspernatur" />
						<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/03-385x501.jpg" title="voluptas sit aspernatur" alt="voluptas sit aspernatur" />
					</a>
										
			<div class="button-group">
		  	<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('48')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('48');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('48');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=48')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
		  </div>
			
					  </div>
		  
	  	  <div class="thumb-description">
      <div class="caption">
		
        <!--<p class="description">
	
		
			More room to move.
		
			With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.
		
			Cover Flow.
		
			Browse through your music collection by flipping through album art. Select an album to turn it over and see the track list.
		
			Enhanced interface.
		
			Experience a whole new way to browse and view your music and video.
		
			Sleeker design.
		
			Beautiful, durable, and sleeker than ever, iPod classic now features an anodized aluminum and polished stainless steel enclosure with rounded edges.
	

..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=48">voluptas sit aspernatur</a></h4>
		
					<div class="price">
			  			  $122.00
			   
			  			  <span class="price-tax">Without tax: $100.00</span>
			  			</div>
		  
      </div>	  	  
		  
	  </div>
	  </div>
      </div>
	  		
      		 	 <div class="product-layouts">
		<div class="product-thumb transition">
		  <div class="image">
								<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=29">
						<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/13-385x501.jpg" title="similique suntin culpaqui" alt="similique suntin culpaqui" />
						<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/08-385x501.jpg" title="similique suntin culpaqui" alt="similique suntin culpaqui" />
					</a>
										
			<div class="button-group">
		  	<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('29')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('29');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('29');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=29')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
		  </div>
			
					  </div>
		  
	  	  <div class="thumb-description">
      <div class="caption">
		
        <!--<p class="description">
	Redefine your workday with the Palm Treo Pro smartphone. Perfectly balanced, you can respond to business and personal email, stay on top of appointments and contacts, and use Wi-Fi or GPS when you&rsquo;re out and about. Then watch a video on YouTube, catch up with news and sports on the web, or listen to a few songs. Balance your work and play the way you like it, with the Palm Treo Pro.

	Features

	
		Windows Mobile&reg; 6.1 Professional Edition
	
		Qualcomm&reg; MSM7201 400MHz Processor
	
		320x320 transflective colour TFT touchscreen
	
		HSDPA/UMTS/EDGE/GPRS/GSM radio
	
		Tri-band UMTS &mdash; 850MHz, 1900MHz, 2100MHz
	
		Quad-band GSM &mdash; 850/900/1800/1900
	
		802.11b/g with WPA, WPA2, and 801.1x authentication
	
		Built-in GPS
	
		Bluetooth Version: 2.0 + Enhanced Data Rate
	
		256MB storage (100MB user available), 128MB RAM
	
		2.0 megapixel camera, up to 8x digital zoom and video capture
	
		Removable, rechargeable 1500mAh lithium-ion battery
	
		Up to 5.0 hours talk time and up to 250 hours standby
	
		MicroSDHC card expansion (up to 32GB supported)
	
		MicroUSB 2.0 for synchronization and charging
	
		3.5mm stereo headset jack
	
		60mm (W) x 114mm (L) x 13.5mm (D) / 133g

..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=29">similique suntin culpaqui</a></h4>
		
					<div class="price">
			  			  $337.99
			   
			  			  <span class="price-tax">Without tax: $279.99</span>
			  			</div>
		  
      </div>	  	  
		  
	  </div>
	  </div>
      </div>
	  		
      		 	 <div class="product-layouts">
		<div class="product-thumb transition">
		  <div class="image">
								<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=49">
						<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/20-385x501.jpg" title="suscipit laboriosam nisi" alt="suscipit laboriosam nisi" />
						<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/06-385x501.jpg" title="suscipit laboriosam nisi" alt="suscipit laboriosam nisi" />
					</a>
										
			<div class="button-group">
		  	<button class="btn-cart disabled" type="button" title="Out Of Stock" onclick="" >
			 				<i class="fa fa-shopping-cart"></i><span class="out of stock">Out Of Stock
							</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('49');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('49');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=49')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
		  </div>
			
					  </div>
		  
	  	  <div class="thumb-description">
      <div class="caption">
		
        <!--<p class="description">
	Samsung Galaxy Tab 10.1, is the world&rsquo;s thinnest tablet, measuring 8.6 mm thickness, running with Android 3.0 Honeycomb OS on a 1GHz dual-core Tegra 2 processor, similar to its younger brother Samsung Galaxy Tab 8.9.

	Samsung Galaxy Tab 10.1 gives pure Android 3.0 experience, adding its new TouchWiz UX or TouchWiz 4.0 &ndash; includes a live panel, which lets you to customize with different content, such as your pictures, bookmarks, and social feeds, sporting a 10.1 inches WXGA capacitive touch screen with 1280 x 800 pixels of resolution, equipped with 3 megapixel rear camera with LED flash and a 2 megapixel front camera, HSPA+ connectivity up to 21Mbps, 720p HD video recording capability, 1080p HD playback, DLNA support, Bluetooth 2.1, USB 2.0, gyroscope, Wi-Fi 802.11 a/b/g/n, micro-SD slot, 3.5mm headphone jack, and SIM slot, including the Samsung Stick &ndash; a Bluetooth microphone that can be carried in a pocket like a pen and sound dock with powered subwoofer.

	Samsung Galaxy Tab 10.1 will come in 16GB / 32GB / 64GB verities and pre-loaded with Social Hub, Reader&rsquo;s Hub, Music Hub and Samsung Mini Apps Tray &ndash; which gives you access to more commonly used apps to help ease multitasking and it is capable of Adobe Flash Player 10.2, powered by 6860mAh battery that gives you 10hours of video-playback time.&nbsp;&auml;&ouml;
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=49">suscipit laboriosam nisi</a></h4>
		
					<div class="price">
			  			  $241.99
			   
			  			  <span class="price-tax">Without tax: $199.99</span>
			  			</div>
		  
      </div>	  	  
		  
	  </div>
	  </div>
      </div>
	  		
      		  
    </div>
</div>

  <div id="tab-latest-0" class="tab-pane row">
	<div class="products-carousel">
	  	  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=49">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/20-385x501.jpg" title="suscipit laboriosam nisi" alt="suscipit laboriosam nisi" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/06-385x501.jpg" title="suscipit laboriosam nisi" alt="suscipit laboriosam nisi" />
			</a>

		        		
		<div class="button-group">
			<button class="btn-cart disabled" type="button" title="Out Of Stock" onclick="" >
			 				<i class="fa fa-shopping-cart"></i><span class="out of stock">Out Of Stock
							</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('49');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('49');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=49')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	Samsung Galaxy Tab 10.1, is the world&rsquo;s thinnest tablet, measuring 8.6 mm thickness, running with Android 3.0 Honeycomb OS on a 1GHz dual-core Tegra 2 processor, similar to its younger brother Samsung Galaxy Tab 8.9.

	Samsung Galaxy Tab 10.1 gives pure Android 3.0 experience, adding its new TouchWiz UX or TouchWiz 4.0 &ndash; includes a live panel, which lets you to customize with different content, such as your pictures, bookmarks, and social feeds, sporting a 10.1 inches WXGA capacitive touch screen with 1280 x 800 pixels of resolution, equipped with 3 megapixel rear camera with LED flash and a 2 megapixel front camera, HSPA+ connectivity up to 21Mbps, 720p HD video recording capability, 1080p HD playback, DLNA support, Bluetooth 2.1, USB 2.0, gyroscope, Wi-Fi 802.11 a/b/g/n, micro-SD slot, 3.5mm headphone jack, and SIM slot, including the Samsung Stick &ndash; a Bluetooth microphone that can be carried in a pocket like a pen and sound dock with powered subwoofer.

	Samsung Galaxy Tab 10.1 will come in 16GB / 32GB / 64GB verities and pre-loaded with Social Hub, Reader&rsquo;s Hub, Music Hub and Samsung Mini Apps Tray &ndash; which gives you access to more commonly used apps to help ease multitasking and it is capable of Adobe Flash Player 10.2, powered by 6860mAh battery that gives you 10hours of video-playback time.&nbsp;&auml;&ouml;
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=49">suscipit laboriosam nisi</a></h4>
        
                <div class="price">
                    $241.99
           
                    <span class="price-tax">Without tax: $199.99</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=48">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/18-385x501.jpg" title="voluptas sit aspernatur" alt="voluptas sit aspernatur" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/03-385x501.jpg" title="voluptas sit aspernatur" alt="voluptas sit aspernatur" />
			</a>

		        		
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('48')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('48');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('48');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=48')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	
		
			More room to move.
		
			With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.
		
			Cover Flow.
		
			Browse through your music collection by flipping through album art. Select an album to turn it over and see the track list.
		
			Enhanced interface.
		
			Experience a whole new way to browse and view your music and video.
		
			Sleeker design.
		
			Beautiful, durable, and sleeker than ever, iPod classic now features an anodized aluminum and polished stainless steel enclosure with rounded edges.
	

..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=48">voluptas sit aspernatur</a></h4>
        
                <div class="price">
                    $122.00
           
                    <span class="price-tax">Without tax: $100.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=47">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/03-385x501.jpg" title="aliquam quat voluptatem" alt="aliquam quat voluptatem" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/03--385x501.jpg" title="aliquam quat voluptatem" alt="aliquam quat voluptatem" />
			</a>

		        		  <div class="sale-icon">Sale</div>
		  <span class="percent">-20%</span>
				
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('47')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('47');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('47');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=47')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget you&#39;re at the office
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=47">aliquam quat voluptatem</a></h4>
        
                <div class="price">
                    <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
		   
                    <span class="price-tax">Without tax: $80.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=46">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/17-385x501.jpg" title="voluptas nulla pariatur" alt="voluptas nulla pariatur" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/04-385x501.jpg" title="voluptas nulla pariatur" alt="voluptas nulla pariatur" />
			</a>

		        		
		<div class="button-group">
			<button class="btn-cart disabled" type="button" title="Out Of Stock" onclick="" >
			 				<i class="fa fa-shopping-cart"></i><span class="out of stock">Out Of Stock
							</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('46');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('46');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=46')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	Unprecedented power. The next generation of processing technology has arrived. Built into the newest VAIO notebooks lies Intel&#39;s latest, most powerful innovation yet: Intel&reg; Centrino&reg; 2 processor technology. Boasting incredible speed, expanded wireless connectivity, enhanced multimedia support and greater energy efficiency, all the high-performance essentials are seamlessly combined into a single chip.
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=46">voluptas nulla pariatur</a></h4>
        
                <div class="price">
                    $1,202.00
           
                    <span class="price-tax">Without tax: $1,000.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=45">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/11-385x501.jpg" title="quis autem veleuminium" alt="quis autem veleuminium" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/10-385x501.jpg" title="quis autem veleuminium" alt="quis autem veleuminium" />
			</a>

		        		
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('45')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('45');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('45');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=45')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	
		
			Latest Intel mobile architecture
		
			Powered by the most advanced mobile processors from Intel, the new Core 2 Duo MacBook Pro is over 50% faster than the original Core Duo MacBook Pro and now supports up to 4GB of RAM.
		
			Leading-edge graphics
		
			The NVIDIA GeForce 8600M GT delivers exceptional graphics processing power. For the ultimate creative canvas, you can even configure the 17-inch model with a 1920-by-1200 resolution display.
		
			Designed for life on the road
		
			Innovations such as a magnetic power connection and an illuminated keyboard with ambient light sensor put the MacBook Pro in a class by itself.
		
			Connect. Create. Communicate.
		
			Quickly set up a video conference with the built-in iSight camera. Control presentations and media from up to 30 feet away with the included Apple Remote. Connect to high-bandwidth peripherals with FireWire 800 and DVI.
		
			Next-generation wireless
		
			Featuring 802.11n wireless technology, the MacBook Pro delivers up to five times the performance and up to twice the range of previous-generation technologies.
	

..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=45">quis autem veleuminium</a></h4>
        
                <div class="price">
                    $2,000.00
           
                    <span class="price-tax">Without tax: $2,000.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=44">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/10-385x501.jpg" title="quaerat outt voluptatem" alt="quaerat outt voluptatem" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/11-385x501.jpg" title="quaerat outt voluptatem" alt="quaerat outt voluptatem" />
			</a>

		        		
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('44')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('44');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('44');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=44')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	MacBook Air is ultrathin, ultraportable, and ultra unlike anything else. But you don&rsquo;t lose inches and pounds overnight. It&rsquo;s the result of rethinking conventions. Of multiple wireless innovations. And of breakthrough design. With MacBook Air, mobile computing suddenly has a new standard.
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=44">quaerat outt voluptatem</a></h4>
        
                <div class="price">
                    $1,202.00
           
                    <span class="price-tax">Without tax: $1,000.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=43">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/09-385x501.jpg" title="perspiciatis unde omnis" alt="perspiciatis unde omnis" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/12-385x501.jpg" title="perspiciatis unde omnis" alt="perspiciatis unde omnis" />
			</a>

		        		
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('43')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('43');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('43');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=43')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	
		Intel Core 2 Duo processor
	
		Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.
	
		1GB memory, larger hard drives
	
		The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.
	
		Sleek, 1.08-inch-thin design
	
		MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.
	
		Built-in iSight camera
	
		Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth

..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=43">perspiciatis unde omnis</a></h4>
        
                <div class="price">
                    $14.00
           
                    <span class="price-tax">Without tax: $10.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=42">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/01-385x501.jpg" title="aliquam quaerat voluptatem" alt="aliquam quaerat voluptatem" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/01--385x501.jpg" title="aliquam quaerat voluptatem" alt="aliquam quaerat voluptatem" />
			</a>

		        		  <div class="sale-icon">Sale</div>
		  <span class="percent">-10%</span>
				
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('42')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('42');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('42');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=42')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the tools and palettes needed to edit, format and composite your work. Combine this display with a Mac Pro, MacBook Pro, or PowerMac G5 and there's no limit to what you can achieve. 
	
	The Cinema HD features an active-matrix liquid crystal display that produces flicker-free images that deliver twice the brightness, twice the sharpness and twice the contrast ratio of a typical CRT display. Unlike other flat panels, it's designed with a pure digital interface to deliver distortion-free images that never need adjusting. With over 4 million digital pixels, the display is uniquely suited for scientific and technical applications such as visualizing molecular structures or analyzing geological data. 
	
	Offering accurate, brilliant color performance, the Cinema HD delivers up to 16.7 million colors across a wide gamut allowing you to see subtle nuances between colors from soft pastels to rich jewel tones. A wide viewing angle ensures uniform color from edge to edge. Apple's ColorSync technology allows you to create custom profiles to maintain consistent color onscreen and in print. The result: You can confidently use this display in all your color-critical applications. 
	
	Housed in a new aluminum design, the display has a very thin bezel that enhances visual accuracy. Each display features two FireWire 400 ports and two USB 2.0 ports, making attachment of desktop peripherals, such as iSight, iPod, digital and still cameras, hard drives, printers and scanners, even more accessible and convenient. Taking advantage of the much thinner and lighter footprint of an LCD, the new displays support the VESA (Video Electronics Standards Association) mounting interface standard. Customers with the optional Cinema Display VESA Mount Adapter kit gain the flexibility to mount their display in locations most appropriate for their work environment. 
	
	The Cinema HD features a single cable design with elegant breakout for the USB 2.0, FireWire 400 and a pure digital connection using the industry standard Digital Video Interface (DVI) interface. The DVI connection allows for a direct pure-digital connection.
	

	Features:

	Unrivaled display performance

	
		30-inch (viewable) active-matrix liquid crystal display provides breathtaking image quality and vivid, richly saturated color.
	
		Support for 2560-by-1600 pixel resolution for display of high definition still and video imagery.
	
		Wide-format design for simultaneous display of two full pages of text and graphics.
	
		Industry standard DVI connector for direct attachment to Mac- and Windows-based desktops and notebooks
	
		Incredibly wide (170 degree) horizontal and vertical viewing angle for maximum visibility and color performance.
	
		Lightning-fast pixel response for full-motion digital video playback.
	
		Support for 16.7 million saturated colors, for use in all graphics-intensive applications.


	Simple setup and operation

	
		Single cable with elegant breakout for connection to DVI, USB and FireWire ports
	
		Built-in two-port USB 2.0 hub for easy connection of desktop peripheral devices.
	
		Two FireWire 400 ports to support iSight and other desktop peripherals


	Sleek, elegant design

	
		Huge virtual workspace, very small footprint.
	
		Narrow Bezel design to minimize visual impact of using dual displays
	
		Unique hinge design for effortless adjustment
	
		Support for VESA mounting solutions (Apple Cinema Display VESA Mount Adapter sold separately)


	Technical specifications

	Screen size (diagonal viewable image size)

	
		Apple Cinema HD Display: 30 inches (29.7-inch viewable)


	Screen type

	
		Thin film transistor (TFT) active-matrix liquid crystal display (AMLCD)


	Resolutions

	
		2560 x 1600 pixels (optimum resolution)
	
		2048 x 1280
	
		1920 x 1200
	
		1280 x 800
	
		1024 x 640


	Display colors (maximum)

	
		16.7 million


	Viewing angle (typical)

	
		170° horizontal; 170° vertical


	Brightness (typical)

	
		30-inch Cinema HD Display: 400 cd/m2


	Contrast ratio (typical)

	
		700:1


	Response time (typical)

	
		16 ms


	Pixel pitch

	
		30-inch Cinema HD Display: 0.250 mm


	Screen treatment

	
		Antiglare hardcoat


	User controls (hardware and software)

	
		Display Power,
	
		System sleep, wake
	
		Brightness
	
		Monitor tilt


	Connectors and cables
	Cable

	
		DVI (Digital Visual Interface)
	
		FireWire 400
	
		USB 2.0
	
		DC power (24 V)


	Connectors

	
		Two-port, self-powered USB 2.0 hub
	
		Two FireWire 400 ports
	
		Kensington security port


	VESA mount adapter
	Requires optional Cinema Display VESA Mount Adapter (M9649G/A)

	
		Compatible with VESA FDMI (MIS-D, 100, C) compliant mounting solutions


	Electrical requirements

	
		Input voltage: 100-240 VAC 50-60Hz
	
		Maximum power when operating: 150W
	
		Energy saver mode: 3W or less


	Environmental requirements

	
		Operating temperature: 50° to 95° F (10° to 35° C)
	
		Storage temperature: -40° to 116° F (-40° to 47° C)
	
		Operating humidity: 20% to 80% noncondensing
	
		Maximum operating altitude: 10,000 feet


	Agency approvals

	
		FCC Part 15 Class B
	
		EN55022 Class B
	
		EN55024
	
		VCCI Class B
	
		AS/NZS 3548 Class B
	
		CNS 13438 Class B
	
		ICES-003 Class B
	
		ISO 13406 part 2
	
		MPR II
	
		IEC 60950
	
		UL 60950
	
		CSA 60950
	
		EN60950
	
		ENERGY STAR
	
		TCO '03


	Size and weight
	30-inch Apple Cinema HD Display

	
		Height: 21.3 inches (54.3 cm)
	
		Width: 27.2 inches (68.8 cm)
	
		Depth: 8.46 inches (21.5 cm)
	
		Weight: 27.5 pounds (12.5 kg)


	System Requirements

	
		Mac Pro, all graphic options
	
		MacBook Pro
	
		Power Mac G5 (PCI-X) with ATI Radeon 9650 or better or NVIDIA GeForce 6800 GT DDL or better
	
		Power Mac G5 (PCI Express), all graphics options
	
		PowerBook G4 with dual-link DVI support
	
		Windows PC and graphics card that supports DVI ports with dual-link digital bandwidth and VESA DDC standard for plug-and-play setup

..</p>-->
		
					<div class="rating">
		                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=42">aliquam quaerat voluptatem</a></h4>
        
                <div class="price">
                    <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
		   
                    <span class="price-tax">Without tax: $90.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=41">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/05-385x501.jpg" title="magni dolores eosquies" alt="magni dolores eosquies" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/05--385x501.jpg" title="magni dolores eosquies" alt="magni dolores eosquies" />
			</a>

		        		  <div class="sale-icon">Sale</div>
		  <span class="percent">-80%</span>
				
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('41')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('41');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('41');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=41')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors. And more memory standard. Combine this with Mac OS X Leopard and iLife ´08, and it´s more all-in-one than ever. iMac packs amazing performance into a stunningly slim space.
..</p>-->
		
					<div class="rating">
		                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=41">magni dolores eosquies</a></h4>
        
                <div class="price">
                    <span class="price-new">$26.00</span> <span class="price-old">$122.00</span>
		   
                    <span class="price-tax">Without tax: $20.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=40">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/19-385x501.jpg" title="voluptate velit esse" alt="voluptate velit esse" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/02-385x501.jpg" title="voluptate velit esse" alt="voluptate velit esse" />
			</a>

		        		
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('40')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('40');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('40');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=40')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=40">voluptate velit esse</a></h4>
        
                <div class="price">
                    $123.20
           
                    <span class="price-tax">Without tax: $101.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=36">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/06-385x501.jpg" title="neque porro quisquam" alt="neque porro quisquam" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/15-385x501.jpg" title="neque porro quisquam" alt="neque porro quisquam" />
			</a>

		        		
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('36')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('36');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('36');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=36')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	
		Video in your pocket.
	
		Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inch display thats 65% brighter than before.
	
		Cover Flow.
	
		Browse through your music collection by flipping through album art. Select an album to turn it over and see the track list.&nbsp;
	
		Enhanced interface.
	
		Experience a whole new way to browse and view your music and video.
	
		Sleek and colorful.
	
		With an anodized aluminum and polished stainless steel enclosure and a choice of five colors, iPod nano is dressed to impress.
	
		iTunes.
	
		Available as a free download, iTunes makes it easy to browse and buy millions of songs, movies, TV shows, audiobooks, and games and download free podcasts all at the iTunes Store. And you can import your own music, manage your whole media library, and sync your iPod or iPhone with ease.

..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=36">neque porro quisquam</a></h4>
        
                <div class="price">
                    $122.00
           
                    <span class="price-tax">Without tax: $100.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=35">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/14-385x501.jpg" title="sint incidunt utlabore" alt="sint incidunt utlabore" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/07-385x501.jpg" title="sint incidunt utlabore" alt="sint incidunt utlabore" />
			</a>

		        		
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('35')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('35');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('35');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=35')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	Product 8
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=35">sint incidunt utlabore</a></h4>
        
                <div class="price">
                    $122.00
           
                    <span class="price-tax">Without tax: $100.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=34">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/07-385x501.jpg" title="neque porro quisquamest" alt="neque porro quisquamest" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/14-385x501.jpg" title="neque porro quisquamest" alt="neque porro quisquamest" />
			</a>

		        		
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('34')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('34');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('34');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=34')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	Born to be worn.
	
		Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement.
	
		Random meets rhythm.
	
		With iTunes autofill, iPod shuffle can deliver a new musical experience every time you sync. For more randomness, you can shuffle songs during playback with the slide of a switch.
	Everything is easy.
	
		Charge and sync with the included USB dock. Operate the iPod shuffle controls with one hand. Enjoy up to 12 hours straight of skip-free music playback.

..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=34">neque porro quisquamest</a></h4>
        
                <div class="price">
                    $122.00
           
                    <span class="price-tax">Without tax: $100.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=33">
				<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/16-385x501.jpg" title="tempora incidunt utlabore" alt="tempora incidunt utlabore" />
				<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/05-385x501.jpg" title="tempora incidunt utlabore" alt="tempora incidunt utlabore" />
			</a>

		        		
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('33')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('33');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('33');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=33')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	Imagine the advantages of going big without slowing down. The big 19&quot; 941BW monitor combines wide aspect ratio with fast pixel response time, for bigger images, more room to work and crisp motion. In addition, the exclusive MagicBright 2, MagicColor and MagicTune technologies help deliver the ideal image in every situation, while sleek, narrow bezels and adjustable stands deliver style just the way you want it. With the Samsung 941BW widescreen analog/digital LCD monitor, it&#39;s not hard to imagine.
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=33">tempora incidunt utlabore</a></h4>
        
                <div class="price">
                    $242.00
           
                    <span class="price-tax">Without tax: $200.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		  		 <div class="product-layouts">
		  <div class="product-thumb transition">
      <div class="image">
	
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=32">
				<img class="img-responsive" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/08-385x501.jpg" alt="nostrum exercitationem" title="nostrum exercitationem" />
			</a>
	        		
		<div class="button-group">
			<button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('32')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
			<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('32');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('32');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=32')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
        </div>
		
				
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	    
        
		<!--<p class="description">
	Revolutionary multi-touch interface.
	iPod touch features the same multi-touch screen technology as iPhone. Pinch to zoom in on a photo. Scroll through your songs and videos with a flick. Flip through your library by album artwork with Cover Flow.

	Gorgeous 3.5-inch widescreen display.
	Watch your movies, TV shows, and photos come alive with bright, vivid color on the 320-by-480-pixel display.

	Music downloads straight from iTunes.
	Shop the iTunes Wi-Fi Music Store from anywhere with Wi-Fi.1 Browse or search to find the music youre looking for, preview it, and buy it with just a tap.

	Surf the web with Wi-Fi.
	Browse the web using Safari and watch YouTube videos on the first iPod with Wi-Fi built in
	&nbsp;
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=32">nostrum exercitationem</a></h4>
        
                <div class="price">
                    $122.00
           
                    <span class="price-tax">Without tax: $100.00</span>
		          </div>
				
      </div>
        
	  </div>
	  </div>
	</div>	
		</div>
</div>


 <div id="tab-bestseller-0" class="tab-pane row">
    <div class="products-carousel">
            <div class="product-layouts">
          <div class="product-thumb transition">
      <div class="image">
						<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=28">
					<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/04-385x501.jpg" title="aspetur autodit autfugit" alt="aspetur autodit autfugit" />
					<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/04--385x501.jpg" title="aspetur autodit autfugit" alt="aspetur autodit autfugit" />
				</a>

			 
        		  <div class="sale-icon">Sale</div>
		  <span class="percent">-80%</span>
				
		<div class="button-group">
		    <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('28')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('28');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('28');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=28')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
      	</div>
		 
		 		 
	  </div>
	  <div class="thumb-description">
      <div class="caption">
        
		<!--<p class="description">
	HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high definition clarity for a mobile experience you never thought possible. Seductively sleek, the HTC Touch HD provides the next generation of mobile functionality, all at a simple touch. Fully integrated with Windows Mobile Professional 6.1, ultrafast 3.5G, GPS, 5MP camera, plus lots more - all delivered on a breathtakingly crisp 3.8&quot; WVGA touchscreen - you can take control of your mobile world with the HTC Touch HD.

	Features

	
		Processor Qualcomm&reg; MSM 7201A&trade; 528 MHz
	
		Windows Mobile&reg; 6.1 Professional Operating System
	
		Memory: 512 MB ROM, 288 MB RAM
	
		Dimensions: 115 mm x 62.8 mm x 12 mm / 146.4 grams
	
		3.8-inch TFT-LCD flat touch-sensitive screen with 480 x 800 WVGA resolution
	
		HSDPA/WCDMA: Europe/Asia: 900/2100 MHz; Up to 2 Mbps up-link and 7.2 Mbps down-link speeds
	
		Quad-band GSM/GPRS/EDGE: Europe/Asia: 850/900/1800/1900 MHz (Band frequency, HSUPA availability, and data speed are operator dependent.)
	
		Device Control via HTC TouchFLO&trade; 3D &amp; Touch-sensitive front panel buttons
	
		GPS and A-GPS ready
	
		Bluetooth&reg; 2.0 with Enhanced Data Rate and A2DP for wireless stereo headsets
	
		Wi-Fi&reg;: IEEE 802.11 b/g
	
		HTC ExtUSB&trade; (11-pin mini-USB 2.0)
	
		5 megapixel color camera with auto focus
	
		VGA CMOS color camera
	
		Built-in 3.5 mm audio jack, microphone, speaker, and FM radio
	
		Ring tone formats: AAC, AAC+, eAAC+, AMR-NB, AMR-WB, QCP, MP3, WMA, WAV
	
		40 polyphonic and standard MIDI format 0 and 1 (SMF)/SP MIDI
	
		Rechargeable Lithium-ion or Lithium-ion polymer 1350 mAh battery
	
		Expansion Slot: microSD&trade; memory card (SD 2.0 compatible)
	
		AC Adapter Voltage range/frequency: 100 ~ 240V AC, 50/60 Hz DC output: 5V and 1A
	
		Special Features: FM Radio, G-Sensor

..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=28">aspetur autodit autfugit</a></h4>
      
                <div class="price">
                    <span class="price-new">$26.00</span> <span class="price-old">$122.00</span>
                              <span class="price-tax">Without tax: $20.00</span>
                  </div> 
	        </div>
       
	  </div>
	  </div>
        </div>
	  		
      		   		
	      <div class="product-layouts">
          <div class="product-thumb transition">
      <div class="image">
						<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=40">
					<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/19-385x501.jpg" title="voluptate velit esse" alt="voluptate velit esse" />
					<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/02-385x501.jpg" title="voluptate velit esse" alt="voluptate velit esse" />
				</a>

			 
        		
		<div class="button-group">
		    <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('40')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('40');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('40');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=40')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
      	</div>
		 
		 		 
	  </div>
	  <div class="thumb-description">
      <div class="caption">
        
		<!--<p class="description">
	iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=40">voluptate velit esse</a></h4>
      
                <div class="price">
                    $123.20
                              <span class="price-tax">Without tax: $101.00</span>
                  </div> 
	        </div>
       
	  </div>
	  </div>
        </div>
	  		
      		   		
	      <div class="product-layouts">
          <div class="product-thumb transition">
      <div class="image">
						<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=41">
					<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/05-385x501.jpg" title="magni dolores eosquies" alt="magni dolores eosquies" />
					<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/05--385x501.jpg" title="magni dolores eosquies" alt="magni dolores eosquies" />
				</a>

			 
        		  <div class="sale-icon">Sale</div>
		  <span class="percent">-80%</span>
				
		<div class="button-group">
		    <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('41')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('41');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('41');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=41')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
      	</div>
		 
		 		 
	  </div>
	  <div class="thumb-description">
      <div class="caption">
        
		<!--<p class="description">
	Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors. And more memory standard. Combine this with Mac OS X Leopard and iLife ´08, and it´s more all-in-one than ever. iMac packs amazing performance into a stunningly slim space.
..</p>-->
		
					<div class="rating">
		                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
		  		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=41">magni dolores eosquies</a></h4>
      
                <div class="price">
                    <span class="price-new">$26.00</span> <span class="price-old">$122.00</span>
                              <span class="price-tax">Without tax: $20.00</span>
                  </div> 
	        </div>
       
	  </div>
	  </div>
        </div>
	  		
      		   		
	      <div class="product-layouts">
          <div class="product-thumb transition">
      <div class="image">
						<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=47">
					<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/03-385x501.jpg" title="aliquam quat voluptatem" alt="aliquam quat voluptatem" />
					<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/03--385x501.jpg" title="aliquam quat voluptatem" alt="aliquam quat voluptatem" />
				</a>

			 
        		  <div class="sale-icon">Sale</div>
		  <span class="percent">-20%</span>
				
		<div class="button-group">
		    <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('47')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('47');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('47');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=47')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
      	</div>
		 
		 		 
	  </div>
	  <div class="thumb-description">
      <div class="caption">
        
		<!--<p class="description">
	Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget you&#39;re at the office
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=47">aliquam quat voluptatem</a></h4>
      
                <div class="price">
                    <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                              <span class="price-tax">Without tax: $80.00</span>
                  </div> 
	        </div>
       
	  </div>
	  </div>
        </div>
	  		
      		   		
	      <div class="product-layouts">
          <div class="product-thumb transition">
      <div class="image">
						<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=30">
					<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/02-385x501.jpg" title="aliquam quaerat voluptem" alt="aliquam quaerat voluptem" />
					<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/02--385x501.jpg" title="aliquam quaerat voluptem" alt="aliquam quaerat voluptem" />
				</a>

			 
        		  <div class="sale-icon">Sale</div>
		  <span class="percent">-20%</span>
				
		<div class="button-group">
		    <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('30')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('30');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('30');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=30')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
      	</div>
		 
		 		 
	  </div>
	  <div class="thumb-description">
      <div class="caption">
        
		<!--<p class="description">
	Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned with marketing talk this particular statement is clearly pretty accurate. The EOS 5D is unlike any previous digital SLR in that it combines a full-frame (35 mm sized) high resolution sensor (12.8 megapixels) with a relatively compact body (slightly larger than the EOS 20D, although in your hand it feels noticeably 'chunkier'). The EOS 5D is aimed to slot in between the EOS 20D and the EOS-1D professional digital SLR's, an important difference when compared to the latter is that the EOS 5D doesn't have any environmental seals. While Canon don't specifically refer to the EOS 5D as a 'professional' digital SLR it will have obvious appeal to professionals who want a high quality digital SLR in a body lighter than the EOS-1D. It will also no doubt appeal to current EOS 20D owners (although lets hope they've not bought too many EF-S lenses...) äë
..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=30">aliquam quaerat voluptem</a></h4>
      
                <div class="price">
                    <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                              <span class="price-tax">Without tax: $80.00</span>
                  </div> 
	        </div>
       
	  </div>
	  </div>
        </div>
	  		
      		   		
	      <div class="product-layouts">
          <div class="product-thumb transition">
      <div class="image">
						<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=45">
					<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/11-385x501.jpg" title="quis autem veleuminium" alt="quis autem veleuminium" />
					<img class="image_thumb_swap" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/product/10-385x501.jpg" title="quis autem veleuminium" alt="quis autem veleuminium" />
				</a>

			 
        		
		<div class="button-group">
		    <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('45')">
			  
				<i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
						</span></button>
		  	<button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('45');"><i class="fa fa-heart"></i>
			<span title="Add to wishlist">Add to wishlist</span>
			</button>
			<button class="btn-compare" title="Add to Compare"  onclick="compare.add('45');"><i class="fa fa-exchange"></i>
			<span title="Add to Compare">Add to Compare</span>
			</button>
			<button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=45')"><i class="fa fa-eye"></i>
				<span title="Quick View">Quick View</span>
		</button>
      	</div>
		 
		 		 
	  </div>
	  <div class="thumb-description">
      <div class="caption">
        
		<!--<p class="description">
	
		
			Latest Intel mobile architecture
		
			Powered by the most advanced mobile processors from Intel, the new Core 2 Duo MacBook Pro is over 50% faster than the original Core Duo MacBook Pro and now supports up to 4GB of RAM.
		
			Leading-edge graphics
		
			The NVIDIA GeForce 8600M GT delivers exceptional graphics processing power. For the ultimate creative canvas, you can even configure the 17-inch model with a 1920-by-1200 resolution display.
		
			Designed for life on the road
		
			Innovations such as a magnetic power connection and an illuminated keyboard with ambient light sensor put the MacBook Pro in a class by itself.
		
			Connect. Create. Communicate.
		
			Quickly set up a video conference with the built-in iSight camera. Control presentations and media from up to 30 feet away with the included Apple Remote. Connect to high-bandwidth peripherals with FireWire 800 and DVI.
		
			Next-generation wireless
		
			Featuring 802.11n wireless technology, the MacBook Pro delivers up to five times the performance and up to twice the range of previous-generation technologies.
	

..</p>-->
		
					<div class="rating no-rating">
		                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		                       <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
          		           </div>
		
		<h4><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/product&amp;product_id=45">quis autem veleuminium</a></h4>
      
                <div class="price">
                    $2,000.00
                              <span class="price-tax">Without tax: $2,000.00</span>
                  </div> 
	        </div>
       
	  </div>
	  </div>
        </div>
	  		
      		   		
	 
    </div>
</div>




	<script type="text/javascript">
			  jQuery(document).ready(function($){
			  $(".item-countdown").each(function(){
			  var date = $(this).data('date');
			  $(this).lofCountDown({
				  TargetDate:date,
				  DisplayFormat:"<div>%%D%% <span>Days</span></div><div>%%H%% <span>Hours</span></div><div>%%M%% <span>Min</span></div><div>%%S%% <span>Sec</span></div>"
				});
			  });
			  });   
		</script>
</div>
</div>
</div>
</div>

<script type="text/javascript">
$('.TTProduct-Tab  .tab-box-heading > ul > li:first-child').addClass('active');
$('.TTProduct-Tab  .tab-content > .tab-pane:first-child').addClass('active');
var tttrendingproducts = $(".TTProduct-Tab .products-carousel.owl-carousel");
	tttrendingproducts.owlCarousel({
	items:4,
    itemsDesktop : [1170,4],
    itemsDesktopSmall : [991,3],
    itemsTablet: [767,2],
    itemsMobile : [480,1],
	navigation: true,
	pagination: false
    });
</script>
<div class="html-content">
    <div class="box-content"><div id="ttcms-content">
  <div class="ttcmscontent container hover_effect">
    <div class="row">
    <div class="col-sm-12 ttcontents ttcmsleft left-to-right hb-animate-element">
      <div class="row">
      <div class="ttcmscontent ttcontentbanner col-xs-7">
            <div class="image1 ttimg">
            	<div class="ttcontentbanner-img"><a href="#"> <img alt="" src="image/catalog/demo/banners/cms-img-01.png"></a></div>
          	</div>
      </div>
      <div class="ttcmscontent ttcontentdesc col-xs-5">
        <div class="ttcmscontentblock">
          <div class="ttcmscontent-content">
             <div class="ttcmscontent-title">nutrients plant collection</div>
             <div class="ttcmscontent-subtitle">Get 50% off On This Month</div>
              <div class="ttcmscontent-btn">
                <a href="#">read more</a>
              </div>
          </div>
        </div>
      </div>
      </div>
    </div>
      
    <div class="col-sm-12 ttcontents ttcmsright right-to-left  hb-animate-element">
      <div class="row">
         <div class="ttcmscontent ttcontentbanner col-xs-7">
            <div class="video ttimg">
            	<div class="ttcontentbanner-img">
                  <span id="popup__toggle">
				  	<img id="" src="image/catalog/demo/banners/video-banner.jpg">
				  <div class="image-hover"></div>
				  <span class="play-icone"><i class="fa fa-play"></i></span>
				</span>
				 
				<div class="popup__overlay">
				  <div class="popup" id="popupVid">
					<a class="popup__close">X</a>
					<iframe allowfullscreen="" src="https://www.youtube.com/embed/ARwB7xb--sQ?vq=720" frameborder="0" height="600" width="1060"></iframe>
				  </div>
				</div>
              </div>
          	</div>
      </div>
            <div class="ttcmscontent ttcontentdesc2 col-xs-5">
        <div class="ttcmscontentblock">
          <div class="ttcmscontent-content">
             <div class="ttcmscontent-title">New In Trend</div>
             <div class="ttcmscontent-subtitle">nventore veritatis et quasi architecto beatae dicta sun explicabo. Nemo enim ipsam volup tatemarchitecto volup a sit aspernatur.explicabo.</div>
              <div class="ttcmscontent-btn">
                <a href="#">watch now</a>
              </div>
              
          </div>
        </div>
      </div>
	</div>
    </div>
    </div>
  </div>
</div></div>
  </div>

<div class="html-content">
    <div class="box-content"><div id="ttcmstestimonial" class=" bottom-to-top hb-animate-element">
  <div style="background-image: url('image/catalog/demo/banners/testimonals-bg.jpg'); background-position: 50% 78.1106%;" data-source-url="image/catalog/demo/banners/testimonals-bg.jpg" class="parallex">
	<div class="tttestimonial-content container">
		<div class="tttestimonial-inner">
		<div class="tt-title">client say</div>
		<ul id="tttestimonial-carousel" class="tt-carousel">
		<li>
		
		<div class="testimonial-image"><img alt="" src="image/catalog/demo/banners/user1.jpg"></div>
		<div class="testimonial-content">
		<div class="testimonial-user-title">
		<h4>John Duff</h4>
		<div class="user-designation">SEO and founder</div>
		</div>
		<div class="testimonial-desc">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text .</p>
		</div>
		</div>
		</li>
		<li>
		
		<div class="testimonial-image"><img alt="" src="image/catalog/demo/banners/user2.jpg"></div>
		<div class="testimonial-content">
		<div class="testimonial-user-title">
		<h4>John Duff</h4>
		<div class="user-designation">SEO and founder</div>
		</div>
		<div class="testimonial-desc">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text .</p>
		</div>
		</div>
		</li>
		<li>
		
		<div class="testimonial-image"><img alt="" src="image/catalog/demo/banners/user3.jpg"></div>
		<div class="testimonial-content">
		<div class="testimonial-user-title">
		<h4>John Duff</h4>
		<div class="user-designation">SEO and founder</div>
		</div>
		<div class="testimonial-desc">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text .</p>
		</div>
		</div>
		</li>
		</ul>
		</div>
	</div>
   </div>
</div></div>
  </div>

<div id="blog_latest_new_home" class="hb-animate-element bottom-to-top">
<div class="container">
<div class="blog-container">
<div class="box-heading title_block">
	<h3><a class="ttblock-heading" href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog/blogs">Latest News</a></h3>
	<div class="ttsubtitle">our plant house</div>
</div>
<div class="block_content">
<div class="row">
<ul id="ttsmartblog-carousel" class="tt-carousel ttblog-content owl-carousel owl-theme">

    				<li class='blogli'><ul>
		  
  	<li>
	<div class="blog-content">
				<div class="ttblog_image_holder blog_image_holder col-xs-6 col-sm-6">
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=4">
			<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/4-home-default-370x240.jpg" alt="Latest News" title="Latest News" />
			<div class="blog-hover"></div>
			</a>
			<span class="bloglinks">
				<a class="icon zoom" data-lightbox="example-set" href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/4-home-default-870x564.jpg" title="Click to view Full Image">
				<i class="fa fa-search"></i>
				</a> 
			</span>
		</div>
				
		<div class="blog-caption blog-sub-content col-xs-6 col-sm-6">
			<div class="blog-inner">
			<span class="blog-date">
				<i class="fa fa-calendar"></i>
				<span class="date">27</span>
				<span class="month">Oct-2020</span>
			</span>
			<div class="comment"> <a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=4"> <i class="fa fa-comments-o"></i> 0 Comments</a> </div>
			<h5 class="post_title"><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=4">suscipit laboriosam nisi</a></h5>
			<p class="blog-description">					  					  					  Lorem Ipsum is simply dummy text of the printing and typese...</p>
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=4" class="read-more">read more</a>
		</div>
		</div>
	</div>
	</li>
					
	  			  
  	<li>
	<div class="blog-content">
				<div class="ttblog_image_holder blog_image_holder col-xs-6 col-sm-6">
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=3">
			<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/3-home-default-370x240.jpg" alt="Latest News" title="Latest News" />
			<div class="blog-hover"></div>
			</a>
			<span class="bloglinks">
				<a class="icon zoom" data-lightbox="example-set" href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/3-home-default-870x564.jpg" title="Click to view Full Image">
				<i class="fa fa-search"></i>
				</a> 
			</span>
		</div>
				
		<div class="blog-caption blog-sub-content col-xs-6 col-sm-6">
			<div class="blog-inner">
			<span class="blog-date">
				<i class="fa fa-calendar"></i>
				<span class="date">27</span>
				<span class="month">Oct-2020</span>
			</span>
			<div class="comment"> <a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=3"> <i class="fa fa-comments-o"></i> 0 Comments</a> </div>
			<h5 class="post_title"><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=3">aliquam quaerat voluptatem</a></h5>
			<p class="blog-description">					  					  					  Lorem Ipsum is simply dummy text of the printing and typese...</p>
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=3" class="read-more">read more</a>
		</div>
		</div>
	</div>
	</li>
				</li></ul>
				
	  				<li class='blogli'><ul>
		  
  	<li>
	<div class="blog-content">
				<div class="ttblog_image_holder blog_image_holder col-xs-6 col-sm-6">
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=2">
			<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/2-home-default-370x240.jpg" alt="Latest News" title="Latest News" />
			<div class="blog-hover"></div>
			</a>
			<span class="bloglinks">
				<a class="icon zoom" data-lightbox="example-set" href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/2-home-default-870x564.jpg" title="Click to view Full Image">
				<i class="fa fa-search"></i>
				</a> 
			</span>
		</div>
				
		<div class="blog-caption blog-sub-content col-xs-6 col-sm-6">
			<div class="blog-inner">
			<span class="blog-date">
				<i class="fa fa-calendar"></i>
				<span class="date">27</span>
				<span class="month">Oct-2020</span>
			</span>
			<div class="comment"> <a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=2"> <i class="fa fa-comments-o"></i> 0 Comments</a> </div>
			<h5 class="post_title"><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=2">tempora incidunt utlabore</a></h5>
			<p class="blog-description">					  					  					  Lorem Ipsum is simply dummy text of the printing and typese...</p>
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=2" class="read-more">read more</a>
		</div>
		</div>
	</div>
	</li>
					
	  			  
  	<li>
	<div class="blog-content">
				<div class="ttblog_image_holder blog_image_holder col-xs-6 col-sm-6">
			<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=1">
			<img class="image_thumb" src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/1-home-default-370x240.jpg" alt="Latest News" title="Latest News" />
			<div class="blog-hover"></div>
			</a>
			<span class="bloglinks">
				<a class="icon zoom" data-lightbox="example-set" href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/1-home-default-870x564.jpg" title="Click to view Full Image">
				<i class="fa fa-search"></i>
				</a> 
			</span>
		</div>
				
		<div class="blog-caption blog-sub-content col-xs-6 col-sm-6">
			<div class="blog-inner">
			<span class="blog-date">
				<i class="fa fa-calendar"></i>
				<span class="date">27</span>
				<span class="month">Oct-2020</span>
			</span>
			<div class="comment"> <a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=1"> <i class="fa fa-comments-o"></i> 0 Comments</a> </div>
			<h5 class="post_title"><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=1">Lorem ipsum dolor site amet</a></h5>
			<p class="blog-description">					  					  					  					  Lorem Ipsum is simply dummy text of the printing and...</p>
				<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/tt_blog&amp;tt_blog_id=1" class="read-more">read more</a>
		</div>
		</div>
	</div>
	</li>
				</li></ul>
				
			 
		
</ul>
		</div>
</div>
</div>
</div>
</div>

<div class="brand-carousel hb-animate-element bottom-to-top">
<div class="container">
<div class="box-heading"><h3>Brands</h3></div>
<div class="swiper-viewport">
  <div id="carousel0" class="swiper-container brand-items">
    <div class="swiper-wrapper">
	        <div class="swiper-slide text-center">
	  	  <a href="#"><img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-01-140x100.png" alt="NFL" class="img-responsive" /></a>
	  	  </div>
            <div class="swiper-slide text-center">
	  	  <a href="#"><img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-02-140x100.png" alt="RedBull" class="img-responsive" /></a>
	  	  </div>
            <div class="swiper-slide text-center">
	  	  <a href="#"><img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-03-140x100.png" alt="Sony" class="img-responsive" /></a>
	  	  </div>
            <div class="swiper-slide text-center">
	  	  <a href="#"><img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-04-140x100.png" alt="Coca Cola" class="img-responsive" /></a>
	  	  </div>
            <div class="swiper-slide text-center">
	  	  <a href="#"><img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-05-140x100.png" alt="Burger King" class="img-responsive" /></a>
	  	  </div>
            <div class="swiper-slide text-center">
	  	  <a href="#"><img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-06-140x100.png" alt="Canon" class="img-responsive" /></a>
	  	  </div>
            <div class="swiper-slide text-center">
	  	  <a href="#"><img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-07-140x100.png" alt="Harley Davidson" class="img-responsive" /></a>
	  	  </div>
            <div class="swiper-slide text-center">
	  	  <a href="#"><img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-08-140x100.png" alt="Dell" class="img-responsive" /></a>
	  	  </div>
      	  </div>
  </div>
  <div class="swiper-pagination carousel0"></div>
  <div class="swiper-pager">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>
</div>
</div>
<script type="text/javascript"><!--
$('#carousel0').swiper({
	mode: 'horizontal',
	autoplay: 3000,
	//pagination: '.carousel0',
	pagination: false,
	paginationClickable: false,
    prevButton: '.swiper-button-prev',
	nextButton: '.swiper-button-next',
	
 // Default parameters
  slidesPerView: 5,
  
  // Responsive breakpoints
  breakpoints: {
	    // when window width is <= 1200px
	    1199: {
	      slidesPerView: 4
	    },
	 	// when window width is <= 991px
	    991: {
	      slidesPerView: 4
	    },
	 	// when window width is <= 767px
	    767: {
	      slidesPerView: 3
	    },
	    // when window width is <= 480px
	    480: {
	      slidesPerView: 2
		}
   }

});
--></script>
<script>
var Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fa664720a68960861bc9308/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


	</div>
    
	</div>
<footer>
 <script src="https://apps.elfsight.com/p/platform.js" defer></script>
	<div class="elfsight-app-9e158db6-9112-41b3-8a93-4cd7cdeb957a"></div>
<div class="footer-container">
<div class="container hb-animate-element bottom-to-top">
	<div class="row">
		
				  <div class="footer-column footer-right-cms col-sm-4">
		 <aside id="footer-right">
	  <div class="newletter-subscribe hb-animate-element bottom-to-top">
<div id="newletter-boxes" class="newletter-container">
 <div id="dialog-normal" class="window">
	<div class="box">
	  <div class="newletter-title"><h2 class="tt-title">Sign Up For Newsletter</h2>
	  <div class="newsletter-desc">Wants to get latest updates! sign up for free.</div>
	  </div>
	  <div class="box-content newleter-content">
	  <label></label>
		  <div id="form_subscribe">
			  <form name="subscribe" id="subscribe">
					 <input type="text" placeholder="Your email address" value="" name="subscribe_email" id="subscribe_email">
					  <input type="hidden" value="" name="subscribe_name" id="subscribe_name" />
					<a class="button btn btn-primary" onclick="email_subscribe()"><span>Subscribe</span><i class="fa fa-paper-plane"></i></a>
					 
			  </form>
		  </div><!-- /#frm_subscribe -->
		  <div id="notification-normal"></div>
		</div><!-- /.box-content -->
 	</div>
 </div>
 </div>
</div><!-- /.box -->
<script type="text/javascript">
function email_subscribe(){
	$.ajax({
			type: 'post',
			url: 'index.php?route=extension/module/ttnewslettersubscribe/subscribe',
			dataType: 'html',
            data:$("#subscribe").serialize(),
			success: function (html) {
			try {
			
				eval(html);
			
			} catch (e) {
			}
				
			}}); 
	
	
}
function email_unsubscribe(){
	$.ajax({
			type: 'post',
			url: 'index.php?route=extension/module/ttnewslettersubscribe/unsubscribe',
			dataType: 'html',
            data:$("#subscribe").serialize(),
			success: function (html) {
					try {
					
						eval(html);
					
					} catch (e) {
					}
			}}); 
	$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
	
}
</script>
<script type="text/javascript">
    $(document).ready(function() {
		$('#subscribe_email').keypress(function(e) {
            if(e.which == 13) {
                e.preventDefault();
                email_subscribe();
            }
			var name= $(this).val();
		  	$('#subscribe_name').val(name);
        });
		$('#subscribe_email').change(function() {
		 var name= $(this).val();
		  		$('#subscribe_name').val(name);
		});
	
    });
</script>
   <div class="html-content">
    <div class="box-content"><div id="ttcmspaymentlogo">
<h5 class="toggle">Payment Methods</h5>
<div id="ttpayment">
<div class="payment_logo_block">
<div class="payment-title">Accepted Payment Methods</div>
<ul class="payment-list list-unstyled">
<li class="google"><a href="#"> <img src="image/catalog/demo/banners/google.png" alt="google"></a></li>
<li class="maestro"><a href="#"> <img src="image/catalog/demo/banners/maestro.png" alt="maestro"></a></li>
<li class="mastercard"><a href="#"> <img src="image/catalog/demo/banners/mastercard.png" alt="mastercard"></a></li>
<li class="paypal"><a href="#"> <img src="image/catalog/demo/banners/paypal.png" alt="paypal"></a></li>
<li class="visa"><a href="#"> <img src="image/catalog/demo/banners/visa.png" alt="visa"></a></li>
</ul>
</div>
	  </div>
	</div></div>
  </div>

 </aside>

		  </div>
				
		 			  <div class="footer-column footer-left-cms col-sm-4">
				<aside id="footer-left">
	  <div class="html-content">
    <div class="box-content"><div class="contact-us">
  <h5 class="">Store Information</h5>
  <ul style="display: block;" class="list-unstyled">
    <li class="contact-detail">
      <div class="data address">
        <i class="fa fa-map-marker"></i>
        <div class="contact-address">Demo Store<br>United States</div>
      </div>
    </li>
    <li class="contact">
      <div class="data contact">
        <i class="fa fa-phone"></i> 
        <span class="phone">
          <a href="#">0123456789</a>
        </span>
      </div>
    </li>
    <li class="fax">
      <div class="data fax">
        <i class="fa fa-fax"></i>
        <span class="fax-address">
          <a href="#">0123-456-7890</a>
        </span>
      </div>
    </li>
    <li class="email">
      <div class="data email">
        <i class="fa fa-envelope"></i>
        <span class="email-address">
          <a href="mailto:demo@gmail.com">demo@gmail.com</a>
        </span>
      </div>
    </li>

  </ul>
</div></div>
  </div>

 </aside>

			  </div>
		  		
		  <!--		  <div class="col-sm-3 footer-column footer-information">
			<h5>Information</h5>
			<ul class="list-unstyled">
			 			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/information&amp;information_id=4">About Us</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
			  			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
			  			</ul>
		  </div>
		  -->
		  
		   <!--<div class="col-sm-3 footer-column">
														<h5>Information</h5>
							<ul class="list-unstyled">
															 <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/information&amp;information_id=4">About Us</a></li>
														 <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>
														 <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
														 <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
														<li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/voucher">Gift Certificates</a></li>
							</ul>
						 </div>
						  -->
				
		  <div class="col-sm-4 footer-column footer-extras">
			<h5>Extras</h5>
			<ul class="list-unstyled">
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/manufacturer">Brands</a></li>
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/voucher">Gift Certificates</a></li>
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=affiliate/login">Affiliate</a></li>
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/special">Specials</a></li>
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/sitemap">Site Map</a></li>
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=information/contact">Contact Us</a></li>
			</ul>
		  </div>
		  
		  
		  <!--<div class="col-sm-3 footer-column footer-my-account">
			<h5>My Account</h5>
			<ul class="list-unstyled">
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/account">My Account</a></li>
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/order">Order History</a></li>
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/wishlist">Wish List</a></li>
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/newsletter">Newsletter</a></li>
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/return/add">Returns</a></li>
			</ul>
		  </div>-->
		  
		  <!--<div class="col-sm-3 footer-column footer-service">
			<h5>Service</h5>
			<ul class="list-unstyled">
			 
			  <li><a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=account/return/add">Returns</a></li>
			  
			</ul>
		  </div>-->
		
		
			
	</div>
	
</div>
</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-link col-sm-6 hb-animate-element left-to-right">
				<p>Powered By <a href="http://www.opencart.com">OpenCart</a> Your Store &copy; 2023</p>
			</div>
						<div class="footer-bottom-cms col-sm-6 hb-animate-element right-to-left">
			<aside id="footer-bottom">
	  <div class="html-content">
    <div class="box-content"><div class="follow-us">
<h5>Follow us</h5>
<ul class="list-unstyled">
	 <li class="facebook">
		<a target="_blank" class="_blank" href="#" title="Facebook">
		<i class="fa fa-facebook"></i>
		</a>
	</li>
	<li class="twitter">
		<a target="_blank" class="_blank" href="#" title="Twitter">
		<i class="fa fa-twitter"></i>
		</a>
	</li>
	<li class="rss">
		<a target="_blank" class="_blank" href="#" title="RSS">
		<i class="fa fa-rss"></i>
		</a>
	</li>
	<li class="google-plus">
		<a target="_blank" class="_blank" href="#" rel="publisher" title="Google Plus">
		<i class="fa fa-google-plus"></i>
		</a>
	</li>
	<li class="instagram">
		<a target="_blank" class="_blank" href="#" rel="publisher" title="instagram">
		<i aria-hidden="true" class="fa fa-instagram"></i>
		</a>
	</li>

</ul>
</div></div>
  </div>

 </aside>

			</div>
					</div>
	</div>
</footer>
</div>

			<script type="text/javascript"><!--
				var tt_live_search = {
					selector: '#search input[name=\'search\']',
					text_no_matches: '',
					height: '50px'
				}

				$(document).ready(function() {
					var html = '';
					html += '<div class="live-search">';
					html += '	<ul>';
					html += '	</ul>';
					html += '<div class="result-text"></div>';
					html += '</div>';

					//$(tt_live_search.selector).parent().closest('div').after(html);
					$(tt_live_search.selector).after(html);

					$(tt_live_search.selector).autocomplete({
						'source': function(request, response) {
							var filter_name = $(tt_live_search.selector).val();
							var cat_id = 0;
							var module_tt_live_search_min_length = '1';
							if (filter_name.length < module_tt_live_search_min_length) {
								$('.live-search').css('display','none');
							}
							else{
								var html = '';
								html += '<li style="text-align: center;height:10px;">';
								html +=	'<img class="loading" src="image/catalog/demo/banners/loading.gif" />';
								html +=	'</li>';
								$('.live-search ul').html(html);
								$('.live-search').css('display','block');

								$.ajax({
									url: 'index.php?route=extension/module/tt_live_search&filter_name=' +  encodeURIComponent(filter_name),
									dataType: 'json',
									success: function(result) {
										var products = result.products;
										$('.live-search ul li').remove();
										$('.result-text').html('');
										if (!$.isEmptyObject(products)) {
											var show_image = 1;
											var show_price = 1;
											var show_description = 0;
											$('.result-text').html('<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/search&amp;search='+filter_name+'" class="view-all-results">    View all results     ('+result.total+')</a>');

											$.each(products, function(index,product) {
												var html = '';

												html += '<li>';
												html += '<a href="' + product.url + '" title="' + product.name + '">';
												if(product.image && show_image){
													html += '	<div class="product-image col-sm-4 col-xs-4"><img alt="' + product.name + '" src="' + product.image + '"></div>';
												}
												html += '<div class="search-description col-sm-8 col-xs-8">';
												html += '	<div class="product-name">' + product.name ;
												if(show_description){
													html += '<p>' + product.extra_info + '</p>';
												}
												html += '</div>';
												if(show_price){
													if (product.special) {
														html += '	<div class="product-price"><span class="special">' + product.price + '</span><span class="price">' + product.special + '</span></div>';
													} else {
														html += '	<div class="product-price"><span class="price">' + product.price + '</span></div>';
													}
												}
												html += '</div>';
												html += '<span style="clear:both"></span>';
												html += '</a>';
												html += '</li>';
												$('.live-search ul').append(html);
											});
										} else {
											var html = '';
											html += '<li style="text-align: center;height:10px;">';
											html +=	tt_live_search.text_no_matches;
											html +=	'</li>';

											$('.live-search ul').html(html);
										}
										$('.live-search').css('display','block');
										return false;
									}
								});
							}
						},
						'select': function(product) {
							$(tt_live_search.selector).val(product.name);
						}
					});

					$(document).bind( "mouseup touchend", function(e){
					  var container = $('.live-search');
					  if (!container.is(e.target) && container.has(e.target).length === 0)
					  {
					    container.hide();
					  }
					});
				});
			//--></script>
		

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>