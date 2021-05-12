<?php

session_start();
ob_start();


if(($_POST["email"]=="b201210578@sakarya.edu.tr") && ($_POST["password"]=="b201210578"))
{

$_SESSION["login"] = "true";
$_SESSION["email"] = "b201210578@sakarya.edu.tr";
$_SESSION["password"] = "b201210578";

echo "Hosgeldiniz b201210578. Başarıyla giriş yaptınız. Hakkında sayfasına yonlendiriliyorsunuz. Lütfen bekleyin..";
												
header("Refresh:2; url=hakkimda.html");

}
elseif(($_POST["email"]=="") && ($_POST["password"]==""))
{
    echo "Kullanici adi veya sifre bos birakilmamalidir";
    header("Refresh: 2; url=login.html");
}

else
{
	echo "Kullanici adi veya sifreniz yanlis.";
	header("Refresh: 2; url=login.html");
}


ob_end_flush();
?>