<?php
require_once 'model/Model.php';
class Commentaire extends Model
{
    public function getCommentaires($idBillet) {
        $sql = 'SELECT COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu FROM T_COMMENTAIRE WHERE BIL_ID = ?';
        return $this->executerRequete($sql,array($idBillet));
    }
}