<!-- LEHT TEHTUD KÄSITSI! ANDMETE ASUKOHT: /content/registreerumine -->

<?php snippet('head') ?>

<?php snippet('navbar') ?>

<body>
<div class="page-container">

    <div class="page-text-column">

        <div id="main" class="page-text-container">

            <?php snippet('breadcrumb') ?>

            <h1><?= kirbytextinline($page->member()) ?></h1>

            <?php
            // if the form has errors, show a list of messages
            if (count($errors) > 0) : ?>
                <ul class="alert">
                    <?php foreach ($errors as $message) : ?>
                        <li><?= kirbytext($message) ?></li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
            <form method="post" action="<?= $page->url() ?>">

                <input type="hidden" name="csrf" value="<?= csrf() ?>">

                <input type="hidden" name="language" value="<?php echo t('urllang', 'ee')?>"

                <ul>

                    <div>
                        <h2><label for="name"><?= $page->name() ?></label></h2>
                        <input required type="text" id="name" name="name" title="<?= $page->username_title() ?>" oninvalid="setCustomValidity('<?= $page->username_error()?>')" value="<?= esc($data['name'] ?? '', 'attr') ?>">
                    </div>

                    <div style="padding-top: 10px;">
                        <h2><label for="email"><?= $page->email() ?></label></h2>
                        <input required type="email" id="email" name="email" title="<?= $page->email_title() ?>" oninvalid="setCustomValidity('<?= $page->email_error() ?>')" value="<?= esc($data['email'] ?? '', 'attr') ?> ">
                    </div>

                    <div style="padding-top: 10px;">
                        <input required type="checkbox" id="checkbox" name="checkbox" title="<?= $page->permission_title() ?>" oninvalid="setCustomValidity('<?= $page->permission_error() ?>')">
                        <label for="checkbox"> <?= $page->permission() ?></label>
                    </div>

                    <div style="padding-top: 12px;">
                        <input type="submit" name="register" value="<?= $page->register() ?>" style="
                        border: none;
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
					">
                    </div>

            </form>

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
