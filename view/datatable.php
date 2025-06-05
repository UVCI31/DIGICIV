<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demandes en attentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>
<script src="script.js"></script>

<body>
    <header >
      <div class="d-flex ">
       <div class="menu-lateral">
         <h3 class="digi-logo">Digiciv</h3>
         <nav class="ad-nav" id="adnav">
            <ul>
            <li class="li-ad">
               <a href="dashboardAdmin.html"><img src="image/home blanc.png" alt="dashboard" class="ic-home"> Dashboard</a></li>
            <li class="li-ad">
               <a href="#">
                <img src="image/document blanc (1).png" alt="doc en attentes" class="ic-da">
                 Demande traitée</a></li>
            <li class="li-ad">
               
               <a href="datatable.html"><img src="image/validation blanc (1).png" alt="doc validés" class="ic-v"> Demande en attente</a></li>
            <li class="li-ad">
               <a href="#"><img src="image/error blanc .png" alt="doc rejetés" class="ic-r"> Demande en rejetée</a></li>
            <li class="li-ad">
               <a href="statistique.html"><img src="image/statistic blanc .png" alt="Statistiques" class="stats"> Statistiques</a></li>
         </ul>
         </nav>
       </div>
       <div class="d-flex justify-content-between align-items-center px-3 barmenu">
         <div class="d-flex">
        
        <img src="image/burger-bar.png" alt="menu admin" class="menu-ad" id="menu-ad">
        <p class="dashboard">Demande en attentes</p>
     </div>
     <div class="recherche">
        <img src="image/search.png" alt="" class="search">
        <input type="search" id="search" placeholder="rechercher">
     </div>
     <div class="d-flex admin">
        <p id="nom-ad">Nom Admin</p>
        <img src="image/user (1)orange.png" alt="compte admin" class="user-ad">
     </div>
     <div>
        <img src="image/Coat_of_arms_of_Côte_d_Ivoire__1997-2001_variant_.svg-removebg-preview.png" alt="" class="ci-logo">
        <img src="image/san-pedro-removebg-removebg-preview.png" alt="" class="sp-logo">
     </div>

       </div>
      </div>
     
    </header>
 
    <div class="d-block datatable">

           <div class="div-t">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">id cit</th>
      <th scope="col">Acte demandé</th>
      <th scope="col">Details </th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Extrait de Nassance</td>
      <td class="detail"><a href="Page pre-imp.html" class="l-flèche"><img src="image/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Extrait de Naissance</td>
      <td class="detail" ><a href="Page pre-imp.html" class="l-flèche"><img src="image/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Acte de Mariage</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="image/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <th scope="row">4</th>
      <td>Acte de décès</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="image/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <th scope="row">5</th>
      <td>Extrait de naissance</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="image/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Acte de Mariage</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="image/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Acte de Mariage</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="image/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Acte de Mariage</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="image/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Acte de Mariage</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="image/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Acte de Mariage</td>
      <td class="detail" ><a href="#" class="l-flèche"><img src="image/right-arrow.png" alt="detail" class="flèche"></a></td>
    </tr>
  </tbody>
</table>
   </div> 


    </div>
    
</body>
</html>