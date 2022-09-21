<html>
    <body>
        <p>phase 1</p>
        <br>
            <?php
            $date = ('14/07/2019');
            $semaine = strtotime($date);
            echo "C'est la semaine ".date('W',$semaine);
            ?>
        <br>
        ---------------------------------------------------------------------------------------------------------------
        <br>
        <p>phase 2</p> 
        <br>
        <?php   
            $j = new DateTimeImmutable('20-09-2022');
            $f = new DateTimeImmutable('07-10-2022');
            $t = $j -> diff($f);
            echo $t->format('%a jours');
        ?>
        <br>
        ---------------------------------------------------------------------------------------------------------------
        <br>
        <p>phase 3</p>
        <?php
        $a = "2015";
            function année(){
                if(is_int($a % 4 == 0) && is_int($a % 100 == 0) || is_int($a % 400 == 0)){
                    echo 'ces une année bissextile';
                }else{
                    echo 'ces pas une année bissextile';
                }
            } année();
            
        ?>
        <br>
        ----------------------------------------------------------------------------------------------------------------
        <br>
        <p>phase 4 </p>
        <?php
            $oDate =  DateTime::createFromFormat("d/m/Y", "32/17/2019");

            $errors = DateTime::getLastErrors();
            
            if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
                echo "erronée";
            }
        ?>
        <br>
        ----------------------------------------------------------------------------------------------------------------
        <br>
        <p>phase 5</p>
        <?php
            $adate = new DateTime();
            echo $adate->format("H:i");
        ?>
        <br>
        -----------------------------------------------------------------------------------------------------------------
        <br>
        <p>phase 6</p>
        <?php
            $ndate = new DateTime();
            $ndate -> add(new DateInterval('P1M'));
            echo $ndate->format("d/m/Y");
        ?>
        <br>
        ------------------------------------------------------------------------------------------------------------------
        <br>
        <p>phase 7</p>
        <?php
            $dote2 = new DateTimeImmutable();
            $dote = "1000200000";
            $dote2 -> setTimestamp($dote);
            echo$dote2->format('d-m-Y H:i:s');

        ?>

    </body>
</html>