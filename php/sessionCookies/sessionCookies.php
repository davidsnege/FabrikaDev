<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

  session_start();
  $_SESSION['nomesessao'] = "valorsessao";
  echo $_SESSION['nomesessao'];

  setcookie("nomecookie","valorcookie", time()+3600);
  echo $_COOKIE["nomecookie"];

  // Usar para destruir a sessão 
  // unset($_SESSION["nomesessao"]);
  // session_destroy(); //fecha a sessão que esta aberta

?>
