error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$res="\033[0m";
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
\033[1;31m[".$luc."●".$do."] ".$trang."=> \033[1;97mMoMo: 0328485126
\033[1;33m─────────────────────────────────────────────────────────────────\n";
@system("clear");
echo $banner;
for ($c = 0;$c <= 9;$c++){echo $vang."=";usleep(25000);echo $do."=";usleep(25000);echo $luc."=";usleep(25000);echo $trang."=";usleep(25000); 
}echo"\n";
echo "\033[1;31m● \033[1;32mNhập Cookie Facebook: \033[1;33m";
    $cookie = trim(fgets(STDIN));
    echo "• Nhập Delay: ";
    $a = trim(fgets(STDIN));
 
    system('clear');
    echo $banner;
    while (true) {
        $url = "https://mbasic.facebook.com/";
        $header = array(
            "Host: mbasic.facebook.com",
            "upgrade-insecure-requests: 1",
            "save-data: on",
            "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1803) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
            "sec-fetch-site:same-origin",
            "sec-fetch-mode:navigate",
            "sec-fetch-user:?1",
            "sec-fetch-dest:document",
            "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
            "cookie:$cookie",
        );
        $url = "https://mbasic.facebook.com/pokes/?ref_component=mbasic_bookmark&ref_page=XMenuController";
        $data = '{"Email":"lumanhgioi.vn@gmail.com"}';
        $mr = curl_init();
        curl_setopt_array($mr, array(
            CURLOPT_PORT => "443",
            CURLOPT_URL => "$url",
            CURLOPT_ENCODING => "",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
            // CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $header
        ));
        $mr2 = curl_exec($mr);
        curl_close($mr);
        $json = json_decode($mr2, true);
        $id = explode('/pokes/inline/?', $mr2)[1];
        $id = explode('"', $id)[0];
        $ok = explode('poke_target=', $mr2)[1];
        $ok = explode('&', $ok)[0];
        $url = 'https://mbasic.facebook.com/pokes/inline/?' . htmlspecialchars_decode($id) . '';
 
        $mr = curl_init();
        curl_setopt_array($mr, array(
            CURLOPT_PORT => "443",
            CURLOPT_URL => "$url",
            CURLOPT_ENCODING => "",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
            // CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $header
        ));
        $mr2 = curl_exec($mr);
        curl_close($mr);
        $json = json_decode($mr2, true);
        $stt=$stt+1;
        echo $do . "\033[1;33m[\033[1;36m$stt\033[1;33m]\033[1;37m =>\033[1;32m Đã Chọc Thành Công \033[1;37m ID\033[1;35m : $ok\n";
 for ($c = 0;$c <= 13;$c++){echo $vang."=";usleep(25000);echo $do."=";usleep(25000);echo $luc."=";usleep(25000);echo $trang."=";usleep(25000); 
}echo"\n";
for ($i=$a;$i>-1;$i--){
echo "● Đợi $i Giây \r";
sleep(1);
        }
    }
