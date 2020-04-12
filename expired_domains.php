<!-- NinjaNetwork / Obir.Ninja -->
<?php
// Edit (add your expireddomains.net account cookie)
$cookiereme = "T13Rv55%3A%7C%3AhRZzTcAef2JM693XJGBzKdxhcdPkWdrLLPMSrduH";
$cookieExpiredDomainssessid = "te1th052f3i25gadgbd7o7vt42";
// Edit (add your expireddomains.net account cookie)
$uzantisec = $_GET["uzanti"];
sleep(2);
//coded by v4r1able & t13r
if(isset($_GET["u"])) {
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://member.expireddomains.net".$_GET["u"]."");
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_COOKIE, "reme=".$cookiereme.";");
curl_setopt($curl, CURLOPT_COOKIE, "ExpiredDomainssessid=".$cookieExpiredDomainssessid.";");
$girlo = curl_exec($curl);
preg_match_all('@data-clipboard-text="(.*?)"@si',$girlo,$cek);
preg_match_all('@<a rel="nofollow" class="next" href="(.*?)">Next Page &#187;</a>@si',$girlo,$cek_);
echo $cek[1][0];
$v4_t1 = fopen('v4_t1.txt', 'a+');
fwrite($v4_t1, $cek[1][0]);
fclose($v4_t1);
echo '<br><br>';
echo '<meta http-equiv="refresh" content="30;URL=expired_domains.php?uzanti='.$uzantisec.'&u='.$cek_[1][0].'">';
echo '<meta http-equiv="refresh" content="30;URL=expired_domains.php?uzanti='.$uzantisec.'&u='.$cek_[1][0].'">';
echo '<meta http-equiv="refresh" content="30;URL=expired_domains.php?uzanti='.$uzantisec.'&u='.$cek_[1][0].'">';
curl_close($curl);
exit;
}
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://member.expireddomains.net/domains/".$uzantisec."/?flimit=300");
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_COOKIE, "reme=".$cookiereme.";");
curl_setopt($curl, CURLOPT_COOKIE, "ExpiredDomainssessid=".$cookieExpiredDomainssessid.";");
$girlo = curl_exec($curl);
preg_match_all('@data-clipboard-text="(.*?)"@si',$girlo,$cek);
preg_match_all('@<a rel="nofollow" class="next" href="(.*?)">Next Page &#187;</a>@si',$girlo,$cek_);
echo $cek[1][0];
$v4_t1 = fopen('v4_t1.txt', 'a+');
fwrite($v4_t1, $cek[1][0]);
fclose($v4_t1);
echo '<br><br>';
echo '<meta http-equiv="refresh" content="30;URL=expired_domains.php?uzanti='.$uzantisec.'&u='.$cek_[1][0].'">';
echo '<meta http-equiv="refresh" content="30;URL=expired_domains.php?uzanti='.$uzantisec.'&u='.$cek_[1][0].'">';
echo '<meta http-equiv="refresh" content="30;URL=expired_domains.php?uzanti='.$uzantisec.'&u='.$cek_[1][0].'">';
curl_close($curl);
?>
