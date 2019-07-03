$(document).ready(function(){
    TableCitas = $('#tableCitas').DataTable({
        "columnDefs":[{
            "targets":-1,
            "data":null,
            "defaultContent":
            "<a href='modal1' data-target='modal1' class='btnEdit modal-trigger btn deep-purple darken-1 waves-effect waves light' type='submit' name='action'>Actualizar<i class='material-icons right'>update</i></a><button' class='btnDelete red darken-1 btn waves-effect waves-light' type = 'submit' name='action'>Elimnar<i class='material-icons right'>delete</i></button>"
        }]
    });
});

var rowTableCita;
$(document).on(
    "click", 
    "#new",
    function(){
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
        $("mensaje").val(mensaje);
        option = 1;
    }
);
$(document).on("click", ".btnEdit", function () {
    rowTableCita = $(this).closest("tr");
    id = parseInt(rowTableCita.find('td:eq(0)').text());
    nombre = rowTableCita.find('td:eq(1)').text();
    paterno = rowTableCita.find('td:eq(2)').text();
    materno = rowTableCita.find('td:eq(3)').text();
    email = rowTableCita.find('td:eq(4)').text();
    telefono = rowTableCita.find('td:eq(5)').text();
    tratamiento = parseInt(rowTableCita.find('td:eq(6)').text());
    fecha = rowTableCita.find('td:eq(7)').text();
    hora = rowTableCita.find('td:eq(8)').text();
    mensaje = rowTableCita.find('td:eq(9)').text();

    $("nombre").val(nombre);
    $("paterno").val(paterno);
    $("materno").val(materno);
    $("email").val(email);
    $("telefono").val(telefono);
    $("tratamiento").val(tratamiento);
    $("mensaje").val(mensaje);
    option=2;
});
$(document).on("click", ".btnDelete", function () {
    rowTableCita = $(this);
    //id = parseInt(rowTableCita.find('td:eq(0)').text);
    var id = parseInt($(this).closest('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').text());
    //console.log(id);
    var opcionOperacion=3;
    $.ajax({
        url: "./server/operations/crud.php",
        type:"POST",
        //contentType: 'application/json; charset=utf-8',
        //dataType: 'json',
        data:{
            opcionOperacion: opcionOperacion,
            id:id
        },
        success: function (data, textStatus, jqXHR) {
            console.log(data);
            TableCitas.row(rowTableCita.parents('tr')).remove().draw();
        },
        error: function (data, textStatus, errorThrown) {
            console.log('message=:' + data + ', text status=:' + textStatus + ', error thrown:=' + errorThrown);
        }
    });
});


