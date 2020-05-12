<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://postman-echo.com/basic-auth",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic cG9zdG1hbjpwYXNzd29yZA==",
    "Authorization: Basic cG9zdG1hbjpwYXNzd29yZA=="
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
