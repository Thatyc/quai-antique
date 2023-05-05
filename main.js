function openPopup() {
    // Affiche la fenêtre modale
    // ...
}

// Récupère la fenêtre modale
var modal = document.getElementById("myModal");

// Récupère le bouton de fermeture de la fenêtre modale
var span = document.getElementsByClassName("close")[0];

// Ferme la fenêtre modale lorsqu'on clique sur le bouton de fermeture
span.onclick = function() {
    modal.style.display = "none";
}

// Ferme la fenêtre modale lorsqu'on clique en dehors de la fenêtre
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}