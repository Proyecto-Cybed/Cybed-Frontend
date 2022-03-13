$.ajax({
    type: "GET",
    dataType: "json",
    url: "http://cybed-api.herokuapp.com/api/entradas/",
    crossDomain: true,

    success: function(json) {
        const results = json["results"]
        for (let i = 0; i < json["count"]; i++) {
            const entry = results[i];

            console.log(entry);
            var id = entry["id"]


            $("#entries").append(
                '<tr>' +
                '<th scope="row"><i class="fa-solid fa-file-lines"></i></i></th>' +
                '<td><a href="#" id="enlace' + entry["id"] + '">' +
                entry["titulo"] +
                "</a></td>" +
                '</td>' +
                '<td>' +
                entry["mensajes"]["count"] +
                "</td>" +
                '<td>' +
                entry["usuario"] +
                "</td>" +
                '<td>' +
                "Author y fecha del mensaje " +
                "</td>"
            );
            document.getElementById('enlace' + entry["id"]).setAttribute('href', 'entry.php?' + 'id=' + id);
        }
    },
    error: function(xhr, status) {

        console.log("error");

    },
});