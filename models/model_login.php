<?php
/* 
 * Created by Vinimaks
 */

class Model_Login extends Model
{
    public function get_data() {
        include 'config/config.php';
        $data = array(
            'status_log' => FALSE,
            'error_log' => ""
        );
        if(isset($_POST['email'])&&isset($_POST['pwd']))
        {
            $mail = $_POST['email'];
            $pass = $_POST['pwd'];
            $user = mysql_fetch_array(mysql_query("SELECT `Id` ,`Password` FROM Users WHERE Email = '$mail' LIMIT 1"));
            if(isset($user['Id']))
            {
                if(password_verify($pass, $user['Password']))
                {
                    $data['status_log'] = TRUE;
                }
                else
                {
                     $data['error_log'] = "Неверный логин или пароль";
                }
            }
            else
            {
                $data['error_log'] = "Неверный логин или пароль";
            }
        }
        return $data;
    }
}

