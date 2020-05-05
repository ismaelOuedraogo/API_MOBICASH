# API_MOBICASH
API  JSON du systeme de  paiement Mobicash de l'Opérateur Burkinabè ONATEL

Préréquis Une connexion VPN entre votre serveur et ceux de mobicash est nécéssaire
le fichier API_MOBICASH.php

appeller  le fichier en lui passant les parammetres suivant  apr GET :

// URL Mobicach  
$url = "";

//$numero de téléphone
$tel= $_GET['tel'];

//$code pin
$pin= $_GET['pin'];

//$montant a envoyer 
$montant = $_GET['montant'];

//$rec nom du compte
$rec=$_GET['rec';]

Exemple https://www.votreserveur.com/API_MOBICASH.php?url=http:ipmobicash.com/webservice&tel=70000000&pin=1010&montant=1000&rec=demouser


ATTENTION  
je ne suis lier de prêt ou de loin au service MOBICASH qui est un produit de l'opérateur Maroc Télécom 
