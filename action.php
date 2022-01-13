
<?php
/*Vous devrez créer un formulaire qui vous demandera votre date de naissance et qui
calculera automatiquement en fonction de la date du jour si vous pouvez ou non
accéder au site de campagne. Toujours avec une window alert. */

$dob = $_POST['date'];
$now = date('Y');
$diff = $now - $dob;

if ($diff >= 18) {
    echo "<script type=\"text/javascript\"> alert(\"Vous avez l'âge requis pour accéder à ce site. Bienvenue.\");
    window.location.href='accueil.html'; </script>";
    
} else {
    echo "<script type=\"text/javascript\"> alert(\"Vous n'avez pas l'âge requis pour accéder à ce site. Au revoir.\");
    window.location.href='https://www.avocat.fr/actualites/protection-des-mineurs-sur-internet-que-dit-la-loi'; </script>";
}

?>

