<?php

//$array = ['mokiniai', 'Viktorija', "Tomas", "Simonas", "Alina", "Darius", "Gediminas", "Alina", "Viktorija"];
////$kintamasis = 0;
//
//$numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5, 'key' => 5, 'fourf' => 4];

$animals = [
    [
        'type' => 'water',
        'name' => 'shark',
    ],
    [
        'type' => 'land',
        'name' => 'chimp',
    ],
    [
        'type' => 'water',
        'name' => 'hippo',
    ],
    [
        'type' => 'water',
        'name' => 'crocodile',
    ],
    [
        'type' => 'land',
        'name' => 'cat',
    ],
    [
        'type' => 'land',
        'name' => 'dog',
    ],
];

var_dump(array_column($animals, 'name'));

//$newArray = [];
//foreach ($products as $key => $values) {
//    if ($key === 'price') {
//        if ($values > 50) {
//            $newArray[] = ....
//        }
//    }
//}

//array_filter(function () {
//    ....
//});
//
//$modifiedArray = array_map(
//    function (array $number) {
//            $number['count'] = 0;
//
//            return $number;
//        },
//    $numbers
//);

//var_dump(reset($numbers));
//
//foreach ($array as $value) {
//    echo $value. '>';
//}

//var_dump(implode('>', $array));

//$newArray = [];
//
//foreach ($numbers as $values) {
//    $newArray[]= $values;
//}
//var_dump($newArray);
//var_dump(array_unique($numbers));