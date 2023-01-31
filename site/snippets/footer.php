<footer>
	<div class="footer-container">
		<hr>
		
		<div class="footer-social-text">
			<?= $site->footer()->toBlocks() ?>
		</div>	
		
		<style>
			.footer-sponsors-container {
				display: grid;
				grid-template-columns: repeat(3, minmax(0, 1fr));
				gap: 40px;			
				justify-content: center;
				align-items: flex-start;			
				background-color: rgba(255,255,255, 0.9);
				z-index: 2;
				border-radius: 5px;
			}

			.footer-sponsor {
				flex: 1;
				width: 100%;
				height: auto;
				border-radius: 5px;
			}		
		</style>
		
		<div class="footer-sponsors-container">
		<?php foreach($site->sponsors()->toFiles() as $images): ?>
		<a href="<?= $images->link()->html() ?>" target="_blank">
			<img class="footer-sponsor" draggable="false" src="<?= $images->url() ?>" alt="" border="0"/>
		</a>
		<?php endforeach ?>
		</div>
	</div>	
</footer>