<?php
	//sanitize a string
	$str = "<h1>Hello World!</h1>";
	$newstr = filter_var($str,FILTER_SANITIZE_STRING);
	echo $newstr."<br>";

	//validate integer
	$x = 0;
	if (filter_var($x,FILTER_VALIDATE_INT) ==0 || !filter_var($x,FILTER_VALIDATE_INT) == false) {
		echo "Is int <br>";
	}else{
		echo "Not int <br>";
	}

	//validate ip address
	$ip = "127.0.1";
	if (!filter_var($ip,FILTER_VALIDATE_IP) == false) {
		echo "Is valid ip <br>";
	}else{
		echo "Not valid ip <br>";
	}

	//sanitize & validate email
	$email = "jimmy@gmail.com//";
	//remove illegal characters from email
	$email = filter_var($email,FILTER_SANITIZE_EMAIL);
	echo $email."<br>";

	//validate email
	if (!filter_var($email,FILTER_VALIDATE_EMAIL) == false) {
		echo "Is valid email <br>";
	}else{
		echo "Not valid email <br>";
	}

	//sanitize & validate url
	$url = "https://www.jimmy.com";
	//sanitize url
	$url = filter_var($url,FILTER_SANITIZE_URL);
	echo $url."<br>";

	//validate url
	if (!filter_var($url,FILTER_VALIDATE_URL) == false) {
		echo "Is valid url <br>";
	}else{
		echo "Not valid url <br>";
	}

	//VALIDATE IPV6
	$ipv = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
	if (!filter_var($ipv,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6) == false) {
		echo "Is valid ipv6 <br>";
	}else{
		echo "Not valid ipv6 <br>";
	}
?>