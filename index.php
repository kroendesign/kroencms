<?php


$module = $_GET[pagina];

if($module=="")$module="kroen";


if(($module!="home")

&&($module!="product")
&&($module!="inc")
&&($module!="config")
&&($module!="admin")
&&($module!="login")
&&($module!="1")
&&($module!="2")
&&($module!="3")
&&($module!="content")
&&($module!="artikel")
&&($module!="email_versturen")
&&($module!="header")
&&($module!="ueber-uns")
&&($module!="kroen")
&&($module!="footer")
&&($module!="about")
&&($module!="contact")
&&($module!="product")
&&($module!="over-ons")
&&($module!="email_versturen"))

$module="404";
include("auth.php"); 


include("header-kroen.php");


include("kroen/".$module.".php");


include("footer-kroen.php");


?>

