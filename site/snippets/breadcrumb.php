<div class="breadcrumb-container" role="navigation">
	<?php foreach($site->breadcrumb() as $crumb): ?>
		<?php if($crumb->is($site->breadcrumb()->last())): ?>
			<p><?php echo html($crumb->title()->excerpt(30, true, '…')) ?></p>
		<?php else: ?>
			<a class="breadcrumb_link" href="<?php echo $crumb->url() ?>">
			<?php echo html($crumb->title()) ?>
			</a> <p>→</p>														
		<?php endif ?>					
	<?php endforeach ?> 					
</div>	