function ajouter(){
    var formlogin=document.getElementById('loginform');
    var btnsct=document.getElementById('btnScnt');

    var formsignin=document.getElementById('signinform');
    var btnsin=document.getElementById('btnsin');

    formlogin.setAttribute('class','ajouter')
    btnsct.removeAttribute('class','btn');

    formsignin.removeAttribute('class','ajouter');
    btnsin.setAttribute('class','btn');

}
function supr(){

    var formlogin=document.getElementById('loginform');
    var btnsct=document.getElementById('btnScnt');

    var formsignin=document.getElementById('signinform');
    var btnsin=document.getElementById('btnsin');

    formlogin.removeAttribute('class','ajouter')
    btnsct.setAttribute('class','btn');

    formsignin.setAttribute('class','ajouter');
    btnsin.removeAttribute('class','btn');
  
}
// function pour afficher le temps de travaille

function ulicon(){
    var ul=document.getElementById('ulicon');
    ul.removeAttribute('class','ulhidden');
    var i=document.getElementById('icon');
    i.setAttribute("style","visibility: collapse;");
}
function iconup(){
    var ul=document.getElementById('ulicon');
    ul.setAttribute('class','ulhidden');
    var i=document.getElementById('icon');
    i.removeAttribute("style","visibility: collapse;");
   

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