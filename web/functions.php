<?php


function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}

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
                'caption' => 'Home Caption 1',
            ],
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
                'caption' => 'Home Caption 2',
            ],
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
                'caption' => 'Home Caption 3',
            ]
        ],
        '/about.php' => [
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
                'caption' => 'About Caption 1',
            ],
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
                'caption' => 'About Caption 2',
            ],
            [
                'img_url' => 'http://lorempixel.com/g/750/450',
                'caption' => 'About Caption 3',
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