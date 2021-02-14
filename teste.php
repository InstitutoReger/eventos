<?php

$curso = array();

$curso[] = array(
    'nome' => 'nome1',
    'titulo' => 'titulo 1',
);

$curso[] = array(
    'nome' => 'nome2',
    'titulo' => 'titulo 2',
);

$curso[] = array(
    'nome' => 'nome3',
    'titulo' => 'titulo 3',
);


foreach($curso as $v){
    echo $v['nome'];
}
?>