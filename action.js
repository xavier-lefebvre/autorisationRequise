const age = document.getElementById('age');

function redirection() {
       
    if (age.value >= 18) {
        alert("Vous avez l'âge requis pour accéder à ce site. Bienvenue.");
        location.href='accueil.html';
        
    } else {
        alert("Vous n'avez pas l'âge requis pour accéder à ce site. Au revoir.");
        location.href='https://www.avocat.fr/actualites/protection-des-mineurs-sur-internet-que-dit-la-loi'; 
    }    
}