<?php


/*vetores
$diaSemana = [0 => 'Domingo', 1 => 'Segunda', 2 => 'Terça', 3 => 'Quarta', 4 => 'Quinta', 5 => 'Sexta', 6 => 'Sabado'];
echo "<pre>";

var_dump($diaSemana);
/*
//muito importante
$hoje = date('l');

var_dump($hoje);

echo "Hoje é {$diaSemana[3]}"; //Interpolação com vetor
*/
/*
$aluno = ['Matricula' => 41217, 'Nome' => 'João', ' Semestre' => 2];

echo "<prep>";

var_dump($aluno);
*/
$aluno = [ 0 => [ 'Matricula' => 634544,
                 'Nome' => 'João',
                 'Semestre' => 2],
          
          1 => [ 'Matricula' => 8548,
                 'Nome' => 'Paulo',
                 'Semestre' => 3],
          
          2 => [ 'Matricula' => 65422,
                 'Nome' => 'Maria',
                 'Semestre' => 1]];

    echo '<table border = "1">
            <tr>
                <td>Matricula</td>    
                <td>Nome</td>
                <td>Semestre</td>
            </tr>';

for( $i = 0 ; $i < count($aluno); $i++){
    
    echo " <tr>
            <td> {$aluno[$i]['Matricula']} </td>
            <td> {$aluno[$i]['Nome']} </td>
            <td> {$aluno[$i]['Semestre']} </td>
        </tr>";
}
foreach( $aluno as $ind => $val ){
    
    echo "  <tr>
                <td>{$val['Matricula']}</td>
                <td>{$val['Nome']}</td>
                <td>{$val['Semestre']}</td>
            </tr>";
}
echo '</table>';




