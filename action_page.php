<?php include "include/header.php" ?>

<?php
/* Email du destinataire (mettez ici votre email) */
$destinataire = "elisa.della.faille@gmail.com";

/* RÃcupÃration */
$nom = $_POST['nom'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$header = "From: " . $_POST['email'];

/* VÃrification */
if ( $nom == "" ) {
echo "Veuillez indiquer le nom.";
$erreur = true;
}
if ( $subject == "" ) {
echo "Veuillez indiquer le sujet.";
$erreur = true;
}
if ( $message == "" ) {
echo "Veuillez indiquer un message.";
$erreur = true;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "E-mail is not valid";
$erreur = true;
}

/* Envoi du mail */
if ( !$erreur ) {
mail( $destinataire , $objet , $message , $header );
} else {
echo "erreur";
}

Thank you for your message,  <?php echo $_POST["yourname"]; ?><br>
You will be contacted in the shortest delays.


?>

<?php include "include/footer.php" ?>
