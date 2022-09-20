<?php

// Dit is een testscript
// dat is bedoeld om de style te repareren
function start($url, $sendcookies, $sendsession, $requestmethod = 'post')
{
    $ch = curl_init($url);
    if (
        isset($_SERVER['REQUEST_METHOD'])
        && strtolower($_SERVER['REQUEST_METHOD']) == 'post'
    ) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
    }
    if ($sendcookies) {
        $cookie = array();
        foreach ($_COOKIE as $key => $value) {
            $cookie[] = $key . '=' . $value;
        }
        if ($sendsession) {
            $cookie[] = SID;
        }
        $cookie = implode('; ', $cookie);
        curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    }
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    $contents = curl_exec($ch);
    curl_close($ch);
    print($contents);
}
$url = 'http://test.phptest.test:9999/execute.php?' . $_SERVER['QUERY_STRING'];
$sendcookies = false;
$sendsession = false;
start($url, $sendcookies, $sendsession);
