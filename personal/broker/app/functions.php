<?php

	function imprimehome($param){
        echo ' - Estou na funcao impimehome: '.$param;
        
        include '../views/home.html';

		return $param;
    }
    

	function imprimecartera($param){
        echo ' - Estou na funcao impimecartera: '.$param;
        
        include '../views/cartera.html';

		return $param;
	}

    function imprimeindicadores($param){
        // echo ' - Estou na funcao impimecartera: '.$param;
        
        include '../views/indicadores.html';

		return $param;
	}