<?php  
        $to = "info@qupe.ru";

        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $username = $_POST["username"];

        mail($to, "тестовое задание qupe, Денис Жукавин.", "Имя: ".$username."\nНомер: ".$phone."\nemail: ".$email."\nРезюме: https://hh.ru/resume/ad2b8f69ff0b1f420e0039ed1f3549634f4446\nЗатраченное время: ~6 часов\nСсылка на страницу с формой связи: http://gmdatwo2.beget.tech/\nссылка на GitHub с кодом: https://github.com/DWellG1t/qupeTestForm");
        
?>