<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" version="HTML+RDFa 1.0" dir="ltr">

<head>


<meta charset="utf-8" />


<!-- 
_________________________________________________________________________________
  
  
Design, /CSS/HTML/PHP  
  (C) 2011
  
  
Kroen Design Webdesign/Hosting web-internet diensten, 
Rotterdam
  Kleijnstr. 29
  
  
+31643852261

  
rebellkassel@t-online.de
  
  
________________________________________________________________________________ 
-->


   


<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<title><?= isset($PageTitle) ? $PageTitle : "Kroen Design"?></title>

    

<?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>


<META NAME="Keywords" CONTENT="Design, webdesignbureau, webhosting">


<META NAME="Description" CONTENT="Het grootste assortiment templates, hostingen en systemen. Kroen Design is een bedrijf dat constant in beweging is!">


<META NAME="Copyright" CONTENT="Powered by: Kroen Design &copy 2011 - Alle Rechte vorbehalten">

<META NAME="Author" CONTENT="Kroen Design">

<META NAME="Language" CONTENT="NL">

<META NAME="Robots" CONTENT="index,follow">

<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon" />

<link rel="shortlink" href="../" />
	
<meta name="robots" content="index, follow">

<meta name="Generator" content="Kroen Design CMS" />





<header>
	
<div class="menu">


  		<a href="<?php echo $_SERVER['PHP_SELF']; ?>" title="Home" rel="home" id="logo">Home</a>
  		

<ul class="menu">
<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?entry=home" title="" class="active">Home</a></li>

<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?entry=product" title="">Producten</a></li>

<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?entry=over-ons" title="">Over Ons</a></li>

<li><a href="../nieuws/index.php/" title="">Nieuws</a></li>

<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?entry=contact">Contact</a></li>

</ul>  



<font color="black"><b>u bent aangemeld als:</b> </font>
<?php echo($user[username]);



if($user[username]!="guest")echo(" (<a href=\"?authact=logout\">Logout</a>)");




?>

  			

</header>


 	



<center>
<?php
 

$url = "www.kroendesign.nl";
 
echo "U bevindt zich momenteel op $url. Welkom!";
 

?>
</center>


			

