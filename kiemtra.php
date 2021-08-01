date_default_timezone_set("Asia/Ho_Chi_Minh");
$gio = date( 'H:i' );
$ngay = date("d/m/Y");
error_reporting(0);
session_start();
//color
$res="\033[0m";
$den="\033[1;30m";
$do="\033[1;31m";
$xanhl="\033[1;32m";
$vang="\033[1;33m";
$tim="\033[1;34m";
$hong="\033[1;35m";
$xanht="\033[1;36m";
$trang="\033[1;37m";
@system('clear');
while(true) {
echo $xanhl."Nhập Token Facebook: $vang";
$cookie=trim(fgets(STDIN));
if ($cookie != 1 && $cookie != '') {
$ch=curl_init();
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
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
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
	if (explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0]) {
	}
	if (true) {
		$access_token = $cookie;
		if (json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'id'}) {
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'id'};
$hofb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'first_name'};
$type = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'locale'};
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'last_name'};
$ns = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'birthday'};
$gmail = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'email'};
$gt = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'gender'};
$idcfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'username'};
$name = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'name'};
$link = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'link'};
$name = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'name'};
$tt = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'relationship_status'};
echo "                                                      \r";
usleep(20000);
echo $xanht."Token Chính Xác 100%\n";
sleep(1);
@system("clear");
echo $tim."========\033[1;43;31mGHI CHÚ\033[1;0;34m========\n";
echo $xanht."🌸 Female: Nữ\n🌸 Male: Nam\n🌸 Vi_Vn: Việt Nam\n";
echo $tim."========\033[1;43;31mTHÔNG TIN\033[1;0;34m========";
echo $xanhl."\nLink Fb: \033[1;35m".$link."\n";
usleep(50000);
echo $xanhl."Tên: \033[1;35m".$hofb."\n";
usleep(50000);
echo $xanhl."Họ: \033[1;35m".$tenfb."\n";
usleep(50000);
echo $xanhl."Tên Fb: \033[1;35m".$name."\n";
usleep(50000);
echo $xanhl."ID Fb: \033[1;35m".$idfb."\n";
echo $xanhl."Username Fb: \033[1;35m".$idcfb."\n";
usleep(50000);
echo $xanhl."Gmail: \033[1;35m".$gmail."\n";
usleep(50000);
echo $xanhl."Ngày Sinh: \033[1;35m".$ns."\n";
usleep(50000);
echo $xanhl."Giới Tính: \033[1;35m".$gt."\n";
usleep(50000);
echo $xanhl."Quốc Tịch: \033[1;35m".$type."\n";
echo $xanhl."Tình Cảm: \033[1;35m".$tt."\n";
echo "\n";
exit;
}else{
echo $do."Nhập Sai Token Đã Bị Out\n";
usleep(50000);
exit;
}
}
}
}
