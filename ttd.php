
error_reporting(0);
session_start();
$vienden="\033[100m";
$viendo="\033[101m";
$vienluc="\033[102m";
$vienvang="\033[103m";
$vienxduong="\033[104m";
$vienhong="\033[105m";
$vienxnhac="\033[106m";
$vientrang="\033[107m";
$maufullxduong= "\e[1;47;34m";
$maufulldo= "\e[1;47;31m";
$maufullluc= "\e[1;47;32m";
$maufullxnhac= "\e[1;47;36m";
$maufullden= "\e[1;47;30m";
$maufullvang= "\e[1;47;33m";
$maufullhong= "\e[1;47;33m";
$denthui="\033[0;30m";
$res="\033[0m";
$do="\033[0;31m";
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
$ress="\033[0;32m";
$res="\033[0;33m";
$green="\033[0;37m";
$yellow="\033[0;33m";
$white= "\033[0;33m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$banner="\r\n";
$ngay=date("d/m");
$day=date("d/m");
$BBlack="\033[1;30m";      
$BRed="\033[1;31m";
$BGreen="\033[1;32m";
$BYellow="\033[1;33m";
$BBlue="\033[1;34m";
$BPurple="\033[1;35m";
$BCyan="\033[1;36m";
$BWhite="\033[1;37m";
$Blue="\033[0;34m";
$res="\033[0m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
{
system('clear');
echo "                 \033[1;47;31mTool Auto Tương Tác By Nam Tool\033[0m\n";
for($i=0; $i<=15; $i++){
echo "\033[1;31m─ ";
usleep(20000);
echo "\033[1;37m─ ";
usleep(20000);
}
echo "\n";
while(true){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Cookie Facebook: $vang";
$cookie=trim(fgets(STDIN));
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-A750GN) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.181 Mobile Safari/537.36";
$access = cookie($cookie,$useragent);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token=explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};	
break;
}else{ 
echo $do." Cookie Die Hoặc Văng ! Hãy Kiểm Tra Lại\n";
}
}
while(true){ 
 @system('clear');
unset($so); 
unset($_SESSION['giaay']);
unset($nhap);
 unset($nguoi); 
unset($so1); 
unset($dem);
$nhap = '1';
while($nhap == '1'){
$typ =[];
system('clear');
for($i=0; $i<=15; $i++){
echo "\033[1;31m─ ";
usleep(20000);
echo "\033[1;37m─ ";
usleep(20000);
}
echo "\n";
$time=date('h:i:s');
echo "\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Nhập\033[1;33m 1\033[1;32m Thả Thương Thương\n";
echo "\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Nhập\033[1;33m 2\033[1;32m Thả Like\n";
echo "\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Nhập\033[1;33m 3\033[1;32m Thả Haha\n";
echo "\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Nhập\033[1;33m 4\033[1;32m Thả Wow\n";
echo "\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Nhập\033[1;33m 5\033[1;32m Thả Buồn\n";
echo "\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Nhập\033[1;33m 6\033[1;32m Thả Tym\n";
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;32m Nhập Chế Độ: \033[1;36m";
$nhap = trim(fgets(STDIN));
if (strlen(strstr($nhap ,'1')) > 0){array_push($typ,'Thương Thương');}
if (strlen(strstr($nhap ,'2')) > 0){array_push($typ, 'Like');}
if (strlen(strstr($nhap ,'3')) > 0){array_push($typ,'Haha');}
if (strlen(strstr($nhap ,'4')) > 0){array_push($typ, 'Wow');}
if (strlen(strstr($nhap ,'5')) > 0){array_push($typ, 'Buồn');}
if (strlen(strstr($nhap ,'6')) > 0){array_push($typ, 'Tim');}
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Delay Nhiệm Vụ: $vang";
$delaysub=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Bao Nhiêu Tương Tác Dạo Rồi Nghỉ Ngơi: $vang";
$_SESSION['block']=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Sau ".$vang.$_SESSION['block'].$luc." Tương Tác Xong Thì Nghỉ Bao Nhiêu Giây: $vang";
$_SESSION['j']=trim(fgets(STDIN));
$cmt = 'n';
$dem = '1';
for($i=0; $i<=15; $i++){
echo "\033[1;31m─ ";
usleep(20000);
echo "\033[1;37m─ ";
usleep(20000);
}
echo "\n";
echo $vang."Đang Dùng FB: ".$luc.$tenfb." ".$vang."\033[1;33mTương Tác".$res."\n";
for($i=0; $i<=15; $i++){
echo "\033[1;31m─ ";
usleep(20000);
echo "\033[1;37m─ ";
usleep(20000);
}
echo "\n";
$list = gethome($cookie,$useragent);
$so = 1;$ran = rand(10,20);
while(true){$i=1; $i++;
  $link2 = explode('">Bày tỏ cảm xúc',explode('/reactions/picker/?',$list)[1])[0];
  $url = 'https://mbasic.facebook.com/reactions/picker/?'.str_replace('&amp;','&',$link2);
  sleep(4); 

  $type = $typ[array_rand($typ,1)];
  $mess = camxuctuongtac($cookie,$url,$useragent,$type);
  $id = explode('&origin_uri',explode('?ft_id=',$url)[1])[0];
  if(empty($id)){
    $access = cookie($cookie,$useragent);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
  sleep(1);
}else{ echo $luc." Cookie Die !!! Nhập Lại: $vang";
  $cookie= trim(fgets(STDIN));
}
  }
  $demstt=$demstt+1;
  echo $denthui."".$denthui.$so++.$so++.$denthui."".$res."\r";$o++;$c++;$ct++;
  if ($ct == $dem){
  $g = cmttoken($access_token,$id,$msg,$useragent);
  $dem=$dem+1;
  $idG = substr("$id",0,15);
  echo $vang."";
echo $vang."🌸[".$vang.$demstt.$vang."]".$do." ● ".$xnhac.date("H:i")."".$do." ● ".$vang."$type".$do." ● ".$trang."".$idG." ".$vang."Thành Công\n";
}
for ($mg = $delaysub; $mg > -1; $mg--) {
for($a = 30 ; $a < 38;$a++){
echo "\r                                              \r";
echo " \033[1;37m↹ \033[1;".$a."mVui Lòng Chờ  | $mg |\r";
usleep(120000);
echo "\r                                              \r";
}
}
$max=$max+1;
if ($max==$_SESSION['block']){
for($x = 0;$x<($_SESSION['j']+1);$x++){
echo $vang."Đang Kháng Block, Chờ ".($_SESSION['j']-$x)." Giây\r";
sleep(1);
echo $xduong."                                                       \r";
}
$max=0;
echo "\r";}
  if($o == 1){
  $linktap = explode('" class="',explode('/stories.php?',$list)[1])[0];
  $chuyentap = 'https://mbasic.facebook.com/stories.php?'.str_replace('&amp;','&',$linktap);
    $list = gettiephome($cookie,$chuyentap,$useragent);
    $i = 0; $o = 0;
  }
  if ($c == $ran){

    $id = thembanbe($cookie,$url,$useragent);
$idG = substr("$id",0,15);
echo $vang."🌸[".$vang.$demstt.$vang."]".$do." ● ".$xnhac.date("H:i")."".$do." ● ".$vang."THÊM".$do." ● ".$luc."".$idG."".$do." ● ".$vang."Thành Công\n";

    }
}
}
}
}
function getbaiviet($cookie,$access_token,$useragent,$idfb){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idfb.'/posts?limit=1000&fields=id,name&access_token='.$access_token);
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
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function demlike($cookie,$access_token,$idpost,$useragent){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v1.0/'.$idpost.'/likes?access_token='.$access_token.'&pretty=1&limit=5000');
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
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function getbanbe($access_token,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://graph.facebook.com/me/friends/?access_token='.$access_token);
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
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return json_decode(curl_exec($ch));
curl_close($ch);
}
function xoabanbe($cookie,$id,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/profile.php?id='.$id);
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
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
$list = curl_exec($ch);
$data1 = explode('" autocomplete=',explode('name="fb_dtsg" value="',$list)[1])[0];
$data2= explode('" autocomplete=',explode('name="jazoest" value="',$list)[1])[0];
$data = http_build_query(array('fb_dtsg'=>$data1,'jazoest'=>$data2,'friend_id'=>$id ,'unref'=>'profile_gear','confirm'=>'Xác nhận'));
$head[] = 'content-length: '.strlen($data);
$head[] = 'refer: https://mbasic.facebook.com/removefriend.php?friend_id='.$id.'&unref=profile_gear&refid=17';
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/a/removefriend.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$h = curl_exec($ch);
curl_close($ch);
}
function gettiephome($cookie,$linktiep,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$linktiep);
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
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return  curl_exec($ch);
curl_close($ch);
}
function camxuctuongtac($cookie,$link,$useragent,$type){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
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
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$m = curl_exec($ch);
if ($type == 'Like'){ $link2 = explode('" style="display:block"',explode('&amp;reaction_type=1',$m)[1])[0];
  $link4 = '&amp;reaction_type=1'.$link2;
}
if ($type == 'Thương Thương'){ $link2 = explode('" style="display:block"',explode('&amp;reaction_type=16',$m)[1])[0];
  $link4 = '&amp;reaction_type=16'.$link2;
}
if ($type == 'Tim'){ $link2 = explode('" style="display:block"',explode('&amp;reaction_type=2',$m)[1])[0];
  $link4 = '&amp;reaction_type=2'.$link2;
}
if ($type == 'Wow' ){$link2 = explode('" style="display:block"',explode('&amp;reaction_type=3',$m)[1])[0];
  $link4 = '&amp;reaction_type=3'.$link2;
}
if ($type == 'Haha'){$link2 = explode('" style="display:block"',explode('&amp;reaction_type=4',$m)[1])[0];
  $link4 = '&amp;reaction_type=4'.$link2;
}
if ($type == 'Buồn'){$link2 = explode('" style="display:block"',explode('&amp;reaction_type=7',$m)[1])[0];
  $link4 = '&amp;reaction_type=7'.$link2;
}
if ($type == 'Tức Giận'){$link2= explode('" style="display:block"',explode('&amp;reaction_type=8')[1])[0];
  $link4 = '&amp;reaction_type=8'.$link2;
}
$link3 = explode('&amp;reaction_type=',explode('<a href="/ufi/reaction/?',$m)[1])[0];
$link5 = str_replace('&amp;', '&', $link3.$link4);
curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com/ufi/reaction/?".$link5);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $n =	curl_exec($ch);
 curl_close($ch);
 return 
explode('</title><meta',explode('head><title>',$n)[1])[0];}
function gethome($cookie,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/home.php');
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
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return  curl_exec($ch);
curl_close($ch);
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
function cmttoken($access_token,$id,$msg,$useragent){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
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
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('message' => $msg,'access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function thembanbe($cookie,$url,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/friends/center/mbasic/?fb_ref=tn&sr=1&ref_component=mbasic_home_header&ref_page=MFriendsCenterMBasicController');
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
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
$list = curl_exec($ch);
$link = explode('" class="',explode('/a/mobile/friends/add_friend.php?',$list)[1])[0];
$link2 = 'https://mbasic.facebook.com/a/mobile/friends/add_friend.php?'.str_replace('&amp;','&',$link);
curl_setopt($ch, CURLOPT_URL, $link2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
curl_close($ch);
return explode('&hf',explode('id=',$link2)[1])[0];
}
