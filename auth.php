<?php


$DBusername="root";                                 

$DBpassword="c4caef65d9bda6e618ac5f7f9c3db4de";     

//bezoeker account
 met MD5 hash


$Userguest[username]="guest";

$Userguest[homeaccess]="0";      //2: permission db



$Userguest[articlesaccess]="0";  //2: permission db


$Userguest[aboutaccess]="0";     //2: permission db



//root account

$Userroot[username]="admin";

$Userroot[homeaccess]="1";       //2: permission db
$Userroot[articlesaccess]="1";   //2: permission db

$Userroot[aboutaccess]="1";      //2: permission db



$loggedinuserID=$_COOKIE[kroen_cmsuser]; //3: krijg gebruiker account cookie

$loggedinpassHASH=$_COOKIE[kroen_cmspass]; //3: krijg gebruiker wachtwoord cookie



if($_GET[authact]=="logout") //4: uitlog process


{
setcookie("kroen_cmsuser","",0); //4.1:clear cookie voor gebruikersnaam


setcookie("kroen_cmspass","",0); //4.1:clear cookie voor gebruikers wachtwoord



$loggedinuserID="";            //4.2: clear = gebruikersnaam var

$loggedinpassHASH="";          //4.2: clear = wachtwoord var


}




if($_GET[authact]=="logon") //5: inlog process checken


{

if(($_POST[user]==$DBusername)&&(md5($_POST[pass])==$DBpassword)) //5.1: goedkeuring checken inlog process


{

setcookie("kroen_cmsuser",$DBusername,time()+31536000);  //5.2: gebruikers naam cookie voor 1 jaar

setcookie("kroen_cmspass",$DBpassword,time()+31536000);  //5.2: gebruikers wachtwoord cookie voor 1 jaar



$user=$Userroot;    //5.3: root permission informatie voor gebruiker var


$loggedinuserID=$DBusername;   //5.4: cookie voor gebruiker
$loggedinpassHASH=$DBpassword; //5.4: cookie voor wachtwoord
}


else echo("Verkeerd gegevens!"); //5.5: //fout melding verkeerd informatie
}





if(($loggedinuserID!=$DBusername)||($loggedinpassHASH!=$DBpassword)) //6: check of de gegevens overeen komen met gegevens van database


{

$user=$Userguest;    //6.1: gast/bezoeker permission informatie voor gebruiker


}

else 

$user=$Userroot; //6.2: root permission informatie voor gebruiker var



if($user[$module."access"]=="0")$module="login"; //6.3: als  er geen inlog permissie is veranderen wij de verzoek module voor inlog pagina = gebruikers paneel





?>
