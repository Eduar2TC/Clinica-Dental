$(document).ready(function(){
    TableCitas = $('#tableCitas').DataTable({
        "columnDefs":[{
            "targets":-1,
            "data":null,
            "defaultContent":
            "<a href='#formulario-cita-update' data-target='modal1' class='btnEdit modal-trigger btn deep-purple darken-1 waves-effect waves light' type='submit' name='action'><!--Actualizar--><i class='material-icons right'>update</i></a><button' class='btnDelete red darken-1 btn waves-effect waves-light' type = 'submit' name='action'><!--Elimnar--><i class='material-icons right'>delete</i></button>"
        }]
    });
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
    }
);
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
    $("#opciones-tratamientos").val(tratamiento);   //////Pinchi Caca (Sulucionar)
    $("textarea[id=mensaje]").val(mensaje);
    option=2;
});
$(document).on("click", ".btnDelete", function () {
    rowTableCita = $(this);
    //id = parseInt(rowTableCita.find('td:eq(0)').text);
    var id = parseInt( $(this).closest('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').prev('td').text() );
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
                console.log(data);
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
