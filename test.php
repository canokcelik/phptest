<?php

$user=$_GET['username'];
$pass=$_GET['password'];

if($user=="cokcelik" && $pass=="test") {
    header("Location: index.php"); 
}
else {
    echo "kullanici adi/sifre yanlis";
}

?>