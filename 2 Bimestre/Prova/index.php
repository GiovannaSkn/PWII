<?php
// Crie um script em PHP que irá conter um array com números. Requisitos:
// -  declare um array contendo 10 números quaisquer;
// - Utilize Foreach para percorrer o array;
// - Use if else dentro do foreach contar quantos números são iguais a 0, e quantos são diferentes de 0.
// - Exiba a mensagem: "Existem X números iguais a  0 e Y números diferentes de 0".

$Numeros=[-100, -90, -70, -50, -30, 30, 50, 70, 90, 100];
$Negativos =0;
$Positivos =0;

foreach ($Numeros as $key => $Numeros) {
      
  if($Numeros < 0){
        $Negativos++;
      } else if($Negativos>0){
        $Positivos++;
      }
};

echo 'Existem '. $Negativos . ' números menores que 0 <br>';
echo 'Existem '. $Positivos . ' números maiores que 0';

?>