
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $telephone = $_POST["telephone"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];

  $to = "alpimix.kontakt@gmail.com";  // Zmień na prawidłowy adres e-mail odbiorcy
  $subject = "Nowa wiadomość ze strony";
  $message = "Imię: $name\n";
  $message .= "Telefon: $telephone\n";
  $message .= "Email: $email\n";
  $message .= "Szczegóły: $comment\n";
  $headers = "From: $email\r\n";
  
  if (mail($to, $subject, $message, $headers)) {
    echo "Wiadomość została wysłana.";
} else {
echo "Wystąpił błąd podczas wysyłania wiadomości.";
}
}
?>



