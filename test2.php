<form method="POST">
    <h1>Вопрос N 2</h1>
    <p>Попробуйте "прицелиться", выбрав себе мишень и глядя на нее через <br>
        своеобразную мушку - карандаш или ручку. Правый ведущий глаз говорит о твердом, настойчивом, <br>
        более агрессивном характере, левый - о мягком и уступчивом. 
    </p>
    <p>Если ответ левый - введите Л, если правый - П:</p>
    <input type="text" name="text1"/>
    <input type="submit" name="butt1" value= "Отправить"/>
</form>

<?php
if(array_key_exists('butt1', $_POST)) {
    button1();
}
function button1() {
    $x = $_POST['text1'];
    session_start();
    array_push($_SESSION['arr'], $x);
    print_r($_SESSION['arr']);
    echo "<a href='test3.php'>Следующий вопрос</a>";
}
?>

