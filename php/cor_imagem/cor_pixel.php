<?php
// Se nao colocamos o header nao podemos imprimir imagem com os recursos do php
// Temos que usar isso para que retorne um tipo de imagem real.
header ('Content-Type: image/png');

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

// Os tipos de imagens aceitos
// IMAGETYPE_GIF => 'imagecreatefromgif',
// IMAGETYPE_JPEG => 'imagecreatefromjpeg',
// IMAGETYPE_PNG => 'imagecreatefrompng',
// IMAGETYPE_WBMP => 'imagecreatefromwbmp',
// IMAGETYPE_XBM => 'imagecreatefromwxbm',

//Defnimos a rota da imagem
$image = "imgs/stars.jpg";

// Cogemos el tamaño de la imagem para poder hacer un foreach y recorrer colores
$size = getimagesize($image);
$width = $size['0'];
$height = $size['1'];
$mime = $size['mime'];
$bits = $size['bits'];

// Confirguracao de formacao de imagem
$bwwb = "bw";
$sensitive = "120";
$wColor = "0";
$bColor = "255";

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

// definimos que X e Y são iguais a width e height para ser usado por imagecreatetruecolor
$x = $width;
$y = $height;

// Usamos imagecreatetruecolor para definir o tamanho da imagem que vamos criar
$gd = imagecreatetruecolor($x, $y);

// Começamos a scanear os pixels da imagem buscando o que quremos e construindo outra imagem com o for.


    // echo '<div class="container">'; // Usar para printar un texto

        for ($h=0; $h < $height; $h++) { 

    //         echo '<div class="row">'; // Usar para printar un texto

            for ($w=0; $w < $width; $w++) { 

                // Aqui usamos as propriedades do PHP imgecolorat para definir onde estamos percorrendo neste momento. e definimos o valor da cor en rgb
                $rgb = imagecolorat($im, $w, $h);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;

                // Definimos se queremos em BW ou en WB antes de aplicar o contraste. (podemos ir criando outros filtros utilizando estes cases e definindo outras cores)
                switch ($bwwb) {
                    case 'bw': // bw Preto e Branco
                            if($r && $g && $b >= $sensitive){
                                $r = $wColor;
                                $g = $wColor;
                                $b = $wColor;
                            }else{
                                $r = $bColor;
                                $g = $bColor;
                                $b = $bColor;                    
                            }
                    break;
                    case 'bwc': // bw Preto e Branco
                            if($r && $g && $b >= $sensitive){
                                $r = $wColor;
                                $g = $wColor;
                                $b = $wColor;
                            }else{
                                $r = $r;
                                $g = $g;
                                $b = $b;                    
                            }
                    break;
                    case 'wb': // wb Branco e Preto
                            if($r && $g && $b >= $sensitive){
                                $r = $bColor;
                                $g = $bColor;
                                $b = $bColor;
                            }else{
                                $r = $wColor;
                                $g = $wColor;
                                $b = $wColor;                    
                            }
                    break;
                    case 'wbc': // wb Branco e Preto
                            if($r && $g && $b >= $sensitive){
                                $r = $r;
                                $g = $g;
                                $b = $b;
                            }else{
                                $r = $bColor;
                                $g = $bColor;
                                $b = $bColor;                    
                            }
                    break;
                    case 'red': // bwc Preto e Branco Contraste Color
                            if($r && $g && $b >= $sensitive){
                                $r = 255;
                                $g = 25;
                                $b = 0;
                            }else{
                                $r = $r;
                                $g = $g;
                                $b = $b;                                  
                            }
                    break;                    
                    case 'blue': // bwc Preto e Branco Contraste Color
                            if($r && $g && $b >= $sensitive){
                                $r = 0;
                                $g = 67;
                                $b = 255;
                            }else{
                                $r = $r;
                                $g = $g;
                                $b = $b;                                  
                            }
                    break;                    
                    case 'green': // bwc Preto e Branco Contraste Color
                            if($r && $g && $b >= $sensitive){
                                $r = 000;
                                $g = 193;
                                $b = 33;
                            }else{
                                $r = $r;
                                $g = $g;
                                $b = $b;                                  
                            }
                    break;                  
                    case 'redBlack': // bwc Preto e Branco Contraste Color
                            if($r && $g && $b >= $sensitive){
                                $r = 255;
                                $g = 25;
                                $b = 0;
                            }else{
                                $r = 255;
                                $g = 255;
                                $b = 255;                                  
                            }
                    break;                    
                    case 'blueBlack': // bwc Preto e Branco Contraste Color
                            if($r && $g && $b >= $sensitive){
                                $r = 0;
                                $g = 67;
                                $b = 255;
                            }else{
                                $r = 255;
                                $g = 255;
                                $b = 255;                                  
                            }
                    break;                    
                    case 'greenBlack': // bwc Preto e Branco Contraste Color
                            if($r && $g && $b >= $sensitive){
                                $r = 000;
                                $g = 193;
                                $b = 33;
                            }else{
                                $r = 255;
                                $g = 255;
                                $b = 255;                                    
                            }
                    break;                  
                }


    // Usar para printar un texto
    //             // Printamos Letras como se fossem pixels "♦" para ver alguma coisa, nos falta criar uma imagem real a partir desta informacao
    //             // echo '<text id="w'.$w.'h'.$h.'" style="color:rgba('.$r.', '.$g.', '.$b.'); font-size: 6px; letter-spacing: -0px; line-height: 50%;">■</text>';
    //             //  ALT 254 / 176 / 177 / 178 / 220 / 4 /
    //             // ♦ // Usar para printar un texto



                        // Criamos a cor do pixel atual do for
                        $color = imagecolorallocate($gd, $r, $g, $b); 
                        // Criamos o array das coordenadas de cada pixel
                        $esquinas[0] = array('x' => $w, 'y' =>  $h);
                        // Setamos um Pixel da cor atual nas coordenadas atualis da imagem
                        imagesetpixel($gd, round($x),round($y), $color);
                        // Definimos que a usa a array acima 0 de esquinas
                        $a = 0;
                        // Criamos as coordenadas e a escala esta definida no  / 2 (podemos mudar isso.)
                        $x = ($x + $esquinas[$a]['x']) / 2;
                        $y = ($y + $esquinas[$a]['y']) / 2;

            }
    //         echo '</div>'; // Usar para printar un texto
        }

    // echo '</div>'; // Usar para printar un texto
// **************************************************************

// Imprimimos a imagem usando o imagetype e o comando do php imagepng
header('Content-Type: image/png');
// Este comando imprime a imagem desde que o header esteja declarado corretamente
imagepng($gd);


?>