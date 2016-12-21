<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Sigup extends Model
{
    public function get_data() {
        include 'config/config.php';
        if(isset($_POST['lastname'])&&isset($_POST['firstname'])&&isset($_POST['patronymic'])&&isset($_POST['country']))
        {
            $lastname = mb_strtolower($_POST['lastname'],'UTF-8');
            $firstname = mb_strtolower($_POST['firstname'],'UTF-8');
            $patronymic = mb_strtolower($_POST['patronymic'],'UTF-8');
            $country = mb_strtolower($_POST['country'],'UTF-8');
            $region = mb_strtolower($_POST['region'],'UTF-8');
            $homecity = mb_strtolower($_POST['homecity'],'UTF-8');
            $homepostalcode = mb_strtolower($_POST['homepostalcode'],'UTF-8');
            $sex = mb_strtolower($_POST['sex'],'UTF-8');
            $date = mb_strtolower($_POST['day'],'UTF-8').mb_strtolower($_POST['month'],'UTF-8').mb_strtolower($_POST['year'],'UTF-8');
            $email = mb_strtolower($_POST['email'],'UTF-8');
            $email_confirm = mb_strtolower($_POST['email_confirm'],'UTF-8');
            $password = $_POST['password'];
            $verify_password = $_POST['verify_password'];
            $pwd = password_hash($password, PASSWORD_BCRYPT);
            $data = array(
                'status_reg'=>FALSE,
                'error'=>array()
            );
//            if(!$this->validateInput($lastname))
//            {
//                $errors[] = 'Фамилия должна содержать только русские символы!';
//            }
//            if(!$this->validateInput($firstname))
//            {
//                $errors[] = 'Имя должно содержать только русские символы!';
//            }
//            if(!$this->validateInput($patronymic))
//            {
//                $errors[] = 'Отчество должно содержать только русские символы!';
//            }
            if($email != $email_confirm)
            {
                $data['error'][] = 'Почты не совпадают!';
            }
            if($password != $verify_password)
            {
                $data['error'][] = 'Пароли не совпадают!';
            }
            if(count($data['error']) > 0)
                return $data;
            else {
                mysql_query("INSERT INTO `Users` VALUES (NULL,'$lastname','$firstname','$patronymic','$country','$region','$homecity','$homepostalcode','$sex','$date','$email','$pwd',NULL)",$db);
                $data['status_reg'] = TRUE;
                return $data;
            }
        }
        mysql_close($db);
    }
//    public function validateInput($str)
//    {
//        if(!preg_match('/[^а-яА-Я]+/msi', $str))
//        {
//            return FALSE;
//        }
//    }
}

