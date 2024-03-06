<?php 

class Aluno {
    public $nome;
    public $curso;
    public $disciplinas;
    public $presente = 1;

    public function faltar() {
        $this->presente = 0;
    }

    public function status() {
        return $this->presente ? 'Presente' : 'Faltou';
    }
}

$alunos = [
    new Aluno(),
    new Aluno(),
    new Aluno(),
    new Aluno(),
    new Aluno(),
];

$alunos[0]->nome = 'Lucca';
$alunos[0]->curso = 'ADS';
$alunos[0]->disciplinas = ['PHP', 'Python'];

$alunos[1]->nome = 'Fernanda';
$alunos[1]->curso = 'Farmacia';
$alunos[1]->disciplinas = ['Farmacologia'];
$alunos[1]->faltar();

$alunos[2]->nome = 'André';
$alunos[2]->curso = 'Ciencias contabeis';
$alunos[2]->disciplinas = ['Calculo I', 'Calculo II'];
$alunos[2]->faltar();

$alunos[3]->nome = 'Celso';
$alunos[3]->curso = 'Nutricao';
$alunos[3]->disciplinas = ['Disciplina I', 'Disciplina II'];
$alunos[3]->faltar();

$alunos[4]->nome = 'Eduarda';
$alunos[4]->curso = 'Arquitetura';
$alunos[4]->disciplinas = ['Autocad', 'Calculo I'];

foreach ($alunos as $aluno) {
    echo $aluno->nome . ' - ' . $aluno->status() . '<br>';
}

echo '<br>';
$totalPresentes = 0;
$totalFaltantes = 0;

foreach ($alunos as $aluno) {
    if ($aluno->presente) {
        $totalPresentes++;
    } else {
        $totalFaltantes++;
    }
}

echo 'Total de Alunos Presentes: ' . $totalPresentes . '<br>';
echo 'Total de Alunos Faltantes: ' . $totalFaltantes;
