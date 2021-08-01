error_reporting(1);
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
@system('clear');
echo chay(13);
echo "\033[1;43;32m         Tool Get mã 2Fa By Nam Tool\n";
echo chay(13);
echo $BGreen."Nhập Mã Chữ 2 FA : ";
$fa =trim(fgets(STDIN));
// 2 fa
$url = "http://2fa.live/tok/".$fa."";
 
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_PORT => "80",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
"Host:2fa.live",
"User-Agent:Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/89.0.282 Mobile Chrome/83.0.4103.282 Mobile Safari/537.36",
"X-Requested-With:XMLHttpRequest",
"Referer:http://2fa.live/",
)));
$mr2 = curl_exec($mr);
curl_close($mr);
$json = json_decode($mr2,true);
$ma = $json['token'];
	echo $BGreen."Mã 2 FA Của Bạn Là : $BYellow $ma \n";
function chay($so){
  for($v=0;$v<= $so;$v++){
    echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);
} echo "\n";
}
