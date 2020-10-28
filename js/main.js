
(function() {
"user strict";
var regalo = document.getElementById('regalo');
document.addEventListener('DOMContentLoaded', function(){
    
    if (document.querySelector('.mapa')) {
        var map = L.map('mapa').setView([-11.950416, -77.005389], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-11.950416, -77.005389]).addTo(map)
            .bindPopup('Aqui ta el negocio ')
            .openPopup();
    }

  
    //Campos datos usuario
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');

    //campos pases
    var pase_dia = document.getElementById('pase_dia');
    var pase_dosdias = document.getElementById('pase_dosdias');
    var pase_completo = document.getElementById('pase_completo');

    //botones
    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    var lista_productos = document.getElementById('lista-productos');
    var suma = document.getElementById('suma-total');

    //Extras

    var camisas = document.getElementById('camisa_evento');
    var etiquetas = document.getElementById('etiquetas');


    botonRegistro.disabled = true;

    if (document.getElementById('calcular')) {
    
        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail)

        function validarCampos() {
            if (this.value == '') {
                errorDiv.style.display = 'block';
                error.innerHTML = "Este campo es obligatorio";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '2px solid green';
            }
        };

        function validarMail(){
            if (this.value.indexOf("@") > -1) {
                errorDiv.style.display = 'none';
                this.style.border = '2px solid green';
            }else{
                errorDiv.style.display = 'block';
                error.innerHTML = "Debes introducir un email valido";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }
        }

        function calcularMontos(event){
            event.preventDefault();
            if (regalo.value === '') {
                alert("debes elegir un regalo");
                regalo.focus();
            }else{
                var boletoDia = parseInt(pase_dia.value) || 0,
                    boleto2Dias = parseInt(pase_dosdias.value) || 0,
                    boletoCompleto = parseInt(pase_completo.value) || 0,
                    cantCamisas = parseInt(camisas.value) || 0,
                    cantEtiquetas = parseInt(etiquetas.value) || 0;

                var totalPagar = (boletoDia * 30) + (boleto2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10)*0.93) + (cantEtiquetas * 2);

                console.log("Total a pagar : " + totalPagar);

                var listadoProductos = [];
                
                if (boletoDia >= 1) {
                    listadoProductos.push(boletoDia + ' pases por día');
                }
                if (boleto2Dias >= 1) {
                    listadoProductos.push(boleto2Dias + ' pases por 2 día');
                }
                if (boletoCompleto >= 1) {
                    listadoProductos.push(boletoCompleto + ' pases completos');
                }
                if (cantCamisas >= 1) {
                    listadoProductos.push(cantCamisas + ' camisas');
                }
                if (cantEtiquetas >= 1) {
                    listadoProductos.push(cantEtiquetas + ' etiquetas');
                }

                lista_productos.style.display='block';
                lista_productos.innerHTML = ''; // para que se resete el div despues que vuelvan a dar click en calcular
                for (let i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + '<br/>';           
                }
                
                suma.innerHTML = "$" + totalPagar.toFixed(2);

                botonRegistro.disabled = false;
                document.getElementById('total_pedido').value = totalPagar;
            }
        }
    }

    function mostrarDias(){
        var boletoDia = parseInt(pase_dia.value) || 0,
                boleto2Dias = parseInt(pase_dosdias.value) || 0,
                boletoCompleto = parseInt(pase_completo.value) || 0;
        var diasElegidos = [];

        if (boletoDia > 0) {
            diasElegidos.push('viernes');
        }else{
            document.getElementById('viernes').style.display = 'none';
        }
        if (boleto2Dias > 0) {
            diasElegidos.push('viernes', 'sabado');
        }else{
            document.getElementById('viernes').style.display = 'none';
            document.getElementById('sabado').style.display = 'none';
        }
        if (boletoCompleto > 0) {
            diasElegidos.push('viernes', 'sabado', 'domingo');
        }else{
            document.getElementById('viernes').style.display = 'none';
            document.getElementById('sabado').style.display = 'none';
            document.getElementById('domingo').style.display = 'none';
        }
        for (let index = 0; index < diasElegidos.length; index++) {
            document.getElementById(diasElegidos[index]).style.display = 'block';
        }
    }



});
})();


$(function(){

    //Lettering 
    $('.nombre-sitio').lettering();

    //agregar clase a menú
    // $('.body.conferencia .navegacion-principal a:contains("conferencia")').addClass('activo');
    // $('.body.calendario .navegacion-principal a:contains("conferencia")').addClass('activo');
    // $('.body.invitados .navegacion-principal a:contains("conferencia")').addClass('activo');

    //menu fijo
    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraAltura+'px'});
        }else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }
    });

    //Menu responsive
    $('.menu-movil').on('click', function(){
        $('.navegacion-principal').slideToggle();
    });

    //Programa de Conferencia
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();

        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });

    //Animaciones para los Números
    $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6}, 1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15}, 1200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3}, 600);
    $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9}, 1500);

    //Cuenta Regresiva 

    $('.cuenta-regresiva').countdown('2020/10/30 12:00:00',function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    //Colorbox
    if (document.querySelector('.invitado-info')) {
        $('.invitado-info').colorbox({inline:true, width:"50%"});
    }
    

});