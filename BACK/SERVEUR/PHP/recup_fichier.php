<html>
    <body>
        <table border = "solid">
        <?php
                $fp = file('employe.csv');

                foreach ($fp as $ligne){?>
            <?php "<tr>"?>
                    <?php var_dump( explode('NULL',$ligne));?>
                    <?php echo"<td><th>".$ligne."</th></td><br><br>"; ?>
            <?php "</tr>"?>
                    


               <?php }?>