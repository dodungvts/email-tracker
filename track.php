<?php
// Ghi log vào file
$log = [
    'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
    'time' => date('Y-m-d H:i:s'),
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
    'referer' => $_SERVER['HTTP_REFERER'] ?? 'email'
];
file_put_contents('log.txt', json_encode($log) . PHP_EOL, FILE_APPEND | LOCK_EX);

// Tr? v? font
header('Content-Type: font/ttf');
header('Access-Control-Allow-Origin: *');
readfile('track.ttf');
?>