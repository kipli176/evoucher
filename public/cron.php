<?php

function pertama()
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://dasi.jasaraharja.co.id/Default.aspx');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers = [];
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Connection: keep-alive';
    //    $headers[] = 'Cookie: BIGipServerdasionline-http=2130815168.20480.0000; ASP.NET_SessionId=; TS012b1bbf=017cf6a051cfa50fdd88daed7e47096bfedbcd6e5a293fcad76552310638e598869fbe43f500f127b2e1303d75826ea7dd4fa28aecca3061eae03ba0f44cf295f5292db54c183fd603255fb7677d4c3f431454322d';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Sec-Fetch-Dest: document';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-Site: none';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
    $headers[] = 'Sec-Ch-Ua: \"Not_A Brand\";v=\"99\", \"Google Chrome\";v=\"109\", \"Chromium\";v=\"109\"';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $cookies = [];
    $cokine = function ($ch, $headerLine) use (&$cookies) {
        if (preg_match('/^Set-Cookie:\s*([^;]*)/mi', $headerLine, $cookie) == 1) {
            $cookies[] = $cookie[1];
        }

        return strlen($headerLine);
    };
    curl_setopt($ch, CURLOPT_HEADERFUNCTION, $cokine);
    $result = curl_exec($ch);
    $coki = 'Cookie: '.implode(';', $cookies);
    file_put_contents('coki.txt', $coki, LOCK_EX);
    preg_match('/\(S\((.*)\)\)/', $result, $sesi);
    preg_match('/id="__VIEWSTATE" value="(.*)"/', $result, $VIEWSTATE); // echo $VIEWSTATE[1];
    preg_match('/id="__VIEWSTATEGENERATOR" value="(.*)"/', $result, $VIEWSTATEGENERATOR);
    preg_match('/id="__EVENTVALIDATION" value="(.*)"/', $result, $EVENTVALIDATION);
    preg_match('/id="dSrv" value="(.*)"/', $result, $dsrv);
    file_put_contents('sesi.txt', $sesi[1], LOCK_EX);
    $capca = kedua($sesi[1], $coki);
    $post = '__VIEWSTATE='.urlencode($VIEWSTATE[1]).'&__VIEWSTATEGENERATOR='.urlencode($VIEWSTATEGENERATOR[1]).'&__EVENTVALIDATION='.urlencode($EVENTVALIDATION[1]).'&txtUSRID=hanindya.hardian&txtPWD=@Ironman01&hdCa='.$capca.'&txtCaptcha='.$capca.'&gResp='.$sesi[1].'&isLgout=&urlLgout=&dSrv='.$dsrv[1].'&btnPro=+login+';
    file_put_contents('post.txt', $post, LOCK_EX);

    if (curl_errno($ch)) {
        echo 'Error:'.curl_error($ch);
    }
    curl_close($ch);
}

function kedua($sesi, $coki)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://dasi.jasaraharja.co.id/(S('.$sesi.'))/Services/Handler_SP_Services.ashx?Cat=DS_CAPTCHA_LTP&rtm='.time().'&params=n|n|get_captcha|'.$sesi.'|local');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $headers = [];
    $headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Connection: keep-alive';
    $headers[] = $coki;
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Referer: https://dasi.jasaraharja.co.id/(S('.$sesi.'))/Default.aspx';
    $headers[] = 'Sec-Fetch-Dest: empty';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
    $headers[] = 'X-Requested-With: XMLHttpRequest';
    $headers[] = 'Sec-Ch-Ua: \"Not_A Brand\";v=\"99\", \"Google Chrome\";v=\"109\", \"Chromium\";v=\"109\"';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);

    return json_decode($result, true)[0]['CAPTCHA'];
    if (curl_errno($ch)) {
        echo 'Error:'.curl_error($ch);
    }
    curl_close($ch);
}
function dashboard($sesi, $post, $cookie)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://dasi.jasaraharja.co.id/(S('.$sesi.'))/Default.aspx');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = [];
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = $cookie;
    $headers[] = 'Origin: https://dasi.jasaraharja.co.id';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Referer: https://dasi.jasaraharja.co.id/(S('.$sesi.'))/Default.aspx';
    $headers[] = 'Sec-Fetch-Dest: document';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
    $headers[] = 'Sec-Ch-Ua: \"Not_A Brand\";v=\"99\", \"Google Chrome\";v=\"109\", \"Chromium\";v=\"109\"';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    return $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:'.curl_error($ch);
    }
    curl_close($ch);
}
$cookie = file_get_contents('./coki.txt');
$sesi = file_get_contents('./sesi.txt');
$post = file_get_contents('./post.txt');
echo pertama();

$url = dashboard($sesi, $post, $cookie);
if (preg_match('/fa-dashboard/', $url)) {
    echo $url;
} else {
    pertama();
    echo $url;
}
