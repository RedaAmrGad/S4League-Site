<?php
require 'config.php';
require 'filter.php';

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$nickname = mysql_real_escape_string($_POST['nickname']);
$salt = openssl_random_pseudo_bytes(24); //create random salt
$hash = openssl_pbkdf2($password, $salt, 24, 24000, 'sha1'); //pbkf2 with sha1
$p = base64_encode ($hash); //encode hash to base 64
$s = base64_encode ($salt); //encode salt to base 64
$username = check($username);
$nickname = check($nickname);

$query = "INSERT INTO accounts (Username, Nickname, Password, Salt, SecurityLevel, AuthToken, newToken) VALUES ('$username', '$nickname', '$p', '$s', '0', '', '')";

	
	mysql_query($query);
		
	if(mysql_affected_rows($sql) == 1){
		$status = "Register Success";
		$WelcomeMsg = "Hey! ".$username."! <br /> Your Account have <font color='#2bd104'>Successfully</font> Registered!<br/>You can login with your ID now.<br/> <br/> Regards, <br />Admin.";

	}else{
		$status = "Register Failed";
		$WelcomeMsg = "Username or Nickname have been <font color='#ff0000'>taken!</font>";
	}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $status ?></title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/register.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

		<section id="infoPage">
	
    		<img src="assets/img/fumbi.png" width="185" height="164" />

            <header>
                <h2><?php echo $tag ?></h2>
            </header>
            
            <p class="description"><?php echo $WelcomeMsg ?></p>

		</section>
        
    

    </body>
</html>
