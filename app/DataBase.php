<?php
/**
 * Класс взаимодействия с БД
 * User: nikolay
 * Date: 26.04.16
 * Time: 12:33
 */

namespace app;


class DataBase
{
    public $locahost;
    public $database;
    public $user;
    public $pass;
    private $link;

    public function __construct($localhost, $database, $user, $pass)
    {
        $this->localhost = $localhost;
        $this->database = $database;
        $this->user = $user;
        $this->pass = $pass;

        //$this->link = mysqli_connect($this->localhost, $this->user, $this->pass, $this->database);

        $this->link = new \mysqli($this->localhost, $this->user, $this->pass, $this->database);

        if (!$this->link)
        {
            echo "Ошибка подключения к бд";
        }
    }

    public function queryData($query)
    {
        //TODO Написать функцию запроса данных в бд;
        
    }
}