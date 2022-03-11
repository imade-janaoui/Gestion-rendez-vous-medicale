<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <title>Docteur Login </title>
</head>
<body>
<section class="alert">
    <div>
        <div class="message">
              <img src="img/doctor.png" alt="">
            <p>
            Ce espace là de l'inscription juste pour les docteurs.
            </p>

        </div>
        
    </div>
</section>

<section class="forms-section">

  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>
      <form class="form form-login" action="" methode="post">
        <fieldset>
          <legend>Please, enter your email and password for login.</legend> 
          <div class="input-block">
            <label for="login-email" >E-mail</label>
            <input id="login-email" type="email" name="docemail" required>
          </div>
          <div class="input-block">
            <label for="login-password">Mot de passe</label>
            <input id="login-password" type="password" name="docpassword" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-login" id="login" >Login</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Sign Up
        <span class="underline"></span>
      </button>
      <form class="form form-signup" action="" methode="post" onsubmit=" return verifForm()">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-display">
            <div>
                <label for="singup-prenom">Prenom</label>
                <input id="singup-nom" type="text"  name="docprenom"required onblur="verifPseudo()" >
            </div>
            <div>
                <label for="singup-nom">Nom</label>
                <input id="singup-nom" type="text" name="docnom"required onblur="verifPseudo()">
            </div>
          </div>
         
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" name="docemail"required onblur="verifMail()">
          </div>
          <div class="input-block">
            <label for="signup-password">Mot de passe</label>
            <input id="signup-password" type="password" name="docpassword" required>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirmer le mot de passe</label>
            <input id="signup-password-confirm" type="password" name="doConfPpwd" required onblur="verifPass()">
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">N° de dipelome</label>
            <input id="signup-password-confirm" type="text" name="NumDeplome" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup" onclick="waite()" >Continue</button>
      </form>
    </div>
  </div>

</section>


<!-- <script src="js/script.js"></script> -->
<script src="js/main.js"></script>
</body>
</html>