$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$res="\033[0m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$green="\033[1;32m";
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
{
@system('clear');
while(true){
@system('clear');
echo $banner;
echo $logo;
echo $green."🆔 Nhập Cookie Facebook Cần Nuôi:$white ";
$cookie=trim(fgets(STDIN));
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36";

$access = cookie($cookie,$useragent);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token=explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
  echo $BYellow." Cookie chính xác !!! \n";break;
}else{ exit($BRed." Cookie Die Hoặc SaiI!!! \n");}
}
while(true){ 
 @system('clear');
 unset($so); unset($_SESSION['giaay']);unset($nhap);
 unset($nguoi); unset($so1); unset($dem);
 echo $banner;
 echo $logo;
  echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]$white =>$BGreen  [".$BYellow."1".$BGreen."]".$BCyan." Auto Tương Tác\n";
echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]$white =>$BGreen  [".$BYellow."2".$BGreen."]".$BCyan." Auto Xóa Bạn\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]$white =>$BGreen  Nhập Chế Độ:\033[1;33m ";
$nhap =trim(fgets(STDIN));
while($nhap == '1'){
@system('clear');
echo $banner;
echo $logo;
$typ =[];
    echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập \033[1;31m[\033[1;32m1\033[1;31m]$BGreen Thương Thương \n";
    echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập \033[1;31m[\033[1;32m2\033[1;31m]$BGreen Like \n";
    echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập \033[1;31m[\033[1;32m3\033[1;31m]$BGreen HaHa \n";
    echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập \033[1;31m[\033[1;32m4\033[1;31m]$BGreen Phẫn Nộ \n";
    echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập \033[1;31m[\033[1;32m5\033[1;31m]$BGreen Wow \n";
    echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập \033[1;31m[\033[1;32m6\033[1;31m]$BGreen Buồn \n";
    echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập \033[1;31m[\033[1;32m7\033[1;31m]$BGreen Tim \n";
    echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]$white =>$BGreen Nhập Chế Độ: \033[1;36m";
$nhap = trim(fgets(STDIN))."8";
if (strlen(strstr($nhap ,'1')) > 0){array_push($typ,'THUONG');}
if (strlen(strstr($nhap ,'2')) > 0){array_push($typ, 'LIKE');}
if (strlen(strstr($nhap ,'3')) > 0){array_push($typ,'HAHA');}
if (strlen(strstr($nhap ,'4')) > 0){array_push($typ, 'PHANNO');}
if (strlen(strstr($nhap ,'5')) > 0){array_push($typ, 'WOW');}
if (strlen(strstr($nhap ,'6')) > 0){array_push($typ, 'BUON');}
if (strlen(strstr($nhap ,'7')) > 0){array_push($typ, 'LOVE');}
 if (count($typ) == 0){exit($BRed."Chọn Ít Nhất 1 Nhiệm Vụ!");}
 echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]$white =>$BGreen Delay Nhiệm Vụ: $BWhite";
$_SESSION['giaay']=trim(fgets(STDIN));
echo "\033[1;33m─────────────────────────────────────────────────────────────────\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]$white =>$BGreen Bật Chế Độ CMT Sau Khi Tương Tác (y/n): $BWhite";
$cmt=trim(fgets(STDIN));
if($cmt == 'Y' or$cmt == 'y'){
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập Nội Dung Cmt: \033[1;36m";
$noidung=trim(fgets(STDIN));
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Sau Số Lần Tương Tác Thì CMT 1 Lần: $BWhite";
$dem=trim(fgets(STDIN));
} else {
exit("\033[1;37m~\033[1;31m Lựa Chọn Không Xác Định\n");
}
echo "\033[1;33m─────────────────────────────────────────────────────────────────\n";
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
}else{ echo $BRed." Cookie die rồi nhập lại cookie: ";
  $cookie= trim(fgets(STDIN));
}
  }
  echo $BCyan."[".$BCyan.$so++.$BCyan."]".$BGreen." Đã thả: ".$BYellow.$type.$BGreen." Vào bài viết ".$BCyan.$id." \n";$o++;$c++;$ct++;
  if (($cmt == 'Y' or $cmt == 'y')and $ct == $dem){
  $msge = explode('|',$noidung);
  $msg = $msge[array_rand($msge,1)];
  $g = cmttoken($access_token,$id,$msg,$useragent);
  echo $BCyan."[".$BCyan.$so++.$BCyan."]".$BGreen." Đã Comments ID: ".$BYellow.$id.$BGreen." Với Lời Nhắn: \033[1;34m".$msg." \n";$ct =0;
  }
  for($v = 0;$v<$_SESSION['giaay'];$v++){echo $yellow."Vui Lòng Đợi   ".($_SESSION['giaay']-$v)." giây ~>";sleep(1);echo "     \r";} 
  if($o == 1){
  $linktap = explode('" class="',explode('/stories.php?',$list)[1])[0];
  $chuyentap = 'https://mbasic.facebook.com/stories.php?'.str_replace('&amp;','&',$linktap);
    $list = gettiephome($cookie,$chuyentap,$useragent);
    $i = 0; $o = 0;
  }
  if ($c == $ran){
  $id = thembanbe($cookie,$url,$useragent);
  echo $BCyan."[".$BCyan.$so++.$BCyan."]".$BGreen." Đã thêm bạn bè  ".$BYellow.$id.$BGreen." Để tăng bạn bè "." \n";$c = 0;
  }
  if ($gio == date('H')and($hen == 'y' or $hen == 'Y')){
    echo $BRed." Vui Lòng Chờ       \n";
    sleep(1);
    $gio = date('H') + $gioo;
    echo $BYellow." Bây giờ là: ".$Blue.date(' H : i')."           \n";
  }
}
}
while($nhap == '2'){
@system('clear');
$banbe =[];
$listbv = getbaiviet($cookie,$access_token,$useragent,'me')->{'data'};
$listbb = getbanbe($access_token,$useragent)->{'data'};
foreach ($listbb as $idbb){
$idbb = $idbb->{'id'};
array_push($banbe,$idbb); 
}
while(true){
echo $banner;
echo $logo;
echo $BYellow."Đang Đếm Số Bạn Bè Tương Tác Trong 3 Tháng Qua \n";
foreach ($listbv as $key => $list){
 $id = $list->{'id'};if (strstr($id,'_')){$idbv = explode('_',$id)[1];}
$like = demlike($cookie,$access_token,$idbv,$useragent)->{'data'};
if(!empty($like)){
foreach ($like as $key2=> $likes){
 $id = $likes->{'id'}; $name = $likes->{'name'};
 if(in_array($id,$banbe) == true){$so++;
 $banbe = \array_diff($banbe, [$id]);
 echo $BYellow."[".$BCyan.$so.$BYellow."]".$BGreen." Bạn Của Bạn Là: ".$BYellow.$name.$BGreen." Đã Tương Tác Với Bạn\n";
 }
}}
}
echo "\033[1;33m─────────────────────────────────────────────────────────────────\n";
echo "\033[1;37mCòn lại:\033[1;31m ".count($banbe)." \033[1;37mChưa Tương Tác Lần Nào\n";
echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập Số Bạn Muốn Xóa: ".$BYellow;
$xoa = trim(fgets(STDIN));
echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]$white =>$BGreen Nhập Delay Khi Xóa: $BYellow";
$giay = trim(fgets(STDIN));
echo "\033[1;33m─────────────────────────────────────────────────────────────────\n";
foreach ($banbe as $id=>$key){
$uid = $key;
$g = xoabanbe($cookie,$uid,$useragent);
$so1++;
echo  $BCyan."[".$BCyan.$so1.$BCyan."]".$BGreen." Đã Xoá ".$BCyan.$uid.$BGreen." Ra Khỏi Danh Sách Bạn Bè\n";
for($v = 0;$v<$giay;$v++){echo $yellow."Vui Lòng Đợi   ".($giay-$v)." giây ~>";sleep(1);echo "     \r";} 
if ($so1 == $xoa){
  echo " Đã Xóa Thành Công Số Bạn Bè Cần Xóa\n";
  break;sleep(5);
}
} unset($so);break;
}break;
  
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
if ($type == 'LIKE'){ $link2 = explode('" style="display:block"',explode('&amp;reaction_type=1',$m)[1])[0];
  $link4 = '&amp;reaction_type=1'.$link2;
}
if ($type == 'THUONG'){ $link2 = explode('" style="display:block"',explode('&amp;reaction_type=16',$m)[1])[0];
  $link4 = '&amp;reaction_type=16'.$link2;
}
if ($type == 'LOVE'){ $link2 = explode('" style="display:block"',explode('&amp;reaction_type=2',$m)[1])[0];
  $link4 = '&amp;reaction_type=2'.$link2;
}
if ($type == 'WOW' ){$link2 = explode('" style="display:block"',explode('&amp;reaction_type=3',$m)[1])[0];
  $link4 = '&amp;reaction_type=3'.$link2;
}
if ($type == 'HAHA'){$link2 = explode('" style="display:block"',explode('&amp;reaction_type=4',$m)[1])[0];
  $link4 = '&amp;reaction_type=4'.$link2;
}
if ($type == 'SAD'){$link2 = explode('" style="display:block"',explode('&amp;reaction_type=7',$m)[1])[0];
  $link4 = '&amp;reaction_type=7'.$link2;
}
if ($type == ''){$link2= explode('" style="display:block"',explode('&amp;reaction_type=8')[1])[0];
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
