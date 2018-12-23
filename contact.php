<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="FindTech">
    <meta name="keyword" content="">
    <title>ERP - Contact</title>

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!-- Main Stylesheet File -->
    <link href="css/style1.css" rel="stylesheet">

    <!-- Input tel Stylesheet File -->
    <link href="css/phone.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->

    <link href="css/responsive.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/intlTelInput.css">

    <link href="css/style.css" rel="stylesheet" />

    <link href="css/contact.css" rel="stylesheet" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
  </head>

<body>
  <div class="container-fluid">
    <header>
      <nav class="navbar navbar-expand-sm bg-degraded justify-content-end">
        <div class="navbar-brand">
          <a class="font-bold-white" href="#">Gérer ses entreprises devient plus simple avec ERP Africa !</a>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link font-bold-white" href="http://www.qualitat-group.net/">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-bold-white" href="#">Actualités</a>
          </li>
        </ul>
      </nav>
    </header>

		<div class="wrap-contact100">
			<form method="post" action="contactform/contactform.php" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Laissez nous un message
				</span>
        
        <?php
          if (isset($_GET['ok'])) {
            if ($_GET['ok']=="1") { ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p class="success">Votre message a été envoyé. Merci!</p>
              </div>
            <?php }
            elseif ($_GET['ok']=="0") { ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p class="success">Veuillez bien renseigner tous les champs svp !</p>
              </div>
          <?php  }
          }
        ?>

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
            <div class="copyright">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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