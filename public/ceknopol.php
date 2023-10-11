<?php

function formCari($sesi, $cookie, $plat)
{
    $cookies = file_get_contents('./coki.txt');
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://dasi.jasaraharja.co.id/(S('.$sesi.'))/Mod_Asuransi/SW/Form/Master_Data/frmManajemenDataKendaraan.aspx');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = [];
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Connection: keep-alive';
    $headers[] = $cookie;
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Referer: https://dasi.jasaraharja.co.id/(S('.$sesi.'))/Default2.aspx';
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

    $result = curl_exec($ch);
    preg_match('/id="ctl00_HidUsrLogn" value="(.*)"/', $result, $ctl00_HidUsrLogn); // echo $VIEWSTATE[1];
    preg_match('/id="__VIEWSTATE" value="(.*)"/', $result, $VIEWSTATE); // echo $VIEWSTATE[1];
    preg_match('/id="__VIEWSTATEGENERATOR" value="(.*)"/', $result, $VIEWSTATEGENERATOR);
    preg_match('/id="__EVENTVALIDATION" value="(.*)"/', $result, $EVENTVALIDATION);
    $post2 = 'ctl00%24scrMgr=ctl00%24updMain%7Cctl00%24MainContent%24btn_cari&__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE='.urlencode($VIEWSTATE[1]).'&__VIEWSTATEGENERATOR='.urlencode($VIEWSTATEGENERATOR[1]).'&__EVENTVALIDATION='.urlencode($EVENTVALIDATION[1]).'&ctl00%24MainContent%24txtCariNoPolisi='.$plat.'&ctl00%24MainContent%24txtCariNoRangka=&ctl00%24MainContent%24txtCariNoMesin=&ctl00%24MainContent%24txtCariHp=&ctl00%24MainContent%24modeEntry=&ctl00%24MainContent%24txtGridValue=&ctl00%24MainContent%24value_nopol=&ctl00%24MainContent%24JSApprResp=&ctl00%24MainContent%24viewMode=&ctl00%24MainContent%24flagServer=SW&ctl00%24HidUsrLogn=921535099&ctl00%24HidUsrSess='.$sesi.'&ctl00%24HidUsrKntr=0400301&ctl00%24HidUsrLvl=&ctl00%24HidUsrKntrOrigin=0400301&ctl00%24HidLvlKntr=&ctl00%24viewMode=default&ctl00%24JSApprResp=false&__ASYNCPOST=true&ctl00%24MainContent%24btn_cari=%20Cari%20';
    if (curl_errno($ch)) {
        echo 'Error:'.curl_error($ch);
    }
    curl_close($ch);
    $ch2 = curl_init();

    curl_setopt($ch2, CURLOPT_URL, 'https://dasi.jasaraharja.co.id/(S('.$sesi.'))/Mod_Asuransi/SW/Form/Master_Data/frmManajemenDataKendaraan.aspx');
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch2, CURLOPT_POST, 1);
    curl_setopt($ch2, CURLOPT_POSTFIELDS, $post2);
    curl_setopt($ch2, CURLOPT_ENCODING, 'gzip, deflate');
    curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);

    $headers = [];
    $headers[] = 'Accept: */*';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headers[] = $cookie;
    $headers[] = 'Origin: https://dasi.jasaraharja.co.id';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Referer: https://dasi.jasaraharja.co.id/(S('.$sesi.'))/Mod_Asuransi/SW/Form/Master_Data/frmManajemenDataKendaraan.aspx';
    $headers[] = 'Sec-Fetch-Dest: empty';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
    $headers[] = 'X-Microsoftajax: Delta=true';
    $headers[] = 'Sec-Ch-Ua: \"Not_A Brand\";v=\"99\", \"Google Chrome\";v=\"109\", \"Chromium\";v=\"109\"';
    $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
    $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
    curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);

    $results = curl_exec($ch2);

    $dom = new DOMDocument();
    @$dom->loadHTML($results);
    // $dom->loadHTML($results);
    $thArray = $tdArray = $array = [];
    $th = $dom->getElementsByTagName('td');
    foreach ($th as $th) {
        $thArray[] = trim($th->nodeValue);
    }

    $array['tnkb'] = $plat;
    $array['alamat'] = $thArray[10];
    $array['golongan'] = $thArray[4];
    $array['hp'] = $thArray[11];
    $array['nik'] = $thArray[12];
    $array['jatuh_tempo'] = $thArray[23];
    $array['jenis_kendaraan'] = $thArray[5];
    $array['noka'] = $thArray[0];
    $array['nosin'] = $thArray[1];
    $array['pemilik'] = $thArray[9];
    $array['tahun'] = $thArray[2];
    $array['warna'] = $thArray[8];
    $date_now = time();
    $date_convert = strtotime($thArray[23]);
    if ($date_now < $date_convert) {
        $status = 'Lunas';
    } else {
        $status = 'Belum Lunas';
    }
    $array['status'] = $status;
    header('Content-Type: application/json; charset=utf-8');

    return json_encode($array);
    if (curl_errno($ch2)) {
        echo 'Error:'.curl_error($ch2);
    }
    curl_close($ch2);
}
$cookie = file_get_contents('./coki.txt');
$sesi = file_get_contents('./sesi.txt');
// $url = file_get_contents('/cron.php');
// if (preg_match('/fa-dashboard/', $url)) {
echo formCari($sesi, $cookie, $_GET['nopol']);
// } else {
//     file_get_contents('/cron.php');
//     echo formCari($sesi, $cookie, $_GET['nopol']);
// }
