<?php
// Crie um array contendo 4 alunos com: nome, rm, foto, telefone.
// Exiba todos os alunos uitlizando um foreach.
 $alunos =[
    [
      'nome' => 'Marquinhos',
      'rm' => 'kadhsckAS',
      'foto' => '',
      'telefone' => '+55 15 99788-0789',

    ],
    [
      'nome' => 'nhos',
      'rm' => 'kaS',
      'foto' => '<img src="',
      'telefone' => '+55 15 99788-0789',

    ],
    [
      'nome' => 'quis',
      'rm' => 'kadhs',
      'foto' => '<img src="',
      'telefone' => '+55 15 99788-0789',

    ],
    [
      'nome' => 'Mars',
      'rm' => 'kadhsck',
      'foto' => '<img src="',
      'telefone' => '+55 15 99788-0789',

    ]
    
  ];
  foreach ($alunos as $key => $alunos) {
    echo 'nome' . $alunos['nome'] . '<br>';  
    echo 'rm' . $alunos['rm']. '<br>';  
    echo '<img src="' .  $alunos['foto'] . '<br>';
    echo 'telefone' . $alunos['telefone'] . '<br>';
    echo '<hr>';  
  
  }

?>