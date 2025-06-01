<?php
function index_action() {
    require 'view/home.php';
}
function register_action() {
    require_once 'model/user.php';

    if (
         isset($_POST['nom']) && isset($_POST['prenom']) &&
         isset($_POST['sexe']) && isset($_POST['email']) &&
         isset($_POST['mdp']) && isset($_POST['confirm']) && 
         isset($_POST['date_naiss']) && isset($_POST['tel'])
    ) {
        $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8');
        $sexe = htmlspecialchars($_POST['sexe'], ENT_QUOTES, 'UTF-8');
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        //Verification de la validite de l adress lail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse email n'est pas valide.";
            exit();
        }
        $tel = $_POST['tel'];
        $confirm = $_POST['confirm'];
        $date_naissance = htmlspecialchars($_POST['date_naiss'], ENT_QUOTES, 'UTF-8');
        $mdp =$_POST['mdp'];

        if ($mdp !== $confirm) {
            echo "Les mots de passe ne correspondent pas.";
            return;
        }
        $mdp_hach = password_hash($mdp,PASSWORD_DEFAULT);

        $success = registerUser($nom, $prenom, $sexe, $email, $mdp_hach,$tel, $date_naissance);
        if ($success) {
            echo "Inscription réussie !";
            $user_id = $pdo->lastInsertId();
            $_SESSION['Nom_utilisateur'] = $nom;
            $_SESSION['prenoms_utilisateur'] = $prenom;
        } else {
            echo "Erreur lors de l'inscription.";
        }
    } else {
        echo "Tous les champs sont requis.";
    }
}
//FONCTION DE CONNECTION
function login_action() {
    require_once 'model/user.php';

    if (isset($_POST['tel_conn']) && isset($_POST['mdp_conn'])) {
        $tel = htmlspecialchars($_POST['tel_conn'], ENT_QUOTES, 'UTF-8');
        $mdp = $_POST['mdp_conn'];

        $user = getUserByTel($tel);

        if ($user && password_verify($mdp, $user['mot_de_passe'])) {
            $_SESSION['user'] = $user;
            
            //on redirige l utilisateur selon son role
            if(isset($user['Role']) && $user['Role']==='admin'){
            
                // Stocker l'ID et le nom dans la session
                $_SESSION['id_utilisateur'] = $user_id;
                $_SESSION['Nom_utilisateur'] = $nom;
                $_SESSION['prenoms_utilisateur'] = $prenom;
                header('Location: index.php?page=dashbordAdmin');
            }else{
                $user_id = $pdo->lastInsertId();

                // Stocker l'ID et le nom dans la session
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_nom'] = $nom;
            header('Location: index.php?page=Accueil');
            }
            exit;
        } else {
            echo "Identifiants incorrects.";
        }
    } else {
        echo "Tous les champs sont requis.";
    }
}
