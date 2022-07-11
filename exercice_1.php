<?php
// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard',60], ['Gérard',120]];
$moutonsValeurs = array_map(function($n) { return $n[1]; }, $moutons);

// Je calcule la moyenne de la valeur de mes moutons
$moyValMoutons = array_sum($moutonsValeurs) / count($moutonsValeurs);
echo "Moyenne de la valeur de mes ". count($moutons)." moutons : ".$moyValMoutons;

$chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";

// Ajout de 100 moutons aléatoires

// UPGRADE : Dans ce code il n'est pas vraiment nécessaire de générer des noms de moutons
// puisque l'on calcule la moyenne de leur valeur, on n'utilise donc pas leur nom.
for ($j=0; $j < 100; $j++) {
	$nbCharsNameMouton = rand(3,15);
	$randValMoutons = rand(10,200);
	// Je génère des noms aléatoires pour les nouveaux moutons
    $randNameMouton = substr(str_shuffle(str_repeat($chaine, $nbCharsNameMouton)), 1, $nbCharsNameMouton);
	array_push($moutons, [$randNameMouton, $randValMoutons]);
	array_push($moutonsValeurs, $randValMoutons);
}
echo PHP_EOL;

// Je calcule à nouveau la moyenne
$moyValMoutons_2 = array_sum($moutonsValeurs) / count($moutonsValeurs);
echo "Moyenne de la valeur de mes ". count($moutons)." moutons : ".$moyValMoutons_2;


/* Factorisez au mieux le code ci-dessus
⚠ Dans votre code n'hésitez pas à laissez des remarques sur de futures améliorations possibles.

Important : Pour éviter un soucis de perte de session, copiez-collez l'exercice pour plus tard, terminez d'abord le questionnaire et envoyez les fichiers compressés à l'adresse indiquée dans le mail qui vous a été envoyé en précisant votre nom et prénom. 

⚠ Il est recommandé d'utiliser Google Drive ou un service similaire pour transmettre les exercices. Votre candidature risque d'être ignorée si nous ne les recevons pas ! */