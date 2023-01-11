<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bord{
            border: 3px solid #000 ;
            padding: 40px;
            padding-top: 0px;
            width: 35%;
        }
        p{
            margin: 0;
        }
        input {
        margin-bottom: 15px;
        }
        h4{
            margin: 0px;
        }
    </style>
</head>
<body>
    <div class="bord">
        <h1>Регистрация пользователя</h1>
        <hr>
    <form method="POST">
    <p><b>Ваше ФИО:</b></p>
    <input class="fio" type="text" name="fio" required/><span class="error"> * <?php echo $fioErr;?></span><br/> 
    <p><b>Логин:</b></p>
    <input class="login" type="text" name="login" required/><span class="error"> * <?php echo $loginErr;?></span><br/> 
    <p><b>Пароль:</b></p>
    <input class="pass" type="text" name="pass" required/><span class="error"> * <?php echo $passErr;?></span><br/> 
    <p><b>Возраст:</b></p>
    <input class="age" type="text" name="age" required/><span class="error"> * <?php echo $ageErr;?></span><br/> 
    <p><b>Пол:</b></p>
    <input class="pol" type="text" name="pol" required/><span class="error"> * <?php echo $polErr;?></span><br/> 
    <p><b>Email:</b></p>
    <input class="email" type="text" name="email" required/><span class="error"> * <?php echo $emailErr;?></span><br/>
   
    <p><input type="submit" name="butt1" value="Отправить"></p>

</form>
</div>
<?php
 if(array_key_exists('butt1', $_POST)) {
    button1();
}
function button1() {
    $fio = $_POST['fio'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $age = $_POST['age'];
    $pol = $_POST['pol'];
    $email = $_POST['email'];

    function clean($value = "") {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        
        return $value;
    }
    function check_length($value = "", $min, $max) {
        $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
        return !$result;
    }
   
    if(!empty($fio) || !empty($login) || !empty($pass) || !empty($age)|| !empty($pol)|| !empty($email)) {
        $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 
    
        if(check_length($fio, 2, 25) && check_length($login, 2, 50) && check_length($pass, 8, 50) && $email_validate) {
            echo "Спасибо за сообщение";
            session_start();
            $array = array();
            array_push($array, $fio, $login, $pass, $age, $pol, $email);
            // print_r($_SESSION['array']);
            $_SESSION['array'] = $array;
            $str = join(' ', $array);
            $fd = fopen("hello.txt", 'w');
            fwrite($fd, $str);
            fclose($fd);
        } else { // добавили сообщение
            echo "Введенные данные некорректны";
        }
    } else { // добавили сообщение
        echo "Заполните пустые поля";
    }
}
?>

</body>
</html>