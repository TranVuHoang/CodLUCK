<?php
$listProducts = [
    'serie_a' => [
        'core'  => 'i3',
        'ram'   => '4 GB',
        'ssd'   => '256 GB',
        'price' => 450
    ],
    'serie_b' => [
        'core'  => 'i5',
        'ram'   => '8 GB',
        'ssd'   => '256 GB',
        'price' => 550
    ],
    'serie_c' => [
        'core'  => 'i7',
        'ram'   => '16 GB',
        'ssd'   => '256 GB',
        'price' => 600
    ]
];
$premiumPackages = [
    'ram_4gb' => [
        'ram'   => '4 GB',
        'price' => 100
    ],
    'ram_8gb' => [
        'ram'   => '8 GB',
        'price' => 200
    ],
    'ram_16gb' => [
        'ram'   => '16 GB',
        'price' => 300
    ],
    'ssd_256gb' => [
        'ssd'    => '256 GB',
        'price'  => 150
    ],
    'ssd_512gb' => [
        'ssd'    => '512 GB',
        'price'  => 200
    ],
    'ssd_1tb' => [
        'ssd'    => '1 TB',
        'price'  => 250
    ],
    'card_2gb' => [
        'card'  => '2 GB',
        'price' => 200
    ],
    'card_4gb' => [
        'card'  => '4 GB',
        'price' => 300
    ],
    'office_normal' => [
        'version'   => 'Normal',
        'price'     => 100
    ],
    'office_pro' => [
        'version'   => 'Pro',
        'price'     => 200
    ]
];
$customerA = [
    $listProducts['serie_a'],
    $premiumPackages['ram_4gb'],
    $premiumPackages['office_normal']
];
$customerB = [
    $listProducts['serie_b'],
    $premiumPackages['ram_8gb'],
    $premiumPackages['ssd_1tb']
];
$customerC = [
    $listProducts['serie_c'],
    $premiumPackages['ram_16gb'],
    $premiumPackages['ssd_512gb'],
    $premiumPackages['card_2gb'],
];
$customerD = [
    $listProducts['serie_c'],
    $premiumPackages['ram_16gb'],
    $premiumPackages['card_4gb']
];
