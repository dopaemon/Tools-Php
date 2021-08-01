error_reporting(0);
session_start();
$day = date("d/m/Y");
$trang="\033[0m";
$do="\033[1;91m";
$grean="\033[1;32m";  
$mit="\033[0;32m";
$vang="\033[0;33m";
$mti="\033[0;33m";
$test="\033[1;33m";
$tim="\033[1;36m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$blue="\033[1;36m";
$trang="\033[1;37m";
$trangs="\033[0;32m";
$trang="\033[0;33m";
$do="\033[1;91m";
$vang="\033[0;33m";
$white= "\033[0;33m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$maufullxduong= "\e[1;47;34m";
$maufulldo= "\e[1;47;31m";
$maufullluc= "\e[1;47;32m";
$maufullxnhac= "\e[1;47;36m";
$maufullden= "\e[1;47;30m";
$maufullvang= "\e[1;47;33m";
$maufullhong= "\e[1;47;33m";
$ngancachfullmau= "\e[0m";
$lightblue= '\033[94m';
$sx='22233';
$sh='2.5';
$sx2='55599';
$cl='clear';
$succ="SUCCESS";
$banner="\r\033[1;96m███\033[1;93m╗   \033[1;96m██\033[1;93m╗ \033[1;96m█████\033[1;93m╗ \033[1;96m███\033[1;93m╗   \033[1;96m███\033[1;93m╗    
\033[1;31m████\033[1;93m╗  \033[1;31m██\033[1;93m║\033[1;31m██\033[1;93m╔══\033[1;31m██\033[1;93m╗\033[1;31m████\033[1;93m╗ \033[1;31m████\033[1;93m║    
\033[1;95m██\033[1;93m╔\033[1;95m██\033[1;93m╗ \033[1;95m██\033[1;93m║\033[1;95m███████\033[1;93m║\033[1;95m██\033[1;93m╔\033[1;95m████\033[1;93m╔\033[1;95m██\033[1;93m║    
\033[1;97m██\033[1;93m║╚\033[1;97m██\033[1;93m╗\033[1;97m██\033[1;93m║\033[1;97m██\033[1;93m╔══\033[1;97m██\033[1;93m║\033[1;97m██\033[1;93m║╚\033[1;97m██\033[1;93m╔╝\033[1;97m██\033[1;93m║    
\033[1;37m██\033[1;93m║ \033[1;93m╚\033[1;37m████\033[1;93m║\033[1;37m██\033[1;93m║  \033[1;37m██\033[1;93m║\033[1;37m██\033[1;93m║ ╚═╝ \033[1;37m██\033[1;93m║    
\033[1;93m╚═╝  ╚═══╝╚═╝  ╚═╝╚═╝     ╚═╝  
\033[1;41;33mBản Quyền Thuộc Nam Tool\033[0m\033[1;30m
\033[1;33m╚═══════════════════════════════════════════════════╝\n\n";
$logo="\033[1;33m─────────────────────────────────────────────────────────────────
\033[1;31m[".$luc."●".$do."] ".$trang."=> \033[1;93mTool TraoDoiSub Đơn Token
\033[1;31m[".$luc."●".$do."] ".$trang."=> \033[1;97mTool Bản Quyền : \033[1;93mNam Tool
\033[1;31m[".$luc."●".$do."] ".$trang."=> \033[1;97mZalo: \033[1;32m0852048795
\033[1;31m[".$luc."●".$do."] ".$trang."=> \033[1;97mMoMo: \033[1;93m0328485126
\033[1;33m─────────────────────────────────────────────────────────────────\n";
$url='https://michabitco.in/system/ajax.php';
@system($cl);
if (!file_exists('Z_MICHACOOKIE.php')){
	echo $banner;
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;94mAdmin:";
usleep(23456);
echo "Mạnh Tool\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;92mTool Micha Bitcoin Vip\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;36mYoutube: ";
usleep(23456);
echo "Mạnh Tool\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;93mZalo: ";
usleep(23456);
echo "0333293290\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;97mhttps://m.facebook.com/lumanhgioi.vn\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo "$trang".$do."[".$luc."●".$do."]".$trang." -".$luc." Cookie Micha Bitcoin:$vang";
$cookie=trim(fgets(STDIN));
echo "\033[1;97m~\033[;192mĐã Lưu Cookie \033[1;36mZ_MICHACOOKIE.php\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
$k = fopen("Z_MICHACOOKIE.php","a+");
fwrite($k, '<?php
$cookiefb="'.$cookie.'";
?>');
fclose($k);
}
sleep(2);
system("clear");
echo "\033[1;32m██\033[1;35m╗     \033[1;32m███\033[1;35m╗   \033[1;32m███\033[1;35m╗ \033[1;32m██████\033[1;35m╗ \n";
usleep(55777);
echo "\033[1;33m██\033[1;35m║     \033[1;33m████\033[1;35m╗ \033[1;33m████\033[1;35m║\033[1;33m██\033[1;35m╔════╝ \n";
usleep(55777);
echo "\033[1;34m██\033[1;35m║     \033[1;34m██\033[1;35m╔\033[1;34m████\033[1;35m╔\033[1;34m██\033[1;35m║\033[1;34m██\033[1;35m║  \033[1;34m███\033[1;35m╗\n";
usleep(55777);
echo "\033[1;31m██\033[1;35m║     \033[1;31m██\033[1;35m║╚\033[1;31m██\033[1;35m╔╝\033[1;31m██\033[1;35m║\033[1;31m██\033[1;35m║   \033[1;31m██\033[1;35m║\n";
usleep(55777);
echo "\033[1;36m███████\033[1;35m╗\033[1;36m██\033[1;35m║ ╚═╝ \033[1;36m██\033[1;35m║╚\033[1;36m██████\033[1;35m╔╝\n";
usleep(55777);
echo " \033[1;35m╚══════╝╚═╝     ╚═╝ ╚═════╝\n\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;94mAdmin:";
usleep(23456);
echo "Mạnh Tool\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;92mTool Micha Bitcoin Vip\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;36mYoutube: ";
usleep(23456);
echo "Mạnh Tool\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;93mZalo: ";
usleep(23456);
echo "0333293290\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;97mhttps://m.facebook.com/lumanhgioi.vn\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo "$trang".$do."[".$luc."●".$do."]".$trang." -".$luc." Đã Lưu Cookie Micha Bitcoin Vào '\033[1;93mZ_MICHACOOKIE.php\033[1;92m' \n";
echo "$trang".$do."[".$luc."●".$do."]".$trang." -".$luc." Nếu Bạn Muốn Đăng Nhập Account Mới ?\n Hãy Xoá File \033[1;93mZ_MICHACOOKIE.php \033[1;92mNhé !\n";
include('Z_MICHACOOKIE.php');
$ua='Mozilla/5.0 (Linux; Android 10; MI 8 Lite) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36';
$head[] = "Host:michabitco.in";
$head[] = "accept:application/json, text/javascript, */*; q=0.01";
$head[] = "x-requested-with:XMLHttpRequest";
$head[] = "user-agent:Mozilla/5.0 (Linux; Android 10; MI 8 Lite) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36";
$head[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";
$head[] = "origin:https://michabitco.in";
$head[] = "sec-fetch-site:same-origin";
$head[] = "sec-fetch-mode:cors";
$head[] = "sec-fetch-dest:empty";
$head[] = "referer:https://michabitco.in/";
$head[] = "accept-encoding:gzip, deflate, br";
$head[] = "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cookie:$cookie";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://michabitco.in/');
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
$tk=curl_exec($ch);
$tok=explode("var token = '", $tk);
$token=explode('<', $tok[1]);
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
while (true){
	$tken=explode("';", $token[0]);
	$data="a=getFaucet&token=".$tken[0]."&challenge=false&response=false";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
$get=curl_exec($ch);
curl_close($ch);
$json2 = json_decode($get,true);
$num = $json2["number"];
$reward = $json2["reward"];
$stt=$stt+1;
date_default_timezone_set("Asia/Ho_Chi_Minh");
					$xxx = date("H:i");
					$xxxf = date( 'H:i:s' );
	echo "\033[1;97m~\033[1;93m[\033[1;36m$xxxf\033[1;93m]\033[1;91m[\033[1;93m$stt\033[1;91m]".$do."[$luc".$succ."$do]$trang \e[1;35m❯\e[1;36m❯\e[1;31m❯$luc".$num."$do |";echo "$luc +$reward Bits$do \r";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://michabitco.in/');
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
$cu=curl_exec($ch);
$tok=explode("var token = '", $cu);
$token=explode("';
                var depositForm = '", $tok[1]);
$data='a=getFaucet&token='.$token[0].'&challenge=false&response=false';
$blan=explode('<div class="text-warning"><b>', $cu);
$balance=explode("<", $blan[1]);
echo $trang."\033[1;93m[\033[1;36m$xxxf\033[1;93m]\033[1;91m[\033[1;93m$stt\033[1;91m]".$do."[$luc".$succ."$do]$trang \e[1;35m❯\e[1;36m❯\e[1;31m❯$luc".$num."$do |";echo "$luc +$reward Bits$do |\n";
for ($time=60;$time>-1;$time--)
{ 
echo "\r\033[1;32m┗(•ˇ_ˇ•)\033[1;32m~>      \033[1;32m   \033[1;32m|\033[1;93m $time\033[1;32m | ";
usleep(99999);
echo "\r"; 
echo "\r\033[1;31m┗(•ˇ_ˇ•)  \033[1;31m~>    \033[1;31m  \033[1;31m |\033[1;93m $time\033[1;31m | ";
usleep(88888);
echo "\r"; 
echo "\r\033[1;33m┗(•ˇ_ˇ•)    \033[1;33m~>  \033[1;33m  \033[1;33m |\033[1;93m $time\033[1;33m | ";
usleep(100000);
echo "\r"; 
echo "\r\033[1;34m┗(•ˇ_ˇ•)      \033[1;34m~>\033[1;34m  \033[1;34m |\033[1;93m $time\033[1;34m | ";
usleep(123321);
echo "\r"; 
echo "\r\033[1;35m┗(•ˇ_ˇ•)       \033[1;35m~>\033[1;35m \033[1;35m |\033[1;93m $time\033[1;35m | ";
usleep(122111);
echo "\r"; 
echo "\r\033[1;36m┗(•ˇ_ˇ•)        \033[1;36m~>\033[1;36m\033[1;36m |\033[1;93m $time\033[1;36m | ";
usleep(88888);
echo "\r\033[1;36m┗(•ˇ_ˇ•)        \033[1;36m ~>\033[1;36m\033[1;36m|\033[1;93m $time\033[1;36m | ";
}
echo "$trang                                  \r";
}
