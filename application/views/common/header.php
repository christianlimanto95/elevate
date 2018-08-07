<html>
<head>
	<title><?php echo $title; ?></title>
	
	<link rel="stylesheet" href="<?php echo base_url("assets/css/common/default.css?v=31"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/" . $page_name . ".css?v=40"); ?>" />
    <link rel="shortcut icon" href="<?php echo base_url("assets/icons/favicon.png"); ?>" />
	<link rel="preload" as="font" type="font/woff" href="<?php echo base_url("assets/fonts/FiraSans-Regular.woff"); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php echo base_url("assets/icons/elevate.png"); ?>" />
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
	<?php if (isset($meta_description)) {
        echo "<meta name='description' content='" . $meta_description . "' />";
        echo "<meta name='og:description' content='" . $meta_description . "' />";
	} ?>
	<style>
		@font-face {
			font-family: firasans-regular;
			src: url(<?php echo base_url("assets/fonts/FiraSans-Regular.woff"); ?>);
		}	
	</style>
</head>
<body>
<div class="header<?php echo $header_color; ?>">
	<a class="logo" href="<?php echo base_url(); ?>">
		<div class="logo-image" style="background-image: url(<?php echo base_url("assets/icons/elevate.png?v=1"); ?>);"></div>
		<div class="logo-text">
			<div class="logo-text-elevate">ELEVATE</div>
			<div class="logo-text-branding">BRANDING</div>
			<div class="logo-text-at-higher-state"><div>AT HIGHER STATE</div></div>
		</div>
	</a>
	<div class="menu-icon" id="menu-icon">
		<div class="menu-icon-line menu-icon-line-1"></div>
		<div class="menu-icon-line menu-icon-line-2"></div>
		<div class="menu-icon-line menu-icon-line-3"></div>
	</div>
	<div class="header-menu-container" style="background-image: url(<?php echo base_url("assets/images/menu_background.png"); ?>);">
		<div class="header-menu-red-line"></div>
		<div class="header-menu-inner">
		<a class="header-menu-1 header-menu<?php echo $header_menu_active["about"]; ?>" href="<?php echo base_url("about"); ?>">ABOUT</a>
		<a class="header-menu-2 header-menu<?php echo $header_menu_active["services"]; ?>" href="<?php echo base_url("services"); ?>">SERVICES</a>
		<a class="header-menu-3 header-menu<?php echo $header_menu_active["work"]; ?>" href="<?php echo base_url("work"); ?>">WORK</a>
		<a class="header-menu-4 header-menu<?php echo $header_menu_active["talks"]; ?>" href="<?php echo base_url("talks"); ?>">TALKS</a>
		<a class="header-menu-5 header-menu<?php echo $header_menu_active["connect"]; ?>" href="<?php echo base_url("connect"); ?>">CONNECT</a>
		</div>
	</div>
</div>
<script>
var isMobile = false, isTablet = false;
var vw = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var vh = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
if (vw < 1025) {
	isMobile = true;
	if (vw >= 768) {
		isTablet = true;
	}
}
</script>