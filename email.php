<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];

  if($name && $phone) {
    echo "name: $name<br> phone: $phone";
  } else {
    echo "Fisk you!";
  }