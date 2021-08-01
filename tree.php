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
system("clear");
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Nhập Api_key App:\033[1;33m ";
$apimonkey=trim(fgets(STDIN));
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Nhập User_ID App: \033[1;33m";
$useridmonkey=trim(fgets(STDIN));
sleep(1);
@system("clear");
$datauser = '{"API_Key":"'.$apikeymonkey.'","ID":'.$useridmonkey.'}';
@system("clear");
$ch = curl_init(); 
 curl_setopt($ch, CURLOPT_URL, "http://earnlion.rewardedlinks.com:5005/api/User/GetUserInfo"); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  curl_setopt($ch, CURLOPT_POSTFIELDS, "$datauser"); 
  curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1); 
  curl_setopt($ch, CURLOPT_POST, 1); 
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST"); 
  curl_setopt($ch, CURLOPT_PORT,5005); 
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
  curl_setopt($ch, CURLOPT_TIMEOUT, 30); 
  curl_setopt($ch, CURLOPT_ENCODING, ''); 
  curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt"); 
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt"); 
  $headers = array(); 
$headers[] = 'Content-Type:application/json; charset=utf-8';
$headers[] = 'User-Agent:Dalvik/2.1.0 (Linux; U; Android 8.1.0; CPH1853 Build/OPM1.171019.026)';
$headers[] = 'Host:earnlion.rewardedlinks.com:5005';
$headers[] = 'Connection:Keep-Alive';
$headers[] = 'Accept-Encoding:gzip';
@system("clear");
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
   $resultdatauser = curl_exec($ch);
$check = json_decode($resultdatauser,true)["diamonds"];
@system("clear");
if($check == ""){
unlink('dataCashTree');
@system("clear");
echo "\033[5;31m[\033[5;32m!\033[5;31m]\033[5;31m Dữ Liệu Đã Nhập Sai, Hãy Khởi Động Lại Tool Để Nhập Data Lại\n";
exit;
}else{
system('clear');
function md6($int) {
$randomness = array("3", "4", "7", "12", "75", "23", "12", "4", "7", "54", "32", "23", "54", "3", "12", "3", "4", "7", "12", "75", "23", "12", "4", "7", "54", "32", "25", "54", "3", "12", "34", "3", "23", "4", "22", "12", "3");
$numbl = $int * 3 + 6;
$int = ($int * 2) + 17;
$rnds[] = ":R";
for ($i3 = 0;$i3 < 15;$i3+= 2) {
$rnds[] = $randomness[$i3] * $int;
}
return implode($rnds);
}

function timer($tmr){
$bl="\e[1;30m";$r="\e[0;31m";$g="\e[0;32m";
$k="\e[1;33m";$bu="\e[1;34m";$p="\e[1;35m";
$c="\e[1;36m";$w="\e[1;37m";$cr="\e[0m";
$tim=time()+$tmr;
while(true){
$red = "\033[5;31m";
echo "\r                                               \r";
$res=$tim-time();
if($res < 1){break;}
echo "\e[0;31m\033[5;32m[🌸\033[5;32m]\033[5;31m Giới Hạn Nhiệm Vụ, Tool Sẽ Chạy Lại Sau 30 Phút";
sleep(3600);
}
}

$k="\e[0m";
$w="\e[0;37m";
$r="\033[5;31m";
$b="\e[1;36m";
$y="\e[1;33m";
$g="\e[1;32m";
$b2="\e[1;34m";
$p="\e[1;35m";
$p2="\e[0;35m";
$gr="\033[1;30m";
$l="{$gr}••••••••••••••••••••••••••••••••••••••••••••••••\n";
$l1="{$gr}•";
$l2="{$gr}••••••••••••••••••••••••••••••••••••••••••••••••\n";




function post($url,$post,$header){
$ch=curl_init();
  curl_setopt_array($ch,array(
  CURLOPT_URL => $url,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POSTFIELDS => $post,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POST => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_PORT => 5005,
  CURLOPT_ENCODING => '',
  CURLOPT_HTTPHEADER => $header,
  ));
 return curl_exec($ch);
 curl_close($ch);
}



$head=array(
"Content-Type:application/json; charset=utf-8",
"User-Agent:Dalvik/2.1.0 (Linux; U; Android 10; moto g(7) power Build/QPOS30.52-29-11)",
"earnlion.rewardedlinks.com:5005",
"Connection:Keep-Alive",
"Accept-Encoding:gzip",
);


/////// Ref Code //////


$data8='{"API_Key":"'.$apimonkey.'","RefCode":"BB7DD","ID":'.$useridmonkey.'}';
$user1=post("http://earnlion.rewardedlinks.com:5005/api/Ref/EnterRef",$data8,$head);
//echo $user1;


for ($t=24;$t>0;$t--){



///// Get User /////


$data='{"API_Key":"'.$apimonkey.'","ID":'.$useridmonkey.'}';
$user=post("http://earnlion.rewardedlinks.com:5005/api/User/GetUserInfo",$data,$head);
$diam=json_decode($user,true)["diamonds"];
$scratch=json_decode($user,true)["scratches"];
//echo $l1;
echo "\033[5;32m--\033[5;33m-\033[5;35m---\033[5;36m---\033[5;34m-\033[5;37m--\033[5;31m---\033[5;33m----\033[5;32m--\033[5;33m-\033[5;35m---\033[5;36m---\033[5;34m-\033[5;37m--\033[5;31m---\033[5;33m----\033[5;32m--\033[5;33m-\033[5;35m-\n";
echo "\033[1;33m       Tia Sét: $scratch  |  Kim Cương: $diam \n";
echo "\033[5;32m--\033[5;33m-\033[5;35m---\033[5;36m---\033[5;34m-\033[5;37m--\033[5;31m---\033[5;33m----\033[5;32m--\033[5;33m-\033[5;35m---\033[5;36m---\033[5;34m-\033[5;37m--\033[5;31m---\033[5;33m----\033[5;32m--\033[5;33m-\033[5;35m-\n\n";
//echo "\n";


////// Get User /////


$user=post("http://earnlion.rewardedlinks.com:5005/api/User/GetUserInfo",$data,$head);
$diam=json_decode($user,true)["diamonds"];

$val1= md5($useridmonkey+$diam+10);
$post='{"Validation":"'.$val1.'","API_Key":"'.$apimonkey.'","ID":'.$useridmonkey.'}';


//////// Get Daily /////////


$dayli=post("http://earnlion.rewardedlinks.com:5005/api/Video/DailyLoginVideo",$post,$head);
$amount=json_decode($dayli,true)["amount"];
if($amount==15){
//echo $l2;


echo "\033[5;36m• \033[5;33m[\033[1;32mThành Công\033[5;33m] \033[5;34m~> \033[5;37mNhận \033[5;33m$amount \033[35mTia Sét\033[5;36m\n";


//echo $l2;
}


///// Hourly Video ///////


$hour=post("http://earnlion.rewardedlinks.com:5005/api/Video/HourlyVideo",$post,$head);
$amount=json_decode($hour,true)["amount"];
if($amount==5){
//echo $l2;


echo "\033[5;36m• \033[5;33m[\033[1;32mThành Công\033[5;33m] \033[5;34m~> \033[5;37mNhận \033[5;33m$amount \033[35mTia Sét\033[5;36m\n";


//echo $l2;
}
sleep(1);
//echo "\n";
while(true){
	

////// Get User //////


$user=post("http://earnlion.rewardedlinks.com:5005/api/User/GetUserInfo",$data,$head);
$diam=json_decode($user,true)["diamonds"];


////// Scratch //////


$val1= md5($useridmonkey+$diam+10);
$val2= md6($diam);


$dat='{"Validation":"'.$val1.'","Validation2":"'.$val2.'","API_Key":"'.$apimonkey.'","ID":'.$useridmonkey.'}';
$claim=post("http://earnlion.rewardedlinks.com:5005/api/Scratch/StartScratching",$dat,$head);
$slot1=json_decode($claim,true)["slot1"];
$slot2=json_decode($claim,true)["slot2"];
$slot3=json_decode($claim,true)["slot3"];


////// Error //////


if($slot1==50){

//echo "{$p}• Porfavor Espere 1 hora •\n";
echo $l1;
break;
}


////// Get User //////


$point=$slot1+$slot2+$slot3;
$user=post("http://earnlion.rewardedlinks.com:5005/api/User/GetUserInfo",$data,$head);
$diam=json_decode($user,true)["diamonds"];
$scratch=json_decode($user,true)["scratches"];
//echo $l;


echo "\033[5;36m• \033[5;33m[\033[1;32mThành Công\033[5;33m] \033[5;34m● \033[5;37m+\033[5;33m$point \033[35m\033[5;34m ● \033[5;33m $diam\033[35m Kim Cương\033[5;37m\n";


sleep(5);

}


$time=3600; 
$time=timer($time);
  
  


}

}
	
if($check == "132"){
unlink('dataCashTree');
echo "\033[5;31m[\033[5;32m!\033[5;31m]\033[5;32m Dữ Liệu Đã Nhập Sai, Hãy Khởi Động Lại Tool Để Nhập Data Lại \033[5;31m[\033[5;32m●\033[5;31m]";
exit;
}
