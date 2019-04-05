<?php

namespace App\controllers;

use App\modules\User;

class UserController extends Controller
{
    public function userAction()
    {
        $params = [
          'user' => User::find($_GET['id'])
        ];
        echo $this->render('user', $params);
    }
}