$p="\33[1;35m";
$r="\33[5;31m";
$g="\33[1;32m";
$b="\33[1;34m";
$y="\33[1;33m";
$i="\33[1;36m";
$bl="\33[1;30m";
$w="\33[1;37m";
$linkss="\33[0;36m";
@system('clear');
if (file_exists("dataMonkey.php")!=true) {
    echo "\33[1;36m•\33[1;37m Nhập ApiKey App: \33[5;33m";
    $apikeyi=trim(fgets(STDIN));
    sleep(1);
    echo "\33[1;36m•\33[1;37m Nhập ID App: \33[5;33m";
    $idi=trim(fgets(STDIN));
    $k=fopen("dataMonkey.php", "a+");
    fwrite($k, "<?php\r\n\$");
    fwrite($k, "apimonkey = '{$apikeyi}';\r\n\$");
    fwrite($k, "useridmonkey = '{$idi}';\r\n?>");
    fclose($k);
}
include "dataMonkey.php";
@system('clear');
echo "\33[5;33m=============\33[5;41m\33[10;33m- Monkey Reward -\33[0m\33[5;33m==============\n                    \n\n";
function md6($int)
{
    $randomness=array("3", "4", "7", "12", "75", "23", "12", "4", "7", "54", "32", "23", "54", "3", "12", "3", "4", "7", "12", "75", "23", "12", "4", "7", "54", "32", "25", "54", "3", "12", "34", "3", "23", "4", "22", "12", "3");
    $numbl=$int*3 + 6;
    $int=$int*2 + 17;
    $rnds[]=":R";
    for ($i3=0; $i3<15; $i3 += 2) {
        $rnds[]=$randomness[$i3]*$int;
    }
    return implode($rnds);
}
function timer($tmr)
{
    $bl="\33[1;30m";
    $r="\33[0;31m";
    $g="\33[0;32m";
    $k="\33[1;33m";
    $bu="\33[1;34m";
    $p="\33[1;35m";
    $c="\33[1;36m";
    $w="\33[1;37m";
    $cr="\33[0m";
    $tim=time() + $tmr;
    while (true) {
        $red="\33[5;31m";
        echo "\r                                               \r";
        $res=$tim-time();
        if ($res<1) {
            break;
        }
echo "\r\33[0;31m\33[5;32m[•\33[5;32m]\33[5;31m Hết Nhiệm Vụ! Đợi\033[1;33m 30 \033[1;31m Phút !!! Thoát App Vào Lại Để Load\r";
sleep(1800);
    }
}
$k="\33[0m";
$w="\33[0;37m";
$r="\33[5;31m";
$b="\33[1;36m";
$y="\33[1;33m";
$g="\33[1;32m";
$b2="\33[1;34m";
$p="\33[1;35m";
$p2="\33[0;35m";
$gr="\33[1;30m";
$l="{$gr}••••••••••••••••••••••••••••••••••••••••••••••••\n";
$l1="{$gr}•";
$l2="{$gr}••••••••••••••••••••••••••••••••••••••••••••••••\n";
function post($url, $post, $header)
{
    $ch=curl_init();
    curl_setopt_array($ch, array(10002 => $url, 52 => true, 19913 => true, 10015 => $post, 10036 => "POST", 47 => true, 64 => false, 3 => 8082, 10102 => '', 10023 => $header));
    return curl_exec($ch);
    curl_close($ch);
}
$head=array("Content-Type:application/json; charset=utf-8", "User-Agent:Dalvik/2.1.0 (Linux; U; Android 10; moto g(7) power Build/QPOS30.52-29-11)", "Host:monkey.mkdevelopment.de:8082", "Connection:Keep-Alive", "Accept-Encoding:gzip");
$data8='{"API_Key":"'.$apimonkey.'","RefCode":"93DCA","ID":'.$useridmonkey.'}';
$user1=post("http://monkey.mkdevelopment.de:8082/api/Ref/EnterRef", $data8, $head);
for ($t=24; $t>0; $t--) {
        $data='{"API_Key":"'.$apimonkey.'","ID":'.$useridmonkey.'}';
    $user=post("http://monkey.mkdevelopment.de:8082/api/User/GetUserInfo", $data, $head);
    $diam=json_decode($user, true)["diamonds"];
    $scratch=json_decode($user, true)["scratches"];
        echo "\33[5;32m--\33[5;33m-\33[5;35m---\33[5;36m---\33[5;34m-\33[5;37m--\33[5;31m---\33[5;33m----\33[5;32m--\33[5;33m-\33[5;35m---\33[5;36m---\33[5;34m-\33[5;37m--\33[5;31m---\33[5;33m----\33[5;32m--\33[5;33m-\33[5;35m-\n";
    echo "\33[1;33m       Tia Sét: {$scratch}  |  Số Chuối: {$diam} \n";
    echo "\33[5;32m--\33[5;33m-\33[5;35m---\33[5;36m---\33[5;34m-\33[5;37m--\33[5;31m---\33[5;33m----\33[5;32m--\33[5;33m-\33[5;35m---\33[5;36m---\33[5;34m-\33[5;37m--\33[5;31m---\33[5;33m----\33[5;32m--\33[5;33m-\33[5;35m-\n\n";
            $user=post("http://monkey.mkdevelopment.de:8082/api/User/GetUserInfo", $data, $head);
    $diam=json_decode($user, true)["diamonds"];
    $val1=md5($useridmonkey + $diam + 10);
    $post='{"Validation":"'.$val1.'","API_Key":"'.$apimonkey.'","ID":'.$useridmonkey.'}';
        $dayli=post("http://monkey.mkdevelopment.de:8082/api/Video/DailyLoginVideo", $post, $head);
    $amount=json_decode($dayli, true)["amount"];
    if ($amount==15) {
                echo "{$l1} \33[5;33m[\33[1;31mThành Công\33[1;33m] \33[5;36m~> \33[5;37mNhận \33[5;33m{$amount} \33[32mTia Sét\33[5;36m\n";
            }
        $hour=post("http://monkey.mkdevelopment.de:8082/api/Video/HourlyVideo", $post, $head);
    $amount=json_decode($hour, true)["amount"];
    if ($amount==5) {
                echo "{$l1} \33[5;33m[\33[1;31mThành Công\33[1;33m] \33[5;36m~> \33[5;37mNhận \33[5;33m{$amount} \33[32mTia Sét\33[5;36m\n";
            }
    sleep(1);
        while (true) {
                $user=post("http://monkey.mkdevelopment.de:8082/api/User/GetUserInfo", $data, $head);
        $diam=json_decode($user, true)["diamonds"];
                $val1=md5($useridmonkey + $diam + 10);
        $val2=md6($diam);
        $dat='{"Validation":"'.$val1.'","Validation2":"'.$val2.'","API_Key":"'.$apimonkey.'","ID":'.$useridmonkey.'}';
        $claim=post("http://monkey.mkdevelopment.de:8082/api/Scratch/StartScratching", $dat, $head);
        $slot1=json_decode($claim, true)["slot1"];
        $slot2=json_decode($claim, true)["slot2"];
        $slot3=json_decode($claim, true)["slot3"];
                if ($slot1==50) {
                        echo $l1;
            break;
        }
                $point=$slot1 + $slot2 + $slot3;
        $user=post("http://monkey.mkdevelopment.de:8082/api/User/GetUserInfo", $data, $head);
        $diam=json_decode($user, true)["diamonds"];
        $scratch=json_decode($user, true)["scratches"];
                echo "{$l1} \33[5;33m[\33[1;31mThành Công\33[1;33m] \33[5;36m~> \33[5;37mNhận \33[5;33m{$point} \33[32mChuối\33[5;36m ~> \33[5;37mHiện Có\33[5;33m {$diam}\33[32m Chuối\33[5;37m\n";
        sleep(5);
    }
    $time=3600;
    $time=timer($time);
}
