<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="FindTech">
    <meta name="keyword" content="">
    <title>ERP - Contact</title>

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!-- Input tel Stylesheet File -->
    <link href="css/phone.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/intlTelInput.css">

    <link href="css/style.css" rel="stylesheet" />

    <link href="css/contact.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>

<body>
  <div class="container-fluid">
    <!-- Navigation -->
    <nav class="bg-degraded navbar navbar-expand-sm navbar-light" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Logo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger font-bold-white" href="http://www.qualitat-group.net/">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-bold-white js-scroll-trigger" href="#">Actualités</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br>

    <div class="row">
      <?php
        if (isset($_GET['ok'])) {
          if ($_GET['ok']=="1") { ?>
            <div class="alert alert-success alert-dismissible d-block w-50 mx-auto">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <p class="success">Votre message a été envoyé. Merci!</p>
            </div>
          <?php }
          elseif ($_GET['ok']=="0") { ?>
            <div class="alert alert-danger alert-dismissible d-block w-50 mx-auto">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <p class="error">Veuillez bien renseigner tous les champs svp !</p>
            </div>
        <?php  }
        }
      ?>
    </div>
		<div class="wrap-contact100">
			<form method="post" action="contactform/contactform.php" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Laissez nous un message
				</span>
        
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Votre nom</span>
					<input class="input100" type="text" name="lastName">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Votre prénom</span>
					<input class="input100" type="text" name="firstName">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Votre e-mail</span>
					<input class="input100" type="email" name="email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Tél</span>
					<input class="input100 no-border" type="tel" name="phone" id="phone">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 no-border-bottom validate-input" data-validate = "Message is required">
					<textarea class="input100 b-y" name="message" placeholder="Votre message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Envoyer
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>

    <footer>
      <div class="footer">
          <div class="text-center font-bold-white">
            <div class="copyright text-center font-bold-white">
              &copy; ERP. Tous droits réservés.
          </div>
        </div>
        <div class="pull-right">
          <a href="#" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
        </div>
      </div>
    </footer>
  </div>

  <!-- jQuery library -->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

  <!-- Popper JS -->
  <script src="vendor/bootstrap/js/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- input tel script -->
  <script src="js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      geoIpLookup: function(callback) {
        $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
          var countryCode = (resp && resp.country) ? resp.country : "";
          callback(countryCode);
        });
      },
      // hiddenInput: "full_number",
      initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
      utilsScript: "js/utils.js",
    });
  </script>
</body>

</html>
