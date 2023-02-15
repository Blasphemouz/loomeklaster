<?php snippet('head') ?>

<?php snippet('navbar') ?>
<body>
	<div class="page-container">
		<div class="page-layout-container">
			<?php snippet('breadcrumb') ?>
			<h1 style="text-transform: uppercase; margin-bottom: 30px; line-height: 1.2;"><?= kirbytextinline($page->title()) ?></h1>
			<div class="page-description">
				<?= $page->text()->toBlocks() ?>
				<style>
					.page-members-tags {
						display: flex;
						gap: 20px;
						max-width: 1280px;
						flex-wrap: wrap;
					}
				
					.page-members-tags a {
						text-transform: uppercase;
						color: white;
						font-weight: bold;
						letter-spacing: 0.8px;
						text-decoration: none;
						order: 1;
						cursor: pointer;
						padding: 8px;
						border-radius: 5px;
						background-color: #4427F0;	
						font-family: 'Century Gothic WEB', sans-serif;
					}
					
					.tags-remove {
						background-color: #D4589E!important;
						color: #4427F0!important;
					}
				</style>
                <p class="filtering">Filtreeri märksõnade alusel:</p>
                <?php snippet('tags') ?>
                <p></p>
                <p class="filtering">Filtreeri asukoha alusel:</p>
                <?php snippet('locations') ?>
			</div>
			
			<div class="page-members-container">						
				<?php foreach($items as $member): ?>
					<div class="page-member-container">
						<a href="<?= $member->url() ?>">
							<div>
							<?php if($image = $member->page_image()->toFile()): ?>
								<img class="page-member-image" src="<?= $image->crop(900, 600)->url() ?>" alt="<?= $image->alt() ?>">
							<?php endif ?>							
							</div>						
							<h2 class="page-member-title"><?= kirbytextinline($member->member()) ?></h2>							
						</a>					
					</div>					
				<?php endforeach ?>				
			</div>
		</div>	
	</div>
</body>