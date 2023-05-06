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