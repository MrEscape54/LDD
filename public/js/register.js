function checkForm(form)
  {
    if(!condition1) {
       alert("Error: error message");
       form.fieldname.focus();
       return false;
    }
    if(!condition2) {
       alert("Error: error message");
       form.fieldname.focus();
       return false;
    }
    return true;
  }


let form = document.getElementById('register')
let elements = form.elements
const regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
let formOk = []
function valid(elem, text) {
  let item = elem.parentNode.querySelector('.obligatorio')
  let span = elem.parentNode.querySelector('span')
  span.style.display = 'none'
  item.style.color = "green"
  item.innerHTML = text
  formOk.map(function(i){
    if(i.name == elem.name) 
      return { name: 'cacac', valid: true}
    else return i
  })
}

function invalid(elem, text) {
  let item = elem.parentNode.querySelector('.obligatorio')
  let span = elem.parentNode.querySelector('span')
  span.style.display = 'none'
  item.style.color = "red"
  item.innerHTML = text
  formOk.map(function(i){
    if(i.name == elem.name) 
      return { name: elem.name, valid: false}
    else return i
   })
}

for (var elem of elements) {
  let obj = {}
  obj.name = elem.name
  obj.valid = true
  formOk.push(obj)

  console.log(formOk)

  elem.addEventListener('blur', function(){
    if (this.name === 'email'){
        if (this.value.trim() == '')
          invalid(this, `El campo ${this.name} es obligatorio.`)
        else if(!regexEmail.test(this.value))
          invalid(this, `El campo ${this.name} debe ser una dirección de correo válida.`)
        else 
          valid(this, "Formato válido")
    } 
    else if (this.name === 'password'){
    let pass = form.querySelector('input[name="password"]')
        if (this.value.trim() == '') 
          invalid(this, `El campo ${this.name} es obligatorio`)
        else 
          valid(this, "")
    } 
  })
}

form.addEventListener('submit', function(e){
  var err = formOk.reduce(function(acc, i){
    if(i.valid == false) 
      return acc + 1
    else return acc
  }, 0)
  
  if(err) 
    e.preventDefault()
})
