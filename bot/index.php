<?php

session_start();

use App\Services\App;

require_once  __DIR__ ."/vendor/autoload.php";
App::start();
require_once __DIR__ ."/router/routes.php";


//Запускаем сессию
session_start();

//Добавляем файл подключения к БД
require_once("dbconnect.php");

//Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
$_SESSION["error_messages"] = '';

//Объявляем ячейку для добавления успешных сообщений
$_SESSION["success_messages"] = '';

