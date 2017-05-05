<?php

	function Somar($p, $q){
	$r;
	echo "Somando" . " " . $p . " " . 'Com' . " " . $q . '<br/>';
	$r = $p + $q;
	echo "Resultado: " . $r . '<br/>';
	return $r;
	}

	function Cabecalho(){
		echo "Cabecalho" . '<br/>' . "Alex Giordan" . '<br/>' . "UFFS" . '<br/>' . '<hr/>';
	}

	function Rodape(){
		echo "Rodape" . '<br/>' . "Alex Giordan" . '<br/>' . "UFFS" . '<br/>' . '<hr/>';
	}
?>
