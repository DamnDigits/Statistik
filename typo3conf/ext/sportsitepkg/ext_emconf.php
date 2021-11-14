<?php

/**
 * Extension Manager/Repository config file for ext "sportsitepkg".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'SportSitePKG',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Own\\Sportsitepkg\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Marco Fieker',
    'author_email' => 'Marco_Fieker@icloud.com',
    'author_company' => 'Own',
    'version' => '1.0.0',
];
