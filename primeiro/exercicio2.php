<?php
$idade = 12;
if($idade<15){
    echo"criança";
}
else if($idade>=15 && $idade<18){
    echo"adolescente";
} 
else if($idade>=18 && $idade<60){
    echo"adulto";
}
else{
    echo"idoso";
}
?>