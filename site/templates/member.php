<?php snippet('head') ?>

<?php snippet('navbar') ?>

<body>
	<div class="page-container">
		<div class="page-text-column">
			<div class="page-text-container">
				<?php snippet('breadcrumb') ?>
				<h1><?= kirbytextinline($page->member()) ?></h1>
				<?= $page->text()->toBlocks() ?>
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
		
		<div id="main" class="page-info-container">
			<h2 class="page-info-title"><?= kirbytextinline($page->member()) ?></h2>
			<p class="page-info-content"><?= $page->address()->kt()->inline() ?></p>
			
			<div style="display: flex; gap: 20px; flex-direction: row; margin-top: 20px;">
				<?php if ($page->homepage()->isNotEmpty()): ?>
				<a href="<?= $page->homepage()->html() ?>" target="_blank" title="<?= $page->homepage()->html() ?>">
					<img class="social-media-link" draggable="false" src="<?php echo url('assets/img/icons/web.svg') ?>" alt="" border="0"/>	
				</a>				
				<?php endif ?>
				
				<?php if ($page->facebook()->isNotEmpty()): ?>
				<a href="<?= $page->facebook()->html() ?>" target="_blank" title="<?= $page->facebook()->html() ?>">
					<img class="social-media-link" draggable="false" src="<?php echo url('assets/img/icons/facebook.svg') ?>" alt="" border="0"/>	
				</a>
				<?php endif ?>
				
				<?php if ($page->instagram()->isNotEmpty()): ?>
				<a href="<?= $page->instagram()->html() ?>" target="_blank" title="<?= $page->instagram()->html() ?>">
					<img class="social-media-link" draggable="false" src="<?php echo url('assets/img/icons/instagram.svg') ?>" alt="" border="0"/>	
				</a>
				<?php endif ?>
				
				<?php if ($page->contactmail()->isNotEmpty()): ?>
				<a href="mailto:<?= $page->contactmail()->html() ?>" target="_blank" title="<?= $page->contactmail()->html() ?>">
					<img class="social-media-link" draggable="false" src="<?php echo url('assets/img/icons/mail.svg') ?>" alt="" border="0"/>	
				</a>	
				<?php endif ?>	
			</div>	
		</div>			
	</div>
</body>