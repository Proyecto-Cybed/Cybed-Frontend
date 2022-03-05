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
            '<div class="card" style="width: 18rem;">' +
              cve["cve"]["CVE_data_meta"]["ID"] +
              "</div>"
          );
        }
      },
    });
  })
);
