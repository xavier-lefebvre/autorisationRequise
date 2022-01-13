
<?php
$age = (int)$_POST['age'];
$check = false;

if ($age >= 18) {
    echo "<script type=\"text/javascript\"> alert(\"Vous avez l'âge requis pour accéder à ce site. Bienvenue.\");
    window.location.href='accueil.html'; </script>";
    
} else {
    echo "<script type=\"text/javascript\"> alert(\"Vous n'avez pas l'âge requis pour accéder à ce site. Au revoir.\");
    window.location.href='https://www.avocat.fr/actualites/protection-des-mineurs-sur-internet-que-dit-la-loi'; </script>";
}

?>

