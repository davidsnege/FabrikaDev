<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

// Funcao para saber o idioma do navegador. (podemos deixar qualquer idioma como default)
function get_browser_language( $available = [], $default = 'pt_br' ) {
	if ( isset( $_SERVER[ 'HTTP_ACCEPT_LANGUAGE' ] ) ) {
		$langs = explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] );
		if ( empty( $available ) ) {
			return $langs[ 0 ];
		}
		foreach ( $langs as $lang ){
			$lang = substr( $lang, 0, 2 );
			if( in_array( $lang, $available ) ) {
				return $lang;
			}
		}
	}
	return $default;
}

//Criamos uma variavel com a funcao e deixamos so as iniciais que precisamos para comparar
$idioma = substr( get_browser_language(), 0, 2 );

//Imprimimos o resultado ou podemos fazer comparações para definir o idioma da página
echo $idioma;

?>
