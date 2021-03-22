<?php
  if (!$_GET['text'])
  {
    echo "Incorrected parametr";
    return;
  }

  $string = $_GET['text'];
  $firstChar = $string[0];
  if (!ctype_alnum($string))
  {
    echo "Invalid string";
    return;
  }

  if (ctype_digit($firstChar))
  {
    echo "No, can't start on number";
  }
  else
  {
    echo "Yes";
  }
?>
