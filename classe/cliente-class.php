<?php
class Cliente{
    public $nome;
    public $saldo;
	public function confirmarrecebimento(){
      echo  "<br/>Confirmado o recebimento";
    }
    public function pagarconta($valor){
      echo "<br/>Foi pago o valor de R$ ".$valor;
    }
}

// https://www.devmedia.com.br/criando-classe-em-php/24371
// https://www.devmedia.com.br/como-criar-minha-primeira-classe-em-php/38895
?>
