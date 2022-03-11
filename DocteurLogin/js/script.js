const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})





const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})


//edite password
function PwdEdite(){
	// var btn=document.getElementById('docpassword');
	var div=document.getElementById('pwdedite');
	div.removeAttribute('id','pwdedite');
}

//edite email
function EmailEdite(){
	// var btn=document.getElementById('docemail');
	var div=document.getElementById('emailedite');
	div.removeAttribute('id','emailedite');
}



// form validation


function surlinge(champ,erreur)
        {
            if(erreur==true)
            champ.style.border= "1.5px solid red";
         else if (erreur==false)
         champ.style.borderColor="#fff";
            

        }
        function verifPseudo(){
            
            if(document.getElementById('singup-nom').value.length <= 2 || document.getElementById('nom').value.length >= 25)
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
            if(document.getElementById("signup-password").value!=document.getElementById("cnpwd").value)
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