<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.1905.com/m/1905tv/live/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/1.0.4844.84 Safari/537.36");
    $content = curl_exec($ch);
    curl_close($ch);
    preg_match("/video:'(.*)',/i", $content, $data);
    header('Location: ' . $data[1]);
?>