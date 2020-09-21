var newUserMail = document.getElementById('newUserMail');
var newUserPsw = document.getElementById('newUserPsw');
var newUserPswVer = document.getElementById('newUserPswVer');
var newUser = document.getElementById('newUser');
var btnformnewservice = document.getElementById('btnformnewservice');
var btnformnewnosservices = document.getElementById('btnformnewnosservices');
var btnformnewcategorie = document.getElementById('btnformnewcategorie');
var btnformnewprojet = document.getElementById('btnformnewprojet');

if(typeof addEventListener('click', OpenFormNewService) !== 'undefined'){
btnformnewservice.addEventListener('click', OpenFormNewService);
btnformnewnosservices.addEventListener('click', OpenFormNewNosService);
btnformnewcategorie.addEventListener('click', OpenFormNewCategorie);
btnformnewprojet.addEventListener('click', OpenFormNewProjet);
}

if(typeof addEventListener('input', verifPassword) !=='undefined'){
newUserPswVer.addEventListener('input', verifPassword);
}

function verifPassword(){
  if (newUserPsw.value == newUserPswVer.value) {
    newUser.removeAttribute('disabled');
  }
}

function OpenFormNewService(){
  document.getElementById('FormNewService').style.display = "block";
  document.getElementById('FormNewNosServices').style.display = "none";
  document.getElementById('FormNewCategorie').style.display = "none";
  document.getElementById('FormNewProjet').style.display = "none";
};

function OpenFormNewNosService(){
  document.getElementById('FormNewService').style.display = "none";
  document.getElementById('FormNewNosServices').style.display = "block";
  document.getElementById('FormNewCategorie').style.display = "none";
  document.getElementById('FormNewProjet').style.display = "none";
};

function OpenFormNewCategorie(){
  document.getElementById('FormNewService').style.display = "none";
  document.getElementById('FormNewNosServices').style.display = "none";
  document.getElementById('FormNewCategorie').style.display = "block";
  document.getElementById('FormNewProjet').style.display = "none";
};

function OpenFormNewProjet(){
  document.getElementById('FormNewService').style.display = "none";
  document.getElementById('FormNewNosServices').style.display = "none";
  document.getElementById('FormNewCategorie').style.display = "none";
  document.getElementById('FormNewProjet').style.display = "block";
};


// var idform = document.getElementById('idform');
// idform.addEventListener('submit', function(){
// if(password.value != '' && email.value != '' && passwordconfirm.value != '' ){
// return true;
// } else{
// if(password.value == ''){
// alert('Mot de passe requis!');
// }
// if(email.value == ''){
// alert('Email requis!');
// }
// if(passwordVerif.value == ''){
// alert('Mot de passe requis!');
// }
// return false;
// }
// })
