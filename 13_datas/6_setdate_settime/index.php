<?php

  $data = new DateTime();

  print_r($data);
  echo "<br>";

  $data->setDate(1999, 12, 31);

  print_r($data);
  echo "<br>";

  $data->setTime(10, 04, 00);

  print_r($data);
  echo "<br>";

  echo $data->format('d/m/y') . "<br>";

?>