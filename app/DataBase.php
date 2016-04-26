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

    public function __construct()
    {
        //TODO Написать функцию установки линка с бд;
    }

    public function queryData($query)
    {
        //TODO Написать функцию запроса данных в бд;
    }
}