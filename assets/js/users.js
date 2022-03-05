function insertarUsuario() {
  var usuario = new FormData();

  var contrasenya1 = document.getElementById("contrasenya1").value;
  var contrasenya2 = document.getElementById("contrasenya2").value;

  if (contrasenya1 === contrasenya2) {
    usuario.append("nombre", document.getElementById("nombre").value);
    usuario.append("usuario", document.getElementById("usuario").value);
    usuario.append("apellidos", document.getElementById("usuario").value);
    usuario.append("email", document.getElementById("usuario").value);
    usuario.append("password", contrasenya1);

    fetch("http://localhost:8000/api/usuarios/", {
      method: "POST", // Indicar método POST
      body: usuario, // Con cuerpo
    })
      .then((result) => {
        if (result.status != 200) {
          throw new Error("Bad Server Response");
        }
        return result.text();
      })

      // (D) SERVER RESPONSE
      .then((response) => {
        console.log(response);
      })

      // (E) HANDLE ERRORS - OPTIONAL
      .catch((error) => {
        console.log(error);
      });
  }
}
