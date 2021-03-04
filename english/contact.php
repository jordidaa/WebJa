<!DOCTYPE html>
<html>
    <head>
        <title>Jardineria Algarrada</title>
        <meta charset="utf-8">
        <link rel="icon" type="image/jpeg" href="Imatges/logo1.png">
        <meta name="keywords" content="Jardiners,Jardineros,Gardeners,Jardins,Jardines,Gardens,Algarrada,Girona,La Bisbal">
        <?php include ('../includes/meta.php')?>
    </head>
    <body class="inici">
        <?php include ('../includes/navegacio_en.php')?>
        <div class="row mt-5 mb-5">
            <div class="col-xl-6 col-md-12 text-center">
                <p class="negre roboto" style="font-weight: bold">Jardineria Algarrada</p>
                <p><a class="negre roboto" href="tel:678550907">678 55 09 07</a></p>
                <p><a class="negre roboto" href="mailto:jardinerialgarrada@gmail.com">jardinerialgarrada@gmail.com</a></p>
             </div>
            <div class="col-xl-6 col-md-12"> 
            <form action=""  method="post" class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-xl-12 col-md-12 mb-3">
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Name and surname" name="nom" required>
                    </div>    
                </div>
                
                <div class="form-row">
                    <div class="col-xl-12 col-md-12 mb-3">
                            <input type="email" class="form-control" id="validationCustom02" placeholder="Email" name="email" required>
                                <div class="invalid-feedback">
                                Put a valid email
                                </div>
                    </div>    
                </div>
                <div class="form-row">
                    <div class="col-xl-12 col-md-12 mb-3">
                            <input type="tel" class="form-control" id="validationCustom03" placeholder="Phone" name="telefon" required>
                                <div class="invalid-feedback">
                                Put a valid phone
                                </div>
                    </div>    
                </div>
                <div class="form-row">
                    <div class="col-xl-12 col-md-12 mb-3">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" name="missatge" rows="3"></textarea>
                        </div>
                    </div>
            </div>
            <div class="col-xl-12 col-md-12 mb-3">
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check- roboto" for="invalidCheck">
                        Accept the <a class="negre" href="http://localhost/webja/catala/politica-de-privadesa.php">privacy policy</a>
                    </label>
                    <div class="invalid-feedback">
                        Click to send
                    </div>
                </div>
            </div>
            <div class="form-row">
                    <div class="col-xl-12 col-md-12 mb-3">
                        <button class="botbrown2 btn btn-primary roboto" type="submit" name="submit">Envia</button>
                    </div>
            </div>
            <?php 
            if(isset($_POST['submit'])){
                $to = "jardineriaprova@gmail.com"; // this is your Email address
                $from = $_POST['email']; // this is the sender's Email address
                $nom = $_POST['nom'];
                $telefon = $_POST['telefon'];
                $missatge = $_POST['missatge'];
                $subject = "Tens un nou correu de la teva pagina web";
                $missatgetot = "<p>Nom:". $nom . "</p>" . "<p>Telefon:" . $telefon . "</p>" .  "<p>Missatge:" . $missatge . "</p>";
                $headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";

                mail($to,$subject,$missatgetot,$headers);
                echo "Message sent. Thanks " . $nom . ", we will contact you soon.";
                // You can also use header('Location: thank_you.php'); to redirect to another page.
                // You cannot use header and echo together. It's one or the other.
                }
            ?>
              </div>
        </form>
        
    </div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
        <footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </footer>
    </body>
</html>