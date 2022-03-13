const params = new URLSearchParams(window.location.search);

const id = params.get("id");

console.log(id);


$.ajax({
    type: "GET",
    dataType: "json",
    url: "http://cybed-api.herokuapp.com/api/entradas/" + id + "",
    crossDomain: true,

    success: function(json) {
        const entry = json;
        $("#titulo").append(
            entry["titulo"]

        )
        $("#contenido").append(
            entry["contenido"]

        )
        $("#fecha").append(
            entry["fecha"]

        )

        $("#nombreUsuario").append(
            entry["usuario"]

        )

        console.log(entry);
        for (let i = 0; i < entry["mensajes"]["count"]; i++) {

            $("#mensajes").append(
                '<div class="row" id="' + entry["mensajes"]["results"][i]["id"] + '">' +
                '<div class="col-md-8">' +
                '<div class="contenidoMensaje">' +
                entry["mensajes"]["results"][i]["contenido"] +
                "</div>" +
                '<div class="fechaMensaje">' +
                '<p class="text-muted">' +
                entry["mensajes"]["results"][i]["fecha"] +
                "</p>" +
                '</div>' +
                '</div>' +
                '<div class="col-md-4">' +
                '<div class="usuarioMensaje">' +
                '<p class="h5" class="nombreUsuarioMensaje">' +
                entry["mensajes"]["results"][i]["usuario"] +
                '</p>' +
                '</div>' +
                '</div>' +
                '</div>'
            );

        }
    },
    error: function(xhr, status) {

        console.log("error");

    },
});