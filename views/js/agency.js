/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});


$(document).ready(function() {
	 /* Ocultar Formularios */
            $('#form_reservations').hide();
            $('#form_orders').hide();
            $('#desayuno').hide();
            $('#gourmet').hide();
            $('#mexicana').hide();

        /* Mostrar tablas a insertar */
            $('#btn_orders').click(
              function(){
                $('#form_orders').show('slow');
              }
            );
            
            $('#btn_reservations').click(
              function(){
                $('#form_reservations').show('slow');
              }
            );

            $('#linkdesayuno').click(
              function(){
                $('#desayuno').hide();
                $('#gourmet').hide();
                $('#mexicana').hide();
                $('#desayuno').show('slow');
              }
            );
            
            $('#linkmexicana').click(
              function(){
                $('#desayuno').hide();
                $('#gourmet').hide();
                $('#mexicana').hide();
                $('#mexicana').show('slow');
              }
            );

            $('#linkgourmet').click(
              function(){
                $('#desayuno').hide();
                $('#gourmet').hide();
                $('#mexicana').hide();
                $('#gourmet').show('slow');
              }
            );

/* Bootstrapvalidator */
            $('#registerForm').bootstrapValidator({
              message: 'Este valor no es valido',
              feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                nombre_cliente: {
                  message: 'El nombre no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracteres y menor a 100'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de nombre no valido'
                    }
                  }
                },
                email_cliente: {
                  message: 'Email no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracteres y menor a 100'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -.@]+$/,
                      message: 'Formato de email no valido'
                    }
                  }
                },
                email: {
                  message: 'Email no es valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracteres y menor a 100'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -.@]+$/,
                      message: 'Formato de email no valido'
                    }
                  }
                },
                password_cliente: {
                  message: 'Password no valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 16,
                      message: 'Debe ser mayor a 1 caracteres y menor a 16'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -.@!"#$%&()=?'¡¿*+-\/]+$/,
                      message: 'Formato de Password no valido'
                    }
                  }
                },
                password: {
                  message: 'Password no valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 16,
                      message: 'Debe ser mayor a 1 caracteres y menor a 16'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -.@!"#$%&()=?'¡¿*+-\/]+$/,
                      message: 'Formato de Password no valido'
                    }
                  }
                },
                cp_cliente: {
                  message: 'CP no valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 5,
                      message: 'Debe ser mayor a 1 caracteres y menor a 5'
                    },
                    regexp: {
                      regexp: /^[0-9]+$/,
                      message: 'Formato de CP no valido'
                    }
                  }
                },
                ciudad_cliente: {
                  message: 'Ciudad no valida',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracteres y menor a 100'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de Ciudad no valido'
                    }
                  }
                },
                colonia_cliente: {
                  message: 'Colonia no valida',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracteres y menor a 100'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de Colonia no valida'
                    }
                  }
                },
                direccion_cliente: {
                  message: 'Direccion no valida',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracteres y menor a 100'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de Direccion no valida'
                    }
                  }
                },
                telefono_cliente: {
                  message: 'Telefono no valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 10,
                      message: 'Debe ser mayor a 1 caracteres y menor a 10'
                    },
                    regexp: {
                      regexp: /^[0-9]+$/,
                      message: 'Formato de Telefono no valido'
                    }
                  }
                },
                nombre_mesas: {
                  message: 'Selecciona una mesa',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                No_asientos_reservaciones: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Fecha_reservaciones: {
                  message: 'Selecciona una mesa',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Hora_reservaciones: {
                  message: 'Selecciona una hora',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Platillo_1: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 0,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Platillo_2: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 0,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Platillo_3: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 0,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Platillo_4: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 0,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Platillo_5: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 0,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Platillo1_raciones: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Platillo2_raciones: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Platillo3_raciones: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Platillo4_raciones: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                Platillo5_raciones: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                tipo_cartas: {
                  message: 'Ingrese un tipo de carta',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 3,
                      message: 'Debe ser mayor a 1 caracteres y menor a 3'
                    },
                    regexp: {
                      regexp: /^[0-9]+$/,
                      message: 'Formato de tipo de carta no valida'
                    }
                  }
                },
                descripcion_cartas: {
                  message: 'Descripci&oacute;n no valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 500,
                      message: 'Debe ser mayor a 1 caracteres y menor a 500'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -.@!"#$%&()=?'¡¿*{}\[\]+-\/]+$/,
                      message: 'Formato de Descripci&oacute;n no valido'
                    }
                  }
                },
                nombre_mesas: {
                  message: 'Nombre no valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 500,
                      message: 'Debe ser mayor a 1 caracteres y menor a 500'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -]+$/,
                      message: 'Formato de Nombre no valido'
                    }
                  }
                },
                precio: {
                  message: 'Precio no valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 500,
                      message: 'Debe ser mayor a 1 caracteres y menor a 500'
                    },
                    regexp: {
                      regexp: /^[0-9_ -]+$/,
                      message: 'Formato de Precio no valido'
                    }
                  }
                },
                tipo_platillos: {
                  message: 'Selecciona una opcion',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 100,
                      message: 'Debe ser mayor a 1 caracter'
                    },
                  }
                },
                nombre_platillos: {
                  message: 'Descripci&oacute;n no valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 500,
                      message: 'Debe ser mayor a 1 caracteres y menor a 500'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -.@!"#$%&()=?'¡¿*{}\[\]+-\/]+$/,
                      message: 'Formato de Descripci&oacute;n no valido'
                    }
                  }
                },
                descripcion_platillos: {
                  message: 'Descripci&oacute;n no valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 500,
                      message: 'Debe ser mayor a 1 caracteres y menor a 500'
                    },
                    regexp: {
                      regexp: /^[a-zA-Z0-9_ -.@!"#$%&()=?'¡¿*{}\[\]+-\/]+$/,
                      message: 'Formato de Descripci&oacute;n no valido'
                    }
                  }
                },
                precio_platillos: {
                  message: 'Precio no valido',
                  validators: {
                    notEmpty: {
                      message: 'Campo requerido para continuar'
                    },
                    stringLength: {
                      min: 1,
                      max: 500,
                      message: 'Debe ser mayor a 1 caracteres y menor a 500'
                    },
                    regexp: {
                      regexp: /^[0-9_ -]+$/,
                      message: 'Formato de Precio no valido'
                    }
                  }
                },


              }
            });

});
