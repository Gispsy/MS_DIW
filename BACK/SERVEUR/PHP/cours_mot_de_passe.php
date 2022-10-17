<?php

    //Hasher un mot de passe via password_hash

    password_hash($chaine, $algorithme);

    //1er argument ($chaine) : la chaîne à crypter (le mot de passe).
    //2ème argument ($algorithme) : l’algorithme de cryptage à utiliser.

    $password_hash = password_hash("vacances", PASSWORD_DEFAULT);
    echo $password_hash; 

    //Ceci affichera $2y$10$xybwIx80qUbemOsCiobdZeK4JIg2qe8BrT83vGJF1QqyJ9bnycrx6. C'est cette valeur qu’il faut stocker en base de données.

    password_verify($chaine_saisie_en_clair, $hash_stocke_en_bdd);


    //Verification mdp

    password_verify($chaine_saisie_en_clair, $hash_stocke_en_bdd);