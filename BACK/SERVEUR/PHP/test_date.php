<html>
    <body>
        <?php echo time(); ?>

        <?php // on déclare une instance de l'objet PHP 'DateTime' :
                $oDate = new DateTime();?>
<br>
<br>
        <?php var_dump($oDate);
            // C:\<chemin_projet>\php_session\index.php:13:

            // object(DateTime)[1];
            // public 'date' => string '2018-07-03 07:12:27.043812' (length=26);
            // public 'timezone_type' => int 3;
            // public 'timezone' => string 'UTC' (length=3);
        ?>
<br>
<br>
        <?php // $macolonne_sql est issue d'une requête SQL; avec pour valeur 2018-11-16 11:26:51 (parexemple)
                $oDate = new DateTime($macolonne_sql);
                echo $oDate->format("d/m/Y H:i:s");
        ?>
<br>
<br>
        <?php $dateTime = DateTime::createFromFormat('m/d/Y', $date);

                $errors = DateTime::getLastErrors();

                if (!empty($errors['warning_count'])) 
                {
                return FALSE;
                }
        ?>
<br>
<br>
        <?php $datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
                    $date = "32-17-2019";

                    if (preg_match($datePattern, $date))
                    {
                        echo "Date ".$date." valide.<br>";
                    }
                    else
                    {
                        echo "Date ".$date." erronée.<br>";
                    }
        ?>
<br>
<br>
        <?php $oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "17/25/1966 03:42:11");

                $errors = DateTime::getLastErrors();

                if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
                    echo "ARGHHHH !";
                }
        ?>
    </body>
</html>