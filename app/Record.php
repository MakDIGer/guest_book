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
        $this->link->close();
    }

    public function queryData($query)
    {
        $this->link->query('SET NAMES utf8');
        $resultat = $this->link->query($query);
        // TODO: Написать добавление данных в массив;
        $this->resultat = Array();

        while ($row = mysqli_fetch_array($resultat))
        {
            $this->resultat[] = $row;
        }
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
        $this->queryData('SELECT * FROM records ORDER BY id DESC');
    }
}