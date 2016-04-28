<?php
/**
 * Точка входа проекта "Гостевая книга"
 * Version: v1a1b1
 * User: nikolay
 * Date: 26.04.16
 * Time: 10:34
 */

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/Record.php';

$record = new \app\Record('localhost', 'guest_book', 'user', 'pass');

$p = isset($_GET['p']) ? htmlspecialchars($_GET['p']) : 'records';
$pp = isset($_GET['pp']) ? htmlspecialchars(($_GET['pp'])) : '1';

switch ($p) {
    case 'records':
        $record->getRecords($pp);
        break;
    case 'record':
        $record->getRecord($pp);
        break;
    case 'addRecord':
        $record->addRecord(htmlspecialchars($_POST['title']), htmlspecialchars($_POST['text']),
            htmlspecialchars($_POST['nickname']), htmlspecialchars($_POST['email']));
        $p = 'resultat';
        break;
    default :
        $record->getRecords('1');
        break;
}

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../view');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../view/compilation_cache',
));

echo $twig->render($p.'.tpl', array('items' => $record->resultat));
