$(document).ready(
  $(function () {
    const options = {
      weekday: "long",
      year: "numeric",
      month: "long",
      day: "numeric",
    };

    $.ajax({
      type: "GET",
      dataType: "json",
      url: "http://localhost:8000/nvd-api",
      crossDomain: true,

      success: function (json) {
        for (let i = 0; i < json.length; i++) {
          const cve = json[i];

          const publishedDate = new Date(cve["publishedDate"]);
          let stringPublishedDate = publishedDate.toLocaleDateString(
            "es-ES",
            options
          );

          $("#cve").append(
            '<div class="card border-primary mt-4">' +
              '<div class="card-header"><h4>' +
              cve["cve"]["CVE_data_meta"]["ID"] +
              "</h4></div>" +
              '<div class="card-body">' +
              '<p class="card-text">' +
              cve["cve"]["description"]["description_data"]["0"]["value"] +
              "</p>" +
              '<p class="card-text">' +
              '<small class="text-muted">' +
              stringPublishedDate +
              "</small>" +
              "</p>" +
              "</div>" +
              '<div class="card-footer">' +
              '<a href="https://cve.mitre.org/cgi-bin/cvename.cgi?name=' +
              cve["cve"]["CVE_data_meta"]["ID"] +
              '" class="btn btn-primary float-end">&#10010; Info</a>' +
              "</div>" +
              "</div>"
          );
        }
      },
      error: function (xhr, status) {
        $("#cve").append(
          '<div class="card text-dark bg-info mb-3">' +
            '<div class="card-body">' +
            '<h5 class="card-title">Info de CVE no disponible en este momento</h5>' +
            '<p class="card-text">Inténtelo de nuevo más tarde</p>' +
            "</div>" +
            "</div>"
        );
      },
    });
  })
);
