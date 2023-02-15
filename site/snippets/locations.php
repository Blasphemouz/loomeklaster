<div class="page-members-tags">
    <?php foreach($locations as $location): ?>
        <?php if($location == urldecode(param('location'))): ?>
            <a class="tags-remove" href="<?= url('liikmed', ['params' => ['tag' => urldecode($tag)]]) ?>">
                <span>X </span><?php echo t(html($location)) ?>
            </a>
        <?php else : ?>
            <a href="
    <?= url($page->url(), ['params' => ['tag' => urldecode($tag), 'location' => urldecode($location)]]) ?>">
                <?php echo t(html($location)) ?>
            </a>
        <?php endif;?>
    <?php endforeach ?>
</div>