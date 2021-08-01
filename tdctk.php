error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$address = 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36';
$logo="\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;33mTool Auto TraoDoiCheo Token

@system("clear");
eval(file_get_contents("https://keyvip.tk/logo.php"));
echo $logo;
echo " \033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;32m Nhập Tài Khoản TDC:\033[1;33m ";
$user=trim(fgets(STDIN));
echo " \033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;32m Nhập Cookie TDC:\033[1;37m ";
$_SESSION['cookie'] = trim(fgets(STDIN));
$login = tokenTDC("https://traodoicheo.com/home");
$check = explode(' ',explode('Chào mừng ', $login)[1])[0];
if ($check == NULL){
echo "\033[1;37m~\033[1;31m Đăng Nhập Thất Bại, Hãy Xem Lại Cookie\n";
exit;
} else {
echo "\r\033[1;37m~\033[1;32m Đăng Nhập Thành Công!\r";
sleep(2);
}

$_SESSION['tokenTDC'] = explode('"',explode('csrf-token" content="', $login)[1])[0];
$_SESSION['xu'] = explode('<',explode('"coins">', $login)[1])[0];
$_SESSION['xu'] = str_replace(',', '', $_SESSION['xu']);

echo "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo " \033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;32m Nhập Token Facebook: \033[1;37m";
$_SESSION['token'] = trim(fgets(STDIN));

echo " \033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;34m Sau Mấy Nhiệm Vụ Thì Bật Kháng Block: \033[1;32m";
$nhiemvu = trim(fgets(STDIN));
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;34mSau\033[1;32m $nhiemvu \033[1;34mNhiệm Vụ, Kháng Block Nhiêu Giây: \033[1;32m";
$nghingoi = trim(fgets(STDIN));
system("clear");
$xu=$_SESSION['xu'];

echo $logo;
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => \033[1;32mTên Tài Khoản: $user\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m => \033[1;33mXu Hiện Tại: ".$xu."xu\n";
echo "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập [1] Chế Độ Follow
\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập [2] Chế Độ Like
\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập [3] Chế Độ CMT
\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập [6] Chế Độ Full
\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập Chế Độ : \033[1;35m";
$chedo = trim(fgets(STDIN));
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập Time Delay : \033[1;35m";
$_SESSION['waittime'] = trim(fgets(STDIN));
while ($_SESSION['waittime'] < 0) {
    echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mKhông Được Dưới 0s : \033[1;35m";
    $_SESSION['waittime'] = trim(fgets(STDIN));
}
echo "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n";

while (true) {
    if ($_SESSION['timenghi'] >= $nhiemvu) {
        chongBlock($nghingoi);
        $_SESSION['timenghi'] = "0";
    } else {
        if ($chedo == '1') {
            chaysub($address);
        } elseif ($chedo == '2') {
            chaylike($address);
        } elseif ($chedo == '3') {
            chayCMT($address);
         } elseif ($chedo == '4') {
         chayCMT($address);
         chaylike($address);
         chaysub($address);
        } else {
            exit("\033[1;37m~\033[1;31mLựa Chọn Không Xác Định\n");
        }
    }
}

function chaysub($address)
{
    $info  = listpost($address, "follows");
    $id_post = $info["data"]["0"]["post_id"];
    if ($id_post == NULL) {
        echo "\033[1;34m~ Sub tạm thời hết nhiệm vụ. Tool đang tìm nhiệm vụ mới\r";
    } else {
		$id      = $info["data"]["0"]["id"];
        $g       = request('https://graph.facebook.com/' . $id_post . '/subscribers?method=POST&access_token=' . $_SESSION['token']);
        if ($g["error"]["code"] == 190) {
            echo "\033[1;31m~ " . $g["error"]["message"] . "\n";
			exit;
        }
        elseif ($g["error"]["code"] == 368) {
            echo "\033[1;31m~ " . $g["error"]["message"] . "\n";
			exit;
        }
        $hoanthanh = hoanthanh( "follows", $id);
		$err       = explode(',',explode('success":', $hoanthanh)[1])[0];
        if ($err == 'false') {
            echo "\033[1;37m~\033[1;33m[\033[1;31mFOLLOW\033[1;33m]\033[1;37m:\033[1;31m Thất bại ID $id_post.\r";
        }
        elseif ($err == 'true') {
            $thoigian = date('H:i');
            $_SESSION['xu'] += 200;
            $_SESSION['nhiemvu'] += 1;
            $_SESSION['timenghi'] += 1;
            echo "\033[1;33m[\033[1;36m" . $_SESSION['nhiemvu'] . "\033[1;33m] \033[1;37m● \033[1;30m$thoigian \033[1;37m● \033[1;32mFOLLOW \033[1;37m● \033[1;35m$id_post \033[1;37m● \033[1;34m+200 \033[1;37m● \033[1;33m" . $_SESSION['xu'] . "\n";
            loadtime();
        }
    }
}

function chaylike($address)
{
    $info  = listpost($address, "likes");
    $id_post = $info["data"]["0"]["post_id"];
    if ($id_post == NULL) {
        echo "\033[1;34m~ Like tạm thời hết nhiệm vụ. Tool đang tìm nhiệm vụ mới\r";
    } else {
		$id      = $info["data"]["0"]["id"];
        $g       = request('https://graph.facebook.com/' . $id_post . '/likes?method=post&access_token=' . $_SESSION['token']);
        if ($g["error"]["code"] == 190) {
            echo "\033[1;31m~ " . $g["error"]["message"] . "\n";
			exit;
        }
        elseif ($g["error"]["code"] == 368) {
            echo "\033[1;31m~ " . $g["error"]["message"] . "\n";
			exit;
        }
        $hoanthanh = hoanthanh( "likes", $id);
		$err       = explode(',',explode('success":', $hoanthanh)[1])[0];
        if ($err == 'false') {
            echo "\033[1;37m~\033[1;33m[\033[1;31mLIKE\033[1;33m]\033[1;37m:\033[1;31m Thất bại ID $id_post.\r";
        }
        elseif ($err == 'true') {
            $thoigian = date('H:i');
            $_SESSION['xu'] += 100;
            $_SESSION['nhiemvu'] += 1;
            $_SESSION['timenghi'] += 1;
            echo "\033[1;33m[\033[1;36m" . $_SESSION['nhiemvu'] . "\033[1;33m] \033[1;37m● \033[1;30m$thoigian \033[1;37m● \033[1;32mLIKE \033[1;37m● \033[1;35m$id_post \033[1;37m● \033[1;34m+100 \033[1;37m● \033[1;33m" . $_SESSION['xu'] . "\n";
            loadtime();
        }
    }
}

function chayCMT($address)
{
    $info  = listpost($address, "comments");
    $id_post = $info["data"]["0"]["post_id"];
    if ($id_post == NULL) {
        echo "\033[1;34m~ CMT tạm thời hết nhiệm vụ. Tool đang tìm nhiệm vụ mới\r";
    } else {
		$id      = $info["data"]["0"]["id"];
        $msg     = $info["data"]["0"]["comment"];
		$msg     = json_decode($msg);
        $msg     = urlencode($msg[0]);
        $g       = request('https://graph.facebook.com/' . $id_post . '/comments?message=' . urlencode($msg) . '&method=post&access_token=' . $_SESSION['token']);
        if ($g["error"]["code"] == 190) {
            echo "\033[1;31m~ " . $g["error"]["message"] . "\n";
			exit;
        }
        elseif ($g["error"]["code"] == 368) {
            echo "\033[1;31m~ " . $g["error"]["message"] . "\n";
			exit;
        }
        $hoanthanh = hoanthanh( "likes", $id);
		$err       = explode(',',explode('success":', $hoanthanh)[1])[0];
        if ($err == 'false') {
            echo "\033[1;37m~\033[1;33m[\033[1;31mCMT\033[1;33m]\033[1;37m:\033[1;31m Thất bại ID $id_post.\r";
        }
        elseif ($err == 'true') {
            $thoigian = date('H:i');
            $_SESSION['xu'] += 200;
            $_SESSION['nhiemvu'] += 1;
            $_SESSION['timenghi'] += 1;
            echo "\033[1;33m[\033[1;36m" . $_SESSION['nhiemvu'] . "\033[1;33m] \033[1;37m● \033[1;30m$thoigian \033[1;37m● \033[1;32mCMT \033[1;37m● \033[1;35m$id_post \033[1;37m● \033[1;34m+200 \033[1;37m● \033[1;33m" . $_SESSION['xu'] . "\n";
            loadtime();
        }
    }
}

function listpost($address, $hinhthuc)
{
    $head = array(
        "authority: traodoicheo.com",
        "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
        "x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36 OPR/71.0.3770.148",
		"referer: https://traodoicheo.com/earn/".$hinhthuc
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://traodoicheo.com/api/".$hinhthuc,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIE => $_SESSION['cookie'],
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = curl_exec($ch);
    curl_close($ch);
    return json_decode($a, true);
}

function hoanthanh( $hinhthuc, $id)
{
    $head = array(
        "authority: traodoicheo.com",
        "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
        "x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36 OPR/71.0.3770.148",
		"referer: https://traodoicheo.com/earn/".$hinhthuc,
		"x-csrf-token: ".$_SESSION['tokenTDC']
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://traodoicheo.com/api/".$hinhthuc);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36 OPR/71.0.3770.148");
    $data = array(
        'id' => $id
    );
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_COOKIE, $_SESSION['cookie']);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    $a = curl_exec($ch);
    curl_close($ch);
    return $a;
}

function tokenTDC($url)
{
    $head = array(
        "authority: traodoicheo.com",
        "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
        "x-requested-with: XMLHttpRequest",
		"user-agent: " . $address
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
		CURLOPT_COOKIE => $_SESSION['cookie'],
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = curl_exec($ch);
    curl_close($ch);
    return $a;
}

function request($url)
{
    $head = array(
        "authority: m.facebook.com",
        "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
        "x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = curl_exec($ch);
    curl_close($ch);
    return json_decode($a, true);
}

function chongBlock($nghingoi)
{
    for ($x = $nghingoi; $x >= 0; $x--) {
        echo "\033[1;37m~ \033[1;36mĐang Dừng Thời Gian Kháng Block\033[1;33m ".$x."\033[1;36m Giây\r";
        sleep(1);
    }
}

function loadtime()
{
    for ($x = $_SESSION['waittime']; $x >= 0; $x--) {
        echo "\033[1;37m~\033[1;37m Vui Lòng Chờ ".$x."\033[1;37m Giây!\r";
        sleep(1);
    }
}
