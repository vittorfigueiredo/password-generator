<?php

$length = filter_var($_REQUEST["length"], FILTER_SANITIZE_NUMBER_INT);

if ($length > 0) {
  $password = "";
  $caracters = "ABCSEFGHIJKLMNOPQRSTUVXWYZabcdefghijklmnopqrstuvxwyz1234567890@#!$%^&*()_-+=\|]{[}:;'/>,<?";

  for ($i = 0; $i < $length; $i++) {
      $int = random_int(0, strlen($caracters));
      $password .= $caracters[$int];
  }

  echo json_encode($password);
}
?>
