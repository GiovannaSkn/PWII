<?php

 $alunos =[
  [
    'nome' => 'Marquinhos',
    'Nota' => 5
  ],
  [
    'nome' => 'Jubileu',
    'Nota' => 10
  ]
];
foreach ($alunos as $key => $value) {
    if ($value['Nota'] < 7)
    echo 'Aluno' . $value['nome'] . 'Esta Reprovado';
    else
    echo 'Aluno' . $value['nome'] . 'Esta Aprovado';

}

?>