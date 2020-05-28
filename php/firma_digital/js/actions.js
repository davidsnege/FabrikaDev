//   /**
//  * @version     0.0.1
//  * @package     FabrikaDev
//  * @subpackage  Firma Digital
//  * @author      davidsnege <david.snege@gmail.com>
//  * @copyright   2020 davidsnege (FabrikaDev)
//  * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
//  */
   
   
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
                        async: false,
                        url: "app/default.php",
                        data: { imgBase64: dataURL },
                        success: function(data) {
                        //*******************************
                            //Printamos o PDF na tela para visualização e para salvar
                            $("#ler").html("<br><br><br><embed src='app/"+data+"' width='800px' height='2100px' />");
                        //******************************
                        },
                        error:function(data){
                            console.log('Error');
                            $("#ler").html("<br><br><br>No tenemos PDF firmado para exibir");
                        }
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