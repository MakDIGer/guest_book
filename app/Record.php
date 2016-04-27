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
    const LOCALHOST = 'localhost';
    const DATABASE = 'guest_book';
    const USER = 'root';
    const PASS = 'mak2526669';

    public $title;
    public $text;
    public $nickname;
    public $email;
    public $datepost;
    public $timepost;
    public $resultat;

    private $link;

    public function __construct()
    {
        $this->link = new \mysqli(Record::LOCALHOST, Record::USER, Record::PASS, Record::DATABASE);

        if (!$this->link)
        {
            echo "Ошибка подключения к бд";
        }
    }

    public function __destruct()
    {
        mysqli_close($this->link);
    }

    public function queryData($query)
    {
        $resultat = mysqli_query($this->link, $query);
        return $resultat;
    }
    
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
        //TODO:Написать функцию извлечения группы записей из бд по номеру страниц;
    }
}