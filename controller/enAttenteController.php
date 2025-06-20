<?php
require_once 'model/demande.php';
function index_action() {
    $page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
    $limit = 10;
    $offset = ($page - 1) * $limit;

    $demandes = getDemandesEnAttentePaginated($limit, $offset);
    $totalDemandes = getTotalDemandesEnAttente();
    $totalPages = ceil($totalDemandes / $limit);
    require 'view/enAttente.php';
}
