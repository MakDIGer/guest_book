<?php
/**
 * Точка входа проекта "Гостевая книга"
 * Version: v1a1b1
 * User: nikolay
 * Date: 26.04.16
 * Time: 10:34
 */

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../view');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../view/compilation_cache',
));

echo $twig->render('index.tpl');