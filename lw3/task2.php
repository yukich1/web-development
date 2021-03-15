<?php
  $string = $_GET['text'];
  $first = $string[0];
  $second = $string[1];
  if ($string <> 0)
    {
      if (ctype_digit($first))
        {
        if ($second <> 0)
          {
    	      echo "No can't start on number";
          }
        }
        else
         {
           echo "If only one symbol then it's can't be a number";
         }
      else
      {
        echo "Yes";
      }
    }
?> 
