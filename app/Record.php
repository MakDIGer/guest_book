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
    public $resultat;

    private $link;

    public function __construct($localhost, $database, $user, $pass)
    {
        $dsn = 'mysql:host='.$localhost.';dbname='.$database.';charset=utf8;';
        $opt = array(
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        );
        $this->link = new \PDO($dsn, $user, $pass, $opt);
    }

    public function __destruct()
    {
        $this->link = null;
    }

    public function queryData($query)
    {
        $resultat = $this->link->query($query);

        while ($row = $resultat->fetch()) {
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
        $this->queryData('SELECT * FROM records WHERE `id`='.$number_rec);
    }

    public function getRecords($number_page)
    {
        //TODO:Написать функцию извлечения группы записей из бд по номеру страниц;
        $this->queryData('SELECT * FROM records ORDER BY id DESC');
    }
}