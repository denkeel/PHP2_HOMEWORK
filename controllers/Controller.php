<?php

namespace App\controllers;

use App\modules\User;

abstract class Controller
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

    public function render($template, $params = [])
    {
        $content = $this->renderTmpl($template, $params);
        return $this->renderTmpl(LAYOUT_FOLDER . '/main', [
            'content' => $content
        ]);
    }

    public function renderTmpl($template, $params = [])
    {
        ob_start();
        extract($params);
        include VIEW_DIR .  $template . '.php';
        return ob_get_clean();
    }
}