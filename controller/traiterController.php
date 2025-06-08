<?php
require_once 'model/demande.php';
function index_action() {
    $demandes = getDemandesTraiter();
    
    require 'view/traiter.php';
}