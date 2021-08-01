error_reporting(0);
//màu mè
$res="\033[0m";
$black="\033[1;30m";
$red="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$blue="\033[1;34m";
$purple="\033[1;35m";
$lightblue="\033[1;36m";
$white="\033[1;37m";
$trang="\033[1;37m";
$luc="\033[1;32m";
$do="\033[1;31m";
//tiêu đề
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
\033[1;31m[".$luc."●".$do."] ".$trang."=> \033[1;97mMoMo: 0328485126
\033[1;33m─────────────────────────────────────────────────────────────────\n";
@system("clear");
echo $banner;
echo $logo;
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Token Traodoisub: $vang";

  $tokenacc = trim(fgets(STDIN));

  $k = fopen('TokenTDS.txt','a+');
  
  fwrite($k,$tokenacc);


echo "\033[1;33m────────────────────────────────────────────────────────────\n";
function GET($host,$tsm)
{
$url = $host;
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_PORT => "443",
 CURLOPT_URL => "$url",
 CURLOPT_ENCODING => "",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_SSL_VERIFYPEER => false,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_CUSTOMREQUEST => "GET",
 CURLOPT_HTTPHEADER => $tsm));
 
$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
return $json;
}
 
function truycap($host,$tsm,$data) {
$url = $host;
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_PORT => "443",
 CURLOPT_URL => "$url",
 CURLOPT_ENCODING => "",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_SSL_VERIFYPEER => false,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => $data,
 CURLOPT_HTTPHEADER => $tsm));
 
$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
return $json;
}
 
while(true){
@system("clear");
echo $banner;
echo $logo;
echo "👤 \033[1;32mNhập Tài khoản :$lightblue ";
$tk = trim(fgets(STDIN));
echo "🔒 \033[1;32mNhập Mật Khẩu :$lightblue ";
$mk = trim(fgets(STDIN));
echo "🆔 \033[1;32mNhập Cookie :$yellow ";
$cookie = trim(fgets(STDIN));
echo "🕛 \033[1;32mDelay Job :$yellow ";
$delay = trim(fgets(STDIN));
$user_agen = "Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36";
 
$tsm = array(
"Host: tanglikefree.com",
"X-Requested-With: XMLHttpRequest",
"User-Agent:$user_agen",
"Content-Type: application/json;charset=UTF-8",
);
 
$host_info = "https://tanglikefree.com/api/auth/login";
$data_info = '{"username":"'.$tk.'","password":"'.$mk.'","disable":true}';
$tc_info  = truycap($host_info,$tsm,$data_info);
 
$dn    = $tc_info['messages'];
$token = $tc_info['data']['access_token'];
 
if($dn == "Đăng Nhập Thành Công"){
 
echo "\033[1;37m~ \033[1;32mĐăng Nhập Thành Công\n";
sleep(2);
@system("clear");
////////////////////////
$tsm1 = array(
"Host: tanglikefree.com",
"X-Requested-With: XMLHttpRequest",
"User-Agent:$user_agen",
"Authorization: Bearer $token"
);
 
$tsm2 = array(
"Host: tanglikefree.com",
"X-Requested-With: XMLHttpRequest",
"User-Agent:$user_agen",
"Authorization: Bearer $token",
"Referer:https://tanglikefree.com/makemoney",
);
 
$tsm3 = array(
"Host: tanglikefree.com",
"X-Requested-With: XMLHttpRequest",
"Authorization: Bearer $token",
"User-Agent:$user_agen",
"Content-Type: application/json;charset=UTF-8",
"Referer: https://tanglikefree.com/makemoney",
);
 
/////////////////
$host_tk = "https://tanglikefree.com/api/auth/user";
$tc_tk   = get($host_tk,$tsm1);
$id = $tc_tk["data"]["id"];
$ten  = $tc_tk["data"]["username"];
$coin = $tc_tk["data"]["VND"];
echo $banner;
echo $logo;
echo "\033[1;32mID TLF : \033[1;33m".$id."\033[1;32m | Tên FB : \033[1;35m".$ten."\033[1;32m | Số Tiền : \033[1;35m".$coin."\033[1;32m |\n";
echo "\033[1;33m─────────────────────────────────────────────────────────────────\n";
break;
}else{echo "\033[1;37m~\033[1;31m Đăng Nhập Thất Bại\n";}}
 
/////////// lay job
while(true){
 
while(true){
 
$host_job = "https://tanglikefree.com/api/auth/Post/getpost";
$tc_job   = get($host_job,$tsm2);
 
$id = $tc_job['0']['idpost'];
 
if($id >= "0"){
 
/////////// lay uid
$host_re = "https://tanglikefree.com/api/auth/creat_request";
$tc_re   = get($host_re,$tsm2);
 
$uid = $tc_re['request_id'];
 
break;
 
}else{echo "\r\033[1;37m~\033[1;31m Hết Nhiệm Vụ Rồi, Đang Tìm Nhiệm Vụ Mới\n";}}
 
////////////like
$url = "https://mbasic.facebook.com/".$id;
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
 
sleep(1);
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
 
////////////// nhan tien
$host_nhan = "https://tanglikefree.com/api/auth/Post/submitpost";
$data_nhan = '{"idpost":"'.$id.'","request_id":"'.$uid.'"}';
$tc_nhan   = truycap($host_nhan,$tsm3,$data_nhan);
 
$balace = $tc_nhan['messages'];
 
if($balace == "Bạn Đã Nhận 41Đ Vào Tài Khoản"){
 
$host_cong = "https://tanglikefree.com/api/auth/user";
$tc_cong  = get($host_cong,$tsm1);
 
$xu = $tc_cong['data']['VND'];
echo $green."【\033[1;37m".$yellow.date("H:i:s")."\033[1;32m】 \033[1;31m=> \033[1;32m | \033[1;33mLoại Job      :\033[1;31m Like Post\n";
 echo $green."【\033[1;37m".$yellow.date("H:i:s")."\033[1;32m】 \033[1;37m=> \033[1;32m | \033[1;33mID Bài Viết   : \033[1;37m".$id." \n";
echo $green."【\033[1;37m".$yellow.date("H:i:s")."\033[1;32m】 \033[1;37m=> \033[1;32m | \033[1;33mXu Hiện Tại   : \033[1;32m".$xu." Đ\n";
echo $green."【\033[1;37m".$yellow.date("H:i:s")."\033[1;32m】 \033[1;37m=> \033[1;32m | \033[1;33mTLF           : \033[1;35mBạn Đã Nhận Được 41Đ\n";
echo $green."【\033[1;37m".$yellow.date("H:i:s")."\033[1;32m】 \033[1;31m=> \033[1;32m | \033[1;33mLink Bài Viết :\033[1;30m http//m.facebook.com/$id\n";
sleep(1);
  echo "\033[1;30m- \033[1;31m- \033[1;32m- \033[1;33m- \033[1;34m- \033[1;35m- \033[1;36m- \033[1;37m- \033[1;30m- \033[1;31m- \033[1;32m- \033[1;33m- \033[1;34m- \033[1;35m- \033[1;36m- \033[1;37m- \033[1;30m- \033[1;31m- \033[1;32m- \033[1;33m- \033[1;34m- \033[1;35m- \033[1;36m- \033[1;37m- \033[1;30m- \033[1;31m- \033[1;32m- \033[1;33m- \033[1;34m- \033[1;35m- \033[1;36m- \033[1;37m- \033[1;30m- \033[1;31m- \033[1;32m- \033[1;33m- \033[1;34m- \033[1;35m-\n";
}else{echo "\r\033[1;33m[\033[1;31mError\033[1;33m] \033[1;37m=> \033[1;31mLỗi Khi Làm Job Like Này\n\r\033[1;33m[\033[1;31mError\033[1;33m] \033[1;37m=> \033[1;33mCó Thể Là Do Hết Nhiệm Vụ\n";}
if ($delay < 1) {
} elseif ( $delay > 1) {
for($i = $delay;$i>-1;$i--) {
for ( $m = 30; $m < 38; $m++ ) {
echo "\033[1;37m   ↹\033[1;32m  \033[1;".$m."mVui Lòng Đợi \033[1;36m".$i."\033[1;32ms\033[0m                     \r";
usleep(130000);}}
}
