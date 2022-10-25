    
    
<?php

    //entetes par chaine 

    $sHeaders  = 'MIME-Version: 1.0' . '\r\n';
    $sHeaders .= 'Content-Type: text/html; charset=utf-8' . '\r\n';
    $sHeaders .= 'From: Dave Loper <dave.loper@afpa.fr>' . '\r\n';
    $sHeaders .= 'Reply-to: Service commercial <commerciaux@jarditou.com>' . '\r\n';
    $sHeaders .= 'X-Mailer: PHP/' . phpversion(). '\r\n';


    //entetes par tableau PHP RECOMMANDER


    $aHeaders[] = 'MIME-Version: 1.0';
    $aHeaders[] = 'Content-Type: text/html; charset=utf-8';
    $aHeaders[] = 'From: Dave Loper <dave.loper@afpa.fr>';  
    $aHeaders[] = 'Reply-to: Service commercial <commerciaux@jarditou.com>';  
    $sHeaders[] = 'X-Mailer: PHP/' . phpversion();

    //Autre syntaxe pour un tableau PHP :

     $aHeaders = array('MIME-Version' => '1.0',
                       'Content-Type' => 'text/html; charset=utf-8',
                       'From' => 'Dave Loper <dave.loper@afpa.fr>',
                       'Reply-To' => 'Service commercial <commerciaux@jarditou.com>',
                       'X-Mailer' => 'PHP/' . phpversion()
                       );

?>

<?php

$aHeaders[] = 'MIME-Version: 1.0';
$aHeaders[] = 'Content-Type: text/html; charset=utf-8';

// Exemple (avec Bootstrap)

$message = '<!DOCTYPE html>
            <html lang="fr">
            <head>
            <meta charset="utf-8">
            <title>Mon premier mail HTML</title>   
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <style>
                html 
                    {
                    font-size: 100%;
                    }

                body 
                    {
                    font-size: 1rem; /* Si html fixé à 100%, 1rem = 16px = taille par défaut de police de Firefox ou Chrome */
                    }
            </style>  
            </head>
            <body>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Mon premier mail HTML</h1>
                        </div>    
                    </div>   
                    <div class="row">
                        <div class="col-12">
                            <p>Ouah c\'est trop génial ! On peut même mettre une image.</p>
                        </div>    
                    </div>   
                    <div class="row">
                        <div class="col-12">
                            <img src="jarditou_logo.jpg" title="Logo" alt="Logo" class="img-fluid">
                        </div>    
                    </div>   
                </div> 
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                </body>
                </html>';
?>
                

 <?php 
 
 //Mail avec piece jointe


// Destinataires 
$destinataires = 'contact@afpa.com'; 

// Objet
$objet = "Confirmation d'inscription";  

// Entêtes supplémentaires 
$entêtes  = ''; 
// -> origine du message 
$entêtes .= 'From: \'Dave Loper\' <dave.loper@afpa.fr>\r\n';  
// -> message au format Multipart MIME 
$entêtes .= 'MIME-Version: 1.0\r\n'; 
$entêtes .= 'Content-Type: multipart/mixed; '; 
$entêtes .= 'boundary=\'ligne\'\r\n'; 
// (.= : concaténation avec ce qu'il se trouvent dans la variable)
// Message. 
$message  = ''; 
// -> première partie du message (texte) 
//    -> entête de la partie 
$message .= '--ligne\r\n'; 
$message .= 'Content-Type: text/plain; '; 
$message .= 'charset=iso-8859-1\r\n '; 
$message .= 'Content-Transfer-Encoding: 8bit\r\n'; 
$message .= '\r\n';   // ligne vide 

//    -> données de la partie 
$message .= 'Voir la pièce jointe.\r\n'; 
$message .= '\r\n';   // ligne vide 

// -> deuxième partie du message (pièce-jointe) 
//    -> entête de la partie 
$message .= '--ligne\r\n'; 
$message .= 'Content-Type: application/octet-stream; '; 
$message .= 'name=\'print.php\'\r\n'; 
$message .= 'Content-Transfer-Encoding: base64\r\n'; 
$message .= 'Content-Disposition: attachment; '; 
$message .= 'filename=\'print.php\'\r\n'; 
$message .= '\r\n';             // ligne vide 

// lecture du fichier en pièce jointe 
$sFileAdd = file_get_contents('print.php'); 

// encodage et découpage des données 
$sFileAdd = chunk_split(base64_encode($sFileAdd)); 

// pièce jointe de la partie (intégration dans le message) 
$message .= '$sFileAdd\r\n'; 
$message .= '\r\n';             // ligne vide 

// Délimiteur de fin du message. 
$message .= '--ligne--\r\n'; 

// Envoi. 
$bEnvoie = mail($destinataires, $objet, $message, $entêtes); 

echo 'Email bien envoy&eacute; &agrave; ' . $destinataires; 

?>