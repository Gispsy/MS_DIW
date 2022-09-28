<?php function verif (){
    try {
        require "db.php";
    $db = connexionBase();

    $id = $_GET["id"];

    $requete = $db->prepare("SELECT * FROM artist WHERE artist_id=?");

    $requete->execute(array($id));

    $myArtist = $requete->fetch(PDO::FETCH_OBJ);
    var_dump($myArtist);

    $requete->closeCursor();
    }catch ($id = false){
        echo "erreur dans la selection"
    }
}
verif()
?>