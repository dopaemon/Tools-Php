$dem=0;
$reset="\033[0m";
$black="\033[30m";
$red="\033[31m";
$green="\033[32m";
$orange="\033[33m";
$blue="\033[34m";
$purple="\033[35m";
$cyan="\033[36m";
$lightgrey="\033[37m";
$darkgrey="\033[90m";
$lightred="\033[91m";
$lightgreen="\033[92m";
$yellow=lhail.php\033[93m";
$lightblue="\033[94m";
$pink="\033[95m";
$lightcyan="\033[96m";
$black2="\033[40m";
$red2="\033[41m";
$green2="\033[42m";
$orange2="\033[43m";
$blue2="\033[44m";
$purple2="\033[45m";
$cyan2="\033[46m";
$luc="\033[1;32m";
$trang="\033[1;37m";
$do="\033[1;31m";
$lightgrey2="\033[47m";
error_reporting(0);
system("clear");
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
system('clear');
echo $banner;
echo $logo;
if(file_exists("l2l.php")!=true){
$luong=readline("• Nhập Số Luồng:");
$file=fopen("l2l.php","w");
fwrite($file,"<?php\n");
for($i=0;$i<$luong;$i++){
$ck=readline("• Nhập Cookie Acc $i:");
fwrite($file,"$"."cookie[$i]='$ck';\n");}
fwrite($file,"/• Số Luồng\n");
fwrite($file,"$"."luong='$luong';\n");
fclose($file);
}
function POST($url_nhan,$data,$head_ac){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL => $url_nhan,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $head_ac,));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
return $json;
}
function P($url_nhan,$data,$head_ac){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL => $url_nhan,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $head_ac,));
$mr2 = curl_exec($mr); curl_close($mr);
return $mr2;
}
function GET($url,$head){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
return $json;}
function G($url,$head){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr); curl_close($mr);
return $mr2;
}
system("clear");
echo $banner;
echo $logo;
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;32m Nhập \033[1;31m[\033[1;33m1\033[1;31m] \033[1;37m=> \033[1;32mAuto Like\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;32m Nhập \033[1;31m[\033[1;33m2\033[1;31m] \033[1;37m=> \033[1;32mAuto Page\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;32m Nhập \033[1;31m[\033[1;33m3\033[1;31m] \033[1;37m=> \033[1;32mAuto JoinGroup\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;32m Nhập \033[1;31m[\033[1;33m4\033[1;31m] \033[1;37m=> \033[1;32mAuto Follow\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;32m Nhập \033[1;31m[\033[1;33m5\033[1;31m] \033[1;37m=> \033[1;32mRandom LikePost LikePage\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;32m Nhập \033[1;31m[\033[1;33m6\033[1;31m] \033[1;37m=> \033[1;32mRandom LikePage JoinGroup\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;32m Nhập \033[1;31m[\033[1;33m7\033[1;31m] \033[1;37m=> \033[1;32mRabdom JoinGroup Follow\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;32m Nhập \033[1;31m[\033[1;33m1\033[1;31m] \033[1;37m=> \033[1;32mFull Nhiệm vụ\n";
$chọnnv=readline($lightred."Nhập Chế Độ:");
if ($chọnnv=="1"){
$nv="post";}
if ($chọnnv=="2"){
$nv="page";}
if ($chọnnv=="3"){
$nv="group";}
if ($chọnnv=="4"){
$nv="follow_user";}
if ($chọnnv=="5"){
$nv="post,page";}
if ($chọnnv=="6"){
$nv="page,group";}
if ($chọnnv=="7"){
$nv="group,follow_user";}
if ($chọnnv=="8"){
$nv="post,page,group,follow_user";}
echo "\033[1;33m─────────────────────────────────────────────────────────────────\n";
echo $fe."Nhập Time Delay: $white";
	$_SESSION['j']=trim(fgets(STDIN));
	if($_SESSION['j'] < 10)
	{exit($red."Tối Thiểu 10 giây\n");}
include("l2l.php");
while (true){
//$time=rand($min,$max);
date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
$today = date("d/m/Y");
$thoigian = date( 'H:i' );
for($i=0;$i<$luong;$i++){
$x=0;
while($x<$đổi){
$x++;
$url='https://m.facebook.com/v9.0/dialog/oauth?app_id=819999065506900&cbt=1613046072363&channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df176fd9e54a449%26domain%3Dlike2like.org%26origin%3Dhttps%253A%252F%252Flike2like.org%252Ff113ed323fff204%26relation%3Dopener&client_id=819999065506900&display=touch&domain=like2like.org&e2e=%7B%7D&fallback_redirect_uri=https%3A%2F%2Flike2like.org%2Flogin%2F5fddd00893dca679fdb49c69&locale=en_US&logger_id=f2f7784f485f0b8&origin=2&redirect_uri=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfd559f57e656bc%26domain%3Dlike2like.org%26origin%3Dhttps%253A%252F%252Flike2like.org%252Ff113ed323fff204%26relation%3Dopener%26frame%3Df1ce45595f84ff&response_type=token%2Csigned_request%2Cgraph_domain&sdk=joey&version=v9.0';
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
      "Host:m.facebook.com",
      "upgrade-insecure-requests:1",
      "save-data:on",
      "user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36",
      "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
      "sec-fetch-site:cross-site",
      "sec-fetch-mode:navigate",
      "sec-fetch-user:?1",
      "referer:https://like2like.org/login",
      "sec-fetch-dest:document",
      "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
      "cookie:$cookie[$i]")));
$mr2 = curl_exec($mr); curl_close($mr);
$t=explode('access_token=',$mr2);
$t=explode('&data_access',$t[1]);
$e=explode('expires_in=',$mr2);
$e=explode('"',$e[1]);
$s=explode('signed_request=',$mr2);
$s=explode('&graph_domain',$s[1]);
$p=explode('expiration_time=',$mr2);
$p=explode('&expires',$p[1]);
$data='{"accessToken":"'.$t[0].'","userID":"","expiresIn":'.$e[0].',"signedRequest":"'.$s[0].'","graphDomain":"facebook","data_access_expiration_time":'.$p[0].',"type":"facebook_login","ref":"5fddd00893dca679fdb49c69"}';
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL =>"https://like2like.org/api/login",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
    'Host:like2like.org',
    'accept:application/json, text/plain, */*',
    'authorization:null',
    'user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36',
    'content-type:application/json;charset=UTF-8',
    'referer:https://like2like.org/login')));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$author=$json["token"];
$head_l2l=array(
  'Host:like2like.org',
  'Connection:keep-alive',
  'Accept:application/json, text/plain, */*',
  'authorization:'.$author,
  'content-type:application/json;charset=UTF-8',
  'User-Agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36');
$user=GET("https://like2like.org/api/user/me",$head_l2l);
$ten=$user["facebook"]["name"];
$point=$user["wallet"]["points"];
$head_fb=["Host:mbasic.facebook.com","cache-control:max-age=0","upgrade-insecure-requests:1","save-data:on","user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36","accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","sec-fetch-site:cross-site","sec-fetch-mode:navigate","sec-fetch-user:?1","sec-fetch-dest:document","accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5","cookie:$cookie[$i]"];
$check=G("https://mbasic.facebook.com",$head_fb);
$op=explode('<head><title>',$check);
$op=explode('</title>',$op[1]);
if ($op[0]=="Đăng nhập Facebook"){
  exit($lightred."Die Cookie\n");}
$lấy=GET("https://like2like.org/api/request/load_job?filter=$nv",$head_l2l);
$_id=$lấy[0]["_id"];
$type=$lấy[0]["type"];
$cost=$lấy[0]["cost"];
$data='{"jobId":"'.$_id.'"}';
$json=POST("https://like2like.org/api/request/job_detail",$data,$head_l2l);
$url=$json["url"];
if ($url==""){
$bojob=POST("https://like2like.org/api/request/ignore_job",$b='{"jobId":"'.$_id.'"}',$head_l2l);
  echo $yellow."Hết Job\r";
sleep($time);}else{
echo $lightgreen."FB:$ten\n";
$url=explode("https://www",$url);
$job1="https://mbasic".$url[1];
if ($type=="group"){
$data=G($job1,$head_fb);
$tìm =explode("/a/group/join/?",$data);
$tìm1=explode('"',$tìm[1]);
$fb=explode('name="fb_dtsg" value="',$data);
$fb=explode('"',$fb[1]);
$fbdtsg=htmlspecialchars_decode($fb[0]);
$jaz=explode('name="jazoest" value="',$data);
$jaz=explode('"',$jaz[1]);
$url="https://mbasic.facebook.com/a/group/join/?".htmlspecialchars_decode($tìm1[0]);
$data="fb_dtsg=$fbdtsg&jazoest=".$jaz[0];
$data=P($url,$data,$head_fb);
}
if ($type=="follow_user"){
$data=G($job1,$head_fb);
$tìm =explode("/a/subscribe.php?",$data);
$tìm1=explode('"',$tìm[1]);
$url_fl="https://mbasic.facebook.com/a/subscribe.php?".htmlspecialchars_decode($tìm1[0]);
$data=G($url_fl,$head_fb);
}
if ($type=="page"){
$data=G($job1,$head_fb);
$tìm =explode("/a/profile.php?",$data);
$tìm1=explode('"',$tìm[1]);
$url_like="https://mbasic.facebook.com/a/profile.php?".htmlspecialchars_decode($tìm1[0]);
$data=G($url_like,$head_fb);
}
if ($type=="post"){
$data=G($job1,$head_fb);
$tìm =explode("/a/like.php?",$data);
$tìm1=explode('"',$tìm[1]);
$url_like="https://mbasic.facebook.com/a/like.php?".htmlspecialchars_decode($tìm1[0]);
$data=G($url_like,$head_fb);
}
$data = '{"postId":"'.$_id.'"}';
$nhan=POST("https://like2like.org/api/request/like_post",$data,$head_l2l);
$success=$nhan["success"];
if ($success==1){
$dem++;
$user=GET("https://like2like.org/api/user/me",$head_l2l);
$point=$user["wallet"]["points"];
echo "\033[1;37m• ".$cyan2."Nhiệm Vụ: $type\n";
echo "\033[1;37m• ".$yellow."Link Job: $job1\n";
echo "\033[1;37m• ".$lightgreen."ID Job: $_id\n";
echo "\033[1;37m• ".$lightcyan."Tiền Job: $cost\n";
echo "\033[1;37m• ".$lightgreen."Point Chính: $point\n";
echo "\033[1;37m• ".$lightcyan."Số Job Làm Được: $dem\n";
echo "\n";}
}}}
 for ($x = $time; $x >-1; $x--) {
echo $green."\033[1;32mVui Lòng Đợi\033[1;33m $x \033[1;32mGiây";
sleep(1);
echo "\r";};}
