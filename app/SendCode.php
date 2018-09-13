<?php

// namespace App;

// class SendCode{
//     public static function sendCode($mobile){

//         $code = rand(1111,9999);
//         $nexmo = app('Nexmo\Client');
//         $nexmo->message()->send([
//             'to'    => ''.(int) $mobile,
//             'from'  => '+63194253825',
//             'text'  => 'Verify Code: '. $code ,
//         ]);
//         return $code;
//     }
// }