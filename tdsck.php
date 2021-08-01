error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$banner = "\r";
$duy="\033[1;35m";
$ngan="\033[1;36m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
date_default_timezone_set("Asia/Ho_Chi_Minh");
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

//cookie 
$khocookie = [];
if (file_exists('cooki.txt')){
	echo $green."Nhấn".$bluelight." 'Enter' ".$green."Để Giữ Cookie ".$red."| ".$green."Nhập ".$bluelight."'yes' ".$green."Để Xoá Cookie\n==> ";
	$choice=trim(fgets(STDIN));
	if ($choice=='yes'){
		@system('rm cooki.txt');
		}
	}
if (!file_exists('cooki.txt')){
$mangcookie =[];
for($a = 1; $a < 2;$a++){
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Nhập Cookie: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khocookie,$nhapck);
    }
			$js=json_encode($khocookie);
			$demcki=count($khocookie);
			$k = fopen("cooki.txt","a+");
fwrite($k, $js);
fclose($k);
echo $green."Tìm Thấy $demcki Cookie\n";
	}else{
		$khocookie = json_decode(fread(fopen("cooki.txt","r"),filesize("cooki.txt")),true);
		$demcki = count($khocookie);
	}
	echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Sau Mấy Nhiệm Vụ Thì Bật Chống Block: $vang";
$xxxxx = trim(fgets(STDIN));
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi Bao Nhiêu Giây: $vang";
$delaybl = trim(fgets(STDIN));
$doinick = 99999;
//url
$urlinfo = "https://traodoisub.com/api/?fields=profile&access_token=$tokenacc";
$urllike = "https://traodoisub.com/api/?fields=like&access_token=$tokenacc";
$urlsub = "https://traodoisub.com/api/?fields=follow&access_token=$tokenacc";
$urlcx = "https://traodoisub.com/api/?fields=reaction&access_token=$tokenacc";
$urlshare = "https://traodoisub.com/api/?fields=share&access_token=$tokenacc";
$urlcmt = "https://traodoisub.com/api/?fields=comment&access_token=$tokenacc";
$urlpage = "https://traodoisub.com/api/?fields=page&access_token=$tokenacc";
//login
$info = api($urlinfo);
if ($info["error"]) {
    exit ($info["error"]);
}
//$thongtin
$user = strtolower($info["data"]["user"]);
$xuhientai = $info["data"]["xu"];
system('clear');
echo $banner;
echo $logo;
echo "\033[1;33m────────────────────────────────────────────────────────────\n";
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Tài Khoản TDS : ".$vang.$user."\n";
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Số Xu Hiện Tại : ".$vang.$xuhientai."\n";
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Số Acc Đang Chạy : ".$vang.$demcki."\n";
echo "\033[1;33m────────────────────────────────────────────────────────────\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Chạy Nhiệm Vụ Like\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Chạy Nhiệm Vụ Follow\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Chạy Nhiệm Vụ Cảm xúc\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."4".$do."]".$luc." Chạy Nhiệm Vụ Comment\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."5".$do."]".$luc." Chạy Nhiệm Vụ Fanpage\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."6".$do."]".$luc." Chạy Nhiệm Vụ Share\n";
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Nhập Chế Độ: $vang";
$nhiemvu = trim(fgets(STDIN));
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$luc."Deley Nhiệm Vụ : $vang";
$delay = trim(fgets(STDIN));
echo "\033[1;33m────────────────────────────────────────────────────────────\n";
while(true){
  foreach ($khocookie as $cookie){
$access_token = laytoken($cookie);
if (strpos($access_token, 'EAAAA') !== 0) {
    echo "Cookie die, Nick Đã Bị Văng Khỏi Web!!! \n";
    exit;
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
$urlcauhinh = "https://traodoisub.com/api/?fields=run&id=$idfb&access_token=$tokenacc";
$cauhinh = api($urlcauhinh);
if ($cauhinh["data"]["msg"] == "Cấu hình thành công!") {
echo "";
} else {
    echo "Cấu hình $idfb thất bại\n";
}
$spam = 0;
while (true) {
    if ($spam == 1) {
        break;
    }
    //listlike
    if (strpos($nhiemvu, '1') !== false) {
        for ($i = 0; $i < 30; $i++) {
            $listlike = api($urllike);
            if (count($listlike) !== 0) {
                break;
            }}
    }
    //listfollow
    if (strpos($nhiemvu, '2') !== false) {
        while (true) {
            $listsub = api($urlsub);
            if (count($listsub) !== 0) {
                break;
            }
        }}
    //listreaction
    if (strpos($nhiemvu, '3') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listcx = api($urlcx);
            if (count($listcx) !== 0) {
                break;
            }}
    }
    //listcmt
    if (strpos($nhiemvu, '4') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listcmt = api($urlcmt);
            if (count($listcmt) !== 0) {
                break;
            }}
    }
    //listpage
    if (strpos($nhiemvu, '5') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listpage = api($urlpage);
            if (count($listpage) !== 0) {
                break;
            }}
    }
    //share
    if (strpos($nhiemvu, '6') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listshare = api($urlshare);
            if (count($listshare) > 0) {
                break;
            }}
    }
    //group
    if (strpos($nhiemvu, '7') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listshare = api($urlgroup);
            if (count($listgroup) > 0) {
                break;
                }}
                }
    for ($lap = 0; $lap < 20; $lap++) {
        // like
        if ($listlike !== NULL) {
            $idlike = $listlike[$lap]["id"];
            if ($idlike !== '') {
                $g = like($access_token, $idlike, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Cookie die !!?!\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản bị checkpoint";
                    $spam = 1; break;
                }
                $nhanlike = nhantien('LIKE', $idlike, $tokenacc);
                if ($nhanlike["success"] == 200) {
                	
                    $t = random_int(31,37);
    $mau = "\e[1;$t"."m";
                    $xu = $nhanlike["data"]["xu"];
                    $xujob = $nhanlike["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, ' LIKE ', $idlike, $xujob, $mau, $xu);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }
                    
                    delay($delay);
                }
            }}
        //follow
        if ($listsub !== NULL) {
            $idsub = $listsub[$lap]["id"];
            if ($idsub !== '') {
                $g = follow($access_token, $idsub, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Cookie die !!?!\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản bị checkpoint";
                    $spam = 1; break;
                }
                $nhansub = nhantien('FOLLOW', $idsub, $tokenacc);
                if ($nhansub["success"] == 200) {
                	$t = random_int(31,37);
    $mau = "\e[1;$t"."m";
                    $xu = $nhansub["data"]["xu"];
                    $xujob = $nhansub["data"]["msg"];
                              $dem++;
                    hoanthanh($dem, 'FOLLOW', $idsub, $xujob, $mau, $xu);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }
                    
                    delay($delay);
                }
            }}
        //cảm xúc
        if ($listcx !== NULL) {
            $idcx = $listcx[$lap]["id"];
            $type = $listcx[$lap]["type"];
            if ($idcx !== '') {
                camxuc($idcx, $type, $cookie);
                $nhancx = nhantien('LOVE', $idcx, $tokenacc);
                if ($nhancx["success"] == 200) {
                	$t = random_int(31,37);
    $mau = "\e[1;$t"."m";
                    $xu = $nhancx["data"]["xu"];
                    $xujob = $nhancx["data"]["msg"];
                    $dem++;
                    if ($type == 'WOW') {
                        $type = ' WOW ';
                    } elseif ($type == 'SAD') {
                        $type = ' SAD ';
                    } elseif ($type == 'ANGRY') {
                        $type = ' ANGRY ';
                    } elseif ($type == 'LOVE') {
                        $type = ' LOVE ';
                    } elseif ($type == 'HAHA') {
                        $type = ' HAHA ';
                    }
                    hoanthanh($dem, $type, $idcx, $xujob, $mau, $xu);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }
                    
                    delay($delay);
                }
            }}
            if ($listshare !== NULL) {
                $idshare = $listshare[$lap]["id"];
                if (isset($idshare)) {
                    $r = share($access_token, $idshare);
                    $g = json_decode($r);
                    if ($g -> {'error'} -> {'code'} == 190) {
                        echo "Token die !!?!\n";
                        
                        $spam = 1; break;
                    }
                    if ($g -> {'error'} -> {'code'} == 368) {
                        echo "\033[1;91m".$g-> {'error'}-> {'message'};
                        echo "\n";
                        $spam = 1; break;
                    }
                    if ($g -> {'error'} -> {'code'} == 405) {
                        echo "\033[1;91m"."Tài khoản bị checkpoint";
                        
                        $spam = 1; break;
                    }
                    if (strpos($r, '"id"')){
                        $nhanshare = nhantien('SHARE', $idshare, $tokenacc);
                        if ($nhanshare["success"] == 200) {
                        	$t = random_int(31,37);
    $mau = "\e[1;$t"."m";
                            $xu = $nhanshare["data"]["xu"];
                            $xujob = $nhanshare["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, 'SHARE ', $idshare, $xujob, $mau, $xu);
                            if($dem % $doinick == 0){
                              $spam = 1; break;
                            }
                            if($dem % $xxxxx == 0){
                              delay($delaybl);
                            }
                            
                            delay($delay);
                        }

                    }else{
                        echo $r;
                    }

                }else{
                    break;
                }
            }
        //cmt
        if ($listcmt !== NULL) {
            $idcmt = $listcmt[$lap]["id"];
            $msg = $listcmt[$lap]["msg"];
            if ($idcmt !== '') {
                cmt($access_token, $idcmt, $cookie, $msg);
                $nhancmt = nhantien('COMMENT', $idcmt, $tokenacc);
                if ($nhancmt["success"] == 200) {
                	$t = random_int(31,37);
    $mau = "\e[1;$t"."m";
                    $xu = $nhancmt["data"]["xu"];
                    $xujob = $nhancmt["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, ' CMT  ', $idcmt, $xujob, $mau, $xu);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }
                    
                    delay($delay);
                }
            }}
        //page
        if ($listpage !== NULL) {
            $idpage = $listpage[$lap]["id"];
            if ($idpage !== '') {
                page($idpage, $cookie);
                $nhanpage = nhantien('PAGE', $idpage, $tokenacc);
                if ($nhanpage["success"] == 200) {
                	$t = random_int(31,37);
    $mau = "\e[1;$t"."m";
                    $xu = $nhanpage["data"]["xu"];
                    $xujob = $nhanpage["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, ' PAGE ', $idpage, $xujob, $mau, $xu);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }
                    
                    delay($delay);
                }
            }
        }}
}}}
function api($url) {
    $head = array(
        "Host: traodoisub.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.110 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        //"accept-encoding: gzip, deflate, br",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1
    ));
    $get = curl_exec($ch);
    curl_close($ch);
    return json_decode($get, true);
}
function nhantien($type, $id, $tokenacc) {
    $nhan = file_get_contents("https://traodoisub.com/api/coin/?type=$type&id=$id&access_token=$tokenacc");
    return json_decode($nhan, true);
}
function follow($access_token, $idtest, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idtest.'/subscribers');
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
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function share($access_token,$id){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/me/feed?method=POST&link=https://www.facebook.com/'.$id.'&privacy={%27value%27:%20%27EVERYONE%27}&access_token='.$access_token);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] = 'Authority: graph.facebook.com';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Sec-Fetch-Site: none';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Sec-Fetch-Dest: document';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
}
function like($access_token, $id, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
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
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
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
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function page($idpage, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$idpage);
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
    if (explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0]) {
        $get = explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0];
        $link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$idpage.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
    }
    curl_close($ch);

}
function camxuc($idcx, $type, $cookie) {
    $ch = curl_init();
    if (strpos($idcx, '_')) {
        $uid = explode('_', $idcx, 2);
        $id2 = 'story.php?story_fbid='.$uid[1].'&id='.$uid[0];
    } else {
        $id2 = $idcx;
    }
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id2);
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
    if ($id2 != $idcx && explode('&amp;origin_uri=', explode('amp;ft_id=', $page, 2)[1], 2)[0]) {
        $get = explode('&amp;origin_uri=', explode('amp;ft_id=', $page, 2)[1], 2)[0];
    } else {
        $get = $id2;
    }
    $link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $cx = curl_exec($ch);
    $haha = explode('<a href="', $cx);
    if ($type == 'LOVE') {
        $haha2 = explode('" style="display:block"', $haha[2])[0];
    } else if ($type == 'WOW') {
        $haha2 = explode('" style="display:block"', $haha[5])[0];
    } else if ($type == 'HAHA') {
        $haha2 = explode('" style="display:block"', $haha[4])[0];
    } else if ($type == 'SAD') {
        $haha2 = explode('" style="display:block"', $haha[6])[0];
    } else {
        $haha2 = explode('" style="display:block"', $haha[7])[0];
    }
    $link2 = html_entity_decode($haha2);

    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    curl_close($ch);
}
function hoanthanh($dem, $type, $id, $xujob, $mau, $xu) {
         $a = "\e[10;657;50m\033[1;36m『$vang$dem\033[1;36m』 \033[1;31m● \033[1;35m".$tim.date("H:i")." \033[1;31m ● $mau".$type."\033[1;91m ● \033[1;92m".$id." \033[1;32m $xujob \033[1;31m● \033[1;37m".$xu." xu"."\033[1;90m\e[0m\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(1000);
    }
}
function delay($delay) {
 for ($time = $delay; $time > -1; $time--) {
  echo "\r                                         \r"; 
echo "\r\033[1;93mVui lòng Đợi\033[1;91m |\033[1;93m $time\033[1;91m |";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ●";
usleep(133333);
echo $do." ● ";
usleep(133333);
echo "$res  \r"; 
    }}
function laytoken($cookie) {
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
        $access_token = explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0];
    }
    return $access_token;
}
