error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$res="\033[0m";
$red="\033[0;31m";
$white= "\033[0;37m";
$whiteb= "\033[0;37m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[1;34m";
$redb="\033[1;31m";
$green="\033[0;32m";
$yellow="\033[1;33m";
$cam="\033[0;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";
$blue="\033[0;34m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$cyan= "\e[1;36m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$vang="\033[1;93m";
$do="\033[1;91m";
$luc="\033[1;92m";
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
//nhập dữ liệu
@system('clear');
echo $banner;
echo $logo;
$useragent='http://viptool.cf/user.php';
echo "$res ~".$red."[".$green."✓".$red."]".$white." => ".$cyan."Nhập Số Nick Cần Làm:\033[1;37m ";
$sluong=trim(fgets(STDIN)); 
if ($sluong<1){exit($red."Nhập Sai Định Dạng\n");} 
$mangcookie =[];
 for($l=1;$l<=$sluong;$l++){ 
echo "$res ~".$red."[".$green."✓".$red."]".$white." => ".$luc."Nhập Cookie Thứ: \033[1;33m".$l.": \e[1;37m"; 
array_push($mangcookie,trim(fgets(STDIN)));}
@system("clear");

echo "$res ~".$red."[".$green."✓".$red."]".$white." => ".$cyan."Delay Nhiệm Vụ:\033[1;33m ";
$timedelay=trim(fgets(STDIN));
echo "$res ~".$red."[".$green."✓".$red."]".$white." => ".$cyan."Nhập ID Bài Viết Cần Share:\033[1;95m ";
$idshare=trim(fgets(STDIN));
if ($sluong < 1) {
} elseif ($sluong > 1) {
echo "$res ~".$red."[".$green."✓".$red."]".$white." => ".$cyan."Đổi Nick Sau Bao Nhiêu Nhiệm Vụ:\033[1;95m ";
$_SESSION['doinick'] = trim(fgets(STDIN));
}
echo "\n";
usleep(300000);
while (true){
for($xz=0;$xz<count($mangcookie);$xz++){
$cookie = $mangcookie[$xz];
if(count($mangcookie)==0){echo $do."Cookie đã die hết rồi, vui lòng lấy lại cookie mới\n";die();}
#get_token
$ch=curl_init();curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
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
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_ENCODING, '');curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
	$id = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};
	$name = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};
}else{
    echo "\033[1;91mCookie die!! Đang Chuyển Cookie Khác\n";
	$die=1;
	array_splice($mangcookie,$xz,1);
}
}else{
    echo "Cookie die!! Đang Chuyển Cookie Khác\n";
	$die=1;
	array_splice($mangcookie,$xz,1);
}
echo "\033[1;32Đang Dùng Facebook:\033[1;33m ".$name." \033[1;97mID:\033[1;95m".$id."\033[1;32m Spam\n";
$doi=0;
while(true){
if ($die>0){
	$die=0;
	break;
}
share($access_token,$idshare);
$timme=date('H:i');
$te=json_decode(file_get_contents('https://graph.facebook.com/?ids='.$idshare.'&fields=id,name&access_token='.$access_token), true);
$ten=$te[$id]["name"];
$stt=$stt+1;
echo "                                                     \r";
$c = "\033[1;33m[\033[1;36m".$stt."\033[1;33m]\033[1;37m ● \033[1;91m".$timme."\033[1;37m ● \033[1;33mShare\033[1;37m ● \033[1;32mThành Công\033[1;37m ● \033[1;35m".$idshare."\n";
for ($i = 0; $i < strlen($c); $i++) {
    echo $c[$i];
    usleep(1500);
}
if ($timedelay < 1) {
} elseif ( $timedelay > 1) {
for ($x=$timedelay;$x>-1;$x--){
 echo $green."\033[1;32mVui Lòng Đợi\033[1;33m $x \033[1;32mGiây";
sleep(1);
echo "\r";
}
}
$doi=$doi+1;
if ($_SESSION['doinick']==$doi){
	$tt=likebb($cookie);
	echo"\033[1;37m=> \033[1;92mĐã Like 1 Bài Viết Của Bạn Bè Để Chống Block\n";
	break;
	$doi=0;
}
}
}
}
function share($access_token,$idshare){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/me/feed?method=POST&link=https://www.facebook.com/'.$idshare.'&privacy={%27value%27:%20%27EVERYONE%27}&access_token='.$access_token);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] = 'Authority: graph.facebook.com';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Sec-Fetch-Site: none';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Sec-Fetch-Dest: document';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
}
function likebb($cookie){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/home.php');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$n = curl_exec($ch);
$lin = explode('">Thích</a><span',explode('a/like.php?', $n)[1])[0];
$link = str_replace('&amp;', '&', $lin);

curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com/a/like.php?".$link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$n =	curl_exec($ch);
return explode('</title><meta',explode('head><title>',$n)[1])[0];

}
