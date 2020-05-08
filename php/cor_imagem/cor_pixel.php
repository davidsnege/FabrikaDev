<?php

// TODO 
// saber o tipo de imagem para usar o imagecreate correto
// usar o getimagesize para recorrer no comprimento e na altura os pixels
// ver como construir um array com as informacoes
// recorrer o array verificando se encontramos pontos com a cor especificada e guardar x/y para coordenadas
// gerar um array novo so com as posicoes dos pontos encontrados
// verificar a que distancia x/y esta os pontos
// usar um ajax para consultar esta informacao 
// com o resultado no ajax criado ver como criar uma capa por cima da imagem com JS
// Nesta capa determinar pontos com etiquetas
// verificar se se pode comparar esta imagem com outras imagens
// se a comparacao for possivel entao criar um meio de comparar 2 imagens, ou recorrer uma query com arrays de outras imagens e determinar
// de qual imagem ou a qual imagem se encontra uma semelhanca
// depois disso verificar se se pode usar para dados de imagens astronomicas
// criar um modelo pronto para analizar imagens obtidas em sequencia por telescopios e analizar pixels que se moveram
// a partir disto detectar e marcar a imagem ou a sequencia como possivel NEO


$im = imagecreatefromjpeg("stars.jpg");
// Los tipos de imagenes aceitos
// IMAGETYPE_GIF => 'imagecreatefromgif',
// IMAGETYPE_JPEG => 'imagecreatefromjpeg',
// IMAGETYPE_PNG => 'imagecreatefrompng',
// IMAGETYPE_WBMP => 'imagecreatefromwbmp',
// IMAGETYPE_XBM => 'imagecreatefromwxbm',


// Cogemos el tamaño de la imagem para poder hacer un foreach y recorrer colores
$size = getimagesize("stars.jpg");
print_r($size);
// Aqui temos o mime que é o tipo. array de exemplo abaixo.
// Array ( [0] => 3840 [1] => 2160 [2] => 2 [3] => width="3840" height="2160" [bits] => 8 [channels] => 3 [mime] => image/jpeg )




$rgb = imagecolorat($im, 595, 1250);
$r = ($rgb >> 16) & 0xFF;
$g = ($rgb >> 8) & 0xFF;
$b = $rgb & 0xFF;

echo "<br><br>RGB <br>";
print_r($rgb);
echo "<br> R - G - B  <br>";
echo "<br> R: ";print_r($r);
echo "<br> G: ";print_r($g);
echo "<br> B: ";print_r($b);

// Pintamos um div so pra ver a cor
echo "<br>";
echo '<br><div style="background-color:rgba('.$r.', '.$g.', '.$b.', 0.5);"> Hola Color </div>';




?>