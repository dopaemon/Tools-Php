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
$banner="\r\033[1;96m███\033[1;93m╗   \033[1;96m██\033[1;93m╗ \033[1;96m█████\033[1;93m╗ \033[1;96m███\033[1;93m╗   \033[1;96m███\033[1;93m╗    
\033[1;31m████\033[1;93m╗  \033[1;31m██\033[1;93m║\033[1;31m██\033[1;93m╔══\033[1;31m██\033[1;93m╗\033[1;31m████\033[1;93m╗ \033[1;31m████\033[1;93m║    
\033[1;95m██\033[1;93m╔\033[1;95m██\033[1;93m╗ \033[1;95m██\033[1;93m║\033[1;95m███████\033[1;93m║\033[1;95m██\033[1;93m╔\033[1;95m████\033[1;93m╔\033[1;95m██\033[1;93m║    
\033[1;97m██\033[1;93m║╚\033[1;97m██\033[1;93m╗\033[1;97m██\033[1;93m║\033[1;97m██\033[1;93m╔══\033[1;97m██\033[1;93m║\033[1;97m██\033[1;93m║╚\033[1;97m██\033[1;93m╔╝\033[1;97m██\033[1;93m║    
\033[1;37m██\033[1;93m║ \033[1;93m╚\033[1;37m████\033[1;93m║\033[1;37m██\033[1;93m║  \033[1;37m██\033[1;93m║\033[1;37m██\033[1;93m║ ╚═╝ \033[1;37m██\033[1;93m║    
\033[1;93m╚═╝  ╚═══╝╚═╝  ╚═╝╚═╝     ╚═╝  
\033[1;41;33mBản Quyền Thuộc Nam Tool\033[0m\033[1;30m
\033[1;33m╚═══════════════════════════════════════════════════╝\n\n";
$logo="\033[1;33m─────────────────────────────────────────────────────────────────\n";
\033[1;31m[".$luc."●".$do."] ".$trang."=> \033[1;93mTool TraoDoiSub Đơn Token
\033[1;31m[".$luc."●".$do."] ".$trang."=> \033[1;97mTool Bản Quyền : \033[1;93mNam Tool
\033[1;31m[".$luc."●".$do."] ".$trang."=> \033[1;97mZalo: \033[1;32m0852048795
\033[1;31m[".$luc."●".$do."] ".$trang."=> \033[1;97mMoMo: 0328485126
\033[1;33m─────────────────────────────────────────────────────────────────\n";
@system('clear');
echo $banner;
echo $logo;
echo $BGreen."Nhập Authorization  : $BWhite ";
$token =trim(fgets(STDIN));
$user ="Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/89.0.282 Mobile Chrome/83.0.4103.282 Mobile Safari/537.36";
@system('clear');
echo $banner;
echo $logo;
while(true){ 
// Get id video
$url = "https://adsvlog.com/api/watch-earning/get-video/?locale=vi&platforms=android,phablet,mobile,mobileweb&rtl=false&landscape=false&portrait=false&width=412&height=669&last_visited_page=EarnWatching";
 
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
"Host:adsvlog.com",
"authorization:$token",
"user-agent:$user",
"referer:https://adsvlog.com/earn-watching",
"cookie:_fbp=fb.1.1616130037619.1987669943;_ga=GA1.1.2119931499.1616130054;_ga_3V5Q2KS7S0=GS1.1.1616130051.1.1.1616130500.0",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$id = $json['_id'];
// Get id video 2
$url = "https://adsvlog.com/api/watch-earning/credit-video/?locale=vi&platforms=android,phablet,mobile,mobileweb&rtl=false&landscape=false&portrait=false&width=412&height=669&last_visited_page=EarnWatching";
 
$data = '{"adId":"'.$id.'"}';
 
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
"Host:adsvlog.com",
"authorization:$token",
"user-agent:$user",
"origin:https://adsvlog.com",
"referer:https://adsvlog.com/earn-watching",
"content-type:application/json",
"cookie:_fbp=fb.1.1616130037619.1987669943;_ga=GA1.1.2119931499.1616130054;_ga_3V5Q2KS7S0=GS1.1.1616130051.1.1.1616130500.0",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
// nhan tien
$url = "https://adsvlog.com/api/current-user/?locale=vi&platforms=android,phablet,mobile,mobileweb&rtl=false&landscape=false&portrait=false&width=412&height=669&last_visited_page=EarnWatching&geo=%7B%22organization_name%22:%22The%20Corporation%20for%20Financing%20%26%20Promoting%20Technology%22,%22region%22:%22Hanoi%22,%22accuracy%22:1000,%22asn%22:18403,%22organization%22:%22AS18403%20The%20Corporation%20for%20Financing%20%26%20Promoting%20Technology%22,%22timezone%22:%22Asia/Bangkok%22,%22longitude%22:%22105.8516%22,%22country_code3%22:%22VNM%22,%22area_code%22:%220%22,%22ip%22:%2242.114.151.119%22,%22city%22:%22Hanoi%22,%22country%22:%22Vietnam%22,%22continent_code%22:%22AS%22,%22country_code%22:%22VN%22,%22latitude%22:%2221.0313%22%7D";
 
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
"Host:adsvlog.com",
"authorization:$token",
"user-agent:$user",
"referer:https://adsvlog.com/earn-watching",
"cookie:_fbp=fb.1.1616130037619.1987669943;_ga=GA1.1.2119931499.1616130054;_ga_3V5Q2KS7S0=GS1.1.1616130051.1.1.1616130500.0",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$nt = $json['balance'];
$time = $json['serverTime'];
$so++;
echo $BCyan."[$so] $BRed ●$BGreen [SUCCESS]$BRed ●$BGreen ID $BRed ●$BGreen $id $BRed ●$BGreen Tổng Xu $BRed ●$BGreen $BYellow $nt \n";
}
function chay($so){
  for($v=0;$v<= $so;$v++){
    echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);echo "\033[1;36m"."▬";usleep(20000);echo "\033[1;37m"."▬";usleep(20000);
} echo "\n";
}
