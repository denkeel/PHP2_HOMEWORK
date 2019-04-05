<?php

namespace App\controllers;

use App\modules\User;

class UserController extends Controller
{
    public function userAction()
    {
        //var_dump(LAYOUT_DIR);
        $params = [
          'user' => User::find($_GET['id'])
        ];
        echo $this->render('user', $params);
    }
}