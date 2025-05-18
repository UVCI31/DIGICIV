document.addEventListener('DOMContentLoaded', function () {
    const btnMenu = document.getElementById('btn-menu');
    const menu = document.getElementById('menu');
  
    btnMenu.addEventListener('click', function () {
      menu.classList.toggle('active');
    });
  });

const dropZone = document.getElementById("upload-area");
const fileInput = document.getElementById("fileInput");

// Empêcher le comportement par défaut
["dragenter", "dragover", "dragleave", "drop"].forEach(event => {
  dropZone.addEventListener(event, e => e.preventDefault());
  dropZone.addEventListener(event, e => e.stopPropagation());
});

// Style quand on survole la zone
dropZone.addEventListener("dragover", () => {
  dropZone.classList.add("dragover");
});
dropZone.addEventListener("dragleave", () => {
  dropZone.classList.remove("dragover");
});

// Quand on dépose le fichier
dropZone.addEventListener("drop", e => {
  dropZone.classList.remove("dragover");
  const files = e.dataTransfer.files;
  handleFiles(files);
});

// Ou quand on utilise le bouton
fileInput.addEventListener("change", () => {
  handleFiles(fileInput.files);
});

// Traitement des fichiers
function handleFiles(files) {
  for (const file of files) {
    console.log("Fichier reçu :", file.name);
    // Tu peux afficher, uploader, etc.
  }
}

 // POUR LE COTE BACK
 
 function handleFiles(files) {
  const formData = new FormData();
  for (const file of files) {
    formData.append("documents[]", file); // "documents[]" => côté PHP ce sera un tableau
  }

  // Envoi vers le serveur (ex: upload.php)
  fetch("upload.php", {
    method: "POST",
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    console.log("Réponse du serveur :", data);
    alert("Fichiers envoyés avec succès !");
  })
  .catch(error => {
    console.error("Erreur :", error);
    alert("Erreur lors de l'envoi.");
  });
}



























// Forcer reload si la page est restaurée depuis le cache (retour arrière)
window.addEventListener('pageshow', function (event) {
  if (event.persisted || performance.getEntriesByType("navigation")[0].type === "back_forward") {
    window.location.reload();
  }
});