<?php
/*
$nome = readline("seu nome:");

$numero = readline("seu numero:");

$array = array("nome" => $nome, "numero" => $numero);

$array = $nome = $numero;

print_r($array); */





/*

-------------------------------1 EXERCICIO--------------------------------------

$personas = array("Paula","Zanardini","Guilherme","Thalyta","Erick");
$pessoas  = array("Alyce","Rhay","Alan","Felipe","Lucas");
$person   = array("Canepele","Ramão","Daniel","Carlos","Heitor");
$personne = array("Hernani","Sofia","Naty","Isa","Dudu");

print "=====================================================\n";

foreach($person as $name)
{
    print $name . "  |  ";
}

print "\n";

foreach($personas as $nombre)
{

    print $nombre . "  |  ";
}

print "\n";

foreach($pessoas as $nome)
{
    print $nome . "  |  ";
}

print "\n";

foreach($personne as $nom)
{
    print $nom . "  |  ";
}

print "\n=====================================================\n";


--------------------------------------------------------------------------*/

//------------------------------------------------2 EXERCICIO------------------------------------------------------------------------------------------------

$info = array("Nome" => "Robertinho", "Endereço" => "Rua do matagal", "Cidade" => "Rio de Janeiro", "UF" => "RJ");
$foin = array("Nome" => "Piazinho  ",   "Endereço" => "Rua das Folhas", "Cidade" => "São Paulo     ",      "UF" => "SP");
$nifo = array("Nome" => "Jumberto  ",   "Endereço" => "Rua Burgo     ",      "Cidade" => "Santa Catarina", "UF" => "SC");
$inof = array("Nome" => "Rogerio   ",    "Endereço" => "Rua Chaves    ",     "Cidade" => "Acre          ",           "UF" => "AC");

$matrix = array($info,$foin,$nifo,$inof);

print "===================================================\n";

foreach ($matrix as $A) {
    
    print $A["Nome"] . " | " . $A["Endereço"] . " | " . $A["Cidade"] . " | " . $A["UF"] . " |\n" ;
}

print "===================================================\n";

