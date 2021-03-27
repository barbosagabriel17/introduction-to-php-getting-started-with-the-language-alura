<?php

$idade = 17;
$numeroDePessoas = 2;
// $nome = "Vinicius";

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado" .PHP_EOL;

// if ($idade > 18 && $nome == 'Vinicius') { //Também pode if ($idade > 18 and $nome == 'Vinicius')
//     echo "Você tem $idade anos. Pode entrar" .PHP_EOL;
// }

if ($idade > 18 || $idade == 18) { //Também pode if ($idade > 18 or $idade > 18) ou if ($idade >= 18)
    echo "Você tem $idade anos. Pode entrar sozinho" .PHP_EOL;
}

else if ($idade >= 16 && $numeroDePessoas > 1) { //POderia ser elseif junto também
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar." .PHP_EOL;   
}

else {
    echo "Você só tem $idade anos. Você não pode entrar." . PHP_EOL;
}

echo "Adeus!" .PHP_EOL;