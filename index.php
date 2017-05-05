<?php
	require_once 'view_index.php';
  Cabecalho();

	$i = 3.4;
	$j = "Oi";
	$k = (int)$i + 3;
	$k = $i * 3.144444;
	echo $j . "\n" . "Mundo";
	echo "\t" . $k;
	echo '<br/>';
	echo "Hoje é Dia: " . date('d/m/y');
	echo '<br/>';

	echo '<hr/>';

	for($a = 0; $a < 5; $a++){
		if($a > 2){
			echo "Agora entrou no if " . $a;
			echo '<br/>';
		}else{
			echo "Agora não entrou no if " . $a;
			echo '<br/>';
		}
	}

	echo '<hr/>';

	echo '<br/>';

  $v = array(3);
	$v[0] = 2;
	$v[1] = 9;
	$v[3] = "oi";

	for($u = 0; $u < sizeof($v); $u++){
		echo "Comteudo na Posição " . "\n" . $u . "\n" . "eh" . "\n" . $v[$u];
		echo '<br/>';
	}

	echo '<hr/>';

	$cars = array("Volvo", "BMW", "Toyota");
	echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

	echo '<hr/>';

	foreach($v as $c => $u){
		echo $c . " - " . $u;
		echo '<br/>';
	}

	echo '<hr/>';

	echo "Apreendendo funções; ";
	echo '<br/>';
	function func($p, $q){
		$r;
		echo "Somando" . " " . $p . " " . 'Com' . " " . $q . '<br/>';
		$r = $p + $q;
    echo "Resultado: " . $r . '<br/>';
		return $r;
	}

	$r = func(2, 3);

	echo "Depois do retorno da função: " . $r;

	echo '<hr/>';	

	echo "Somando de outra função:";

	$soma = Somar(5 , 5);
	echo "Depois de somar com outra função: " . $soma;

	echo '<hr/>';	

  Rodape();
?>


