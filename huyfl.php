error_reporting(0);
$red = "[1;31m";
$banner = "
";
$tim = "[0;35m";
$xnhac = "[1;96m";
$den = "[1;90m";
$do = "[1;91m";
$luc = "[1;92m";
$vang = "[1;93m";
$xduong = "[1;94m";
$hong = "[1;95m";
$trang = "[1;97m";
$end = "[0m";
$black = "[0;30m";
$blackb = "[1;30m";
$white = "[0;37m";
$whiteb = "[1;37m";
$red = "[0;31m";
$redb = "[1;31m";
$green = "[0;32m";
$greenb = "[1;32m";
$yellow = "[0;33m";
$yellowb = "[1;33m";
$syan = "[1;36m";
$blue = "[0;34m";
$blueb = "[1;34m";
$purple = "[0;35m";
$purpleb = "[1;35m";
$lightblue = "[0;36m";
$lightblue = "[1;35m";
$lightblueb = "[1;36m";
$input = array($d2 = "[1;36m", $tmd3 = "[1;37m", $tmd4 = "[1;37m", $tmd5 = "[0;31m", $tmd6 = "[1;31m", $tmd7 = "[0;32m", $tmd8 = "[1;32m", $tmd9 = "[0;33m", $tmd10 = "[1;33m", $tmd11 = "[0;34m", $tmd12 = "[1;34m", $tmd13 = "[0;35m", $tmd14 = "[1;35m", $tmd15 = "[0;36m", $tmd16 = "[1;36m");
$rand_keys = array_rand($input, 10);
$input = array($tmd1 = "[1;46m", $tmd2 = "[1;36m", $tmd3 = "[1;37m", $tmd4 = "[1;37m", $tmd5 = "[0;31m", $tmd6 = "[1;31m", $tmd7 = "[0;32m", $tmd8 = "[1;32m", $tmd9 = "[0;33m", $tmd10 = "[1;33m", $tmd11 = "[0;34m", $tmd12 = "[1;34m", $tmd13 = "[0;35m", $tmd14 = "[1;35m", $tmd15 = "[0;36m", $tmd16 = "[1;36m");
$rand_keys = array_rand($input, 15);
$red = "[1;31m";
$green = "[1;32m";
$yellow = "[1;33m";
$blud = "[1;34m";
$res = "[1;35m";
$nau = "[1;36m";
$trang = "[1;37m";
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
\033[1;31m[".$luc."●".$do."] ".$trang."=> \033[1;97mMoMo: \033[1;93m0328485126
\033[1;33m─────────────────────────────────────────────────────────────────\n";
@system('clear');
echo $banner;
echo $green . "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;36m =>\033[1;32m Nhập Cookie: \033[1;37m";
$cookie = trim(fgets(STDIN));
$nam = "1";
$headersfb = array("Host: mbasic.facebook.com", "upgrade-insecure-requests: 1", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 7.1.1; CPH1729 Build/N6F26Q; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/86.0.4240.198 YaBrowser/19.6.0.158 (lite) Mobile Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: same-origin", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cookie: $cookie",);
$urlcheckfb = "https://mbasic.facebook.com/";
$headersfb = array("Host: mbasic.facebook.com", "upgrade-insecure-requests: 1", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 7.1.1; CPH1729 Build/N6F26Q; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/86.0.4240.198 YaBrowser/19.6.0.158 (lite) Mobile Safari/537.36", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: same-origin", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cookie: $cookie",);
$curlcheckfb = curl_init();
curl_setopt_array($curlcheckfb, array(CURLOPT_URL => "$urlcheckfb", CURLOPT_ENCODING => "", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 30, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $headersfb));
$curlcheckfb1 = curl_exec($curlcheckfb);
curl_close($curlcheckfb);
$uid1 = explode('/><input type="hidden" name="target" value="', $curlcheckfb1) [1];
$uid = explode('"', $uid1) [0];
if ($uid != 1 && $uid != '') {
system("clear");
echo $banner;
echo $logo;
echo $green . "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;36m =>\033[1;33m Id Fb Của Bạn Là:\033[1;35m $uid 
";
sleep(1);
echo $green . "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;36m =>\033[1;32m Nhập Delay Khi Hủy:\033[1;33m ";
    $delay = trim(fgets(STDIN));
sleep(1);
    echo "\033[1;33m─────────────────────────────────────────────────────────────────\n";
    $urllink = "https://mbasic.facebook.com/" . $uid . "/allactivity/?category_key=followcluster";
    while ($stop != "0") {
        $curllink = curl_init();
        curl_setopt_array($curllink, array(CURLOPT_URL => "$urllink", CURLOPT_ENCODING => "", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 30, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $headersfb));
        $curllink1 = curl_exec($curllink);
        curl_close($curllink);
        $activity2 = explode('<span class="cz bt cv"><a href="', $curllink1) [1];
        $activity1 = explode('">Xóa</', $activity2) [0];
        if ($activity1 != "") {
            $activity = explode('amp;', $activity1);
            $urlactivity_log = "https://mbasic.facebook.com" . $activity[0] . $activity[1] . $activity[2] . $activity[3] . $activity[4] . $activity[5] . $activity[6];
            $curlactivity_log = curl_init();
            curl_setopt_array($curlactivity_log, array(CURLOPT_URL => "$urlactivity_log", CURLOPT_ENCODING => "", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 30, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $headersfb));
            $curlactivity_log1 = curl_exec($curlactivity_log);
            curl_close($curlactivity_log);
            $delete2 = explode('/allactivity/delete/?', $curlactivity_log1);
            $delete1 = explode('"', $delete2[1]) [0];
            $delete = explode("amp;", $delete1);
            $urldelete = "https://mbasic.facebook.com/allactivity/delete/?" . $delete[0] . $delete[1] . $delete[2] . $delete[3] . $delete[4] . $delete[5] . $delete[6] . $delete[7];
            $curldelete = curl_init();
            curl_setopt_array($curldelete, array(CURLOPT_URL => "$urldelete", CURLOPT_ENCODING => "", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 30, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $headersfb));
            $curldelete1 = curl_exec($curldelete);
            curl_close($curldelete);
            if ($curldelete1 == "") sleep(1);
        } else {
            $link2 = explode('<a class="cn x co" href="/story.php?story_fbid=', $curllink1) [1];
            $link1 = explode('&amp;', $link2);
            if ($link1[0] == "") {
                $month2 = explode("/$uid/allactivity/?category_key=followcluster&amp;section_id=month", $curllink1) [$nam];
                $nam++;
                $month1 = explode('"', $month2) [0];
                $month = explode("amp;", $month1);
                $urllink = "https://mbasic.facebook.com/" . $uid . "/allactivity/?category_key=followcluster&section_id=month" . $month[0] . $month[1] . $month[2] . $month[3];
                sleep(1);
                if ($urllink == "https://mbasic.facebook.com/" . $uid . "/allactivity/?category_key=followcluster&section_id=month") {
                    exit();
                }
            } else {
                $su = explode("amp;", htmlspecialchars_decode($link1[1])) [0];
                $id = explode("amp;", htmlspecialchars_decode($link1[2])) [0];
                $link = $link1[0] . "&" . $su . "&" . $id;
                $urlprofile = "https://mbasic.facebook.com/story.php?story_fbid=" . $link;
                $curlprofile = curl_init();
                curl_setopt_array($curlprofile, array(CURLOPT_URL => "$urlprofile", CURLOPT_ENCODING => "", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 30, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $headersfb));
                $curlprofile1 = curl_exec($curlprofile);
                curl_close($curlprofile);
                $uid1 = explode('</strong> đã theo dõi <strong><a href="', $curlprofile1) [1];
                $uid = explode('">', $uid1);
                $ten1 = explode(">", $uid[1]) [0];
                $ten = explode("<", $ten1) [0];
                $urltcn = "https://mbasic.facebook.com" . explode('amp;', $uid[0]) [0] . explode('amp;', $uid[0]) [1];
                $curltcn = curl_init();
                curl_setopt_array($curltcn, array(CURLOPT_URL => "$urltcn", CURLOPT_ENCODING => "", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 30, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $headersfb));
                $curltcn1 = curl_exec($curltcn);
                curl_close($curltcn);
                $owner1 = explode("/mbasic/more/", $curltcn1) [1];
                $owner = explode('"', $owner1) [0];
                sleep(1);
                $urlowner = "https://mbasic.facebook.com/mbasic/more/" . $owner;
                $curlowner = curl_init();
                curl_setopt_array($curlowner, array(CURLOPT_URL => "$urlowner", CURLOPT_ENCODING => "", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 30, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $headersfb));
                $curlowner1 = curl_exec($curlowner);
                curl_close($curlowner);
                $un3 = explode("/a/subscriptions/remove?", $curlowner1) [1];
                $un2 = explode('"', $un3) [0];
                $un1 = explode('amp;', $un2);
                $urlun = "https://mbasic.facebook.com/a/subscriptions/remove?" . $un1[0] . $un1[1] . $un1[2] . $un1[3];
                $curlun = curl_init();
                curl_setopt_array($curlun, array(CURLOPT_URL => "$urlun", CURLOPT_ENCODING => "", CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_TIMEOUT => 30, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => $headersfb));
$curlun1 = curl_exec($curlun);
curl_close($curlun);
if ($curlun1 == "") {
echo $green . " Đã Hủy Follow:\033[1;33m $ten \n";
sleep(1);}
}
}
for ($time = $delay;$time > - "1";$time--){
echo "\033[1;37m Delay UnFollow:\033[1;33m $time \r";
            sleep(1);
echo "\r                                                 \r";
        }
    }
} else {
exit("\033[1;37m~\033[1;31mNhập Sai Cookie\n");
}
