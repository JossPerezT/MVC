$(document).ready(function(){
   /* $("body").click(function(){
        alert("diste click en el body");
    });*/

    /*$("#nombre").change(function(){
        alert($(this).val());
      $("body").css("background", "blue");
      $("#telefono").css("background-color","red" );
    });*/

    $(".registrar").click(function(){
        event.preventDefault();
        var nombre= $(".nombre").val();
        var email= $(".email").val();
        var telefono= $(".telefono").val();
        var direccion= $(".direccion").val();
        var rfc= $(".rfc").val();

        if(nombre == ""){
            $("#mensajeSistemasHeader").addClass("alert alert-warning");
            $("#infoSistema").html("Favor de llenar el campo del nombre");
            $("#mensajeSistemas").modal("show");
            exit();
        }
        if(email == ""){
            $("#mensajeSistemasHeader").addClass("alert alert-warning");
            $("#infoSistema").html("Favor de llenar el campo del email");
            $("#mensajeSistemas").modal("show");
            exit();
        }
        if(telefono == ""){
            $("#mensajeSistemasHeader").addClass("alert alert-warning");
            $("#infoSistema").html("Favor de llenar el campo del telefono");
            $("#mensajeSistemas").modal("show");
            exit();
        }
        if(direccion == ""){
            $("#mensajeSistemasHeader").addClass("alert alert-warning");
            $("#infoSistema").html("Favor de llenar el campo del direccion");
            $("#mensajeSistemas").modal("show");
            exit();
        }
        if(rfc == ""){
            $("#mensajeSistemasHeader").addClass("alert alert-warning");
            $("#infoSistema").html("Favor de llenar el campo del rfc");
            $("#mensajeSistemas").modal("show");
            exit();
        }

        $.ajax({
            url: "../clientes/save", 
            data: {nombre: nombre, email:email, telefono:telefono, direccion:direccion, rfc:rfc},
            type: "POST",
            dataType: "json",
            success: function(res){
                $("#mensajeSistemasHeader").removeClass("alert alert-warning");
                $("#mensajeSistemasHeader").addClass("alert alert-success");
                $("#infoSistema").html(res);
                $("#mensajeSistemas").modal("show");
                $("#formClientes")[0].reset();
            },
            error: function(xhr, status){}

        });
    });
$(".editar").click(function(){
    var idCliente = $(this).data("idcliente");
    $(".editar-"+idCliente).hide();
    $(".eliminar-"+idCliente).hide();
    $(".cancelar-"+idCliente).show();
    $(".guardar-"+idCliente).show();
    $(".nombre-"+idCliente).html('<input type="text" value="'+$(".nombre-"+idCliente).html()+'">');
    $(".email-"+idCliente).html('<input type="text" value="'+$(".email-"+idCliente).html()+'">');
    $(".telefono-"+idCliente).html('<input type="text" value="'+$(".telefono-"+idCliente).html()+'">');
    $(".direccion-"+idCliente).html('<input type="text" value="'+$(".direccion-"+idCliente).html()+'">');
    $(".rfc-"+idCliente).html('<input type="text" value="'+$(".rfc-"+idCliente).html()+'">');
    var color = $(this).data("color");
    var status = $(".status"+idCliente).html();
    var selected_1 = "";
    var selected_0 = "";
    if(status == "ACTIVO"){
        selected_1 = "selected";
    }
    if (status == "INACTIVO"){
        selected_0 = "selected";
    }
    $(".status"+idCliente).removeClass(color);
    var select ="";
    select +='<select class="form-select" style="width: 120%" aria-label="Default select example">';
    select +='<option value="1" '+selected_1+'>ACTIVO</option>';
    select += '<option value="0" '+selected_0+'>INACTIVO</option>';
    select += '</select>';
    $(".status"+idCliente).html(select);
    

});

$(".cancelar").click(function(){
    var idCliente = $(this).data("idcliente");
    var nombre = $(this).data("nombre");
    var email = $(this).data("email");
    var telefono = $(this).data("telefono");
    var direccion = $(this).data("direccion");
    var rfc = $(this).data("rfc");
    var status = $(this).data("statusmensaje");
    var color = $(this).data("color");
    $(".cancelar-"+idCliente).hide();
    $(".guardar-"+idCliente).hide();
    $(".editar-"+idCliente).show();
    $(".eliminar-"+idCliente).show();
    $(".nombre-"+idCliente).html(nombre);
    $(".email-"+idCliente).html(email);
    $(".telefono-"+idCliente).html(telefono);
    $(".direccion-"+idCliente).html(direccion);
    $(".rfc-"+idCliente).html(rfc);
    $(".status"+idCliente).html(status);
    $(".status"+idCliente).addClass(color);

})


});