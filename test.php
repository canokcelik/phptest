<?php

$user=$_GET['username'];
$pass=$_GET['password'];

if($user=="cokcelik" && $pass=="test") {
    echo "login oldun.";
}
else {
    echo "kullanıcı adı/sifre yanlis"
}

?>