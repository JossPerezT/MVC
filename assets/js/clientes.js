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
    var status = $(".status"+idCliente).html();
    var select ="";
    select +='<select class="form-select" aria-label="Default select example">';
    

});

});