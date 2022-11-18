<?php if ($_SERVER['REQUEST_METHOD'] == "GET"){

    echo "Ton nom : ".$_REQUEST["nom"]."<br>";

}if ($_SERVER['REQUEST_METHOD'] == "GET") {

    echo "Ton prenom : ".$_REQUEST['prenom']."<br>" ;

}if ($_SERVER['REQUEST_METHOD'] == "GET") {

    $date = new DateTime($_REQUEST['ddn']);
   echo "Ta date de naissance : ".$date -> format("d/m/Y")."<br>" ;
   
}if ($_SERVER['REQUEST_METHOD'] == "GET") {

    echo "Ton code postal : ".$_REQUEST['codepostale']."<br>" ;

}if ($_SERVER['REQUEST_METHOD'] == "GET") {

    echo "Ton adresse est : ".$_REQUEST['Adress']."<br>" ;

}if ($_SERVER['REQUEST_METHOD'] == "GET") {

    echo "Ta ville est : ".$_REQUEST['Ville']."<br>" ;

}if ($_SERVER['REQUEST_METHOD'] == "GET") {

    echo "Ton Email est : ".$_REQUEST['Email']."<br>" ;

} // suuuuuuuuuuuuuuuu
?>