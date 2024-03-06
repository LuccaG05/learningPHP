<?php

$turma = array(
    array(
        "Nome" => "Lucca",
        "Idade" => 21,
        "Curso" => "ADS",
        "Faculdade" => "UNIMAR"
    ),
    array(
        "Nome" => "Davi",
        "Idade" => 18,
        "Curso" => "ADS",
        "Faculdade" => "UNIMAR"
    ),
    array(
        "Nome" => "Silas",
        "Idade" => 21,
        "Curso" => "Engenharia Agronomica",
        "Faculdade" => "UNESP"
    ),
    array(
        "Nome" => "Fernanda",
        "Idade" => 25,
        "Curso" => "Farmacia",
        "Faculdade" => "UNIP"
    ),
    array(
        "Nome" => "Andre",
        "Idade" => 45,
        "Curso" => "Ciencias Contábeis",
        "Faculdade" => "FEMA"
    )
);

foreach ($turma as $idx => $aluno) {
    $numeroAluno = $idx++;
    echo "Aluno: $idx <br>";
    foreach ($aluno as $chave => $value) {
        echo "$chave: $value<br>";
    }
    echo "<br>";
}

?>
