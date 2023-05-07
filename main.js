 // PAGE RESERVATION
 // Récupérer tous les boutons d'heure
 const heureButtons = document.querySelectorAll('.btn-heure');

 // Ajouter un gestionnaire d'événement clic à chaque bouton d'heure
 heureButtons.forEach(button => {
   button.addEventListener('click', () => {
     // Récupérer l'heure sélectionnée depuis la valeur du bouton
     const heureSelectionnee = button.value.split('_')[0];

     // Faire quelque chose avec l'heure sélectionnée
     console.log('Heure sélectionnée :', heureSelectionnee);
     
     // Ajouter une classe active pour mettre en évidence le bouton sélectionné
     heureButtons.forEach(btn => {
       btn.classList.remove('active');
     });
     button.classList.add('active');
   });
 });

// Obtenez le nombre de places disponibles depuis une source de données (par exemple, une API)
function obtenirPlacesDisponibles() {
  // Ici, vous pouvez effectuer une requête AJAX ou tout autre moyen pour obtenir les données
  // Dans cet exemple, nous allons simplement générer un nombre aléatoire entre 1 et 100
  return Math.floor(Math.random() * 100) + 1;
}

// Mettez à jour le contenu du panel avec le nombre de places disponibles
function mettreAJourPanel() {
  var panel = document.getElementById("placesPanel");
  var placesDisponibles = obtenirPlacesDisponibles();

  panel.innerHTML = "Places disponibles : " + placesDisponibles;
}

// Appel initial pour mettre à jour le panel au chargement de la page
mettreAJourPanel();

// Vous pouvez également mettre à jour le panel à intervalles réguliers en utilisant setInterval
// Par exemple, pour mettre à jour toutes les 5 secondes :
// setInterval(mettreAJourPanel, 5000);