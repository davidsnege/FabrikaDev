<?php
/**
 * @version     0.0.1
 * @package     FabrikaDev
 * @subpackage  Firma Digital
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

    // Recebemos e salvamos a imagem primeiro
	define('UPLOAD_DIR', 'images/');
	$img = $_POST['imgBase64'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . uniqid() . '.png';
	$success = file_put_contents($file, $data);

    // Agora com o caminho $file podemos salvar na base de dados

