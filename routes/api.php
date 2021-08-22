<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function (Request $request) {
    return json_encode(
        [
            0 => [
              'id' => 1,
              'first_name' => 'Arly',
              'last_name' => 'Corey',
              'email' => 'acorey0@si.edu',
              'gender' => 'Genderfluid',
              'ip_address' => '28.55.128.23',
            ],
            1 => [
              'id' => 2,
              'first_name' => 'Angil',
              'last_name' => 'Estcot',
              'email' => 'aestcot1@digg.com',
              'gender' => 'Non-binary',
              'ip_address' => '46.77.85.30',
            ],
            2 => [
              'id' => 3,
              'first_name' => 'Baily',
              'last_name' => 'Caslane',
              'email' => 'bcaslane2@zimbio.com',
              'gender' => 'Genderqueer',
              'ip_address' => '45.32.125.243',
            ],
            3 => [
              'id' => 4,
              'first_name' => 'Cairistiona',
              'last_name' => 'Le Strange',
              'email' => 'clestrange3@simplemachines.org',
              'gender' => 'Genderqueer',
              'ip_address' => '209.151.198.15',
            ],
            4 => [
              'id' => 5,
              'first_name' => 'Esme',
              'last_name' => 'Duly',
              'email' => 'eduly4@latimes.com',
              'gender' => 'Non-binary',
              'ip_address' => '195.251.228.32',
            ],
            5 => [
              'id' => 6,
              'first_name' => 'Manny',
              'last_name' => 'Dyde',
              'email' => 'mdyde5@shop-pro.jp',
              'gender' => 'Female',
              'ip_address' => '99.154.48.200',
            ],
            6 => [
              'id' => 7,
              'first_name' => 'Linus',
              'last_name' => 'Haywood',
              'email' => 'lhaywood6@phpbb.com',
              'gender' => 'Polygender',
              'ip_address' => '72.86.192.34',
            ],
            7 => [
              'id' => 8,
              'first_name' => 'Hodge',
              'last_name' => 'Pett',
              'email' => 'hpett7@addtoany.com',
              'gender' => 'Agender',
              'ip_address' => '22.135.95.50',
            ],
            8 => [
              'id' => 9,
              'first_name' => 'Findlay',
              'last_name' => 'Jecock',
              'email' => 'fjecock8@instagram.com',
              'gender' => 'Genderqueer',
              'ip_address' => '97.102.151.226',
            ],
            9 => [
              'id' => 10,
              'first_name' => 'Rudd',
              'last_name' => 'Dutnell',
              'email' => 'rdutnell9@marketwatch.com',
              'gender' => 'Genderqueer',
              'ip_address' => '22.36.29.140',
            ],
          ]
    );
});
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
