<?php
  if(isset($_POST['b'])){
       $buscar = $_POST['b'];
  }
  if(!empty($buscar)) {
        buscar($buscar);
  }
  function buscar($b) {
        //Nossa conexao acontece aqui
        $con = mysqli_connect('localhost','root', '');
        mysqli_select_db($con, 'viacamping');

        // Construimos as queryes
        $campings = mysqli_query($con, "SELECT nome FROM campings WHERE nome LIKE '%".$b."%' ORDER BY nome ASC" );
        $regiones = mysqli_query($con, "SELECT * FROM regiones WHERE nome LIKE '%".$b."%'");
        $departamentos = mysqli_query($con, "SELECT * FROM departamentos WHERE nome LIKE '%".$b."%'");
        $paises = mysqli_query($con, "SELECT * FROM paises WHERE nome LIKE '%".$b."%'");

        //Contamos os resultados para saber se imprimimos
        $contar_campings = mysqli_num_rows($campings);
        $contar_regiones = mysqli_num_rows($regiones);
        $contar_departamentos = mysqli_num_rows($departamentos);
        $contar_paises = mysqli_num_rows($paises);

        // echo '<select>';
        //Se encontramos algo en Campings tratamos aqui abaixo
            if($contar_campings == 0){
                  // echo "No se han encontrado resultados para Campings que correspondam à: '<b>".$b."</b>'.";
            }else{
                  while($row = $campings->fetch_assoc()){
                      $nome = $row['nome'];
                      $nome = str_replace("-", " ", $nome);
                      $nome = str_replace(" - ", " ", $nome);
                      $nome = strtoupper($nome);
                      $nome = utf8_encode($nome); // So Campings tem coisas raras nos nomes
                      echo '<option value="'.$nome.'">'.$nome.'</option>';
                      echo $nome;
                  }
            }
        //Se encontramos algo en Regiones tratamos aqui abaixo
            if($contar_regiones == 0){
                  // echo "No se han encontrado resultados para Regiones que correspondam à: '<b>".$b."</b>'.";
            }else{
                  while($row = $regiones->fetch_assoc()){
                        $nome = $row['nome'];
                        $nome = str_replace("-", " ", $nome);
                        $nome = str_replace(" - ", " ", $nome);
                        $nome = strtoupper($nome);
                        echo '<option value="'.$nome.'">'.$nome.'</option>';
                        echo '<option value="'.$nome.'">';
                  }
            }
        //Se encontramos algo en Departamentos tratamos aqui abaixo
            if($contar_departamentos == 0){
                  // echo "No se han encontrado resultados para Departamentos que correspondam à: '<b>".$b."</b>'.";
            }else{
                  while($row = $departamentos->fetch_assoc()){
                      $nome = $row['nome'];
                      $nome = str_replace("-", " ", $nome);
                      $nome = str_replace(" - ", " ", $nome);
                      $nome = strtoupper($nome);
                      echo '<option value="'.$nome.'">'.$nome.'</option>';
                      echo '<option value="'.$nome.'">';
                  }
            }
        //Se encontramos algo en Paises tratamos aqui abaixo
            if($contar_paises == 0){
                  // echo "No se han encontrado resultados para Paises que correspondam à: '<b>".$b."</b>'.";
            }else{
                  while($row = $paises->fetch_assoc()){
                      $nome = $row['nome'];
                      $nome = str_replace("-", " ", $nome);
                      $nome = str_replace(" - ", " ", $nome);
                      $nome = strtoupper($nome);
                      echo '<option value="'.$nome.'">'.$nome.'</option>';
                      echo '<option value="'.$nome.'">';
                  }
            }
        // echo '</select>';

}
?>
