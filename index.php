<?php

function formataCPF($string){
	$cpf = substr($string, 0, 3).".***.***-".substr($string, 9, 2);
	return $cpf;
}

$cpf = '08008008065';
$cpfFormatado = formataCPF($cpf);

echo $cpfFormatado;