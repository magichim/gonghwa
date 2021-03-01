<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  extension_loaded('mysqli');
  $conn = mysqli_connect("localhost", "gonghwa", "hunmin1@", "gonghwa");

  if ($conn) {
    echo "Connect";
  } else {
    echo "PHP Test";
  }
?>