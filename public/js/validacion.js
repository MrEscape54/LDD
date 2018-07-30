
var formreg = document.getElementById('reg-form');
var error = document.querySelector('.error');
var inputName = formreg.elements.nombre;
var inputEmail = formreg.elements.email;
var inputPass = formreg.elements.contraseña;
var inputPass2 = formreg.elements.contraseña_confirmation;

inputName.onfocus = function() {
  error.innerText = '';
};

inputName.onblur = function() {
  if(this.value == '') {
    error.innerText = 'Por favor escribí tu nombre de usuario';
  }
};

inputEmail.onfocus = function() {
  error.innerText = '';
};

inputEmail.onblur = function() {
  if(this.value == '') {
    error.innerText = 'Por favor escribí tu email';
  }
};

inputPass.onfocus = function() {
  error.innerText = '';
};

inputPass.onblur = function() {
  if(this.value == '') {
    error.innerText = 'Por favor escribí tu contraseña';
  }
};

inputPass2.onfocus = function() {
  error.innerText = '';
};

inputPass2.onblur = function() {
  if(this.value == '') {
    error.innerText = 'Por favor escribí otra vez tu contraseña';
  }
};

formreg.addEventListener('submit', function(e){
e.preventDefault();

if(inputName.value == '') {
error.innerText = 'Sin nombre no podés registrarte';
} else if(inputEmail.value == '') {
  error.innerText = 'Sin email no podés registrarte';
} else if(inputPass.value == '') {
  error.innerText = 'Sin contraseña no podés registrarte';
} else if(inputPass2.value == '') {
  error.innerText = 'Tenés que repetir la contraseña';
} else {
  this.submit();
}
});
