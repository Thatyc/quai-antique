// Sélectionner toutes les images de la galerie
var galleryImages = document.querySelectorAll(".img-gallery");

// Pour chaque image, ajouter un événement de clic pour afficher l'image agrandie
galleryImages.forEach(function(image) {
  image.addEventListener("click", function() {
    // Créer un nouvel élément de div pour afficher l'image agrandie
    var enlargedImageDiv = document.createElement("div");
    enlargedImageDiv.classList.add("enlarged-image-container");
    
    // Créer un nouvel élément d'image pour l'image agrandie
    var enlargedImage = document.createElement("img");
    enlargedImage.classList.add("enlarged-image");
    enlargedImage.src = image.src;
    
    // Ajouter l'image agrandie à l'élément de div
    enlargedImageDiv.appendChild(enlargedImage);
    
    // Créer un bouton de fermeture pour l'image agrandie
    var closeButton = document.createElement("button");
    closeButton.classList.add("close-button");
    closeButton.innerHTML = "X";
    
    // Ajouter un événement de clic au bouton de fermeture pour supprimer l'élément de div
    closeButton.addEventListener("click", function() {
      enlargedImageDiv.remove();
    });
    
    // Ajouter le bouton de fermeture à l'élément de div
    enlargedImageDiv.appendChild(closeButton);
    
    // Ajouter l'élément de div à la page
    document.body.appendChild(enlargedImageDiv);
  });
});

function openPopup() {
  var popup = window.open("create_account.php", "popup", "width=400, height=400");
}
