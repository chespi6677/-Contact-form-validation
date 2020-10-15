<!DOCTYPE html>
<html>

<head>
    <title>Contact form validation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="validate-contact-details.js"></script>
</head>

<body>
    <?php
$error=$_GET['Error'];
$message=$_GET['Message'];
$to_show=$_GET['ToShow'];
if($error==0 && $to_show==true){
    echo "<div class='py-1'>
    <form  action='retornar.php' method='post'>
    <div class='container'>
    <div class='row'>
        <div class='col-md-8 offset-md-2'>
            <div class='alert alert-danger' role='alert'>
                             $message                 
  <button type='submit'  class='close'>
      <span aria-hidden='true'>&times;</span>      
  </button>
 
</div>
        </div>
    </div>
</div>
</form>
</div>";
}
if($error== 1 && $ToShow==false){
    echo "<div class='py-1'>
    <form  action='retornar.php' method='post'>
    <div class='container'>
    <div class='row'>
        <div class='col-md-8 offset-md-2'>
            <div class='alert alert-success' role='alert'>
                             $message                 
  <button type='submit'  class='close'>
      <span aria-hidden='true'>&times;</span>      
  </button>
 
</div>
        </div>
    </div>
</div>
</form>
</div>";
}
?>
<div class="col-md-8 offset-md-2 py-2">
<h1>CONTACT FORM VALIDATION </h1>
</div>
    <form id="forms" action="validar.php" method="post">
        <div class="col-md-8 offset-md-2 py-4">
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" id="nombre" name="name" onkeyup="validarNombre()"
                    placeholder="Write your name" pattern="[A-Za-z ]+" minlength="10" maxlength="45" required />
                <div class="py-1">

                    <div id="messageName" class="alert-validation" hidden>
                        write only letters
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" id="correo" name="email" onkeyup="validarCorreo()"
                    placeholder="example@server.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" minlength="15"
                    maxlength="60" required />
                <div class="py-1">
                    <div id="messageEmail" class="alert-validation" hidden>
                        write a valid email
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input class="form-control" type="text" id="telefono" name="phone" onkeyup="validarTelefono()"
                    placeholder="961-000-0000" pattern="\d{3}[\-]\d{3}[\-]\d{4}" minlength="10" maxlength="12"
                    required />
                <div class="py-1">
                    <div id="messagePhone" class="alert-validation" hidden>
                        write a valid phone
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" rows="4" id="message" placeholder="Message" name="message"
                    onkeyup="validarMessage()" minlength="10" maxlength="120" required></textarea>
                <div class="py-1">
                    <div id="messageCustomer" class="alert-validation" hidden>
                        write only letters
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-info">Validar</button>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>