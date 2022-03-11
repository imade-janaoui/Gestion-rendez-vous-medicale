<?php
 include 'headerlogin.php';
?>

<div class="loginForm">
    <div>
        <div class="login">
            <p > J'ai déjà un compte Mon Docteur</p>
            <form action="" method="post" id="loginform" >
                <label class="labelicon" for="">
                    <i class="fas fa-envelope"></i>
                        <input class="lonputt" type="text" name="gmail_tele" placeholder="Adresse email ou numéro de téléphone" required>
                </label>
                   
                <label class="labelicon" for="">
                <i class="fas fa-lock"></i>
                    <input class="lonputt" type="password" placeholder="Mot de passe" required>
                </label>
                   
                <label id="remember" >
                <input type="checkbox" name="remember_username" checked>
                <span>Se souvenir de mon identifiant</span>
                

                </label>
                <button type="submit" class="submit">
                Se connecter
                </button>
                 <div class="resst_pass">
                    <a href="#">
                    Mot de passe oublié ?
                    </a>
                 </div>
            </form>
        <div class="conn">
        <button onclick="supr()"  id="btnScnt" class="btn" >Se connecter</button>
        <!-- <script src="../js/main.js"></script> -->
        </div>
       
        </div>
       
        <div class="signin">
            <p>Nouveau sur Mon Docteur ?</p>
            <form action="" method="post" class="ajouter" id="signinform" onsubmit=" return verifForm()">
                <label class="labelicon" for="">
                        <i class="fas fa-phone-alt"></i>
                        <input type="text" class="lonputt"  placeholder="Téléphone portable (sinon fixe)" required>
                       
                </label>
                <p id="VtrMot">Un code va vous être envoyé sur ce numéro pour valider votre compte.</p>
                <label class="labelicon" for="">
                      <i class="fas fa-user"></i>
                    <input type="text" id="singup-nom" class="lonputt" placeholder="Nom d'utilisateur"required onblur="verifPseudo()">
                </label>
                
                <label  class="labelicon" for="">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="signup-email" class="lonputt" placeholder="Votre adresse email"required onblur="verifMail()">
                </label>
                
                <label class="labelicon" for="">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="signup-password"  name="password" placeholder="choisissez un mot de passe" class="lonputt"required >
                </label>
                <label class="labelicon"  for="">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="conforme-password"  id="signup-password-confirm"  placeholder="confermez votre mot de passe" class="lonputt" required onblur="verifPass()">
                   
                </label>
                <p id="VtrMot" class="VtrMot">Votre mot de passe vous permettra de gérer vos rendez-vous médicaux.</p>
                <label id="remember" >
                    <input type="checkbox" name="coockis" required>
                <span> J'accepte les  Conditions d'Utilisation de Mon Docteur </span>
                </label>
                <label id="remember"  >
                    <input type="checkbox" name="remember_username"  checked required>
                <span>Se souvenir de mon identifiant</span>
                <span id="span">ds mon identifiant</span>
                
                </label>
                <button type="submit" class="submit">
                S'inscrire
                </button>
            </form>
            <div class="conn">
                <button onclick="ajouter()" id="btnsin">
                    S'inscrire
                </button>
            </div>

        </div>
    </div>
</div>
<script src="../js/main.js"></script>
<?php
 include 'footerlogin.php';
?>