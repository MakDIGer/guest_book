<?php
/**
 * Класс для работы с записями.
 * User: nikolay
 * Date: 26.04.16
 * Time: 12:05
 */

namespace app;


class Record
{
    public $title;
    public $text;
    public $nickname;
    public $email;
    public $datepost;
    public $timepost;

    public function addRecord($title, $text, $nickname, $email, $datepost, $timepost)
    {
        //TODO:Написать функцию добавления новой записи в бд;
    }

    public function getRecord($number_rec)
    {
        //TODO:Написать функцию извлечения одной записи из БД;
    }

    public function getRecords($number_page)
    {
        //TODO:Написать функцию извлечения группы записей из бд по номеру страницы
    }
}