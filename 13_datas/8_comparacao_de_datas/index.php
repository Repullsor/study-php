<?php

  $dataA = new DateTime();
  $dataB = new DateTime();
  
  $dataC = new DateTime();

  $dataB->setDate(2026, 10, 10);
  $dataC->setDate(2026, 10, 10);

  $dataB->setTime(01, 10, 10);
  $dataC->setTime(01, 10, 10);

  if($dataB > $dataA) {
    echo "A data B é maior que a data A <br>";
  }

  if($dataA < $dataB) {
    echo "A data A é maior que a data B <br>";
  }

  if($dataA == $dataC) {
    echo "A data A e C são iguais <br>";
  }

?>