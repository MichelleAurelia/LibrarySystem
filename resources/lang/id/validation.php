<?php

return [
    'required'=> ':attribute wajib diisi.',

    'attributes' => [
        'name' => 'Nama Lengkap',
        'email' => 'Alamat Email',
        'password' => 'Kata Sandi',

    ],

    'min' => [
        'string' => ':attribute minimal harus berisi 8 karakter.',
    ],

    'custom' => [
        'password' => [
            'regex' => ':attribute harus mengandung setidaknya satu huruf kapital.',
        ],
    ],
];