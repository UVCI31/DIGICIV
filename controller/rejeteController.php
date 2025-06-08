<?php
require_once 'model/demande.php';
function index_action() {
    $demandes = getDemandesRejete();
    
    require 'view/rejete.php';
}