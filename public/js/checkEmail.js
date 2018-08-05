window.onload = function(){

   let form = document.getElementById('login');
   let elements = form.elements;
   const regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

   function valid(elem, text) {
     let item = elem.parentNode.querySelector('.obligatorio');
     let span = elem.parentNode.querySelector('span');
     span.style.display = 'none';
     item.style.color = "green";
     item.innerHTML = text;
   }

   function invalid(elem, text) {
     let item = elem.parentNode.querySelector('.obligatorio');
     let span = elem.parentNode.querySelector('span');
     span.style.display = 'none';
     item.style.color = "tomato";
     item.innerHTML = text;
   }

   for (var elem of elements) {

     elem.addEventListener('blur', function(){
       if (this.name === 'email'){
           if (this.value.trim() == '')
             invalid(this, `El campo ${this.name} es obligatorio.`);
           else if(!regexEmail.test(this.value))
             invalid(this, `El campo ${this.name} debe ser una dirección de correo válida.`);
           else
             valid(this, "Formato válido");
       }
       else if (this.name === 'password'){
       let pass = form.querySelector('input[name="password"]');
           if (this.value.trim() == '')
             invalid(this, `El campo ${this.name} es obligatorio`);
           else
             valid(this, "");
       }
     });
   }

   form.addEventListener('submit', function(e){

     e.preventDefault();

     let email = document.getElementById('mail');
     let msg = document.getElementById('mandatory');

     if(email.value != '') {

     fetch(`http://ldd.test/api/getemail/${email.value}`)
       .then(function(res){
         return res.json();
       }).then( function(data){
         if(data == 0) {
            msg.style.color = 'tomato';
            respuesta='Estas credenciales no coinciden con nuestros registros';
         }
         else {
            respuesta='';
            form.submit();
         }
         msg.innerText = respuesta;
       }).catch(function(err){
         console.error(err);
       });
      }
   });
 };
