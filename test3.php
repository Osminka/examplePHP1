<form method="POST">
    <h1>Вопрос N 3</h1>
    <p>Если при переплетении рук на груди наверху оказывается левая рука, то вы <br>
        способны к кокетству, правая - склонны к простоте и простодушию. 
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
    echo "<a href='test4.php'>Следующий вопрос</a>";
}
?>
