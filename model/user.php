<?php
require_once 'model/database.php';

function registerUser($nom,$prenom, $sexe, $email,  $mdp_hach, $tel, $date_naissance) {
    try {
            $pdo = getConnection();
            $query = "INSERT INTO utilisateur (Nom_utilisateur, Prenom_utilisateur, sexe, Email_utilisateur, mot_de_passe, tel_utilisateur, date_naissance,Role)
                    VALUES (:nom, :prenom, :sexe, :email, :mdp, :tel, :date_naissance,'utilisateur')";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':sexe', $sexe);
            $stmt->bindParam(':email', $email); 
            $stmt->bindParam(':mdp', $mdp_hach); 
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':date_naissance', $date_naissance);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage();
        return false;
    }
}
//FONCTION DE RECUPERATION DE L UTILISATEUR PAR SON NUMERO DE TELEPHONE
function getUserByTel($tel) {
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE Tel_utilisateur = :tel");
    $stmt->execute(['tel' => $tel]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

