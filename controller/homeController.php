<?php
function index_action() {
    require_once 'view/home.php';
}
require_once 'model/auth.php';
//FONCTION DE DECONNECTION 
function logout_action() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Vider toutes les variables de session
    $_SESSION = [];
    session_destroy();
    header('Location: index.php?page=home');
    exit;
}
//fonction d inscription
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
            $user = getUserByTel($tel);
            $_SESSION['user'] = [
                'Id' => $user['id_utilisateur'],
                'nom' => $user['nom'],
                'prenom' => $user['prenom'],
                'role' => $user['Role'],
            ];
            header('Location: index.php?page=Accueil');
            exit;
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
            //Stockage des donne en session dans la variable user via la fonction getUser
            $_SESSION['user']=$user;
            $_SESSION['user_id']=$user['id_utilisateur'];
            
            echo "Bienvenue " . htmlspecialchars($user['prenom']) . " " . htmlspecialchars($user['nom']);
            //on redirige l utilisateur selon son role
            if(isset($user['Role']) && $user['Role']==='admin'){
                header('Location: index.php?page=dashbordAdmin');
            }else{
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
