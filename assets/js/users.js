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
            formulario.submit();
            formulario.reset();
        }
    });

})