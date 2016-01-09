<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/template.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/bootstrap.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/app.min.js');

//<!-- Javascript Files-->
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/jquery-migrate-1.2.1.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/headhesive.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/fhmm.js"');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/jquery.flickrfeed.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/isotope/isotope.pkgd.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/isotope/jquery.imagesloaded.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/magnific-popup/jquery.magnific-popup.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/owl-carousel/owl.carousel.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/jquery.fitvids.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/jquery.appear.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/jquery.stellar.min.js"');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/snap.svg-min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/mediaelement/mediaelement-and-player.min.js');

$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/custom.js');

//<!-- jQuery REVOLUTION Slider  -->
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/rs-plugin/js/jquery.themepunch.tools.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js');


// Add Stylesheets

$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css');
//$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/AdminLTE.min.css');
//$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/skins/_all-skins.min.css');
//$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');
//$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/Site.css');

//	<!-- Base + Vendors CSS -->
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/fonts/font-awesome/css/font-awesome.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/vendor/owl-carousel/owl.carousel.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/vendor/owl-carousel/owl.theme.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/vendor/magnific-popup/magnific-popup.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/vendor/mediaelement/mediaelementplayer.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/vendor/rs-plugin/css/settings.css');

//<!-- Theme CSS-->
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/theme.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/theme-elements.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/animate.min.css');

//<!-- Skin CSS -->
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/skins/red.css');

//<!-- Custom CSS-->
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/custom.css');

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Adjusting content width
if ($this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span6";
}
elseif ($this->countModules('position-7') && !$this->countModules('position-8'))
{
	$span = "span9";
}
elseif (!$this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span9";
}
else
{
	$span = "span12";
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
	<?php // Use of Google Font ?>
	<?php if ($this->params->get('googleFont')) : ?>
		<link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googleFontName'); ?>' rel='stylesheet' type='text/css' />
		<style type="text/css">
			h1,h2,h3,h4,h5,h6,.site-title{
				font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFontName')); ?>', sans-serif;
			}
		</style>
	<?php endif; ?>
	<?php // Template color ?>
	<?php if ($this->params->get('templateColor')) : ?>
	<style type="text/css">
		/*body.site
		{
			border-top: 3px solid <?php echo $this->params->get('templateColor'); ?>;
			background-color: <?php echo $this->params->get('templateBackgroundColor'); ?>
		}
		a
		{
			color: <?php echo $this->params->get('templateColor'); ?>;
		}
		.navbar-inner, .nav-list > .active > a, .nav-list > .active > a:hover, .dropdown-menu li > a:hover, .dropdown-menu .active > a, .dropdown-menu .active > a:hover, .nav-pills > .active > a, .nav-pills > .active > a:hover,
		.btn-primary
		{
			background: <?php echo $this->params->get('templateColor'); ?>;
		}
		.navbar-inner
		{
			-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
			-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
			box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
		}*/
	</style>
	<?php endif; ?>
	<!--[if lt IE 9]>
		<script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body class="Boxed" >

	<!-- Body -->
	<div class="body" >
		<div class="conteiner <?php echo ($params->get('fluidContainer') ? '-fluid' : ''); ?>">
			<!-- Header -->
			<header class="header" role="banner">
				<div class="header-inner clearfix">
					<a class="brand pull-left" href="<?php echo $this->baseurl; ?>/">
						<?php echo $logo; ?>
						<?php if ($this->params->get('sitedescription')) : ?>
							<?php echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription')) . '</div>'; ?>
						<?php endif; ?>
					</a>
					<div class="header-search pull-right">
						<jdoc:include type="modules" name="position-0" style="none" />
					</div>
				</div>
			</header>

			<?php if ($this->countModules('position-1')) : ?>
				<nav class="navigation" role="navigation">
					<div class="navbar pull-left">
						<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
							Меню
						</a>
					</div>
					<div class="nav-collapse">
						<jdoc:include type="modules" name="position-1" style="none" />
					</div>
				</nav>
			<?php endif; ?>
			<jdoc:include type="modules" name="banner" style="xhtml" />
				<?php if ($this->countModules('position-8')) : ?>
					<!-- Begin Sidebar -->
					<div id="sidebar" class="span3">
						<div class="sidebar-nav">
							<jdoc:include type="modules" name="position-8" style="xhtml" />
						</div>
					</div>
					<!-- End Sidebar -->
				<?php endif; ?>
				<div class="box box-solid">
					<div class="box-body">
<!-- Begin Content -->
						<aside class="pull-right">
							<?php if ($this->countModules('position-7')) : ?>
								<div id="aside" class="span3">
									<!-- Begin Right Sidebar -->
									<jdoc:include type="modules" name="position-7" style="well" />
									<!-- End Right Sidebar -->
								</div>
							<?php endif; ?>
						</aside>
						<section>
							<main id="content" role="main" class="<?php echo $span; ?>">
								<jdoc:include type="modules" name="position-3" style="xhtml" />
								<jdoc:include type="message" />
								<jdoc:include type="component" />
								<jdoc:include type="modules" name="position-2" style="none" />
								
							</main>
						</section>
			
<!-- End Content -->
			
			</div>
			</div>
			</div>

	</div>
	<!-- Footer -->
	<footer class="footer" role="contentinfo">
		<div class="container<?php echo ($params->get('fluidContainer') ? '-fluid' : ''); ?>">
			<hr />
			<jdoc:include type="modules" name="footer" style="none" />
			<p class="pull-right">
				<a href="#top" id="back-top">
					<?php echo JText::_('TPL_PROTOSTAR_BACKTOTOP'); ?>
				</a>
			</p>
		</div>
	</footer>
	<jdoc:include type="modules" name="debug" style="none" />

</body>
</html>
