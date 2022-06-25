<?php

namespace App\Services;

class App
{
  public static function start()
  {
    self::libs();
    self::db();

  }


  //Метод который автоматически подключает все файлы с папки libs
  public static function libs()
  {
      $config = require_once "config/app.php";
      foreach ($config["libs"] as $lib){
          require_once "libs/".$lib.".php";
      }
  }

  //Подключение к базе данных
    public static function db()
    {
        $config = require_once "config/db.php";



        if ($config["enable"]){
            \R::setup('mysql:host='.$config["host"].';port='.$config["port"].';dbname='.$config["db"].'',
                $config["username"],$config["password"] );

            if (!\R::testConnection()){
                die('error database');
            }
        }
    }
}