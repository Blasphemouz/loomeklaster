<div class="page-members-tags">
    <?php foreach($tags as $tag): ?>
    <?php if($tag == urldecode(param('tag'))): ?>
        <a class="tags-remove" href="<?= url('liikmed', ['params' => ['location' => urldecode($location)]]) ?>">
            <span>X </span><?php echo t(html($tag)) ?>
        </a>
    <?php else : ?>
    <a href="
    <?= url($page->url(), ['params' => ['tag' => urldecode($tag), 'location' => urldecode($location)]]) ?>">
        <?php echo t(html($tag)) ?>
    </a>
    <?php endif;?>
    <?php endforeach ?>
</div>