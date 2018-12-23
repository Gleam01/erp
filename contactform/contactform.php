<?php
  if (!empty($_POST['lastName']) && !empty($_POST['firstName'])  && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message'])) {
    $_POST['lastName'] = strip_tags($_POST['lastName']);
    $_POST['firstName'] = strip_tags($_POST['firstName']);
    $_POST['email'] = strip_tags($_POST['email']);
    $_POST['phone'] = strip_tags($_POST['phone']);
    $_POST['message'] = strip_tags($_POST['message']);

    $header="MIME-Version: 1.0\r\n";
    $header.='From:"ERP Website'."\n";
    $header.='Content-Type:text/html; charset="utf-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';
    $message = '
    <html>
    <head>
      <title>Formulaire de contact</title>
      <meta charset="utf-8"/>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
      <div class="container">
        <div class="row">
          <p class="text-center">
            Un utilisateur vient de soumettre le formulaire de contact !
            Voici les informations entrées par l\'utilisateur : <br>
            Nom : '.$_POST['lastName'].'<br>
            Prénom : '.$_POST['firstName'].'<br>
            Adresse e-mail : '.$_POST['email'].'<br>
            Numéro de téléphone : '.$_POST['phone'].'<br><br>
            Message : '.$_POST['message'].'<br>
          </p>
        </div>
      </div>
    </body>
    </html>';
    mail('commercial@erp-africa.net', "Formulaire de contact", $message, $header);
    header('Location: ../contact.php?ok=1');
  }
  else {
    header('Location: ../contact.php?ok=0');
  }
