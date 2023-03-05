<?php

return [
    'panel' => [
        'install' => true,
        'css' => 'assets/css/custom-panel.css'
    ],
    'email' => [
        // see https://getkirby.com/docs/guide/emails#transport-configuration
        'transport' => [
            'type' => 'smtp',
            'host' => '192.168.1.96',
            'port' => 25,
            'security' => false
        ]
    ],
    // see https://getkirby.com/docs/reference/system/options/auth#login-methods
    'auth' => [
        'debug' => true,
        'methods' => ['code', 'password'],
        'challenge' => [
            'email' => [
                'from' => 'mail@example.com',
                'subject' => "Sisselogimiskood",
                'transport' => [
                    'type' => 'smtp',
                    'host' => '192.168.1.96',
                    'port' => 25,
                    'security' => false,
                ]
            ]
        ]
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
