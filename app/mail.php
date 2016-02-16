<?php
$to = "info@agro-wheel.ru"; // адрес куда отправлять письмо
$too = "942547@gmail.com";
$subject = "Отправка формы с сайта agro-wheel.ru"; // заголовок письма
$redirect = "http://agro-wheel.ru/"; // адрес страницы, на которую нужно перейти после отправки письма

foreach($_POST as $key => $value)
{ $fields .= $key.": ".$value." \r\n"; }
$message = $subject." \r\n".$fields;
$headers  = "Content-type:  text/plain; charset=utf-8 \r\n";
mail($to, $subject, $message, $headers);
mail($too, $subject, $message, $headers);
header('Location: '.$redirect);
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Wed Apr 22 2015 14:51:37 GMT+0000 (UTC) -->
<html data-wf-site="550f02ad50ef352451cd7d57" data-wf-page="550f02ad50ef352451cd7d58" lang="ru"></html>
