<?php
require_once 'model/demande.php';
function index_action() {
    $demandes = getDemandesEnAttente();
    
    require 'view/enAttente.php';
}