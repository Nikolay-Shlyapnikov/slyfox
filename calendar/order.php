<?php
$PersonName = $_POST['name'];
$PersonMail = $_POST['mail'];
$PersonPhone = $_POST['phone'];
$PersonComm = $_POST['comm'];


$DayStart =  $_POST['StartDay'];

$MonthStart = $_POST['StartMonth'];

$TimeStart =   $_POST['time'];

$DayStop = $_POST['StopDay'];

$MonthStop = $_POST['StopMonth'];

$TimeStop =  $_POST['Stoptime'];
$YearStart = $_POST['startYear'];

$YearStop = $_POST['stopYear'];

if ($PersonName == 'Slyfoxmedia'){


$ThisTime = $YearStart."-".$MonthStart."-".$DayStart."-".$TimeStart;
$ThanTime = $YearStop."-".$MonthStop."-".$DayStop."-".$TimeStop;

    // timestamp первой даты
 

// Количество секунд
// Функция abs нужна, чтобы не проверять какая из двух дат больше
//2021-08-23T13:30
$output_format = 'Y-m-d-H';
$step = '+1 hour';
$dates = array();
$current = strtotime($ThisTime)-10800;
$last = strtotime($ThanTime)-10800;
while( $current <= $last ) {
$dates[] = date($output_format, $current);
$current = strtotime($step, $current);
}


for($i=0;$i < count($dates); ++$i){


$host = 'localhost'; // адрес сервера 
$database = 'databaseName'; // имя базы данных
$user = 'userName'; // имя пользователя
$password = 'password'; // пароль
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

    $query ="INSERT INTO `OrderTable` (`Data`) VALUES ('$dates[$i]')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
   
    mysqli_close($link);

}
header('Location: http://slyfoxmedia.ru/studio.php');
}
else{
	$nameErr = $emailErr = $genderErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";
	$to = "slyfoxmedia@mail.ru"; // емаил отправляемый менеджерам компании
	$tema = "Бронирование"; // тема полученного емайла
	$message .= "Человек по имени: ".$_POST['name']." забронировал <br>";//присвоить переменной значение, полученное из формы name=name
	$message .= "Его E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
	$message .= "Его номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
	$message .= "Его комментарии: ".$_POST['comm']."<br>"; //полученное из формы name=message
	$message .="Он забронировал с ".$YearStart." ".$DayStart." ".$MonthStart." ".$TimeStart." по ".$YearStop." ".$DayStop." ".$MonthStop." ".$TimeStop."<br>";
	$permitted_chars = '0123456789SLYFX'; // Сгенерируем новое имя файла через функцию str_shuffle() длинну генерации заадём с помощью функции substr()
	$orderId = substr(str_shuffle($permitted_chars), 0, 7); 
	$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
	  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
	mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных 
	header('Location: http://slyfoxmedia.ru/AfterOrder.php');
}
?>

