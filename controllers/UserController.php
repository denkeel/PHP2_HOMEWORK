<?php

namespace App\controllers;

use App\modules\User;

class UserController extends Controller
{
    public function userAction()
    {
        //var_dump(LAYOUT_DIR);
        $params = [
            'user' => User::find($_GET['id']),
        ];
        echo $this->render('user', $params);
    }

    public function usersAction()
    {
        //var_dump(User::getAll());
        $params = [
            'users' => User::getAll(),
        ];
        echo $this->render('users', $params);
    }

    public function userUpdateAction()
    {
        User::update($_GET['id'], $_GET['name']);
        $params = [
            'user' => User::find($_GET['id']),
        ];
        echo $this->render('update', $params);
    }
}
