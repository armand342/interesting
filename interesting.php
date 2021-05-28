<?php

system ('rm -rf interesting');
system('rm interesting.php');
//system ('rm cookie.txt');
system('clear');
error_reporting(0);
system('clear');

//include 'cfg.php';
//system('rm key.txt');
system('clear');
system("clear");
//error_reporting(0);
$hitam = "\033[0;30m";
$merah = "\033[1;31m";
$biru = "\033[1;34m";
$hijau = "\033[1;32m";
$kuning = "\033[1;33m";
$putih = "\033[1;37m";
$pink = "\033[1;95m";

//latar
$hitam1 = "\033[0;100m";
$merah1 = "\033[1;101m";
$biru1 = "\033[1;104m";
$hijau1 = "\033[1;102m";
$kuning1 = "\033[1;103m";
$putih1 = "\033[1;107m";
$nc = "\033[0m";

/* START COLOR */
$Black = "\033[0;30m";
$Black2 = "\033[1;30m";
$Red = "\033[0;31m";
$Red2 = "\033[1;31m";
$Green = "\033[0;32m";
$Green2 = "\033[1;32m";
$Yellow = "\033[0;33m";
$Yellow2 = "\033[1;33m";
$Blue = "\033[0;34m";
$Blue2 = "\033[1;34m";
$Purple = "\033[0;35m";
$Purple2 = "\033[1;35m";
$Cyan = "\033[0;36m";
$Cyan2 = "\033[1;36m";
$White = "\033[0;37m";
$White2 = "\033[1;37m";

//date_default_timezone_set("Asia/Jayapura");



//system("rm cookie.txt");

//error_reporting(0);



function url($url) {
	//include 'cfg.php';
	$headers = array();
	$headers[] = "";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$res = curl_exec($ch);
	return $res;
}

$res = url("https://controlc.com/fc929376");
//echo $res."\n";exit;
$link1 = explode('content="[tpb]', $res);
$link = explode('Password:', $link1[1]);
//echo $link[0]."\n";
$pw1 = explode('Password: ', $res);
$pw = explode(' [/tpb]', $pw1[1]);
//echo $pass[0]."\n";
$note = $link[0];
$pass = $pw[0];
if ($pass == "off") {
	$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
} else {
	$o = "\033[1;32m[ONLINE]";
}
if ($pass == "update") {
	$o = "\033[1;32m[\033[1;91mUPDATE\033[1;92m]";
}
if ($res == "") {
	$o = "\033[1;37m[\033[1;36mERROR\033[1;37m] ";
}
$lin = "$Green2=====================================================================================\n";
$del = date("D");
$date = date("m/d/Y");
//date_default_timezone_set('Asia/jayapura');
$currenttime = date('h:i:s A l ', time());
$banner = "$Cyan2
                ███████╗ █████╗ ██╗  ██╗██████╗  █████╗  █████╗  █████╗
                ╚══███╔╝██╔══██╗██║  ██║██╔══██╗██╔══██╗██╔══██╗██╔══██╗
                  ███╔╝ ███████║███████║██████╔╝███████║╚██████║╚██████║
                 ███╔╝  ██╔══██║██╔══██║██╔══██╗██╔══██║ ╚═══██║ ╚═══██║
                ███████╗██║  ██║██║  ██║██║  ██║██║  ██║ █████╔╝ █████╔╝
                ╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚════╝  ╚════╝
$Green2=======================================>$kuning$del$Green2<=========================================$kuning
[+] Creator        : Zahra99                                                      [+]
[+] Telegram       : @nisa_zahra99                                                [+]
[+] Whatsapp       : 081240020785                                                 [+]
[+] Donation DOGE  : DNpXWiwZW7YBYNYD892BNi9NUPYA5fEaFt                           [+]
$Green2=====================================================================================$Cyan2
[×] Script         :  INTERESTING                                                 [×]
[×] Script Status  :  $o                                      $Cyan2              [×]
$Green2===============================>$pink $currenttime$hijau<==============================\n\n";

if ($res == "") {
	system('clear');
	echo $banner;
	echo "$merah KONEKSI TERPUTUS.\n";
	echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
	echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
	echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
	exit;
}
if ($pass == 'update') {
	system("clear");
	echo $hijau;
	echo $banner;
	sleep(1);
	echo "$Cyan2 Info : $note\n";
	echo "$biru ◼ \033[1;91mAuthor Telah Melakukan Perubahan Terhadap Script \n";
	echo "$biru ◼ \033[1;95mSilahkan Hubungi Author Untuk Informasi Update \n";

	exit;
}

if ($pass == 'off') {
	system("clear");
	echo $banner;

	sleep(1);
	echo "$Cyan2 Info : $note\n";
	echo "$merah Script Telah Dinonaktifkan Oleh Pembuat \n";
	exit;
}
if ($pass == "run") {


	$res = url("https://controlc.com/d7770750");
	$pewe = explode('[tpb]', $res)[1];
	$pewe = explode('[', $pewe)[0];
	//echo $pewe;exit;
	//	$url = $pewe;

	$res = url($pewe);
	$link1 = explode('Link: ', $res);
	$link = explode(' Password:', $link1[1]);

	$pw1 = explode('[tpcolor=#FF0000]', $res);
	$pw = explode('[', $pw1[1]);
	//	echo $pw[0]."\n";
	//	exit;
	//echo $pass[0]."\n";

	$pass = $pw[0];

	$read = file_get_contents("key.txt");
	if ($read == $pass) {
		system('clear');
		echo $banner;
		//echo "$Cyan2 Info : $note\n";
		echo "$hijau UPLOADING PASSWORD •\r";
		sleep(1);
		echo "$hijau UPLOADING PASSWORD • •\r";
		sleep(1);
		echo "$hijau UPLOADING PASSWORD • • •\r";
		sleep(1);
	}
	if ($read !== $pass) {
		system ('clear');
		echo $banner;
		echo "\n $merah Visit This Link To Get Password :$hijau $link[0]\n";
		echo "$kuning  Password :$hitam \r";
		$p = trim(fgets(STDIN));

		system ('clear');
		echo $banner;
		//echo "$Cyan2 Info : $note\n";
		echo "$hijau CHECKING PASSWORD •\r";
		sleep(1);
		echo "$hijau CHECKING PASSWORD • •\r";
		sleep(1);
		echo "$hijau CHECKING PASSWORD • • •\r";
		sleep(1);
		if ($p == "") {
			exit;
		}

		if ($pass == $p) {
			$save = fopen("key.txt", "w");
			fwrite($save, $p);
			fclose($save);
			system('clear');
			echo $banner;
			//echo "$Cyan2 Info : $note\n";
			echo $kuning ." [".$putih."√".$kuning."]".$hijau." OPEN SCRIPT SUCCESS            \r";
			sleep (3);
		} else {
			system('clear');
			echo $banner;
			echo $kuning ." [".$merah."x".$kuning."]".$merah." PASSWORD WRONG \n";
			exit;
		}
	}
	$res = url("https://controlc.com/fc929376");
if ($res == "") {
	system('clear');
	echo $banner;
	echo "$merah KONEKSI TERPUTUS.\n";
	echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
	echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
	echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
	exit;
}
	if (!file_exists('cfg.php')) {
		system('clear');
		echo $banner;

		echo $lin;

		echo "$pink [".$putih."≡$pink]$kuning=>$Cyan2 Login\n\n";
		echo "$merah Note :$putih Nomor Hp di mulai dari 62 tanpa tand (+)$merah contoh :$putih 628xxxxxxxxxx. \n\n";
		echo "$hijau No Hp :$putih \n";
		$no = trim(fgets(STDIN));
		echo "$hijau Password :$putih \n";
		$pass = trim(fgets(STDIN));
		$save = fopen('cfg.php', 'w');
		fwrite($save, "<?
      ");
		fwrite($save, '$no = "'.$no.'";
      ');
		fwrite($save, '$pass = "'.$pass.'";
      ');
		fwrite($save, "?>");
		fclose($save);
	}
	include 'cfg.php';
	
system('rm key.txt');
system('clear');
			echo $banner;
			echo "$Cyan2 Info : $note\n";
			echo "$merah SCRIPT ILEGAL, RESIKO TANGGUNG PENGGUNA\n";
			echo "$kuning Author tidak bertanggung jawab atas segala kerugian yang terjadi\n";
			echo $lin;

echo "$kuning PILIH METODE\n\n";

echo "$hijau 1.$putih Ganjil\n";
echo "$hijau 2.$putih Genap\n\n";
echo "$kuning Pilih :$merah ";
//$e = trim(fgets(STDIN));
if($e == 1){
	$p = 1;
}
if($e == 2){
	$p = 0;
}


	system('clear');
			echo $banner;
			echo "$Cyan2 Info : $note\n";
			echo "$merah SCRIPT ILEGAL, RESIKO TANGGUNG PENGGUNA\n";
			echo "$kuning Author tidak bertanggung jawab atas segala kerugian yang terjadi\n";
			echo $lin;
	function ua($tkn) {
		$head = [
			"Host" => "api.online2015.com",
			"accept" => "application/json, text/plain, */*",
			"User-Agent" => "Mozilla/5.0 (Linux; Android 10; V2027) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36",
			"content-type" => "application/json;charset=UTF-8",
			"authori-zation" => "Bearer ".$tkn,

		];
		foreach ($head as $body => $uy) {
			$mhn[] = $body.": ".$uy;
		}
		return $mhn;
	}

	function curl($url, $httpheader = 0, $post = 0, $proxy = 0) {
		// url, postdata, http headers, proxy, uagent
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
		curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		if ($post) {
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
		if ($httpheader) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
		}
		if ($proxy) {
			curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
		}
		curl_setopt($ch, CURLOPT_HEADER, true);
		$response = curl_exec($ch);
		$httpcode = curl_getinfo($ch);
		if (!$httpcode) return "Curl Error : ".curl_error($ch); else {
			$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			curl_close($ch);
			return array($header, $body);
		}
	}
	
	$res = url("https://controlc.com/fc929376");
if ($res == "") {
	system('clear');
	echo $banner;
	echo "$merah KONEKSI TERPUTUS.\n";
	echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
	echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
	echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
	exit;
}
$url = "https://api.online2015.com/api/login";
$data = '{"account":"'.$no.'","password":"'.$pass.'"}';
$tkn = "null";
$res = curl($url,ua($tkn),$data);

$res = json_decode($res[1]);
$cek = $res->status;
$ber = $res->msg;
$tkn = $res->data->token;
if ($cek == "200"){
echo " $ber\r";
sleep (3);
}
$url = "https://api.online2015.com/api/user";
$res = curl($url,ua($tkn));
$res = json_decode($res[1]);
$id = $res->data->uid;
$nama = $res->data->nickname;
$hp = $res->data->phone;
$sal = $res->data->now_money;
echo "$kuning Id       :$putih $id\n";
echo "$kuning Nickname :$putih $nama\n";
echo "$kuning Nomor    :$putih +$hp\n";
echo "$kuning Saldo    :$putih Rp.$sal\n\n";
echo $lin;
sleep(2);



while (true){
	$res = url("https://controlc.com/fc929376");
if ($res == "") {


	echo "$merah KONEKSI TERPUTUS.\n";
	echo "$merah TIDAK DAPAT TERHUBUNG KE SERVER.\n";
	echo "$merah PERIKSA KONEKSI ANDA LALU COBA LAGI.\n";
	echo "$merah PASTIKAN UNTUK TIDAK MENGGUNAKAN VPN.\n";
	exit;
}
$url = "https://api.online2015.com/api/product/detail/34";
$res = curl($url,ua($tkn));
$res = json_decode($res[1]);

$url = "https://api.online2015.com/api/cart/add";
$data = '{"productId":"34","cartType":"Custom","cartNum":1,"new":1,"uniqueId":""}';
$res = curl($url,ua($tkn),$data);
$res = json_decode($res[1]);
$cid = $res->data->cartId;

$url = "https://api.online2015.com/api/order/confirm";
$data = '{"cartId":"'.$cid.'"}';
$res = curl($url,ua($tkn),$data);
$res = json_decode($res[1]);
$ok = $res->data->orderKey;
$hg = $res->data->priceGroup->totalPrice;
echo "$merah Harga :$putih Rp.$hg$pink | ";
sleep(2);
$url = "https://api.online2015.com/api/order/computed/$ok";
$data = '{"useIntegral":0,"couponId":0,"shipping_type":1}';
$res = curl($url,ua($tkn),$data);
$res = json_decode($res[1]);
$by = $res->data->result->pay_price;
echo "$kuning Bayar :$putih $by$pink | ";

$url = "https://api.online2015.com/api/order/create/$ok";
$data = '{"real_name":"","phone":"","useIntegral":0,"couponId":0,"payType":"yue","pinkId":0,"seckill_id":0,"combinationId":0,"bargainId":0,"from":"weixinh5","mark":"","shipping_type":1}';
$res = curl($url,ua($tkn),$data);
$res = json_decode($res[1]);
$has = $res->msg;
$oid = $res->data->result->orderId;
echo "$hijau $has\n";
sleep (2);
$p = rand(1,0);
$url = "https://api.online2015.com/api/guess_odd/get_game_config/$oid";
$res = curl($url,ua($tkn));
$url = "https://api.online2015.com/api/guess_odd/saveOrder";
$data = '{"order_id":"'.$oid.'","guess":'.$p.'}';
//echo $oid;
$res = curl($url,ua($tkn),$data);
$gaf = explode ('Prediksi ini berhasil, Silakan tunggu hasil ',$res[1]);
$gaf = explode ('"}',$gaf[1])[0];
$res = json_decode($res[1]);
$inf = $res->msg;
echo "$Cyan2 $inf\n";
$url = "https://api.online2015.com/api/guess_odd/lottery_result?lottery_num=".$gaf."&type=24";
$res = curl($url.ua($tkn));

		$a = "01";
		if ($a >= "00") {
			while (true) {
				$b = "60";
				$c = "00";
				for ($b >= $c; $b--;) {
					echo "$kuning Menunggu hasil lotrey :$putih $a:$b  \r";
					sleep (1);
				}
				$a = $a - "01";
				if ($a < "00") {
					break;
				}
			}
		}

sleep(2);
$url = "https://api.online2015.com/api/order/game_refund";
$data = '{"order_id":"'.$oid.'"}';
$res = curl($url,ua($tkn),$data);
$res = json_decode($res[1]);
$cek = $res->status;
$msg = $res->msg;
$rw = $res->data->money;
$fee = $res->data->fee;
if ($cek == "200"){
	$url = "https://api.online2015.com/api/user";
$res = curl($url,ua($tkn));
$res = json_decode($res[1]);
$id = $res->data->uid;
$nama = $res->data->nickname;
$hp = $res->data->phone;
$sal = $res->data->now_money;
	echo "$hijau $msg$pink |$kuning Reward :$putih $rw$pink |$merah Fee :$putih $fee |$Cyan2 Saldo :$putih $sal\n";
	echo $lin;
}
if ($cek == "400"){
	$url = "https://api.online2015.com/api/user";
$res = curl($url,ua($tkn));
$res = json_decode($res[1]);
$id = $res->data->uid;
$nama = $res->data->nickname;
$hp = $res->data->phone;
$sal = $res->data->now_money;
	echo "$merah $msg$pink |$Cyan2 Saldo :$putih $sal\n";
	echo $lin;
}
}
//print_r($res);
}
