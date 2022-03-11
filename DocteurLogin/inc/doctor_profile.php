<?php
		require 'sidebar.php';
       require 'doc_navbar.php';
 ?>
<script src="https://kit.fontawesome.com/983051cf5c.js" crossorigin="anonymous"></script>
<section class="formulaire">
    <form action="" method="Post">
        <div class="docimg">
                <img src="../img/unknown.png" alt="">
                <input type="file" name="docimg" id="docimg">
        </div>
        <div class="namedoc">
            <div>
            <input type="text"  id="docprenom" placeholder="Prenom">
            </div>
            <div>
                <input type="text" id="docname" placeholder="Nom">
            </div>
        </div> 
        
        
        <div class="docemail">
            <input type="email" value="" id="docemail" >
            <i class="fa-solid fa-gear" onclick="EmailEdite()"></i>
           
        </div>
        <!-- pour editer email -->
        <div id="emailedite" >
            <p>Changer e-mail :</p>
            <input type="email" value name="doctoremail"  placeholder="Nouveau e-mail" id="docemail" >
            
        </div>


        
        <!-- pour editer password -->
        <div class="docpassword">
            
            <input type="password" value="" id="docpassword" >
            <i class="fa-solid fa-gear" onclick="PwdEdite()"></i>
           
        </div>
        <div id="pwdedite">
            <p>Changer le mot de passe :</p>
            <input type="password" value="" name="newpwd" placeholder="Nouveau mot de passe" id="docpassword">
            <input type="password" value="" name="newconfpwd"  placeholder="Confermer mot de passe" id="docpassword">

        </div>
        <script src="../js/script.js"></script>
            <!-- prsenttion -->
        <div>
            <p>presentation :</p>
            <textarea name="presentation" id="presentation" cols="30" rows="10"></textarea>
        </div>
        <!-- les diplomes -->
        <div class="diplomes">
            <p>les diplomes :</p>
            <textarea name="diplomes" id="diplomes" cols="30" rows="10"></textarea>
        </div>

        <!-- Horaires et contacts -->
        <div class="horaires">
        <p>Ouverture du secrétariat</p>


    <div>
             <div>
                <span>Lundi:</span>
                <span>Mardi:</span>
                <span>Mercredi:</span> 
                <span>Jeudi:</span>
                <span>Vendredi:</span>
                <span>Samedi:</span>
             </div>
                <div>
                            <div>
                                    <input type="time" id="appt" name="appt"
                            min="08:00" max="18:00" required>
                            <span> Jusqu'à</span>
                            <input type="time" id="appt" name="appt"
                            min="08:00" max="18:00" required>

                                </div>
                                <div>
                                    <input type="time" id="appt" name="appt"
                        min="08:00" max="18:00" required>

                        <span> Jusqu'à</span>
                            <input type="time" id="appt" name="appt"
                            min="08:00" max="18:00" required>

                        </div>
                                <div> <input type="time" id="appt" name="appt"
                        min="08:00" max="18:00" required>
                        <span> Jusqu'à</span>
                            <input type="time" id="appt" name="appt"
                            min="08:00" max="18:00" required>

                        </div>
                                <div> 
                                    <input type="time" id="appt" name="appt"
                        min="08:00" max="18:00" required>
                        <span> Jusqu'à</span>
                            <input type="time" id="appt" name="appt"
                            min="08:00" max="18:00" required>

                        </div>
                                <div> <input type="time" id="appt" name="appt"
                        min="08:00" max="18:00" required>
                        <span> Jusqu'à</span>
                            <input type="time" id="appt" name="appt"
                            min="08:00" max="18:00" required>

                        
                        </div>
                                <div>  <input type="time" id="appt" name="appt"
                        min="08:00" max="18:00" required>
                        <span> Jusqu'à</span>
                            <input type="time" id="appt" name="appt"
                            min="08:00" max="18:00" required>

                        
                        </div>
                </div>
                


    </div>
        
        </div>
        <!-- localisation address -->

        <div class="address">
        <p>localisation et address</p>
            <textarea name="address" id="address" cols="30" rows="10"></textarea>

            <p>Iframe localisation</p>
            <input type="text" id="iframe" placeholder="Couper iframe de google maps ">
        </div>

        <!-- tarifs -->
        <div class="tarifs">
        <p>Les Tarifs</p>
        <div> 
            <span>Consultation de suivi de médecine générale</span>
            <input id="inpTarifs" type="text" name="tarife1">
        </div>
        <div> 
            <span>Urgence</span>
            <input id="inpTarifs" type="text" name="tarife2">
        </div>
        <div> 
            <span>Consultation de pédiatrie</span>
            <input id="inpTarifs" type="text" name="tarife3">
        </div>
        <div>
             <span>Visite à domicile</span>
             <input id="inpTarifs" type="text" name="tarife4">
        </div>
        <div>
            <span>Consultation vidéo</span>
            <input id="inpTarifs" type="text" name="tarife5">
        </div>
        </div>
    </form>

</section>