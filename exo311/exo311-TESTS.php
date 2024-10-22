<?php 

$password = "TOTO";
echo "<br> password: ".$password;

$crypt_01 = password_hash($password,PASSWORD_BCRYPT);
echo "<br> crypt_01: ".$crypt_01;

$crypt_02 = password_hash($password,PASSWORD_ARGON2ID);
echo "<br> crypt_02: ".$crypt_02;


?>