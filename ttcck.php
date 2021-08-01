error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[1;33m";
$red = "\033[1;31m";
$green = "\033[1;37m";
$yellow = "\033[1;33m";
$white = "\033[1;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$duy="\033[1;35m";
$ngan="\033[1;36m";
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
date_default_timezone_set("Asia/Ho_Chi_Minh");
$address = 'Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.110 Mobile Safari/537.36';
$dem = 1;

//login 
@system('clear');
echo $banner;
echo "\033[1;37m~\033[1;32m Tài Khoản TTC : ";
$_SESSION['username'] = trim(fgets(STDIN));
echo "\033[1;37m~\033[1;32m Mật Khẩu TTC : ";
$_SESSION['password'] = trim(fgets(STDIN));
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "TTC.txt");
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.127 Mobile Safari/537.36');
$login = array(
    'username' => $_SESSION['username'],
    'password' => $_SESSION['password'],
    'submit' => 'ĐĂNG+NHẬP');
curl_setopt($ch, CURLOPT_POST, count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TTC.txt");
$a = curl_exec($ch);
curl_close($ch);
if ($a == $er) {
    echo"\033[1;31m Vui lòng kiểm tra lại tài khoản & mật khẩu !!!\n";
    exit();
} else {
    echo"\033[1;37m~ \033[1;32mĐăng nhập thành công \n";
}
@system('clear');
echo $banner;
$khocookie = [];
if (file_exists('cookiettc.txt')) {
    echo $green."Nhập".$bluelight." 'no' ".$green."Để Giữ Cookie ".$red."| ".$green."Nhập ".$bluelight."'yes' ".$green."Để Xoá Cookie\n==> ";
    $choice = trim(fgets(STDIN));
    if ($choice == 'yes') {
        @system('rm cookiettc.txt');
    }
}
if (!file_exists('cookiettc.txt')) {
for ($a = 1; $a < 2; $a++) {
        echo $luc."Nhập Cookie: $a: $vang";
        $nhapck = (string)trim(fgets(STDIN));
        if ($nhapck == '') {
            break;
        }
        array_push($khocookie, $nhapck);
    }
    $js = json_encode($khocookie);
    $demcki = count($khocookie);
    $k = fopen("cookiettc.txt", "a+");
    fwrite($k, $js);
    fclose($k);
} else {
    $khocookie = json_decode(fread(fopen("cookiettc.txt", "r"), filesize("cookiettc.txt")), true);
    $demcki = count($khocookie);
}
echo "$xduong Đổi nick sau : $vang";
$_SESSION['doinick'] = trim(fgets(STDIN));
@system('clear');
echo $banner;
echo $logo;
$xu = getxu();
echo $do."[".$vang."✓".$do."]".$trang." => ".$xnhac."Tên Tài Khoản : ".$vang.$_SESSION['username'];
echo $do."\n[".$vang."✓".$do."]".$trang." => ".$xnhac."Xu hiện có : ".$vang.$xu;
echo $trang."\n~".$do."[".$luc."✓".$do."] ".$trang."=> ".$luc."Nhập [1] Chế Độ Auto Follow\n";
echo $trang."~".$do."[".$luc."✓".$do."] ".$trang."=> ".$luc."Nhập [2] Chế Độ Auto Like\n";
echo $trang."~".$do."[".$luc."✓".$do."] ".$trang."=> ".$luc."Nhập [3] Chế Độ Random Like + Follow\n";
echo $xnhac." Nhập số :  ";
$nv = trim(fgets(STDIN));
if ($nv !== "1" && $nv !== "2" && $nv!=="3") {
    echo "Lựa chọn không xác định";
    exit();
}
echo "$vang Nhập delay: $do";
$delay = trim(fgets(STDIN));
$tangdem = 0;
$doinick = $_SESSION['doinick'];
$xu = getxu();
echo "\033[1;33m─────────────────────────────────────────────────────────────────\n";
while (true) {
    for ($xz = 0; $xz < count($khocookie); $xz++) {
        $cookie = $khocookie[$xz];
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
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'}){
	$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
}}
        $spam = 0;
        //getjob
        file_get_contents('https://severdaluong.xyz/test');
        $url = 'https://tuongtaccheo.com/cauhinh/datnick.php';
        $header = array(
            "Host: tuongtaccheo.com",
            //"content-length: 29",
            "accept: */*",
            "x-requested-with: XMLHttpRequest",
            "user-agent: Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.110 Mobile Safari/537.36",
            "content-type: application/x-www-form-urlencoded; charset=UTF-8",
            "origin: https://tuongtaccheo.com",
            "sec-fetch-site: same-origin",
            "sec-fetch-mode: cors",
            "sec-fetch-dest: empty",
            "referer: https://tuongtaccheo.com/cauhinh/",
            //"accept-encoding: gzip, deflate, br",
            //"accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
        );
        $data = 'iddat%5B%5D='.$idfb."&loai=fb";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_PORT, "443");
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_COOKIEFILE, "TTC.txt");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $h = curl_exec($ch);
        curl_close($ch);
        if ($h == 1) {
            $tangdem = $tangdem + 1;
            $_SESSION['doinick'] = $tangdem * $doinick;
            echo "$vang Đặt nick $xnhac $tenfb $vang với ID: $xnhac $idfb $vang thành công\n";

            while (true) {
                if ($spam == 1) {
                    break;
                }
                if ($sub = $nv == 2) {
                    $listlike = listlike();
                    if (count($listlike) == 0) {
                        echo "Chưa có thêm nhiệm vụ, hãy đợi 3s và bấm tải lại danh sách vài lần xem có mới ko \r";
                        sleep(20);
                        continue;
                    }
                    foreach ($listlike as $listlike) {
                        if ($dem - 1 >= $_SESSION['doinick']) {
                            $spam = 1;
                            break;
                        }
                        $idlike = $listlike[('idpost')];
                        $g = like($access_token, $idlike);
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 368) {
                            echo $do.$g-> {
                                'error'
                            }-> {
                                'message'
                            };
                            echo "\n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 190) {
                            echo "Cookie die !!?!\n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 405) {
                            echo "Tài khoản bị checkpoint\n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        $s = hoanthanhlike($idlike);
                        if ($s-> {
                            'mess'
                        } == 'Thành công, bạn đã được cộng 300 xu') {
                            $xu = getxu();
                            echo "\e[10;657;50m\033[1;36m『$vang$dem \033[1;36m』 \033[1;31m● \033[1;32m【\033[1;33mTT2K8\033[1;32m 】 \033[1;31m● \033[1;35m".$tim.date("H:i")." \033[1;31m ● \033[1;32mLIKE \033[1;31m● \033[47m\033[1;30mĐã ẩn ID nhiệm vụ\033[0m \033[1;31m● \033[1;32m300 \033[1;31m● \033[1;37m".$xu." xu"."\033[1;90m\e[0m\n";
                            
                               for($x = $delay;$x>=0;$x--	){
echo "                                \r";
        usleep( 100000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・)~>                $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・) ~>               $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)  ~>              $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;33m   >TT2K8< └(・ˇ_ˇ・)   ~>             $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)    ~>            $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;35m   >TT2K8< └(・ˇ_ˇ・)     ~>           $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)      ~>          $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・)       ~>         $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)        ~>        $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;33m   >TT2K8< └(・ˇ_ˇ・)         ~>       $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)          ~>      $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;35m   >TT2K8< └(・ˇ_ˇ・)           ~>     $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)            ~>    $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)             ~>   $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)              💘  $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;33m   >TT2K8< (・ˇ_ˇ・)               💘 $x GIÂY \r";
        usleep( 50000 );
		echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)               💘$x GIÂY \r";echo "\r";}
                            $dem = $dem + 1;
                        } elseif ($s -> {
                                'error'
                            } == 'Bạn chưa like ID này, vui lòng tải lại làm lại') {
                            echo $do."\r[".$dem.$do."]".$do."[".date("H:i").$do."]".$do." ["." LIKE ".$do."] ".$do."|"."ID:".$idlike." ->\r";
                        }
                    }}
                if ($like = $nv == 1) {
                    $listpost = listpost();
                    if (count($listpost) == 0) {
                        echo "Chưa có thêm nhiệm vụ, hãy đợi 3s và bấm tải lại danh sách vài lần xem có mới ko\r";
                        sleep(20);
                        continue;
                    }
                    foreach ($listpost as $id) {
                        if ($dem - 1 >= $_SESSION['doinick']) {
                            $spam = 1;
                            break;
                        }
                        $idsub = $id["idpost"];
                        //echo $idsub;
                        $g = follow($access_token, $idsub);
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 368) {
                            echo $do.$g-> {
                                'error'
                            }-> {
                                'message'
                            };
                            echo "\n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 190) {
                            echo "Cookie die!!?! \n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 405) {
                            echo "Tài khoản bị checkpoint\n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        $s = hoanthanhsub($idsub);
                        // print_r($s);
                        if ($s-> {
                            'mess'
                        } == 'Thành công, bạn được cộng 600 xu') {
                            $xu = getxu();
                            echo "\e[10;657;50m\033[1;36m『$vang$dem \033[1;36m』 \033[1;31m● \033[1;32m【\033[1;33mTT2K8\033[1;32m 】 \033[1;31m● \033[1;35m".$tim.date("H:i")." \033[1;31m ● \033[1;32mFOLLOW \033[1;31m● \033[47m\033[1;30mĐã ẩn ID nhiệm vụ\033[0m \033[1;31m● \033[1;32m600 \033[1;31m● \033[1;37m".$xu." xu"."\033[1;90m\e[0m\n";
                         
                               for($x = $delay;$x>=0;$x--	){
echo "                                \r";
        usleep( 100000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・)~>                $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・) ~>               $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)  ~>              $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;33m   >TT2K8< └(・ˇ_ˇ・)   ~>             $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)    ~>            $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;35m   >TT2K8< └(・ˇ_ˇ・)     ~>           $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)      ~>          $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・)       ~>         $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)        ~>        $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;33m   >TT2K8< └(・ˇ_ˇ・)         ~>       $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)          ~>      $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;35m   >TT2K8< └(・ˇ_ˇ・)           ~>     $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)            ~>    $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)             ~>   $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)              💘  $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;33m   >TT2K8< (・ˇ_ˇ・)               💘 $x GIÂY \r";
        usleep( 50000 );
		echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)               💘$x GIÂY \r";echo "\r";}
                            $dem = $dem + 1;
                        } elseif ($s -> {
                                'error'
                            } == 'Bạn chưa theo dõi nick này, vui lòng tải lại làm lại') {
                            echo "\r";
                            echo $do."[".$dem.$do."]".$do."[".date("H:i").$do."]".$do." ["."FOLLOW".$do."] ".$do."|"."ID:".$idsub." ->\r";
                        }}}
						if($nv == 3){
							$random=rand(1,2);
							if($random==1){
								$listpost = listpost();
                    if (count($listpost) == 0) {
                        echo "Chưa có thêm nhiệm vụ, hãy đợi 3s và bấm tải lại danh sách vài lần xem có mới ko\r";
                        sleep(20);
                        continue;
                    }
                    foreach ($listpost as $id) {
                        if ($dem - 1 >= $_SESSION['doinick']) {
                            $spam = 1;
                            break;
                        }
                        $idsub = $id["idpost"];
                        //echo $idsub;
                        $g = follow($access_token, $idsub);
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 368) {
                            echo $do.$g-> {
                                'error'
                            }-> {
                                'message'
                            };
                            echo "\n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 190) {
                            echo "Cookie die!!?! \n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 405) {
                            echo "Tài khoản bị checkpoint\n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        $s = hoanthanhsub($idsub);
                        // print_r($s);
                        if ($s-> {
                            'mess'
                        } == 'Thành công, bạn được cộng 600 xu') {
                            $xu = getxu();
                            echo "\e[10;657;50m\033[1;36m『$vang$dem \033[1;36m』 \033[1;31m● \033[1;32m【\033[1;33mTT2K8\033[1;32m 】 \033[1;31m● \033[1;35m".$tim.date("H:i")." \033[1;31m ● \033[1;32mFOLLOW \033[1;31m● \033[47m\033[1;30mĐã ẩn ID nhiệm vụ\033[0m \033[1;31m● \033[1;32m 600 \033[1;31m● \033[1;37m".$xu." xu"."\033[1;90m\e[0m\n";
                          
                              for($x = $delay;$x>=0;$x--	){
echo "                                \r";
        usleep( 100000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・)~>                $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・) ~>               $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)  ~>              $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;33m   >TT2K8< └(・ˇ_ˇ・)   ~>             $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)    ~>            $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;35m   >TT2K8< └(・ˇ_ˇ・)     ~>           $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)      ~>          $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・)       ~>         $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)        ~>        $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;33m   >TT2K8< └(・ˇ_ˇ・)         ~>       $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)          ~>      $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;35m   >TT2K8< └(・ˇ_ˇ・)           ~>     $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)            ~>    $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)             ~>   $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)              💘  $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;33m   >TT2K8< (・ˇ_ˇ・)               💘 $x GIÂY \r";
        usleep( 50000 );
		echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)               💘$x GIÂY \r";echo "\r";}
                            $dem = $dem + 1;
                        } elseif ($s -> {
                                'error'
                            } == 'Bạn chưa theo dõi nick này, vui lòng tải lại làm lại') {
                            echo "\r";
                            echo $do."[".$dem.$do."]".$do."[".date("H:i").$do."]".$do." ["."FOLLOW".$do."] ".$do."|"."ID:".$idsub." ->\r";
                        }}
					}
					if($random == 2){
						$listlike = listlike();
                    if (count($listlike) == 0) {
                        echo "Chưa có thêm nhiệm vụ, hãy đợi 3s và bấm tải lại danh sách vài lần xem có mới ko \r";
                        sleep(20);
                        continue;
                    }
                    foreach ($listlike as $listlike) {
                        if ($dem - 1 >= $_SESSION['doinick']) {
                            $spam = 1;
                            break;
                        }
                        $idlike = $listlike[('idpost')];
                        $g = like($access_token, $idlike);
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 368) {
                            echo $do.$g-> {
                                'error'
                            }-> {
                                'message'
                            };
                            echo "\n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 190) {
                            echo "Cookie die !!?!\n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 405) {
                            echo "Tài khoản bị checkpoint\n";
                            $tangdem = $tangdem - 1;
                            $_SESSION['doinick'] = $tangdem * $doinick;
                            $spam = 1;
                            break;
                        }
                        $s = hoanthanhlike($idlike);
                        if ($s-> {
                            'mess'
                        } == 'Thành công, bạn đã được cộng 300 xu') {
                            $xu = getxu();
                            echo "\e[10;657;50m\033[1;36m『$vang$dem \033[1;36m』 \033[1;31m● \033[1;32m【\033[1;33mTT2K8\033[1;32m 】 \033[1;31m● \033[1;35m".$tim.date("H:i")." \033[1;31m ● \033[1;32mLIKE \033[1;31m● \033[47m\033[1;30mĐã ẩn ID nhiệm vụ\033[0m \033[1;31m● \033[1;32m300 \033[1;31m● \033[1;37m".$xu." xu"."\033[1;90m\e[0m\n";
                            for($x = $delay;$x>=0;$x--	){
echo "                                \r";
        usleep( 100000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・)~>                $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・) ~>               $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)  ~>              $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;33m   >TT2K8< └(・ˇ_ˇ・)   ~>             $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)    ~>            $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;35m   >TT2K8< └(・ˇ_ˇ・)     ~>           $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)      ~>          $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;31m   >TT2K8< └(・ˇ_ˇ・)       ~>         $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)        ~>        $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;33m   >TT2K8< └(・ˇ_ˇ・)         ~>       $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)          ~>      $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;35m   >TT2K8< └(・ˇ_ˇ・)           ~>     $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)            ~>    $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;34m   >TT2K8< └(・ˇ_ˇ・)             ~>   $x GIÂY \r";
        usleep( 50000 );
        echo "\033[1;36m   >TT2K8< └(・ˇ_ˇ・)              💘  $x GIÂY \r";
        usleep( 100000 );
        echo "\033[1;33m   >TT2K8< (・ˇ_ˇ・)               💘 $x GIÂY \r";
        usleep( 50000 );
		echo "\033[1;32m   >TT2K8< └(・ˇ_ˇ・)               💘$x GIÂY \r";echo "\r";}
                            $dem = $dem + 1;
                        } elseif ($s -> {
                                'error'
                            } == 'Bạn chưa like ID này, vui lòng tải lại làm lại') {
                            echo $do."\r[".$dem.$do."]".$do."[".date("H:i").$do."]".$do." ["." LIKE ".$do."] ".$do."|"."ID:".$idlike." ->\r";
                        }
                    }	
							}
							
						}
            }} else {
            echo "$do Cấu hình $tenfb thất bại, vui lòng thêm ID: $idfb vào cấu hình\n"; continue;
        }
    }}
function like($access_token, $id) {
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
    curl_setopt($ch, CURLOPT_COOKIE, $access_token);
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
function listlike() {
    $g22 = ('https://tuongtaccheo.com/kiemtien/getpost.php');
    $f23 = array(
        ('Host: tuongtaccheo.com'),
        ('accept: application/json, text/javascript, *').('/').('*; q=0.01'),
        ('x-requested-with: XMLHttpRequest'),
        ('user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36'),
        ('referer: https://tuongtaccheo.com/kiemtien/'),);
    $h24 = curl_init();
    curl_setopt_array($h24, array(
        CURLOPT_URL => $g22,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        // CURLOPT_POST=>1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $f23,
        CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_ENCODING => TRUE));
    return json_decode(curl_exec($h24), true);
}
function listpost() {
    $url = "https://tuongtaccheo.com/kiemtien/subcheo/getpost.php";
    $head = array(
        "Host: tuongtaccheo.com",
        "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "referer: https://tuongtaccheo.com/kiemtien/subcheo/"
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    return json_decode(curl_exec($ch), true);
}
function hoanthanhsub($idsub) {
    $url = ('https://tuongtaccheo.com/kiemtien/subcheo/nhantien.php');
    $f13 = ('id=').$idsub;
    $head = array(
        ('Host: tuongtaccheo.com'),
        ('content-length: ').strlen($f13),
        ('x-requested-with: XMLHttpRequest'),
        ('user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36'),
        ('content-type: application/x-www-form-urlencoded; charset=UTF-8'),
        ('origin: https://tuongtaccheo.com'),
        ('referer: https://tuongtaccheo.com/kiemtien/subcheo/'),
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $f13,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_ENCODING => TRUE));
    $nhan = curl_exec($ch);
    curl_close($ch);
    return json_decode($nhan);
}
function hoanthanhlike($idlike) {
    $url = ('https://tuongtaccheo.com/kiemtien/nhantien.php');
    $f13 = ('id=').$idlike;
    $head = array(
        ('Host: tuongtaccheo.com'),
        ('content-length: ').strlen($f13),
        ('x-requested-with: XMLHttpRequest'),
        ('user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36'),
        ('content-type: application/x-www-form-urlencoded; charset=UTF-8'),
        ('origin: https://tuongtaccheo.com'),
        ('referer: https://tuongtaccheo.com/kiemtien/'),
        ('cookie: ').$ckttc,
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $f13,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_ENCODING => TRUE));
    $nhan = curl_exec($ch);
    curl_close($ch);
    return json_decode($nhan);
}
function follow($access_token, $idsub) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idsub.'/subscribers');
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
    curl_setopt($ch, CURLOPT_COOKIE, $access_token);
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
function getxu() {
    $url = "https://tuongtaccheo.com/home.php";
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_PORT => 443,
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_ENCODING => "",
        CURLOPT_SSL_VERIFYPEER => 1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_COOKIEFILE => "TTC.txt"
    ));
    $data = curl_exec($curl);
    curl_close($curl);
    preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
    $sodu = $sd["1"];
    return $sodu;
}
