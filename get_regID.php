 <?php


$number="6285221288210";  // tanpa tanda []
$nick="cepicahyana.com";
require_once('Chat-API-master/src/whatsprot.class.php'); // ingat lihat posisi filenya


$username = $number;


$token = md5($username);


$nickname = $nick;


$w = new WhatsProt($username, $token, $nickname, true);


$w->codeRequest();


?>