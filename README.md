# API_MOBICASH V1.0
API  JSON du systeme de  paiement Mobicash de l'Opérateur Burkinabè ONATEL

# Préréquis: 

1) Une connexion VPN entre votre serveur et celui de mobicash est nécessaire
2) Il est nécessaire d'avoir PHP 7+ avec  l'extension CURL activé

3) le fichier API_MOBICASH.php qui contient le code dedier a l'opération

## Modifier le fichier API_MOBICASH.php

```bash
URL Mobicach 
$url="[URL SERVEUR]"

nom du compte
$rec="[COMPTE]"
```
## Utilisation

```bash
numéro de téléphone =>tel

code du compte mobicash =>pin

montant à envoyer =>montant

Exemple https://www.votreserveur.com/API_MOBICASH.php?tel=70000000&pin=1010&montant=1000

##retour

## réussite de la transaction

{"msg":
   [
      { 
        "op":"success"
      }
   ]
}

## Échec de  la transaction

{"msg":
   [
      { 
        "op":"echec"
      }
   ]
}

```
## ATTENTION 

je ne suis lier de prêt ou de loin au service MOBICASH qui est un produit de l'opérateur Maroc Télécom 


## License
[MIT](https://choosealicense.com/licenses/mit/)
