<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php if ($block->url()->isNotEmpty()): ?>
<div class="block-video-container">
	<?php if ($block->title()->isNotEmpty()): ?>
	<h2><?= $block->title() ?></h2>
	<?php endif ?>

	<figure class="block-video">
		<?= video($block->url()) ?>
	</figure>

	<?php if ($block->caption()->isNotEmpty()): ?>
	<p><?= $block->caption() ?></p>
	<?php endif ?>
</div>

<style>
.block-video {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	height: 0;
	margin-bottom: 20px;
}
.block-video iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border: none;
}

.block-video-container p {
	margin-top: 10px;
}
</style>
<?php endif ?>