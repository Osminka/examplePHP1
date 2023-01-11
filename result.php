<form method="POST">
    <h1>Ваш результат:</h1>
</form>

<?php

  session_start();
  $str = join(' ', $_SESSION['arr']);
  echo "<h2>";
  print_r($str);
  echo "</h2>";
  $file = fopen(__DIR__ . '/php.txt', 'r');
  for ($i = 0; $i < 16; $i++) {
      echo fgets($file);
      echo '<br>';
  }
  fclose($file);

?>

