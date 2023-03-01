<?php $user = $site->user() ?>

<header>
	<nav class="navigation">
		<div class="nav-container">
			<div class="nav-content">			
				<ul class="nav-menu">			
					<?php foreach($site->children()->listed() as $subpage): ?>
					<li id="<?= $subpage->template() ?><?php foreach($kirby->languages() as $language): ?><?php if($language->code() == $kirby->language()->code()): ?><?php $fallback = $language->name(); echo i18n::translate('class', $fallback, $language->code());?><?php endif ?><?php endforeach ?>" class="nav-item <?php e($subpage->isActive(), 'active') ?>"><a href="<?= $subpage->url() ?>"><?= html($subpage->title()->upper()) ?></a></li>
					<?php endforeach ?>	
				</ul>


				<ul class="nav-lang">	
					<?php foreach($kirby->languages() as $language): ?>
					<?php if ($kirby->language() == $language) continue; ?>
					<li id="lang" class="nav-item">
					  <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
						<?= html($language->code()) ?>
					  </a>
					</li>
					<?php endforeach ?>
                    <?php if(!$kirby->user()) { ?>
                    <li class="nav-item">
                        <a href="/registreerumine">
                            <?=t('join', 'Liitu') ?>
                        </a>
                    </li>
                    <?php }; ?>
                    <li class="nav-item">
                        <a href="/panel/login?language=<?php echo t('lang', 'ee') ?>">
                            <?php if (!$kirby->user()) {
                                echo t('login', 'Sisene');
                            } else {
                                echo t('panel', 'Paneel');
                            }
                            ?>
                        </a>
                    </li>
					<li class="nav-item">
						<a href="<?= $site->facebook()->html() ?>" target="_blank">
							<img class="social-media-link" draggable="false" src="<?php echo url('assets/img/icons/facebook.svg') ?>" alt="" border="0"/>	
						</a>
					</li>	
					
					<li class="nav-item">
						<a href="<?= $site->instagram()->html() ?>" target="_blank">
							<img class="social-media-link" draggable="false" src="<?php echo url('assets/img/icons/instagram.svg') ?>" alt="" border="0"/>	
						</a>
					</li>

				</ul>				
				
				<ul class="mob-nav-menu">
					<li id="" class="mob-nav-toggle"><a style="opacity: 1!important;" href="javascript:void(0)"><?php echo t('menu', 'Menüü') ?></a></li>
				</ul>						
			</div>	
		</div>
	</nav>
	
	<?php foreach($site->logo()->toFiles() as $images): ?>
	<a href="<?= $site->url() ?>">
		<img class="homepage-logo" draggable="false" src="<?= $images->url() ?>" alt="<?= $images->alt()->html() ?>" border="0"/>	
	</a>
	<?php endforeach ?>
</header>