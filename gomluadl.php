error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$today = date("d-m-Y");
$catkhung="\033[0m";
$khungdo="\033[1;41m";
$khungden="\033[1;40m";
$khungvang="\033[1;43m";
$khungluc="\033[1;42m";
$khungduong="\033[1;44m";
$khunghong="\033[1;45m";
$khungtrang="\033[1;47m";
$khungxam="\033[1;48m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$xduong2="\033[1;96m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$thoigian = date('H:i:s');
$xam="\033[1;30m"; 
$do="\033[1;31m";
$xanhla="\033[1;32m";
$vang="\033[1;33m";
$xanhduong="\033[1;34m";
$hong="\033[1;35m"; 
$ro="\033[1;36m"; 
$trang="\033[1;37m";
@system('clear');
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Số Nick Muốn Chạy: ";
$sonhap = trim(fgets(STDIN));
$sonhapgoc = $sonhap;
$sonhap++;
$so = 1;
while($so < $sonhap){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ToKen_App GomLua Thứ\033[1;36m $so\033[1;32m: \033[1;30m";
$token[$so] = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Cookie Facebook Thứ\033[1;36m $so\033[1;32m: \033[1;37m";
$cookie[$so] = trim(fgets(STDIN));
$so++;
eval($gach);
}
echo $vang."==========================================================\n";
$job = 0;
eval($gach);
$so = 1;
$sonhap--;
$cookie = $cookie[$so];
$token = $token[$so];
while(true){
if ($so == $sonhap){
  $so = 1;
}
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>\033[1;32m Nhập Delay Nhiệm Vụ : \033[1;36m";
$r = trim(fgets(STDIN));
$useragent = "Mozilla/5.0 (Linux; Android 10; Active 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.105 Mobile Safari/537.36";
system('clear');
eval(file_get_contents("https://keyvip.tk/logo.php"));
echo $logo;
///data
$token = "$token";
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => "https://gomlua.com/user/info?os=web",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
"Host:gomlua.com",
"app_token:$token",
"User-Agent:Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36",
'If-None-Match:W/"14ed-9p35RO//np1myEXZgpO7J++Yxfs"',
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2, true);
//print_r($json);
$dem++;
$name = $json['data']['username'];
$sodu = $json['data']['current_paddy'];
$idfb = $json['data']['facebook_id'];
$whypay = $json['data']['whypay_code'];
sleep(2);
echo "\033[1;36m| \033[1;32mTên Facebook: \033[1;35m".$name." \033[1;36m| \033[1;32mSố Lúa:\033[1;33m ".$sodu." \033[1;36m|\033[1;32m WhyPay: \033[1;31m".$whypay."\033[1;36m |\n";
sleep(1);
echo "\033[1;33m─────────────────────────────────────────────────────────────────\n";
while(true){
//lấy job
$urljob = "http://gomlua.com:1337/cpi/listCampaignFacebook?os=android&type=like_post_fanpage";
$curljob = curl_init();
curl_setopt_array($curljob, array(
//  CURLOPT_PORT => "1337",
  CURLOPT_URL => "$urljob",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
'If-None-Match: W/"e8e-XfCVF7JyRjnhGExuviLm+jNHot8"',
"app_token: $token",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.0.2; SM-A300H Build/LRX22G)",
"Connection: Keep-Alive",
"Accept-Encoding: gzip"
)));
$curljob1 = curl_exec($curljob); curl_close($curljob);
$json = json_decode($curljob1,true);
$uid = $json["data"]["list"]["0"]["campaign_id"];
$type = $json["data"]["list"]["0"]["react_type"]; 
$link_id = $json["data"]["list"]["0"]["link_id"];
$nv = $json["data"]["list"]["0"]["remain"];
$amount = $json["data"]["list"]["0"]["amount"];
$tong = $json["data"]["current_paddy"];
$link_title = $json["data"]["list"]["0"]["link_title"];
if ($type == false){
 if ($sonhapgoc == 1){
   $so = 1;
 } else {
  $so++;
 }
echo "\033[1;31m Hết Nhiệm Vụ, Đang Tìm Nhiệm Vụ Mới\r"; 
if ($sonhapgoc == 1){ } else {
echo "\033[1;32m Đang Chuyển Đến Nick Số $so          \r"; 
sleep(1);
}
} else {

if($status == "1"){
}
//checkjob
$urlcheckjob = "http://gomlua.com:1337/cpi/checkLinkLike?link_id=".$link_id;
$curlcheckjob = curl_init();
curl_setopt_array($curlcheckjob, array(
//  CURLOPT_PORT => "1337",
  CURLOPT_URL => "$urlcheckjob",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
"app_token: $token",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.0.2; SM-A300H Build/LRX22G)",
"Connection: Keep-Alive",
"Accept-Encoding: gzip"
)));
$curlcheckjob1 = curl_exec($curlcheckjob); curl_close($curlcheckjob);
$json1 = json_decode($curlcheckjob1,true);
$like_count = $json1["data"]["like_count"];
//echo "$green.[số ".$blud.$type.$green." còn lại :".$reg.$like_count."]";
//like
if($type == "LIKE"){
$url = "https://mbasic.facebook.com/".$uid;
$head = array (
"Host: mbasic.facebook.com",
"upgrade-insecure-requests: 1",
"save-data: on",
"user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*"."/"."*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"sec-fetch-site: same-origin",
"sec-fetch-mode: navigate",
"sec-fetch-user: ?1",
"sec-fetch-dest: document",
"accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
"cookie: $cookie",
);
$ch = curl_init();
curl_setopt_array ($ch, array (
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTPHEADER => $head,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE));
$data = curl_exec($ch);
if (strpos($data,"xs=deleted") == true){
echo "\033[1;31mCookie Số\033[1;36m $so \033[1;31m Đã Bị Die\n";
$die++;
if ($die == $sonhap){
echo $red."Tất Cả Cookie Đã Bị Die\n";
exit;
}
} else {
$one = explode("location: ",$data);
$two = explode("rdr",$one[1]);
$url = $two[0]."rdr";
curl_setopt_array ($ch, array (
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTPHEADER => $head,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE));
$data = curl_exec($ch);
$one = explode("/a/like.php?",$data);
$two = explode('"',$one[1]);
$url = "https://mbasic.facebook.com/a/like.php?".htmlspecialchars_decode($two[0]);
curl_setopt_array ($ch, array (
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTPHEADER => $head,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE));
$data = curl_exec($ch);
}
}
//phần love
if($type == "LOVE" or $type == "WOW"){
if($type == "LOVE"){
$cx = 2;
}
if($type == "WOW"){
$cx = 5;
}
$head = array(
"Host: mbasic.facebook.com",
"upgrade-insecure-requests: 1",
"save-data: on",
"user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*"."/"."*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"sec-fetch-site: same-origin",
"sec-fetch-mode: navigate",
"sec-fetch-user: ?1",
"sec-fetch-dest: document",
"accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
"cookie: $cookie",
);
$url = "https://mbasic.facebook.com/".$uid;
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE,
CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr); curl_close($mr);
$link2 = explode("location: ", $mr2);
$link1 =  explode("rdr", $link2[1]);
$link = htmlspecialchars_decode($link1[0]);
$url = $link."rdr";
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE,
CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr); curl_close($mr);
$a2 = explode("/reactions/picker/", $mr2);
$a1 = explode('"', $a2[1]);
$a = htmlspecialchars_decode($a1[0]);
$url = "https://mbasic.facebook.com/reactions/picker/".$a;
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE,
CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr); curl_close($mr);
$love2 = explode("/ufi/reaction/", $mr2);
$love1 = explode('"', $love2[$cx]);
$love = htmlspecialchars_decode($love1[0]);
$url = "https://mbasic.facebook.com/ufi/reaction/".$love;
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE,
CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr); curl_close($mr);
}
sleep(5);
$urlsuccess = "http://gomlua.com:1337/cpi/likeSuccess?link_id=".$link_id."&like_old=".$like_count;
$curlsuccess = curl_init();
curl_setopt_array($curlsuccess, array(
//  CURLOPT_PORT => "1337",
  CURLOPT_URL => "$urlsuccess",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
"app_token: $token",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.0.2; SM-A300H Build/LRX22G)",
"Connection: Keep-Alive",
"Accept-Encoding: gzip"
)));
$curlsuccess1 = curl_exec($curlsuccess); curl_close($curlsuccess);
$json2 = json_decode($curlsuccess1,true);
$message = $json2["message"];
if($message == 'Quá thời gian xử lý, xin vui lòng thử "Nhận lúa" lại!'){
echo $message;
}else{
echo $xanhla."\033[1;91m[●] \033[1;92m【".$trang.$thoigian.$xanhla."】Số Thứ Tự :  ".$vang."".$nv."\n";
echo $xanhla."\033[1;91m[●] \033[1;92m【".$trang.$thoigian.$xanhla."】Nhiệm vụ  :  ".$vang.$type.$do."\n";
echo $xanhla."\033[1;91m[●] \033[1;92m【".$trang.$thoigian.$xanhla."】ID Job    :  ".$do."".$vang.$link_id.$do."\n";
echo $xanhla."\033[1;91m[●] \033[1;92m【".$trang.$thoigian.$xanhla."】Cộng Lúa  :  \033[1;33m".$amount."\033[1;32m Lúa\n";
echo $xanhla."\033[1;91m[●] \033[1;92m【".$trang.$thoigian.$xanhla."】Số Dư     :  ".$do."".$vang.$tong.$do."\n\n";
for($i = $r;$i>-1;$i--){
echo $green."\033[1;32mVui Lòng Đợi\033[1;33m $i \033[1;32mGiây";
sleep(1);
echo "\r";}
}
}
}
}
