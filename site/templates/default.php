<?php snippet('head') ?>

<?php snippet('navbar') ?>

<body>
	<div class="swiper">
		<div class="swiper-wrapper">
			<?php foreach($page->home_photos()->toFiles() as $images): ?>					
			<img draggable="false" class="swiper-slide homepage-image" src="<?= $images->url() ?>" alt="<?php if ($images->alt()->isNotEmpty()): ?><?= $images->alt() ?><?php endif ?>"/>
			<?php endforeach ?>	
		</div>
		<div class="swiper-pagination"></div>
	</div>
	
	<div class="homepage-sponsors-container">
	<?php foreach($site->sponsors()->toFiles() as $images): ?>
		<a href="<?= $images->link()->html() ?>" target="_blank">
			<img class="homepage-sponsor" draggable="false" src="<?= $images->url() ?>" alt="<?= $images->alt()->html() ?>" border="0"/>
		</a>
	<?php endforeach ?>
	</div>
</body>