<?php
  $bool = rand(0, 1);

  if ($bool == 0) {
    $bool = false;
  } else {
    $bool = true;
  }

  echo json_encode($bool);
 ?>
