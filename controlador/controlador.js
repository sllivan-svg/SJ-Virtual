function registrar(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    console.log(email);
    console.log(password);
    firebase.auth().createUserWithEmailAndPassword(email, password)
    .catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...
      });
    window.location = "../vista/vistaLogin.php";
}

function login(){
    var iemail = document.getElementById('ingresoemail').value;
    var ipassword = document.getElementById('ingresopassword').value;

    firebase.auth().signInWithEmailAndPassword(iemail, ipassword)
    .catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        
        // ...
      });
}

function observador(){
  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      // User is signed in.
      console.log('Usuarios inicio sesion');
      window.location = "../vista/vistaPrincipal.php";
      var displayName = user.displayName;
      var email = user.email;
      var emailVerified = user.emailVerified;
      var photoURL = user.photoURL;
      var isAnonymous = user.isAnonymous;
      var uid = user.uid;
      var providerData = user.providerData;
      // ...
    } else {
      // User is signed out.
      // ...
      console.log('No se ha iniciado sesion');
    }
  });
}
observador();

function cerrarsesion(){
  firebase.auth().signOut()
  .then(function(){
    console.log('Saliendo.....')
    window.location = "../vista/vistaLogin.php";
  })
  .catch(function(error){
    console.log(error);
  })
}