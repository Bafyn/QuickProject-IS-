<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Logout extends Controller
{
    function action_index()
    {
        setcookie("id", NULL, time()-3600);
        setcookie("Hasg", NULL, time()-3600);
        Route::headerLocation("/login");
    }
}
