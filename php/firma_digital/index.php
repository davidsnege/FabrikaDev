<!doctype html>
<!-- /**
 * @version     0.0.1
 * @package     FabrikaDev
 * @subpackage  Firma Digital
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */ -->

<html lang="pt-br">
   <head>
      <title>Firma Digital by: davidsnege  to: FabrikaDev</title>

      <!-- INDISPENSAVEL PARA O FUNCIONAMENTO PRINCIPALMENTE JQUERY/AJAX/SLIM/POPPER -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- NOSSOS SCRIPTS CUIDADO AO PERSONALIZAR OS SCRIPTS -->
      <script src="js/canvas.js"></script>
      <script src="js/sign.js"></script>
      <script src="js/actions.js"></script>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>

         <div class="col-sm">
            <canvas id="generateImg" class="canvasClass"></canvas>
            <br>

         </div>
         <div class="col-sm">
            <button id="enviar" type="button" class="btn btn-primary top pull-right">Save Assinatura</button>
            <button type="button" class="btn btn-primary top pull-right" value="Reset" id='resetSign'>Reset Assinatura</button>
         </div>


         <div id="ler" name="ler"></div>
         <!-- Alguma coisa passa com os JS pois não aceita estar o canvas dentro de alguns elementos de bootstrap, perdendo a capacidade de se assinar -->

   </body>
</html>