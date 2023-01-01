<?php

$family = [
    [
        'name'      => 'Miguel',
        'age'       => 27,
        'height'    => 1.77,
        'married'   => true,
        'kids'      => null
    ],
    [
        'name'      => 'Monse',
        'age'       => 26,
        'height'    => 1.77,
        'married'   => true,
        'kids'      => null
    ]
];

foreach( $family as $key => $member ) {
    echo "El miembro {$key} es: \n";
    foreach( $member as $memberKey => $value ) {
        echo "$memberKey => $value \n";
    }
}