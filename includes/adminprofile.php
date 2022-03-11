<?php
include 'headerlogin.php'

?>



<section>
    <div class="headerfix">
        <div class="header">
            <ul>
                <li><a href="#essentiel">L'essentiel</a></li>
                <li><a href="#Carte">Carte</a></li>
                <li><a href="#Presentation">Présentation</a></li>
                <li><a href="#Horaires">Horaires</a></li>
                <li><a href="#Tarifs">Tarifs</a></li>
            </ul>
        </div>
    </div>
  
    <!-- profile Docteur -->
    <div class="profile">
            <div class="nom">
                <div>
                    <img src="../img/unknown.png" alt="">
                </div>
                <div >
                    <h3>Dr Imade Janaoui</h3>
                    <p>Médecin généraliste</p>
                </div >
            </div>
            <div id="essentiel" ></div>
                <div class="essentiel" >
                    <div>
                        <div>
                            <h3><i class="far fa-regular fa-dollar-sign"></i>Tarifs et remboursements </h3>
                            <div class="paragraph">
                                <p>Conventionné secteur 1</p>
                                <p>Carte Vitale acceptée</p>
                                <p>Tiers payant : Sécurité sociale</p>
                                <a href="">Voir les tarifs</a>
                        </div>
                        </div>
                        <div>
                            <h3> <i class="far fa-regular fa-money-check"></i>Moyens de paiement</h3>
                            <div class="paragraph">
                                <p>Cartes bancaires non acceptées</p>
                                <p>Chèques et espèces</p>
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- localisation -->
            <div id="Carte"></div>
            <div class="carte " >
                <div>
                    <h3><i class="far fa-map-marker-alt"></i>Carte et informations d'accès</h3>
                    <div class="paragraph">
                        <p>35 Rue Théodule Ribot, 22000 Saint-Brieuc</p>
                        <h4>Parking public</h4>
                        <p>23 Rue Philibert Delorme, Saint-Brieuc</p>
                        <h4>Informations pratiques</h4>
                        <p>Rez-de-chaussée</p>
                        <p>Accès handicapé</p>
                    </div>
                </div>
                <div class="localisation">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.6171732740754!2d-7.553730935707513!3d33.58928769943344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7ccea1c6055c3%3A0x219c7b78f2a61be3!2sHospital%20Mohamed%20V%2C%20Casablanca%2020250!5e0!3m2!1sen!2sma!4v1644424023225!5m2!1sen!2sma" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <!-- Presentation -->
            <div id="Presentation"></div>
            <div class="Presentation" >
            <h3> <i class="far fa-regular fa-indent"></i>Présentation</h3>
                <div>
                    <div>
                        
                        <p>
                        Le médecin généraliste accueille les enfants et les adultes pour tous types de soins médicaux généraux (consultation, contrôle annuel, vaccination, bilan de santé). Il assure également un suivi des patients dans le temps et les oriente vers des médecins spécialistes en cas de besoin.
                        </p>
                        <?php 
                        ?>
                        <img src="" alt="">

                        <?php ?>
                    </div>
                    <div class="langue">
                        <h4>Langues parlées</h4>
                        <?php ?>
                            <p>Francais</p>
                        <?php ?>
                    </div>
                </div> 
                <div>
                    <!-- deplomes.... -->
                    <h3><i class="far fa-regular fa-graduation-cap"></i>Diplômes nationaux et universitaires</h3>
                    <?php?>

                </div>
            </div>
            <div id="Horaires"></div>
            <div class="Horaires" >
                <h3><i class="far fa-regular fa-clock"></i>Horaires et contacts</h3>
                <div  >
                    <div class="paragraph">
                        <p>Ouverture du secrétariat</p>
                        <ul>
                            <li>Lundi :08h30 - 19h00 <i class=" far fa-solid fa-caret-down" onclick="ulicon()" id="icon"></i></li>
                            <div id="ulicon" class="ulhidden">
                                    <li>Mardi :08h30 - 19h00</li>
                                    <li>Mercredi :08h30 - 19h00</li>
                                    <li>Jeudi :08h30 - 19h00</li>
                                    <li>Vendredi :08h30 - 19h00</li>
                                    <li>Samedi :08h30 - 19h00<i class="far fa-solid fa-caret-up" id="icon-up" onclick="iconup()"></i></li>
                             </div>
                        </ul>
                        <script src="../js/main.js"></script>
                    </div>
                    <div>
                        <p>Contact d'urgence</p>
                        <span>En cas d'urgence, contactez le 15 (Samu)</span>
                    </div>
                </div>
            </div>
            <div id="Tarifs"></div>
            <div class="Tarifs" >
                <div>
                    <h3><i class="far fa-solid fa-dollar-sign"></i>Tarifs</h3>
                </div>
                <div class="prix paragraph" >
                    <div>
                        <p>Consultation de suivi de médecine générale</p>
                        <span>DH</span>
                    </div>
                    <div>
                        <p>Urgence</p>
                        <span>DH</span>
                    </div>
                    <div>
                        <p>Consultation de pédiatrie</p>
                        <span>DH</span>
                    </div>
                    <div>
                        <p>Visite à domicile</p>
                        <span>DH</span>
                    </div>
                    <div>
                        <p>Consultation vidéo</p>
                        <span>DH</span>
                    </div>

                </div>
                <div class="paragraph">
                    <p>Ces honoraires vous sont communiqués à titre indicatif par le praticien. Ils peuvent varier selon le type de soins finalement réalisés en cabinet, le nombre de consultations et les actes additionnels nécessaires. En cas de dépassement des tarifs, le praticien doit en avertir préalablement le patient.</p>
                </div>
            </div>
    </div>
    
</section>


<?php
include 'footerlogin.php'

?>