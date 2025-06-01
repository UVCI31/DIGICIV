<?php
class DemandeNaissanceModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function enregistrerDemande($data) {
        $sql = "INSERT INTO demandes_naissance 
                (nom, prenoms, date_naissance, lieu_naissance, numero_acte, date_acte, numero_registre, nom_pere, prenoms_pere, nom_mere, prenoms_mere, fichier, user_id) 
                VALUES 
                (:nom, :prenoms, :date_naissance, :lieu_naissance, :numero_acte, :date_acte, :numero_registre, :nom_pere, :prenoms_pere, :nom_mere, :prenoms_mere, :fichier, :user_id)";
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }
}
