<?php

 echo '<pre>';
 print_r($_POST);
 echo '</pre>';

 //Estamos trabalhando na montagem do texto
 $titulo = str_replace('#', '-', $_POST['titulo']);
 $categoria = str_replace('#', '-', $_POST['categoria']);
 $descricao = str_replace('#', '-', $_POST['descricao']);

 //implode('#', $_POST);

 $text = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

 //abrindo o arquivo
 $arquivo = fopen('arquivo.hd', 'a');
  //escrevendo o texto
 fwrite($arquivo, $text);
  //fechando o arquivo
 fclose($arquivo);
 //echo $text;
 header('Location: /phpstudy/app_help_desk/abrir_chamado.php');

?>