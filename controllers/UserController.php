<?php

namespace App\controllers;

use App\modules\User;

class UserController
{
    protected $action;
    protected $defaultAction;

    public function run($action)
    {
        $this->action = $action ?: $this->defaultAction;
        $method = $this->action . 'Action';
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            echo '404';
        }
    }

    public function userAction()
    {
        $params = [
          'user' => User::find($_GET['id'])
        ];
        echo $this->render('user', $params);
    }

    public function render($template, $params = [])
    {
        $content = $this->renderTmpl($template, $params);
        return $this->renderTmpl('layout/main', [
            'content' => $content
        ]);
    }

    public function renderTmpl($template, $params = [])
    {
        ob_start();
        extract($params);
        include $_SERVER['DOCUMENT_ROOT'] . '/../views/' .  $template . '.php';
        return ob_get_clean();
    }
}