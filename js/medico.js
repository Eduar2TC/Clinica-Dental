$(document).ready(function(){
    //Inicializacion de la tabla
    TableCitas = $('#tableCitas').DataTable({
        "autoWidth": true,
        "aoColumns": [null, null, null, null, null, null, null, null, null, null, null],
        "aaData": null,
        "responsive": true,
        //"ajax":"js/results.json",
        //"dataSrc": '',
        //"mDataProp": "",
        //"serverSide": true,

        // Codigo que agrega una nueva columna con los iconos ( No de manera dinámica)
        "columnDefs": [
            //Ancho de las celdas mensajes
            { "width": "100%",
             "targets": 9 },
            {
            "targets":10,
            "data":"",
            "defaultContent": "",
            /*"render": function (data, type, row) {
                /*return "<!--Marcar Cita Atendida-->" +
                    "<button class = 'btnMark btn-floating orange waves-effect-light' type = 'submit' name = 'actionMark'>" +
                    "<i class='material-icons right'>alarm</i>" +
                    "</button>" +
                    "<!--Actualizar-->" +
                    "<a href='#formulario-cita-container'" +
                    "data-target='modal1'" +
                    "class='btnEdit modal-trigger btn-floating yellow darken-2 waves-effect waves light'" +
                    "type='submit'" +
                    "name='actionUpdate'>" +
                    "<i class='material-icons right'>mode_edit</i>" +
                    "</a>" +
                    "<!--Elimnar-->" +
                    "<button' class='btnDelete btn-floating red waves-effect waves-light' type = 'submit' name='actionDelete'>" +
                    "<i class='material-icons right'>delete</i>" +
                    "</button>";
            },*/
            /*"<!--Marcar Cita Atendida-->" +
            "<button class = 'btnMark btn-floating orange waves-effect-light' type = 'submit' name = 'actionMark'>" +
                "<i class='material-icons right'>alarm</i>" +
            "</button>" +
            "<!--Actualizar-->" +
            "<a href='#formulario-cita-container'" +
                "data-target='modal1'" +
                "class='btnEdit modal-trigger btn-floating yellow darken-2 waves-effect waves light'"+
                "type='submit'" +
                "name='actionUpdate'>" +
                "<i class='material-icons right'>mode_edit</i>" +
            "</a>" +
            "<!--Elimnar-->" + 
            "<button' class='btnDelete btn-floating red waves-effect waves-light' type = 'submit' name='actionDelete'>" +
            "<i class='material-icons right'>delete</i>" +
            "</button>"*/
        }],
        //set lenguaje datatables
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }

    });
    //ajustando el tamaño de la tabla al ancho del contenedor
    var table = $('#tableCitas').DataTable();
    $('#container').css( 'display', 'block' );
    table.columns.adjust().draw();
    //Cambia el tamaño dinamicamente el tamaño de la altura del sidenav de la sección medicos
    $(window).on('scroll', function () {
        var $el = $('#main-admin-medico'),
            scrollTop = $(this).scrollTop(),
            scrollBot = scrollTop + $(this).height(),
            elTop = $el.offset().top,
            elBottom = elTop + $el.outerHeight(),
            visibleTop = elTop < scrollTop ? scrollTop : elTop,
            visibleBottom = elBottom > scrollBot ? scrollBot : elBottom;
        //Envia el tamaño obtenido al sidenav
        if ((visibleBottom - visibleTop) > 500) {
            $('#sidenav-navegation').stop().animate({
                height: (visibleBottom - visibleTop)
            }, 200)
        } else {
            $('#sidenav-navegation').stop().animate({
                height: visibleBottom - visibleTop
            }, 200);
        }
    });

    // On load table this select or unselect row
    var table = $('#tableCitas').DataTable();

    $('#tableCitas tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    //Sección de código que activa el cambio en la vista principal
    $("#ver-citas").click(
        function(){
            $("#main-admin-medico").load("calendario.html");
        }
    );

});

var rowTableCita;
var opcionOperacion;
$(document).on("click", "#new", function(){
        id="";
        nombre="";
        paterno ="";
        materno ="";
        email = "";
        telefono="";
        tratamiento="";
        fecha="";
        hora="";
        mensaje="";
        $("nombre").val(nombre);
        $("paterno").val(paterno);
        $("materno").val(materno);
        $("email").val(email);
        $("telefono").val(telefono);
        $("tratamiento").val(tratamiento);
        $("fecha").val(fecha);
        $("hora").val(hora);
        $("mensaje").val(mensaje);
        opcionOperacion = 1;
});

//Editar-Actualizar datos
$(document).on("click", ".btnEdit", function () {  //Corregir los campos del formulario del modal!!!!
    rowTableCita = $(this).closest("tr");
    id = parseInt(rowTableCita.find('td:eq(0)').text());
    nombre = rowTableCita.find('td:eq(1)').text();
    paterno = rowTableCita.find('td:eq(2)').text();
    materno = rowTableCita.find('td:eq(3)').text();
    email = rowTableCita.find('td:eq(4)').text();
    telefono = rowTableCita.find('td:eq(5)').text();
    tratamiento = rowTableCita.find('td:eq(6)').text();
    fecha = rowTableCita.find('td:eq(7)').text();
    hora = rowTableCita.find('td:eq(8)').text();
    mensaje = rowTableCita.find('td:eq(9)').text();
    $("input[id=nombre]").val(nombre);
    $("input[id=paterno]").val(paterno);
    $("input[id=materno]").val(materno);
    $("input[id=email-2]").val(email);
    $("input[id=telefono]").val(telefono);
    $(".select-dropdown").val(tratamiento);   //////Pinchi Caca (Sulucionar)
    $(".datepicker").val(fecha);
    $(".timepicker").val(hora);
    $("textarea[id=mensaje]").val(mensaje);
    opcionOperacion = 2;
    //fix sobreexposicion on forms values
    $("label[for='nombre']").addClass('active');
    $("label[for='paterno']").addClass('active');
    $("label[for='materno']").addClass('active');
    $("label[for='email-2']").addClass('active');
    $("label[for='telefono']").addClass('active');
    $("label[for='mensaje']").addClass('active');
    $("label[for='fecha']").addClass('active');
    $("label[for='hora']").addClass('active');

});
//Eliminar datos
$(document).on("click", ".btnDelete", function () {
    rowTableCita = $(this);
    //id = parseInt(rowTableCita.find('td:eq(0)').text);
    var id = parseInt( $(this).closest('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').text() );
    var opcionOperacion = 3;

    //Alert controller
    Swal.fire({
        title: '¿Eliminar Cita?',
        text: "No puedes revertir esto!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar cita!',
        cancelButtonText: "No, cancelar!",

    }).then((result) => {  //The user accept delete la cita
        if (result.value) {
            //send ajax elimination
            $.ajax({
                url: "./server/operations/crud.php",
                type: "POST",
                //contentType: 'application/json; charset=utf-8',
                //dataType: 'json',
                data: {
                    opcionOperacion: opcionOperacion,
                    id: id
                },
                success: function (data, textStatus, jqXHR) {
                    Swal.fire(
                        'Eliminado!',
                        'La Cita fué eliminada.',
                        'success'
                    );
                    TableCitas.row(rowTableCita.parents('tr')).remove().draw();
                },
                error: function (data, textStatus, errorThrown) {
                    console.log('message=:' + data + ', text status=:' + textStatus + ', error thrown:=' + errorThrown);
                }
            });
        }
    });
});

//Marcar cita atendida
$(document).on("click", ".btnMark", function (){
    //get id row    
    var id = parseInt($(this).closest('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').text());
    var opcionOperacion = 4; //operation mark cita
    console.log(id);
    rowTableCita = $(this).closest("tr");  ///          SELECCIONA EL RENGLÓN ACTUAL!!!!! 
    var parent_id = $(this).parent().attr('id');  // Parent (father) selection this tag atribute
    var parent_id_estado = $(this).parent().attr('estado');
    console.log(parent_id_estado);

    //Si la cita há sido atendida
    if(parent_id_estado === '0'){
        //rowTableCita.removeClass("red darken-3").addClass("green darken-3");
        //Operations mark cita

/*
        var tabla = $('#tableCitas').DataTable({
            processing: true,
            serverSide: true,
            //"destroy":true,
            retrieve: true,
            "ajax": {
                "url": "./server/operations/crud.php?opcionOperacion=OpcionOperacion&id=id&estadoCita=1",
                "type": "POST"
            },
            "columns": [
                { "data": "idCita" },
                { "data": "nombre" },
                { "data": "paterno" },
                { "data": "materno" },
                { "data": "email" },
                { "data": "telefono" },
                { "data": "tratamiento" },
                { "data": "fecha" },
                { "data": "hora" },
                { "data": "mensaje" },
                {"defaultContent":
                    "<!--Marcar Cita Atendida-->" +
                    "<button class = 'btnMark btn-floating orange waves-effect-light' type = 'submit' name = 'actionMark'>" +
                        "<i class='material-icons right'>alarm</i>" +
                    "</button>" +
                    "<!--Actualizar-->" +
                    "<a href='#formulario-cita-container'" +
                        "data-target='modal1'" +
                        "class='btnEdit modal-trigger btn-floating yellow darken-2 waves-effect waves light'"+
                        "type='submit'" +
                        "name='actionUpdate'>" +
                        "<i class='material-icons right'>mode_edit</i>" +
                    "</a>" +
                    "<!--Elimnar-->" +
                    "<button' class='btnDelete btn-floating red waves-effect waves-light' type = 'submit' name='actionDelete'>" +
                    "<i class='material-icons right'>delete</i>" +
                    "</button>"
                }
            ]
        });
        tabla.ajax.reload();
        //$('#tableCitas').DataTable().clear().rows.add("results.json").draw();
    */
        $.ajax({
            url: "./server/operations/crud.php",
            type: "POST",
            //contentType: 'application/json; charset=utf-8',
            //dataType: 'json',
            data: {
                opcionOperacion: opcionOperacion,
                id: id,
                estadoCita: 1, //cita atendida
            },
            success: function (data, textStatus, jqXHR) {
                $('#' + parent_id + '> .btnMark').removeClass("orange").addClass("green");  //set color icon
                $('#' + parent_id + '> .btnMark i').text('done');  //set icon when acces to child i (icon ) from id

                data = JSON.parse(JSON.stringify(data));
                $('#tableCitas').DataTable({
                    destroy: true,
                    //processing: true,
                    //serverSide: true,
                    retrieve: true,
                    //ajax:'js/results.json',
                    columns: [
                        { title: "id" },
                        { title: "Nombre" },
                        { title: "Paterno" },
                        { title: "Materno" },
                        { title: "Email" },
                        { title: "Telefono" },
                        { title: "Tratamiento" },
                        { title: "Fecha" },
                        { title: "Hora" },
                        { title: "Mensaje" },
                        { title: "Operación" }
                    ]
                });
                Materialize.toast('Cita atendida!', 2000, 'green rounded');
            },
            error: function (data, textStatus, errorThrown) {
                console.log('message=:' + data + ', text status=:' + textStatus + ', error thrown:=' + errorThrown);
            }
        });
    }
    //La cita no fué atendida (POR DEFECTO)
    else if(parent_id_estado === '1'){
        //rowTableCita.removeClass("green darken-3").addClass("red darken-3");
        //Operactions mark cita
        $.ajax({
            url: "./server/operations/crud.php",
            type: "POST",
            //contentType: 'application/json; charset=utf-8',
            //dataType: 'json',
            data: {
                opcionOperacion: opcionOperacion,
                id: id,
                estadoCita: 0, //cita no atendida
            },
            success: function (data, textStatus, jqXHR) {
                $('#' + parent_id + '> .btnMark').removeClass("green").addClass("orange");  //set color icon
                $('#' + parent_id + '> .btnMark i').text('alarm');  //set icon when acces to child i (icon ) from id
                
                data = JSON.parse(JSON.stringify(data));
                //$('#tableCitas').DataTable().clear().destroy();
                $('#tableCitas').DataTable({
                    //destroy: true,
                    //processing: true,
                    //serverSide: true,
                    retrieve: true,
                    //ajax: 'js/results.json',
                    columns: [
                        { title: "id" },
                        { title: "nombre" },
                        { title: "paterno" },
                        { title: "materno" },
                        { title: "email" },
                        { title: "telefono" },
                        { title: "tratamiento"},
                        { title: "fecha"},
                        { title: "hora"},
                        { title: "mensaje"},
                        { title: "Operacion"}
                    ]
                });
                Materialize.toast('Cita pendiente', 3000, 'orange rounded');
            },
            error: function (data, textStatus, errorThrown) {
                console.log('message=:' + data + ', text status=:' + textStatus + ', error thrown:=' + errorThrown);
            }
        });
    }

});
//Function for reload div of table
$(document).on('click', '.btnMark', function(){
    $.ajax({
        url:'./medicos.php',
        data:{
            action:'initializa',
            type:'post',
            success: function(){
                $("#tableCitas").load(location.href + " #tableCitas"); //reload div tableCotas
            }
        }

    });
});
//Agregar nuevos datos 
$('#formulario-cita-form-new').submit(
    function(e){
        e.preventDefault();
        let nombre = $.trim($('#nombre').val());
        let paterno = $.trim($('#paterno').val());
        let materno = $.trim($('#materno').val());
        let email = $.trim($('#email-2').val());
        let telefono = $.trim($('#telefono').val());
        let tratamiento = $.trim($('#opciones-tratamientos').val());
        let fecha = $.trim($('#fecha').val());
        let hora = $.trim($('#hora').val());
        let mensaje = $.trim($('#mensaje').val());

        console.log(nombre +" "+ paterno + 
        " "+materno+" "+email+ " "+telefono + " "+tratamiento+ " "
        +fecha + " "+hora+" "+mensaje);

        $.ajax({
            url: "./server/operations/crud.php",
            type: "POST",
            //contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            data: {
                opcionOperacion: opcionOperacion,
                nombre:nombre,
                paterno:paterno,
                materno:materno,
                email:email,
                telefono:telefono,
                tratamiento:tratamiento,
                fecha:fecha,
                hora:hora,
                mensaje:mensaje

            },
            success: function (data, textStatus, jqXHR) {
    
                id= data[0].idCita;
                if(opcionOperacion == 1 ){
                    TableCitas.row.add([id, nombre, paterno, materno, email, telefono, tratamiento, fecha, hora, mensaje]).draw();

                }
                else{
                    TableCita.row(rowTableCita).data([id, nombre, paterno, materno, email, telefono, tratamiento, fecha, hora, mensaje]);
                }
            },
            error: function (data, textStatus, errorThrown) {
                console.log('message=:' + data + ', text status=:' + textStatus + ', error thrown:=' + errorThrown);
            }
        });

    }
);
//Formulario de Actualización
$('#formulario-cita-form-update').submit(
    function (e) {

        e.preventDefault();
        let id = parseInt(rowTableCita.find('td:eq(0)').text());
        let nombre = $.trim($('#formulario-cita-form-update').find('#nombre').val());
        let paterno = $.trim($('#formulario-cita-form-update').find('#paterno').val());
        let materno = $.trim($('#formulario-cita-form-update').find('#materno').val());
        let email = $.trim($('#formulario-cita-form-update').find('#email-2').val());
        let telefono = $.trim($('#formulario-cita-form-update').find('#telefono').val());
        let tratamiento = $.trim($('#formulario-cita-form-update').find('#opciones-tratamientos').val());
        let fecha = $.trim($('#formulario-cita-form-update').find('#fecha').val());
        let hora = $.trim($('#formulario-cita-form-update').find('#hora').val());
        let mensaje = $.trim($('#formulario-cita-form-update').find('#mensaje').val());

        console.log(id+ " " + nombre + " " + paterno +
            " " + materno + " " + email + " " + telefono + " " + tratamiento + " "
            + fecha + " " + hora + " " + mensaje);
        $.ajax({
            url: "./server/operations/crud.php",
            type: "POST",
            //contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            data: {
                id:id,
                opcionOperacion: opcionOperacion,
                nombre: nombre,
                paterno: paterno,
                materno: materno,
                email: email,
                telefono: telefono,
                tratamiento: tratamiento,
                fecha: fecha,
                hora: hora,
                mensaje: mensaje

            },
            success: function (data, textStatus, jqXHR) {
                //Cierra el modal
                $('#formulario-cita-container').modal('close');
                //refresca los renglones
                var nuevosDatos = [data[0].idCita, data[0].nombre, data[0].paterno, data[0].materno, data[0].email, data[0].telefono, data[0].tratamiento, data[0].fecha, data[0].hora, data[0].mensaje ];
                TableCitas.row(rowTableCita).data(nuevosDatos).draw();
            },
            error: function (data, textStatus, errorThrown) {
                console.log('message=:' + data + ', text status=:' + textStatus + ', error thrown:=' + errorThrown);
            }
        });
    }
);

