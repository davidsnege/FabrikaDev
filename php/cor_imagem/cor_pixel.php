<?php

// TODO 
// saber o tipo de imagem para usar o imagecreate correto (extrair o tipo mime do array getimagesize)
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



//Defnimos a rota da imagem
$image = "stars.jpg";

// Cogemos el tamaño de la imagem para poder hacer un foreach y recorrer colores
$size = getimagesize($image);
$width = $size['0'];
$height = $size['1'];
$mime = $size['mime'];
$bits = $size['bits'];

// echo $height;
// echo $width;

// Definimos que tipo de comando vamos usar por tipo de imagem
switch ($mime) {
    case 'image/jpeg':
        $im = imagecreatefromjpeg($image);
        // echo "jpg";
        break;
    case 'image/png':
        $im = imagecreatefrompng($image);
        // echo "png";
        break;
    case 'image/bmp':
        $im = imagecreatefromwbmp($image);
        // echo "bmp";
        break;
}

// Os tipos de imagens aceitos
// IMAGETYPE_GIF => 'imagecreatefromgif',
// IMAGETYPE_JPEG => 'imagecreatefromjpeg',
// IMAGETYPE_PNG => 'imagecreatefrompng',
// IMAGETYPE_WBMP => 'imagecreatefromwbmp',
// IMAGETYPE_XBM => 'imagecreatefromwxbm',


// Construimos uma imagem com caracteres para ver a previa do que queremos dentro do array de estrelas.
    echo '<div class="container">';
        for ($h=0; $h < $height; $h++) { 
            echo '<div class="row">';
            for ($w=0; $w < $width; $w++) { 

                $rgb = imagecolorat($im, $w, $h);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;


                // Aplicamos contraste de acordo com o RGB 
                // Desta forma podemos ver somente as areas mais brancas ou mais negras da imagem
                // Ver como fazer um toggle aqui para inverter as cores quando necessario
                if($r && $g && $b <= 240){
                    $r = 255;
                    $g = 255;
                    $b = 255;
                }else{
                    $r = 000;
                    $g = 000;
                    $b = 000;                    
                }



                echo '<text id="w'.$w.'h'.$h.'" style="color:rgba('.$r.', '.$g.', '.$b.'); font-size: 4px; letter-spacing: -0px; line-height: 50%;">♦</text>';
                //  ALT 254 / 176 / 177 / 178 / 220 / 4 /
            }
            echo '</div>';
        }
    echo '</div>';
// **************************************************************
    

?>