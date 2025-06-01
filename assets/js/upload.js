const dropZone = document.getElementById("upload-area");
const fileInput = document.getElementById("fileInput");

["dragenter", "dragover", "dragleave", "drop"].forEach(event => {
  dropZone.addEventListener(event, e => e.preventDefault());
  dropZone.addEventListener(event, e => e.stopPropagation());
});

//  survole de  la zone
dropZone.addEventListener("dragover", () => {
  dropZone.classList.add("dragover");
});
dropZone.addEventListener("dragleave", () => {
  dropZone.classList.remove("dragover");
});

//dépot du fichier
dropZone.addEventListener("drop", e => {
  dropZone.classList.remove("dragover");
  const files = e.dataTransfer.files;
  handleFiles(files);
});

// cas bouton
fileInput.addEventListener("change", () => {
  handleFiles(fileInput.files);
});

// Traitement des fichiers
function handleFiles(files) {
  for (const file of files) {
    console.log("Fichier reçu :", file.name);
    
  }
}

 // POUR LE COTE BACK
 
 function handleFiles(files) {
  const formData = new FormData();
  for (const file of files) {
    formData.append("documents[]", file); 
  }

  // Envoi vers le serveur 
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

const links = document.querySelectorAll('.li-ad');
links.forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();
    links.forEach(l => l.classList.remove('active'));
    this.classList.add('active');
  });
});
