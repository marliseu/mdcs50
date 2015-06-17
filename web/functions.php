<?php


function getCurrentPage()
{
    $current = $_SERVER['REQUEST_URI'];
    if ($current == '/')
    {
        $current = '/index.php';
    }
    return $current;
};

function getCarousel($id = null)
{
    $carousels = [
        '/index.php' => [
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
                //'img_url' => 'http://placehold.it/1900x1080&text=Slide One',
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

    if (! $id)
    {
        return [];
    }
    if (! isset($carousels[$id]))
    {
        return [];
    }
    return $carousels[$id];
};