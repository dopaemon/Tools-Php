error_reporting(0);
date_default_timezone_set("Asia/Ho_Chi_Minh");
$maufullxduong= "\e[1;47;34m";
$maufulldo= "\e[1;47;31m";
$maufullluc= "\e[1;47;32m";
$maufullxnhac= "\e[1;47;36m";
$maufullden= "\e[1;47;30m";
$maufullvang= "\e[1;47;33m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$tim = "\033[1;35m";
$xnhac = "\033[1;36m";
$trang = "\033[1;37m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$nau= "\e[38;5;94m";
$white = "\033[0;33m";
@system('clear');
$listnv = [];
system("toilet --width 46 -f wideterm -F border --metal --gay '      VIPIG.NET      '");
echo "\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Nhập Tài Khoản: \033[1;33m";
  $user = trim(fgets(STDIN));
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Nhập Mật Khẩu: \033[1;33m";
  $pass = trim(fgets(STDIN));
$user = json_decode(file_get_contents("IG.txt"))->{'username'};
$pass = json_decode(file_get_contents("IG.txt"))->{'password'};
$source = getcookieig($user,$pass,$useragent);
if ($source == '2'){
echo "";
}else{
	exit($BRed."\033[1;37m~\033[1;31m Đăng Nhập Thất Bại\n");
}
@system("clear");
$c = 0; $thu = 1;
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Bạn Muốn Chạy Mấy Acc Instagram:\033[1;36m ";
$treo = trim(fgets(STDIN));
if(!is_numeric($treo)){$treo = 1;}
for($b=1;$b<($treo + 1);$b++){
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Nhập Cookie \033[1;33m".$thu.": \033[1;37m";
$cooki[$c]=trim(fgets(STDIN));
$cookieaofix=$cooki[$c];
$info = laythongtin($cooki[$c],$useragent);
if($info[1]){
$uidif[$c] = $info[1];
$header[$c] = $info[0];
$c++;$thu++;
}else{echo $BRed."\033[1;37m~\033[1;31m Cookie Die, Hãy Xem Lại\n";$b--;}
}
@system('clear');
$cookie = $cooki[0];
$head = $header[0];
$idig = $uidif[0];
$h = datnickig($idig,$useragent);

usleep(100000);
$xu = getxuig($useragent);
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Tên Tài Khoản:\033[1;35m $user\n"; usleep(100000);
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Đang Chạy:\033[1;30m ".$treo."\033[1;32m Acc\n"; usleep(100000);
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Xu Hiện Tại:\033[1;33m $xu Xu\n"; usleep(100000);
echo "\033[1;33m──────────────────────────────────\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Nhập \033[1;31m[\033[1;33m1\033[1;31m]\033[1;32m TIM \n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Nhập \033[1;31m[\033[1;33m2\033[1;31m]\033[1;32m COMMENT \n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Nhập \033[1;31m[\033[1;33m3\033[1;31m]\033[1;32m FOLLOW \n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Nhập Chế Độ:\033[1;35m ";
$nhap = trim(fgets(STDIN));
if (strstr($nhap, '1')){array_push($listnv, 'like');}
if (strstr($nhap, '2')){array_push($listnv, 'cmt');}
if (strstr($nhap, '3')){array_push($listnv, 'sub');}
 if (count($listnv) == 0){exit("\033[1;37m~\033[1;31m Lựa Chọn Không Xác Định\n");}
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Delay Nhiệm Vụ: \033[1;33m";
$delay=trim(fgets(STDIN));
if ($treo ==1){
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Sau Mấy Job Thì Bật Kháng Block:\033[1;34m \5";}else{
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Đổi Cấu Hình Sau Bao Nhiêu Nhiệm Vụ:\033[1;31m \5";}
$dung=trim(fgets(STDIN));
if (strlen($dung) <= 0){$dung = 10;}
if($treo == 1){
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Kháng Block Bao Nhiêu Giây:\033[1;33m \5";
$giay=trim(fgets(STDIN));}
echo "\033[1;33m──────────────────────────────────\n";
 $so = 0; $a = 0;
if($h != 1){
  echo "\033[1;31mVào Web Đặt Cấu Hình Rồi Chạy Tiếp Nhé\n";
  $h = datnickig($idig,$useragent);
}  
 echo "🌸 \033[1;33mĐang Chạy ID:\033[1;36m ".$idig."\n";
 while(true){
   $sonv = 0;
   if (in_array('like',$listnv)){
   getcookieig($user,$pass,$useragent);
    $list0 = getnvig('',$useragent);
if(is_array($list0)){
    if(count($list0) > 1){
    $listds['like'] = $list0;
    $sonv = $sonv + count($listds['like']);
    }else{$listds['like'] = null;}}
  }else{$listds['like'] = null;}
  if(in_array('sub',$listnv)){
    $list1 = getnvig('/subcheo',$useragent);
if(is_array($list1)){
    if(count($list1) > 1 ){
    $listds['sub'] = $list1;
     $sonv = $sonv + count($listds['sub']);
    }else{$listds['sub'] = null;}}
  }else{$listds['sub'] = null;}
  if(in_array('cmt',$listnv)){
    $list2 = getnvig('/cmtcheo',$useragent);
if(is_array($list2)){
    if(count($list2) > 1){
    $listds['cmt'] = $list2;
    $sonv = $sonv + count($listds['cmt']);
    }else{$listds['cmt'] = null;}}
  }else{$listds['cmt'] = null;}
  echo "\r";$demdung = 0; $i = 0;
while($sonv > 0){
  if ($listds['like'] and is_array($listds['like'])){$sonv--;
     $i++;if($demdung >= $dung){break;}
     $ranar = array_rand($listds['like'],1);
      $key = $listds['like'][$ranar];
      $link = $key->{'link'};
      $uid = $key->{'idpost'};
      $id = layidlikesub($cookie,'like',$link,$useragent,$head);
$like = http_build_query(array('id'=> $uid));
$g = lamnhiemvu($cookie,$id,$useragent,$head);
	$s = nhantienig('',$like,$useragent);
if ($s == '2'){$xu = $xu + 200;$so++;$demdung++;
			echo echonhanxu(200,'TIM',$uid,$xu,$so);
			echo echodemgiay($delay);
					}else{
echo	$BRed."THẢ TIM thất bại: ".$uid."\r";
	if($g == '0' or $g == '1'  ){
	  break;
	}
					}
      unset($listds['like'][$ranar]);
    }
if ($listds['sub'] and is_array($listds['sub'])){$sonv--;
    $i++;if($demdung >= $dung){break;}
    $ranar = array_rand($listds['sub'],1);
      $key = $listds['sub'][$ranar];
      $uid = $key->{'soID'};
      $tid = $key->{'idpost'};
$link = 'https://www.instagram.com/web/friendships/'.$uid.'/follow/';
$g = lamnhiemvu($cookie,$link,$useragent,$head);
   if($g == '0' or $g == '1' ){
     break;
   }
$sub = http_build_query(array('id'=>$uid,'tid'=>$tid));
      $s = nhantienig('/subcheo',$sub,$useragent);
if (isset($s)){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'FOLLOW',$uid,$xu,$so);
			echo echodemgiay($delay);
					}else{
echo	$BRed."FOLLOW thất bại: ".$uid."\r";
					}
      unset($listds['sub'][$ranar]);
    }
     if ($listds['cmt'] and is_array($listds['cmt'])){$sonv--;
      $i++;if($demdung >= $dung){break;}
      $ranar = array_rand($listds['cmt'],1);
    $link = $key->{'link'};
    $uid = $key->{'idpost'};
    $id = layidlikesub($cookie,'cmt',$link,$useragent,$head);
$msg = json_decode($key->{'nd'})[1];
$g = cmtig($cookie,$id,$msg,$useragent,$head);
 if ($g == '0' or $g == '1' ){
        break;}
$cmt = http_build_query(array('id'=> $uid));
$s = nhantienig('/cmtcheo',$cmt,$useragent);
if ($s == '2'){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'CMT',$uid,$xu,$so);
			echo echodemgiay($delay);
					}else{
echo	$BRed."COMMENT thất bại: ".$uid."\r";
					}
      unset($listds['cmt'][$ranar]);
    }
}
if($treo == '1' and $demdung == $dung){
  echo nghingoi($giay); $demdung = 0; $demdung = 0;
  getcookieig($user,$pass,$useragent);
}
if(($g == '0' or $g == '1') and $treo == 1){
$cookie = $cookieaofix;
$info = laythongtin($cookie,$useragent);
$head = $info[0];
$idig = $info[1];
if(isset($idig)){
getcookieig($user,$pass,$useragent);
$h = datnickig($idig,$useragent);
if($h != '1'){
echo $BRed."\033[1;31mThất Bại!! ID:\033[1;33m ".$idig."\033[1;31m Chưa Thêm Vào Cấu Hình\n";
exit;
}
}
}else if(($g == '0' or $g == '1' or $dung <= $demdung) and $treo >= 2){
  $tat = 0;
  $cookie = $cooki[$a];
  $a++;if($a>=$treo){$a=0;} $demdung = 0;
$info = laythongtin($cookie,$useragent);
$head = $info[0];
$idig = $info[1];
if(isset($idig)){
	echo "🌸 \033[1;33mĐang Chạy ID:\033[1;36m ".$idig."\n";
$h = datnickig($idig,$useragent);
if($h != '1'){
echo $BRed."\033[1;31mThất Bại!! ID:\033[1;33m ".$idig."\033[1;31m Chưa Thêm Vào Cấu Hình\n";
exit;
}
}
}
}
function echonhanxu($xu,$loai,$id,$soxu,$so){
  $time = date('H:i:s');
  if(strlen($id) >= 12){
    $id = substr($id,0,12);
  }
if(strlen($loai) == 3){$kc = '   ';}else if(strlen($loai) == 4){$kc = '  ';}else if(strlen($loai) == 5){$kc = ' ';}else{$kc = '';}
$string = "\033[1;31m[\033[1;36m$so\033[1;31m] \033[1;37m● \033[1;31m[\033[1;32m$loai\033[1;31m] \033[1;37m● \033[1;31m[\033[1;37m$id\033[1;31m] \033[1;37m●\033[1;31m [\033[1;36m+$xu\033[1;31m] \033[1;37m● \033[1;31m[\033[1;33m$soxu\033[1;31m]\n";
for($i = 0;$i<= strlen($string);$i++){
  echo $string[$i];
  usleep(5000);
}
}
function echodemgiay($delay){
  $hinh = "Runing time";
  for ($i=$delay;$i>-1;$i--){
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
function checklive($token,$useragent,$head){
 $curl = curl_init();
 curl_setopt_array($curl,[
   CURLOPT_URL=>"https://graph.facebook.com/me/?access_token=".$token,
   CURLOPT_RETURNTRANSFER=>TRUE,
   CURLOPT_USERAGENT=>$useragent,
   CURLOPT_HTTPHEADER=>$head,
   ]);
   $m = json_decode(curl_exec($curl),true);
 if($m['id']){
   return '1';
 }else{ 
   return '2';
 }
}
function nghingoi($giay){
   for($v = 0;$v <= $giay;$v++){
   echo "\033[1;32mĐang Nghỉ Kháng Block:\033[1;36m".($giay -$v)."\033[1;35m Giây";sleep(1); echo "         \r";
  }
}
function layidlikesub($cookie,$loai,$link,$useragent,$head){
  $ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL=> $link,
    CURLOPT_USERAGENT =>$useragent,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIE => $cookie,
    CURLOPT_HTTPHEADER => $head,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_ENCODING => '',
    CURLOPT_HEADER => true));
    $data = curl_exec($ch);
 $num = explode('" />',explode('content="instagram://media?id=',$data)[1])[0];
if($loai == 'like'){
 return 'https://www.instagram.com/web/likes/'.$num.'/like/';
}else{
  return 'https://www.instagram.com/web/comments/'.$num.'/add/';
}
}
function laythongtin($cookie,$useragent){
  $ch = curl_init();
$head[] = "Host: www.instagram.com";
$head[] = "referer: https://www.instagram.com";
$head[] = "accept: */*";
$head[] = "content-type: application/x-www-form-urlencoded";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  curl_setopt_array($ch, array(
    CURLOPT_URL=> 'https://www.instagram.com/',
    CURLOPT_USERAGENT =>$useragent,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIE => $cookie,
    CURLOPT_HTTPHEADER => $head,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_ENCODING => '',
    CURLOPT_HEADER => true));
    $data = curl_exec($ch);
$xinta = explode('","',explode('"rollout_hash":"',$data)[1])[0];
$cookie = explode(';',explode('csrftoken=',$data)[1])[0];
$uid = explode('","is_joined_recently',explode('"id":"',$data)[1])[0];
$head[] = "x-csrftoken: $cookie";
$head[] = "x-ig-app-id: 1217981644879628";
$head[] = "x-instagram-ajax: $xinta";
return array($head,$uid);
}
function lamnhiemvu($cookie,$link,$useragent,$head){
  $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$resut = json_decode(curl_exec($ch),true);
if (is_null($resut)){
  return '0';
}else if(strstr($resut['feedback_message'],'Chúng tôi hạn chế một số hoạt động để bảo vệ cộng đồng.')){
  return '1';
}else if($resut['status'] == 'ok'){
  return '2';
}
curl_close($ch);
}
function cmtig($cookie,$link,$msg,$useragent,$head){
  $ch = curl_init();
  $file = array('comment_text' => $msg,'replied_to_comment_id'=> '');
  curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, count($file));
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($file));
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$resut = json_decode(curl_exec($ch),true);
if (is_null($resut)){
  return '0';
}else if(strstr($resut['feedback_message'],'Chúng tôi hạn chế một số hoạt động để bảo vệ cộng đồng.')){
  return '1';
}else if($resut['status'] == 'ok'){
  return '2';
}
curl_close($ch);
}
function getcookieig($user,$pass,$useragent){
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "IST.txt");
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
$login = array('username' => $user,'password' => $pass,'submit' => ' ĐĂNG NHẬP');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
$data = curl_exec($ch);
if(strlen($data) > 20){
  return false;
}else{
  return '2';
}
curl_close($ch);
}
function getnvig($loai,$useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://vipig.net/kiemtien'.$loai.'/getpost.php');
 $head[]='Host: vipig.net';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "IST.txt");
 return json_decode(curl_exec($ch));
 curl_close($ch);
}
function nhantienig($loai,$id,$useragent){
  $ch= curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/kiemtien'.$loai.'/nhantien.php');
  $data = $id;
  $head[]='Host: vipig.net';
  $head[]='content-length: '.strlen($data);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://vipig.net';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"IST.txt");
  if(json_decode(curl_exec($ch))->{'mess'}){
    return '2';
  }
  curl_close($ch);
}
function datnickig($idfb,$useragent){
$dat=http_build_query(array('iddat[]'=> $idfb));
$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL,'https://vipig.net/cauhinh/datnick.php');
	$head[]='Host: vipig.net';
	$head[]='content-length: '.strlen($dat);
	$head[]='accept: */*';
	$head[]='x-requested-with: XMLHttpRequest';
	$head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
	$head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$dat);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"IST.txt");
	return curl_exec($ch);
	curl_close($ch);
}
function getxuig($useragent){
   $ch= curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://vipig.net/home.php");
  $head[]='Host: vipig.net';
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://vipig.net';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"IST.txt");
  $data = curl_exec($ch);
  curl_close($ch);
preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
return $sd["1"];
}
function geturl($useragent){
  $ch = curl_init();
  $headhot = ["Host: signup.live.com",
           "accept: text/html,application/xhtml+xml,application/xml;q=0,9,image/webp,image/apng,*/*;q=0.8"
           ,
           "user-agent: ".$useragent];
  curl_setopt_array($ch, [
    CURLOPT_URL=> "https://signup.live.com/signup",
    CURLOPT_RETURNTRANSFER=>TRUE,
    CURLOPT_COOKIEJAR=>"cookie.txt",
    CURLOPT_FOLLOWLOCATION=>TRUE,
    CURLOPT_HEADER=>TRUE,
    CURLOPT_HTTPHEADER=> $headhot,
    ]);
$resut = curl_exec($ch);
unset($headhot);
$headhot[] = "Host: signup.live.com";
$headhot[] = "x-ms-apiversion: 2";
$headhot[] = "accept: application/json";
$headhot[] = "uaid: ".explode('","',explode('"uaid":"',$resut)[1])[0];
$canary = explode('","',explode('"apiCanary":"',$resut)[1])[0];
$headhot[] = "canary: ".json_decode('["'.$canary.'"]')[0];
$headhot[] = "hpgid: ".(explode(',"',explode('"hpgid":',$resut)[1])[0]);
$chuoi = (explode('"},',explode('"tcxt":"',$resut)[1])[0]);
$headhot[] = "tcxt: ".json_decode('["'.$chuoi.'"]')[0];
$headhot[] = "uiflvr: 1001";
$headhot[] = "scid: 100118";
$headhot[] = "referer: https://signup.live.com/";
$headhot[] = "x-ms-apitransport: xhr";
$url = curl_getinfo($ch)['url'];
return $headhot;
}
