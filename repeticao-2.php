<?php

for ($contador = 1; $contador <= 15; $contador++){//Igual a $contador += 1
    if ($contador == 13) {
        continue; //Pula para a próxima iteração
        //break; //Forçaria a saida do loop
    }
    
    echo "#$contador" .PHP_EOL;
}