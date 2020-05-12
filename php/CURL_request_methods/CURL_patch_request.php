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
  CURLOPT_URL => "https://postman-echo.com/patch",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PATCH",
  CURLOPT_POSTFIELDS =>"Curabitur auctor, elit nec pulvinar porttitor, ex augue condimentum enim, eget suscipit urna felis quis neque.\nSuspendisse sit amet luctus massa, nec venenatis mi. Suspendisse tincidunt massa at nibh efficitur fringilla. Nam quis congue mi. Etiam volutpat.",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: text/plain"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
