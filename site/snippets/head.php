<!doctype html>
<html lang="et" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">	
	<meta name="author" content="Studio Augustine">
	<meta name="description" content="<?= $page->meta_description() ?>">
	<meta name="keywords" content="<?php foreach ($page->meta_tags() as $meta_tag): ?><?= $meta_tag ?><?php endforeach ?>">	

	<meta name="theme-color" content="#D3569E">
	<meta name="msapplication-TileColor" content="#D3569E">
	<meta name="msapplication-navbutton-color" content="#D3569E">
	<meta name="apple-mobile-web-app-status-bar-style" content="#D3569E">

	<meta property="og:locale" content="et_EE"/>
	<meta property="og:locale:alternate" content="en_US"/>
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?= $page->title() ?> | <?= $site->title() ?>"/>
	<meta property="og:description" content="<?= $page->meta_description() ?>"/>
	<meta property="og:url" content="<?= $page->url() ?>"/>
	<meta property="og:site_name" content="<?= $site->title() ?>"/>
	<meta property="og:image" content="<?php if($image = $page->image()): ?><?= $image->url() ?><?php endif ?>"/>

	<meta name="twitter:url" content="<?= $page->url() ?>">
	<meta name="twitter:title" content="<?= $page->title() ?>">
	<meta name="twitter:description" content="<?= $page->meta_description() ?>">
	<meta name="twitter:image" content="">
	<meta name="twitter:image:alt" content="">
	
	<meta name="robots" content="index,follow">
	<meta name="googlebot" content="index,follow">	

	<title><?= $page->title() ?> | <?= $site->title() ?></title>
	<link rel="icon" type="image/svg+xml" href="<?php echo url('assets/favicon.svg') ?>">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

	<?= css('assets/css/reset.css?v=1.0.0') ?> 		
	<?= css('assets/css/tobii.min.css?v=2.3.2') ?> 	
	<?= css('assets/css/main.css?v=0.6.0') ?> 	
	
	<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
	<script src='https://code.jquery.com/ui/1.13.0/jquery-ui.min.js'></script>
	<?= js('assets/js/main.js?v=0.5.5') ?>	
	<?= js('assets/js/tobii.min.js?v=2.3.2') ?>	
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	
	<link rel="prefetch" href="https://www.loomeklaster.ee/liikmed">
	<link rel="prefetch" href="https://www.loomeklaster.ee/uudised">
	<link rel="prefetch" href="https://www.loomeklaster.ee/tegevus">
	<link rel="prefetch" href="https://www.loomeklaster.ee/loomeklaster">
	<link rel="prefetch" href="https://www.loomeklaster.ee/kontakt">

	<link rel="prefetch" href="https://loomeklaster.ee/ru/chleny">
	<link rel="prefetch" href="https://loomeklaster.ee/ru/novosti">
	<link rel="prefetch" href="https://loomeklaster.ee/ru/deyatelnost">
	<link rel="prefetch" href="https://loomeklaster.ee/ru/klaster">
	<link rel="prefetch" href="https://loomeklaster.ee/ru/kontakt">
	
	<!-- Start Google Analytics -->
	<?= $site->google_analytics()->kt() ?>
	<!-- End Google Analytics -->	
</head>