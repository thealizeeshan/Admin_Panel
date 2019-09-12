@include('includes.head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  	<div class="top-bar">
		<p>Extra 20% Off Everything At Checkout*</p>
	</div>
@include('includes.topbar')
<section class="Duvets-header-sec">
	<div class="container">
	<div class="row">	
	<div class="text-center Duvets-title">
	<h2>Duvets</h2>
	<p>Curabitur aliquam ut purus eget auctor. Etiam ac tristique purus. Mauris tristique mauris nec leo accumsan, vel tempor ante aliquam. Fusce elementum sed urna vitae porttitor. Phasellus porttitor facilisis metus, sit amet laoreet orci condimentum id. </p>	
	</div>

	</div>
	</div>
</section>

<section class="breadcrumb-sec">
	<div class="container">
	<div class="row">
	<ul class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li><a href="#">Duvets & Pillows</a></li>
		<li><a href="#">Duvets</a></li>
		<li><a href="#">All Duvets </a></li>
	</ul>
	</div>
	</div>
</section>

<section class="option-sec">
	<div class="container">
	<div class="row">
	
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 filter-by-dropdown">
	<button class="filter-by-btn dropdown-toggle" type="button" data-toggle="dropdown">Filter By<span class="glyphicon glyphicon-menu-down"></span></button>
	<ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
	<div class="btn-group">
	<button class="btn btn-default">3</button>
	<button class="btn btn-default">5</button>
	</div>
	</div>
	
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 show-dropdown dropdown">
	<span>10 Products</span>
	<span>|   Show</span>

    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">45<span class="glyphicon glyphicon-menu-down"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
	

	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 sort-by-dropdown">
	<span> Sort By </span>
	<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Position<span class="glyphicon glyphicon-menu-down"></span></button>
	<ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
	</div>

	</div>
	</div>
</section>
	

<section class="products-sec">
	<div class="container">
		<div class="row">

			@for ($i = 1; $i <= $count; $i++)
			<div class="product-wrapper col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="img-box">
					<div class="product-offer">Extra 20% Off At Checkout</div>
				</div>
				<div class="product-detail">
					<div class="detail"><p>Soft Touch 4.5 Tog Summer Duvet</p></div>
					<div class="price"><p> <strong>&pound;14.00 - &pound;26.00 &nbsp; </strong><span class="discount">Save up to 65%</span></p></div>
					<div class="btn btn-default">View</div>
				</div>
			</div>
			@endfor

		</div>
	</div>
</section>

<section class="details-sec">
<div class="container">
<div class="row">
		
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 show-dropdown">
	<span>Show &nbsp;&nbsp;&nbsp;&nbsp;</span>
	<button class="btn btn-default">45<span class="glyphicon glyphicon-menu-down"></span></button>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
		<span>10 Products</span>
	</div>
</div>
<div class="row detail-paragraph">


Duvets are treasured possessions in homes up and down the country, so much so that the term 'duvet day' has been coined to describe days cosied up under the covers. Synonymous with comfort, warmth and indulgence, the mere mention of these common household items can be enough to evoke a sense of contentment in even the most world-weary individuals.<br><br>

Although you may find it hard to leave the comfort of your duvet each morning, if yours has seen better days, the time may have come for you to part ways for good. Fortunately, there's an impressive selection of options on offer these days so you won't struggle to find a replacement that you'll love.<br><br>

At Julian Charles, we provide premium quality feather and down filled duvets that beg to be curled up under. We also offer a superb range of microfibre filled models that provide warmth without weighing you down. Anti-allergenic, microfibre bedding is particularly good for asthma sufferers and people who are sensitive to dust mites andother allergens.<br><br>

Whatever filling you choose, we have a size to suit most beds. Whether you're looking for a single, double, kingsize or superking duvet, we can help.
When it comes to getting the temperature right, we've got you covered too. With togs of 10.5 and 13.5, we have bedding options to meet your needs all year round.<br><br>

If you want to achieve the full 'brand-new' effect, why not invest in some new pillows, duvet covers and pillowcases too? With our extensive selection of bedding options available online, you can refresh your bed today without leaving the house.<br><br>

</div>
</div>
</section>

<section class="footer-sec">
<div class="container">
<div class="row">
	<div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
		<h1>Customer Service</h1>
		<a href="#"><h4>FAQ's</h4></a>
		<a href="#"><h4>Buying Guides</h4></a>
		<a href="#"><h4>Delivery Information</h4></a>
		<a href="#"><h4>Click & Collect</h4></a>
		<a href="#"><h4>Returns & Refund Policy</h4></a>
	</div>
	<div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
		<h1>Information</h1>
		<a href="#"><h4>Our Story</h4></a>
		<a href="#"><h4>Contact Us</h4></a>
	</div>
	<div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
		<h1>Store Finder</h1>
		<h1>Press Enquiries</h1>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		
		<div class="pay-services">
		<h1>We Accept</h1>
			<img src="{{ asset('core_images/images/maestro.svg') }}">
			<img src="{{ asset('core_images/images/visa.svg') }}">
			<img src="{{ asset('core_images/images/master-card.svg') }}">
			<img src="{{ asset('core_images/images/paypal.svg') }}">
		</div>

		<div class="social-media-icons">
			<h1>Stay Connected</h1>
			<img src="{{ asset('core_images/images/facebook.png') }}">
			<img src="{{ asset('core_images/images/twitter.png') }}">
			<img src="{{ asset('core_images/images/instagram.png') }}">
			<img src="{{ asset('core_images/images/pinterest.png') }}">
		</div>

	</div>

</div>
</div>
</section>

<section class="footer-bottom-sec">
	<div class="container">
	<div class="row">
	
		<div>
		<ul id="mylist">
		<li><a href="#">Terms & Conditions</a></li>
		<li><a href="#">Privacy Policy</a></li>
		<li><a href="#">Cookie Policy</a></li>
		<li><a href="#">Data Protection</a></li>
		</ul>
		</div>
	
	</div>
	</div>
</section>

</body>
</html>