<?php

    require_once 'functions.php';

    $website_settings = [
        'site_title' => 'MarliseU Industries',
        'page_title' => 'My Portfolio',
        'subheading' => 'Quiet',
        'copyright' => 'Copyright &copy; Marlise Urscheler %s',
        'home' => 'MarliseU Ind.',
    ];

    $portfolio = [
        [
            'container_class' => 'col-md-3 img-portfolio',
            'img_class' => 'img-responsive img-hover',
            'portfolio_link' => 'portfolio-item.php',
            'img_link' => 'http://lorempixel.com/g/750/450',
        ],
        [
            'container_class' => 'col-md-3 img-portfolio',
            'img_class' => 'img-responsive img-hover',
            'portfolio_link' => 'portfolio-item.php',
            'img_link' => 'http://lorempixel.com/g/750/450',
        ],
        [
            'container_class' => 'col-md-3 img-portfolio',
            'img_class' => 'img-responsive img-hover',
            'portfolio_link' => 'portfolio-item.php',
            'img_link' => 'http://lorempixel.com/g/750/450',
        ],
        [
            'container_class' => 'col-md-3 img-portfolio',
            'img_class' => 'img-responsive img-hover',
            'portfolio_link' => 'portfolio-item.php',
            'img_link' => 'http://lorempixel.com/g/750/450',
        ],
    ];

    $carousels = [
        '/index.php' => [
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
//                'img_url' => 'http://placehold.it/1900x1080&text=Slide One',
                'caption' => 'Caption 1',
            ],
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
                'caption' => 'Caption 2',
            ],
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
                'caption' => 'Caption 3',
            ]
        ],
        '/about.php' => [
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
                'caption' => 'Caption 1',
            ],
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
                'caption' => 'Caption 2',
            ],
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
                'caption' => 'Caption 3',
            ]
        ]
    ];