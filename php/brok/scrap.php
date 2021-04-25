<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  test
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

 
//  PHP simples com file get contents
// $html = file_get_contents('https://br.tradingview.com/symbols/BMFBOVESPA-IBOV/'); //Convierte la información de la URL en cadena
// echo $html;

//  PHP com curl

// Definimos la función cURL
    function curl($url) {
        $ch = curl_init($url); // Inicia sesión cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); // Configura cURL para devolver el resultado como cadena
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Configura cURL para que no verifique el peer del certificado dado que nuestra URL utiliza el protocolo HTTPS
        $info = curl_exec($ch); // Establece una sesión cURL y asigna la información a la variable $info
        curl_close($ch); // Cierra sesión cURL
        return $info; // Devuelve la información de la función
    }

    $sitioweb = curl("https://br.investing.com/rss/stock_Technical.rss");  // Ejecuta la función curl escrapeando el sitio web https://devcode.la and regresa el valor a la variable $sitioweb
    
    json_encode(":", $sitioweb);
    
    print_r($sitioweb);
