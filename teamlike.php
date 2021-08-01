error_reporting(1);
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
$luc="\033[1;32m";
$do="\033[1;31m";
$trang="\033[1;37m";
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
$useragent ="Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.30 Mobile Safari/537.36";
@system('clear');
echo $banner;
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;32m Nhập Cookie Web:\033[1;33m ";
$cookie =trim(fgets(STDIN));
system('clear');
// Get id video
echo $banner;
echo $logo;
while(true){ 
$url = "https://team-like.net/index.php?page=module&md=youtube";
 
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_PORT => "443",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
"Host:team-like.net",
"upgrade-insecure-requests:1",
"user-agent:$useragent",
"referer:https://team-like.net/index.php?page=module&md=youtube",
"cookie:$cookie",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
 
$sd = explode('<b id="c_coins">', $mr2)[1];
$sd = explode('เหรียญ<', $sd)[0];
 
$tien = explode('<b class="text-success">', $mr2)[1];
$tien = explode('<', $tien)[0];
 
$id = explode('<div class="website_block" id="', $mr2)[1];
$id = explode('"', $id)[0];
 
$so++;
echo "\033[1;31m[\033[1;33m$so\033[1;31m]\033[1;37m => \033[1;32mĐang Xem Video! \033[1;37mID:\033[1;36m $id \n";
 
// làm nhiệm vụ
$url = "https://team-like.net/index.php?page=module&md=youtube&vid=".$id."";
 
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_PORT => "443",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
"Host:team-like.net",
"upgrade-insecure-requests:1",
"user-agent:$useragent",
"referer:https://team-like.net/index.php?page=module&md=youtube",
"cookie:$cookie",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
 
 
$time = explode('var length = ', $mr2)[1];
$time = explode(';', $time)[0];
 
for ($time=$time;$time>-1;$time--){
echo "\033[1;37m => \033[1;33mVui lòng chờ:\033[1;32m $time \r";
sleep(1);
}
// nhan tien
$url = "https://team-like.net/system/modules/youtube/process.php";
 
$data = 'data='.$id.'';
 
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
CURLOPT_HTTPHEADER => array(
"Host:team-like.net",
"x-requested-with:XMLHttpRequest",
"user-agent:$useragent",
"content-type:application/x-www-form-urlencoded; charset=UTF-8",
"origin:https://team-like.net",
"referer:https://team-like.net/index.php?page=module&md=youtube&vid=$id",
"cookie:$cookie",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
 
echo "\033[1;37m[\033[1;32mSUCCESS\033[1;37m] \033[1;36m| \033[1;31m+$mr2 \033[1;36m|\033[1;33m $tien \033[1;36m|\n";
}
function chay($so){
  for($v=0;$v<= $so;$v++){
    echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);
} echo "\n";
}
