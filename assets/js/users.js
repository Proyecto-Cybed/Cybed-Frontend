(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();


$('document').ready(function() {
    // Patrón validación nombre
    var nameregex = /^[a-zA-Z ]+$/;

    let formulario = document.getElementById('register-form');

    $.validator.addMethod("validador", function(value, element) {
        return this.optional(element) || nameregex.test(value);
    });

    // Patrón validación email
    var eregex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    $.validator.addMethod("validemail", function(value, element) {
        return this.optional(element) || eregex.test(value);
    });

    $("#register-form").validate({
        rules: {
            usuario: {
                required: true,
                validador: true,
                minlength: 4
            },

            nombre: {
                required: true,
                validador: true,
                minlength: 4
            },

            apellidos: {
                required: true,
                validador: true,
                minlength: 4
            },

            email: {
                required: true,
                validemail: true
            },

            contrasenya1: {
                required: true,
                minlength: 8,
                maxlength: 15
            },

            contrasenya2: {
                required: true,
                equalTo: '#contrasenya1'
            },

            check: {
                required: true,

            },
        },

        messages: {

            usuario: {
                required: "Por favor, indique un nombre de usuario.",
                validador: "Solo se permiten letras y espacios en blancos.",
                minlength: "El nombre de usuario es demasiado corto."
            },

            nombre: {
                required: "Por favor, indique un nombre.",
                validador: "Solo se permiten letras y espacios en blancos.",
                minlength: "El nombre es demasiado corto."
            },

            apellidos: {
                required: "Por favor, indique los apellidos del usuario.",
                validador: "Solo se permiten letras y espacios en blancos.",
                minlength: "Los apellidos son demasiado cortos."
            },

            email: {
                required: "Por favor, indique un email.",
                validemail: "Introduzca un email correcto."
            },

            contrasenya1: {
                required: "Por favor, indique una clave.",
                minlength: "La clave debe tener al menos 8 caracteres."
            },

            contrasenya2: {
                required: "Por favor, vuelva a indicar la clave.",
                equalTo: "La clave no coincide."
            },

            check: {
                required: "Por favor, indique que ha leído y aceptado los términos y condiciones.",

            },
        },
        errorPlacement: function(error, element) {
            document.getElementById('usuarioInsertado').innerHTML = '';
            $(element).closest('.form-group').find('.help-block').html(error.html());
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');

        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.help-block').html('');

        },
        submitHandler: function(form) {
            insertar();
            formulario.reset();
        }
    });
})


function insertar() {

    var usuario = new FormData();

    var contrasenya1 = document.getElementById("contrasenya1").value;
    var contrasenya2 = document.getElementById("contrasenya2").value;

    if (contrasenya1 === contrasenya2) {
        usuario.append("nombre", document.getElementById("nombre").value);
        usuario.append("usuario", document.getElementById("usuario").value);
        usuario.append("apellidos", document.getElementById("apellidos").value);
        usuario.append("email", document.getElementById("email").value);
        usuario.append("password", contrasenya1);

        fetch("http://localhost:8000/api/usuarios/", {
                method: "POST", // Indicar método POST
                body: usuario, // Con cuerpo
            })
            .then((result) => {
                document.getElementById('usuarioInsertado').innerHTML = '<p class="text-success"> Usuario registrado con éxito </p>';
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


function loginUsuario() {

    var usuario = new FormData();

    var email = document.getElementById("email").value;
    var contrasenya = document.getElementById("contrasenya").value;

    usuario.append("email", email);
    usuario.append("password", contrasenya);


    fetch("http://localhost:8000/api/login/usuarios/", {
            method: "POST", // Indicar método POST
            body: usuario, // Con cuerpo
        })
        .then((result) => {
            console.log(result.status);
            if (result.status == 201) {
                document.getElementById('login').innerHTML = ' <input  class="form-control" id="email1" name="email1" value="" type="hidden"/>';

                $('#email1').val(email);


            }
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