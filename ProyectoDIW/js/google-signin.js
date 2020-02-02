$(function(){

    //Cuando cargue la API de Google
    gapi.load('auth2', function(){
        auth2 = gapi.auth2.init({
          client_id: '387402295013-ksb2t1i15ob162otbs43pf9967nck6q0.apps.googleusercontent.com',
          cookiepolicy: 'single_host_origin',
        })
        
        attachSignin(document.getElementById("btnGoogleSignin")); 
    });
})

function attachSignin(element) {
    console.log("AQUI");
    auth2.attachClickHandler(element, {},
        function(googleUser) {
            console.log('Signin state changed to ', val);

        }, function(error) {
        });
    auth2.isSignedIn.listen(signinChanged);      
}

var signinChanged = function (val) {
    console.log('Signin state changed to ', val);
    if (auth2.isSignedIn.get()){
        var perfil = auth2.currentUser.get().getBasicProfile();
        $.ajax({
            //Metodo por el que se va a enviar la solicitud
            type: "POST",

            //URL del archivo del servidor que va a mostrar la respuesta
            url: "includes/ajax/google-signin.php",

            //Datos que seran enviados
            data:{
                username:perfil.getName(),
                nombre:perfil.getGivenName(),
                apellido1:perfil.getFamilyName(),
                email:perfil.getEmail(),
                imagen:perfil.getImageUrl()
            },
            //Tipo de dato que va a devolver la respuesta
            dataType: "json",

            //En caso de recibir respuesta exitosa
            success: function (response) { 
                if (response.exito=="true") 
                    location.reload(true);
                else
                    console.log(response)
            },

            error: function(response){
                console.log(response);
                alert(response);
            }
        });   
    }
  }
  
  function signOut() {
      console.log("Logout");
      if (auth2.isSignedIn.get())
        auth2.disconnect();

  }


function comprobarSiExiste(){
    existe=true;

    $.ajax({
        //Metodo por el que se va a enviar la solicitud
        type: "POST",

        //URL del archivo del servidor que va a mostrar la respuesta
        url: "includes/pruebaAjax.php",

        //Datos que seran enviados
        data:{
            nombre:asd
        },
        //Tipo de dato que va a devolver la respuesta
        dataType: "json",

        //En caso de recibir respuesta exitosa
        success: function (response) {  
            existe=true;
        },

        error: function(response){
            existe=false;
        }
    });   

    return existe;
}