<?php
class Aluno {
    private $nome;
    private $ra;
    private $curso;
    private $disciplina;
    private $notaP1;
    private $notaP2;

    public function __construct($nomeAluno, $raAluno, $disciplinaAluno)
    {
        $this->setNome($nomeAluno);
        $this->setRa($raAluno);
        $this->setDisciplina($disciplinaAluno);
    }

    public function setNome($nomeAluno)
    {
        $this->nome = $nomeAluno;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setRa($raAluno)
    {
        $this->ra = $raAluno;
    }

    public function getRa()
    {
        return $this->ra;
    }

    public function setDisciplina($disciplinaAluno)
    {
        $this->disciplina = $disciplinaAluno;
    }

    public function getDisciplina()
    {
        return $this->disciplina;
    }

    public function setCurso($cursoAluno)
    {
        $this->curso = $cursoAluno;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setNotaP1($notaP1)
    {
        $this->notaP1 = $notaP1;
    }

    public function getNotaP1()
    {
        return $this->notaP1;
    }

    public function setNotaP2($notaP2)
    {
        $this->notaP2 = $notaP2;
    }

    public function getNotaP2()
    {
        return $this->notaP2;
    }

    public function calcularMedia()
    {
        $calculo = ($this->notaP1 + $this->notaP2) / 2;
        return $calculo;
    }
    
    public function situacao()
    {
        if($this->calcularMedia() >= 7){
            return "Aprovado";
        } elseif ($this->calcularMedia() >= 5){
            return "Exame";
        } else {
            return "Reprovado";
        }
    }
}

$aluno1 = new Aluno("Lucca", 1976213, "OOP");
$aluno2 = new Aluno("Eduarda", 1978123, "Calculo");

$aluno1->setCurso("ADS");
$aluno1->setNotaP1(5);
$aluno1->setNotaP2(5);

$aluno2->setCurso("Arquitetura");
$aluno2->setNotaP1(7);
$aluno2->setNotaP2(8);


echo "Aluno: {$aluno1->getNome()} </br>";
echo "RA: {$aluno1->getRA()} </br>";
echo "Curso: {$aluno1->getCurso()} </br>";
echo "Disciplina: {$aluno1->getDisciplina()} </br>";
echo "Nota P1: {$aluno1->getNotaP1()} </br>";
echo "Nota P2: {$aluno1->getNotaP2()} </br>";
echo "Média: {$aluno1->situacao()} </br>";