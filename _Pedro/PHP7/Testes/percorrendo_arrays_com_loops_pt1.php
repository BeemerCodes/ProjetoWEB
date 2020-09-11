<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Babel  -->
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

  <script type="text/babel">



  </script>

  <title>Padrão PHP7 com Bootstrap e ES6</title>
  <link rel="shortcut icon" href="php.svg">

</head>

<body>

  <!-- SECTION Inicio PHP -->
  <pre>

  <?php


  $registros = [
    array('titulo' => 'Explosão Mata Presidente Do Brasil!', 'conteudo' => 'Um grupo de cerca de 30 militares e pensionistas das Forças Armadas faz um protesto em frente ao Centro de Instrução Almirante Alexandrino,<br> em Ramos, onde o presidente Jair Bolsonaro (sem partido) participa na manhã desta quinta-feira da formatura 3 mil sargentos da Marinha. '),
    array('titulo' => 'Aulas Voltam em Manaus e 90 Mil Crianças morrem de HPV', 'conteudo' => 'Desde o dia 18 de agosto, a Secretaria Estadual de Educação (Seduc) do Amazonas, por meio da Fundação de Vigilância e Saúde (FVS),<br> tem testado profissionais da rede pública em Manaus. Até 1º de setembro, foram aplicados 3.140 testes rápidos, com 922 resultados<br> positivos para Covid-19 – desses, 229 estavam com infecção recente. Para a Seduc, o dado não indica que os profissionais tenham se<br> contaminado após o retorno das aulas. Até a última atualização desta reportagem, não havia registro de alunos que morreram por causa<br> do coronavírus ou de contaminação entre estudantes. Em todo o estado do Amazonas, mais de 120 mil pessoas foram infectadas pelo<br> novo coronavírus,<br> e o número de mortos passa de 3 mil.'),
    array('titulo' => 'Medica Picada Por Cobra, Ninguém liga!??', 'conteudo' => 'Dieynne tomava banho com amigos na cachoeira quando a cobra despencou com a queda d’água da cachoeira e a atingiu. Ela foi picada duas vezes.<br Em nota, o Parque Sesc Serra Azul, responsável pela atração turística,<br> informou que a equipe de saúde do local foi chamada imediatamente, deu todas as orientações e está acompanhando o caso desde então.')
  ];
  
  $indice = 0;
/*
  while ($indice < count($registros)) {

    echo '<h4 class="text-info ml-3">', $registros[$indice]['titulo'], '</h4>';
    echo '<p class="display-5 text-capitalize ml-3 bg-dark text-light p-4">', $registros[$indice]['conteudo'], '</p>';
    echo '<button class="btn btn-group-sm btn-outline-info ml-3">Veja Mais!</button>';

    echo '<br><hr>';
    $indice++;
  };
*/
/*
  do {

    echo '<h4 class="text-info ml-3">', $registros[$indice]['titulo'], '</h4>';
    echo '<p class="display-5 text-capitalize ml-3 bg-dark text-light p-4">', $registros[$indice]['conteudo'], '</p>';
    echo '<button class="btn btn-group-sm btn-outline-info ml-3">Veja Mais!</button>';

    echo '<br><hr>';
    $indice++;

  }while($indice < count($registros));
*/

  for($indice = 0; $indice < count($registros); $indice++) {

    echo '<h4 class="text-info ml-3">', $registros[$indice]['titulo'], '</h4>';
    echo '<p class="display-5 text-capitalize ml-3 bg-dark text-light p-4">', $registros[$indice]['conteudo'], '</p>';
    echo '<button class="btn btn-group-sm btn-outline-info ml-3">Veja Mais!</button>';

    echo '<br><hr>';

  }


  #print_r($registros);

  ?>

  </pre>

  <!-- Fim PHP -->

  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>

  <script src="js/bootstrap.min.js"></script>

</body>

</html>