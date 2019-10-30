<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Blue Mountain State University Basketball All-Time Players</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css">

  <style>
    h1 {
      text-align: center;
      font-size: 30px;
      color: blue;
    }
    .footer {
		  position: absolute;
		  bottom: 0;
		  width: 100%;
		  height: 2.5rem;            /* Footer height */
		}
  </style>
  <!-- Code found on https://stackoverflow.com/questions/12887702/javascript-display-new-page-when-submit-html-form -->
  <script>
    // Called on body's `onload` event
    function init() {
        // Retrieving the text input's value which was stored into localStorage
        var applicationFirstName = localStorage.getItem("applicationFirstName");
        var applicationLastName = localStorage.getItem("applicationLastName");
        var applicationEmail = localStorage.getItem("applicationEmail");

        // Writing the value in the document
        document.getElementById("thankYouMessage").innerHTML ="Thank you for applying " + applicationFirstName + " " + applicationLastName + "! We will contact you shortly through email at " + applicationEmail + ".";
    }
  </script>
</head>

<body onload="init()">
  <?php include '../resources/navigation.php'; ?>

  <div class="container">
    <div class="alert alert-info">
      <p id="thankYouMessage"></p>
    </div>
    <div class="row justify-content-center">
      <img src="img/thumbs_up.png" alt="A thumbs up.">
    </div>
  </div>

  <?php include '../resources/footer.php'; ?>
  
  <?php include '../resources/scripts.php'; ?>
</body>
</html>