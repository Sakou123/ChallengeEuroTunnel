```
__Première étape :__

- Recupèrer les JSON via PHP et les mettres dans un Array

__Deuxième étape :__

- Les rendre lisible pour PHP avec "json_decode" tout en selectionant les 3 info nécessaire pour l'API

__Troisième étape :__

- Transposition des données JSON vers L'Array avant d'utiliser "json_encode" pour transformer l'Array a l'état de JSON pour qu'il soit compris par L'API.

+ Affichage des données avec un "echo" pour verifier que tout c'est bien passé avant l'étape final qu'est l'envoi.

__Dernière étape :__

- Envoi de chaque JSON vers l'API tous composé de 3 données : 
  -matricule
  -adAccountID
  -currentStep
  
Puis vérification que tout c'est bien passé en allant sur Swagger avec la fonction GET 
```
