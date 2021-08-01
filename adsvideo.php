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
$BCyan="\033[1;36m";
$trang="\033[1;37m";
$do="\033[1;31m";
$luc="\033[1;32m";
$vang="\033[1;33m";
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
@system('clear');
echo $banner;
echo $logo;
echo "\033[1;37m~\033[1;31m [\033[1;33mNhập Cookie Web\033[1;31m]\033[1;37m =>\033[1;36m ";
 $cookie = trim(fgets(STDIN));
 $atmod = array(
"https://adsvideo.online/",
"Upgrade-Insecure-Requests:1",
"User-Agent:Mozilla/5.0 (Linux; Android 5.0; SM-N900S) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Mobile Safari/537.36",
"Cookie:$cookie"
);
$atmod1  = array(
"https://adsvideo.online/",
"Upgrade-Insecure-Requests:1",
"X-Requested-With:XMLHttpRequest",
"User-Agent:Mozilla/5.0 (Linux; Android 5.0; SM-N900S) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Mobile Safari/537.36",
"Content-Type:application/x-www-form-urlencoded; charset=UTF-8",
"Cookie:$cookie"
);
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://adsvideo.online/",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $atmod));
 
$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
$ten = explode('<h6 class="user-name mb-0">', $mr2)[1];
$ten = explode('<', $ten)[0];
$sodu = explode('<h6 class="mb-0">Số dư: <b>', $mr2)[1];
$sodu = explode('<', $sodu)[0];
system("clear");
echo $banner;
echo $logo;
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => \033[1;35mTên Tài Khoản:\033[1;32m $ten \n";
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => \033[1;36mSố Dư:\033[1;33m $sodu\n";
echo "\033[1;33m─────────────────────────────────────────────────────────────────\n";
//id vd 
while(true){
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://adsvideo.online/?page=module&md=youtube",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $atmod));
$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
 
$idvd = explode('<div class="col-6 col-sm-4 col-lg-3" id="', $mr2)[1]; 
$idvd = explode('"', $idvd)[0];
$stt=$stt+1;
echo "\033[1;31m[\033[1;33m$stt\033[1;31m] \033[1;32mĐang Xem Video! \033[1;37mID:\033[1;31m $idvd\n";
 
if($idvd >= "0"){
 
//thoi gian làm viec quy dinh 
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://adsvideo.online/?page=module&md=youtube&vid=".$idvd."",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $atmod));
 
$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
$time = explode('var length = ', $mr2)[1];
$time = explode(';', $time)[0];
 
for ($time=$time;$time>-1;$time--){
echo "\033[1;37mVui Lòng Đợi \033[1;36m".$time."s\r";
sleep(1);
}
 
//nhantien
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://adsvideo.online/system/modules/youtube/process.php",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_POSTFIELDS => "data=".$idvd."",
 CURLOPT_HTTPHEADER => $atmod1));
 
$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
 
echo "\033[1;36m| \033[1;32mThành Công \033[1;36m| \033[1;33m+";
echo $mr2."Đ \033[1;36m|";
/////tk sau khi nhận xu
 
$mr = curl_init();
curl_setopt_array($mr, array(
 CURLOPT_URL => "https://adsvideo.online/",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_HTTPHEADER => $atmod));
 
$mr2 = curl_exec($mr);curl_close($mr);
$json = json_decode($mr2,true);
$xuht = explode('<h6 class="mb-0">Số dư: <b>', $mr2)[1];
$xuht = explode('<', $xuht)[0];
echo "\033[1;33m $xuht VNĐ\n";
 
}else{echo "\033[1;31mĐã Giới Hạn Video Hãy Quay Lại Vào Ngày Mai\n";
exit;}
}
