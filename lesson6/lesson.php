<?php

$masyvas = ['Diana', 'Akvile', 'Aurimas', 'Irina'];

//var_dump($masyvas);

//var_dump($masyvas[2]);

$masyvas1 = [
    'vardas_1' => 'Diana',
    'amzius_1' => 26,
    'vardas_2' => 'Akvile',
    'amzius_2' => 25
];

$masyvas2 = ['Diana', 26, true, ['Aurimas', 29, false]];

$masyvas3 = [];

//var_dump($masyvas);

$multidimensinis = [
    'baldai' => [
        'sofa',
        'lova' => [
            'veliurine',
            'medine' => [
                'pusine',
                'azuoline',
            ],
            'plastmasine'
        ]
    ]
];

//var_dump($multidimensinis);
unset($multidimensinis['baldai']['lova']['medine']);

var_dump($multidimensinis);


//$multidimensinis['baldai'][] = 'komoda';

//var_dump($multidimensinis);


//masyvu pridejimas
$array = [];

$array['skaicius_1'] = 1;
$array[] = 2;
$array['skaicius_2'] = 3;
$array[] = 4;
$array[] = 5;

//var_dump($array);

$key = 'raktas';

$array2 = [
    'raktas'.$key => 2,
    $key.'_2' => 3,
    $key.'_3' => 4,
    $key.'_4' => 55,
];

//var_dump($array2['raktas_4']);

