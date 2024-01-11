<?php 
$nome= filter_input(INPUT_POST, 'nome' , FILTER_SANITIZE_STRING );

echo "nome: $nome"


?>