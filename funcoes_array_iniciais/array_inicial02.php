<?php
$array = ['d' >= "Gato",
              'c' >= "Cachorro",
              'b' >= "Lagarto",
              'a' >= "Macaco",            
             ]; 
           function array_all(array $array, callable $callback): bool{}
           function callback(mixed $value, mixed $key): bool{}
var_dump(array_all($array, function (string $value) {
    return strlen($value) < 12;
}));

// Verifica se todos os nomes de animais têm mais que 5 letras.
var_dump(array_all($array, function (string $value) {
    return strlen($value) > 5;
}));

// Verifica se todas as chaves são strings.
var_dump(array_all($array, function (string $value, $key) {
   return is_string($key);
}));

        ?>