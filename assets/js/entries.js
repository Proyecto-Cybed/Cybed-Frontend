function stringDatetoDate(date) {

    let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };

    let splitedDate = date.split("-")

    let YYYY = splitedDate[0];
    let M = splitedDate[1];
    let DD = splitedDate[2];
    let hh = splitedDate[3];
    let mm = splitedDate[4];
    let ss = splitedDate[5];

    let veraguaDate = new Date(YYYY, M, DD, hh, mm, ss);

    return veraguaDate.toLocaleDateString('es-ES', options)

}

$.ajax({
    type: "GET",
    dataType: "json",
    url: "https://cybed-api.herokuapp.com/api/entradas/",
    crossDomain: true,

    success: function (json) {
        const results = json["results"]
        for (let i = 0; i < json["count"]; i++) {
            const entry = results[i];

            let id = entry["id"];
            let totalMessages = entry["mensajes"]["count"];
            let lastMessage = "No hay mensajes";

            if (totalMessages != 0) {
                userLastMessage = entry["mensajes"]["results"].slice(-1)[0].usuario;
                stringDateLastMessage = entry["mensajes"]["results"].slice(-1)[0].fecha;

                let dateLastMessage = stringDatetoDate(stringDateLastMessage);

                lastMessage = "Por " + userLastMessage + " el " + dateLastMessage;
            }


            $("#entries").append(
                '<tr>' +
                '<th scope="row"><i class="fa-solid fa-file-lines"></i></i></th>' +
                '<td><a href="#" id="enlace' + entry["id"] + '">' +
                entry["titulo"] +
                "</a></td>" +
                '</td>' +
                '<td>' +
                totalMessages +
                "</td>" +
                '<td>' +
                entry["usuario"] +
                "</td>" +
                '<td>' +
                lastMessage +
                "</td>"
            );
            document.getElementById('enlace' + entry["id"]).setAttribute('href', 'entry.php?' + 'id=' + id);
        }
    },
    error: function (xhr, status) {

        console.log("error");

    },
});