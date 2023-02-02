<?php

require __DIR__ . '/kirby/bootstrap.php';

$kirby = new Kirby();

$currentUser = $kirby->user();

if ( $currentUser && $currentUser->role()->name() === 'admin' ):
    $kirby = new Kirby([
        'roots' => [
            'blueprints' => __DIR__ . '/site/blueprints',
        ],
    ]);

elseif ( $currentUser && $currentUser->role()->name() === 'user' ):
    $kirby = new Kirby([
        'roots' => [
            'blueprints' => __DIR__ . '/site/blueprints-user',
        ],
    ]);
endif;

echo $kirby->render();