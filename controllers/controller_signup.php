<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Signup extends Controller
{
    function __construct() {
        $this->model = new Model_Sigup();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        if(!$data['status_reg'])
            $this->view->generate('signup_view.php', '', $data);
        else{
            Route::headerLocation("/login");         
        }
    }
}
