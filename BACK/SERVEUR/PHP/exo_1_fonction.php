<html>
    <body>
<!-- Lien a afficher grace a une fonction php  -->
    <?php 
       function newliens($Nliens,$titre){
            echo"<a href = ".$Nliens.">".$titre."</a>";
       }
       newliens("https://www.reddit.com/","Reddit Hug");
       ?>
        

</body>