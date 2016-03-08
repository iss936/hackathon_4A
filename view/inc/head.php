
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="/favicon.ico?v=20160115" />
<link rel="stylesheet" href="<?php echo ADRESSE_SITE; ?>view/css/style.css?v=20160119" type="text/css">
<link rel="stylesheet" href="<?php echo ADRESSE_SITE; ?>view/css/bwstyles.css?v=20160119" type="text/css">
<link rel="stylesheet" href="<?php echo ADRESSE_SITE; ?>view/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="<?php echo ADRESSE_SITE; ?>view/css/half-slider.css" type="text/css">
<link rel="stylesheet" href="<?php echo ADRESSE_SITE; ?>view/css/font-awesome.css" type="text/css">


<script src="https://www.google.com/recaptcha/api.js?render=explicit"></script>




</head>
<body>

<div id="container">
<div id="header" class="">

	<a href="http://www.bestwestern.com/"><h1 class="ir">Best Western</h1></a>



	<ul id="mainNav" class="nav">
		<li class="active"><a href="http://www.bestwestern.com/">Home</a></li>
		<li>
			<a href="#exploreSubNav" class="expandLinkTopNav mainNavExpandLink" rel=".mainNavExpandLink">Explore Hotels</a>
			<ul id="exploreSubNav" style="display: none;">
				<li><a href="http://www.bestwestern.com/reservations/hotels/">Explore Hotels Home</a></li>
				<li><a href="http://www.bestwestern.com/reservations/hotels/directory.asp">Hotel Directory</a></li>
				<li><a href="http://www.bestwestern.com/reservations/hotel-types/">Hotel Types</a></li>
			</ul>
		</li>
		<li>
			<a href="#rewardsSubNav" class="expandLinkTopNav mainNavExpandLink" rel=".mainNavExpandLink">Rewards</a>
			<ul id="rewardsSubNav" style="display: none;">
				<li><a href="https://www.bestwestern.com/rewards/">Rewards Home</a></li>
				<li id="myAccountlnk" style="display:none;"><a href="https://book.bestwestern.com/bestwestern/myAccount.do?refresh=true">My Account</a></li>
				<li><a href="http://www.bestwestern.com/rewards/benefits/">Membership Benefits</a></li>
				<li><a href="http://www.bestwestern.com/rewards/earn/">Earn Rewards</a></li>
				<li><a href="http://www.bestwestern.com/rewards/redeem/">Redeem Points</a></li>
				<li><a href="http://www.bestwestern.com/rewards/offers/">Rewards Offers</a></li>
				<li><a href="http://www.bestwestern.com/rewards/customer-service/">Rewards Service Center</a></li>
			</ul>
		</li>
		<li>
			<a href="#travelPlanningSubNav" class="expandLinkTopNav mainNavExpandLink" rel=".mainNavExpandLink">Travel Planning</a>
			<ul id="travelPlanningSubNav" style="display: none;">
				<li><a href="http://www.bestwestern.com/travel-planning/">Travel Planning Home</a></li>
				<li><a href="http://www.bestwestern.com/travel-planning/destinations/">Destinations</a></li>
				<li><a href="http://www.bestwestern.com/travel-planning/tips/">Travel Tips</a></li>
				<li><a href="http://www.bestwestern.com/travel-planning/hotel-group-rates/">Groups &amp; Meetings</a></li>
			</ul>
		</li>
		<li>
			<a href="#dealsSubNav" class="expandLinkTopNav mainNavExpandLink" rel=".mainNavExpandLink">Deals &amp; Offers</a>
			<ul id="dealsSubNav" style="display: none;">
				<li><a href="http://www.bestwestern.com/deals-offers/">Deals &amp; Offers Home</a></li>
				<li><a href="http://www.bestwestern.com/deals-offers/special-rates/">Special Rates</a></li>
				<li><a href="http://www.bestwestern.com/deals-offers/international.asp">International Offers</a></li>
				<li><a href="http://www.bestwestern.com/deals-offers/partners.asp">Partners</a></li>
				<li><a href="http://travelcard.bestwestern.com/" target="_blank">Travel Card</a></li>
			</ul>
		</li>

        <?php if(security::is_connected()): ?>
            <li>
            <a href="/index/disconnect" class="expandLinkTopNav mainNavExpandLink" rel=".mainNavExpandLink">Déconnexion</a>
            </li>
        <?php endif; ?>
	</ul>

	<div id="headerDivider" class="">

	</div>
</div>

