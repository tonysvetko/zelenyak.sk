<?php

return [

    'recaptcha' => 'Igazolja, hogy nem robot.',

    'custom' => [
        'name' => [
            'required' => 'A név megadása kötelező.',
            'max' => 'A név hossza nem lehet több, mint :max karakter.',
        ],
        'address' => [
            'required' => 'A lakóhely megadása kötelező.',
            'max' => 'A lakóhely hossza nem lehet több, mint :max karakter.',
        ],
        'birth_year' => [
            'required' => 'A születési év megadása kötelező.',
            'numeric' => 'A születési év szám kell, hogy legyen!',
        ],
    ],

];
