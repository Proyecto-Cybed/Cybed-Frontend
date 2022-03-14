function insertEntry() {

    var entrada = new FormData();

    var titulo = document.getElementById("titulo").value;
    var contenido = document.getElementById("contenido").value;
    var usuario = document.getElementById("usuario").value;

    entrada.append("titulo", titulo);
    entrada.append("contenido", contenido);
    entrada.append("usuario", usuario);


    fetch("http://cybed-api.herokuapp.com/api/entradas/", {
            method: "POST", // Indicar método POST
            body: entrada, // Con cuerpo
        })
        .then((result) => {
            console.log(result.status);
            document.getElementById('entry').reset();
            window.location.assign("forum.php");



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