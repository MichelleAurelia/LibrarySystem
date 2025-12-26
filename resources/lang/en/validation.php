<?php

return [
    'required'=> ':attribute must be filled.',

    'attributes' => [
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',

    ],

    'min' => [
        'string' => ':attribute must at least 8 character.',
    ],

    'custom' => [
        'password' => [
            'regex' => ':attribute must at least contain one Capital letter.',
        ],
    ],
];