<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

// Utilizar para el sistema de Broker Personal a fin de tener una seccion de noticias de las monedas y mercados.
$articulos = simplexml_load_string(file_get_contents('http://feeds.feedburner.com/EsoTopNews'));
$num_noticia=1;
$max_noticias=10;

echo "<h2>{$articulos->channel->title}</h2>";

foreach($articulos->channel->item as $noticia){ 

    $fecha = date("d/m/Y - H:i", strtotime($noticia->pubDate));

    echo '
    <article>
        <h5><a href="'.$noticia->link.'">'.$noticia->title.'</a></h5>
        '.$fecha.'
        '.$noticia->description.'
    </article>
    ';

    $num_noticia++; 
    if($num_noticia > $max_noticias){
        break;
    }
    
}