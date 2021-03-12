<?php
  $string = $_GET['password'];
  $length_string = strlen($string);
  $count_numbers = strlen(preg_replace('/[^\d]/','', $string));
  preg_match_all( '/[A-Z]/ui', $string, $matches);
  $count_symbols = count($matches[0]);


  $textToArray = str_split($string);
  echo '<pre>'; 
  $repeat = array_count_values($textToArray);
  print_r ($repeat);
  

  if ($length_string <> 0)
    {
      $len = $len + ($length_string * 4);
    }


  if (($count_numbers <> 0) && ($length_string <> 0) && ($count_symbols == 0))
    {
      $len = ($len + ($count_numbers * 4)) - $count_numbers;
    }


  if (($count_numbers <> 0) && ($length_string <> 0) && ($count_symbols <> 0))
    {
      $len = ($len + ($count_numbers * 4));
    }


  if (($count_symbols <> 0) && ($length_string <> 0) && ($count_numbers == 0))
    {
      $len = ($len + (($len - $count_symbols) * 2)) - $count_symbols;
    }

  if (($count_symbols <> 0) && ($length_string <> 0) && ($count_numbers <> 0))
    {
      $len = $len + (($len - $count_symbols) * 2);
    }

  echo $len;


?>