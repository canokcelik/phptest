<?php

$user=$_GET['username'];
$pass=$_GET['password'];

if($user=="cokcelik" && $pass=="test") {

?>
Tamamdır login oldun. Seni 2sn içinde anasayfaya yönlendiriyorum.
<meta http-equiv = "refresh" content = "2; url = index.php">
<?php

}
else {
    echo "kullanici adi/sifre yanlis";
}

?>