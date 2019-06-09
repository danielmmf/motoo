<?php

print_r($_POST);

// set post fields
$post = [
    'username' => 'user1',
    'password' => 'passuser1',
    'gender'   => 1,
];

$ch = curl_init('https://chatsocket-2626b.firebaseio.com/hb/1.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
var_dump($response);