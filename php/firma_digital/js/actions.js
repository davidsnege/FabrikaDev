   
   
   
   // Funções de desenho en canvas com jquery
   $(document).ready(function () {
        $('#generateImg').sign({
            resetButton: $('#resetSign'),
            lineWidth: 5,
            height: 400,
            width: 400
        });
    });

    // Começamos a função de salvar a imagem da assinatura
    $(function(){

        $("#enviar").click(function(){

            html2canvas($("#generateImg"), {

                onrendered: function(canvas) {

                    // Variaves e o que desejamos passar vamos tratando antes de enviar
                    var imgsrc = canvas.toDataURL("image/png");
                    $("#newimg").attr('src',imgsrc);
                    var dataURL = canvas.toDataURL();
                    // ****************************************************************

                    // Enviamos a imagem para o PHP para salvar. a Partir de aqui tudo PHP e AJAX
                    $.ajax({
                    
                        // Parametros de Post *******
                        type: "POST",
                        url: "app/default.php",
                        data: { imgBase64: dataURL }
                        // **************************

                    }).done(function(o) {

                        // Limpamos a assinatura
                        //*******************************
                        $('#generateImg').sign({
                            resetButton: $('#resetSign'),
                            lineWidth: 5,
                            height: 400,
                            width: 400
                        });
                        //******************************

                    });
                    // **************************************************************************

                }
            });
        });

    });