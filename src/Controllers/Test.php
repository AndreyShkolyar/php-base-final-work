<?php

namespace App\Controllers;
class Test
{
    public function test()
    {
        echo 'Класс Test подключен';
    }

    public function put()
    {
        if (isset($_GET['parameter'])) {
            echo 'Метод put запущен с параметром ' . $_GET['parameter'];
        } else {
            echo 'Метод put запущен';
        }
    }
}