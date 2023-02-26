<?php

return [
    'panel' => [
        'install' => true,
        'css' => 'assets/css/custom-panel.css'
    ],
    'hooks' => [
        'page.*:after' => function ($event, $newPage) { //Otsib muudatusi lehtedele
            if(in_array($event->action(), ['update', 'changeTitle', 'changeSlug',]) !== true) { //Kood ei reageeri sündmustele, mis ei sobi
                return;
            }

            $role = $this->user()->role(); //Leiab kastuaja rolli

            if($role == 'user') { //Kui kastuaja roll on tavakasutaja
                $newPage->changeStatus('draft'); //Muudab postituse staatuse draftiks
                return $newPage;
            }
        }
    ],
    'languages' => true,
	'debug'  => true,
];
