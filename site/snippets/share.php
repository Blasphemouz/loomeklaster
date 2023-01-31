<p class="share-cta">Jaga sotsiaalmeedias:</p>
<div class="sharing-container">				
	<a href="https://www.facebook.com/sharer.php?u=<?php echo html($page->url()) ?>" title="Facebook" target="_blank">
		<img draggable="false" src="<?php echo url('assets/img/icons/facebook.svg') ?>" alt="">
	</a>


	<a href="https://twitter.com/share?url=<?php echo html($page->url()) ?>&text=<?= $page->article_title()->html() ?>" title="Twitter" target="_blank">
		<img draggable="false" src="<?php echo url('assets/img/icons/twitter.svg') ?>" alt="">
	</a>							

	<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo html($page->url()) ?>" title="LinkedIn" target="_blank">
		<img draggable="false" src="<?php echo url('assets/img/icons/linkedin.svg') ?>" alt="">
	</a>

	<a href="https://www.reddit.com/submit?url=<?php echo html($page->url()) ?>" title="Reddit" target="_blank">
		<img draggable="false" src="<?php echo url('assets/img/icons/reddit.svg') ?>" alt="">
	</a>							

	<a href="https://vk.com/share.php?url=<?php echo html($page->url()) ?>" title="Vkontakte" target="_blank">
		<img draggable="false" src="<?php echo url('assets/img/icons/vkontakte.svg') ?>" alt="">
	</a>							

	<a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=<?= $page->article_title()->html() ?>&body=Ida-Viru Loomeklastri tegevusest <?= $page->article_title()->html() ?>: <?php echo html($page->url()) ?>.&ui=2&tf=1&pli=1" title="Gmail" target="_blank">
		<img draggable="false" src="<?php echo url('assets/img/icons/mail.svg') ?>" alt="">
	</a>
</div>