function insertComment() {

    var comentario = new FormData();

    var textoComentario = document.getElementById("textAreaComentario").value;
    var idEntrada = document.getElementById("idEntrada").value;
    var nombreUsuario = document.getElementById("Usuario").value;



    comentario.append("usuario", nombreUsuario);
    comentario.append("entrada", idEntrada);
    comentario.append("contenido", textoComentario);



    fetch("http://cybed-api.herokuapp.com/api/mensajes/", {
            method: "POST", // Indicar método POST
            body: comentario, // Con cuerpo
        })
        .then((result) => {
            console.log(result.status);
            document.getElementById('comment').reset();

            location.reload();







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