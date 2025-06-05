<?php
// Vérifie que l'admin est connecté
if (!isset($_SESSION['user']['Role']) || $_SESSION['user']['Role'] !== 'admin') {
    header('Location: index.php?page=home'); 
    exit;
}

$nomComplet = $_SESSION['user']['prenom'] . ' ' . $_SESSION['user']['nom'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiciv Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>


<body>
    <header class="bg-white shadow-sm p-3">
  <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">
    
    <!-- Menu + Titre -->
    <div class="d-flex align-items-center gap-3">
      <i class="fas fa-bars fa-lg text-secondary" id="menu-ad" style="cursor: pointer;"></i>
      <span class="fs-5 fw-bold text-dark">Dashboard</span>
    </div>

   
    <div class="position-relative" style="max-width: 300px;">
      <input type="text" class="form-control ps-5 rounded-pill shadow-sm" placeholder="Rechercher...">
      <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
    </div>



   
    <div class="d-flex align-items-center gap-2">
      <span class="fw-semibold text-dark"><?php echo htmlspecialchars($nomComplet); ?></span>
      <i class="fas fa-user-circle fa-xl text-warning"></i>
    </div>

   
    <div class="d-flex align-items-center gap-2">
      <img src="./assets/images/Coat_of_arms_of_Côte_d_Ivoire__1997-2001_variant_.svg-removebg-preview.png" alt="logo-cote" class="img-fluid" style="height: 40px;">
      <img src="./assets/images/san-pedro-removebg-removebg-preview.png" alt="logo san-pedro" class="img-fluid" style="height: 40px;">
    </div>

  </div>
</header>

  <div class="menu-lateral">
         <h3 class="digi-logo">Digiciv</h3>
         <nav class="ad-nav" id="adnav">
            <ul>
            <li class="li-ad">
               <a href="dashboardAdmin.html"><img src="./assets/images/home blanc.png" alt="dashboard" class="ic-home"> Dashboard</a></li>
            <li class="li-ad">
               <a href="#">
                <img src="./assets/images/document blanc (1).png" alt="doc en attentes" class="ic-da">
                 Demande traitée</a></li>
            <li class="li-ad">
               <a href="datatable.php"><img src="./assets/images/validation blanc (1).png" alt="doc validés" class="ic-v"> Demande en attente</a></li>
            <li class="li-ad">
               <a href="#"><img src="./assets/images/error blanc .png" alt="doc rejetés" class="ic-r"> Demande en rejetée</a></li>
            <li class="li-ad">
               <a href="statistique.html"><img src="./assets/images/statistic blanc .png" alt="Statistiques" class="stats"> Statistiques</a></li>
         </ul>
         </nav>
       </div>

    
   <div class="d-block conteneur-rect">
      <div class="d-flex align-items-center justify-content-center rect">
      <div class="dash-tr">
      <img src="./assets/images/validation (1)vert.png" alt="doc-tr" class="doc-tr">
      <h3 class="nb-d">1500</h3>
      <p class="st">Demandes a traiter</p>
      </div>
      <div class="dash-at">
      <img src="./assets/images/document vert(1).png" alt="doc-at"class="doc-at">
      <h3 class="nb-d">2050</h3>
      <p class="st">Demandes en attentes</p>
      </div>
   </div> 
   <div class="div-t">
      <div >
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id cit</th>
      <th scope="col">Acte demandé</th>
      <th scope="col">Details </th>
    </tr>
  </thead>
  <tbody class="table-group-divider col-sm-6 col-md-6">
    <tr>
      <th scope="row">1</th>
      <td>Extrait de Nassance</td>
      <td class="detail"><a href="#" class="l-flèche"><img src="./assets/images/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Extrait de Naissance</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="./assets/images/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Acte de Mariage</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="./assets/images/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    
    <th scope="row">3</th>
      <td>Extrait de naissance</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="./assets/images/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Acte de Mariage</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="./assets/images/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Acte de Mariage</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="./assets/images/ight-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
  </tbody>
</table>
      </div>
   </div> 
   </div>
 <script src="./assets/js/script.js" defer></script>
</body>
</html>