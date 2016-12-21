<?php

class Controller_Login extends Controller
{
    function __construct() {
        $this->model = new Model_Login();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        if(!$data['status_log'])
        {
            $this->view->generate('login_view.php', $data);
        }
        else
        {
            Route::headerLocation("/cabinet");
        }
    }
}
