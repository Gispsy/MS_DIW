<html>
    <head>
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <table class="table table-dark table-striped table-bordered border-primary"">
            <?php
                $fp = file('employe.csv');?>
                <?php foreach($fp as $ligne){?>
                    <!-- <tr><th> <?= $ligne ?> </th> -->
                    <tr>
                <?php  $tab = explode( ',', $ligne );
                    foreach ($tab as $new){?>   
                            <td> <?= $new ?> </td>
                        <?php } ?>
                    </tr>
            <?php };?>
        </table>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
        
                