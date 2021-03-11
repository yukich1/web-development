<?php
  $test_str = $_GET['text'];
  $result = preg_replace("/\s+/", " ", $test_str);
  $result = trim($test_str, " ");
  var_dump($result);
?>