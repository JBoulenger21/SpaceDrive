
var newUserMail = document.getElementById('newUserMail');
var newUserPsw = document.getElementById('newUserPsw');
var newUserPswVer = document.getElementById('newUserPswVer');
var newUser = document.getElementById('newUser');

newUserPswVer.addEventListener('input', function(){
    // verifie les valeurs entrées dans les input password et passwordVerif
  if (newUserPsw.value == newUserPswVer.value) {
    // change attribut du submit
    newUser.removeAttribute('disabled');
  }
});

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
