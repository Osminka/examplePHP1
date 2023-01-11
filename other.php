<form method="POST">
    <h1>Вопрос N 1</h1>
    <p>Переплетите пальцы рук и вы заметите, что сверху всегда оказывается один и тот <br>
       же палец, если левый - вы человек эмоциональный, правый - у вас преобладает аналитический склад <br>
       ума. 
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
        $arr = array();
        array_push($arr, $x);
        $_SESSION['arr'] = $arr;

        echo "<a href='test2.php'>Следующий вопрос</a>";
    }

?>
