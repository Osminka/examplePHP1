<?php
  // Инициируем сессию
  session_start();
  // Помещаем значение в сессию
//   $_SESSION['name'] = "value";
  // Помещаем массив в сессию
  $arr = array();
  array_push($arr, "lera");
  $_SESSION['arr'] = $arr;
  // Выводим ссылку на другую страницу
  echo "<a href='p2.php'>другая страница</a>";
?>
