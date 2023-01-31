<?php

Kirby::plugin('studio-augustine/customhtml-block', [
  'blueprints' => [
    'blocks/customhtml' => __DIR__ . '/blueprints/blocks/customhtml.yml'
	],
  'snippets' => [
    'blocks/customhtml' => __DIR__ . '/snippets/blocks/customhtml.php',
  ],
]);