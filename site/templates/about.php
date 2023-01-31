<?php snippet('head') ?>

<?php snippet('navbar') ?>

<body>
	<div class="page-container">
		<div class="page-text-column">
			<div id="main" class="page-text-container">
				<?php snippet('breadcrumb') ?>
				<h1><?= kirbytextinline($page->member()) ?></h1>
				<?= $page->text()->toBlocks() ?>
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