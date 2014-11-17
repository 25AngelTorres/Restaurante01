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
            $('#linkgourmet').click(
              function(){
                $('#desayuno').hide();
                $('#gourmet').hide();
                $('#mexicana').hide();
                $('#gourmet').show('slow');
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


});
