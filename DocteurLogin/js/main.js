const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})
// -------- atende pour verification-----
function waite(){

	
		swal( "Merci de vous être inscrit sur notre plateforme Mon Docteur, veuillez patienter pendant que nous vérifions votre numéro de dipelome. Un e-mail sera envoyé à votre compte email, afin de confirmer votre compte Mon Docteur.", "Cliquez sur le bouton!!", "success");
	  
}





// form validiation


function surlinge(champ,erreur)
        {
            if(erreur==true)
            champ.style.border= "1.5px solid red";
         else if (erreur==false)
         champ.style.borderColor="#fff";
            

        }
        function verifPseudo(){
            
            if(document.getElementById('singup-nom').value.length <= 2 || document.getElementById('singup-nom').value.length >= 25)
            {
                surlinge(document.getElementById('singup-nom'),true);
            return false;

            }
            else{
            surlinge(document.getElementById('singup-nom'),false);
            return true;
         }

        }
        function verifMail(){
          var  w=/^[a-zA-Z0-9._-]+@[a-zA-Z.]{2,}\.[a-z]{2,3}$/;
          if(!(w.test(document.getElementById("signup-email").value)))
          {
              surlinge(document.getElementById("signup-email"),true);
              return false;
          }else
          {
          surlinge(document.getElementById("signup-email"),false);
          return true;
          }
        }
        function verifPass()
        {
            if(document.getElementById("signup-password").value!=document.getElementById("signup-password-confirm").value)
            {
            surlinge(document.getElementById("signup-password-confirm"),true);
            return false;
            }
            else
            {
                surlinge(document.getElementById("signup-password-confirm"),false)
                return true;
            }
        }
        function verfForm(){
            var name=verifPseudo();
            var pwd=verifPass();
           var  email=verifMail();

            if(name && pwd && email)
            return true;
            else
            return false;
        }