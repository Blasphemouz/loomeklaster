<?php snippet('head') ?>

<?php snippet('navbar') ?>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4BT638"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<div class="page-container">
		<div class="page-text-column">
			<div id="main" class="page-text-container">
				<?php snippet('breadcrumb') ?>
				<h1><?= kirbytextinline($page->member()) ?></h1>
				
				<div class="news-container">
					<?php foreach($page->children()->listed() as $subpage): ?>
					<div class="news-item">
						<p><?= $subpage->published()->toDate('d.m.Y') ?><span>|</span></p>
						<a href="<?= $subpage->url() ?>"><?= html($subpage->title()->upper()) ?></a>
					</div>				
					<?php endforeach ?>						
				</div>
				
				<?php snippet('footer') ?>	
			</div>
		</div>
	
		<div class="page-image-column">		
			<div class="swiper">
				<div class="swiper-wrapper">
					<?php foreach($page->page_images()->toFiles() as $images): ?>					
					<a class="swiper-slide lightbox" href="<?= $images->url() ?>">
					<img draggable="false" src="<?= $images->url() ?>" alt="<?php if ($images->alt()->isNotEmpty()): ?><?= $images->alt() ?><?php endif ?>"/>
					</a>
					<?php endforeach ?>	
				</div>
				<div class="swiper-pagination"></div>
			</div>		

			<a class="anchor-link" href="#main"><img src="<?php echo url('assets/img/down.svg') ?>" alt="" style=""></a>			
		</div>
	</div>
</body>