<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiciv Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>


<body>

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
               <a href="datatable.html"><img src="./assets/images/validation blanc (1).png" alt="doc validés" class="ic-v"> Demande en attente</a></li>
            <li class="li-ad">
               <a href="#"><img src="./assets/images/error blanc .png" alt="doc rejetés" class="ic-r"> Demande en rejetée</a></li>
            <li class="li-ad">
               <a href="statistique.html"><img src="./assets/images/statistic blanc .png" alt="Statistiques" class="stats"> Statistiques</a></li>
         </ul>
         </nav>
       </div>
    <header >
      <div class="d-flex ">
       
       <div class="d-flex justify-content-between align-items-center px-3 barmenu">
         <div class="d-flex">
        
        <img src="./assets/images/burger-bar.png" alt="menu admin" class="menu-ad" id="menu-ad">
        <p class="dashboard">Dashboard</p>
     </div>
     <div class="recherche">
        <img src="./assets/images/search.png" alt="" class="search">
        <input type="search" id="search" placeholder="rechercher">
     </div>
     <div class="d-flex admin">
        <p id="nom-ad">Nom Admin</p>
        <img src="./assets/images/user (1)orange.png" alt="compte admin" class="user-ad">
     </div>
     <div>
        <img src="./assets/images/Coat_of_arms_of_Côte_d_Ivoire__1997-2001_variant_.svg-removebg-preview.png" alt="logo-cote" class="ci-logo">
        <img src="./assets/images/san-pedro-removebg-removebg-preview.png" alt="logo san-pedro" class="sp-logo">
     </div>

       </div>
      </div>
     
    </header>
    
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