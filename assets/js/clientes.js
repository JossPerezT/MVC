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

        $.ajax({
            url: "../clientes/save", 
            data: {nombre: nombre, email:email, telefono:telefono, direccion:direccion, rfc:rfc},
            type: "POST",
            dataType: "json",
            success: function(res){

            },
            error: function(xhr, status){}

        });
    });
});