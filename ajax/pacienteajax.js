$(document).ready(function () {

    mostrar();
//Aqui puse el de mostrar 
    function mostrar() {
        $.ajax({
            url: '../controlador/control.php?m',
            type: 'GET',
            success: function (response) {

                console.log(response);
                let pac = JSON.parse(response);
                let plantilla = '';

                pac.forEach(pac => {
                    plantilla +=
                        "<tr pacid="+pac.id+">" +
                        "<td>" + pac.id + "</td>" +
                        "<td>" + pac.nombre + "</td>" +
                        "<td>" + pac.fec_nac + "</td>" +
                        "<td>" + pac.correo + "</td>" +
                        "<td>" + pac.tel + "</td>" +
                        "<td><button class='buscar btn btn-success'>Ver</button></td></tr>";

                });
                $('#paci').html(plantilla);
            }
        })
    }

    $(document).on('click', '.buscar', function()
	{
	let element = $(this)[0].parentElement.parentElement;
	let id = $(element).attr('pacid');

	$.post('../controlador/control.php?buscar', {id}, function(response){


        const data = JSON.parse(response);
        $('#id_pa').val(data.id);
		$('#nombre').val(data.nombre);
        $('#fec_nac').val(data.fec_nac);
        $('#correo').val(data.correo);
        $('#tel').val(data.tel);


		
	});
		
	});

//Aqui puse el de guardar 

    $('#btnguardar').click(function () {

        var datos = $('#myform').serialize();

        $.ajax({

            type: 'POST',
            url: '../controlador/control.php?guardar',
            data: datos,

            success: function (response) {
                alert("Registrado");
                mostrar();
                vaciar();

            }
        });
        return false;
    });

    //Aqui puse el modificar

    $('#btnmodificar').click(function () {
        var datos = $('#myform').serialize();

        $.ajax({

            type: 'POST',
            url: '../controlador/control.php?modificar',
            data: datos,

            success: function (response) {
                alert("Modificado");
                mostrar();
                vaciar();
            }
        });
        return false;
    });

    //Aqui puse el elimninar    

    $('#btneliminar').click(function () {
        var datos = $('#myform').serialize();

        $.ajax({

            type: 'POST',
            url: '../controlador/control.php?eliminar',
            data: datos,

            success: function (response) {
                alert("Eliminado");
                mostrar();
                vaciar();
            }
        });
        return false;
    });
    function vaciar()
    {
        document.myform.reset();
    }

});