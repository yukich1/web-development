<?php
  $string = $_GET['text'];
  $first = $string[0];
  $second = $string[1];
  if (($first == '0') || ($first == '1') || ($first == '2') || ($first == '3') || ($first == '4') || ($first == '5') || ($first == '6') || ($first == '7') || ($first == '8') || ($first == '9'))
    {
      if ($second <> 0)
        {
    	  echo "No can't start on number";
        }
      else
        {
          echo "If only one symbol then it's can't be a number";
        }
     }
  else
    {
      echo "Yes";
    }
?> 
