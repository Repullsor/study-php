<?php

  function velocidadeMaxima($vel) {

    //echo "O carro atinge a velocidade máxima de $vel km/h <br>";

    if(is_int($vel)) {
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    } else {
        echo "Por favor, passe um número inteiro <br>";
    }

  }

  velocidadeMaxima(200);
  velocidadeMaxima(300);
  velocidadeMaxima(400);

  // Não pode executar função que exigem parâmetros, sem um paramêtro.
  // velocidadeMaxima();

  echo "Teste Continuando <br>";

  $velocidade = 125;

  velocidadeMaxima($velocidade);

  // PHP ignora parâmetro desnecessário
  velocidadeMaxima(250, "teste");

  velocidadeMaxima("teste");

  //Mais parâmetros
  function descreverAnimal($nome, $raca) {

    echo "O $nome é da raça $raca <br>";
  }

  descreverAnimal("Caramelo", "Vira Lata");
  descreverAnimal("Shi Oh Yu", "Dragão");
  descreverAnimal("Pikachu", "Roedor");
  descreverAnimal("Poodle", "Tita"); //Os parâmetros devem ser usados da maneira correta se não a função não adianta nada

  // Poucos parâmetros
  // descreverAnimal("Poodle");

?>