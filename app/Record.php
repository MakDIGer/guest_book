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
        try {
            $this->link = new \PDO($dsn, $user, $pass, $opt);
        } catch (\PDOException $e) {
            die('Не удалось подключиться к БД:'.$e->getMessage());
        }
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
        $datepost = date('o-m-d');
        $timepost = date('H:i:s');
        try {
            $query = $this->link->prepare('INSERT INTO records (title, text, nickname, email, datepost, timepost) 
            VALUE (:title, :text, :nickname, :email, :datepost, :timepost)');
            $query->execute(array(
                'title' => $title,
                'text' => $text,
                'nickname' => $nickname,
                'email' => $email,
                'datepost' => $datepost,
                'timepost' => $timepost
            ));
            $this->resultat[] = array(
                'title'    => 'Добавление данных в БД',
                'resultat' => 'Новая запись успешно добавлена!'
            );
        } catch (\PDOException $e) {
            $this->resultat[] = array(
                'title'    => 'Добавление данных в БД',
                'resultat' => 'Не удалось добавить данные в базу'
            );
        }
    }

    public function getRecord($number_rec)
    {
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