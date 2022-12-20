<?php

  class Humano {

  }

  class Animal {

  }

  class Professor extends Humano {

  }

  $rafael = new Humano;

  $pikachu = new Animal;

  if($rafael instanceof Humano) {
    echo "Rafael é um Humano <br>";
  } else {
    echo "Rafael não é um Humano <br>";
  }

  if($pikachu instanceof Humano) {
    echo "Pikachu é um Humano <br>";
  } else {
    echo "Pikachu não é um Humano <br>";
  }

  $carvalho = new Professor;

  if($carvalho instanceof Professor) {
    echo "Carvalho é um Professor <br>";
  } else {
    echo "Carvalho não é umProfessor <br>";
  }

  if($carvalho instanceof Humano) {
    echo "Carvalho é um Humano <br>";
  } else {
    echo "Carvalho não é um Humano <br>";
  }

  if($pikachu instanceof Professor) {
    echo "Pikachu é um Professor <br>";
  } else {
    echo "Pikachu não é um professor <br>";
  }

?>