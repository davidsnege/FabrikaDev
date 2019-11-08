$(document).ready(function(){
    // $("#resultado").hide();
        var consulta;
         //hacemos focus al campo de búsqueda
        $("#busqueda").focus();
        //comprobamos si se pulsa una tecla
        $("#busqueda").keyup(function(e){
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#busqueda").val();
              console.log(consulta);
              //hace la búsqueda
              $.ajax({
                    type: "POST",
                    url: "modelo.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                        //imagen de carga
                        $("#busqueda").html("");
                    },
                    error: function(){
                        alert("error petición ajax");
                        // $("#resultado").hide();
                    },
                    success: function(data){
                        $("#resultado").empty();
                        $("#resultado").append('value', data);
                        var valor = $("#busqueda").val();
                        $("#busqueda").attr('value', valor);
                        console.log(data);
                    }


              });
              // if(consulta == '' || consulta == undefined || consulta == null){
              //     $("#resultado").hide();
              // }
        });
});
