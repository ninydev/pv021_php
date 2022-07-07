<?php

namespace App\Controllers;

use App\Helpers\Mail\To as Sender;
use App\Views\Render;
use Config\App;


class MailController
{
    /**
     * Вывести форму
     */
    public function show() : void
    {
        Render::view("mail/form");
    }

    /**
     * Проверит форму
     */
    public function validator() : array
    {
        $err = []; // Массив ошибок

        /**
         * Проверка почты
         */
        if(isset($_POST['email'])) {
            if(strlen($_POST['email']) < 3){
                $err['email']['len'] = "Слишком короткое";
            }
            // ....
        } else {
            $err['email']['var'] = "Почта не передана";
        }

        /**
         * Проверка имени
         */
        if(isset($_POST['name'])) {
            if(strlen($_POST['name']) < 3){
                $err['name']['len'] = "Имя слишком короткое";
            }
            // ....
        } else {
            $err['name']['var'] = "Имя не передали";
        }

        // ...

        return $err;
    }

    /**
     * Отправит форму
     */
    public function send() :void
    {
        $varBug['err'] = $this->validator();

        // var_dump($_POST);
        // var_dump($varBug['err']);

        /**
         * Если есть ошибки - вывести форму снова
         */
        if(sizeof($varBug['err']) > 0) {
            $varBug['formData'] = $_POST;
            Render::view("mail/form", $varBug);
        }

        // Отсылка формы и вывод результатов

        $res = Sender::send(
            $_POST['email'], $_POST['name'], $_POST['message']);

        echo "<h1>Рузультаты отправки</h1>";
        echo "<pre>";
        print_r($res);
        echo "</pre>";

        $body = $_POST['email'] . "\n" . $_POST['name'] . $_POST['message'];

        $res = Sender::send(
            App::$adminEmail, "From Form", $_POST['message']);

    }

}