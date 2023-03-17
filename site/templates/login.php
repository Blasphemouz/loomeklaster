<!-- LEHT TEHTUD KÄSITSI! ANDMETE ASUKOHT: /content/registreerumine -->

<?php snippet('head') ?>

<?php snippet('navbar') ?>

<body>
<div class="page-container">

    <div class="page-text-column">

        <div id="main" class="page-text-container">

            <?php snippet('breadcrumb') ?>

            <h1><?= kirbytextinline($page->member()) ?></h1>

                <div class="text">
                    <?php if($error): ?>
                        <div class="alert"><?= $error ?></div>
                    <?php endif ?>

                    <form method="post" action="<?= $page->url() ?>">
                        <input type="hidden" name="csrf" value="<?= csrf() ?>">
                        <?php if($status === 'inactive'): ?>
                            <div>
                                <h2><label for="email"><?= $page->email() ?></label></h2>
                                <input id="email" name="email" required type="email" title="<?= $page->email_title() ?>"
                                       oninvalid="this.setCustomValidity('<?= $page->email_error() ?>')" onchange="this.setCustomValidity('')"
                                       value="<?= esc($email, 'attr') ?>">
                            </div>
                        <?php endif ?>

                        <?php if ($status === 'pending'): ?>
                            <div>
                                <h2><label for="name"><?= $page->logincode() ?></label></h2>
                                <input id="code" name="code" placeholder="000 000" title="<?= $page->code_title() ?>"
                                       oninvalid="this.setCustomValidity('<?= $page->code_error() ?>')" onchange="this.setCustomValidity('')"
                                       required type="text">
                                <p style="padding-top: 10px; margin-bottom: 0; padding-bottom: 0;"><?= $page->codedescription() ?></p>
                            </div>
                        <?php endif ?>
                        <div style="padding-top: 16px;">
                            <input type="submit" name="login" value="<?= $page->login() ?>" style="
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
                </div>

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