$(document).ready(
  $(function () {
    $.ajax({
      type: "GET",
      dataType: "json",
      url: "http://localhost:8000/nvd-api",
      crossDomain: true,

      success: function (json) {
        for (let i = 0; i < json.length; i++) {
          const cve = json[i];

          $("#cve").append(
            '<div class="panel panel-primary">' +
              '<div class="panel-heading"><h4>' +
              cve["cve"]["CVE_data_meta"]["ID"] +
              "</h4></div>" +
              '<div class="panel-body">' +
              cve["cve"]["description"]["description_data"]["0"]["value"] +
              "	</div>" +
              '<div class="panel-footer"><p>' +
              cve["publishedDate"] +
              "</p>" +'<a  href="https://cve.mitre.org/cgi-bin/cvename.cgi?name='+cve["cve"]["CVE_data_meta"]["ID"] +'" class="btn btn-primary">&#10010; Info</a>'+
              "</div>" +
              "</div>"
          );
        }
      },
    });
  })
);
