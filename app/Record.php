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

    public function dataIntoTpl($query)
    {
        foreach ($query as $row)
        {
            $this->resultat[] = $row;
        }
    }
    
    public function addRecord($title, $text, $nickname, $email)
    {
        //TODO:Написать функцию добавления новой записи в бд;
    }

    public function getRecord($number_rec)
    {
        //TODO:Написать функцию извлечения одной записи из БД;
        $query = $this->link->prepare('SELECT * FROM records WHERE `id`=:number_rec');
        $query->execute(array('number_rec' => $number_rec));
        $this->dataIntoTpl($query);
    }

    public function getRecords($number_page)
    {
        //TODO:Написать функцию извлечения группы записей из бд по номеру страниц;
        $query = $this->link->query('SELECT * FROM records ORDER BY id DESC');
        $this->dataIntoTpl($query);
    }
}