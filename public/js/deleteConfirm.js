let x = document.getElementsByClassName('btn-danger')

for (let i = 0; i < x.length; i++) {
   x[i].onclick = function() {
         let conf = confirm('¿Está seguro de eliminar el item?')     
         if(!conf)  
            return false
   }  
}


