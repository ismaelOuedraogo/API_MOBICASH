# API_MOBICASH
API  JSON du systeme de  paiement Mobicash de l'Opérateur Burkinabè ONATEL

Préréquis: 

1) Une connexion VPN entre votre serveur et celui de mobicash est nécéssaire

2) le fichier API_MOBICASH.php qui contient le code dedier a l'opération

Elements à modifier dans le fichier API_MOBICASH.php

// URL Mobicach 

url 

//nom du compte

rec


// Variables à envoyer par get a API_MOBICASH.php

//numero de téléphone

tel

//code du compte mobicash

pin

//montant a envoyer 

montant

Exemple https://www.votreserveur.com/API_MOBICASH.php?tel=70000000&pin=1010&montant=1000&

retour

réussite de la transaction

{"msg":
   [
      { 
        "op":"success"
      }
   ]
}

Echec de  la transaction

{"msg":
   [
      { 
        "op":"echec"
      }
   ]
}


ATTENTION 

je ne suis lier de prêt ou de loin au service MOBICASH qui est un produit de l'opérateur Maroc Télécom 
