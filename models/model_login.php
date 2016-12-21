<?php

/* 
 * Created by Vinimaks
 */

class Model_Login extends Model
{
    public function get_data() {
        $data["mail"] = $_POST['email'];
        $data["pwd"] = $_POST['pwd'];
        return $data;
    }
}

