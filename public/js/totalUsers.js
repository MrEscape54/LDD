let users = document.getElementById('users')

window.addEventListener('load', function(){

   showUsers()
   setInterval(showUsers, 30000);

   function showUsers() {
      fetch('http://ldd.test/api/getusers')
      .then(function(res){
         return res.json()
      }).then( function(data){ 
         users.innerText = `Ya somos ${data} usuarios`;
      })
   }
});
