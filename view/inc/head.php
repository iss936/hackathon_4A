
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->  <!--<![endif]-->
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="<?php echo ADRESSE_SITE; ?>view/css/img/favicon.ico" />
<link rel="stylesheet" href="<?php echo ADRESSE_SITE; ?>view/css/style.css" type="text/css">
<link rel="stylesheet" href="<?php echo ADRESSE_SITE; ?>view/css/bwstyles.css" type="text/css">
<link rel="stylesheet" href="<?php echo ADRESSE_SITE; ?>view/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="<?php echo ADRESSE_SITE; ?>view/css/half-slider.css" type="text/css">
<link rel="stylesheet" href="<?php echo ADRESSE_SITE; ?>view/css/font-awesome.css" type="text/css">


<script src="https://www.google.com/recaptcha/api.js?render=explicit"></script>
<script type="text/javascript" src="<?php echo ADRESSE_SITE; ?>view/js/jquery-1.11.3.min.js"></script>




</head>
<body>

<div id="container">
    <?php if(!security::is_connected()): ?>
<div id="header" class="">

	<a href="<?php echo ADRESSE_SITE; ?>index/accueil"><h1 class="ir">Best Western</h1></a>



	<ul id="mainNav" class="nav">
		<li class="active"><a href="<?php echo ADRESSE_SITE; ?>index/accueil">Accueil</a></li>
		<li><a href="<?php echo ADRESSE_SITE; ?>index/forum" class="expandLinkTopNav">Forum</a></li>
		<li><a href="<?php echo ADRESSE_SITE; ?>demandes" class="expandLinkTopNav">Demande</a></li>
		<li><a href="<?php echo ADRESSE_SITE; ?>index/faq" class="expandLinkTopNav">Faq</a></li>
		<li><a href="<?php echo ADRESSE_SITE; ?>index/contactAction" class="expandLinkTopNav">Contact</a></li>

        
            <li>
            <a href="<?php echo ADRESSE_SITE; ?>index/disconnect" class="expandLinkTopNav">Déconnexion</a>
            </li>
        
	</ul>

	<div id="headerDivider" class="">

	</div>
</div>
<?php else: ?>
    
<div id="header-connect" class="">

	<a href="<?php echo ADRESSE_SITE; ?>index/accueil"><h1 class="ir">Best Western</h1></a>



	<div id="headerDivider" class="">

	</div>
</div>
    
    <?php endif; ?>

