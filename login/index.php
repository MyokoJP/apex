<?php

// パスワードを設定する
$username = 'websupport';
$password = 'shakai_history';
// cookieを持っていなかったときの処理
if (!isset($_COOKIE['CookieLogin'])) {
    setcookie('CookieLogin', 'unverify');
    $loss = '再度ログインしてください。';
    exit;
}
// cookieを持っていたときの処理
if($_COOKIE['CookieLogin'] == 'verify') {
    header('Location: https://ws.myoko.xyz');
    echo ($_COOKIE['CookieLogin']);
} else {
    setcookie('CookieLogin', 'unverify');
    $loss = '再度ログインしてください。';
}

// パスワードが正しく入力されていたらcookieを付与
if(isset($_POST['pass']) && $_POST['pass'] == $password){
    if(isset($_POST['username']) && $_POST['username'] == $username) {
        setcookie('CookieLogin','verify',time()+60*60*24*7);
    }
}

?>

<!DOCTYPE html>
<html lang='en' class=''>

<head>

  <meta charset='UTF-8'>
  <title>Login</title>

  <meta name="robots" content="noindex">

  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
  <link rel="mask-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
  <link rel="canonical" href="https://codepen.io/colorlib/pen/rxddKy">
    <!-- Adobe Fonts -->
  <script>
  (function(d) {
    var config = {
      kitId: 'rez6sot',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
  

  <style class="INLINE_PEN_STYLESHEET_ID">
.loss {
  top: 5.1rem;
	text-align: center;
  font-family: a-otf-ud-shin-go-pr6n,sans-serif;
  font-weight: 300;
  font-style: normal;
  color: #db0000;
}
.head {
	top: 5rem;
	text-align: center;
	font-weight: 900;
	font-size: 2rem;
	margin: 10% 0 0 0;
  font-family: source-han-sans-japanese, sans-serif;
  font-weight: 500;
  font-style: normal;

}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #ffffff;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: a-otf-ud-shin-go-pr6n,sans-serif;
  font-weight: 300;
  font-style: normal;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: a-otf-ud-shin-go-pr6n,sans-serif;
  font-weight: 300;
  font-style: normal;
  text-transform: uppercase;
  outline: 0;
  background: #3b9cbf;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #ffffff;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,
.form button:active,
.form button:focus {
  background: #3b9cbf;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #3b9cbf;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before,
.container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #ef3b3a;
}
body {
  background: #528fb8; /* fallback for old browsers */
  background: rgb(111, 158, 194);
amily: a-otf-ud-shin-go-pr6n,sans-serif;
  font-weight: 300;
  font-style: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

  </style>

  
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-7549a40147ccd0ba0a6b5373d87e770e49bb4689f1c2dc30cccc7463f207f997.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js"></script>
</head>

<body>
	<p class="head">WEBサポートにログイン</p>

  <div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post">
        <div class="loss">
            <?php echo $loss ?>
        </div>
      <input type="text" name="username" value="" placeholder="ユーザー名"/>
      <input type="password" name="pass" value="" placeholder="パスワード"/>
      <button>ログイン</button>
      <p class="message">パスワードが分からない？ <a href="">聞いてみて！</a></p>
    </form>
  </div>
</div>
  
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script  src="https://cdpn.io/cpe/boomboom/pen.js?key=pen.js-05b6b79d-3f9e-5309-b3e6-80997a3bdb4e" crossorigin></script>
</body>

</html>
