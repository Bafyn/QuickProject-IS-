<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Cabinet extends Controller
{
    function action_index()
    {
        $this->view->generate('cabinet_view.php', $data);
    }
}