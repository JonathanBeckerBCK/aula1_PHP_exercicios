=========================================================================================================
1.Informe um número. 
|
V
<?php

$num = readline("Informe um número:");

for($i=$num ; $i > 0 ; $i--)
{
    print $i."\n";
}

?>
=========================================================================================================
2.Informa se o número é positivo ou negativo.
|
V
<?php

// programa = ler 10 números e identificalas de é positivo ou negativo

for($i=0; $i < 10 ; $i++)
{

$num = readline("Informe um número:");

    if($num > 0)
    {
        print "positivo\n";
    }
    if($num < 0)
    {
        print "negativo\n";
    }
    if($num == 0)
    {
        print "neutro\n";
    }
}
?>
=========================================================================================================
3.Calcula o indice de massa corporal (IMC)
|
V
<?php

$NomePessoa   = readline("Insira Nome:") ; // N O M E

$PesoPessoa   = (float) readline("Insira Peso:") ; // M E T R O S
$AlturaPessoa = (float) readline("Insira altura:") ; // Q U I L O S

// I M C = Peso / (Altura . Peso)

$imc = $PesoPessoa / ($AlturaPessoa * $AlturaPessoa) ;

print $NomePessoa ." tem peso ". $PesoPessoa .", altura ". $AlturaPessoa . " e IMC ". $imc."\n" ;
?>
=========================================================================================================
4.Escreva um programa que imprima 10 números iniciando de 1 e pulando de 2 em 2. A saída esperada é: 1,3,5,7,9,11,13,15,17,19.
|
V
<?php 

for($i=1; $i <= 19 ; $i+=2)
{
    print $i . "\n";

}

print "\n"; 
?>
=========================================================================================================
5.Imprime anos bissextos.
|
V
<?php
    echo "Anos bissextos entre 1980 e 2024\n";
    
    for($ano=1980; $ano<=2024; $ano++) {
    	if( ($ano % 4 == 0) && ( ($ano % 100 != 0) || ($ano % 400 == 0) ) )
    		echo $ano . "\n";
    }
?>
=========================================================================================================














