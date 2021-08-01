error_reporting(0);
$do="\033[1;31m";
$xl="\033[1;32m";
$vang="\033[1;33m";
$xn="\033[1;34m";
$res="\033[1;35m";
$nau="\033[1;36m";
$trang="\033[1;97m";
@system("clear");
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;36m =>\033[1;32m Nhập UID: \033[1;33m";
$uid=trim(fgets(STDIN));
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;36m =>\033[1;32m Nhập Api_key App: \033[1;37m";
$api=trim(fgets(STDIN));
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;36m =>\033[1;32m Nhập Delay: \033[1;36m";
$g=trim(fgets(STDIN));
@system('clear');
echo "

\n";
while(true){
 $url = "http://fastfollowers.online/get_user.php";
$data = "uid=$uid";
$mr = curl_init();
curl_setopt_array($mr, array(
    CURLOPT_PORT => "80",
    CURLOPT_URL => "$url",
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
"host:fastfollowers.online",
"apikey:$api",
"Mozilla/5.0 (Linux; Android 10; Active 3 Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/88.0.4324.181 Mobile Safari/537.36",
"content-type:application/x-www-form-urlencoded; charset=utf-8",
"32",
"gzip",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);

$cr=$json['user']['credit'];



$url = "http://fastfollowers.online/get_random_campaign_v1.php";
$data = "createdUID=$uid";
$mr = curl_init();
curl_setopt_array($mr, array(
    CURLOPT_PORT => "80",
    CURLOPT_URL => "$url",
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
"host:fastfollowers.online",
"apikey:$api",
"Mozilla/5.0 (Linux; Android 10; Active 3 Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/88.0.4324.181 Mobile Safari/537.36",
"content-type:application/x-www-form-urlencoded; charset=utf-8",
"39",
"gzip",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);

$id=$json['campaign']['0']['id'];
$cs=$json['campaign']['0']['campaignId'];
$tg=$json['campaign']['0']['videoWatchTime'];
if ($cs=="") {
  echo $do."Vui lòng lấy lại Uid và Apikey\n";
  exit();
}
echo "{$trang}Video Id: {$nau}»{$vang}$id{$nau}« {$res}| {$trang}Có: {$nau}»{$vang}$cr{$nau}« {$trang}Xu\n";
for ($i = 0; $i < $g; $i++ ) {
echo $trang, "Đang xem: [{$res}{$i}{$trang}] Giây \r";
    sleep(1);
}

$url="http://fastfollowers.online/update_credit_v1.php";
$data="campaignId=$cs&uid=$uid&credit=112";
$mr = curl_init();
curl_setopt_array($mr, array(
    CURLOPT_PORT => "80",
    CURLOPT_URL => "$url",
    CURLOPT_ENCODING => "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
"host:fastfollowers.online",
"apikey:$api",
"Mozilla/5.0 (Linux; Android 10; Active 3 Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/88.0.4324.181 Mobile Safari/537.36",
"content-type:application/x-www-form-urlencoded; charset=utf-8",
"61",
"gzip",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$t=$json['responseMessage'];


echo "{$res}<==> {$trang}$t \n";
}
